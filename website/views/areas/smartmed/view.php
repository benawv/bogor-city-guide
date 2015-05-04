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
                            <select class="form-control" required tabindex="1" id="payment_methods">
                                <option value="Annualy">Annualy</option>
                                <option value="Monthly">Monthly</option>
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
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div><!--/ .col-md-4 -->
                    </div><!--/ .form-group -->

                    <div class="form-group">
                        <div class="col-md-4">
                            <label><strong>Date of Birth</strong></label>
                        </div><!--/ .col-md-4 -->
                        <div class="col-md-4">
                            <input type="text" class="form-control datepicker" id="dob" placeholder="Date of Birth" tabindex="3" required>
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
                            <tr>
                                <td></td>
                                <td>1</td>
                                <td><input type="text" placeholder="Name"></td>
                                <td>
                                    <select>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                    </select>
                                </td>
                                <td><input type="text" placeholder="Date of Birth" class="datepicker"></td>
                                <td><input type="text" placeholder="Calculation Date" value="<?php echo date( 'd F Y' ); ?>"></td>
                                <td>25</td>
                                <td>
                                    <select>
                                        <option value="NEW BUSINESS">NEW BUSINESS</option>
                                        <option value="OLD BUSINESS">OLD BUSINESS</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option value="-">-</option>
                                    </select>
                                </td>
                                <td>
                                    <select>
                                        <option value="0">0%</option>
                                        <option value="25">25%</option>
                                        <option value="50">50%</option>
                                        <option value="75">75%</option>
                                    </select>
                                </td>
                                <td>5.476.125</td>
                                <td>1.234.567</td>
                                <td>-</td>
                                <td>1.2345.567</td>
                            </tr>
                            <?php for( $i = 1; $i < 5; $i++ ): ?>
                            <tr>
                                <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                                <td><?php echo $i; ?></td>
                                <td>Mohammed Ali</td>
                                <td>M</td>
                                <td>10 Jan 1990</td>
                                <td><?php echo date( 'd F Y' ); ?></td>
                                <td>25</td>
                                <td>NEW BUSINESS</td>
                                <td>A</td>
                                <td>A</td>
                                <td>-</td>
                                <td>25%</td>
                                <td>5.476.125</td>
                                <td>1.234.567</td>
                                <td>-</td>
                                <td>1.2345.567</td>
                            </tr>
                            <?php endfor; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="15" class="text-right">0</td>
                            </tr>
                            <tr>
                                <td colspan="14" class="text-right">Stamp duty</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="14" class="text-right">Policy fee</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="14" class="text-right">Family Discount</td>
                                <td class="text-right">Rp000.000.000,0</td>
                            </tr>
                            <tr>
                                <td colspan="14" class="text-right">Total Amount to Pay</td>
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
    $(function(){

        /**
         * jQuery DatePicker
         */

        if( $( '.datepicker' ).length > 0 )
        {
            $( '.datepicker' ).datepicker({
                changeMonth: true,
                changeYear: true,
                maxDate: '0'
            });
        }

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
</script>

<!--
</div>
-->
