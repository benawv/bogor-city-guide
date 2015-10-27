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
                    <li class="second active"><a href="#jenis-asuransi" data-toggle="tab"><i class="fa fa-pencil-square-o fa-2x"></i>&nbsp;&nbsp;&nbsp;Jenis Asuransi</a></li>
                    <li class="third"><a href="#hasil-kalkulasi" data-toggle="tab"><i class="fa fa-calculator fa-2x"></i>&nbsp;&nbsp;&nbsp;Hasil Kalkulasi</a></li>
                </ul>

                <div class="tab-content">


                    <div class="tab-pane active" id="jenis-asuransi">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="inputEmail">Nama</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="nama" class="form-control required" id="nama" placeholder="" tabindex="8" value="">

                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="inputEmail">No. Telp</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="tel" name="telp" class="form-control required" id="telp" placeholder="0812345678" tabindex="9" onfocusout="this.value=validateNumber(this.value)">
                                        <label id="notifNoHP" style="display:none; color: #f00;">
                                Mohon maaf No HP yang Anda masukkan belum benar
                            </label>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input1">Periode Asuransi</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="periode" class="form-control" id="periode" placeholder="" value="<?php echo date("m/d/Y"); ?>" tabindex="10">
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <?php
                                    $tahun = date("Y");
                                    if ($tahun%4==0){
                                        if ($tahun%100==0){
                                            if ($tahun%400==0){
                                                $day = date("m/d/Y",strtotime("+ 366 day"));
                                            }else{
                                                $day = date("m/d/Y",strtotime("+ 365 day"));
                                            }
                                        }else{
                                            $day = date("m/d/Y",strtotime("+ 366 day"));
                                        }
                                    }else{
                                        $day = date("m/d/Y",strtotime("+ 365 day"));
                                    }
                                    ?>
                                    <div class="form-group">
                                        <div class="col-sm-3"></div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="periode-last" class="form-control" id="periode-last" placeholder="" value="<?php echo $day; ?>" disabled=disabled tabindex="11">
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input2">Jenis Asuransi</label>
                                        </div><!--/ .col-sm-4 -->
                                        <div class="col-sm-4">
                                            <div class="form-inline">

                                                <div class="radio-icon">
                                                    <input type="radio" id="radio01" name="radio" checked="checked" value="comprehensive" tabindex="12" />
                                                    <label for="radio01" >
                                                        <span>
                                                            <p>Komprehensif</p>
                                                            <img class="car-icon" src="/website/static/mobilku/icon/car1.png" />
                                                        </span>
                                                    </label>
                                                </div><!--/ .radio-icon -->

                                                <div class="radio-icon">
                                                    <input type="radio" id="radio02" name="radio" value="tlo" tabindex="13" />
                                                    <label for="radio02">
                                                        <span>
                                                            <p>Total Loss Only</p>
                                                            <img class="car-icon" src="/website/static/mobilku/icon/car31.png" />
                                                        </span>
                                                    </label>
                                                </div><!--/ .radio-icon -->

                                            </div><!--/ .form-inline -->
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="inputEmail">Email Anda</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="email" name="email" class="form-control required" id="email" placeholder="" tabindex="14" value="">
                                
                            </label>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                            </div><!--/ .col-sm-12 -->
                        </div><!--/ .row -->
                    </div><!--/ .tab-pane#jenis-asuransi -->

                    </div><!--/ .tab-content -->

                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' id="lanjut" class='btn btn-next btn-fill btn-warning btn-wd btn-sm next-form' name='next' value='Lanjut' tabindex="15" />
                            <!-- <a href="/kalkulator/thankyou-mobilku"> -->
<!--                                <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' id='finish-btn'/>-->
                            <!-- </a> -->
                        </div><!--/ .pull-right -->
                        <div class="pull-left">
                            <input type='button' id="kembali1" class='btn btn-fill btn-warning btn-wd btn-sm' name='previous' value='Kembali' />
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
        // alert(getCookie('workshop_compre'));
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

        for ( $i=1; $i <=2 ; $i++ ){
            for ( $j=1; $j <=6 ; $j++ ){
    ?>

    $("#open_tab_<?php echo $i ?>_<?php echo $j ?>_m").click(function(){
        $("#tabcontent_<?php echo $i ?> li a").removeClass("active");
        $(this).addClass("active");
        $(".show_<?php echo $i ?>").hide();
        $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
        adjustTable();
    });

    <?php
            }
        }
    ?>

</script>

<script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/functionCalcMobilku.js" type="text/javascript"></script>

<script>

	$(document).ready(function() {    
		$('#no_tpl_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_tpl").disabled = false;
				$('#no_tpl option[value=1]').attr('selected','selected');
				
			} else {
				document.getElementById("no_tpl").disabled = true;
			}
		});
		$('#no_pll_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_pll").disabled = false;
				$('#no_pll option[value=1]').attr('selected','selected');
				
			} else {
				document.getElementById("no_pll").disabled = true;
			}
		});
		$('#no_med_ex_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("med_ex").disabled = false;
				$('#med_ex option[value=1]').attr('selected','selected');
				
			} else {
				document.getElementById("med_ex").disabled = true;
			}
		});
		$('#no_passenger_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_passenger").disabled = false;
				$('#no_passenger option[value=1]').attr('selected','selected');
				
			} else {
				document.getElementById("no_passenger").disabled = true;
			}
		});
		$('#no_pa_is_calc').click(function() {
			if($(this).is(":checked"))
			{
				document.getElementById("no_pa").disabled = false;
				$('#no_pa option[value=1]').attr('selected','selected');
			} else {
				document.getElementById("no_pa").disabled = true;
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
		var defaultTotal = parseInt($("#no_totalPremium_hidden").val());
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
            if(newdate.getFullYear()%4==0){
                $( "#periode-last" ).val((newdate.getMonth() + 1)+'/'+(newdate.getDate()+1)+'/'+(newdate.getFullYear()+1));
            }else{
                $( "#periode-last" ).val((newdate.getMonth() + 1)+'/'+newdate.getDate()+'/'+(newdate.getFullYear()+1));
            }
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
    
//    console.log(getCookie(tahun_pembuatan));

    
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
    
    $('#lanjut').click(function(){
		
		if($('#nama').val()!="" && $('#telp').val()!="" && $('#email').val()!=""){
			 var periode=$('#periode').val();
        var email=$('#email').val();
        var nama=$('#nama').val();
        var telp=$('#telp').val();
        
        var radio1=$('#radio01').val();
        var radio2=$('#radio02').val();
        //$('#radio01').checked
        if($('#radio01').is(":checked") == true){
            var radio = $('#radio01').val();
            var label_view_hasil = 'Komprehensif';
        }else{
            var radio = $('#radio02').val();
            var label_view_hasil = 'TLO';
        }
       
        setCookie('nama', nama,1);
        setCookie('telp', telp,1);
        setCookie('periode', periode,1);
        setCookie('email', email,1);
//        setCookie('periode_last', periode_last,1);
        setCookie('radio', radio,1);
        setCookie('label_view_hasil', label_view_hasil,1);
			window.open("/kalkulator/mobilku/mobil-hasil-kalkulasi","_self");
			// document.location.href='/kalkulator/mobilku/mobil-hasil-kalkulasi';
		}
        // document.location.href='/kalkulator/mobilku/mobil-hasil-kalkulasi';
    });

    $('#kembali1').click(function(){
        document.location.href= '/kalkulator/mobilku/mobil-data';
    });
</script>
