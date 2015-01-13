<?php echo $this->template("includes/inv/header.php")?>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<div class="header_page blue" style="margin-bottom: 0px;">
	<div class="container">
		<?php echo $this->data->judul ?>
	</div>
</div>

<div class="main_wrap">
	
	<div class="container">
	<div class="wrap73">
			
			<h5>
                <span><a href="/investment">Home</a></span> &rsaquo; 
                <span><a href="/investment/resources/">Referensi</a></span> &rsaquo;
                <span><a href="/investment/resources/resources/education">Pustaka</a></span> &rsaquo;
                <span><?php echo $this->data->judul ?></span>
            </h5>
			
	        <div class="tag">
	            <div class="tag-left">
	                <h4>Tag :   <a href="/investment/resources/resources/education">
	                Pustaka<?php foreach ($this->data->investment as $inv) { echo $inv->investment;}  ?></a></h4>
	            </div>
	        <!--div class="tag-right">
	                <span class='st_sharethis' displayText='ShareThis'></span>
	                <span class='st_facebook' displayText=''></span>
	                <span class='st_twitter' displayText=''></span>
	                <span class='st_linkedin' displayText=''></span>
	                <span class='st_pinterest' displayText=''></span>
	                <span class='st_email' displayText=''></span>
	            </div!-->            
	        </div>                    
			<!--div class="bread">
				<a href="index.php">Home</a>  
				<i class="fa fa-angle-right"></i> 
				<a href="artikel.php">Article</a>

				<i class="fa fa-angle-right"></i>
				<a href="artikel.php">Artikel Index Future</a>

				<i class="fa fa-angle-right"></i>
				<?php //echo $this->data->judul ?>
			</div-->

                
		<div class="row">
				<div class="main-desc">
					
					<?php if($this->data->image) { ?>
						<p><img src="<?php echo $this->data->image ?>" /></p>
					<?php } ?>
					
					<p><?php echo $this->data->deskripsi ?></p>
					
				</div>
			
		</div>
		
	</div>
            <div class="wrap20">
                <h4>Pustaka Terkait</h4>
                <?php
                
                    $a_entries = new Object_InvestmentEducation_List();
                    $a_entries->setLimit(3);
                    foreach($a_entries as $a_entrie){

                ?>
                    
                <div class="image-side">
                    <div class="img-article">
                         <img style="width: 100%; height: 100%;" src="<?php echo $a_entrie->image->path."".$a_entrie->image->filename; ?>" alt="Image" />
                    </div>
                    <div class="img-desc">
                        <h5><a href="/investment/detail/<?php echo $a_entrie->getO_key()."/".$a_entrie->getO_id();?>"><?php  echo $a_entrie->judul; ?></a></h5>
                    </div>
                </div>
                    
                <?php } ?>

			</div>	
	
</div>

<?php echo $this->template("includes/inv/footer.php")?>