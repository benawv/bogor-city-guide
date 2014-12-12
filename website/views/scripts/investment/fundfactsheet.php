<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page bg_future">
	<div class="container">
		<?php echo $this->input('title-funds')?>
	</div>
</div>

<div class="main_wrap">

<div class="row">
		
		<?php echo $this->areablock('resources-object', array('allowed' => array('inv-fund-moneymarket','inv-fund-balanced','inv-fund-equity','inv-fund-fixedincome')))?>
		
	</div>	<!-- row end -->

</div>
<!-- homebanner end -->
<?php echo $this->template("includes/inv/footer.php")?>