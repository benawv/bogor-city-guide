<style type="text/css">     
    #halaman { width:980px; margin:0 auto; }     #header { height:100px; padding:10px;background-color:#CCCCCC; }     #kiri { height:100px; padding:10px;background-color:#CCCCCC;float:left;width:250px; margin-top:10px; }     #kanan { height:100px; padding:10px;background-color:#CCCCCC;float:right;width:250px; margin-top:10px; }     #tengah { height:100px; padding:10px;background-color:#CCCCCC;margin:10px 290px 0 290px; }     #footer { clear:both; height:50px;padding:10px; background-color:#CCCCCC; margin-top:10px;} </style>
<div class="item">
	<div class="heading">
		<h2 class="title_news"><?php echo $this->link('title',array("data-target" => "","data-toggle" => "modal", "class" => "PopUpModal"))?></h2>
		<div class="btn-group">
			<a href="javascript:void(0);" class="fbshare"><i class="fa fa-facebook"></i></a>
			<a href="javascript:void(0);" class="twshare"><i class="fa fa-twitter"></i></a>
			z
			<?php if($this->editmode) { ?>
			<?php echo $this->link('more')?>
		<?php } else { ?>
			<?php echo htmlspecialchars_decode($this->link('more'))?>
		<?php } ?>
		</div>
	</div>
    <div id="halaman">
    <div id="kiri">
        
    </div>
    <div id="tengah">
        <h2><strong>NEWS FEED</strong></h2>
	<?php
<iframe src="http://www.facebook.com/plugins/likbox.php?href==http%3A%2F
%2Fwww.facebook.com%2Fbastian.dwiputra&width=600&colorscheme=light&
show_faces=true&border_color&stream=true&header=true&height=435" 
style="border:none; overflow:hidden; width:600px; height:430px; background:
white; float:left; "allowtransparency="true" frameborder="0" scrolling="yes"></iframe>
        ?>

    </div>
    <div id="kanan">
        
    </div>
    </div>
</div>