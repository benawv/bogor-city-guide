<?php echo $this->template("includes/inv/header.php")?>


<?php
    
    
	if(count($this->data)>0)
	{
		foreach ($this->data->investment as $inv) 
		{ 	
		$cls=strtolower($inv['investment']);
		$bg_color=strtolower($inv['hexaColor']);
		
	        if($cls=="edukasi"){
	            $investmentcolor="bg_edu ";    
	        }elseif($cls=="investasi"){
	             $investmentcolor="bg_fund ";
	        }elseif($cls=="asuransi"){
	             $investmentcolor="bg_health ";
	        }elseif($cls=="masa depan"){
	             $investmentcolor="bg_future ";
	        }elseif($cls=="pensiun"){
	             $investmentcolor="bg_pension ";
	        }
	}
		
?>
            
<div class="header_page <?php //echo $investmentcolor?$investmentcolor:'bg_fund'?>" style="background-color: <?php echo $bg_color?>" >
	<div class="container">
		<?php foreach ($this->data->investment as $inv) { echo $inv['investment'];}  ?>
	</div>
</div>


<div class="main_wrap">
	<div class="container">

		<!--<div class="row">
			<div class="bread">
				<a href="/investasi/investment-homepage">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="/investment/resources/resources/global-article">Artikel</a>

				<i class="fa fa-angle-right"></i>
				<?php foreach ($this->data->investment as $inv) {  echo $inv['investment'];}  ?>

			</div>
		</div>-->
		<?php echo $this->template("includes/inv/breadcrumb.php")?>

		

		



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
					<li class="<?php echo $investmentcolor?$investmentcolor:'bg_fund'?>" style="background-color: <?php echo $bg_color?>" >
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
    }else{ 
        
        		foreach ($this->data->investment as $inv) 
        		{ 	
        		  $bg_color=strtolower($inv['hexaColor']);
        		}
    
        ?>


<div class="header_page bg_future" style="background-color: <?php echo $bg_color?>">
	<div class="container">
		Artikel Belum Tersedia
	</div>
</div>


<div class="main_wrap">
	<div class="container">

		<!--<div class="row">
			<div class="bread">
				<a href="/investasi/investment-homepage">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="/investment/investment-category/<?php echo $this->data->investment_id; ?>">Artikel</a>

				<i class="fa fa-angle-right"></i>
				Artikel Index

			</div>
		</div>-->
		<?php echo $this->template("includes/inv/breadcrumb.php")?>

	</div>
	<!-- container end -->


	<div class="row">
		<div class="container">

			<div class="listarticle">

                    -Artikel belum tersedia-
                
			</div>
			<!-- listarticle end -->

			<div class="paging">



			</div>

				


			  
			

		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>



<?php } ?>

<?php echo $this->template("includes/inv/footer.php")?>
