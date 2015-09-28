<?php if($this->editmode){?>
	<div class="alert alert-info" style="height: 75px;">
        <div class="col-xs-6">
            How many anchor you want to show?

            <?php
                // prepare the store
                $selectStore = [];
                for($i=2; $i<30; $i++) {
                    $selectStore[] = [$i, $i];
                }
            ?>
            <?php echo $this->select("anchors",[
                "store" => $selectStore,
                "reload" => true
            ]); ?>
        </div>
    </div>
<?php } ?>
<?php 
	$id = "anchors-".uniqid();
	$anchors = 1;
	if(!$this->select("anchors")->isEmpty()){
        $anchors = (int) $this->select("anchors")->getData();
    }
?>

<?php if(!$this->editmode): ?>
	<?php 
		$style = !$this->editmode?'float: left; position: absolute;':'height: 250px';
	?>
		<div id="membername" style="width: 507px; position:absolute;">
			<div class="slide prev"><span class="arrow"></span></div>
			<div class="super_navi">
				<ul id="navigate" class="navi" style="<?php echo $style?>">
					<?php for($i=0;$i<$anchors;$i++) { ?>
						<?php $active = $i==0?'aktif':''?>
						<li class="<?php echo $this->input('class_name_'.$i)->text?> <?php echo $active?>">
							<div class="nav_menu" <?php if($this->editmode) { ?> style="color: #000;" <?php } ?> >
								<?php echo $this->editmode?'<b>Anchor Name:</b> '. $this->input('class_name_'.$i, array('width' => '75')) : ''?>
								
								<?php if($this->editmode) { ?>
									<b>Icon Inactive:</b> <?php echo $this->image('icon_'.$i, array(
													'title' 	=> 'Image Size 26x26',
													'width' 	=> 100,
													'height' 	=> 100,
													'thumbnail'	=> 'icon')) ?>
								<?php } else { ?>
									<div style="background-image: url('<?php echo $this->image('icon_'.$i)->getSrc()?>'); margin-bottom: 3px; width: 26px; height: 26px; background-repeat: no-repeat;"></div>
								<?php } ?>
								
								<?php if($this->editmode) { ?>
									<b>Icon Active:</b> <?php echo $this->image('icon_'.$i.'_'.$i, array(
													'title' 	=> 'Image Size 26x26',
													'width' 	=> 100,
													'height' 	=> 100,
													'thumbnail'	=> 'icon')) ?>
								<?php } else { ?>
									<div class="white_image" style="background-image: url('<?php echo $this->image('icon_'.$i.'_'.$i)->getSrc()?>'); margin-bottom: 3px; width: 26px; height: 26px; background-repeat: no-repeat;"></div>
								<?php } ?>
								
								<?php echo $this->editmode?'Title: ':'' ?><?php echo $this->input('anchor_title_'.$i, array("width" => '75'))?>
							</div>
						</li>
					<?php } ?>
				</ul>
			</div>
			<div class="slide next"></div>
		</div>
<?php else : ?>
	<?php
		if($anchors <= 6) {
			$style = $this->editmode?'height: 310px':'';
		}
		else {
			$countHeight = $anchors/6;
			$height = 310 * (ceil($countHeight));
			
			$style = $this->editmode?'height: '.$height.'px':'';
		}
	?>
		<ul id="membername" class="navi" style="<?php echo $style?>">
			<?php for($i=0;$i<$anchors;$i++) { ?>
				<?php $active = $i==0?'aktif':''?>
				<li class="<?php echo $this->input('class_name_'.$i)->text?> <?php echo $active?>">
					<div class="nav_menu" <?php if($this->editmode) { ?> style="color: #000;" <?php } ?> >
						<?php echo $this->editmode?'<b>Anchor Name:</b> '. $this->input('class_name_'.$i, array('width' => '75')) : ''?>
						
						<?php if($this->editmode) { ?>
							<b>Icon Inactive:</b> <?php echo $this->image('icon_'.$i, array(
											'title' 	=> 'Image Size 26x26',
											'width' 	=> 100,
											'height' 	=> 100,
											'thumbnail'	=> 'icon')) ?>
						<?php } else { ?>
							<div style="background-image: url('<?php echo $this->image('icon_'.$i)->getSrc()?>'); margin-bottom: 3px; width: 26px; height: 26px; background-repeat: no-repeat;"></div>
						<?php } ?>
						
						<?php if($this->editmode) { ?>
							<b>Icon Active:</b> <?php echo $this->image('icon_'.$i.'_'.$i, array(
											'title' 	=> 'Image Size 26x26',
											'width' 	=> 100,
											'height' 	=> 100,
											'thumbnail'	=> 'icon')) ?>
						<?php } else { ?>
							<div class="white_image" style="background-image: url('<?php echo $this->image('icon_'.$i.'_'.$i)->getSrc()?>'); margin-bottom: 3px; width: 26px; height: 26px; background-repeat: no-repeat;"></div>
						<?php } ?>
						
						<?php echo $this->editmode?'Title: ':'' ?><?php echo $this->input('anchor_title_'.$i, array("width" => '75'))?>
					</div>
				</li>
			<?php } ?>
		</ul>
<?php endif;?>
<?php for($i=0;$i<$anchors;$i++) { ?>
	<script type="text/javascript">
		var text = $(".cus_anchor_<?php echo $i;?>").text();
		var pisah = text.split(" ");
		var angka = (pisah.length)/2;
		var batas = Math.floor(angka);

		var isi = "";
		for(var x = 0; x < pisah.length; x++)
		{
			if(x==(batas-1))
			{
				pisah[x] = pisah[x]+"<br />";
			}
			
			isi += pisah[x]+" ";
		}
		$(".cus_anchor_<?php echo $i;?>").html(isi);
	</script>
<?php }?>

<script type="text/javascript">
	var w = 0;
	
	$('.navi li').each(function(index){
		width = $(this).width();
		w += width;
	});
	
	$('ul#navigate').width(w+5);
	/* silde nav*/
		
	/*$(".hideme").hide();
	$(".v").click(function(){
		$(this).siblings('.hideme').slideToggle();
		if($(this).find('.xicon').hasClass('down')){
			$(this).find('.xicon').removeClass('down')
			$(this).find('.xicon').addClass('up')
		}
		else{
			$(this).find('.xicon').removeClass('up')
			$(this).find('.xicon').addClass('down')
		}
	});*/
    
	
	$('.next').on('click',function(){
		var me_left = $('.super_navi').scrollLeft();
		$('.super_navi').scrollLeft(me_left + 100);
		//console.log($('.super_navi').position().left);
	});
	
	$('.prev').on('click',function(){
		var me_left = $('.super_navi').scrollLeft();
		$('.super_navi').scrollLeft(me_left - 100);
		//console.log($('.super_navi').position().left);
	});
    
    $(document).ready(function(){
        var widthNavi = $('#navigate').width();
        if(widthNavi < 500){
            $('.slide').hide();
        }else{
            $('.slide').show();
            $('.super_navi').width(470);
        }
    });
	/* silde nav*/
</script>