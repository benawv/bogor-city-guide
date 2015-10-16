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
        width: 50%;
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
                <ul>
                    <li class="active"><a href="#first">Langkah 1</a></li><!--  DON'T REMOVE THIS COMMENT
                    --><li><a href="#second">Langkah 2</a></li>
                </ul><!--/ .custom-tab -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="content-calc custom-tab-item active" id="first">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Metode Pembayaran Premi</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" name="payment_methods" id="payment_methods">
                            <?php
                                $cat = new Object_SmartmedPaymentType_List();
                                foreach($cat as $payment)
                                {
                                    if ($payment->getPaymenttype() == "Annually"){
                                        echo "<option value='".$payment->getPaymenttype()."'>Tahunan</option>";
                                    }else if ($payment->getPaymenttype() == "Semi-Annually"){
                                        echo "<option value='".$payment->getPaymenttype()."'>Enam Bulanan</option>";
                                    }else if ($payment->getPaymenttype() == "Quarterly"){
                                        echo "<option value='".$payment->getPaymenttype()."'>Tiga Bulanan</option>";
                                    }else if ($payment->getPaymenttype() == "Monthly"){
                                        echo "<option value='".$payment->getPaymenttype()."'>Bulanan</option>";
                                    }
                                    // echo "<option value='".$payment->getPaymenttype()."'>".$payment->getPaymenttype()."</option>";
                                }
                            ?>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Family Discount <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#family"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="2" id="family_discount">
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>No Claim Discount <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#claim"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="3" id="no_claim_discount">
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Manfaat Rawat Inap <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#rawatInap"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="4" id="ip">
                                <option value="0">0%</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Manfaat Melahirkan <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#melahirkan"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="5" id="mat">
                                <option value="0">0%</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Manfaat Rawat Jalan & Rawat Gigi <i class="fa fa-question-circle cursor-help" data-toggle="modal"  data-target="#rawatJalan"></i></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="out_den">
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pilihan Plan Manfaat Rawat Inap</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="planip" onChange="checkData();">
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    echo "<option value='pilih'>Pilih</option>";
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
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan A.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan A';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan B"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan B.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan B';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan C"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan c.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan C';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan D"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan D.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan D';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan E"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan E.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan E';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan F"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan F.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan F';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan G"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan G.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan G';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan H"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan H.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan H';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan I"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan I.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan I';
                                    document.getElementById('notif').style.display='none';
                                }else if(val== "Plan J"){
                                    document.getElementById('file').href="/website/static/pdf-smartmed/Rawat Inap - Plan J.pdf";
                                    document.getElementById('file').style.visibility='visible';
                                    document.getElementById('file').innerHTML='Detail Manfaat Rawat Inap Plan J';
                                    document.getElementById('notif').style.display='none';
                                }else{
                                    document.getElementById('file').style.visibility='hidden';
                                }
                            }
                            </script>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pilihan Plan Manfaat Melahirkan</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="planmat" onChange="checkData2();">
                                <?php
                                    echo "<option value='pilih'>Pilih</option>";
                                    $cat = new Object_SmartmedPlanType_List();
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>"."Plan"." ".strtoupper($payment->getPlanname())."</option>";
                                    }
                                ?>
                            </select>
                            <label id="notif2" style="display:none; color:red;">Manfaat Melahirkan Harus diisi.</label>
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
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Pilihan Plan Manfaat Rawat Jalan & rawat Gigi</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="planop_den" onChange="checkData3();">
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    echo "<option value='pilih'>Pilih</option>";
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>"."Plan"." ".strtoupper($payment->getPlanname())."</option>";
                                    }
                                ?>
                            </select>
                            <label id="notif3" style="display:none; color:red;">Manfaat Rawat Jalan & Rawat Gigi Harus diisi.</label>
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
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next"  value="Kalkulasi">
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

        <div class="content-calc custom-tab-item" id="second">

            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Nama</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Name" id="name" tabindex="1" required>
                            <label id="notif4" style="display:none; color:red; font-weight:bold;">Nama Harus diisi.</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Jenis Kelamin</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="2" id="sex">
                                <option value="m">Pria</option>
                                <option value="f">Wanita</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Tanggal Lahir</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control date" id="dob" placeholder="Tanggal Lahir" tabindex="3" required>
                            <label id="notif5" style="display:none; color:red; font-weight:bold;">Tanggal Lahir Harus diisi.</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Tanggal Kalkulasi</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control date" id="cd" placeholder="Tanggal Kalkulasi" tabindex="4" required>
                            <label id="notif6" style="display:none; color:red;">Tanggal Kalkulasi Harus diisi.</label>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>UW Loading</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="7" id="uwl">
                                <option value="0">0%</option>
                                <option value="25">25%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Add" name="next" value="Add">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

            </div><!--/ .col-md-12 -->

            <div class="row" style="margin: 20px auto 0; padding: 0;">
                <div class="col-xs-12">
                    <div class="table-responsive" style="margin: 0 auto;">
                    <table class="table table-bordered" cellspacing="0" cellpadding="0" border="0">
                        <thead>
                            <tr>
                                <th rowspan="2">Pilihan</th>
                                <th rowspan="2" width="">Nomor</th>
                                <th rowspan="2" width="">Nama</th>
                                <th rowspan="2" width="">Jenis Kelamin</th>
                                <th rowspan="2" width="">Tanggal Lahir</th>
                                <th rowspan="2" width="">Tanggal Kalkulasi</th>
                                <th rowspan="2" width="">Usia</th>
                                <th rowspan="2" width="">Status</th>
                                <th rowspan="2" width="">Plan Rawat Inap</th>
                                <th rowspan="2" width="">Plan Melahirkan</th>
                                <th rowspan="2" width="">Plan Rawat Jalan & Rawat Gigi</th>
                                <th rowspan="2" width="">UW Loading</th>
                                <th colspan="3" class="text-center">Premi</th>
                                <th rowspan="2" width="">Total Premi</th>
                            </tr>
                            <tr>
                                <th>Premi Rawat Inap</th>
                                <th>Premi Melahirkan</th>
                                <th>Premi Rawat Jalan & Rawat Gigi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="16" id="j_premium" class="text-right">0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Biaya Materai</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Biaya Polis</td>
                                <td class="text-right">Rp 30.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Family Discount</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Total Jumlah yang Dibayarkan</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                        </tfoot>
                    </table>

                    </div><!--/ .table-respsonsive -->
                </div><!--/ .col-xs-12 -->
            </div><!--/ .row -->
        </div><!--/ .content-table -->

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
        <p>Diskon Polis Keluarga berlaku untuk Polis Keluarga (Tertanggung, Suami/Istri & Anak).</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="claim" tabindex="-1" role="dialog" aria-labelledby="claimLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="claimLabel">No Claim Discount</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Potongan premi sebesar 20% saat polis diperpanjang yang didapatkan bila Anda dan/atau anggota keluarga tidak melakukan klaim selama 1 (satu) tahun polis penuh.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rawatInap" tabindex="-1" role="dialog" aria-labelledby="rawatInapLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="rawatInapLabel">Manfaat Rawat Inap</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Besaran presentase co-share atau jumlah yang Anda perlu bayar untuk klaim Anda.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="melahirkan" tabindex="-1" role="dialog" aria-labelledby="melahirkanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="melahirkanLabel">Manfaat Melahirkan</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Besaran presentase co-share atau jumlah yang Anda perlu bayar untuk klaim Anda.</p>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="rawatJalan" tabindex="-1" role="dialog" aria-labelledby="rawatJalanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="rawatJalanLabel">Manfaat Rawat Jalan & Rawat Gigi</h4>
      </div>
      <div class="modal-body">
        <!--h3>5 Risiko Kehidupan</h3-->
        <p>Besaran presentase co-share atau jumlah yang Anda perlu bayar untuk klaim Anda.</p>
      </div>
    </div>
  </div>
</div>
<!-- help desk -->

<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

<script>
    $(document).on('change',"#dob", function(){ //bind to all instances of class "date". 
        var date = $("#dob").datepicker('getDate'),
            day  = date.getDate(),
            month = date.getMonth() + 1,
            year =  date.getFullYear();
            yearnext =  date.getFullYear()+50;
            range = year+":"+yearnext;
        console.log(range);
        $("#cd").datepicker('setDate', null);
        $("#cd").datepicker("destroy");
        $("#cd").datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: range,
            maxDate: new Date()
        });


    });

    $(function(){

        /**
         * jQuery DatePicker
         */

        if( $( '.date' ).length > 0 )
        {
            $( '.date' ).datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
        }


        // dob cd
        
        /**
         * Custom Tab
         */

        var btn_calculate_text  = $( '.content-calc input[type="submit"]' ).val();
        var second_tab_enabled = false;

        if( $( '.custom-tab-nav' ).length > 0 )
        {
            $( '.custom-tab-nav a' ).each(function(index, value){
                $( this ).click(function(e){
                    e.preventDefault();
                    var href = $( this ).attr( 'href' );

                    $( '.content-calc input[type="submit"]' ).attr( 'value', btn_calculate_text );
                    $( '.content-calc input[type="submit"]' ).removeClass( 'disabled' );

                    if( ( index != 1 ) || ( ( index == 1 ) && second_tab_enabled ) )
                    {
                        if( $( '.custom-tab-item' + href ).length > 0 )
                        {
                            $( '.custom-tab-nav li' ).removeClass( 'active' );
                            $( this ).parent().addClass( 'active' );
                            $( '.custom-tab-item.active' ).stop().fadeOut( 'fast', function(){
                                $( this ).removeClass( 'active' );
                                $( '.custom-tab-item' + href ).stop().fadeIn( 'fast', function(){
                                    $( '.custom-tab-item' + href ).addClass( 'active' );
                                });
                            });
                        }
                    }
                    else
                    {
                        // do nothing
                    }
                    return false;
                });
            });
        }

        /**
         * Trigger second tab navigation
         */

        if( $( '.content-calc input[type="submit"]' ).length > 0 )
        {
            $( '.content-calc input[type="submit"]' ).click(function(e){
                e.preventDefault();

                if( !second_tab_enabled )
                {
                    second_tab_enabled = true;
                }

                /**
                 * Taro proses AJAX dimarih, kalo success panggil trigger-nya
                 * masih simulasi pake setTimeout
                 */
                var planip = $("#planip").val();
                var planmat = $("#planmat").val();
                var planop = $("#planop_den").val();
                // var method = $("#payment_methods").val();
                // alert(method);
                if(planip == 'pilih'){
                    document.getElementById('notif').style.display='block';
                    document.getElementById("planip").focus();
                }else if(planmat == 'pilih'){
                    document.getElementById('notif2').style.display='block';
                    document.getElementById("planmat").focus();
                }else if(planop == 'pilih'){
                    document.getElementById('notif3').style.display='block';
                    document.getElementById("planop_den").focus();
                }else{
                $( this ).attr( 'value', 'Loading...' );
                $( this ).addClass( 'disabled' );
                setTimeout(function(){
                    $( '.custom-tab-nav ul > li:nth-child(2) > a' ).trigger( 'click' );
                }, 1000 );
                }
                return false;
            });
        }

    });

    $(document).on('focus',".date", function(){ //bind to all instances of class "date". 
        // console.log('klik');
        $(".date").datepicker({
                changeMonth: true,
                changeYear: true,
                yearRange: "-100:+0"
            });
    });

    function selisih(dob, cd){
        // varibel miliday sebagai pembagi untuk menghasilkan hari
        var miliday = 24 * 60 * 60 * 1000 * 365;
        //buat object Date
        var tanggal1 = new Date(dob);
        var tanggal2 = new Date(cd);
        // Date.parse akan menghasilkan nilai bernilai integer dalam bentuk milisecond
        var tglPertama = Date.parse(tanggal1);
        var tglKedua = Date.parse(tanggal2);
        var selisih = (tglKedua - tglPertama) / miliday;

        // console.log("selisih="+tglPertama+"-"+tglKedua);
        return selisih;
    }

    
    function kalk(age,sex,code,coshare,withval,plan){
        var payment = $("#payment_methods").val();
        var fd = $("#family_discount").val();
        var ncd = $("#no_claim_discount").val();
        var uwl = $("#uwl").val();
        var value = 0;
        var form_data = {
                payment: payment,
                fd: fd,
                ncd: ncd,
                age: age,
                sex: sex,
                code: code,
                coshare: coshare,
                uwl: uwl,
                plan: plan,
                ajax:1
        };
        $.ajax({
                async: false,
                url : "calc_smartmed/"+payment+"_"+fd+"_"+ncd+"_"+age+"_"+sex+"_"+code+"_"+coshare+"_"+uwl+"_"+plan,
                type : 'POST',
                //data : form_data,
                beforeSend: function () {
                },
                success: function(msg){
                    // console.log(plan+" "+msg);
                    console.log("log:Paymen="+payment+"_FD="+fd+"_NCD="+ncd+"_AGE="+age+"_SEX="+sex+"_CODE="+code+"_COSHARE="+coshare+"_UWL="+uwl+"_PLAN="+plan+"|msg="+msg);
                    if(msg=="")
                        value = 0;
                    else
                        value = parseInt(msg);
                },error: function (xhr, ajaxOptions, thrownError){
                }
        });
        if(withval == 1 && value != 0){
            var disc = value * (25/100);
            value += disc ;
        }
        return value;
    } 

    function jumlah(){
        var rowCount = $('table.table tbody tr').length;
        var total = stamp = totfd = jml = totalwithoutuwl = 0;
        for(var i = 0; i < rowCount; i++){
            total += parseInt($('table.table tbody').children()[i].children[15].children[0].value);
            // totalwithoutuwl += parseInt($('table.table tbody').children()[0].children[16].innerHTML);
            // console.log("total"+parseInt($('table.table tbody').children()[i].children[15].innerHTML));
        }

        $('table.table tfoot tr:first').children()[0].innerHTML = 'Rp. ' + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0';
        if(total>=250000 && total<1000000) stamp = 3000;
        else if(total>=1000000) stamp = 6000;
        $('table.table tfoot').children()[1].children[1].innerHTML = 'Rp. ' + stamp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0';//stamp duty

        totfd = cekFamilyDiskon();

        $('table.table tfoot').children()[3].children[1].innerHTML = 'Rp. ' + totfd.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0';//family discount

        jml = stamp + total + 30000 - totfd;
        $('table.table tfoot').children()[4].children[1].innerHTML = 'Rp. ' + jml.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0';
        return total;
    }
    
    // function update(){
    //     var rowCount = $('table.table tbody tr').length;
    //     var total = 0;
    //     for(var i = 0; i<rowCount; i++){
    //         total += parseInt($('table.table tbody').children()[0].children[15].innerHTML);
    //     }
    //     console.log(total);
    //     $('table.table tfoot tr:first').children()[0].innerHTML = 'Rp. ' + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0';;
    //     console.log($('table.table tfoot tr:first').children()[0].innerHTML);
    //     return 0;
    // }

    function form_sex(sex){
        if(sex == "m")
            sex_form = "<select id='sex' name='sex' class='form-control'>"+
                            "<option selected value='m'>P</option>"+
                            "<option value='f'>W</option>"+
                        "</select>";
        else
            sex_form = "<select id='sex' name='sex' class='form-control'>"+
                            "<option value='m'>P</option>"+
                            "<option selected value='f'>W</option>"+
                        "</select>";
        return sex_form;
    }
    function form_uwl(val){
        if(val == '0')
            uwl_form = "<select id='uwl' name='uwl' class='form-control'>"+
                            "<option selected value='0'>0%</option>"+
                            "<option value='25'>25%</option>"+
                        "</select>";
        else
            uwl_form = "<select id='uwl' name='uwl' class='form-control'>"+
                            "<option value='0'>0%</option>"+
                            "<option selected value='25'>25%</option>"+
                        "</select>";
        return uwl_form;
    }


    $("#Add").click(function(){
        var payment = $("#payment_methods").val();
        var uwl = $("#uwl").val();
        var sts_allowed = "NEW BUSINESS";
        var name = $("#name").val();
        var dob = $("#dob").val();
        var cd = $("#cd").val();

        if (name == ""){
            document.getElementById("notif4").style.display="block";
            document.getElementById("name").focus();
        }else if(dob == ""){
            document.getElementById("notif5").style.display="block";
            document.getElementById("dob").focus();
        }else if (cd == ""){
            document.getElementById("notif6").style.display="block";
            document.getElementById("cd").focus();
        }else{
            document.getElementById("notif4").style.display="none";
            document.getElementById("notif5").style.display="none";
            document.getElementById("notif6").style.display="none";

        dist = parseInt(selisih(dob, cd));
        
        var age = dist;//Math.round(dist/(1000*60*60*24*365));
        var sex = $("#sex").val();
        var ip = $("#ip").val();
        var mat = $("#mat").val();
        var outden = $("#out_den").val();
        var planipval = $("#planip").val();
        var planmatval = $("#planmat").val();
        var planop_denval = $("#planop_den").val();

        planip = planipval.split("_")[0];
        planmat = planmatval.split("_")[0];
        planop_den = planop_denval.split("_")[0];

        //with premium
        ipp1 = kalk(age,sex,"ip",ip,1,planip);
        matp1 = kalk(age,sex,"ma",mat,1,planmat);
        opdenp1 = kalk(age,sex,"od",outden,1,planop_den);
        
        //with no premium
        ipp0 = kalk(age,sex,"ip",ip,0,planip);
        matp0 = kalk(age,sex,"ma",mat,0,planmat);
        opdenp0 = kalk(age,sex,"od",outden,0,planop_den);
        totalwithout = parseInt(ipp0)+parseInt(matp0)+parseInt(opdenp0);

        console.log("ipp1="+ipp1+" matp1="+matp1+" opdenp1="+opdenp1);
        console.log("ipp0="+ipp0+" matp0="+matp0+" opdenp0="+opdenp0);
        
        if(payment != "Annually"){
            matp = 0;
            opdenp = 0;
            if(uwl > 0) ipp = ipp1;
            else ipp = ipp0;
        }else{
            if(uwl > 0) {
                ipp = ipp1;
                matp = matp1;
                opdenp = opdenp1;
            }else {
                ipp = ipp0;
                matp = matp0;
                opdenp = opdenp0;
            }
        }
        total = parseInt(ipp)+parseInt(matp)+parseInt(opdenp);
        var rowCount = $('table.table tbody tr').length;
        var no = parseInt(rowCount)+1;

        $("table.table tbody").append("<tr>"+
                "<td class='tabletd'><a data-id='"+no+"' onclick='edit(this)'>Ubah</a> | <a data-id='"+no+"' onclick='delrow(this)'>Hapus</a></td>"+
                "<td class='tabletd'>"+no+"</td>"+
                "<td><input type='text' class='form-control' placeholder='Nama' value='"+name+"' class='display'></td>"+
                "<td>"+form_sex(sex)+"</td>"+
                "<td><input class='date dob2' type='text' placeholder='Tanggal Lahir' name='dob"+no+"' id='dob"+no+"' value='"+dob+"'></td>"+
                "<td><input class='date cd2' type='text' placeholder='Tanggal Kalkulasi' name='cd"+no+"' id='cd"+no+"' value='"+cd+"'></td>"+
                "<td class='tabletd age'>"+age+"</td>"+
                "<td class='tabletd'>NEW BUSINESS</td>"+
                "<td class='tabletd'>"+planipval.split("_")[1]+"</td>"+
                "<td class='tabletd'>"+planmatval.split("_")[1]+"</td>"+
                "<td class='tabletd'>"+planop_denval.split("_")[1]+"</td>"+
                "<td class='uwl'>"+form_uwl(uwl)+"</td>"+
                "<td class='tabletd ipp'>"+'Rp. ' + ipp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0'+"</td>"+
                "<td class='tabletd matp'>"+'Rp. ' + matp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0'+"</td>"+
                "<td class='tabletd opdenp'>"+'Rp. ' + opdenp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0'+"</td>"+
                "<td class='tabletd to'><input type='hidden' name='tohidden' value='"+total+"'><span class='toshow'>"+'Rp. ' + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.")+"</span></td>"+
                "<td style='display:none;' class='towithout'>"+totalwithout+"</td>"+
            "</tr>");
        jumlah();
    }
    });

    function cekFamilyDiskon(){
        var rowCount = $('table.table tbody tr').length;
        var total = 0;
        var fd = $("#family_discount").val();
        if(rowCount>1&&fd=="Y"){
            $('table.table tbody tr').each(function(index){
                total += parseInt($(this).find(".towithout").html());
                console.log("towithout="+total);
            });
            total *= 0.05;
        }
        return total;
    }

    
    
    function edit(){
        var rowCount = $('table.table tbody tr').length;
        var total = stamp = totfd = jml = totalwithoutuwl = 0;
        var fd = $("#family_discount").val();
        var payment = $("#payment_methods").val();
        // console.log(rowCount);
        //console.log($(this).parent().html());
        $('table.table tbody tr').each(function(index){
            console.log("index"+index);
            var uwl = $( this ).find("#uwl").val()

            var dob = $( this ).find(".dob2").val();
            var cd = $( this ).find(".cd2").val();
            var sex = $( this ).find("#sex").val();
            dist = parseInt(selisih(dob, cd));
            var age = dist;//Math.round(dist/(1000*60*60*24*365));
            $( this ).find(".age").html(age);

            var ip = $("#ip").val();
            var mat = $("#mat").val();
            var outden = $("#out_den").val();
            var planipval = $("#planip").val();
            var planmatval = $("#planmat").val();
            var planop_denval = $("#planop_den").val();

            planip = planipval.split("_")[0];
            planmat = planmatval.split("_")[0];
            planop_den = planop_denval.split("_")[0];

            //with premium
            ipp1 = kalk(age,sex,"ip",ip,1,planip);
            matp1 = kalk(age,sex,"ma",mat,1,planmat);
            opdenp1 = kalk(age,sex,"od",outden,1,planop_den);
            
            //with no premium
            ipp0 = kalk(age,sex,"ip",ip,0,planip);
            matp0 = kalk(age,sex,"ma",mat,0,planmat);
            opdenp0 = kalk(age,sex,"od",outden,0,planop_den);
            totalwithout = parseInt(ipp0)+parseInt(matp0)+parseInt(opdenp0);

            console.log( index + ": " + $( this ).find("#dob2").val() );
            console.log("ipp1="+ipp1+" matp1="+matp1+" opdenp1="+opdenp1+" dob="+dob+" uwl="+uwl);
            console.log("ipp0="+ipp0+" matp0="+matp0+" opdenp0="+opdenp0+" cd"+ cd);
            console.log("totalwithout="+totalwithout);
            
            // return true;
            if(payment != "Annually"){
                matp = 0;
                opdenp = 0;
                if(uwl > 0) ipp = ipp1;
                else ipp = ipp0;
            }else{
                if(uwl > 0) {
                    ipp = ipp1;
                    matp = matp1;
                    opdenp = opdenp1;
                }else {
                    ipp = ipp0;
                    matp = matp0;
                    opdenp = opdenp0;
                }
            }
            total = parseInt(ipp)+parseInt(matp)+parseInt(opdenp);
            $( this ).find(".ipp").html('Rp. ' + ipp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0');
            $( this ).find(".matp").html('Rp. ' + matp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0');
            $( this ).find(".opdenp").html('Rp. ' + opdenp.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1.") + ',0');
            $( this ).find(".tohidden").html('Rp. ' + total.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1."));
            $( this ).find(".toshow").val(total);
            $( this ).find(".towithout").html(totalwithout);
            jumlah();
        });
        return 0;
    }
    
    function delrow(){
        // alert($(event.target).attr("data-id"));
        var id = parseInt($(event.target).attr("data-id"))-1;
        $("table.table tbody").children()[id].remove();
        jumlah();
        return 0;
    }

</script>

