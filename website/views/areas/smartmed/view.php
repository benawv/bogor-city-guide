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

<div id="newsletter-allianz" class="full-w bg-white nopadding">

    <div class="description">

        <div class="header-calc">
            <h1>KALKULATOR ASURANSI SMARTMED</h1>
        </div><!--/ .header-calc -->

        <div class="row custom-tab-nav">
            <div class="col-xs-12">
                <ul>
                    <li class="active"><a href="#first">Step 1</a></li><!--  DON'T REMOVE THIS COMMENT
                    --><li><a href="#second">Step 2</a></li>
                </ul><!--/ .custom-tab -->
            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->

        <div class="content-calc custom-tab-item active" id="first">
            <div class="col-md-12">

                <form class="form-horizontal" role="form">

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Payment Methods</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="1" name="payment_methods" id="payment_methods">
                            <?php
                                $cat = new Object_SmartmedPaymentType_List();
                                foreach($cat as $payment)
                                {
                                    echo "<option value='".$payment->getPaymenttype()."'>".$payment->getPaymenttype()."</option>";
                                }
                            ?>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Family Discount</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="2" id="family_discount">
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>No Claim Discount</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="3" id="no_claim_discount">
                                <option value="Y">Yes</option>
                                <option value="N">No</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>IP</label>
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
                            <label>MAT</label>
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
                            <label>OUT+DEN</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="out_den">
                                <option value="0">0%</option>
                                <option value="10">10%</option>
                                <option value="20">20%</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->
                    <div class="form-group">
                        <div class="col-md-4">
                            <label>PLAN IP</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="planip">
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>".$payment->getPlanname()."</option>";
                                    }
                                ?>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>PLAN MAT</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="planmat">
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>".$payment->getPlanname()."</option>";
                                    }
                                ?>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>PLAN OP+DEN</label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="6" id="planop_den">
                                <?php
                                    $cat = new Object_SmartmedPlanType_List();
                                    foreach($cat as $payment)
                                    {
                                        echo "<option value='".$payment->getO_id()."_".$payment->getPlanname()."'>".$payment->getPlanname()."</option>";
                                    }
                                ?>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="submit" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih" id="Kalkulasi" name="next" value="Kalkulasi">
                        </div><!--/ .col-md-12 -->
                    </div><!--/ .form-group -->

                </form>

                <div class="col-md-12 note">
                    <h4 class="mb10"><strong>Note: </strong></h4>
                    <ul class="mb30">
                        <li>Perhitungan ini adalah perhitungan premi standar.</li>
                        <li>Diskon Polis Keluarga berlaku untuk Polis Keluarga (Tertanggung, Suami/Istri &amp; Anak)</li>
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
                            <label><strong>Name</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="name" placeholder="Name" tabindex="1" required>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Sex</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <select class="form-control" required tabindex="2" id="sex">
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Date of Birth</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control date" id="dob" placeholder="Date of Birth" tabindex="3" required>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Calculation Date</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control date" id="cd" placeholder="Calculation Date" tabindex="4" required>
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
                                <th rowspan="2">Actions</th>
                                <th rowspan="2" width="">No.</th>
                                <th rowspan="2" width="">Name</th>
                                <th rowspan="2" width="">Sex</th>
                                <th rowspan="2" width="">Date of Birth</th>
                                <th rowspan="2" width="">Calculation Date</th>
                                <th rowspan="2" width="">Age</th>
                                <th rowspan="2" width="">Status Allowed</th>
                                <th rowspan="2" width="">Plan IP</th>
                                <th rowspan="2" width="">Plan MAT</th>
                                <th rowspan="2" width="">Plan OP+DEN</th>
                                <th rowspan="2" width="">UW Loading</th>
                                <th colspan="3" class="text-center">Premium</th>
                                <th rowspan="2" width="">Total Premium</th>
                            </tr>
                            <tr>
                                <th>IP Premium</th>
                                <th>MAT Premium</th>
                                <th>OP+DEN Premium</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="16" id="j_premium" class="text-right">0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Stamp duty</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Policy fee</td>
                                <td class="text-right">Rp 30.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Family Discount</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="15" class="text-right">Total Amount to Pay</td>
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

                $( this ).attr( 'value', 'Loading...' );
                $( this ).addClass( 'disabled' );
                setTimeout(function(){
                    $( '.custom-tab-nav ul > li:nth-child(2) > a' ).trigger( 'click' );
                }, 1000 );

                return false;
            });
        }

    });

    $(document).on('focus',".date", function(){ //bind to all instances of class "date". 
        // console.log('klik');
        $(".date").datepicker();
    });

    function selisih(dob, cd){
        var date = dob.split('/');
        var y1 = date[2];
        var d1 = date[1];
        var m1 = date[0];

        var date2 = cd.split('/');
        var y2 = date2[2];
        var d2 = date2[1];
        var m2 = date2[0];

        var start = new Date(y1,m1,d1);
        var end = new Date(y2,m2,d2);
        var selisih = Date.parse(end.toGMTString()) - Date.parse(start.toGMTString());
        // console.log("selisih"+selisih);
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
                    console.log("XxX="+payment+"_"+fd+"_"+ncd+"_"+age+"_"+sex+"_"+code+"_"+coshare+"_"+uwl+"_"+plan+"|msg="+msg);
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
        var fd = $("#family_discount").val();
        var dob = $("#dob").val();
        var cd = $("#cd").val();
        console.log(rowCount);
        for(var i = 0; i < rowCount; i++){
            total += parseInt($('table.table tbody').children()[0].children[15].innerHTML);
            totalwithoutuwl += parseInt($('table.table tbody').children()[0].children[16].innerHTML);
        }
        $('table.table tfoot tr:first').children()[0].innerHTML = total;
        if(total>=250000 && total<1000000) stamp = 3000;
        else if(total>=1000000) stamp = 6000;
        $('table.table tfoot').children()[1].children[1].innerHTML = stamp;//stamp duty

        if(fd == "Y" && rowCount > 1) totfd = 0.05 * totalwithoutuwl;
        else totfd = 0;

        $('table.table tfoot').children()[3].children[1].innerHTML = totfd;//family discount

        jml = stamp + total + 30000 - totfd;
        $('table.table tfoot').children()[4].children[1].innerHTML = 'Rp. ' + jml + ',0';
        return total;
    }
    
    function update(){
        var rowCount = $('table.table tbody tr').length;
        var total = 0;
        for(var i = 0; i<rowCount; i++){
            total += parseInt($('table.table tbody').children()[0].children[15].innerHTML);
        }
        console.log(total);
        $('table.table tfoot tr:first').children()[0].innerHTML = total;
        console.log($('table.table tfoot tr:first').children()[0].innerHTML);
        return 0;
    }

    function form_sex(sex){
        if(sex == 'M')
            sex_form = "<select id='sex' name='sex' class='form-control'>"+
                            "<option selected value='M'>M</option>"+
                            "<option value='F'>F</option>"+
                        "</select>";
        else
            sex_form = "<select id='sex' name='sex' class='form-control'>"+
                            "<option value='M'>M</option>"+
                            "<option selected value='F'>F</option>"+
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
        var fd = $("#family_discount").val();
        var uwl = $("#uwl").val();
        var sts_allowed = "NEW BUSINESS ";
        var name = $("#name").val();
        var dob = $("#dob").val();
        var cd = $("#cd").val();

        dist = parseInt(selisih(dob, cd));
        
        var age = Math.round(dist/(1000*60*60*24*365));
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
                "<td class='tabletd'><a data-id='"+no+"' onclick='edit(this)'>Edit</a> | <a data-id='"+no+"' onclick='delrow(this)'>Delete</a></td>"+
                "<td class='tabletd'>"+no+"</td>"+
                "<td><input type='text' class='form-control' placeholder='Name' value='"+name+"' class='display'></td>"+
                "<td>"+form_sex(sex)+"</td>"+
                "<td><input class='date' type='text' placeholder='Date of Birth' name='dob2' id='dob2' value='"+dob+"'></td>"+
                "<td><input class='date' type='text' placeholder='Calculation Date' name='cd2' id='cd2' value='"+cd+"'></td>"+
                "<td class='tabletd age'>"+age+"</td>"+
                "<td class='tabletd'>NEW BUSINESS</td>"+
                "<td class='tabletd'>"+planipval.split("_")[1]+"</td>"+
                "<td class='tabletd'>"+planmatval.split("_")[1]+"</td>"+
                "<td class='tabletd'>"+planop_denval.split("_")[1]+"</td>"+
                "<td class='uwl'>"+form_uwl(uwl)+"</td>"+
                "<td class='tabletd ipp'>"+ipp+"</td>"+
                "<td class='tabletd matp'>"+matp+"</td>"+
                "<td class='tabletd opdenp'>"+opdenp+"</td>"+
                "<td class='tabletd to'>"+total+"</td>"+
                "<td style='display:none;' class='towithout'>"+totalwithout+"</td>"+
            "</tr>");
        jumlah();
    });
    
    function edit(){
        var rowCount = $('table.table tbody tr').length;
        var total = stamp = totfd = jml = totalwithoutuwl = 0;
        var fd = $("#family_discount").val();
        var payment = $("#payment_methods").val();
        // console.log(rowCount);
        //console.log($(this).parent().html());
        $('table.table tbody tr').each(function(index){

            var uwl = $( this ).find(".uwl").val()

            var dob = $( this ).find("#dob2").val();
            var cd = $( this ).find("#cd2").val();
            var sex = $( this ).find("#sex").val();
            dist = parseInt(selisih(dob, cd));
            var age = Math.round(dist/(1000*60*60*24*365));
            $( this ).find(".age").html(age);

            var ip = $("#ip").val();
            var mat = $("#mat").val();
            var outden = $("#out_den").val();
            var planipval = $("#planip").val();
            var planmatval = $("#planmat").val();
            var planop_denval = $("#planop_den").val();
            console.log( index + ": " + $( this ).find("#dob2").val() );

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
            $( this ).find(".ipp").html(ipp);
            $( this ).find(".matp").html(matp);
            $( this ).find(".opdenp").html(opdenp);
            $( this ).find(".to").html(totalwithout);
            $( this ).find(".towithout").html(totalwithout);
            jumlah();
        });
        // for(var i = 0; i < rowCount; i++){
        //     console.log($('table.table tbody').children()[0].children[5].find("input"));
        //     sex = $('table.table tbody').children()[i].children[3].value;
        //     date1 = $('table.table tbody').children()[0].children[4].value;
        //     date2 = $('table.table tbody').children()[i].children[5].value;
        //     uwl = $('table.table tbody').children()[i].children[11].value;
        //     dist = selisih(date1, date2);
        //     age = Math.round(dist/(1000*60*60*24*365));
        //     $('table.table tbody').children()[i].children[5].innerHTML = age;
        //     var ip = $("#ip").val();
        //     var mat = $("#mat").val();
        //     var outden = $("#out_den").val();
        //     var planipval = $("#planip").val();
        //     var planmatval = $("#planmat").val();
        //     var planop_denval = $("#planop_den").val();

        //     planip = planipval.split("_")[0];
        //     planmat = planmatval.split("_")[0];
        //     planop_den = planop_denval.split("_")[0];

        //     //with premium
        //     ipp1 = kalk(age,sex,"ip",ip,1,planip);
        //     matp1 = kalk(age,sex,"ma",mat,1,planmat);
        //     opdenp1 = kalk(age,sex,"od",outden,1,planop_den);
            
        //     //with no premium
        //     ipp0 = kalk(age,sex,"ip",ip,0,planip);
        //     matp0 = kalk(age,sex,"ma",mat,0,planmat);
        //     opdenp0 = kalk(age,sex,"od",outden,0,planop_den);
        //     totalwithout = parseInt(ipp0)+parseInt(matp0)+parseInt(opdenp0);

        //     if(payment != "Annually"){
        //         matp = 0;
        //         opdenp = 0;
        //         if(uwl > 0) ipp = ipp1;
        //         else ipp = ipp0;
        //     }else{
        //         if(uwl > 0) {
        //             ipp = ipp1;
        //             matp = matp1;
        //             opdenp = opdenp1;
        //         }else {
        //             ipp = ipp0;
        //             matp = matp0;
        //             opdenp = opdenp0;
        //         }
        //     }
        //     total = parseInt(ipp)+parseInt(matp)+parseInt(opdenp);

        //     $('table.table tbody').children()[i].children[12].innerHTML = ipp;//ipp
        //     $('table.table tbody').children()[i].children[13].innerHTML = matp;//matp
        //     $('table.table tbody').children()[i].children[14].innerHTML = opdenp;//opden
        //     $('table.table tbody').children()[i].children[15].innerHTML = total;//total
        //     $('table.table tbody').children()[i].children[16].innerHTML = totalwithout;//total without
        // }

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

<style type="text/css">
    /*table.table tbody tr td span.display
    {
        display: inherit;
    }
    table.table tbody tr td span.edit
    {
        display: none;
    }

    table.table tbody tr td input.display
    {
        display: none;
    }
    table.table tbody tr td input.edit
    {
        display: inherit;
    }*/
</style>

<!--
</div>
-->
