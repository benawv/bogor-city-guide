		<?php if($this->editmode) { ?>
			<style type="text/css">
				.tip.cus-tip{
					height: 300px !important;
				}
			</style>
		<?php }
			else{
				$id1 = $this->input('file_id1')->text;
				$id2 = $this->input('file_id2')->text;
				$id3 = $this->input('file_id3')->text;
				
				if($id1!="")
				{
					$class1 = "thumb1";
				}
				else{
					$class1 = "";
				}
				if($id2!="")
				{
					$class2 = "thumb2";
				}
				else{
					$class2 = "";
				}
				if($id3!="")
				{
					$class3 = "thumb3";
				}
				else{
					$class3 = "";
				}
			}
		?>
		
		<div class="item" id="item-left-1">
			<div class="heading">
				<h2 class="title_news <?php echo $class1;?> clickPage">
					<?php echo $this->link("myLink-link1",array("class" => "thumbnail thumbnail-popup id1",
														 "data-target" => "#modalpdf1",
														 "data-toggle" => "modal"));?>
				</h2>
				<div class="btn-group">
					<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
					<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
			<?php if($this->editmode) {
				echo "FlipGorilla ID: ".$this->input('file_id1', array("width" => 250));
				}
			?>
			<?php echo $this->image("gambar-tahukah-anda1", array(
									"class" => "thumb1 clickPage",
								    "title" => "Image Size 304x295",
								    "width" => 304,
								    "height" => 295
			));?>
			
			<div class="description thumb1 clickPage">
				<?php echo $this->wysiwyg('deskripsi1')?>
			</div>
		</div>
		
		<div class="item" id="item-left-2">
			<div class="heading">
				<h2 class="title_news <?php echo $class2;?> clickPage">
					<?php echo $this->link("myLink-link2",array("class" => "thumbnail thumbnail-popup id2",
														 "data-target" => "#modalpdf2",
														 "data-toggle" => "modal"));?>
				</h2>
				<div class="btn-group">
					<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
					<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
			<?php if($this->editmode) {
				echo "FlipGorilla ID: ".$this->input('file_id2', array("width" => 250));
				}
			?>
			<?php echo $this->image("gambar-tahukah-anda2", array(
									"class" => "thumb2 clickPage",
								    "title" => "Image Size 304x295",
								    "width" => 304,
								    "height" => 295
			));?>
			
			<div class="description thumb2 clickPage">
				<?php echo $this->wysiwyg('deskripsi2')?>
			</div>
		</div>
		
		<div class="item" id="item-left-3">
			<div class="heading">
				<h2 class="title_news <?php echo $class3;?> clickPage">
					<?php echo $this->link("myLink-link3",array("class" => "thumbnail thumbnail-popup id3",
														 "data-target" => "#modalpdf3",
														 "data-toggle" => "modal"));?>
				</h2>
				<div class="btn-group">
					<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
					<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
				</div>
			</div>
			<?php if($this->editmode) {
					echo "FlipGorilla ID: ".$this->input('file_id3', array("width" => 250));
					}
				?>
			<?php echo $this->image("gambar-tahukah-anda3", array(
									"class" => "thumb3 clickPage",
								    "title" => "Image Size 304x295",
								    "width" => 304,
								    "height" => 295
			));?>
			
			<div class="description thumb3 clickPage">
				<?php echo $this->wysiwyg('deskripsi3')?>
			</div>
		</div>

<!-- Modal Premi -->
<?php if($id1!=""){?>
<div class="modal fade" id="modalpdf1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    </div>
  </div>
</div>
<?php } ?>

<!-- Modal Fakta Klaim -->
<?php if($id2!=""){?>
<div class="modal fade" id="modalpdf2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    </div>
  </div>
</div>
<?php } ?>
<!-- Modal Fakta Klaim -->
<?php if($id3!=""){?>
<div class="modal fade" id="modalpdf3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    </div>
  </div>
</div>
<?php } ?>

<?php if(!$this->editmode) { ?>
<script type="text/javascript">
	$(document).ready(function(){
		<?php if($id1!=""){?>
		$(".thumb1").on("click",function(){
			html = '<div class="modal-header">'+
				        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
				    '</div>'+
				    '<div class="modal-body">'+
						'<div name="flipgorilla" class="flipgorilla" data-id="<?php echo $this->input('file_id1')->text?>" style="width: 100%; height: 700px;">'+
							'<a href="http://www.flipgorilla.com/p/<?php echo $this->input('file_id1')->text?>/show" target="_blank">'+
								'<div class="progress progress-striped active">'+
								  '<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
								  '</div>'+
								'</div>'+
							'</a>'+
						'</div>'+
				    '</div>';
			$('#modalpdf1 .modal-content').html(html);
			$.getScript("http://www.flipgorilla.com/fg.js");
			$("#modalpdf1").modal();
		});
		<?php }
			else{
		?>
				$(".title_news .id1").removeAttr("data-target data-toggle");
				$(".thumb1").on("click",function(){
					var link = $(".title_news .id1").attr("href");
					var target = $(".title_news .id1").attr("target");
					var linkCheck = $(".thumb1 p").find("a").attr("href");
					if (linkCheck == "#") {
						window.open(link, target);
					}
				});
		<?php
			}
		?>
		
		<?php if($id2!=""){?>
		$('.thumb2').on("click",function(){
			html = '<div class="modal-header">'+
				        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
				    '</div>'+
				    '<div class="modal-body">'+
						'<div name="flipgorilla" class="flipgorilla" data-id="<?php echo $this->input('file_id2')->text?>" style="width: 100%; height: 700px;">'+
							'<a href="http://www.flipgorilla.com/p/<?php echo $this->input('file_id2')->text?>/show" target="_blank">'+
								'<div class="progress progress-striped active">'+
								  '<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
								  '</div>'+
								'</div>'+
							'</a>'+
						'</div>'+
				    '</div>';
			$('#modalpdf2 .modal-content').html(html);
			$.getScript("http://www.flipgorilla.com/fg.js");
			$("#modalpdf2").modal();
		});
		<?php }
			else{
		?>
				$(".title_news .id2").removeAttr("data-target data-toggle");
				$(".thumb2").on("click",function(){
					var link = $(".title_news .id2").attr("href");
					var target = $(".title_news .id2").attr("target");
					var linkCheck = $(".thumb2 p").find("a").attr("href");
					if (linkCheck == "#") {
						window.open(link, target);
					}					
				});
		<?php
			}
		?>

		<?php if($id3!=""){?>
		$('.thumb3').on("click",function(){
			html = '<div class="modal-header">'+
				        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
				    '</div>'+
				    '<div class="modal-body">'+
						'<div name="flipgorilla" class="flipgorilla" data-id="<?php echo $this->input('file_id3')->text?>" style="width: 100%; height: 700px;">'+
							'<a href="http://www.flipgorilla.com/p/<?php echo $this->input('file_id3')->text?>/show" target="_blank">'+
								'<div class="progress progress-striped active">'+
								  '<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
								  '</div>'+
								'</div>'+
							'</a>'+
						'</div>'+
				    '</div>';
			$('#modalpdf3 .modal-content').html(html);
			$.getScript("http://www.flipgorilla.com/fg.js");
			$("#modalpdf3").modal();
		});
		<?php }
			else{
		?>
				$(".title_news .id3").removeAttr("data-target data-toggle");
				$(".thumb3").on("click",function(){
					var link = $(".title_news .id3").attr("href");
					var target = $(".title_news .id3").attr("target");
					var linkCheck = $(".thumb3 p").find("a").attr("href");
					if (linkCheck == "#") {
						window.open(link, target);
					}
				});
		<?php
			}
		?>
	});
</script>
<?php }?>