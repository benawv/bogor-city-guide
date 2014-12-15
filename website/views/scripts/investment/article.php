<?php echo $this->template("includes/inv/header.php")?>


<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    
<div role="main" class="main no-gutter">

<?php
    
    
	if(count($this->data)>0)
	{
		foreach ($this->data->investment as $inv) 
		{ 	
			$cls=strtolower($inv['investment']);
	        if($cls=="edukasi"){
	            $investmentcolor="bg_edu ";    
	        }elseif($cls=="investasi"){
	             $investmentcolor="bg_fund ";
	        }elseif($cls=="asuransi"){
	             $investmentcolor="bg_health ";
	        }elseif($cls=="masa depan"){
	             $investmentcolor="bg_future ";
	        }elseif($cls=="pensiun"){
	             $investmentcolor="bg_pension ";
	        }
	}
		
?>
    
    
    <div class="<?php echo $investmentcolor?$investmentcolor:'bg_fund' ?>">
       <div class="container">
       
           <h1 class="article-title">
           <?php 
               $id=$this->data->category;
               echo $this->data->title; 
            ?>
            </h1> 
        
        </div>         
    </div>
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            
			<div class="wrap73">
                <h5>
                    <span><a href="/investasi/investment-homepage/">Home</a></span> &rsaquo; 
                    <span><a href="/investment/investment-category/<?php echo str_replace(",","",$this->entries[0]['investment']); ?>">Article</a></span> &rsaquo; 
                    <span><a href="/investment/investment-article-list/<?php echo str_replace(",","",$this->entries[0]['investment']); ?>_1">Article Index <?php foreach ($this->data->investment as $inv) { echo $inv->investment;}  ?></a></span> &rsaquo; 
                    <span><?php echo $this->data->title ?></span>
                </h5>
			
            
                <div class="tag">
                    <div class="tag-left">
                        <h4>Tag :   <a href="/investment/investment-article-list/<?php echo str_replace(",","",$this->entries[0]['investment']); ?>_1">
                   <?php foreach ($this->data->investment as $inv) { echo $inv->investment;}  ?></a></h4>
                    </div>
                    <div class="tag-right">
                        <span class='st_sharethis' displayText='ShareThis'></span>
                        <span class='st_facebook' displayText=''></span>
                        <span class='st_twitter' displayText=''></span>
                        <span class='st_linkedin' displayText=''></span>
                        <span class='st_pinterest' displayText=''></span>
                        <span class='st_email' displayText=''></span>
                    </div>
                </div>
                
                <div class="main-img">
                    <img src="<?php echo $this->data->investment[0]->path."".$this->data->investment[0]->images; ?>" />
                </div>
                <div class="main-desc">
                   <?php echo $this->data->content;?>
                </div>
            </div>	    
            
            <div class="wrap20">
                <h4>Artikel Terkait</h4>
                
                <?php

                    $a_entries = new Object_InvestmentArticle_List();
                    $a_entries->setCondition('investment like "%'.$id.'%"'); 
                    $a_entries->setLimit(3);
                foreach($a_entries as $a_entrie){
                ?>
                    
                <div class="image-side">
                    <div class="img-article">
                        <img style="width: 100%; height: 100%;" src="<?php echo $a_entrie->investment[0]->path."".$a_entrie->investment[0]->images; ?>" />
                    </div>
                    <div class="img-desc">
                        <h5><a href="investment/investment-article<?php echo $a_entrie->getO_key()."_".$a_entrie->getO_id()."_1";?>"><?php  echo $a_entrie->title; ?></a></h5>
                    </div>
                </div>
                <?php } ?>
                    
                

			</div>	
            
            
						
						
		</div>
		<!-- merchandise end -->
	
	</div>
</div>


<?php echo $this->template("includes/inv/footer.php")?>
