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
				<h1><?php echo $this->input('global_article_quotes-title')?></h1>
				

				<h3><?php echo $this->wysiwyg("global_article_quotes") ?></h3>
			


			</div>
			<div class="edge_textbanner edge_future">
				
			</div>

		</div>

		<div class="desc_page">
			<h1><?php echo $this->input('global_article_title')?></h1>
			<p><?php echo $this->wysiwyg("global_article_text") ?></p>
		</div>



	</div>
	<!-- container end -->


	<div class="row">
		<div class="container">


			<div class="title_section">
				Artikel
			</div>
                <?php 
        
                $i=1;
                foreach($this->data as $entrie){ 
                    
                    if($i%3==0){
                        $lastone="lastone";
                    }else{
                        $lastone="";
                    }
                      
                    $id=strtolower($entrie->investment);
                    if($id=="artikel edukasi"){
                        $investmentcolor="bg_edu ".$lastone;    
                    }elseif($id=="artikel investasi"){
                         $investmentcolor="bg_fund ".$lastone;
                    }elseif($id=="artikel asuransi"){
                         $investmentcolor="bg_health ".$lastone;
                    }elseif($id=="artikel masa depan"){
                         $investmentcolor="bg_future ".$lastone;
                    }elseif($id=="artikel pensiun"){
                         $investmentcolor="bg_pension ".$lastone;
                    }
                  $i++;
                ?>
				<div class="catbox <?php echo $investmentcolor?>"   >
					<a href="/investment/investment-article-list/<?php echo  $entrie->o_id; ?>_0">
						<img src="<?php echo $entrie->thumb->path."".$entrie->thumb->filename; ?>" style="height:200px" />
					</a>
					<a href="/investment/investment-article-list/<?php echo $entrie->o_id; ?>_0"><h2><?php echo $entrie->investment; ?></h2></a>
				</div>			
            <?php } ?>

		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->
<?php echo $this->template("includes/inv/footer.php")?>
