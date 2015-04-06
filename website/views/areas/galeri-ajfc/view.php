<link rel="stylesheet" href="/website/static/css-ajfc/galeri/style.css" />
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
    <div class="container">
    	<?php

			$posistion = "odd";
			$no = 1;
			$num = 0; 
    		$color = array('','blue','orange','blue-light','green','grey','maroon','purple');
    		//$entries = new Object_DataPesertaAJFCDefault_List();
    		$entries = new Object_DataPesertaAJFC_List();
		$entries->setCondition("`statusSubmitKuis` = 1");
			$entries->setLimit(8);
			$jml = count($entries);
			$sisa = 8 - $jml;
			//echo $jml.'sisa='.$sisa;
			if($jml < 8){
				$n = 2;
			}else{
				$n = 1;
			}
			while($n>0){
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

					if($no == 1){
						echo '<div class="row">';
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

					}
				}

				$n--;
			}
    	?>
        
    </div><!--/ .container -->
</section><!--/ .page-wrapper -->

</div><!--/ .page-wrapper-outer -->
