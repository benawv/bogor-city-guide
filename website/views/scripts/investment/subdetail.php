<?php echo $this->template("includes/inv/header.php")?>

<div class="header_page blue">
	<div class="container">
		<?php echo $this->data->judul ?>
	</div>
</div>

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
		
		<div class="row">
			
			<div class="container">
				
				<div class="long_text">
					
					<?php if($this->data->image) { ?>
						<p><img src="<?php echo $this->data->image ?>" /></p>
					<?php } ?>
					
					<p><?php echo $this->data->deskripsi ?></p>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>

<?php echo $this->template("includes/inv/footer.php")?>