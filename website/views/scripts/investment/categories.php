<?php echo $this->template("includes/inv/header.php")?>

    <?php
        if(count($this->data)>0){ ?>
<?php foreach($this->data as $entrieC){ ?>
<div class="homebanner banner_future" style="width: 100%; background:url('<?php echo $entrieC->images->path."".$entrieC->images->filename; ?>')  no-repeat center top;background-attachment: scroll;background-size: cover;">

	<div class="container">
   
        <div class="box_banner">


                <div class="textbanner bg_future" style="background:<?php echo $entrieC->hexaColor;?>">
                    <h1><?php echo $entrieC->title;?></h1>

                    <p class="visitorname"> Hi, </p>

                    <?php echo $entrieC->quotes;?>

                </div>
                <div class="edge_textbanner <?php if($entrieC->edgeNote!=""){echo $entrieC->edgeNote;}else{echo "edge_future";}?>">
                    <a href="#">Klik Disini</a>
                </div>

        </div>
	</div>
	<!-- container end -->
</div>
<!-- homebanner end -->
<?php }  ?>


<div class="box_cat">

    <?php
        
        $id = $this->data->investment_id;
        $entries = new Object_InvestmentPlan_List();
        $entries->setCondition('investment like "%'.$id.'%"');   
        $entries->setLimit(4);

	if(count($entries)>0){
    $i=1;
    foreach($entries as $entrie){
    ?>
        <div class="box_c future_bg_<?php echo $i; ?>" style="background-color:<?php echo $entrie->hexaColor; ?>" >
            <?php if($i<3){ ?>
            <div class="box_c_img left">
                <img src="<?php echo $entrie->images->path."".$entrie->images->filename; ?>" />
            </div>
            <div class="box_c_text right">
                <h2><?php echo $entrie->title ?></h2>
                <p><?php echo $entrie->tips ?></p>
                <a href="<?php if(isset($entrie->links)){ echo $entrie->links; }else{ echo "#"; } ?>">Selengkapnya <i class="fa fa-angle-right"></i></a>
            </div>
            <?php }else { ?>
            <div class="box_c_img right">
                <img src="<?php echo $entrie->images->path."".$entrie->images->filename; ?>" />
            </div>
            <div class="box_c_text left">
                <h2><?php echo $entrie->title ?></h2>
                <p><?php echo $entrie->tips ?></p>
                <a href="<?php if(isset($entrie->links)){ echo $entrie->links; }else{ echo "#"; } ?>">Selengkapnya <i class="fa fa-angle-right"></i></a>
            </div>
            <?php } ?>
        </div>
    <?php $i++; } 
    } ?>
    
</div>
<!-- box_cat end -->
    <?php
        }
	?>	
 
 <script>
 
 	function getCookie(cname) {
	    var name = cname + "=";
	    var ca = document.cookie.split(';');
	    for(var i=0; i<ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1);
		if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
	    }
	    return "";
	}

	var result = getCookie('visitorname');
	$('.visitorname').html('Hi, ' + result);
 
 </script>
<?php echo $this->template("includes/inv/footer.php")?>