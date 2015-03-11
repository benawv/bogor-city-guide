<link rel="stylesheet" href="/website/static/css-ajfc/galeri/style.css" />
<div class="full-w bg-white">
	<div class="description">
		<!--<div>
			<ul style="list-style: none;width: 100%;margin: 0px;padding: 0px;">-->
				<?php
					//$assets = Asset::getByPath('/ajfc/foto-peserta');
					//$assets->setOrderKey("id");
					//$assets->setOrder("desc");
					
					//$assets = Asset::getList(array(
					//	"condition" => "path = '/ajfc/foto-peserta/'",
					//	"orderKey" => array("id"),
					//	"order" => array("desc")
					//    ));
					//
					//echo "<pre>";
					//foreach($assets as $row)
					//{
					//	//print_r($row->getFilename()."<br />");
					//}
				?>
				<!--<li style="display: inline-block;margin: 3px 1px;"><img src="/website/static/images/AllianzPeduli.jpg" style="width: 310px;height: 200px;" alt="" /></li>
			</ul>
		</div>-->
		
		<div class="ajfc-gallery-container">
            
		<?php //for( $i = 0; $i < 5; $i++ ): ?>
		
		<div class="ajfc-gallery-row">
		    <?php
			$assets = Asset::getList(array(
				"condition" => "path = '/ajfc/foto-peserta/'",
				"orderKey" => array("id"),
				"order" => array("desc")
			    ));
			//echo "<pre>";
			//foreach($assets as $row){
			//	print_r($row);
			//}
			//die();
			foreach($assets as $row){
		    ?>
		    <div class="ajfc-gallery-item">
			<a href="#" data-toggle="modal" data-target="#image<?php echo $row->getId();?>">
			    <img src="<?php echo $row->getPath().$row->getFilename();?>" alt="AJFC-2015-<?php echo $row->getFilename();?>" />
			    <div class="ajfc-gallery-item--caption">
				<p>
				    Lorem Ipsum is simply dummy text<br />
				    #1ygterpenting<br />
				    <small>Nama Peserta</small>
				</p>
			    </div><!--/ .ajfc-gallery-item--caption -->
			</a>
		    </div>
		    <!-- Modal -->
			<div class="modal fade" id="image<?php echo $row->getId();?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Modal title</h4>
			      </div>
			      <div class="modal-body">
				<img src="<?php echo $row->getPath().$row->getFilename();?>" alt="AJFC-2015-<?php echo $row->getFilename();?>" />
			      </div>
			      <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<!--<button type="button" class="btn btn-primary">Save changes</button>-->
			      </div>
			    </div>
			  </div>
			</div>
		    <?php } ?>
		</div><!--/ .ajfc-gallery-row -->
		
		<?php //endfor; ?>
		
	    </div><!--/ .ajfc-gallery-container -->
	</div>
</div>