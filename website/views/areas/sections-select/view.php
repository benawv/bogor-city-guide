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
		<span class="judul_section"><?php echo $this->input('title')?></span>
		<?php endif; ?>
	</h2>
	<div class="combo_section">
		<p>
			<?php if($this->editmode): ?>
			<script type="text/javascript">
			    $(function(){
			        
			        // must return true or false
			        Ext.apply(Ext.form.VTypes, {
			          starts_with_number: function(val, field){     
			            if(val.match(/^\d+$/)){      
			              return true;    
			            }else{      
			              return false;    
			            }  
			          },
			          starts_with_numberText: "This field should start with a number"
			        });
			    });
			 
			</script>
			Year : From <?php echo $this->input('from', array("width" => "150", "vtype"=>"starts_with_number", "vtypeText"=>"This field is invalid"));?> - Until <?php echo $this->input('until', array("width" => "150", "vtype"=>"starts_with_number", "vtypeText"=>"This field is invalid"));?>
			<?php else: ?>
				Pilih Tahun :
				<select class="combo-width year-pick">
					<?php 
						$from = $this->input('from')->text;
						$until = $this->input('until')->text;
						
						$years = range($until, $from);
						
						foreach($years as $y)
						{
							echo "<option value=".$y.">".$y."</option>";
						}
					?>
				</select>
			<?php endif; ?>
		</p>
		<p>
			<?php if($this->editmode){ ?>
				Jenis Fact Sheet : <?php echo $this->input('fc-type')?>
			<?php } ?>
		</p>
	</div>
	<div class="description">
		<?php if($this->editmode): ?>
			<?php echo "anchor name: ".$this->input('anchor', array("width" => 250))?>
		<?php endif;?>
		<?php echo $this->wysiwyg('deskripsi', array('width' => 400))?>
	</div>
</div>