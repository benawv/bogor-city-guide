<?php echo $this->template("includes/inv/header.php")?>

<div class="homebanner banner_portal">
	<div class="container">
             <?php //echo $this->image("banner", array("class" => "banner_img")) //css error?>
		<div class="box_banner">
               
			<div class="textbanner bg_green">
				<h1>1 Yang Terpenting!</h1>
					<p>Selamat datang, <input type="text" name="putname" id="putname" /><br />
					pilih 1 yang terpenting untuk anda</p>

				<p>
					
                        <?php 
                            $i=1; 
                            foreach($this->categoryInv as $entrie)
                            {                                
                                
/*                                echo "<pre>";
                                print_r($entrie);
                                echo "</pre>";*/
                        ?>
                              <input type="radio" id="rd_<?php echo $i; ?>" name="rd" value="<?php  echo $entrie->o_id; ?>" />
                              <label for="rd_<?php echo $i?>"><?php  echo $entrie->investment; ?></label> <br />
                        <?php
                                $i++; 
                        } ?>
				</p>
			</div>
            
			<div class="edge_textbanner edge_green">
				<!--input type="button" class='send_customer' value="Klik Disini"></input-->
			</div>

		</div>



	</div>
	<!-- container end -->
</div>
<!-- homebanner end -->


<div class="box_cat">

	<div class="box_c bg_1">
		<div class="box_c_img left">
			 <?php echo $this->image("box1", array("class" => "boxs")) ?>
		</div>
		<div class="box_c_text right">
			<h2><?php echo $this->input('text-1')?></h2>
			<p><?php echo $this->wysiwyg("descr1") ?></p>
            <?php echo $this->link('links1',array("class"=>"fa fa-angle-right"))?>
		</div>

	</div>

	<div class="box_c bg_2">

		<div class="box_c_img left">
			<?php echo $this->image("box2", array("class" => "boxs")) ?>
		</div>
		<div class="box_c_text right">
			<h2><?php echo $this->input('text-2')?></h2>
			<p><?php echo $this->wysiwyg("descr2") ?></p>
            <?php echo $this->link('links2',array("class"=>"fa fa-angle-right"))?>
		</div>

	</div>

	<div class="box_c bg_3">

		<div class="box_c_img right">
			<?php echo $this->image("box3", array("class" => "boxs")) ?>
		</div>
		<div class="box_c_text left">
			<h2><?php echo $this->input('text-3')?></h2>
			<p><?php echo $this->wysiwyg("descr3") ?></p>
            <?php echo $this->link('links3',array("class"=>"fa fa-angle-right"))?>
		</div>

	</div>

	<div class="box_c bg_4">

		<div class="box_c_img right">
			<?php echo $this->image("box4", array("class" => "boxs")) ?>
		</div>
		<div class="box_c_text left">
			<h2><?php echo $this->input('text-4')?></h2>
			<p><?php echo $this->wysiwyg("descr4") ?></p>
            <?php echo $this->link('links4',array("class"=>"fa fa-angle-right"))?>
        </div>

	</div>

</div>
<!-- box_cat end -->

<script>
 var inv_cat = '';
 function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires="+d.toUTCString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }
        
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
        
        
    $( 'input[name="rd"]' ).each(function(index,value){
        $( this ).on( 'click', function(){
            inv_cat = $( this ).val();
            var putname= $('input[name="putname"]').val();
            
            setCookie('visitorname',putname,1);            
            url = '/investment/investment-category/'+inv_cat;
            //$(location).attr("href", url); 
            window.location.href = url;
        });
    });
        
        
</script>

<?php echo $this->template("includes/inv/footer.php")?>
