<div class="sticky-object">
    <div class="sticky-object-inner">
        <a href="#" class="sticky-object-toggle"><i class="fa fa-angle-right"></i></a>
        <p>Pendaftaran tinggal 1hari lagi lho!</p>
        <a href="<?php echo $this->link("linkDaftar")->getHref();?>" class="sticky-object-cta">Daftar Sekarang!!</a>
    </div><!--/ .sticky-object-inner -->
</div><!--/ .sticky-object -->

<header>

    <div class="background">
        <img src="/website/static/images/ajfc/background/background.jpg" alt="Home" class="img-responsive" />
    </div><!--/ .background -->
    <div class="caption">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-4 col-md-3 col-md-offset-9">
                    <div class="box-dent mt32">
                        <div class="box-dent--inner">
                            <h2>AJFC 2015</h2>
                            <p>#1ygterpenting mewujudkan mimpi menjadi kenyataan.</p>
                <p>Daftarkan anak/kerabat Anda yang berusia 14-16 tahun untuk dilatih oleh pelatih remaja FC Bayern Munchen di Jerman.</p>
                            <?php
				function limit_words($string, $word_limit)
				{
					$words = explode(" ",$string);
					return implode(" ",array_splice($words,0,$word_limit));
				}
				
                if($this->editmode)
                {
                    echo $this->link("linkDaftar");
                }
                else{
                ?>
                <a href="<?php echo $this->link("linkDaftar")->getHref();?>"><?php echo $this->link("linkDaftar")->getText();?> <i class="fa fa-angle-right"></i></a>
                <?php
                }
                ?>
            </div><!--/ .box-dent--inner -->
                    </div>
                </div><!--/ .col-xs-6 -->
            </div><!--/ .row -->
        </div><!--/ .container-fluid -->
    </div><!--/ .caption -->

</header>