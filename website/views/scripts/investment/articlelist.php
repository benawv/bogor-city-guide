<?php echo $this->template("includes/inv/header.php")?>



<?php
    
    
	if(count($this->data)>0)
	{
?>
            
<div class="header_page bg_future">
	<div class="container">
		Article <?php echo $this->data->investment; ?>
	</div>
</div>


<div class="main_wrap">
	<div class="container">

		<div class="row">
			<div class="bread">
				<a href="/investasi/investment-homepage">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="/investment/investment-category/<?php echo $this->data->investment_id; ?>">Article</a>

				<i class="fa fa-angle-right"></i>
				Article Index <?php foreach ($this->data->investment as $inv) {  echo $inv['investment'];}  ?>

			</div>
		</div>

	</div>
	<!-- container end -->


	<div class="row">
		<div class="container">

			<div class="listarticle">

				<ul>
                    <?php 
                    
                        foreach($this->data as $entry)
		                  {
                    ?>
					<li class="bg_future">
						<h3><?php echo $entry->title ?></h3>
						<p><?php echo substr($entry->content,0,100) ?>...</p>

                        <a href="/investment/investment-article/<?php echo $entry->getO_key()."_".$entry->getO_id()."_1";?>">Selengkapnya <i class="fa fa-angle-right"></i></a>

					</li>
                    <?php } ?>
				</ul>

			</div>
			<!-- listarticle end -->

			<div class="paging">

				<ul>
					<li><a href="#">First</a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">Last</a></li>
				</ul>

			</div>

				


			  
			

		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->



            <?php  
    } ?>

<?php echo $this->template("includes/inv/footer.php")?>