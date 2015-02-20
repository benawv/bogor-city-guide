<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white">
	<h2>
		<?php if($this->editmode): ?>
			Icon: <?php echo $this->image('icon', array(
								'title' 	=> 'Image Size 31x31',
								'width' 	=> 100,
								'height' 	=> 100,
								'thumbnail'	=> 'icon')) ?>
			<?php echo $this->input('title', ["width" => 250])?>
		<?php else: ?>
			<?php if($this->image('icon')->getSrc()):?>
				<div style="background-image: url('<?php echo $this->image('icon')->getSrc()?>'); height: 31px; width: 31px; float: left; margin-right: 10px; "></div>
			<?php endif;?>
			<span class="judul_section">Brosur</span>
			<div class="btn-group btn-section">
				<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			</div>
		<?php endif; ?>
	</h2>
	<div class="description width-66">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
			<?php echo "FlipGorilla ID: ".$this->input('file_id', array("width" => 250))?>
		<?php endif;?>
		<div class="section-left-40">
			<?php if($this->editmode): ?>
				<?php echo $this->image('image-kiri', array(
										'title' => 'Image Size 225x200',
										'width' 	=> 225,
										'height' 	=> 200,
										'thumbnail' => 'product'))?>
			<?php else: ?>
				<a data-toggle="modal" href="javascript:void(0)" data-target="#modalBrosur" class="thumbnail thumbnail-popup">
					<img src="<?php echo $this->image('image-kiri')->getSrc()?>" />
				</a>
			<?php endif; ?>
		</div>
		<div class="section-right-60">
			<?php echo $this->wysiwyg('teks-kanan')?>
		</div>
	</div>
</div>
<!-- Modal Brosur -->
<!-- Modal Brosur -->
<div class="modal fade" id="modalBrosur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
		
    </div>
  </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('.thumbnail').click(function(){
			html = '<div class="modal-header">'+
				        '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>'+
				    '</div>'+
				    '<div class="modal-body">'+
						'<div name="flipgorilla" class="flipgorilla" data-id="<?php echo $this->input('file_id')->text?>" style="width: 100%; height: 700px;">'+
							'<a href="http://www.flipgorilla.com/p/<?php echo $this->input('file_id')->text?>/show" target="_blank">'+
								'<div class="progress progress-striped active">'+
								  '<div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">'+
								  '</div>'+
								'</div>'+
							'</a>'+
						'</div>'+
				    '</div>';
			$('.modal-content').html(html);
			$.getScript("http://www.flipgorilla.com/fg.js");
		});
	});
</script>