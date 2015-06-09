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

                    <table id="munich" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr>
									<td>1</td>
									<td>Adhika Ezra</td>
                                </tr>
								<tr>
									<td>2</td>
									<td>Hasya Hanifan Indra Putra</td>
                                </tr>
                        </tbody>
                    </table>
					
					<div class="main-content--header">
						<?php echo $this->wysiwyg("textPengumumanAsiaCamp");?>
                    </div><!--/ .main-content--header -->
					<br /><br />

                    <table id="asia" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr>
									<td>1</td>
									<td>Azlan Dwi</td>
                                </tr>
								<tr>
									<td>2</td>
									<td>Dicky Alvin</td>
                                </tr>
								<tr>
									<td>3</td>
									<td>Mikhail Siholnaune</td>
                                </tr>
								<tr>
									<td>4</td>
									<td>Rakha Valensky</td>
                                </tr>
								<tr>
									<td>5</td>
									<td>Rihanazka Syahputra</td>
                                </tr>
								<tr>
									<td>6</td>
									<td>Yoga Yuhelpin</td>
                                </tr>
                        </tbody>
                    </table>
					
					<div class="main-content--header">
						<?php echo $this->wysiwyg("textPengumuman");?>
                    </div><!--/ .main-content--header -->
					<br /><br />

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

