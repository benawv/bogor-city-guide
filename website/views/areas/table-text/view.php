<?php 
	$class = "fancybox-".uniqid();
?>
<?php if(!$this->editmode) {?>
<script src="/website/static/js/jquery.jcarousel.min.js" type="text/javascript"></script>
<script src="/website/static/js/jcarousel.responsive.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.fancybox.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/jcarousel.responsive.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/jquery.fancybox.css">
<?php } ?>


<div id="<?php echo $this->input('anchor')->text?>" class="full-w bg-white item" style="width:100%;">
	<h1>
		<?php echo $this->input('title', ["width" => 250])?>
	</h1>
	<div class="description cusTable">
	
	<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css-mobil/bootstrap.min.css"  />
	<!--<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingOne">
		    <h4 class="panel-title">
		      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			Bagaimana cara mengikuti  program Allianz Junior Football Camp?
		      </a>
		    </h4>
		  </div>
		  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    <div class="panel-body">
		      Daftar online dan mengikuti rangkaian seleksi di www.allianz.co.id/juniorfootballcamp dibuka dari tanggal 17 April 2015* sampai 22 Mei 2015*.
Setelah mendaftar, setiap peserta akan dikirimkan 1 kali kuis online pada hari JUMAT mendatang ke email masing-masing. Kuis tersebut hanya berlaku 3 hari sejak email diterima oleh peserta.
Pengiriman soal kuis online akan berlangsung dari 17 April 2015*sampai dengan 22 Mei 2015*.
		    </div>
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-heading" role="tab" id="headingTwo">
		    <h4 class="panel-title">
		      <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			Collapsible Group Item #2
		      </a>
		    </h4>
		  </div>
		  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
		    <div class="panel-body">
		      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
		    </div>
		  </div>
		</div>
	</div>-->
		
		
		
		<?php if(!$this->editmode) { ?>
			<!--<table>-->
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<?php }
			$x = 1;
		?>
		<?php while ($this->block("rowTable")->loop()) { ?>
			<?php if($this->editmode) { ?>
				<ul>
					<li>
						<?php echo $this->input('title_faq')?>
						<?php echo $this->wysiwyg('description')?>
					</li>
				</ul>
			<?php } else { ?>
				<!--<tr>
					<td class="vertical"><?php echo $x.".";?></td>
					<td><?php echo $this->wysiwyg('description')->text;?></td>
				</tr>-->
				<?php if($x==1) {?>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading<?php echo $x;?>">
					  <h4 class="panel-title">
					    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x;?>" aria-expanded="true" aria-controls="collapseOne">
					      <?php echo $x.". ".$this->input('title_faq')->text;?>
					    </a>
					  </h4>
					</div>
					<div id="collapse<?php echo $x;?>" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
					    <?php echo $this->wysiwyg('description')->text;?>
					  </div>
					</div>
				</div>
				<?php } else {?>
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="heading<?php echo $x;?>">
					  <h4 class="panel-title">
					    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $x;?>" aria-expanded="false" aria-controls="collapseTwo">
					      <?php echo $x.". ".$this->input('title_faq')->text;?>
					    </a>
					  </h4>
					</div>
					<div id="collapse<?php echo $x;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="panel-body">
					    <?php echo $this->wysiwyg('description')->text;?>
					  </div>
					</div>
				</div>
				<?php }?>
			<?php $x++; } ?>
		<?php } ?>
		<?php if(!$this->editmode) { ?>
			<!--</table>-->
			</div>
		<?php }?>
		<br />
		<?php echo $this->wysiwyg('description_2')?>
	</div>
</div>
<script type="text/javascript">
	$(".<?php echo $class?>").fancybox();
</script>