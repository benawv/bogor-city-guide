<?php echo $this->template("includes/inv/header.php")?>
<div class="main_wrap">
	<div class="container">

		<div class="row">
			<div class="bread">
				<a href="index.php">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="artikel.php">Article</a>

				<i class="fa fa-angle-right"></i>
				<a href="artikel.php">Artikel Index Future</a>

				<i class="fa fa-angle-right"></i>
				Judul Artikel
			</div>
		</div>


		<div class="box_banner_big">

			<div class="textbanner bg_future">
				<h1>Artikel</h1>
				

				<h3>
					“Education is the passport to the future, for tomorrow belongs to those who  prepare for it today.” </h3>
					<h3>- Malcom X -</h3>
			


			</div>
			<div class="edge_textbanner edge_future">
				
			</div>

		</div>

		<div class="desc_page">
			<h1>Resource Education </h1>
			<p>Donec sollicitudin molestie malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada.</p>

<p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</p>
		</div>



	</div>
	<!-- container end -->


	<div class="row">
		<div class="container">


			<div class="title_section">
				Artikel
			</div>
                <?php 
        
                foreach($this->data as $entrie){ 
/*    echo "<pre>";    
    print_r($entrie);
    echo "</pre>";*/
                    //harus diganti otomatis...call from existing class
                    $id=$entrie->investment;
                    if($id==1){
                        $investmentname="Education";
                        $investmentcolor="bg_edu";    
                    }elseif($id==2){
                        $investmentname="Fund";
                         $investmentcolor="bg_fund";
                    }elseif($id==3){
                        $investmentname="Health";
                         $investmentcolor="bg_health lastone";
                    }elseif($id==4){
                        $investmentname="Future";
                         $investmentcolor="bg_future";
                    }elseif($id==5){
                         $investmentname="Pension";
                         $investmentcolor="bg_pension";
                    }elseif($id==6){
                        $investmentname="Guide Me";
                        $investmentcolor="bg_guideme lastone";
                    }
                  
                ?>
				<div class="catbox <?php echo $investmentcolor?>"   >
					<a href="/investment-article-list/<?php echo $entrie->investment; ?>">
						<img src="<?php echo $entrie->images->path."".$entrie->images->filename; ?>" style="height:200px" />
					</a>
					<a href="/investment-article-list/<?php echo $entrie->investment; ?>"><h2><?php echo $investmentname; ?></h2></a>
				</div>			
            <?php } ?>

		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->
<?php echo $this->template("includes/inv/footer.php")?>