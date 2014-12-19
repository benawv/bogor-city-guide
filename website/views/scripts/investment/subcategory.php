<?php echo $this->template("includes/inv/header.php")?>

<div class="main_wrap">
    <?php foreach($this->subcategoryInv as $subcategoryInv){ 
    ?>
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
				<h1><?php echo $subcategoryInv->titleQuote; ?></h1>
				<h3><?php echo $subcategoryInv->contentQuote; ?></h3>
			    
                
			</div>
			<div class="edge_textbanner edge_future">
				
			</div>

		</div>

		<div class="desc_page">
			<h1><?php echo $subcategoryInv->title; ?></h1>
			<p><?php echo $subcategoryInv->content; ?></p>
		</div>
        
	</div>
    <?php } ?>
	<!-- container end -->


	<div class="row">
		<div class="container">


			<div class="title_section">
				Artikel
			</div>

        
            
            <?php 
    $s=1;
            foreach($this->data as $entrie){
            ?>
                
				<div class="catbox bg_edu <?php if($s%3==0){ echo "lastone"; }?>" style="background-color:<?php echo $entrie->colors; ?> !important;">
					<a href="/investment/investment-article-list/<?php echo  $entrie->o_id; ?>_1">
						<img src="<?php echo $entrie->images->path."".$entrie->images->filename; ?>" style="height:200px" />
					</a>
					<a href="/investment/investment-article-list/<?php echo  $entrie->o_id; ?>_1"><h2><?php echo $entrie->subarticle; ?></h2></a>
				</div>
            
            <?php $s++; } ?>


		</div>
		<!-- container end -->

	</div>
	<!-- row end -->

</div>
<!-- homebanner end -->
<?php echo $this->template("includes/inv/footer.php")?>