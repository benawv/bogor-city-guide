<link rel="stylesheet" href="/website/static/css-ajfc/daftar-peserta/css/jquery.dataTables.css">
<script src="/website/static/css-ajfc/daftar-peserta/js/jquery.dataTables.js"></script>

<link rel="stylesheet" href="//cdn.datatables.net/responsive/1.0.5/css/dataTables.responsive.css">
<script src="//cdn.datatables.net/responsive/1.0.5/js/dataTables.responsive.js"></script>

<header>

    <div class="background">
        <?php $asets=Asset::getByPath('/ajfc/background/bgtanya-jawab.jpg');?>
        <img src="<?php echo $asets; ?>" alt="background pengumuman" class="img-responsive" />
    </div><!--/ .background -->

</header>

<div class="page-wrapper-outer">

<section class="page-wrapper mt32 mb72">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 pr0">

                <div class="main-content">

                    <div class="main-content--header">
                        <h1 class="mb12"><?php echo $this->input('title_page_faq')?></h1>
						<?php echo $this->wysiwyg("textPengumumanMunich");?>
                    </div><!--/ .main-content--header -->
					<br /><br />
                                                
                            <?php if($this->editmode) { ?>
                                <div class="alert alert-info" style="height: 75px">
                                    <div class="col-xs-12">
                                        Berapa item yang ditampilkan?

                                        <?php
                                            // prepare the store
                                            $selectStore = [];
                                            for($i=2; $i<30; $i++) {
                                                $selectStore[] = [$i, $i];
                                            }
                                        ?>
                                        <?php echo $this->select("slides",[
                                            "store" => $selectStore,
                                            "reload" => true
                                        ]); ?>
                                    </div>
                                </div>

                                <style type="text/css">
                                    .gallery .item {
                                        min-height: 377px;
                                    }
                                #best-products{
                                    height : auto !important;
                                }
                                </style>
                            <?php } ?>
                            <?php 
                                $id = "banner-".uniqid();
                                $slides = 2;
                                if(!$this->select("slides")->isEmpty()){
                                    $slides = (int) $this->select("slides")->getData();
                                }
                            ?>
                    <?php if($this->editmode){ ?>
                    
                    <table class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for($i=1;$i<=$slides;$i++) { ?>
                                <tr>
									<td width="40%"><?php echo $i; ?></td>
									<td><?php echo $this->input("nama_".$i); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </br>
                    <?php }else{ ?>
                    <table id="munich" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for($i=1;$i<=$slides;$i++) { ?>
                                <?php $value = $this->input("nama_".$i); ?>
                                <tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $value; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php }?>
					
					<div class="main-content--header">
						<?php echo $this->wysiwyg("textPengumumanAsiaCamp");?>
                    </div><!--/ .main-content--header -->
					<br /><br />

                       <?php if($this->editmode) { ?>
                                <div class="alert alert-info" style="height: 75px">
                                    <div class="col-xs-12">
                                        Berapa item yang ditampilkan?

                                        <?php
                                            // prepare the store
                                            $selectStore = [];
                                            for($i=2; $i<30; $i++) {
                                                $selectStore[] = [$i, $i];
                                            }
                                        ?>
                                        <?php echo $this->select("slides2",[
                                            "store" => $selectStore,
                                            "reload" => true
                                        ]); ?>
                                    </div>
                                </div>

                                <style type="text/css">
                                    .gallery .item {
                                        min-height: 377px;
                                    }
                                #best-products{
                                    height : auto !important;
                                }
                                </style>
                            <?php } ?>
                            <?php 
                                $id = "banner-".uniqid();
                                $slides2 = 2;
                                if(!$this->select("slides2")->isEmpty()){
                                    $slides2 = (int) $this->select("slides2")->getData();
                                }
                        ?>    
                
                <?php if($this->editmode){ ?>
                    
                    <table class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for($i=1;$i<=$slides2;$i++) { ?>
                                <tr>
									<td width="40%"><?php echo $i; ?></td>
									<td><?php echo $this->input("namaAsia_".$i); ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </br>
                <?php }else{ ?>
                    <table id="asia" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php for($i=1;$i<=$slides2;$i++) { ?>
                                <?php $value = $this->input("namaAsia_".$i); ?>
                                <tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $value; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                <?php } ?>
					<div class="main-content--header">
						<?php echo $this->wysiwyg("textPengumuman");?>
                    </div><!--/ .main-content--header -->
					<br /><br />
            
            
                       <?php if($this->editmode) { ?>
                                <div class="alert alert-info" style="height: 75px">
                                    <div class="col-xs-12">
                                        Berapa item yang mau ditambah? (Pilih lebih dari enol untuk muncul tabel)

                                        <?php
                                            // prepare the store
                                            $selectStore = [];
                                            for($i=1; $i<30; $i++) {
                                                $selectStore[] = [$i, $i];
                                            }
                                        ?>
                                        <?php echo $this->select("slides3",[
                                            "store" => $selectStore,
                                            "reload" => true
                                        ]); ?>
                                    </div>
                                </div>

                                <style type="text/css">
                                    .gallery .item {
                                        min-height: 377px;
                                    }
                                #best-products{
                                    height : auto !important;
                                }
                                </style>
                            <?php } ?>
                            <?php 
                                $id = "banner-".uniqid();
                                $slides3 = 0;
                                if(!$this->select("slides3")->isEmpty()){
                                    $slides3 = (int) $this->select("slides3")->getData();
                                }
                        ?>    
            
            <?php if($this->editmode){ ?>
                <div id="tambahData" style="<?php if($slides3 == 0) echo "none"; else echo "block"; ?>">
                    <table class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
							<th>Tanggal Lahir</th>
                            <th>No Peserta</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <?php for($i=0;$i<=$slides3;$i++) { ?>
                            <tr>
                                <th width="20%"><?php echo $i; ?></th>
                                <th width="20%"><?php echo $this->input("namaExample_".$i); ?></th>
                                <th width="20%"><?php echo $this->date("dateExample_".$i, array("format" => "d.m.Y")) ?></th>
                                <th width="20%"><?php echo $this->input("nomorExample_".$i); ?></th>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button id="simpan">simpan</button>
                </div>
            <?php } ?>
            
            
                <div id="displayData">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>Nama</th>
							<th>Tanggal Lahir</th>
                            <th>No Peserta</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                $data = new Object_DataPesertaAJFC_List();
								$data->setOrderKey("namaLengkap");
								$data->setOrder("asc");
								$data->setCondition("lulus = 1");
                                $x = 1;
                                $NoDada = "";
                                foreach($data as $peserta)
                                {
                                $setLari = "";
                                $setLari = $peserta->getNoLari();
                                if($setLari!=" " || $setLari!=""){
                                    $digit = 4-(int)(strlen($setLari));
                                    $noDada = "";
                                    for($i=1;$i<=$digit;$i++)
                                    {
                                        $noDada = $noDada."0";
                                    }
                                    $NoDada = $noDada.$setLari;
                                    if($NoDada=="0000")
                                    {
                                        $NoDada="";
                                    }
                                }
                            ?>
                                <tr>
                                <td><?php echo $x;?></td>
                                <td><?php echo ucwords(strtolower($peserta->getNamaLengkap()));?></td>
                                <td><?php if($peserta->getTanggalLahir()!="" || $peserta->getTanggalLahir()!= NULL){echo date("d / m / Y",strtotime($peserta->getTanggalLahir()));}?></td>
								<td><?php echo $NoDada;?></td>
                                </tr>
                            <?php
                                    $x++;
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
            
					<?php echo $this->wysiwyg("text2Pengumuman");?>
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable({
                                "iDisplayLength": 25,
                                'responsive': true
                            });
							$('#munich').DataTable({
                                "iDisplayLength": 25,
                                'responsive': true
                            });
							$('#asia').DataTable({
                                "iDisplayLength": 25,
                                'responsive': true
                            });
			    $("#example_length.dataTables_length").remove();
				$("#munich_length.dataTables_length").remove();
				$("#asia_length.dataTables_length").remove();
                        } );
                    </script>

                    <p><?php echo $this->input('text-1')?></p>

                </div><!--/ .main-content -->

            </div><!--/ .col-xs-12 -->
            <div class="col-xs-12 col-md-4 pl0">

                <div class="sidebar">
                    <div class="sidebar-item">
                        <div class="sidebar-item--header mb16">
                            <h3>AJFC 2015</h3>
                        </div><!--/ .sidebar-item--header -->
                        <div class="sidebar-item--content">
                            <ul class="sidebar-nav">
                                <li><a href="/">Beranda</a></li>
                                <li><a href="/galeri-ajfc">Galeri</a></li>
                                <li><a href="/proses-seleksi">Proses Seleksi</a></li>
								<li><a href="/tanya-jawab">Tanya Jawab</a></li>
								<li><a href="/kebijakan-privasi">Kebijakan Privasi</a></li>
                                <li><a href="/pendaftaran">Pendaftaran</a></li>
								<li><a href="/daftar-peserta">Daftar Peserta</a></li>
								<li class="active"><a href="/pengumuman">Pengumuman</a></li>
                            </ul>
                        </div><!--/ .sidebar-item--content -->
                    </div><!--/ .sidebar-item -->

                </div><!--/ .sidebar -->

            </div><!--/ .col-xs-12 -->
        </div><!--/ .row -->
    </div><!--/ .container -->
</section>

</div><!--/ .page-wrapper-outer -->
<script>
    
</script>