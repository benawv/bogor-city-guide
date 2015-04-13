<link rel="stylesheet" href="/website/static/css-ajfc/galeri/style.css" />
<style type="text/css">
	#container .group{
		display: none;
	}
	#container .group.active{
		display: inherit;
	}
	#load-more{
		text-align: center;
		margin-top: 20px;
		padding-top: 5px;
		padding-bottom: 5px;
	}
	#load-more:hover{
		background: rgba(198, 200, 199, 0.49);
	}
	#load-more a{
		margin-top:10px;
		padding:10px;
		color: white;
	}
	.click{
		cursor: pointer;
	}
</style>
<header>

    <div class="background">
    	<?php $asets=Asset::getByPath('/ajfc/bg-home.jpg');?>
        <img src="<?php echo $asets; ?>" alt="Home" class="img-responsive" />
    </div><!--/ .background -->
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-9 col-md-6">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2>Galeri</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut orci metus, interdum non ipsum nec, vulputate euismod metus. Morbi eget sem sed orci interdum lacinia quis ac orci.</p>
                        </div><!--/ .box-dent--inner -->
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->

</header>

<div class="page-wrapper-outer mb72">

<section class="page-wrapper gallery-wrapper mt32 mb72">
    <div class="container" id="container">
    	<?php

			$posistion = "odd";
			$no = 1;
			$num = 0;
			$nomer = 1;
			$nurut = 1; 
    		$color = array('','blue','orange','blue-light','green','grey','maroon','purple');
    		//$entries = new Object_DataPesertaAJFCDefault_List();
    		$entries = new Object_DataPesertaAJFC_List();
			$entries->setLimit(30);
            $entries->setOrderKey("o_creationDate");
            $entries->setOrder("desc");
			//$entries->setCondition("statusSubmitKuis LIKE 1 AND approve LIKE 1");
			$jml = count($entries);
			$sisa = 8 - $jml;
			//echo $jml.'sisa='.$sisa;
			if($jml < 8){
				$n = 1;
			}else{
				$n = 2;
			}
			while($n<=2){
				if($n==1){
					$entries = new Object_DataPesertaAJFCDefault_List();
					$entries->setLimit($sisa);
				}

				foreach ($entries as $key) {

					$img = $key->fotoPeserta;
					$ptg = ucfirst($key->satuTerpenting);
					$nama = ucwords($key->namaLengkap);
					$tgll = date("Y", strtotime($key->tanggalLahir));
					$nyear = date("Y",time());
					$umur = $nyear-$tgll;
					$asl = ucwords($key->tempatLahir);
					$prop = ucwords($key->propinsi);
					$nclass = "group".$nurut;
					if($nomer <=4){
						$active = "active";
					}else{
						$active = "";
					}
					if($nomer == 4 && $no == 1)
						$num = 0;

						
					if($no == 1){
						echo '<div class="row group '.$active.'" id="'.$nclass.'">';
						if($posistion == "odd")
							echo '
									<div class="col-xs-12 col-md-6 nopadding">
									    <div class="gallery-item '.$color[$num++].'">
									        <div class="row row-eq-height">
									            <div class="col-xs-12 col-md-6 nopadding">
									                <a href="#" class="gallery-item--image">
									                    <img src="'.$img.'" alt="">
									                </a>
									            </div><!--/ .col-xs-12 -->
									            <div class="col-xs-12 col-md-6 nopadding">
									                <div class="gallery-item--text">
									                    <div class="gallery-item--text-inner">
									                        <h3>"'.$ptg.'"</h3>
									                        <p>'.$nama.', '.$umur.' Tahun<br />'.$asl.', '.$prop.'</p>
									                    </div><!--/ .gallery-item--text-inner -->
									                </div><!--/ .galery-item--text -->
									            </div><!--/ .col-xs-12 -->
									        </div><!--/ .row -->
									    </div><!--/ .gallery-item -->
									</div><!--/ .col-xs-12 -->
							';
						else
							echo '
								<div class="col-xs-12 col-md-6 nopadding">
					                <div class="gallery-item '.$color[$num++].'">
					                    <div class="row">
					                        <div class="col-xs-12 col-md-6 nopadding">
					                            <div class="gallery-item--text">
					                                <div class="gallery-item--text-inner">
					                                    <h3>"'.$ptg.'"</h3>
								                        <p>'.$nama.', '.$umur.' Tahun<br />'.$asl.'</p>
					                                </div><!--/ .gallery-item--text-inner -->
					                            </div><!--/ .galery-item--text -->
					                        </div><!--/ .col-xs-12 -->
					                        <div class="col-xs-12 col-md-6 nopadding">
					                            <a href="#" class="gallery-item--image">
					                                <img src="'.$img.'" alt="">
					                            </a>
					                        </div><!--/ .col-xs-12 -->
					                    </div><!--/ .row -->
					                </div><!--/ .gallery-item -->
					            </div><!--/ .col-xs-12 -->
							';
						$no++;

					}elseif($no == 2){
						$no = 1;
						if($posistion == "odd")
							echo '
									<div class="col-xs-12 col-md-6 nopadding">
									    <div class="gallery-item '.$color[$num++].'">
									        <div class="row">
									            <div class="col-xs-12 col-md-6 nopadding">
									                <a href="#" class="gallery-item--image">
									                    <img src="'.$img.'" alt="">
									                </a>
									            </div><!--/ .col-xs-12 -->
									            <div class="col-xs-12 col-md-6 nopadding">
									                <div class="gallery-item--text">
									                    <div class="gallery-item--text-inner">
									                        <h3>"'.$ptg.'"</h3>
									                        <p>'.$nama.', '.$umur.' Tahun<br />'.$asl.'</p>
									                    </div><!--/ .gallery-item--text-inner -->
									                </div><!--/ .galery-item--text -->
									            </div><!--/ .col-xs-12 -->
									        </div><!--/ .row -->
									    </div><!--/ .gallery-item -->
									</div><!--/ .col-xs-12 -->
							';
						else
							echo '
								<div class="col-xs-12 col-md-6 nopadding">
					                <div class="gallery-item '.$color[$num++].'">
					                    <div class="row">
					                        <div class="col-xs-12 col-md-6 nopadding">
					                            <div class="gallery-item--text">
					                                <div class="gallery-item--text-inner">
					                                    <h3>"'.$ptg.'"</h3>
								                        <p>'.$nama.', '.$umur.' Tahun<br />'.$asl.'</p>
					                                </div><!--/ .gallery-item--text-inner -->
					                            </div><!--/ .galery-item--text -->
					                        </div><!--/ .col-xs-12 -->
					                        <div class="col-xs-12 col-md-6 nopadding">
					                            <a href="#" class="gallery-item--image">
					                                <img src="'.$img.'" alt="">
					                            </a>
					                        </div><!--/ .col-xs-12 -->
					                    </div><!--/ .row -->
					                </div><!--/ .gallery-item -->
					            </div><!--/ .col-xs-12 -->
							';
						echo '</div>';

						if($posistion=="odd")
							$posistion = "even";
						else
							$posistion = "odd";
						$nomer++;
					}
					$nurut++;
				}

				$n++;
			}
    	if($jml>8){ ?>
    		<a class="click"><div id="load-more"><img width="24px" src="/btn-plus.gif"></div></a>
    	<?php } ?>
    	<div style="clear: both;"></div>
    </div><!--/ .container -->
</section><!--/ .page-wrapper -->

</div><!--/ .page-wrapper-outer -->
<script>
	$(document).ready(function(){
		size_li = $("#container .img").size();
		console.log(size_li);
		x=3;

		var $group = $('.group');
		
		$(".click").click(function() {
			if ($(this).hasClass('disable')) return false;

			var $hidden = $group.filter(':hidden:first').addClass('active');
			if (!$hidden.next('.group').length) {
			    $(this).addClass('disable');
			    $(".click").hide();
			}
			//console.log('xx='+$hidden.next('.group').length);
		    //setInterval(image, 3000);
		});
 

	});
</script>