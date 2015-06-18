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
    .marginKantor{
        margin-left:97px;
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
        /*display: block;*/
        margin: 10px 0px;
    }
    .tbl-email td{
        padding: 10px;
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
                    <div class="logo-icon" style="display: none;">
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
                            $telpKantor = str_replace(" ","",$dataKantor->getNomorTelepon());
                            $expTelp = explode("-",$telpKantor);
                            $fax = "(".$dataKantor->getKodeAreaFax().") ".$dataKantor->getNomorFax();
                            $x = count($dataKantor->getFotoGaleriKantor()->items);
                            $email = strtolower($dataKantor->getEmailKantor());
                    ?>
                        <h2><?php echo $namaLokasi; ?></h2>
                        <p>
                            <?php
                                echo "<span id='alamat_agen'>".$alamat."</span><br />";
                                echo "Fax. ".$fax."<br />";
                                echo "Hubungi Agen. ";
                                $x = 1;
                                foreach($expTelp as $key => $val){
                                    if($x > 1){
                                        echo "<span class='marginKantor'>(".$dataKantor->getKodeAreaTelepon().") ".$val."</span><br />";
                                    }
                                    else{
                                        $callKantor = "(".$dataKantor->getKodeAreaTelepon().") ".$val;
                                        echo "(".$dataKantor->getKodeAreaTelepon().") ".$val."<br />";
                                    }
                                    $x++;
                                }
                                //echo "Hubungi Agen. ".$telp."<br />";
                                echo "Email Agen. <span id='email_agen'>".$emailAgent."</span>";
                            ?>
                        </p>
                        <!-- <p> DI HIDE DULU YAA
                            Parameter dari tasbih: <br /> -->

                    
                    <?php
                        $sessionLive = new Zend_Session_Namespace('liveinsurance');
                        $status = $sessionLive->status;
                        $ID = $sessionLive->ID;
        

        
                        if($sessionLive->smoking == 'Y'){
                        $Rokok = 'Ya';}
                        else if($sessionLive->smoking == 'N'){
                        $Rokok = 'Tidak';}

                        $content;
                        if(isset($sessionLive->nama)){
                            $content.="<table>";
                            $content.='<tr class="tbl-email">
                                                    <td>Nama Anda</td>
                                                    <td>: '.$sessionLive->nama.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Email Anda </td>
                                                    <td>: '.$sessionLive->email.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Nomor Handphone Anda</td>
                                                    <td>: '.$sessionLive->nohp.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Tanggal Lahir Anda</td>
                                                    <td>: '.date("d/m/Y",strtotime($sessionLive->tanggalLahir)).'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Jenis Kelamin Anda</td>
                                                    <td>: '.$sessionLive->$gender.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Uang Pertanggungan Anda</td>
                                                    <td>: '.$sessionLive->uangpertanggungan.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>CIA</td>
                                                    <td>: '.$sessionLive->cia.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Merokok</td>
                                                    <td>: '.$Rokok.' tahun</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Premi yang harus anda bayarkan pertahun</td>
                                                    <td>: Rp '.$sessionLive->premi.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Keterangan tambahan</td>
                                                    <td>: </td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td colspan="3"><textarea class="form-control textareaForm" rows="3"></textarea></td>
                                                </tr>';
                                    $content.= "</table>";
                        }
                    ?>

                    <?php

                                $session = new Zend_Session_Namespace('tasbih');
                                $getStatus=$session->emailFrom;
                                $idObject = $session->idObject;
                                //echo $getStatus;

                                if($session->JenisKelamin=="l"){
                                    $jenis = "Pria";
                                }
                                else{
                                    $jenis = "Wanita";
                                }
                                $content;
                                if(isset($session->date_tglBuat)){
                                    //unset($session->name);
                                    $content.= "<table>";
                                    $content.='<tr class="tbl-email">
                                                    <td>Nama Anda</td>
                                                    <td>: '.$session->nama.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Email Anda </td>
                                                    <td>: '.$session->email.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Nomor Handphone Anda</td>
                                                    <td>: '.$session->nohp.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Tanggal Lahir Anda</td>
                                                    <td>: '.date("d/m/Y",strtotime($session->date_tglLahir)).'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Jenis Kelamin Anda</td>
                                                    <td>: '.$jenis.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Termin Pembayaran Anda</td>
                                                    <td>: '.$session->Frekuensi.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Uang Pertanggungan</td>
                                                    <td>: '.$session->AJ.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Massa Pembayaran Premi</td>
                                                    <td>: '.$session->Kontribusi.' tahun</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Premi yang harus anda bayarkan pertahun</td>
                                                    <td>: Rp '.number_format($session->Calculation,0,".",",").'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Keterangan tambahan</td>
                                                    <td>: </td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td colspan="3"><textarea class="form-control textareaForm" rows="3"></textarea></td>
                                                </tr>';
                                    $content.= "</table>";
                                }
                                
                               //print_r($content);
                            ?>
                            
                            <?php

                                $session1 = new Zend_Session_Namespace('inquiry');
                                $getStatusInquiry=$session1->form_inquiry;
                                $idObject = $session1->idObject;
                                //echo $getStatus;

                                if($session1->JenisKelamin=="l"){
                                    $jenis1 = "Pria";
                                }
                                else{
                                    $jenis1 = "Wanita";
                                }
                                $content;
                                if(isset($session1->nama)){
                                    //unset($session->name);
                                    $content.= "<table>";
                                    $content.='<tr class="tbl-email">
                                                    <td>Nama</td>
                                                    <td>: '.$session1->nama.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Email</td>
                                                    <td>: '.$session1->email.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Nomor Telepon</td>
                                                    <td>: '.$session1->no_hp.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Tanggal Lahir</td>
                                                    <td>: '.date("d/m/Y",strtotime($session1->tgl_lahir)).'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Jenis Kelamin</td>
                                                    <td>: '.$jenis1.'</td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td>Pesan</td>
                                                    <td>: '.$session1->pesan.'</td>
                                                </tr>';
                                    $content = "";
                                    $content.='<tr class="tbl-email">
                                                    <td>Keterangan tambahan</td>
                                                    <td>: </td>
                                                </tr>';
                                    $content.='<tr class="tbl-email">
                                                    <td colspan="3"><textarea class="form-control textareaForm" rows="3"></textarea></td>
                                                </tr>';
                                    $content.= "</table>";
                                    
                                }
                                
                                if(!isset($session->date_tglBuat) && !isset($session1->nama) && !isset($sessionLive->nama)){
                                    $content.= "<table>";
                                    $content.= '<tr class="tbl-email">
                                                    <td>Keterangan tambahan</td>
                                                    <td>: </td>
                                                </tr>';
                                    $content.= '<tr class="tbl-email">
                                                    <td colspan="3"><textarea class="form-control textareaForm" rows="3"></textarea></td>
                                                </tr>';
                                    $content.= "</table>";
                                }
                               //print_r($content);
                            ?>
                       
                    <?php }?>
                    <?php
                        if(!isset($session->date_tglBuat) && !isset($session1->nama) && !isset($sessionLive->nama)){
                    ?>
                        <a href="mailto:<?php echo $email;?>?Subject=Call%20Agen" target="_top" class="btn btn-sendmail">Kirim EMail</a>
                    <?php } else{?>
                        <a href="javascript:void(0)" target="_top" class="btn btn-sendmail btn-email">Email Agen</a>&nbsp;
                    <?php }?>
                    <br />
                    <a href="tel:<?php echo $callKantor;?>" target="_top" class="btn btn-sendmail hide">Hubungi Agen</a>
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


    $('.btn-email').click(function() {
        $('#modalEmail').modal();
    });
    
    $(".kirim-email").click(function(){
        <?php 

        if($getStatus=='tasbih_calc'){ ?>
            var keterangan = $(".textareaForm").val();

            $.ajax({
                url      : '/send-email-agen-tasbih/',
                type     : 'POST',
                data     : {
                            'from' : 'agent_locator',
                            'keterangan' : keterangan,
                            'nama_agen' : '<?php echo $namaAgent;?>',
                            'lokasi' : '<?php echo $namaLokasi;?>',
                            'telp' : '<?php echo $telepon;?>',
                            'email' : '<?php echo $email;?>'
                            },
                    success  : function(data){
                    console.log(data);
                    alert('Permintaan Informasi Layanan Tasbih Anda sudah kami kirim ke Agen Kami');    
                }
            
            });

        <?php }else{ ?>
                //var keterangan = $(".textareaForm").val();
                //('dari agent_locator'<?php echo $getStatus;?>);
        <?php } ?>
        
        <?php if($getStatusInquiry=='inquiry'){ ?>
            var keterangan = $(".textareaForm").val();
            
            $.ajax({
                url      : '/send-email-agen-inquiry/',
                type     : 'POST',
                data     : {
                            'keterangan' : keterangan,
                            'nama_agen' : '<?php echo $namaAgent;?>',
                            'email_agen' : '<?php echo $emailAgent;?>',
                            'telp' : '<?php echo $telepon;?>',
                            'lokasi' : '<?php echo $namaLokasi;?>'
                            },
                    success  : function(data){
                    //console.log(data);
                    alert('Permintaan Informasi Layanan Tasbih Anda sudah kami kirim ke Agen Kami');    
                }
            
            
            });

        <?php }?>
        
        <?php if($status=='life_insurance'){ ?>
            var keterangan = $(".textareaForm").val();
            
            $.ajax({
                url      : '/send-email-agen-lifeinsurance/',
                type     : 'POST',
                data     : {
                            'keterangan' : keterangan,
                            'nama_agen' : '<?php echo $namaAgent;?>',
                            'email_agen' : '<?php echo $emailAgent;?>',
                            'telp' : '<?php echo $telepon;?>',
                            'lokasi' : '<?php echo $namaLokasi;?>'
                            },
                    success  : function(data){
                    //console.log(data);
                    alert('Permintaan Informasi Layanan Life Insurance Anda sudah kami kirim ke Agen Kami');    
                }
            
            
            });

        <?php }?>
        
        
        $('#modalEmail').modal('hide');
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
