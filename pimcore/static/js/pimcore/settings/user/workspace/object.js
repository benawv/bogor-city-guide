/**
 * Pimcore
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.pimcore.org/license
 *
 * @copyright  Copyright (c) 2009-2013 pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     New BSD License
 */


pimcore.registerNS("pimcore.settings.user.workspace.object");
pimcore.settings.user.workspace.object = Class.create({

    initialize: function (parent) {
        this.parent = parent;

        if(typeof this.parent.data["user"] != "undefined") {
            this.data = this.parent.data.user;
        } else if(typeof this.parent.data["role"] != "undefined") {
            this.data = this.parent.data.role;
        }
    },

    getPanel: function () {

        var availableRights = ["list","view","save","publish","unpublish","delete","rename","create","settings",
                                                                "versions","properties"];

        var gridPlugins = [];
        var storeFields = ["path"];

        var typesColumns = [
            {header: t("path"), id: "path", width: 200, sortable: false, dataIndex: 'path',
                                editor: new Ext.form.TextField({}),
                                css: "background: url(/pimcore/static/img/icon/drop-16.png) right 2px no-repeat;"}
        ];

        var check;
        for (var i=0; i<availableRights.length; i++) {

            // columns
            check = new Ext.grid.CheckColumn({
                header: t(availableRights[i]),
                dataIndex: availableRights[i],
                width: 50
            });

            typesColumns.push(check);
            gridPlugins.push(check);

            // store fields
            storeFields.push({name:availableRights[i], type: 'bool'});
        }

        storeFields.push({name: "lEdit", type: 'text'});
        storeFields.push({name: "lView", type: 'text'});
        storeFields.push({name: "layouts", type: 'text'});

        typesColumns.push({
            xtype: 'actioncolumn',
            header: t('special_settings'),
            width: 30,
            items: [{
                tooltip: t('special_settings_tooltip'),
                icon: "/pimcore/static/img/icon/cog_edit.png",
                handler: function (grid, rowIndex) {
                    var data = grid.getStore().getAt(rowIndex);
                    var callback = this.applySpecialConfigs.bind(this, data, "special");
                    var specialData = {
                        lView: data.data.lView,
                        lEdit: data.data.lEdit,
                        layouts: data.data.layouts,
                        path: data.data.path
                    };

                    var dialog = new pimcore.settings.user.workspace.special(callback, specialData, data.data.path);
                    dialog.show();
                }.bind(this)
            }]
        });



        typesColumns.push({
            xtype: 'actioncolumn',
            width: 30,
            items: [{
                tooltip: t('delete'),
                icon: "/pimcore/static/img/icon/cross.png",
                handler: function (grid, rowIndex) {
                    grid.getStore().removeAt(rowIndex);
                    this.updateRows();
                }.bind(this)
            }]
        });

        this.store = new Ext.data.JsonStore({
           autoDestroy: true,
           root: 'workspacesObject',
           idProperty: 'id',
           fields: storeFields,
           data: this.data
       });

        this.grid = new Ext.grid.EditorGridPanel({
            frame: false,
            autoScroll: true,
            store: this.store,
            columns : typesColumns,
            trackMouseOver: true,
            columnLines: true,
            stripeRows: true,
            autoExpandColumn: "path",
            autoHeight: true,
            style: "margin-bottom:20px;",
            tbar: [
                {
                    xtype: "tbtext",
                    text: "<b>" + t("objects") + "</b>"
                },
                "-","-",
                {
                    iconCls: "pimcore_icon_add",
                    text: t("add"),
                    handler: this.onAdd.bind(this)
                }
            ],
            viewConfig: {
                forceFit: true,
                listeners: {
                    rowupdated: this.updateRows.bind(this),
                    refresh: this.updateRows.bind(this)
                }
            }
        });

        this.store.on("update", this.updateRows.bind(this));
        this.grid.on("viewready", this.updateRows.bind(this));


        return this.grid;
    },

    updateRows: function () {

        var rows = Ext.get(this.grid.getEl().dom).query(".x-grid3-row");

        for (var i = 0; i < rows.length; i++) {

            var dd = new Ext.dd.DropZone(rows[i], {
                ddGroup: "element",

                getTargetFromEvent: function(e) {
                    return this.getEl();
                },

                onNodeOver : function(target, dd, e, data) {
                    return Ext.dd.DropZone.prototype.dropAllowed;
                },

                onNodeDrop : function(myRowIndex, target, dd, e, data) {

                    if(data.node.attributes.elementType != "object") {
                        return false;
                    }

                    var rec = this.grid.getStore().getAt(myRowIndex);
                    rec.set("path", data.node.attributes.path);

                    this.updateRows();

                    return true;
                }.bind(this, i)
            });
        }

    },

    onAdd: function (btn, ev) {
        var u = new this.grid.store.recordType({
            path: ""
        });
        this.grid.store.insert(0, u);

        this.updateRows();
    },

    getValues: function () {

        var values = [];
        this.store.commitChanges();

        var records = this.store.getRange();
        for (var i = 0; i < records.length; i++) {
            var currentData = records[i];
            if (currentData) {
                    values.push(currentData.data);
            }
        }

        return values;
    },

    applySpecialConfigs: function(rec, column, value) {
        rec.set("lView", value["lView"]);
        rec.set("lEdit", value["lEdit"]);
        rec.set("layouts", value["layouts"]);
    }

});