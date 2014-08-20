<div class="container boxes-view">
	<div class="heading clearfix">
		<h5 style="visibility:hidden;"><span><a href="product.php">Produk</a></span> &raquo; <span><b>Asuransi Umum</b></span></h5>
		<span class="title">Tentang Kami<span>
		<!--<div class="hotline"><img width="30px" src="_assets/images/hotline.png">&nbsp;&nbsp;<span style="font-size:20px"><strong>021-2926 9999</strong></span></div>-->
	</div>
	<div class="wrapper-special clearfix">
		<?php echo $this->areablock('banner', array(
					"allowed" => array("banner", "static-banner")))?>
		<div id="quicklinks">
			<?php echo $this->areablock('layananKami', array(
					"allowed" => array("tile-quicklinks", "quiclinks", "layanankami-quicklinks")))?>
		</div>
	</div><!-- .wrapper-special -->
	
	<!-- content -->
	<div class="items-container">
		<?php 
			$entries = new Object_ProductCategory_List();
			$entries->setLimit("6");
			
			foreach($entries as $entry) {
		?>
				<div class="item">
					<div class="heading">
						<h2 class="title_news"><a href="product-sub-asuransi-kesehatan.php"><?php echo $entry->getTitle()?></a></h2>
						<div class="btn-group">
							<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
							<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
						</div>
					</div>
					<a href="product-sub-asuransi-kesehatan.php" class="thumbnail">
						<img class="image_share" src="<?php echo $entry->getImage()?>" alt="<?php echo $entry->getTitle()?>">
					<!-- 	<ul class="square-yellow">
							<li class="title">Produk sesuai tujuan:</li>
							<li>SmartHealth Maxi Violet</li>
							<li>SmartHealth</li>
							<li>Asuransi Kesehatan AlliSya Care</li> 
						</ul> -->
					</a>
					<div class="description">
						<ul class="list-product">
							<?php
								$relationId = 146;
								$products = new Object_Products_List();
								$products->setCondition("kategori like  \"%".$relationId."%\"");
							?>
						</ul>
					</div>
				</div>
		<?php 
			} 
		?>			
	</div>
	<!-- endcontent -->
	
	<!-- Map Location -->
		<?php echo $this->areablock('maparea', array(
					"allowed" => array("map", "map-point")))?>
	<!-- End Map Location -->
</div>
