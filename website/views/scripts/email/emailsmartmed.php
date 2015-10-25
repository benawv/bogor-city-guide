<html>
<head>
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">

<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/tasbih/tasbih.css" />
<link rel="stylesheet" type="text/css" media="all" href="/website/static/mobilku/wizard-step.css" />

<link rel="stylesheet" type="text/css" media="all" href="/website/ajfc/css/style.css" />
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Meta Tags -->
<meta charset="utf-8">
    

    
<style>
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
        text-align: left;
        font-weight: bold !important;
        vertical-align: middle !important;
    }

    .table-responsive > table > tbody > tr:nth-child(odd) > td
    {
        background: #cdedf8;
    }

    .table-responsive > table > tbody > tr > td:first-child
    {
        text-align: left;
    }
</style>
</head>
<body style="font-size: 100%;background: none repeat scroll 0 0 #f5f6f6;color: #111;
    font-family: Arial,Helvetica,sans-serif;text-align: center;">
<div role="main" class="main no-gutter" style="clear: both;padding: 20px 0 0 10px;width: 100%;padding: 0 !important;">
	<div class="blast-container" style="margin: 0 auto;padding: 0 15px;position: relative;text-align: left;width: 600px;">
		
		<!--jurnal -->
		
		<div id="community no-gutter no-margin" class="clearfix">
			
			<div class="blast-img" style="height: auto;">
                   <!-- <img src="_assets/css/bootstrap/edwin.jpg" /> -->
                   <?php echo $this->image('imgEmail', array(
									'title' 	=> 'Image Size 600px X 400px',
									'width' 	=> 600,
									'height' 	=> 400)) ?>
			</div>
            
		</div> <!--Community-->
		
		<div id="community" class="clearfix padding no-margin" style="background: none repeat scroll 0 0 #fff;clear: both;margin-bottom: 20px;padding: 15px;padding: 15px 34px !important;margin: 0 !important;">
            <?php echo $this->wysiwyg('description')?>
            <div class="table-responsive" style="margin: 0 auto;">
<table border="0" cellpadding="0" cellspacing="0" class="table table-bordered">
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Nomor</span></font></strong></strong></td>
			<td class="text-left nomor"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Nama</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Jenis Kelamin</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Tanggal Lahir</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Tanggal Hitung</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Plan Rawat Inap</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Plan Melahirkan</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Plan Rawat Jalan dan Rawat Gigi</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td rowspan="4" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi</span></font></strong></strong></td>
        </tr>
        <tr>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi Rawat Inap</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
        </tr>
        <tr>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi Melahirkan</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
        </tr>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Premi Rawat Jalan dan Rawat Gigi</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Total Premi</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px; line-height: 18px;">Biaya Materai</span></font></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Biaya Polis</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Rp 30.000</span></font></strong></strong></td>
		</tr>
		<tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Family Discount</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>		
        <tr>
			<td colspan="2" class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;">Total Jumlah yang Dibayarkan</span></font></strong></strong></td>
			<td class="text-left"><strong><strong><font color="#111111" face="Roboto, helvetica, arial, sans-serif"><span style="font-size: 12px;"></span></font></strong></strong></td>
		</tr>
</table>
</div>

                        <?php echo $this->wysiwyg('description2')?>

		</div> <!--Community-->
        <img src="/website/static/images/allianz-footer-logo.jpg" />
	</div>
</div>
</body>
</html>