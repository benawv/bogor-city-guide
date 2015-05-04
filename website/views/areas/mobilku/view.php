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
        }

        .menutab_dekstop > ul > li > a
        {
            width: 100% !important;
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
        }

        .menutab_dekstop > ul
        {
            position: relative;
        }

        .menutab_dekstop > ul > li
        {
            list-style: none;
            display: block;
            position: relative;
        }

        .menutab_dekstop > ul > li > a
        {
            display: block;
            width: 100%;
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
        background: #f5f6f6 !important;
    }

    .tabScroll > table > tbody > tr:nth-child(even) > td,
    .tabScroll > table > tfoot > tr:nth-child(even) > td
    {
        background: #cdedf8 !important;
    }

    .tabScroll > table > tfoot > tr > td:nth-child(3),
    .tabScroll > table > tfoot > tr > td:nth-child(4)
    {
        background: #e2e3e3 !important;
    }

    .tabScroll > table > tfoot > tr > td:first-child
    {
        /* display: none; */
        visibility: hidden;
        border-top: solid 1px #ddd;
        border-bottom: none !important;
    }

    .tabScroll > table > thead > tr > th:nth-child(2),
    .tabScroll > table > tbody > tr > td:nth-child(2),
    .tabScroll > table > tfoot > tr > td:nth-child(2)
    {
        min-width: 280px;
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

<!--script src="/website/static/js/masonry.min.js" type="text/javascript"></script-->

<!--   plugins 	 -->

<script src="/website/static/mobilku/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="/website/static/mobilku/wizard.js"></script>

<!--
<script src="/website/static/mobilku/data-table-1.10.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
<script src="/website/static/mobilku/data-table-1.10.4/media/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="/website/static/mobilku/data-table-1.10.4/media/js/dataTables.editor.min.js" type="text/javascript"></script>
-->

<script src="/website/static/mobilku/jquery.validate.min.js"></script>
<script src="/website/static/mobilku/jquery-ui.js"></script>

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

<!-- End of Header -->

<div id="newsletter-allianz" class="full-w bg-white">

    <div class="description">

        <div class="wizard-container">
            <form id="myform" method="get" action="" class="">
            <div class="card wizard-card ct-wizard-blue" id="wizard">

                <!--
                    You can switch "ct-wizard-orange" with one of the next bright colors:
                    "ct-wizard-blue",
                    "ct-wizard-green",
                    "ct-wizard-orange",
                    "ct-wizard-red"
                -->

                <div class="wizard-header"></div>

                <ul>
                    <li class="first"><a href="#data-mobil" data-toggle="tab">1. Data Mobil</a></li>
                    <li class="second"><a href="#jenis-asuransi" data-toggle="tab">2. Jenis Asuransi</a></li>
                    <li class="third"><a href="#hasil-kalkulasi" data-toggle="tab">3. Hasil Kalkulasi</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane" id="data-mobil">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input1">Tahun Pembuatan</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <select id="tahun_pembuatan" class="form-control" tabindex="1">
                                            <?php
                                                $year = date("Y",strtotime("-10 year"));
                                                for( $i = date("Y"); $i >= $year; $i-- ){
                                                    echo "<option value=\"$i\">$i</option>";
                                                }
                                            ?>
                                            </select>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input2">Harga Mobil</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="harga" class="form-control required" id="harga" placeholder="" value="" tabindex="2">
                                        </div><!--/ .col-sm-4 -->
                                        <div class="col-sm-4">
                                            <span id="tooltips2" class="tooltips">*Mohon masukan harga pasar saat ini</span>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input3">Merk Mobil</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <select id="merk" class="form-control" tabindex="3">
                                                <option value="">Silahkan pilih</option>
                                                <?php
                                                    $merk = new Object_MobilBrandName_List();
                                                    foreach($merk as $items){
                                                        echo ucfirst($items->branname);
                                                        echo "<option value='".$items->o_id."'>".ucwords($items->branname)."</option>";
                                                    }
                                                ?>
                                            </select>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input4">    Model Mobil</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4" >
                                            <select id="model" class="form-control model-form" tabindex="4">
                                                <option value="">Silahkan pilih</option>
                                            </select>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input2">Registration No</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="regno" class="form-control required" id="regno" placeholder="B123XXX" tabindex="5">
                                        </div><!--/ .col-sm-4 -->
                                        <div class="col-sm-4">
                                            <span id="tooltips2" class="tooltips">*No kendaraan</span>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input5">Tipe Mobil</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="left-inner-addon">
                                                <i class="flaticon-black187"></i>
                                                <input type="text" name="tipe" class="form-control" id="tipe" placeholder="" value="" disabled=disabled tabindex="6" />
                                            </div><!--/ .left-inner-addon -->
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input5">Wilayah</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <div class="left-inner-addon">
                                                <i class="flaticon-facebook30"></i>
                                                <input type="text" name="wilayah" class="form-control" id="wilayah" placeholder="" value="" disabled=disabled tabindex="7"/>
                                            </div><!--/ .left-inner-addon -->
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="input6">Kapasitas Penumpang</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <div class="left-inner-addon">
                                                <i class="flaticon-harddisc"></i>
                                                <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="" value="" disabled=disabled tabindex="8"  />
                                            </div><!--/ .left-inner-addon -->
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                            </div><!--/ .col-xs-12 -->
                        </div><!--/ .row -->
                    </div><!--/ .tab-pane#data-mobil -->

                    <div class="tab-pane" id="jenis-asuransi">
                        <div class="row">
                            <div class="col-sm-12">

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="inputEmail">Nama</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="nama" class="form-control required" id="nama" placeholder="" tabindex="9" >

                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <label for="inputEmail">No. Telp</label>
                                        </div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="tel" name="telp" class="form-control required" id="telp" placeholder="0812345678" tabindex="10" onfocusout="this.value=validateNumber(this.value)">
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
                                            <input type="text" name="periode" class="form-control" id="periode" placeholder="" value="<?php echo date("m/d/Y"); ?>" tabindex="11">
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-sm-3"></div><!--/ .col-sm-3 -->
                                        <div class="col-sm-4">
                                            <input type="text" name="periode-last" class="form-control" id="periode-last" placeholder="" value="" disabled=disabled tabindex="12" >
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
                                                    <input type="radio" id="radio01" name="radio" checked="checked" value="comprehensive" tabindex="13" />
                                                    <label for="radio01">
                                                        <span>
                                                            <p>Komprehensif</p>
                                                            <img class="car-icon" src="/website/static/mobilku/icon/car1.png" />
                                                        </span>
                                                    </label>
                                                </div><!--/ .radio-icon -->

                                                <div class="radio-icon">
                                                    <input type="radio" id="radio02" name="radio" value="tlo" tabindex="14" />
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
                                            <input type="email" name="email" class="form-control required" id="email" placeholder="" tabindex="15" >
                                
                            </label>
                                        </div><!--/ .col-sm-4 -->
                                    </div><!--/ .form-group -->
                                </div><!--/ .row -->

                            </div><!--/ .col-sm-12 -->
                        </div><!--/ .row -->
                    </div><!--/ .tab-pane#jenis-asuransi -->

                    <div class="tab-pane" id="hasil-kalkulasi">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="paket">Paket</div>

                                <div class="tabwrap">

                                    <div class="menutab_dekstop">
                                        <ul>
                                            <li><a id="open_tab_1_1" class="active" href="javascript:void(0);">Mobilku Basic</a></li>
                                            <li><a id="open_tab_1_2" href="javascript:void(0);">Mobilku Standar</a></li>
                                            <li><a id="open_tab_1_3" href="javascript:void(0);">Mobilku Premier</a></li>
                                        </ul>
                                    </div><!--/ .menutab_desktop -->

                                    <div class="tabcontent" id="tabcontent_2">
                                        <ul>
                                            <li>
                                                <a id="open_tab_1_1_m" class="menumobile active" href="javascript:void(0);">Example</a>
                                                <div id="tabcontent_1_1" class="content_show showme show_1">
                                                    <div class="tabScroll">
                                                        <table id="myTable2" class="display" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="">Coverage</th>
                                                                    <th class="">Insured Value</th>
                                                                    <th class="">Rate</th>
                                                                    <th class="">Premium</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td id="jenisasuransi">Comprehensive</td>
                                                                    <td class='compre_val'>-</td>
                                                                    <td class='compre_persen'>-</td>
                                                                    <td class='compre_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>TPL</td>
                                                                    <td class='tpl_val'>-</td>
                                                                    <td class='tpl_persen'>-</td>
                                                                    <td class='tpl_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Medical Expense</td>
                                                                    <td class='med_ex_val'>-</td>
                                                                    <td class='med_ex_persen'>-</td>
                                                                    <td class='med_ex_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PLL</td>
                                                                    <td class='pll_val'>-</td>
                                                                    <td class='pll_persen'>-</td>
                                                                    <td class='pll_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Personal Effect</td>
                                                                    <td class='personal_ef_val'>-</td>
                                                                    <td class='personal_ef_persen'>-</td>
                                                                    <td class='personal_ef_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Flood</td>
                                                                    <td class='flood_val'>-</td>
                                                                    <td class='flood_persen'>-</td>
                                                                    <td class='flood_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Earthquake</td>
                                                                    <td class='earthquake_val'>-</td>
                                                                    <td class='earthquake_presen'>-</td>
                                                                    <td class='earthquake_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Strike, Riot, and Civil Commotion</td>
                                                                    <td class='riot_val'>-</td>
                                                                    <td class='riot_persen'>-</td>
                                                                    <td class='riot_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Terrorist and Sabotage</td>
                                                                    <td class='terror_val'>-</td>
                                                                    <td class='terror_persen'>-</td>
                                                                    <td class='terror_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PA Passenger</td>
                                                                    <td class='passenger_val'>-</td>
                                                                    <td class='passenger_persen'>-</td>
                                                                    <td class='passenger_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PA Driver</td>
                                                                    <td class='pa_val'>-</td>
                                                                    <td class='pa_persen'>-</td>
                                                                    <td class='pa_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                <td>ERA</td>
                                                                    <td class='era_val'>-</td>
                                                                    <td class='era_persen'>-</td>
                                                                    <td class='era_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Authorized Workshop</td>
                                                                    <td class='workshop_val'>-</td>
                                                                    <td class='workshop_persen'>-</td>
                                                                    <td class='workshop_prem'>-</td>
                                                                </tr>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td style="background-color: darkgray;">Total Premium</td>
                                                                        <td style="background-color: darkgray;" class='totalPremium'></td>
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
                                                <a id="open_tab_1_2_m" class="menumobile" href="javascript:void(0);">Example</a>
                                                <div id="tabcontent_1_2" class="content_show show_1">
                                                    <div class="tabScroll">
                                                        <table id="myTable3" class="display" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="">Coverage</th>
                                                                    <th class="">Insured Value</th>
                                                                    <th class="">Rate</th>
                                                                    <th class="">Premium</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td id="jenisasuransi2">Comprehensive</td>
                                                                    <td class='compre_val2'>-</td>
                                                                    <td class='compre_persen2'>-</td>
                                                                    <td class='compre_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>TPL</td>
                                                                    <td class='tpl_val2'>-</td>
                                                                    <td class='tpl_persen2'>-</td>
                                                                    <td class='tpl_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Medical Expense</td>
                                                                    <td class='med_ex_val2'>-</td>
                                                                    <td class='med_ex_persen2'>-</td>
                                                                    <td class='med_ex_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PLL</td>
                                                                    <td class='pll_val2'>-</td>
                                                                    <td class='pll_persen2'>-</td>
                                                                    <td class='pll_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Personal Effect</td>
                                                                    <td class='personal_ef_val2'>-</td>
                                                                    <td class='personal_ef_persen2'>-</td>
                                                                    <td class='personal_ef_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Flood</td>
                                                                    <td class='flood_val2'>-</td>
                                                                    <td class='flood_persen2'>-</td>
                                                                    <td class='flood_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Earthquake</td>
                                                                    <td class='earthquake_val2'>-</td>
                                                                    <td class='earthquake_presen2'>-</td>
                                                                    <td class='earthquake_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Strike, Riot, and Civil Commotion</td>
                                                                    <td class='riot_val2'>-</td>
                                                                    <td class='riot_persen2'>-</td>
                                                                    <td class='riot_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Terrorist and Sabotage</td>
                                                                    <td class='terror_val2'>-</td>
                                                                    <td class='terror_persen2'>-</td>
                                                                    <td class='terror_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PA Passenger</td>
                                                                    <td class='passenger_val2'>-</td>
                                                                    <td class='passenger_persen2'>-</td>
                                                                    <td class='passenger_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PA Driver</td>
                                                                    <td class='pa_val2'>-</td>
                                                                    <td class='pa_persen2'>-</td>
                                                                    <td class='pa_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>ERA</td>
                                                                    <td class='era_val2'>-</td>
                                                                    <td class='era_persen2'>-</td>
                                                                    <td class='era_prem2'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Authorized Workshop</td>
                                                                    <td class='workshop_val2'>-</td>
                                                                    <td class='workshop_persen2'>-</td>
                                                                    <td class='workshop_prem2'>-</td>
                                                                </tr>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td style="background-color: darkgray;">Total Premium</td>
                                                                        <td style="background-color: darkgray;" class='totalPremium2'></td>
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
                                                <a id="open_tab_1_3_m" class="menumobile" href="javascript:void(0);">Example</a>
                                                <div id="tabcontent_1_3" class="content_show show_1">
                                                    <div class="tabScroll">
                                                        <table id="myTable4" class="display" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="">Coverage</th>
                                                                    <th class="">Insured Value</th>
                                                                    <th class="">Rate</th>
                                                                    <th class="">Premium</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td id="jenisasuransi3">Comprehensive</td>
                                                                    <td class='compre_val'>-</td>
                                                                    <td class='compre_persen'>-</td>
                                                                    <td class='compre_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>TPL</td>
                                                                    <td class='tpl_val3'>-</td>
                                                                    <td class='tpl_persen3'>-</td>
                                                                    <td class='tpl_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Medical Expense</td>
                                                                    <td class='med_ex_val3'>-</td>
                                                                    <td class='med_ex_persen3'>-</td>
                                                                    <td class='med_ex_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PLL</td>
                                                                    <td class='pll_val3'>-</td>
                                                                    <td class='pll_persen3'>-</td>
                                                                    <td class='pll_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Personal Effect</td>
                                                                    <td class='personal_ef_val3'>-</td>
                                                                    <td class='personal_ef_persen3'>-</td>
                                                                    <td class='personal_ef_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Flood</td>
                                                                    <td class='flood_val3'>-</td>
                                                                    <td class='flood_persen3'>-</td>
                                                                    <td class='flood_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Earthquake</td>
                                                                    <td class='earthquake_val3'>-</td>
                                                                    <td class='earthquake_presen3'>-</td>
                                                                    <td class='earthquake_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Strike, Riot, and Civil Commotion</td>
                                                                    <td class='riot_val3'>-</td>
                                                                    <td class='riot_persen3'>-</td>
                                                                    <td class='riot_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Terrorist and Sabotage</td>
                                                                    <td class='terror_val3'>-</td>
                                                                    <td class='terror_persen3'>-</td>
                                                                    <td class='terror_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PA Passenger</td>
                                                                    <td class='passenger_val3'>-</td>
                                                                    <td class='passenger_persen3'>-</td>
                                                                    <td class='passenger_prem3'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>PA Driver</td>
                                                                    <td class='pa_val3'>-</td>
                                                                    <td class='pa_persen3'>-</td>
                                                                    <td class='pa_prem3'>-</td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>ERA</td>
                                                                    <td class='era_val3'>-</td>
                                                                    <td class='era_persen3'>-</td>
                                                                    <td class='era_prem3'>-</td>
                                                                </tr>
                                                                 <tr>
                                                                    <td>Authorized Workshop</td>
                                                                    <td class='workshop_val3'>-</td>
                                                                    <td class='workshop_persen3'>-</td>
                                                                    <td class='workshop_prem3'>-</td>
                                                                </tr>
                                                                <tfoot>
                                                                    <tr>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td style="background-color: darkgray;">Total Premium</td>
                                                                        <td style="background-color: darkgray;" class='totalPremium3'></td>
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
                                            </li>
                                        </ul>
                                    </div><!--/ .tabcontent -->
                                </div><!--/ .tabwrap -->

                            </div><!--/ .col-sm-12 -->
                        </div><!--/ .row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="paket">Non - Paket</div>
                                <div class="tabwrap">

                                    <div class="menutab_dekstop">
                                        <ul>
                                            <li>
                                                <a id="open_tab_2_1" class="active" href="javascript:void(0);">Customized</a>
                                            </li>
                                        </ul>
                                    </div><!--/ .menutab_dekstop -->

                                    <div class="tabcontent" id="tabcontent_2">

                                        <ul>
                                            <li>
                                                <a id="open_tab_2_1_m" class="menumobile active" href="javascript:void(0);">Customized</a>
                                                <div id="tabcontent_2_1" class="content_show showme show_2">
                                                    <div class="tabScroll">
                                                        <table id="myTable5" class="display tbl_ck" cellspacing="0" width="100%">
                                                            <thead>
                                                                <tr>
                                                                    <th class="">Checklist</th>
                                                                    <th class="">Coverage</th>
                                                                    <th class="">Insured Value</th>
                                                                    <th class="">Rate</th>
                                                                    <th class="">Premium</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class='no_compre_is_calc' name="no_compre_is_calc" checked data-angka="0" data-target="no_compre_prem">
                                                                    </td>
                                                                    <td id="nojenisasuransi">Comprehensive</td>
                                                                    <td class='no_compre_val'>-</td>
                                                                    <td class='no_compre_persen'>-</td>
                                                                    <td class='no_compre_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class='no_tpl_is_calc' name="no_tpl_is_calc" checked data-angka="0" data-target="no_tpl_prem">
                                                                    </td>
                                                                    <td>TPL</td>
                                                                    <td class=''>
                                                                        <input type="text" name="no_tpl_val" class="no_tpl_val" id="notplval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                    </td>
                                                                    <td class='no_tpl_persen'>-</td>
                                                                    <td class='no_tpl_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox"  class="no_med_ex_is_calc" name="no_med_ex_prem_is_calc" checked data-angka="0" data-target="no_med_ex_prem">
                                                                    </td>
                                                                    <td>Medical Expense</td>
                                                                    <td class=''><input type="text" name="no_med_ex_val" class="no_med_ex_val" id="nomedexval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;"></td>
                                                                    <td class='no_med_ex_persen'>-</td>
                                                                    <td class='no_med_ex_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class="no_pll_is_calc" name="no_pll_prem_is_calc" checked data-angka="0" data-target="no_pll_prem">
                                                                    </td>
                                                                    <td>PLL</td>
                                                                    <td class=''>
                                                                        <input type="text" name="no_pll_val" class="no_pll_val" id="nopllval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                    </td>
                                                                    <td class='no_pll_persen'>-</td>
                                                                    <td class='no_pll_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox"  class="no_flood_is_calc" name="no_flood_is_calc" checked data-angka="0" data-target="no_flood_prem">
                                                                    </td>
                                                                    <td>Flood</td>
                                                                    <td class='no_flood_val'>-</td>
                                                                    <td class='no_flood_persen'>-</td>
                                                                    <td class='no_flood_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class="no_earthquake_is_calc" name="no_earthquake_is_calc" checked data-angka="0" data-target="no_earthquake_prem">
                                                                    </td>
                                                                    <td>Earthquake</td>
                                                                    <td class='no_earthquake_val'>-</td>
                                                                    <td class='no_earthquake_presen'>-</td>
                                                                    <td class='no_earthquake_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class="no_riot_is_calc" name="no_tpl_is_calc" checked data-angka="0" data-target="no_riot_prem">
                                                                    </td>
                                                                    <td>Strike, Riot, and Civil Commotion</td>
                                                                    <td class='no_riot_val'>-</td>
                                                                    <td class='no_riot_persen'>-</td>
                                                                    <td class='no_riot_prem'>-</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <input type="checkbox" class="no_terror_is_calc" name="no_terror_is_calc" checked data-angka="0" data-target="no_terror_prem">
                                                                    </td>
                                                                    <td>Terrorist and Sabotage</td>
                                                                        <td class='no_terror_val'>-</td>
                                                                        <td class='no_terror_persen'>-</td>
                                                                        <td class='no_terror_prem'>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="no_passenger_is_calc" name="no_passenger_is_calc" checked data-angka="0" data-target="no_passenger_prem">
                                                                        </td>
                                                                        <td>PA Passenger</td>
                                                                        <td class=''><input type="text" name="no_passenger_val" class="no_passenger_val" id="nopassengerval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                        </td>
                                                                        <td class='no_passenger_persen'>-</td>
                                                                        <td class='no_passenger_prem'>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="no_pa_is_calc" name="no_pa_is_calc" checked data-angka="0" data-target="no_pa_prem">
                                                                        </td>
                                                                        <td>PA Driver</td>
                                                                        <td class=''>
                                                                            <input type="text" name="no_pa_val" class="no_pa_val" id="nopaval" value="" onkeypress="return isNumberKey(event)" style="border: none; background: transparent; width: 100%;">
                                                                        </td>
                                                                        <td class='no_pa_persen'>-</td>
                                                                        <td class='no_pa_prem'>-</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="checkbox" class="no_workshop_is_calc" name="no_workshop_is_calc" checked data-angka="0" data-target="no_workshop_prem">
                                                                        </td>
                                                                        <td>Authorized Workshop</td>
                                                                        <td class='no_workshop_val'>-</td>
                                                                        <td class='no_workshop_persen'>-</td>
                                                                        <td class='no_workshop_prem'>-</td>
                                                                    </tr>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td style="background-color: darkgray;">Total Premium</td>
                                                                            <td style="background-color: darkgray;" class='no_totalPremium'></td>
                                                                        </tr>
                                                                    </tfoot>
                                                                </tbody>
                                                            </table>
                                                        </div><!--/ .tabScroll -->
                                                    </div><!--/ .content_show -->
                                                </li>
                                            </ul>
                                        </div><!--/ .tabcontent -->
                                    </div><!--/ .tabwrap -->

                                </div><!--/ .col-sm-12 -->
                            </div><!--/ .row -->
                        </div><!--/ .tab-pane# -->
                    </div><!--/ .tab-content -->

                    <div class="wizard-footer">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Lanjut' />
                            <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' id='finish-btn'/>
                        </div><!--/ .pull-right -->
                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-warning btn-wd btn-sm' name='previous' value='Kembali' />
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

    <?php
    $i = 1;
    $j = 1;

    for ( $i=1; $i <= 2 ; $i++ ){
        for ( $j=1; $j <= 6 ; $j++ ){
    ?>

    $("#open_tab_<?php echo $i ?>_<?php echo $j ?>").click(function(){
        $(".menutab_dekstop li a").removeClass();
        $("a#open_tab_<?php echo $i ?>_<?php echo $j ?>").addClass("active");
        $(".show_<?php echo $i ?>").hide();
        $("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
        adjustTable();
    });

    <?php
            }
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

<script type="text/javascript">
    
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

        $( "#periode" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-100:+0",
            onSelect: function(date) {
            var a=new Date(date);
            var year1=a.setFullYear(a.getFullYear() + 1);
            var newdate=new Date(year1);
            $( "#periode-last" ).val((newdate.getMonth() + 1)+'/'+newdate.getDate()+'/'+newdate.getFullYear());
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

</script>
