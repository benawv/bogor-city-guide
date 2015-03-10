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
		<?php if(!$this->editmode) { ?>
			<table>
		<?php }
			$x = 1;
		?>
		<?php while ($this->block("rowTable")->loop()) { ?>
			<?php if($this->editmode) { ?>
				<ul>
					<li>
						<?php echo $this->wysiwyg('description')?>
					</li>
				</ul>
			<?php } else { ?>
				<tr>
					<td class="vertical"><?php echo $x.".";?></td>
					<td><?php echo $this->wysiwyg('description')->text;?></td>
				</tr>
			<?php $x++; } ?>
		<?php } ?>
		<?php if(!$this->editmode) { ?>
			</table>
		<?php }?>
		<br />
		<?php echo $this->wysiwyg('description_2')?>
	</div>
</div>
<script type="text/javascript">
	$(".<?php echo $class?>").fancybox();
</script>