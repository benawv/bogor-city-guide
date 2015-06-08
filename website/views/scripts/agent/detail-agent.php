<style>

    #profil{
        width:100%;

    }
    .btn-sendmail
    {
        margin: 0 auto;
        padding: 5px 10px;
        display: inline-block;
        text-transform: uppercase;
        background-color: #003781;
        border: solid 1px #003781;
        border-radius: 0;
        color: white;
        line-height: 1.5;
    }

    .btn-sendmail:hover,
    .btn-sendmail:focus
    {
        color: white;
        text-decoration: none;
        background: #003da5;
        border: solid 1px #003da5;
    }

    .custom-section
    {
        padding: 0 !important;
    }

    .custom-section > h2
    {
        margin: 0 auto !important;
        padding: 12px 25px !important;
        background: #003781;
        color: white;
    }

    .custom-section > h2 > custom-section
    {
        margin: 0 !important;
        padding: 0 !important;
    }

    .custom-section .description
    {
        padding: 0;
    }

    .custom-section .description .section-left-40
    {
        padding: 0;
        background: #111;
    }

    .custom-section .description .section-left-40 img
    {
        min-width: 100%;
    }

    .custom-section .description .section-right-60
    {
        padding: 25px 25px !important;
    }

    .custom-section .description .section-right-60 p
    {
        color: #666;
        line-height: 1.8;
    }
    .btn.btn-sendmail.hide{
        display: none;
    }
    @media (max-width: 768px) {
        .btn.btn-sendmail{
            display: block;
            text-align: left;
        }
        .btn.btn-sendmail.hide{
            display: block;
        }
      }
    .bisnis{
        margin-top: -10px;
    }
    .custom-section .description .section-left-40{
        background: none;
    }
    .logo-icon a{
        float: left;
        margin-right: 10px;
        margin-top: 10px;
        display: block;
        width: 33px;
        height: 33px;
    }
    .icon-fb{
        background: url("/website/static/images/agent_locator/fb2.png") no-repeat;
    }
    a.icon-fb:hover{
        background: url("/website/static/images/agent_locator/fb1.png") no-repeat;
    }
    
    .icon-in{
        background: url("/website/static/images/agent_locator/in2.png") no-repeat;
    }
    a.icon-in:hover{
        background: url("/website/static/images/agent_locator/in1.png") no-repeat;
    }
    
    .icon-me{
        background: url("/website/static/images/agent_locator/info2.png") no-repeat;
    }
    a.icon-me:hover{
        background: url("/website/static/images/agent_locator/info1.png") no-repeat;
    }
    .tbl-email{
        display: block;
        margin: 10px 0px;
    }
    .tbl-email td{
        padding: 3px;
    }
</style>
<?php
    $kantor = $this->kantor;
    //echo 'test';
    $agent = $this->agent;
    //echo "<pre>";
    //print_r($agent);
    //die();
    foreach($agent as $row){
        $kodeAgent = $row->getkodeAgent();
        $namaAgent = $row->getnamaAgent();
        $emailAgent = strtolower($row->getemail());
        $kantor = $row->getkantor();
        $profilAgent = $row->getprofilAgent();
        $fotoAgent = $row->getfotoAgent()->path.$row->getfotoAgent()->filename;
        $Facebook = $row->getURLFacebook();
        $Artikel = $row->getArtikel();
        $telepon = $row->kantor[0]->nomorTelepon;
        $linkFB = $row->getLinkfacebook()->direct;
        $linkIN = $row->getLinklinkedin()->direct;
        $linkME = $row->getLinkaboutme()->direct;
        
        if(isset($linkFB)){
            $linkFB = $linkFB;
        }
        else{
            $linkFB = "#";
        }
        
        if(isset($linkIN)){
            $linkIN = $linkIN;
        }
        else{
            $linkIN = "#";
        }
        
        if(isset($linkME)){
            $linkME = $linkME;
        }
        else{
            $linkME = "#";
        }
        //echo "<pre>";
        //print_r($row);
        //die();
    }

?>
<div class="container boxes-view">
    <?php //echo $this->template("includes/breadcrumb.php")?>
    <!--<span class="breadcrumb"><h1 class="title"><?php /*echo $this->document->getProperty('navigation_title');*/?></h1></span>-->
    <div class="wrapper-special clearfix">
        
    </div><!-- .wrapper-special -->


    <?php foreach($kantor as $dataKantor2){
            $idKantor = $dataKantor2->getO_id();
            $keyKantor = $dataKantor2->getO_key();
        }
    ?>
    <div>
        <h5>
			<span><a href="/">Home </a></span>
            &rsaquo; <a href="<?php echo $this->url(array($keyKantor ,$idKantor),"detail-kantor");?>"><span>Detail Kantor</span></a>
            &rsaquo; <span class='currentPage'>Detail Agen</span>
		</h5>
        <span
        <div class="full-w bg-white custom-section">
            <h2>
                <span class="judul_section">Profil Agent</span>
            </h2>
            <div class="description width-66">
                <div class="section-left-40">
                    <img src="<?php echo $fotoAgent; ?>" alt="<?php echo $namaAgent; ?>">
                    <div class="logo-icon">
                        <a href="<?php echo $linkFB;?>" target="_blank" class="icon-fb"></a>
                        <a href="<?php echo $linkIN;?>" target="_blank" class="icon-in"></a>
                        <a href="<?php echo $linkME;?>" target="_blank" class="icon-me"></a>
                    </div>
                    <!--
                    <img src="http://placekitten.com/g/256/256" alt="Gambar" />
                    -->
                </div><!--/ .section-left-40 -->
                <div class="section-right-60">
                    <h2><?php echo $namaAgent; ?></h2>
                    <div class="bisnis">Bisnis Partner</div>
                    <?php foreach($kantor as $dataKantor){
                            $namaLokasi = ucwords(strtolower($dataKantor->getNamaLokasi()));
                            $alamat = ucwords(strtolower($dataKantor->getAlamat1()."<br /> ".$dataKantor->getAlamat2()."<br /> ".$dataKantor->getAlamat3()));
                            $telp = "(".$dataKantor->getKodeAreaTelepon().") ".$dataKantor->getNomorTelepon();
                            $fax = "(".$dataKantor->getKodeAreaFax().") ".$dataKantor->getNomorFax();
                            $x = count($dataKantor->getFotoGaleriKantor()->items);
                            $email = strtolower($dataKantor->getEmailKantor());
                    ?>
                        <h2><?php echo $namaLokasi; ?></h2>
                        <p>
                            <?php
                                echo $alamat."<br />";
                                echo "Telp. ".$telp."<br />";
                                echo "Fax. ".$fax."<br />";
                                echo "Hubungi Agen. ".$telp."<br />";
                                echo "Email Agen. ".$emailAgent;
                            ?>
                        </p>
                        <!-- <p> DI HIDE DULU YAA
                            Parameter dari tasbih: <br /> -->

                            <?php

                                $session = new Zend_Session_Namespace('tasbih');
                                $getStatus=$session->emailFrom;
                                //echo $getStatus;

                                
                                $content;
                                if(isset($session->date_tglBuat)){
                                    //unset($session->name);
                                    $content.= "<table>";
                                    $content.='<tr class="tbl-email">
                                                    <td>Nama</td>
                                                    <td>: '.$session->nama.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Email</td>
                                                    <td>: '.$session->email.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Nomor Telepon</td>
                                                    <td>: '.$session->nohp.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Tanggal di Buat</td>
                                                    <td>: '.$session->date_tglBuat.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Tanggal Lahir</td>
                                                    <td>: '.$session->date_tglLahir.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Jenis Kelamin</td>
                                                    <td>: '.$session->JenisKelamin.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Frekuensi Pembayaran</td>
                                                    <td>: '.$session->Frekuensi.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Asuransi Jiwa</td>
                                                    <td>: '.$session->AJ.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Kontribusi Pertahun</td>
                                                    <td>: '.$session->Kontribusi.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Calculation</td>
                                                    <td>: '.$session->Calculation.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Keterangan tambahan</td>
                                                    <td>: </td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td colspan="3"><textarea class="form-control" rows="3"></textarea></td>
                                                </tr>';
                                    $content.= "</table>";
                                }
                               //print_r($content);
                            ?>
                       
                    <?php }?>
                    <a href="javascript:void(0)" target="_top" class="btn btn-sendmail">Email Agen</a>&nbsp;
                    <a href="tel:<?php echo $telp;?>" target="_top" class="btn btn-sendmail hide">Hubungi Agen</a>
                </div><!--/ .section-right-60 -->
            </div><!--/ .description-width-66 -->
        </div><!--/ .full-w -->
        
        <div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Kirim Pesan ke Agen.</h4>
                </div>
                <div class="modal-body">
                    <?php
                        echo $content;
                    ?>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary kirim-email">Kirim email</button>
                </div>
              </div>
            </div>
        </div>

        <div style="clear: both"></div>

        <!--Button to Calc Live Insurance-->
        <div class="items-container">
            <div class="item">
                <div class="heading">
                    <!--<h2 class="title_news">CALCULATOR LIVE INSURANCE</h2>-->
                    <h2 class="title_news"><a href="http://www.allianz.co.id/community-tips" target="_blank">Artikel</a></h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <!--<center><a href="#"><img src="/website/static/images/agent_locator/Calc-Live-Insurance.jpg" width="150" height="130" /></a></center>-->
                <center><img src="/website/static/images/agent_locator/Agent_Profile_Picture_article.png" /></center>
                <div class="description">
                    <a href="http://www.allianz.co.id/community-tips" target="_blank">&gt; Selengkapnya</a>
                </div>
            </div>

             <div class="item">
                <div class="heading">
                    <!--<h2 class="title_news">NEWS</h2>-->
                    <h2 class="title_news"><a href="http://www.allianz.co.id/produk/asuransi-jiwa" target="_blank">Produk Asuransi Jiwa</a></h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <!--<p>
                     <?php
                        //if(strlen($Artikel) < 115) echo $Artikel;
                        //else echo substr($Artikel,0,115);
                        //
                        //echo ". . .<br/>";
                    ?>
                </p>-->
                <center><img src="/website/static/images/agent_locator/asuransi-jiwa-allianz-flexi-account-plus.jpg" /></center>
                <div class="description">
                    <a href="http://www.allianz.co.id/produk/asuransi-jiwa" target="_blank">&gt; Selengkapnya</a>
                </div>
            </div>

            <div class="item">
                <div class="heading">
                    <!--<h2 class="title_news">FACEBOOK</h2>-->
                    <h2 class="title_news"><a href="https://www.facebook.com/AllianzIndonesiaCommunity" target="_blank">Facebook Allianz Indonesia</a></h2>
                    <div class="btn-group">
                        <!--Link-->
                    </div>
                </div>
                <center><img src="/website/static/images/agent_locator/Agent_Profile_Picture_SocialMedia.png" /></center>
                <div class="description">
                    <a href="https://www.facebook.com/AllianzIndonesiaCommunity" target="_blank">&gt; Selengkapnya</a>
                </div>


                <!--<div class="fb-page" data-href="<?php echo $Facebook; ?>" data-width="304" data-height="130" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/FacebookIndonesia?brand_redir=20531316728"><a href="https://www.facebook.com/FacebookIndonesia?brand_redir=20531316728">Facebook</a></blockquote></div></div>-->
            </div>
        </div>


    </div>
</div>
<div id="fb-root"></div>
<script>


    $('.btn-sendmail').click(function() {
        $('#modalEmail').modal();
    });
    
    $(".kirim-email").click(function(){
        <?php 

        if($getStatus=='tasbih_calc'){ ?>
            
            $.ajax({
                url      : '/send-email-agen-tasbih/',
                type     : 'POST',
                data     : {
                            'from' : 'agent_locator'
                            },
                    success  : function(data){
                    //console.log(data);
                    alert('Permintaan Informasi Layanan Tasbih Anda sudah kami kirim ke Agen Kami');    
                }
            
            
            });

        <?php }else{ ?>

                //('dari agent_locator'<?php echo $getStatus;?>);
        <?php } ?>
    });




$(document).ready(function(){
    $("#slideshow ul.flex-direction-nav").remove();
});
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.3&appId=463659440451126";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
