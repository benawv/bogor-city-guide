<html>
<head>
<!-- Meta Tags -->
<meta charset="utf-8">
<style type="text/css">
	body{background: aqua;}
</style>
</head>
<body>
<div role="main" class="main no-gutter">
	<div class="blast-container">
		
		<!--jurnal -->
		
		<div id="community no-gutter no-margin" class="clearfix">
			
			<div class="blast-img">
                   <!-- <img src="_assets/css/bootstrap/edwin.jpg" /> -->
                   <?php echo $this->image('imgEmail', array(
									'title' 	=> 'Drag your icon here',
									'width' 	=> 600,
									'height' 	=> 400)) ?>
			</div>
            
		</div> <!--Community-->
		
		<div id="community" class="clearfix padding no-margin">
			
            <?php echo $this->wysiwyg('description')?>
            
		</div> <!--Community-->
        
        <div id="community" class="clearfix blast-footer">
			
           
		</div> <!--Community-->
        
        <div class="blast-weblogo">
            "Allianz"
            <span onclick="window.location.href = '/'"></span>
        </div>
			
		
	</div>
</div>
</body>
</html>