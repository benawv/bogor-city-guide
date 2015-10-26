<link rel="stylesheet" href="/website/static/mobilku/wizard-step.css" type="text/css" media="all" />

<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/data-table-1.10.4/media/css/jquery.dataTables.css" >
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/jquery-ui.css" >

<style type="text/css">

    /**
     * Responsive improvements
     */

    @media( max-width: 320px )
    {
        #newsletter-allianz
        {
            padding: 25px 16px;
        }

        .tabScroll > table > thead > tr > th:first-child,
        .tabScroll > table > tbody > tr > td:first-child,
        .tabScroll > table > tfoot > tr > td:first-child
        {
            width: 120px !important;
        }

        .tabScroll > table
        {
            margin-left: 120px !important;
        }

        /*
         * Table with checklists height fix
         */

        .tabScroll > table.tbl_ck > thead > tr > th:first-child
        {
            min-height: 73px !important;
            line-height: 73px !important;
            padding: 0 16px !important;
            background: none !important; 
        }

        .tabcontent li a.menumobile, .tabcontent li a.active{
            background: none !important;
        }


        .tabcontent li a.menumobile:hover, .tabcontent li a.active{
            background: none !important;
        }
    }

    @media ( max-width: 480px )
    {
        .tabScroll > table > thead > tr > th:first-child,
        .tabScroll > table > tbody > tr > td:first-child,
        .tabScroll > table > tfoot > tr > td:first-child
        {
            width: 120px !important;
        }

        .tabScroll > table
        {
            margin-left: 100px !important; /* 120px !important; */
        }

        .tabcontent li a.menumobile, .tabcontent li a.active{
            background: none !important;
        }


        .tabcontent li a.menumobile:hover, .tabcontent li a.active{
            background: none !important;
        }
    }

    @media ( max-width: 991px )
    {
        .tabcontent
        {
            width: 100% !important;
        }

        .tabScroll > table.tbl_ck
        {
            margin-left: 100px;
        }

        .menutab_dekstop
        {
            float: left;
            margin-right: 20px;
            width: 100% !important;
            margin-bottom: 20px !important;
            background: none !important; 
        }

        .menutab_dekstop > ul > li > a
        {
            width: 100% !important;
            background: none !important; 
        }

        .tabScroll > table
        {
            border-collapse: separate;
            margin-left: 220px; /*240px;*/
        }

        .tabScroll > table > thead > tr > th:first-child,
        .tabScroll > table > tbody > tr > td:first-child,
        .tabScroll > table > tfoot > tr > td:first-child
        {
            position: absolute;
            z-index: 2;
            left: 0;
            width: 240px;
            top: auto;
            /* border: solid 1px red; */
        }
    }

    @media ( min-width: 992px )
    {
        .tabcontent
        {
             /*(width: 58% !important;*/
            width: 77% !important;
            overflow-x: hidden !important;
        }

        .menutab_dekstop
        {
            /*margin-right: 12%;
            width: 30%;*/
            position: relative;
            width: 20%;
            background: none !important; 
        }

        .menutab_dekstop > ul
        {
            position: relative;
            background: none !important; 
        }

        .menutab_dekstop > ul > li
        {
            background: none !important; 
            list-style: none;
            display: block;
            position: relative;
        }

        .menutab_dekstop > ul > li > a
        {
            display: block;
            width: 100%;
            background: none !important; 
        }
    }

    /**
     * jQuery DataTable Replacement
     * http://jsfiddle.net/emn13/YMvk9/
     */

    .tabcontent
    {
        width: 77%;
    }

    .tabcontent > ul > li
    {
        position: relative;
    }

    .tabScroll
    {
        width: 100%; /*600px;*/
        overflow-x: scroll;
        overflow-y: auto;
        margin: 0;
        padding: 0;

    }

    .tabScroll > table.tbl_ck > thead > tr > th:first-child,
    .tabScroll > table.tbl_ck > tbody > tr > td:first-child,
    .tabScroll > table.tbl_ck > tfoot > tr > td:first-child
    {
        width: 100px;
    }

    .tabScroll > table td,
    .tabScroll > table th,
    {
        margin: 0;
        white-space: nowrap;
    }

    .tabScroll > table > thead > tr > th
    {
        background: #f5f6f6;
        font-weight: bold;
        border-bottom: solid 1px #ddd;
        padding: 16px;
    }

    .tabScroll > table > tbody > tr > td,
    .tabScroll > table > tfoot > tr > td
    {
        background: #f9f9f9;
        border-bottom: solid 1px #ddd;
        padding: 8px 16px;
        /*background: #f5f6f6 !important;*/
    }

    .tabScroll > table > tbody > tr:nth-child(even) > td,
    .tabScroll > table > tfoot > tr:nth-child(even) > td
    {
        background: #cdedf8 !important;
    }

    .tabScroll > table > tfoot > tr > td:nth-child(3),
    .tabScroll > table > tfoot > tr > td:nth-child(4)
    {
        /*background: #e2e3e3 !important;*/
    }

    .tabScroll > table > tfoot > tr > td:first-child
    {
        /* display: none; */
        /*visibility: hidden;*/
        border-top: solid 1px #ddd;
        border-bottom: none !important;
    }

    .tabScroll > table > thead > tr > th:nth-child(2),
    .tabScroll > table > tbody > tr > td:nth-child(2),
    .tabScroll > table > tfoot > tr > td:nth-child(2)
    {
        min-width: 280px;
    }

    .tooltips{
        font-family: Arial,Helvetica,sans-serif;
        font-size: 12px;
        color: rgb(213, 14, 44);
        font-weight: bold;
    }
</style>

<script>
    function adjustTable()
    {
        $( '.tabScroll > table' ).each(function(index, value){
            $( this ).find( 'td:first-child' ).each( function( index, value ){
                var fixedColHeight = $( this ).outerHeight();
                $( this ).parent().find( 'td:not(:first-child)' ).css( 'height', fixedColHeight + 'px' );
            });
        });
    }
</script>

<!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->

<!--script src="/website/static/js/masonry.min.js" type="text/javascript"></script-->

<!--   plugins   -->

<script src="/website/static/mobilku/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="/website/static/mobilku/wizard.js"></script>

<!--
<script src="/website/static/mobilku/data-table-1.10.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="/website/static/mobilku/data-table-1.10.4/media/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/data-table-1.10.4/media/js/dataTables.editor.min.js" type="text/javascript"></script>
-->

<script src="/website/static/mobilku/jquery.validate.min.js"></script>
<script src="/website/static/mobilku/jquery-ui.js"></script>
<!-- <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> -->

<script>
    // $(function() {
    //     $( "#accordion" ).accordion({
    //       collapsible: true
    //     });
    // });

    $(document).ready(function() {
    function close_accordion_section() {
        $('.accordion .accordion-section-title').removeClass('active');
        $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
    }
 
    $('.accordion-section-title').click(function(e) {
        // Grab current anchor value
        var currentAttrValue = $(this).attr('href');
 
        if($(e.target).is('.active')) {
            close_accordion_section();
        }else {
            close_accordion_section();
 
            // Add active class to section title
            $(this).addClass('active');
            // Open up the hidden content panel
            $('.accordion ' + currentAttrValue).slideDown(300).addClass('open'); 
        }
 
        e.preventDefault();
    });
});
</script>

<style type="text/css">
/*----- Accordion -----*/
.accordion, .accordion * {
    -webkit-box-sizing:border-box; 
    -moz-box-sizing:border-box; 
    box-sizing:border-box;
}
 
.accordion {
    overflow:hidden;
    box-shadow:0px 1px 3px rgba(0,0,0,0.25);
    border-radius:3px;
    background:#f7f7f7;
}
 
/*----- Section Titles -----*/
.accordion-section-title {
    width:100%;
    padding:15px;
    display:inline-block;
    border-bottom:1px solid #1a1a1a;
    background:#eee;
    transition:all linear 0.15s;
    /* Type */
    font-size:1.200em;
    text-shadow:0px 1px 0px #1a1a1a;
    color:#1a1a1a;
}
 
.accordion-section-title.active, .accordion-section-title:hover {
    background:#003781;
    /* Type */
    color:#fff;
    text-decoration:none;
}
 
.accordion-section:last-child .accordion-section-title {
    border-bottom:none;
}
 
/*----- Section Content -----*/
.accordion-section-content {
    padding:15px;
    display:none;
}
</style>

<style type="text/css">
.ui-autocomplete {
    max-height: 300px;
    overflow-y: auto;   /* prevent horizontal scrollbar */
    overflow-x: auto; /* add padding to account for vertical scrollbar */
    z-index:1000 !important;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: 14px !important;
    font-weight: normal !important;
}
.ui-state-focus {
    background: none !important;
    background-color: #0099FF !important;
    border: none !important;
    color: white !important;
}
.positionIcon{
    margin-top: -8px;
}
.custom-combobox.customCssComboBox{
    width: 100% !important;
}
.custom-combobox {
    position: relative;
    display: inline-block;
    z-index:1000 !important;
}
.heading.clearfix.pagenav.nav-sticky{
    z-index: 9999 !important;
}
.custom-combobox-toggle {
    position: absolute;
    top: 0;
    bottom: 0;
    margin-left: -34px;
    padding: 0;
    background-color: white !important;
    border-top-right-radius: 0 !important;
    border-bottom-right-radius: 0 !important;
    /*width: 28px !important;*/
}
.custom-combobox-input {
    margin: 0;
    padding: 5px 10px;
    background-color: white !important;
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: 14px !important;
    font-weight: normal !important;
    border-bottom-left-radius: 0 !important;
    border-top-left-radius: 0 !important;
    width: 100% !important;
}
.position-text{
    text-align: right;
}
</style>

  <script>
  (function( $ ) {
    $.widget( "custom.combobox", {
      _create: function() {
        this.wrapper = $( "<span>" )
          .addClass( "custom-combobox customCssComboBox" )
          .insertAfter( this.element );
 
        this.element.hide();
        this._createAutocomplete();
        this._createShowAllButton();
      },
 
      _createAutocomplete: function() {
        var selected = this.element.children( ":selected" ),
          value = selected.val() ? selected.text() : "";
 
        this.input = $( "<input>" )
          .appendTo( this.wrapper )
          .val( value )
          .attr( "tabIndex", "4" )
          .attr( "title", "" )
          .addClass( "custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left" )
          .autocomplete({
            delay: 0,
            minLength: 0,
            source: $.proxy( this, "_source" )
          })
          .tooltip({
            tooltipClass: "ui-state-highlight"
          });
 
        this._on( this.input, {
          autocompleteselect: function( event, ui ) {
            ui.item.option.selected = true;
            this._trigger( "select", event, {
              item: ui.item.option
            });
          },
 
          autocompletechange: "_removeIfInvalid"
        });
      },
 
      _createShowAllButton: function() {
        var input = this.input,
          wasOpen = false;
 
        $( "<a>" )
          .attr( "tabIndex", -1 )
          .attr( "title", "Show All Items" )
          .tooltip()
          .appendTo( this.wrapper )
          .button({
            icons: {
              primary: "ui-icon-triangle-1-s"
            },
            text: false
          })
          .removeClass( "ui-corner-all" )
          .addClass( "custom-combobox-toggle ui-corner-right" )
          .mousedown(function() {
            wasOpen = input.autocomplete( "widget" ).is( ":visible" );
          })
          .click(function() {
            input.focus();
 
            // Close if already visible
            if ( wasOpen ) {
              return;
            }
 
            // Pass empty string as value to search for, displaying all results
            input.autocomplete( "search", "" );
          });
      },
 
      _source: function( request, response ) {
        var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
        response( this.element.children( "option" ).map(function() {
          var text = $( this ).text();
          if ( this.value && ( !request.term || matcher.test(text) ) )
            return {
              label: text,
              value: text,
              option: this
            };
        }) );
      },
 
      _removeIfInvalid: function( event, ui ) {
 
        // Selected an item, nothing to do
        if ( ui.item ) {
          return;
        }
 
        // Search for a match (case-insensitive)
        var value = this.input.val(),
          valueLowerCase = value.toLowerCase(),
          valid = false;
        this.element.children( "option" ).each(function() {
          if ( $( this ).text().toLowerCase() === valueLowerCase ) {
            this.selected = valid = true;
            return false;
          }
        });
 
        // Found a match, nothing to do
        if ( valid ) {
          return;
        }
 
        // Remove invalid value
        this.input
          .val( "" )
          .attr( "title", value + " didn't match any item" )
          .tooltip( "open" );
        this.element.val( "" );
        this._delay(function() {
          this.input.tooltip( "close" ).attr( "title", "" );
        }, 2500 );
        this.input.autocomplete( "instance" ).term = "";
      },
 
      _destroy: function() {
        this.wrapper.remove();
        this.element.show();
      }
    });
  })( jQuery );
 $(document).ready(function(){
    $( '#merk, #model' ).combobox({
        select: function (event, ui) { 
        // alert(this.value);
        var a = $(this).attr('id');
        if (a=="merk") {
            //code
            a=1;
        }else{
            a=2;
        }
        
        $.ajax({
               "url" : "/getdatamobil/",
               "type" : "POST",
               "data" : "brand=" + $(this).val()+"&attrs="+a,
               
               "success" : function(response){
                        var getResult=JSON.parse(response);
                        if (getResult.type==1) {
                            //code
                            var i=0;
                            $('.model-form').html("");
                            $('.model-form').html("<option value=''>Silahkan pilih</option>");
                            for(; i<getResult.bodytype.length; i++){
                            //console.log(getResult.model_name[i]);
                            $('.model-form').append("<option value='"+getResult.model_o_id[i]+"'>"+getResult.model_name[i]+"</option>");
                            }
                        }else{
                            var i=0;
                            //$('.model-form').html("");
                            //$('.model-form').html("<option value=''>Silahkan pilih</option>");
                            for(; i<getResult.bodytype.length; i++){
                            $('#tipe').val(getResult.bodytype[i]);
                            $('#kapasitas').val(getResult.seatingcapacity[i]);
                            }
                        }
                
                
            }
               
        
        });
        } 
    });
    // $( "#model" ).combobox();
    $( "#toggle" ).click(function() {
      $( "#combobox" ).toggle();
    });
  });
  </script>
</head>
<body>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '727536864031162',
            xfbml      : true,
            version    : 'v2.3'
        });
    };

    (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
$(document).ready(function(){
    $(".next-form").on("click", function(){
        $("#next").attr("tabindex","15");
        //alert("yeeee");
    });
    
});

$(document).keyup(function(e){
    if (e.keyCode==9){
        var node = document.activeElement;
        while (node.nodeName != "FORM" && node.parentNode) {
            node = node.parentNode;
        }
        console.log(node.id);
        if(node.id !== 'myform'){
            if ($(".first").hasClass('active')){
                document.getElementById("tahun_pembuatan").focus();
            }else if ($(".second").hasClass('active')){
                document.getElementById("nama").focus();
            }
        }
    }
});
</script>
<!-- End of Header -->

<div id="newsletter-allianz" class="full-w bg-white">

    <div class="description">

        <div class="wizard-container">
            <form id="myform" method="get" action="" class="">
            <div class="card wizard-card ct-wizard-blue customArrow" id="wizard">

                <!--
                    You can switch "ct-wizard-orange" with one of the next bright colors:
                    "ct-wizard-blue",
                    "ct-wizard-green",
                    "ct-wizard-orange",
                    "ct-wizard-red"
                -->

                <div class="wizard-header"></div>

                <ul>
                    <li class="first"><a href="#data-mobil" data-toggle="tab"><i class="fa fa-car fa-2x"></i>&nbsp;&nbsp;&nbsp;Data Mobil</a></li>
                    <li class="second"><a href="#jenis-asuransi" data-toggle="tab"><i class="fa fa-pencil-square-o fa-2x"></i>&nbsp;&nbsp;&nbsp;Jenis Asuransi</a></li>
                    <li class="third active"><a href="#hasil-kalkulasi" data-toggle="tab"><i class="fa fa-calculator fa-2x"></i>&nbsp;&nbsp;&nbsp;Hasil Kalkulasi</a></li>
                </ul>

                <div class="tab-content">


                    <div class="tab-pane active" id="hasil-kalkulasi">

                        <div class="accordion">
                            <div class="accordion-section">
                                <a class="accordion-section-title" href="#accordion-1">Paket</a>
                                 
                                <div id="accordion-1" class="accordion-section-content">
                                    <!-- <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p> -->
                                    <div class="row">
                                        <div class="col-sm-12" id="accordion">
                                            <!-- <div class="paket" id="paket" href="javascript:void(0);">Paket</div> -->

                                            <div class="tabwrap" id="row1">

                                                <div class="menutab_dekstop">
                                                    <ul>
                                                        <li><a id="open_tab_1_1" href="javascript:void(0);">Mobilku Basic <input name="paket" id="paket_1_1" type="checkbox" class="paketchecked check_1_1" style="float:right;"></a></li>
                                                        <li><a id="open_tab_1_2" href="javascript:void(0);">Mobilku Standar <input name="paket" id="paket_1_2" type="checkbox" class="paketchecked check_1_2" style="float:right;"></a></li>
                                                        <li><a id="open_tab_1_3" href="javascript:void(0);">Mobilku Premier <input name="paket" id="paket_1_3" type="checkbox" class="paketchecked check_1_3" style="float:right;"></a></li>
                                                    </ul> 
                                                </div><!--/ .menutab_desktop -->

                                                <div class="tabcontent" id="tabcontent_2">
                                                    <ul>
                                                        <li>
                                                            <a id="open_tab_1_1_m" class="menumobile active" href="javascript:void(0);">Mobilku Basic <input name="paket" id="paket_1_1" type="checkbox" class="paketchecked check_1_1" style="float:right;"></a>
                                                            <div id="tabcontent_1_1" class="content_show showme show_1">
                                                                <div class="tabScroll">
                                                                    <table id="myTable2" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="">Cakupan</th>
                                                                                <th class="position-text">Premi</th>
                                                                                <!-- <th class="">Insured Value</th>
                                                                                <th class="">Rate</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td id="jenisasuransi">Komprehensif</td>
                                                                                <td class='compre_prem position-text'>-</td>
                                                                                <!-- <td class='compre_val'>-</td>
                                                                                <td class='compre_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggung Jawab Hukum Pihak Ketiga</td>
                                                                                <td class='tpl_prem position-text'>-</td>
                                                                                <!-- <td class='tpl_val'>-</td>
                                                                                <td class='tpl_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Biaya Pengobatan</td>
                                                                                <td class='med_ex_prem position-text'>-</td>
                                                                                <!-- <td class='med_ex_val'>-</td>
                                                                                <td class='med_ex_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggung Jawab Hukum Terhadap Penumpang</td>
                                                                                <td class='pll_prem position-text'>-</td>
                                                                                <!-- <td class='pll_val'>-</td>
                                                                                <td class='pll_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Personal Effect</td>
                                                                                <td class='personal_ef_prem position-text'>-</td>
                                                                                <!-- <td class='personal_ef_val'>-</td>
                                                                                <td class='personal_ef_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Banjir</td>
                                                                                <td class='flood_prem position-text'>-</td>
                                                                                <!-- <td class='flood_val'>-</td>
                                                                                <td class='flood_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gempa Bumi</td>
                                                                                <td class='earthquake_prem position-text'>-</td>
                                                                                <!-- <td class='earthquake_val'>-</td>
                                                                                <td class='earthquake_presen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pemogokan, Kerusuhan dan Huruhara</td>
                                                                                <td class='riot_prem position-text'>-</td>
                                                                                <!-- <td class='riot_val'>-</td>
                                                                                <td class='riot_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Terorisme dan Sabotase</td>
                                                                                <td class='terror_prem position-text'>-</td>
                                                                                <!-- <td class='terror_val'>-</td>
                                                                                <td class='terror_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecelakaan Diri Penumpang</td>
                                                                                <td class='passenger_prem position-text'>-</td>
                                                                                <!-- <td class='passenger_val'>-</td>
                                                                                <td class='passenger_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecelakaan Diri Pengendara</td>
                                                                                <td class='pa_prem position-text'>-</td>
                                                                                <!-- <td class='pa_val'>-</td>
                                                                                <td class='pa_persen'>-</t -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Emergency Roadside Assistance (ERA)</td>
                                                                                <td class='era_prem position-text'>-</td>
                                                                                <!-- <td class='era_val'>-</td>
                                                                                <td class='era_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Bengkel Rekanan</td>
                                                                                <td class='workshop_prem position-text'>-</td>
                                                                                <!-- <td class='workshop_val'>-</td>
                                                                                <td class='workshop_persen'>-</td> -->
                                                                            </tr>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <td style="background: #e2e3e3;">Total Premi*</td>
                                                                                    <td style="background: #e2e3e3;" class='totalPremium position-text'></td>
                                                                                    <!-- <td></td>
                                                                                    <td></td> -->
                                                                                </tr>
                                                                            </tfoot>
                                                                        </tbody>
                                                                    </table>

                                                                    <!--
                                                                    <div class="total_premium_p_standar">
                                                                    <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                    </div>
                                                                    -->

                                                                </div><!--/ .tabScroll -->
                                                            </div><!--/ .content_show -->
                                                        </li>
                                                        <li>
                                                            <a id="open_tab_1_2_m" class="menumobile" href="javascript:void(0);">Mobilku Standar <input name="paket" id="paket_1_2" type="checkbox" class="paketchecked check_1_2" style="float:right;"></a>
                                                            <div id="tabcontent_1_2" class="content_show show_1">
                                                                <div class="tabScroll">
                                                                    <table id="myTable3" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="">Cakupan</th>
                                                                                <!-- <th class="">Insured Value</th>
                                                                                <th class="">Rate</th> -->
                                                                                <th class="position-text">Premi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td id="jenisasuransi2">Komprehensif</td>
                                                                                <!-- <td class='compre_val2'>-</td>
                                                                                <td class='compre_persen2'>-</td> -->
                                                                                <td class='compre_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggung Jawab Hukum Pihak Ketiga</td>
                                                                                <!-- <td class='tpl_val2'>-</td>
                                                                                <td class='tpl_persen2'>-</td> -->
                                                                                <td class='tpl_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Biaya Pengobatan</td>
                                                                                <!-- <td class='med_ex_val2'>-</td>
                                                                                <td class='med_ex_persen2'>-</td> -->
                                                                                <td class='med_ex_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggung Jawab Hukum Terhadap Penumpang</td>
                                                                                <!-- <td class='pll_val2'>-</td>
                                                                                <td class='pll_persen2'>-</td> -->
                                                                                <td class='pll_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Personal Effect</td>
                                                                                <!-- <td class='personal_ef_val2'>-</td>
                                                                                <td class='personal_ef_persen2'>-</td> -->
                                                                                <td class='personal_ef_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Banjir</td>
                                                                                <!-- <td class='flood_val2'>-</td>
                                                                                <td class='flood_persen2'>-</td> -->
                                                                                <td class='flood_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gempa Bumi</td>
                                                                                <!-- <td class='earthquake_val2'>-</td>
                                                                                <td class='earthquake_presen2'>-</td> -->
                                                                                <td class='earthquake_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pemogokan, Kerusuhan dan Huruhara</td>
                                                                                <!-- <td class='riot_val2'>-</td>
                                                                                <td class='riot_persen2'>-</td> -->
                                                                                <td class='riot_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Terorisme dan Sabotase</td>
                                                                                <!-- <td class='terror_val2'>-</td>
                                                                                <td class='terror_persen2'>-</td> -->
                                                                                <td class='terror_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecelakaan Diri Penumpang</td>
                                                                                <!-- <td class='passenger_val2'>-</td>
                                                                                <td class='passenger_persen2'>-</td> -->
                                                                                <td class='passenger_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecelakaan Diri Pengendara</td>
                                                                                <!-- <td class='pa_val2'>-</td>
                                                                                <td class='pa_persen2'>-</td> -->
                                                                                <td class='pa_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Emergency Roadside Assistance (ERA)</td>
                                                                                <!-- <td class='era_val2'>-</td>
                                                                                <td class='era_persen2'>-</td> -->
                                                                                <td class='era_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Bengkel Rekanan</td>
                                                                                <!-- <td class='workshop_val2'>-</td>
                                                                                <td class='workshop_persen2'>-</td> -->
                                                                                <td class='workshop_prem2 position-text'>-</td>
                                                                            </tr>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <td style="background: #e2e3e3;">Total Premi*</td>
                                                                                    <!-- <td></td>
                                                                                    <td></td> -->
                                                                                    <td style="background: #e2e3e3;" class='totalPremium2 position-text'></td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </tbody>
                                                                    </table>

                                                                    <!--
                                                                    <div class="total_premium_p_standar2">
                                                                    <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                    </div>
                                                                    -->

                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <a id="open_tab_1_3_m" class="menumobile" href="javascript:void(0);">Mobilku Premier <input name="paket" id="paket_1_3" type="checkbox" class="paketchecked check_1_3" style="float:right;"></a>
                                                            <div id="tabcontent_1_3" class="content_show show_1">
                                                                <div class="tabScroll">
                                                                    <table id="myTable4" class="display" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="">Cakupan</th>
                                                                                <!-- <th class="">Insured Value</th>
                                                                                <th class="">Rate</th> -->
                                                                                <th class="position-text">Premi</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td id="jenisasuransi3">Komprehensif</td>
                                                                                <!-- <td class='compre_val'>-</td>
                                                                                <td class='compre_persen'>-</td> -->
                                                                                <td class='compre_prem position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggung Jawab Hukum Pihak Ketiga</td>
                                                                                <!-- <td class='tpl_val3'>-</td>
                                                                                <td class='tpl_persen3'>-</td> -->
                                                                                <td class='tpl_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Biaya Pengobatan</td>
                                                                                <!-- <td class='med_ex_val3'>-</td>
                                                                                <td class='med_ex_persen3'>-</td> -->
                                                                                <td class='med_ex_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Tanggung Jawab Hukum Terhadap Penumpang</td>
                                                                                <!-- <td class='pll_val3'>-</td>
                                                                                <td class='pll_persen3'>-</td> -->
                                                                                <td class='pll_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Personal Effect</td>
                                                                                <!-- <td class='personal_ef_val3'>-</td>
                                                                                <td class='personal_ef_persen3'>-</td> -->
                                                                                <td class='personal_ef_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Banjir</td>
                                                                                <!-- <td class='flood_val3'>-</td>
                                                                                <td class='flood_persen3'>-</td> -->
                                                                                <td class='flood_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Gempa Bumi</td>
                                                                                <!-- <td class='earthquake_val3'>-</td>
                                                                                <td class='earthquake_presen3'>-</td> -->
                                                                                <td class='earthquake_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Pemogokan, Kerusuhan dan Huruhara</td>
                                                                                <!-- <td class='riot_val3'>-</td>
                                                                                <td class='riot_persen3'>-</td> -->
                                                                                <td class='riot_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Terorisme dan Sabotase</td>
                                                                                <!-- <td class='terror_val3'>-</td>
                                                                                <td class='terror_persen3'>-</td> -->
                                                                                <td class='terror_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecelakaan Diri Penumpang</td>
                                                                                <!-- <td class='passenger_val3'>-</td>
                                                                                <td class='passenger_ id="earthquake_1_3"persen3'>-</td> -->
                                                                                 <td class='passenger_prem3 position-text'>-</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Kecelakaan Diri Pengendara</td>
                                                                                <!-- <td class='pa_val3'>-</td>
                                                                                <td class='pa_persen3'> id="riot_1_3"-</td> -->
                                                                                <td class='pa_prem3 position-text'>-</td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td>Emergency Roadside Assistance (ERA)</td>
                                                                                <!-- <td class='era_val3'>-</td>
                                                                                <td class='era_persen3'>-</td> -->
                                                                                <td class='era_prem3 position-text '>-</td>
                                                                            </tr>
                                                                             <tr>
                                                                                <td>Bengkel Rekanan</td>
                                                                                <!-- <td class='workshop_val3'>-</td>
                                                                                <td class='workshop_persen3'>-</td> -->
                                                                                <td class='workshop_prem3 position-text '>-</td>
                                                                            </tr>
                                                                            <tfoot>
                                                                                <tr>
                                                                                    <!-- <td></td>
                                                                                    <td></td> -->
                                                                                    <td style="background: #e2e3e3;">Total Premi*</td>
                                                                                    <td style="background: #e2e3e3;" class='totalPremium3 position-text'></td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </tbody>
                                                                    </table>

                                                                    <!--
                                                                    <div class="total_premium_p_standar3">
                                                                        <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                    </div>
                                                                    -->
                                                                </div><!--/ .tabScroll -->  
                                                            </div><!--/ .content_show -->
                                                        <div id="note_1">
                                                            * Total premi yang tercantum belum termasuk biaya administrasi maksimal sebesar Rp. 32.000,- (harga disesuaikan dengan premi yang di ambil)
                                                        </div>
                                                        </li>
                                                    </ul>
                                                </div><!--/ .tabcontent -->
                                            </div><!--/ .tabwrap -->
                                        </div><!--/ .col-sm-12 -->
                                    </div><!--/ .row -->
                                </div><!--end .accordion-section-content-->
                            </div><!--end .accordion-section-->
                        </div><!--end .accordion-->
                        &nbsp

                        <div class="accordion">
                            <div class="accordion-section">
                                <a class="accordion-section-title" href="#accordion-2">Non Paket</a>
                                 
                                <div id="accordion-2" class="accordion-section-content">
                                    <!-- <p>Mauris interdum fringilla augue vitae tincidunt. Curabitur vitae tortor id eros euismod ultrices. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent nulla mi, rutrum ut feugiat at, vestibulum ut neque? Cras tincidunt enim vel aliquet facilisis. Duis congue ullamcorper vehicula. Proin nunc lacus, semper sit amet elit sit amet, aliquet pulvinar erat. Nunc pretium quis sapien eu rhoncus. Suspendisse ornare gravida mi, et placerat tellus tempor vitae.</p> -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <!-- <div class="paket">Non - Paket</div> -->
                                            <div class="tabwrap">

                                                <div class="menutab_dekstop">
                                                    <ul>
                                                        <li>
                                                            <a id="open_tab_2_1" href="javascript:void(0);">Non Paket <input name="paket" id="paket_2_1" type="checkbox" class="paketchecked" style="float:right;"></a>
                                                        </li>
                                                    </ul>
                                                </div><!--/ .menutab_dekstop -->

                                                <div class="tabcontent" id="tabcontent_2">

                                                    <ul>
                                                        <li>
                                                            <a id="open_tab_2_1_m" class="menumobile active" href="javascript:void(0);">Non Paket <input name="paket" id="paket_2_1" type="checkbox" class="paketchecked check_2_1" style="float:right;"></a>
                                                            <div id="tabcontent_2_1" class="content_show showme show_2">
                                                                <div class="tabScroll">
                                                                    <table id="myTable5" class="display tbl_ck" cellspacing="0" width="100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="">Pilih</th>
                                                                                <th class="">Cakupan</th>
                                                                                <th class="">Insured Value</th>
                                                                                <th class="position-text">Premi</th>
                                                                                <!-- <th class="">Insured Value</th>
                                                                                <th class="">Rate</th> -->
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class='no_compre_is_calc' name="no_compre_is_calc" checked data-angka="0" data-target="no_compre_prem" disabled="disabled">
                                                                                </td>
                                                                                <td id="nojenisasuransi" class="no_pack">Komprehensif</td>
                                                                                <td></td>
                                                                                <td id="no_compre" class='no_compre_prem position-text no_pack'>-</td>
                                                                                <!-- <td class='no_compre_val'>-</td>
                                                                                <td class='no_compre_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class='no_tpl_is_calc' id="no_tpl_is_calc" name="no_tpl_is_calc" checked data-insured="no_tpl_val" data-angka="0" data-target="no_tpl_prem">
                                                                                </td>
                                                                                <td>Tanggung Jawab Hukum Pihak Ketiga</td>
                                                                                <td style="width:50%;"><select  id="no_tpl" onchange="tplVals();" class="form-control" tabindex="2">
																							  <option value="1">10.000.000,00</option>
																							  <option value="2">20.000.000,00</option>
																							  <option value="3">30.000.000,00</option>
																							  <option value="4">40.000.000,00</option>
																							  <option value="5">50.000.000,00</option>
																							</select>
																							<input type="hidden" id ="no_tpl_hidden" value="">
																							<input type="hidden" id ="no_tpl_temp" value="">
																						</td>
                                                                                <td class='no_tpl_prem position-text no_pack' id="no_tpl_prem">-</td>
                                                                                <!-- <td class=''>
                                                                                    <input type="text" name="no_tpl_val" class="no_tpl_val" id="notplval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                                </td>
                                                                                <td class='no_tpl_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class="no_pll_is_calc" id="no_pll_is_calc" name="no_pll_prem_is_calc" checked data-insured="no_pll_val" data-angka="0" data-target="no_pll_prem">
                                                                                </td>

                                                                                <td>Tanggung Jawab Hukum Terhadap Penumpang</td>
                                                                                <td>
            																	<select  id="no_pll" onchange="pllVals();" class="form-control" tabindex="2">
																					  <option value="1">10.000.000,00</option>
																					  <option value="2">20.000.000,00</option>
																					  <option value="3">30.000.000,00</option>
																					  <option value="4">40.000.000,00</option>
																					  <option value="5">50.000.000,00</option>
            																		</select>
            																		<input type="hidden" id ="no_pll_hidden" value="">
																					<input type="hidden" id ="no_pll_temp" value="">
            																	</td>
                                                                                <td id="no_pll_prem" class='no_pll_prem position-text no_pack'>-</td>
                                                                                <!-- <td class=''>
                                                                                    <input type="text" name="no_pll_val" class="no_pll_val" id="nopllval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                                </td>
                                                                                <td class='no_pll_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class="no_med_ex_is_calc" id="no_med_ex_is_calc" name="no_med_ex_is_calc" checked data-insured="no_med_ex_val" data-angka="0" data-target="no_med_ex_prem">
                                                                                </td>
                                                                                <td>Biaya Pengobatan</td>
                                                                                <td>
            																	<select  id="med_ex" onchange="medExVals();" class="form-control" tabindex="2">
            																		  <option value="1">1.000.000,00</option>
            																		  <option value="2">2.000.000,00</option>
            																		  <option value="3">3.000.000,00</option>
            																		  <option value="4">4.000.000,00</option>
            																		  <option value="5">5.000.000,00</option>
            																		</select>
            																		<input type="hidden" id ="med_ex_hidden" value="">
																					<input type="hidden" id ="med_ex_temp" value="">
            																	</td>
                                                                                <td id="med_ex_prem" class='no_med_ex_prem position-text no_pack'>-</td>
                                                                                <!-- <td class=''>
                                                                                    <input type="text" name="no_med_ex_val" class="no_med_ex_val" id="nomedexval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;"></td>
                                                                                <td class='no_med_ex_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox"  class="no_flood_is_calc" id="no_flood_is_calc"name="no_flood_is_calc" checked data-angka="0" data-target="no_flood_prem">
                                                                                </td>
                                                                                <td>Banjir</td>
                                                                                <td></td>
                                                                                <td id="no_flood" class='no_flood_prem position-text no_pack'>-</td>
                                                                                <!-- <td class='no_flood_val'>-</td>
                                                                                <td class='no_flood_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class="no_earthquake_is_calc" id="no_earthquake_is_calc"name="no_earthquake_is_calc" checked data-angka="0" data-target="no_earthquake_prem">
                                                                                </td>
                                                                                <td>Gempa Bumi</td>
                                                                                <td></td>
                                                                                <td id="no_earthquake" class='no_earthquake_prem position-text no_pack' >-</td>
                                                                                <!-- <td class='no_earthquake_val'>-</td>
                                                                                <td class='no_earthquake_presen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class="no_riot_is_calc" id="no_riot_is_calc" name="no_tpl_is_calc" checked data-angka="0" data-target="no_riot_prem">
                                                                                </td>
                                                                                <td>Pemogokan, Kerusuhan dan Huruhara</td>
                                                                                <td></td>
                                                                                <td id="no_riot" class='no_riot_prem position-text no_pack'>-</td>
                                                                                <!-- <td class='no_riot_val'>-</td>
                                                                                <td class='no_riot_persen'>-</td> -->
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class="no_terror_is_calc" id="no_terror_is_calc" name="no_terror_is_calc" checked data-angka="0" data-target="no_terror_prem">
                                                                                </td>
                                                                                <td>Terorisme dan Sabotase</td>
                                                                                <td></td>
                                                                                <td id="no_terror" class='no_terror_prem position-text no_pack'>-</td>
                                                                                <!-- <td class='no_terror_val'>-</td>
                                                                                <td class='no_terror_persen'>-</td> -->
                                                                                </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <input type="checkbox" class="no_passenger_is_calc" id="no_passenger_is_calc" name="no_passenger_is_calc" checked data-insured="no_passenger_val" data-angka="0" data-target="no_passenger_prem">
                                                                                    <?php

                                                                            ?>
                                                                        </td>
                                                                        <td>PA Passenger</td>
																		<td>
																			<select  id="no_passenger" onchange="passengerVals();" class="form-control" tabindex="2">
																				 <option value="1">10.000.000,00</option>
																				  <option value="2">20.000.000,00</option>
																				  <option value="3">30.000.000,00</option>
																				  <option value="4">40.000.000,00</option>
																				  <option value="5">50.000.000,00</option>
																				</select>
																				<input type="hidden" id ="no_passenger_hidden" value="">
																				<input type="hidden" id ="no_passenger_temp" value="">
																			</td>
                                                                        <td id="no_passenger_prem" class='no_passenger_prem position-text no_pack'>-</td>
                                                                        <!-- <td class=''><input type="text" name="no_passenger_val" class="no_passenger_val" id="nopassengerval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                        </td>
                                                                        <td class='no_passenger_persen'>-</td> -->
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="no_pa_is_calc" id="no_pa_is_calc" name="no_pa_is_calc" checked data-insured="no_pa_val" data-angka="0" data-target="no_pa_prem">
                                                                        </td>
                                                                        <td>PA Driver</td>
																		<td>
																			<select  id="no_pa" onchange="paVals();" class="form-control" tabindex="2">
																				  <option value="1">10.000.000,00</option>
																				  <option value="2">20.000.000,00</option>
																				  <option value="3">30.000.000,00</option>
																				  <option value="4">40.000.000,00</option>
																				  <option value="5">50.000.000,00</option>
																				</select>
																				<input type="hidden" id ="no_pa_hidden" value="">
																				<input type="hidden" id ="no_pa_temp" value="">
																			</td>
                                                                        <td id="no_pa_prem" class='no_pa_prem position-text no_pack'>-</td>
                                                                        <!-- <td class=''>
                                                                            <input type="text" name="no_pa_val" class="no_pa_val" id="nopaval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                        </td>
                                                                        <td class='no_pa_persen'>-</td> -->
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="no_workshop_is_calc" name="no_workshop_is_calc" checked data-angka="0" data-target="no_workshop_prem" value="FALSE">
                                                                        </td>
                                                                        <td>Authorized Workshop</td>
																		<td></td>
                                                                        <td class='no_workshop_prem position-text no_pack'>-</td>
                                                                        <!-- <td class='no_workshop_val'>-</td>
                                                                        <td class='no_workshop_persen'>-</td> -->
                                                                    </tr>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td style="background: #e2e3e3;">Total Premium*</td>
																			<td style="background: #e2e3e3;"><input type="hidden" id ="no_totalPremium_hidden" value=""></td>
                                                                            <td style="background: #e2e3e3;"id="no_totalPremium" class='no_totalPremium position-text no_pack'></td>
                                                                            <!-- <td></td>
                                                                            <td></td> -->
                                                                        </tr>
                                                                    </tfoot>
                                                                </tbody>
                                                            </table>
                                                        </div><!--/ .tabScroll -->
                                                    </div><!--/ .content_show -->
                                                    <div id= 'note_2'>
                                                        * Total premi yang tercantum belum termasuk biaya administrasi maksimal sebesar Rp. 32.000,- (harga disesuaikan dengan premi yang di ambil)
                                                    </div>
                                                </li>
                                            </ul>
                                        </div><!--/ .tabcontent -->
                                    </div><!--/ .tabwrap -->

                                            </div><!--/ .col-sm-12 -->
                                        </div><!--/ .row -->
                                </div><!--end .accordion-section-content-->
                            </div><!--end .accordion-section-->
                        </div><!--end .accordion-->

                        </div><!--/ .tab-pane# -->
                    </div><!--/ .tab-content -->

                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' id="next" class='btn btn-next btn-fill btn-warning btn-wd btn-sm next-form' name='next' value='Lanjut' tabindex="7" />
                            <!-- <a href="/kalkulator/thankyou-mobilku"> -->
                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Kirim Email' id='finish-btn'/>
                            <!-- </a> -->
                        </div><!--/ .pull-right -->
                        <div class="pull-left">
                            <input type='button' id="kembali2" class='btn btn-previous btn-fill btn-warning btn-wd btn-sm' name='previous' value='Kembali' />
                        </div><!--/ .pull-left -->
                        <div class="clearfix"></div>
                    </div><!--/ .wizard-footer -->

                </div><!--/ .wizard-card -->
                </form>

            </div> <!--/ .wizard container -->

        </div><!--/ .description -->

    </div><!--/ .newsletter-allianz -->

</div>

<script language="javascript">
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        {
            return false;
        }
        else
        {
            return true;
        }
    }

    $( window ).resize(function(){
        adjustTable();
    });

</script>

<script type="text/javascript">
    
    // $("#tabcontent_1_1").hide();

    // Paket

    <?php
    $i = 1;
    $j = 1;

    // for ( $i=1; $i <= 2 ; $i++ ){
        for ( $j=1; $j <= 6 ; $j++ ){
    ?>

    $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").hide();
    $("#note_<?php echo $i ?>").hide();

    $("#open_tab_<?php echo $i ?>_<?php echo $j ?>").click(function(){
        $("#note_<?php echo $i ?>").show();
        $(".content_show").removeClass("rincian");
        $(".no_pack").removeClass("data");
        $('.paketchecked').prop('checked',false);
        $("#paket_<?php echo $i ?>_<?php echo $j ?>").prop("checked",true);
        $(".menutab_dekstop li a").removeClass();
        $("a#open_tab_<?php echo $i ?>_<?php echo $j ?>").addClass("active");
        $(".show_<?php echo $i ?>").hide();
        $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
        adjustTable();
    });

    <?php
            }
        // }
    ?>

    // Non Paket

    <?php
    $a = 2;
    $b = 1;

    for($b=1; $b <= 2 ; $b++ ){
    ?>

    $("#tabcontent_<?php echo $a ?>_<?php echo $b ?>").hide();
    $("#note_<?php echo $a ?>").hide();

    $("#open_tab_<?php echo $a ?>_<?php echo $b ?>").click(function(){
        $("#note_<?php echo $a ?>").show();
        $('.paketchecked').prop('checked',false);
        $("#paket_<?php echo $a ?>_<?php echo $b ?>").prop("checked",true);
        $(".menutab_dekstop li a").removeClass();
        $("a#open_tab_<?php echo $a ?>_<?php echo $b ?>").addClass("active");
        $(".show_<?php echo $a ?>").hide();
        $("#tabcontent_<?php echo $a ?>_<?php echo $b ?>").show();
        $(".no_pack").addClass("data");
        adjustTable();
    });

    <?php
    }
    ?>

    // for mobile
    <?php
        $i = 1;
        $j = 1;

        // for ( $i=1; $i <=2 ; $i++ ){
            for ( $j=1; $j <=6 ; $j++ ){
    ?>

    $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").hide();

    $("#open_tab_<?php echo $i ?>_<?php echo $j ?>_m").click(function(){
        $(".no_pack").removeClass("data");
        $('.paketchecked').prop('checked',false);
        $("#tabcontent_<?php echo $i ?> li a").removeClass("active");
        $(".check_<?php echo $i ?>_<?php echo $j ?>").prop("checked",true);
        $(this).addClass("active");
        $(".show_<?php echo $i ?>").hide();
        $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
        adjustTable();
    });

    <?php
            }
        // }
    ?>

    <?php
        $i = 2;
        $j = 1;

        for ( $j=1; $j <=2 ; $j++ ){
    ?>

    $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").hide();

    $("#open_tab_<?php echo $i ?>_<?php echo $j ?>_m").click(function(){
        $(".no_pack").addClass("data");
        $('.paketchecked').prop('checked',false);
        $("#tabcontent_<?php echo $i ?> li a").removeClass("active");
        $(".check_<?php echo $i ?>_<?php echo $j ?>").prop("checked",true);
        $(this).addClass("active");
        $(".show_<?php echo $i ?>").hide();
        $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
        adjustTable();
    });

    <?php
        }
    ?>

</script>

<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/functionCalcMobilku.js" type="text/javascript"></script>

<script>

    $("#jenisasuransi, #jenisasuransi2, #jenisasuransi3, #nojenisasuransi").html("");
    $("#jenisasuransi, #jenisasuransi2, #jenisasuransi3, #nojenisasuransi").append(getCookie('label_view_hasil'));
	//PAKET BASIC
    $('.workshop_prem, .compre_prem, .earthquake_prem, .era_prem, .flood_prem, .med_ex_prem, .pa_prem, .passenger_prem, .personal_ef_prem, .pll_prem, .riot_prem, .terror_prem, .tpl_prem').html("");
    $('.workshop_prem').append(accounting.formatMoney(getCookie('workshop_prem'),'',2,'.',','));
    $('.compre_prem').append(accounting.formatMoney(getCookie('compre_prem'),'',2,'.',','));
    $('.earthquake_prem').append(accounting.formatMoney(getCookie('earthquake_prem'),'',2,'.',','));
    $('.era_prem').append(accounting.formatMoney(getCookie('era_prem'),'',2,'.',','));
    $('.flood_prem').append(accounting.formatMoney(getCookie('flood_prem'),'',2,'.',','));
    $('.med_ex_prem').append(accounting.formatMoney(getCookie('med_ex_prem'),'',2,'.',','));
    $('.pa_prem').append(accounting.formatMoney(getCookie('pa_prem'),'',2,'.',','));
    $('.passenger_prem').append(accounting.formatMoney(getCookie('passenger_prem'),'',2,'.',','));
    //$('.personal_ef_prem').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
    //$('.pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));
    $('.personal_ef_prem').append("-");
    $('.pll_prem').append("-");
    $('.riot_prem').append(accounting.formatMoney(getCookie('riot_prem'),'',2,'.',','));
    $('.terror_prem').append(accounting.formatMoney(getCookie('terror_prem'),'',2,'.',','));
    $('.tpl_prem').append(accounting.formatMoney(getCookie('tpl_prem'),'',2,'.',','));
    $('.totalPremium').append(accounting.formatMoney(getCookie('totalPremium'),'',2,'.',','));

	//PAKET STANDART
    $('.workshop_prem2, .compre_prem2, .earthquake_prem2, .era_prem2, .flood_prem2, .med_ex_prem2, .pa_prem2, .passenger_prem2, .personal_ef_prem2, .pll_prem2, .riot_prem2, .terror_prem2, .tpl_prem2').html("");
    $('.workshop_prem2').append(accounting.formatMoney(getCookie('workshop_prem2'),'',2,'.',','));
    $('.compre_prem2').append(accounting.formatMoney(getCookie('compre_prem2'),'',2,'.',','));
    $('.earthquake_prem2').append(accounting.formatMoney(getCookie('earthquake_prem2'),'',2,'.',','));
    $('.era_prem2').append(accounting.formatMoney(getCookie('era_prem2'),'',2,'.',','));
    $('.flood_prem2').append(accounting.formatMoney(getCookie('flood_prem2'),'',2,'.',','));
    $('.med_ex_prem2').append(accounting.formatMoney(getCookie('med_ex_prem2'),'',2,'.',','));
    $('.pa_prem2').append(accounting.formatMoney(getCookie('pa_prem2'),'',2,'.',','));
    $('.passenger_prem2').append(accounting.formatMoney(getCookie('passenger_prem2'),'',2,'.',','));
    //$('.personal_ef_prem').append(accounting.formatMoney(personal_ef_prem,'',2,'.',','));
    //$('.pll_prem').append(accounting.formatMoney(pll_prem,'',2,'.',','));
    $('.personal_ef_prem2').append("-");
    $('.pll_prem2').append("-");
    $('.riot_prem2').append(accounting.formatMoney(getCookie('riot_prem2'),'',2,'.',','));
    $('.terror_prem2').append(accounting.formatMoney(getCookie('terror_prem2'),'',2,'.',','));
    $('.tpl_prem2').append(accounting.formatMoney(getCookie('tpl_prem2'),'',2,'.',','));
    $('.totalPremium2').append(accounting.formatMoney(getCookie('totalPremium2'),'',2,'.',','));

	//PAKET PREMIER
    $('.workshop_prem3, .compre_prem3, .earthquake_prem3, .era_prem3, .flood_prem3, .med_ex_prem3, .pa_prem3, .passenger_prem3, .personal_ef_prem3, .pll_prem3, .riot_prem3, .terror_prem3, .tpl_prem3').html("");
    $('.workshop_prem3').append(accounting.formatMoney(getCookie('workshop_prem3'),'',2,'.',','));
    $('.compre_prem3').append(accounting.formatMoney(getCookie('compre_prem3'),'',2,'.',','));
    $('.earthquake_prem3').append(accounting.formatMoney(getCookie('earthquake_prem3'),'',2,'.',','));
    $('.era_prem3').append(accounting.formatMoney(getCookie('era_prem3'),'',2,'.',','));
    $('.flood_prem3').append(accounting.formatMoney(getCookie('flood_prem3'),'',2,'.',','));
    $('.med_ex_prem3').append(accounting.formatMoney(getCookie('med_ex_prem3'),'',2,'.',','));
    $('.pa_prem3').append(accounting.formatMoney(getCookie('pa_prem3'),'',2,'.',','));
    $('.passenger_prem3').append(accounting.formatMoney(getCookie('passenger_prem3'),'',2,'.',','));
    $('.personal_ef_prem3').append(accounting.formatMoney(getCookie('personal_ef_prem3'),'',2,'.',','));
    $('.pll_prem3').append(accounting.formatMoney(getCookie('pll_prem3'),'',2,'.',','));
    $('.riot_prem3').append(accounting.formatMoney(getCookie('riot_prem3'),'',2,'.',','));
    $('.terror_prem3').append(accounting.formatMoney(getCookie('terror_prem3'),'',2,'.',','));
    $('.tpl_prem3').append(accounting.formatMoney(getCookie('tpl_prem3'),'',2,'.',','));
    $('.totalPremium3').append(accounting.formatMoney(getCookie('totalPremium3'),'',2,'.',','));
	
	//NON PAKET
	$('.no_workshop_prem, .no_compre_prem, .no_earthquake_prem, .no_flood_prem, .no_med_ex_prem, .no_pa_prem, .no_passenger_prem, .no_pll_prem, .no_riot_prem, .no_terror_prem, .no_tpl_prem, .no_totalPremium').html("");
	$('.no_workshop_prem').append(accounting.formatMoney(getCookie('no_workshop_prem'),'',2,'.',','));
	$('.no_compre_prem').append(accounting.formatMoney(getCookie('no_compre_prem'),'',2,'.',','));
	$('.no_earthquake_prem').append(accounting.formatMoney(getCookie('no_earthquake_prem'),'',2,'.',','));
	$('.no_flood_prem').append(accounting.formatMoney(getCookie('no_flood_prem'),'',2,'.',','));
	
	$('.no_med_ex_prem').append(accounting.formatMoney(getCookie('no_med_ex_prem'),'',2,'.',','));
	$('.no_pa_prem').append(accounting.formatMoney(getCookie('no_pa_prem'),'',2,'.',','));
	$('.no_passenger_prem').append(accounting.formatMoney(getCookie('no_passenger_prem'),'',2,'.',','));
	$('.no_pll_prem').append(accounting.formatMoney(getCookie('no_pll_prem'),'',2,'.',','));
	$('.no_riot_prem').append(accounting.formatMoney(getCookie('no_riot_prem'),'',2,'.',','));
	$('.no_terror_prem').append(accounting.formatMoney(getCookie('no_terror_prem'),'',2,'.',','));
	$('.no_tpl_prem').append(accounting.formatMoney(getCookie('no_tpl_prem'),'',2,'.',','));
	$('.no_totalPremium').append(accounting.formatMoney(getCookie('no_totalPremium'),'',2,'.',','));
	
	
	$('#no_tpl_hidden').val(getCookie('no_tpl_prem'));
	$('#no_pll_hidden').val(getCookie('no_pll_prem'));
	$('#med_ex_hidden').val(getCookie('no_med_ex_prem'));
	$('#no_passenger_hidden').val(getCookie('no_passenger_prem'));
	$('#no_pa_hidden').val(getCookie('no_pa_prem'));
	$('#no_tpl_temp').val(getCookie('no_tpl_prem'));
	$('#no_pll_temp').val(getCookie('no_pll_prem'));
	$('#med_ex_temp').val(getCookie('no_med_ex_prem'));
	$('#no_passenger_temp').val(getCookie('no_passenger_prem'));
	$('#no_pa_temp').val(getCookie('no_pa_prem'));
	 $("#no_totalPremium_hidden").val(getCookie('no_totalPremium'));

	$('.no_compre_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_compre_prem'),'',2,'.',','));
	$('.no_earthquake_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_earthquake_prem'),'',2,'.',','));
	$('.no_flood_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_flood_prem'),'',2,'.',','));
	$('.no_med_ex_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_med_ex_prem'),'',2,'.',','));
	$('.no_pa_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_pa_prem'),'',2,'.',','));
	$('.no_passenger_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_passenger_prem'),'',2,'.',','));
	
	$('.no_riot_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_riot_prem'),'',2,'.',','));
	$('.no_terror_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_terror_prem'),'',2,'.',','));
	$('.no_tpl_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_tpl_prem'),'',2,'.',','));
	$('.no_workshop_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_workshop_prem'),'',2,'.',','));
	$('.no_pll_is_calc').attr('data-angka',accounting.formatMoney(getCookie('no_pll_prem'),'',2,'.',','));
	
	
    function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
    }
        
    function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
            }
            return "";
    }

    // alert(getCookie('workshop_prem'));
// getCookie('namaCookie');

	$(document).ready(function() {  
		$('#no_flood_is_calc').click(function() {
			if($(this).is(":checked"))
			{						
				recalc();
			} else {
				recalc();	
			}
		});
		$('#no_earthquake_is_calc').click(function() {
			if($(this).is(":checked"))
			{						
				recalc();
			} else {
				recalc();
			}
		});
		$('#no_riot_is_calc').click(function() {
			if($(this).is(":checked"))
			{						
				recalc();
			} else {
				recalc();	
			}
		});
		$('#no_terror_is_calc').click(function() {
			if($(this).is(":checked"))
			{						
				recalc();
			} else {
				recalc();	
			}
		});

		$('.no_workshop_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				recalc();
			} else {
				recalc();	
			}
		});
		
		$('#no_tpl_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_tpl").disabled = false;
				$('#no_tpl option[value=1]').attr('selected','selected');
						
				recalc();
				
			} else {
				document.getElementById("no_tpl").disabled = true;
				
				recalc();
				
			}
		});
		$('#no_pll_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_pll").disabled = false;
				$('#no_pll option[value=1]').attr('selected','selected');
				recalc();
				
			} else {
				document.getElementById("no_pll").disabled = true;
				recalc();
			}
		});
		$('#no_med_ex_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("med_ex").disabled = false;
				$('#med_ex option[value=1]').attr('selected','selected');
				recalc();
				
			} else {
				document.getElementById("med_ex").disabled = true;
				recalc();
			}
		});
		$('#no_passenger_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_passenger").disabled = false;
				$('#no_passenger option[value=1]').attr('selected','selected');
				recalc();
				
			} else {
				document.getElementById("no_passenger").disabled = true;
				recalc();
			}
		});
		$('#no_pa_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_pa").disabled = false;
				$('#no_pa option[value=1]').attr('selected','selected');
				recalc();
			} else {
				document.getElementById("no_pa").disabled = true;
				recalc();
			}
		});
	});
	function tplVals() {
		var str = $("#no_totalPremium").text();
		console.log(str);
		var temp = str.replace(",00","");
		console.log(temp);
		var Totals = parseInt(temp.split(".").join(""));
		var defaultVals = parseInt($("#no_tpl_hidden").val());
		var tempVals = parseInt($("#no_tpl_temp").val());
		// var defaultTotal = parseInt($("#no_totalPremium_hidden").val());
		var tpl = parseInt($("#no_tpl option:selected").text().split(".").join(""));
		
	 
	  if (tpl < 30000000) {
		var hasil = parseFloat(defaultVals/10000000*tpl);
		var selisih = parseFloat(hasil-tempVals);		   
		var total = parseFloat(selisih + Totals);
		var newVals = parseInt($("#no_tpl_temp").val(hasil));
		console.log(Totals);
		console.log(hasil);
		console.log(defaultVals);
		console.log(selisih);
		console.log(total);
		$( ".no_tpl_prem" ).empty();
		$(".no_tpl_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
		$( ".no_totalPremium" ).empty();
		$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
	  }
	  else {
		var hasil = parseFloat(defaultVals/10000000*tpl*3/4);
		var selisih = parseFloat(hasil-tempVals);
		var total = parseFloat(selisih + Totals);
		var newVals = parseInt($("#no_tpl_temp").val(hasil));
		console.log(hasil);
		console.log(defaultVals);
		console.log(selisih);
		console.log(Totals);
		console.log(total);
		$( ".no_tpl_prem" ).empty();
		$(".no_tpl_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
		$( ".no_totalPremium" ).empty();
		$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
	  }
	  
	}
	function pllVals() {
		var str = $("#no_totalPremium").text();
		console.log(str);
		var temp = str.replace(",00","");
		console.log(temp);
		var Totals = parseInt(temp.split(".").join(""));
		var defaultVals = parseInt($("#no_pll_hidden").val());
		var tempVals = parseInt($("#no_pll_temp").val());
		// var defaultTotal = parseInt($("#no_totalPremium_hidden").val());
		var pll = parseInt($( "#no_pll option:selected" ).text().split(".").join(""));
		if (pll < 30000000) {
			var hasil = parseFloat(defaultVals/10000000*pll);
			var selisih = parseFloat(hasil-tempVals);		   
			var total = parseFloat(selisih + Totals);
			var newVals = parseInt($("#no_pll_temp").val(hasil));
			console.log(defaultVals);
			$( ".no_pll_prem" ).empty();
			$(".no_pll_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
			$( ".no_totalPremium" ).empty();
			$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
		}
	  else {
			var hasil = parseFloat(defaultVals/10000000*pll*375/500);
			var selisih = parseFloat(hasil-tempVals);		   
			var total = parseFloat(selisih + Totals);
			var newVals = parseInt($("#no_pll_temp").val(hasil));
			console.log(defaultVals);
			$( ".no_pll_prem" ).empty();
			$(".no_pll_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
			$( ".no_totalPremium" ).empty();
			$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
	  }
	}
	function medExVals() {
		var str = $("#no_totalPremium").text();
		console.log(str);
		var temp = str.replace(",00","");
		console.log(temp);
		var Totals = parseInt(temp.split(".").join(""));
		var defaultVals = parseInt($("#med_ex_hidden").val());
		var tempVals = parseInt($("#med_ex_temp").val());
		var med_ex = parseInt($( "#med_ex option:selected").text().split(".").join(""));
		if(med_ex < 3000000) {
			var hasil = parseFloat(defaultVals/1000000*med_ex);
			var selisih = parseFloat(hasil-tempVals);		   
			var total = parseFloat(selisih + Totals);
			var newVals = parseInt($("#med_ex_temp").val(hasil));
			console.log(defaultVals);
			$( ".no_med_ex_prem" ).empty();
			$(".no_med_ex_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
			$( ".no_totalPremium" ).empty();
			$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
		}
	  else {
			var hasil = parseFloat(defaultVals/1000000*med_ex*30/35);
			var selisih = parseFloat(hasil-tempVals);		   
			var total = parseFloat(selisih + Totals);
			var newVals = parseInt($("#med_ex_temp").val(hasil));
			console.log(defaultVals);
			$( ".no_med_ex_prem" ).empty();
			$(".no_med_ex_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
			$( ".no_totalPremium" ).empty();
			$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
	  }
	}
	function passengerVals() {
		var str = $("#no_totalPremium").text();
		console.log(str);
		var temp = str.replace(",00","");
		console.log(temp);
		var Totals = parseInt(temp.split(".").join(""));
		var defaultVals = parseInt($("#no_passenger_hidden").val());
		var tempVals = parseInt($("#no_passenger_temp").val());
		var passenger = parseInt($( "#no_passenger option:selected" ).text().split(".").join(""));
		var hasil = parseFloat(defaultVals/10000000*passenger);
		var selisih = parseFloat(hasil - tempVals);		   
		var total = parseFloat(selisih + Totals);
		var newVals = parseInt($("#no_passenger_temp").val(hasil));
		console.log(defaultVals);
		// console.log(passenger);
		// console.log(hasil);
		$( ".no_passenger_prem" ).empty();
		$(".no_passenger_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
		$( ".no_totalPremium" ).empty();
		$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
	}
	function paVals() {
		var str = $("#no_totalPremium").text();
		console.log(str);
		var temp = str.replace(",00","");
		console.log(temp);
		var Totals = parseInt(temp.split(".").join(""));
		var defaultVals = parseInt($("#no_pa_hidden").val());
		var tempVals = parseInt($("#no_pa_temp").val());
		var pa = parseInt($( "#no_pa option:selected" ).text().split(".").join(""));
		var hasil = parseFloat(defaultVals/10000000*pa);
		var selisih = parseFloat(hasil-tempVals);		   
		var total = parseFloat(selisih + Totals);
		var newVals = parseInt($("#no_pa_temp").val(hasil));
		console.log(defaultVals);
		$( ".no_pa_prem" ).empty();
		$(".no_pa_prem" ).append(accounting.formatMoney(hasil,'',2,'.',','));
		$( ".no_totalPremium" ).empty();
		$(".no_totalPremium" ).append(accounting.formatMoney(total,'',2,'.',','));
	}
	
	function recalc() {
		var no_workshop_prem=(parseFloat(($('.no_workshop_prem').html().split('.').join("")).replace(",",".")));
        var no_compre_prem=(parseFloat(($('.no_compre_prem').html().split('.').join("")).replace(",",".")));
        var no_earthquake_prem=(parseFloat(($('.no_earthquake_prem').html().split('.').join("")).replace(",",".")));
        var no_flood_prem=(parseFloat(($('.no_flood_prem').html().split('.').join("")).replace(",",".")));
        var no_med_ex_prem=(parseFloat(($('.no_med_ex_prem').html().split('.').join("")).replace(",",".")));
        var no_pa_prem=(parseFloat(($('.no_pa_prem').html().split('.').join("")).replace(",",".")));
        var no_passenger_prem=(parseFloat(($('.no_passenger_prem').html().split('.').join("")).replace(",",".")));
        var no_pll_prem=(parseFloat(($('.no_pll_prem').html().split('.').join("")).replace(",",".")));
        var no_riot_prem=(parseFloat(($('.no_riot_prem').html().split('.').join("")).replace(",",".")));
        var no_terror_prem=(parseFloat(($('.no_terror_prem').html().split('.').join("")).replace(",",".")));
        var no_tpl_prem=(parseFloat(($('.no_tpl_prem').html().split('.').join("")).replace(",",".")));
		
		var no_totalPremium=parseFloat(no_workshop_prem+no_compre_prem+no_earthquake_prem+no_flood_prem+no_med_ex_prem+no_pa_prem+no_passenger_prem+no_riot_prem+no_terror_prem+no_tpl_prem+no_pll_prem);
		$('.no_totalPremium').html('');
		$('.no_totalPremium').append(accounting.formatMoney(no_totalPremium,'',2,'.',','));
		
		return no_totalPremium;
	}
	 
</script>
<script type="text/javascript">

    // $('#paket').click(function(){
    //     $('#row1').show();
    // });

    // $('#row1').hide();
    
    $('#telp').bind("input", function(){
       var re = /^[0-9]*$/; 
        
        var value = $('#telp').val();
        $(this).val(value);
        if(!re.test(value)){
            document.getElementById('notifNoHP').style.display= 'block';
            $('#telp').val('');
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
        }
        
    });

    $('#nama').bind("input", function(){
       var re = /^[A-Za-z\s- ]*$/; 
        
        var value = $('#nama').val();
        $(this).val(value);
        if(!re.test(value)){
            $('#nama').val('');
        }else{
        }
        
    });

    //var check = $('#no_tpl_is_calc');
    /*$(document).ready(function(){
        if($('#no_tpl_is_calc').is(":checked") == true){
            alert("asdf");
            $("#notplval").prop("disabled",false);
        }else{
            $("#notplval").prop("disabled",true);
        }
    });*/


    function validateNumber(value){
        if(value.length <= 8 ){
            document.getElementById('notifNoHP').style.display= 'block';
            return null;
        }else{ 
            document.getElementById('notifNoHP').style.display= 'none';
            return value;
        }
    };
    
        function validateEMAIL(surat)
    {
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(!re.test(surat))
        {
            document.getElementById('notifemail').style.display= 'block';
            return null;
        }
        else
        {
            document.getElementById('notifemail').style.display= 'none';
            return surat;
        }
    };


    function navigateMe(anchor)
    {
        $(".pagenav .navi li").removeClass('aktif');
        var element = $("." + anchor);
        element.addClass('aktif');

        //alert($(".heading").offset().top);
        if(Math.floor( $(".heading").offset().top)<=212)
        {
            $('html, body').animate({scrollTop:$("#"+anchor).offset().top-190}, 500);
        }
        else
        {
            $('html, body').animate({scrollTop:$("#"+anchor).offset().top-90}, 500);
        }
    }
    
        $('#telp').bind("telp", function(){
       var re = /^[0-9]*$/; 
        
        var value = $('#telp').val();
        $(this).val(value);
        if(!re.test(value)){
            document.getElementById('notifNoHP').style.display= 'block';
            $('#telp').val('');
        }else{
            document.getElementById('notifNoHP').style.display= 'none';
        }
        
    });
    
    $(document).ready(function(){
    //function validateVehicle(value){
        $("#regno").focusout(function(){
           var value = $(this).val();    
           var re1 = /^[A-Za-z]{1}[0-9]{1,4}[A-Za-z]{0,3}$/;
           var re2 = /^[A-Za-z]{2}[0-9]{1,4}[A-Za-z]{0,3}$/;
           var res;
           
           //var res2 = str.substring(0,2);
                
                if(re1.test(value)){
                    document.getElementById('notifRegno').style.display= 'none';
                    res = value.substring(0,1);
                }else if(re2.test(value)){
                    document.getElementById('notifRegno').style.display= 'none';
                    res = value.substring(0,2);
                }else{
                    document.getElementById('notifRegno').style.display= 'block';
                }
                //console.log(res);
                
             //alert(res);
                $.ajax({
                    url      : '/getregistrationnum/',
                    type     : 'POST',
                    data     : {
                                'res' : res
                                },
                        success  : function(data){
                        //console.log(data);
                        //alert(data);
                        if(data == ''){
                            document.getElementById('notifRegno').style.display= 'block';
                             $('#wilayah').val('');
                        }else{
                            document.getElementById('notifRegno').style.display= 'none';
                            $('#wilayah').val(data);
                        }
                        
                        
                    }
                    
                });
                
                return value;
    
        });
    });

    function validateNumber(value){
        if(value.length <= 8 ){
            document.getElementById('notifNoHP').style.display= 'block';
            return null;
        }else{ 
            document.getElementById('notifNoHP').style.display= 'none';
            return value;
        }
    };

    $(document).ready(function(){
        $("#periode").on("change",function(){
            var a = new Date();
            var b = new Date($(this).val());
            tgla = a.getFullYear()+a.getMonth()+a.getDate();
            tglb = b.getFullYear()+b.getMonth()+b.getDate();
            if(b < a){
                var c=new Date(a);
                var year1=c.setDate(c.getDate() - 1);
                var newdate=new Date(year1);
                $( "#periode-last" ).val((newdate.getMonth() + 1)+'/'+newdate.getDate()+'/'+(newdate.getFullYear()+1));
                $(this).val(a.getMonth()+'/'+a.getDate()+'/'+a.getFullYear());
            }else{
                var c=new Date(b);
                var year1=c.setDate(c.getDate() - 1);
                var newdate=new Date(year1);
                $( "#periode-last" ).val((newdate.getMonth() + 1)+'/'+newdate.getDate()+'/'+(newdate.getFullYear()+1));
            }
            // console.log(tgla+"-"+tglb);
        });
        $( "#periode" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "+0:+5",
            minDate : 0,
            onSelect: function(date) {
            var a=new Date(date);
            var year1=a.setDate(a.getDate() - 1);
            var newdate=new Date(year1);
            $( "#periode-last" ).val((newdate.getMonth() + 1)+'/'+newdate.getDate()+'/'+(newdate.getFullYear()+1));
          }
        });

        adjustTable();

        $('li.aktif .nav_menu div').css('background-position', '0px 0px');

        $(".pagenav .navi li").click(function(){
            $(".pagenav .navi li").removeClass('aktif');
            $(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
            $(this).addClass('aktif');
            $('li.aktif .nav_menu div').css('background-position', '0px 0px');
            var data = $(this).attr('class');
            var id = data.split(' ');
            //alert($(".heading").offset().top);
            if(Math.floor( $(".heading").offset().top)<=212)
            {
                $('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
            }
            else
            {
                $('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
            }
        });

        var hash = document.URL.substr(document.URL.indexOf('#'));
        var id_hash = hash.split('#');

        if(id_hash.length=='1')
        {

        }
        else
        {
            $(".pagenav .navi li").removeClass('aktif');
            var element = $("." + id_hash[1]);
            element.addClass('aktif');

            if(Math.floor( $(".heading").offset().top)<=212)
            {
                $('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-190}, 500);
            }
            else
            {
                $('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-90}, 500);
            }
            $(".pagenav .navi li").removeClass('aktif');
            $(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
            var element = $("." + id_hash[1]);
            element.addClass('aktif');
            $('li.aktif .nav_menu div').css('background-position', '0px 0px');
        }

        /* silde nav*/

        $(".hideme").hide();

        $(".v").click(function(){
            $(this).siblings('.hideme').slideToggle();
            if($(this).find('.xicon').hasClass('down'))
            {
                $(this).find('.xicon').removeClass('down')
                $(this).find('.xicon').addClass('up')
            }
            else
            {
                $(this).find('.xicon').removeClass('up')
                $(this).find('.xicon').addClass('down')
            }
        });

        $('.next').on('click',function(){
            var me_left = $('.super_navi').scrollLeft();
            $('.super_navi').scrollLeft(me_left + 100);
            //console.log($('.super_navi').position().left);
        });

        $('.prev').on('click',function(){
            var me_left = $('.super_navi').scrollLeft();
            $('.super_navi').scrollLeft(me_left - 100);
            //console.log($('.super_navi').position().left);
        });

    });
    $(document).ready(function(event){
        $("input[name='next']").on('click',function(){
            $("#model").focus();
            $("#model").focusout();
        });

        $('.paketchecked').on("click", function(){
            $('.paketchecked').prop('checked',false);
            $(this).prop('checked',true);

        });
    });
    
    $('#kembali2').click(function(){
        document.location.href='/kalkulator/mobilku/mobil-jenis-asuransi'
    });
</script>
