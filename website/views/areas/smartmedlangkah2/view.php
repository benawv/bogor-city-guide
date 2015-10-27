<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css" />
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css" />

<link rel="stylesheet" type="text/css" media="all" href="/website/ajfc/css/style.css" />

<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->

<link rel="stylesheet" href="/website/static/mobilku/wizard-step.css" type="text/css" media="all" />

<style>
    /* Override AJFC's feature box color */
    .box-dent--inner{ background: #009a44; }
    .box-dent::before{ border-top: 28px solid #009a44 !important;}
    .btn-tasbih{ background: #009a44 !important; border: none; border-radius:0; }
    .btn-tasbih:hover, .btn-tasbih:focus{ background: #007a53 !important;  }

    .table-responsive
    {
        overflow: auto;
        margin: 0 35px;
        background: #f5f6f6;
    }

    .table-responsive > table
    {
        border-collapse: collapse;
        -moz-box-sizing: border-box;
    }

    .table-respsonsive > table > tbody > tr > td > a
    {
        color: #666 !important;
        text-decoration: none;
    }

    .table-respsonsive > table > tbody > tr > td > a:hover,
    .table-respsonsive > table > tbody > tr > td > a:focus
    {
        color: #666 !important;
        text-decoration: underline;
    }

    .table-responsive > table > tbody > tr > td > input,
    .table-responsive > table > tbody > tr > td > select
    {
        background: transparent;
        border: none !important; /*solid 1px #ddd !important;*/
        box-shadow: 0 0 0 transparent !important;
        padding: 4px 8px;
        font-size: small;
        width: 100%;
    }

    .table-responsive > table > tbody > tr > td > input::-webkit-input-placeholder {
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table > tbody > tr > td > input:-moz-placeholder { /* Firefox 18- */
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table > tbody > tr > td > input::-moz-placeholder {  /* Firefox 19+ */
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table > tbody > tr > td > input:-ms-input-placeholder {
        color: #111 !important;
        font-style: normal !important;
    }

    .table-responsive > table th,
    .table-responsive > table td
    {
        white-space: nowrap !important;
        padding: 4px 8px;
        font-weight: normal;
        font-size: 14px;
        min-width: 72px;
    }

    .table-responsive > table > thead > tr > th
    {
        text-align: center;
        font-weight: bold !important;
        vertical-align: middle !important;
    }

    .table-responsive > table > tbody > tr:nth-child(odd) > td
    {
        background: #cdedf8;
    }

    .table-responsive > table > tbody > tr > td:first-child
    {
        text-align: center;
    }

    .custom-tab-nav
    {
        margin: 20px auto;
        padding: 0 20px;
    }

    .custom-tab-nav ul,
    .custom-tab-nav li
    {
        margin: 0 auto;
        padding: 0;
    }

    .custom-tab-nav ul > li
    {
        list-style: none;
        display: inline-block;
        position: relative;
        width: 24%;
        margin: 0 auto;
        overflow: hidden;
        opacity: 0.5;
    }

    .custom-tab-nav ul > li.active
    {
        opacity: 1;
    }

    .custom-tab-nav ul > li:not(:first-child) > a
    {
        padding-left: 48px;
        padding-right: 52px;
    }

    .custom-tab-nav ul > li:first-child > a
    {
        padding-right: 48px;
    }

    .custom-tab-nav ul > li:first-child::before
    {
        content: "";
        position: absolute;
        right: -24px;
        z-index: 2;
        height: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        border: solid 24px white;
        border-left-color: transparent;
    }

    .custom-tab-nav ul > li:not(:first-child)::before
    {
        content: "";
        position: absolute;
        left: 0;
        z-index: 2;
        height: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        border: solid 24px transparent;
        border-left-color: white;
    }

    .custom-tab-nav ul > li:not(:first-child)::after
    {
        content: "";
        position: absolute;
        right: -24px;
        z-index: 2;
        height: 100%;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        border: solid 24px white;
        border-left-color: transparent;
    }

    .custom-tab-nav ul > li > a
    {
        display: block;
        padding: 12px 24px;
        margin: 0 auto;
        position: relative;
        background: #009a44;
        color: white;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
    }

    .custom-tab-nav ul > li > a:hover,
    .custom-tab-nav ul > li > a:focus
    {
        outline: none;
        text-decoration: none;
    }

    .content-calc,
    .content-table
    {
        display: none;
        background: white;
    }

    .content-calc.active,
    .content-table.active
    {
        display: block;
    }

    .content-calc
    {
        padding: 0 20px;
    }

    /**
     * Responsive
     */

    @media ( max-width: 767px )
    {
        .custom-tab-nav ul > li
        {
            display: block;
            width: 100%;
            margin-bottom: 20px;
        }

        .custom-tab-nav ul > li > a
        {
            padding: 20px !important;
        }

        .custom-tab-nav ul > li::before,
        .custom-tab-nav ul > li::after
        {
            content: "";
            border: none;
            display: none;
        }

        .content-calc
        {
            padding: 0 20px !important;
        }

        .table-responsive
        {
            margin: 0 auto;
        }

    }
    .table-responsive > table > tbody > tr > td.tabletd{
        text-align: center;
        padding-top: 15px;
    }
    #planmelahirkan,#planrawatjalan{
        width: 20px;
        display: inline;
        margin: 0;
    }

</style>

<style>
    i.cursor-help {
       color: #4747FF;
       cursor: help;
    }
</style>

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR ASURANSI SMARTMED</h1>
        </div><!--/ .header-calc -->

        <div class="row custom-tab-nav">
            <div class="col-xs-12">
                <p>
                    Kalkulator Asuransi SmartMed Premier akan membantu Anda mengetahui perkiraan jumlah premi yang akan dibayarkan. Silakan isi kolom yang tersedia sesuai kebutuhan Anda.
                </p>
                <ul>
                    <li><a href="#first" style="font-size:10px;">Pembayaran dan Diskon</a></li><!--  DON'T REMOVE THIS COMMENT
                    -->
                    <li class="active"><a href="#second">Pilih Manfaat</a></li>
                    <li><a href="#third">Data Anggota</a></li>
                    <li><a href="#fourth">Data Diri</a></
                </ul><!--/ .custom-tab -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="content-calc custom-tab-item active" id="first">
            <div class="col-md-12">

                <form class="form-horizontal" role="form" action="data-anggota">

                    <div class="form-group">
                        <div class="col-md-8">
                            <label class="title"><strong>Pilih Manfaat</strong></label>
                        </div><!--/ .col-md-4 -->
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pilihan Plan Manfaat Rawat Inap</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" id="planip" onChange="checkData();">
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    echo "<option value=''>Pilih</option>";
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>"."Plan"." ".strtoupper($payment->getPlanname())."</option>";
                                    }
                                ?>
                            </select>
                            <label id="notif" style="display:none; color:red;">Manfaat Rawat Inap Harus diisi.</label>
                            <a id="file" style="visibility:hidden" target="_blank"></a>
                            <script>
                            function checkData(){
                                var data = document.getElementById("planip");
                                var val = data.options[data.selectedIndex].text;
                                // alert(val);
                                if (val == "Plan A"){
                                    //Pilihan Plan Manfaat Rawat Inap
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan A.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan A';
                                    document.getElementById('notif').style.display='none';
                                    
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 1);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan A.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan A';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 1);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan A.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan A';
                                    document.getElementById('notif3').style.display='none';
                                    
                                }else if(val== "Plan B"){
                                    //Pilihan Plan Manfaat Rawat Inap
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan B.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan B';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 2);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan B.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan B';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 2);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan B.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan B';
                                    document.getElementById('notif3').style.display='none';
                                    
                                    
                                }else if(val== "Plan C"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan c.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan C';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 3);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan c.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan C';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 3);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan c.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan C';
                                    document.getElementById('notif3').style.display='none';
                                    
                                }else if(val== "Plan D"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan D.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan D';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 4);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan D.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan D';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 4);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan D.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan D';
                                    document.getElementById('notif3').style.display='none';
                                    
                                }else if(val== "Plan E"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan E.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan E';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 5);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan E.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan E';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 5);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan E.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan E';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan F"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan F.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan F';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 6);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan F.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan F';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 6);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan F.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan F';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan G"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan G.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan G';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 7);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan G.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan G';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 7);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan G.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan G';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan H"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan H.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan H';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 8);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan H.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan H';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 8);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan H.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan H';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan I"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan I.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan I';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 9);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan I.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan I';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 9);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan I.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan I';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan J"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan J.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan J';
                                    document.getElementById('notif').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 10);
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan J.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan J';
                                    document.getElementById('notif2').style.display='none';
                                    
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 10);
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan J.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan J';
                                    document.getElementById('notif3').style.display='none';
                                }else{
                                    document.getElementById('file').style.visibility='hidden';
                                    document.getElementById('file3').style.visibility='hidden';
                                    document.getElementById('file2').style.visibility='hidden';
                                    
                                     //Pilihan Plan Manfaat Melahirkan
                                    $("select#planmat").prop('selectedIndex', 0);
                                    //Pilihan Plan Manfaat Rawat Jalan & rawat Gigi
                                    $("select#planop_den").prop('selectedIndex', 0);
                                }
                            }
                            </script>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Manfaat Rawat Inap <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#rawatInap"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" id="ip">
                                <option value="0">0%</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pilihan Plan Manfaat Melahirkan</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <!--<select class="form-control" required tabindex="1" id="planmat" onChange="checkData2();">-->
                            <select class="form-control" required tabindex="1" id="planmat" disabled>
                                <?php
                                    echo "<option value=''>Pilih</option>";
                                    $cat = new Object_SmartmedPlanType_List();
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>"."Plan"." ".strtoupper($payment->getPlanname())."</option>";
                                    }
                                ?>
                            </select>
                            <label id="notif2" style="display:none; color:red;">Manfaat Melahirkan Harus diisi.</label>
                            <input class="form-control" type="checkbox" name="planmelahirkan" id="planmelahirkan" tabindex="1">&nbsp;Pilih plan manfaat melahirkan
                            <a id="file2" style="visibility:hidden" target="_blank"></a>
                            <script>
                            function checkData2(){
                                var data = document.getElementById("planmat");
                                var val = data.options[data.selectedIndex].text;
                                // alert(val);
                                if (val == "Plan A"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan A.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan A';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan B"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan B.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan B';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan C"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan c.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan C';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan D"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan D.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan D';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan E"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan E.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan E';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan F"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan F.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan F';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan G"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan G.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan G';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan H"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan H.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan H';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan I"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan I.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan I';
                                    document.getElementById('notif2').style.display='none';
                                }else if(val== "Plan J"){
                                    document.getElementById('file2').href="/website/static/pdf-smartmed/Melahirkan - Plan J.pdf";
                                    document.getElementById('file2').style.visibility='visible';
                                    document.getElementById('file2').innerHTML='Detail Manfaat Melahirkan Plan J';
                                    document.getElementById('notif2').style.display='none';
                                }else{
                                    document.getElementById('file2').style.visibility='hidden';
                                }
                            }
                            </script>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <span class="hide warn warning-melahirakan">Pembayaran harus pertahun untuk mengaktifkan plan melahirkan</span>
                        </div>
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Manfaat Melahirkan <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#melahirkan"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" disabled required tabindex="1" id="mat">
                                <option value="0">0%</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pilihan Plan Manfaat Rawat Jalan & rawat Gigi</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <!--<select class="form-control" required tabindex="1" id="planop_den" onChange="checkData3();">-->
                            <select class="form-control" required tabindex="1" id="planop_den" disabled>
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    echo "<option value=''>Pilih</option>";
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>"."Plan"." ".strtoupper($payment->getPlanname())."</option>";
                                    }
                                ?>
                            </select>                            
                            <label id="notif3" style="display:none; color:red;">Manfaat Rawat Jalan & Rawat Gigi Harus diisi.</label>
                            <input class="form-control" type="checkbox" name="planrawatjalan" id="planrawatjalan" tabindex="1">&nbsp;Pilih manfaat rawat jalan & rawat gigi
                            <a id="file3" style="visibility:hidden" target="_blank"></a>
                            <script>
                            function checkData3(){
                                var data = document.getElementById("planop_den");
                                var val = data.options[data.selectedIndex].text;
                                // alert(val);
                                if (val == "Plan A"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan A.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan A';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan B"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan B.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan B';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan C"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan c.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan C';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan D"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan D.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan D';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan E"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan E.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan E';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan F"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan F.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan F';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan G"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan G.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan G';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan H"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan H.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan H';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan I"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan I.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan I';
                                    document.getElementById('notif3').style.display='none';
                                }else if(val== "Plan J"){
                                    document.getElementById('file3').href="/website/static/pdf-smartmed/Rawat Jalan & Rawat Gigi - Plan J.pdf";
                                    document.getElementById('file3').style.visibility='visible';
                                    document.getElementById('file3').innerHTML='Detail Manfaat Rawat Jalan & Rawat Gigi Plan J';
                                    document.getElementById('notif3').style.display='none';
                                }else{
                                    document.getElementById('file3').style.visibility='hidden';
                                }
                            }
                            </script>
                        </div><!--/ .col-md-4 -->

                        <div class="col-md-4">
                            <span class="hide warn warning-rawatjalan">Pembayaran harus pertahun untuk mengaktifkan plan rawat jalan & rawat gigi</span>
                        </div>
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Manfaat Rawat Jalan & Rawat Gigi <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#rawatJalan"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" disabled required tabindex="1" id="out_den">
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next"  value="Selanjutnya" tabindex="1">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

                <div class="col-md-12 note">
                    <h4 class="mb10"><strong>Note: </strong></h4>
                    <ul class="mb30">
                        <li>Perhitungan ini adalah perhitungan premi standar.</li>
                        <li>
                            Proposal ini berlaku 30 (tiga puluh) hari setelah Proposal ini dicetak. Lebih dari
                            30 (tiga puluh) hari, maka proposal ini tidak berlaku lagi dan harus dihitung ulang kembali.
                        </li>
                        <li>
                            Allianz berhak melakukan perhitungan Premi ulang sesuai usia yang sebenarnya pada saat underwriting
                            dilakukan.
                        </li>
                    </ul>
                </div><!--/ .col-md-12 -->

            </div><!--/ .col-md-12 -->
        </div><!--/ .content-calc -->

    </div><!--/ .description -->
</div><!--/ #newsletter-allianz -->

<!-- help desk -->
<div class="modal fade" id="family" tabindex="-1" role="dialog" aria-labelledby="familyLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="familyLabel">Family Discount</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Fasilitas Family Discount adalah potongan/diskon premi per keluarga yang didapatkan bila Anda menyertakan keluarga (suami, istri, dan anak) dalam pembelian polis.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="claim" tabindex="-1" role="dialog" aria-labelledby="claimLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="claimLabel">No Claim Bonus</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Fasilitas No Claim Bonus adalah potongan/diskon premi sebesar 20% saat polis diperpanjang dan berlaku bila Anda dan/atau anggota keluarga tidak ada catatan melakukan klaim selama 1 (satu) tahun polis.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rawatInap" tabindex="-1" role="dialog" aria-labelledby="rawatInapLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="rawatInapLabel">Pilihan Persentase Co-Share Manfaat Rawat Inap</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Jumlah persentase pada co-share yang dipilih akan menjadi bagian Anda dalam setiap pengajuan klaim. Misalnya, bila Anda memilih co-share 10%, maka Allianz akan membayar biaya rawat inap sebesar 90% dan Anda membayar 10%.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="melahirkan" tabindex="-1" role="dialog" aria-labelledby="melahirkanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="melahirkanLabel">Pilihan Persentase Co-Share Manfaat Melahirkan</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Jumlah persentase pada co-share yang dipilih akan menjadi bagian Anda dalam setiap pengajuan klaim. Misalnya, bila Anda memilih co-share 10%, maka Allianz akan membayar biaya melahirkan sebesar 90% dan Anda membayar 10%.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rawatJalan" tabindex="-1" role="dialog" aria-labelledby="rawatJalanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="rawatJalanLabel">Pilihan Persentase Co-Share Rawat Jalan & Rawat Gigi</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Jumlah persentase pada co-share yang dipilih akan menjadi bagian Anda dalam setiap pengajuan klaim. Misalnya, bila Anda memilih co-share 10%, maka Allianz akan membayar biaya rawat jalan atau rawat gigi sebesar 90% dan Anda membayar 10%.</p>
      </div>
    </div>
  </div>
</div>
<!-- help desk -->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(document).ready(function(){
        if(!getCookie("pembayaran")){
            window.location = "langkah1";
        }
    });

    /*GET COOKIE*/
    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
        }
        return "";
    }

    /*set COOKIE 5 days*/
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }
   
    $("#Kalkulasi").on("click",function(){
        planip = $("#planip").val();
        planmat = $("#planmat").val();
        planop_den = $("#planop_den").val();
        var planning = $('#planmat option:selected').html();
        ip = $("#ip").val();
        mat = $("#mat").val();
        op_den = $("#out_den").val();
        planmelahirkan = $("#planmelahirkan").is(":checked");
        planrawatjalan = $("#planrawatjalan").is(":checked");
//        alert(planning);
        /*set EXPIRED cookie*/
        var d = new Date();
        var exdays = 5;//set expired 5 days
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        console.log("planmelahirkan="+planmelahirkan);
        setCookie("planip",planip,5);
        setCookie("planmat",planmat,5);
        setCookie("planop_den",planop_den,5);
        setCookie("ip",ip,5);
        setCookie("mat",mat,5);
        setCookie("op_den",op_den,5);
        setCookie("planmelahirkan",planmelahirkan,5);
        setCookie("planrawatjalan",planrawatjalan,5);
        setCookie("planning",planning,5);
        console.log("fd="+getCookie("fd")+"-planip="+getCookie("planip")+"-op_den="+getCookie("op_den")+"-planmelahirkan="+getCookie("planrawatjalan"));
    });

    $("#planmelahirkan").on("change",function(){
        if($(this).is(":checked")){
            if(getCookie("pembayaran")=="Annually"){
                $(".warning-melahirakan").addClass("hide");
                $("#mat").removeAttr("disabled");
            }else{
                $(".warning-melahirakan").removeClass("hide");
                $(this).prop( "checked", false );
            }
        }else{
            $(".warning-melahirakan").addClass("hide");
            $("#mat").attr("disabled","disabled");
        }
    });

    $("#planrawatjalan").on("change",function(){
        if($(this).is(":checked")){
            if(getCookie("pembayaran")=="Annually"){
                $(".warning-rawatjalan").addClass("hide");
                $("#out_den").removeAttr("disabled");
            }else{
                $(".warning-rawatjalan").removeClass("hide");
                $(this).prop( "checked", false );
            }
        }else{
            $(".warning-melahirakan").addClass("hide");
            $("#out_den").attr("disabled","disabled");
        }
    });
    
</script>

