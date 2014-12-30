<?php $i = 0; if($this->editmode){ ?>
	<div id="<?php echo $this->input('anchor-'.$i)->text?>" class="full-w bg-white">
		<div id="#" class="wishlist-wrap">
            
            <div class="wishlist-content">
                <h1><?php echo $this->input("headline-modal", array("width" => 240));?></h1>
                <div class="logo">
                    <img src="/website/static/images/wizard/allianz-assurance-pret-logo.png" />
                </div>
                
                <div class="cart-wrap">
                    <div class="cart">
                        <?php echo $this->image("myCart", array(
							    "title" => "Drag your image here",
							    "width" => 150,
							    "height" => 150
							));
						?>
                    </div>
                    <div class="cart-content">
                        <?php echo $this->wysiwyg('description-'.$i)?>
                    </div>
                </div>    
                
            </div>
            <div class="button-cart">
                    <div class="guide-btn">
                        <button type="button" class="btn btn-primary linkWizard btn-width">Ikuti Panduan</button>
                    </div>
                    <div class="product-btn">
                       <button type="button" class="btn btn-primary linkProduk btn-width">Lanjut ke produk</button>
                    </div>
            </div>
						
		</div>
		<div class="description">
			<?php //echo $this->wysiwyg('description-'.$i)?>
		</div>
	</div>
<?php } else { ?>
	<div class="modal fade" id="modal-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-product modal-body">
		    
            <div class="wishlist-content">
                <h1><?php echo $this->input("headline-modal", array("width" => 240));?></h1>
                <div class="logo">
                    <img src="/website/static/images/wizard/allianz-assurance-pret-logo.png" />
                </div>
                
                <div class="cart-wrap">
                    <div class="cart">
                        <?php echo $this->image("myCart", array(
							    "title" => "Image Size 150x150",
							    "width" => 150,
							    "height" => 150
							));
						?>
                    </div>
                    <div class="cart-content">
                        <?php echo $this->wysiwyg('description-'.$i)?>
                    </div>
                </div>    
                
            </div>
            <div class="button-cart">
                    <div class="guide-btn">
                        <button type="button" class="btn btn-primary linkWizard btn-width">Ikuti Panduan</button>
                    </div>
                    <div class="product-btn">
                       <button type="button" class="btn btn-primary linkProduk btn-width">Lanjut ke produk</button>
                    </div>
            </div>
			
		<div class="description" style="clear:both;"></div>
			</div>
	    </div>
	  </div>
	</div>
<?php } ?>