<div class="container">

	<div class="title_section">
		<?php echo $this->input('title-section')?>
	</div>

	<div class="listarticle">
		<?php 
			
			$entries = new Object_InvestmentEducation_List();
			$entries->setLimit(6);
			
		?>
		<ul>
		<?php foreach($entries as $entry) { ?>
		
			<li class="bg_fund">
				<span style="font-size: 12px;"><?php echo date("d M Y", $entry->o_creationDate) ?></span>
				<h3><?php echo $entry->judul ?></h3>
				<p>
					<?php echo $entry->subjudul ?>
				</p>
				<a href="<?php echo $this->url(array($entry->o_key, $entry->o_id), 'education')?>">
				Selengkapnya <i class="fa fa-angle-right"></i></a>
			</li>	
					
		<?php } ?>
		</ul>
	</div>
</div>
<!-- container end -->
