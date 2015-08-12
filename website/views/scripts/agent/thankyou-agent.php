
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
        margin-left:140px;
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
        
        $emailLeaderBCC = $row->getbccDirectLeaderEmail();
        $emailTeamAsnBCC = $row->getbccTeamAsn();
        $emailMmBCC = $row->getbccMm();
        $emailMmInaBCC = $row->getbccMmIna();


        $kantor = $row->getkantor();

        //$profilAgent = $row->getprofilAgent();

        $fotoAgent = $row->getfotoAgent()->path.$row->getfotoAgent()->filename;
        //$Facebook = $row->getURLFacebook();
        //$Artikel = $row->getArtikel();
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
            &rsaquo; <a href="<?php echo $this->url(array($idkKantor ,$kodeAgent),"detail-agent");?>"><span>Detail Agen</span></a>
            &rsaquo; <span class='currentPage'>Thank You Page</span>
		</h5>
        <span
        <div class="full-w bg-white custom-section">
            <h2>
                <span class="judul_section"><center>THANK YOU PAGE</center></span>
            </h2>
            <div class="description">
                                <div class="form-box" id="notif-confirm">
<br/>
                                    <br/>
                    <h3  style=" color:black;"><center><strong>TERIMA KASIH</strong></center></h3>
                    <h4><center><strong>Permintaan Informasi Layanan Anda sudah kami kirim ke Agen</strong></center></h4>
                    <br />
                    <center>
                         <button type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm" id="cari-agen" name="next" style ="background:#003781;">Selesai</button>
                         <!--input type="button" class="btn btn-next btn-fill btn-warning btn-wd btn-sm btn-tasbih " id="cari-agen" name="next" value="Cari Agen" -->
                    </center>
                                    <br/>
                                    <br/>
                </div>
<!--                <h2></h2>-->
            </div><!--/ .description-width-66 -->
        </div><!--/ .full-w -->
        


        <div style="clear: both"></div>

        <!--Button to Calc Live Insurance-->
        <div class="items-container">





        </div>


    </div>
</div>
<div id="fb-root"></div>
