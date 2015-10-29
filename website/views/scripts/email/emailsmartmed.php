<html>
<head>
<!-- Meta Tags -->
<meta charset="utf-8">
<style>
	.table-responsive{
		overflow: auto;
        margin: 0 35px;
        background: #f5f6f6;
	}
    table
    {
		
        border-collapse: collapse;
        -moz-box-sizing: border-box;
    }

    table > tbody > tr > td > a
    {
        color: #666 !important;
        text-decoration: none;
    }

    table > tbody > tr > td > a:hover,
    table > tbody > tr > td > a:focus
    {
        color: #666 !important;
        text-decoration: underline;
    }

    table > tbody > tr > td > input,
    table > tbody > tr > td > select
    {
        background: transparent;
        border: none !important; /*solid 1px #ddd !important;*/
        box-shadow: 0 0 0 transparent !important;
        padding: 4px 8px;
        font-size: small;
        width: 100%;
    }

    table > tbody > tr > td > input::-webkit-input-placeholder {
        color: #111 !important;
        font-style: normal !important;
    }

    table > tbody > tr > td > input:-moz-placeholder { /* Firefox 18- */
        color: #111 !important;
        font-style: normal !important;
    }

    table > tbody > tr > td > input::-moz-placeholder {  /* Firefox 19+ */
        color: #111 !important;
        font-style: normal !important;
    }

    table > tbody > tr > td > input:-ms-input-placeholder {
        color: #111 !important;
        font-style: normal !important;
    }

    table th,
    table td
    {
        white-space: nowrap !important;
        padding: 4px 8px;
        font-weight: normal;
        font-size: 14px;
        min-width: 72px;
    }

    table > thead > tr > th
    {
        text-align: center;
        font-weight: bold !important;
        vertical-align: middle !important;
    }

    table > tbody > tr:nth-child(odd) > td
    {
        background: #cdedf8;
    }

    table > tbody > tr > td:first-child
    {
        text-align: center;
    }
    i.cursor-help {
       color: #4747FF;
       cursor: help;
    }
    .table-responsive > table
    {
        border-collapse: collapse;
        -moz-box-sizing: border-box;
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
		
		<div id="community" class="clearfix padding no-margin" style="background: none repeat scroll 0 0 #fff;margin-bottom: 20px;padding: 15px;padding: 15px !important;margin: 0!important;float: left;width: 95%;">
            <div class="table-responsive" style="margin: 0 auto; overflow-y: auto !important;">
            	<?php echo $this->wysiwyg('description')?>
            </div>
            

		</div> <!--Community-->
        <img src="/website/static/images/allianz-footer-logo.jpg" />
	</div>
</div>
</body>
</html>