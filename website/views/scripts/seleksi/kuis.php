<link rel="stylesheet" href="/website/static/css-ajfc/style.css"> 
<link rel="stylesheet" href="/website/static/mobilku/wizard-step.css" type="text/css" media="all" /> 
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css-ajfc/bootstrap.css"  />

<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->     
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/mobilku/data-table-1.10.4/media/css/jquery.dataTables.css" >
 
 
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<!--<script src="_assets/js/jquery.tools.min.js" type="text/javascript"></script>-->
<!--<script src="_assets/js/sticky-jquery.js" type="text/javascript"></script>-->
<!--<script src="/website/static/mobilku/jquery-1.10.2.js" type="text/javascript"></script>
<script src="/website/static/mobilku/bootstrap.min.js" type="text/javascript"></script>-->
  
    
<!--   plugins   -->

<script src="/website/static/mobilku/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="/website/static/mobilku/wizard.js"></script>
<script src="/website/static/mobilku/data-table-1.10.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
    
<script src="/website/static/mobilku/jquery.validate.min.js"></script>  
<!-- End of Header -->

<!--LOADING-->
<div class="loading-ajfc"><div class="loading-inner"><i class="fa fa-refresh fa-2x fa-spin"></i></div></div>
<!--END LOADING-->

<div class="container boxes-view">
    <div id="newsletter-allianz" class="full-w bg-white">
      
      <div class="description">
        
                 <!--      Wizard container        -->   
                <div class="wizard-container">
                   <!-- <form method="post" action="/save-kuis">
                        <input type="text" name="alt" />
                        <input type="submit" value="kirim" />
                    </form>-->
                  <form id="myform" method="post" enctype="multipart/form-data">
                    
                    <div class="card wizard-card ct-wizard-blue" id="wizard">

                    <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

                      <div class="wizard-header">
                                
                        </div>
                            <ul>
                                <li class="first"><a href="#tahap1" data-toggle="tab">Tahap 1</a></li>
                                <li class="second"><a href="#tahap2" data-toggle="tab">Tahap 2</a></li>
                                <li class="third"><a href="#tahap3" data-toggle="tab">Tahap 3</a></li>
                            </ul><br />
                            <img src="#" alt="banner-ajfc" class="banner-ajfc" />
                            <div class="tab-content">
                                
                                <div class="tab-pane" id="tahap1">
                                  
                                  <div class="form-title">FORM KELENGKAPAN DATA PESERTA AJFC 2015</div>

                                        <div class="container-fluid">
                                           <div class="row ta-left fc666">


                                              <div class="col-md-6">
                                                <!--Select image to upload:
                                                <input type="file" name="fileToUpload" id="fileToUpload">-->
                                                <?php foreach($this->peserta as $row){?>
                                                  <input type="hidden" name="idPeserta" value="<?php echo $row->getO_id()."-".$row->getIdPeserta(); ?>" />
                                                  <div class="form-group">
                                                      <label for="nama" name="nama">Nama Lengkap<span class="spanRed">*</span> (Sesuai akte kelahiran/Passport)</label>
                                                      <input type="text" readonly="readonly" class="form-control" id="nama" value="<?php echo $row->getNamaLengkap();?>" name="nama" placeholder="">
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="exampleInputName2" name="ttl">Tempat/ Tanggal Lahir<span class="spanRed">*</span> (Kota, DD/MM/YYYY)</label>
                                                      <div class="controls form-inline">
                                                        <input type="text" name="tmp" value="<?php echo $row->getTempatLahir();?>" class="form-control ttl" id="tmp-lahir" placeholder="">
                                                        <input type="text" name="tgl" readonly="readonly" value="<?php echo date("d / m / Y",strtotime($row->getTanggalLahir()));?>"class="form-control ttl" id="tgl-lahir" placeholder="DD/MM/YYYY">
                                                      </div>  
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="tgl-lahir">Jenis Kelamin<span class="spanRed">*</span></label>
                                                      <?php
                                                        if($row->getJenisKelamin() == "Laki-laki")
                                                        {
                                                            $checked1 = "checked='checked'";
                                                            $checked2 = "";
                                                        }
                                                        else{
                                                            $checked2 = "checked='checked'";
                                                            $checked1 = "";
                                                        }
                                                      ?>
                                                        <div class="form-group">
                                                            <label class="radio-inline">
                                                              <input <?php echo $checked1;?> type="radio" name="radio" id="laki-laki" value="Laki-laki" /> Laki-laki
                                                            </label>
                                                            <label class="radio-inline">
                                                              <input <?php echo $checked2;?> type="radio" name="radio" id="perempuan" value="Perempuan" /> Perempuan
                                                            </label> 
                                                        </div>  
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="tgl-lahir">Apakah kamu memiliki Passport<span class="spanRed">*</span></label>
                                                        <div class="message-info">
                                                            <div class="form-group">
                                                                    <label class="radio-inline">
                                                                      <input type="radio" name="pasport" id="ya" value="Ya"> Ya
                                                                    </label>
                                                                    <label class="radio-inline">
                                                                      <input type="radio" name="pasport" id="tidak" value="Tidak"> Tidak
                                                                    </label> 
                                                            </div>
                                                            <div class="info-error"></div>
                                                        </div>  
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="exampleInputName2">Email<span class="spanRed">*</span></label>
                                                      <input readonly="readonly" type="text" class="form-control" name="email" id="email" value="<?php echo $row->getEmail();?>" placeholder="">
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="exampleInputName2">Nomer Telepon / HP<span class="spanRed">*</span></label>
                                                      <div class="message-info">
                                                        <input value="<?php echo $row->getNoHp();?>" type="text" class="form-control" name="no-telp" id="no-tlp" placeholder="">
                                                        <div class="info-error"></div>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <label for="exampleInputName2">Kota / Propinsi<span class="spanRed">*</span></label><br />
                                                      <div class="message-info">
                                                        <select name="propinsi" class="form-control">
                                                            <option value="">Pilih Propinsi</option>
                                                            <option value="Nangroe Aceh Darussalam">Nangroe Aceh Darussalam</option>
                                                            <option value="Sumatera Utara">Sumatera Utara</option>
                                                            <option value="Sumatera Barat">Sumatera Barat</option>
                                                            <option value="Riau">Riau</option>
                                                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                                                            <option value="Jambi">Jambi</option>
                                                            <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                            <option value="Bangka Belitung">Bangka Belitung</option>
                                                            <option value="Bengkulu">Bengkulu</option>
                                                            <option value="Lampung">Lampung</option>
                                                            <option value="DKI Jakarta">DKI Jakarta</option>
                                                            <option value="Jawa Barat">Jawa Barat</option>
                                                            <option value="Banten">Banten</option>
                                                            <option value="Jawa Tengah">Jawa Tengah</option>
                                                            <option value="DI Yogyakarta">DI Yogyakarta</option>
                                                            <option value="Jawa Timur">Jawa Timur</option>
                                                            <option value="Bali">Bali</option>
                                                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                            <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                            <option value="Gorontalo">Gorontalo</option>
                                                            <option value="Maluku">Maluku</option>
                                                            <option value="Maluku Utara">Maluku Utara</option>
                                                            <option value="Papua Barat">Papua Barat</option>
                                                            <option value="Papua">Papua</option>
                                                        </select>
                                                        <div class="info-error"></div>
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="exampleInputName2">Alamat Tinggal<span class="spanRed">*</span></label>
                                                      <textarea class="form-control" name="alamat" id="alamat" rows="3" style="height:70px !important"></textarea>
                                                  </div>

                                                  <!--<div class="form-group">
                                                      <label for="exampleInputName2">Apa 1 hal terpenting bagi kamu dalam bermain bola?*</label>
                                                      <textarea class="form-control" rows="3" style="height:70px !important"></textarea>
                                                  </div>-->


                                                <?php } ?>
                                              </div>

                                              <div class="col-md-6 padleft40">
                                              
                                                <div class="form-group">
                                                    <label for="exampleInputName2">Nama Orang Tua/ Wali<span class="spanRed">*</span></label>
                                                    <input type="text" class="form-control" name="namaOrtu" id="nama-ortu" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2">No. Telepon Orang Tua/ Wali<span class="spanRed">*</span></label>
                                                    <input type="text" class="form-control" name="noHp" id="hp-ortu" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2">Email Orang Tua</label>
                                                    <input type="text" class="form-control" name="emailOrtu" id="email-ortu" placeholder="">
                                                </div>

                                                <div class="form-group">
                                                    <label for="exampleInputName2">Alamat Orang Tua<span class="spanRed">*</span></label>
                                                    <textarea class="form-control" rows="3" name="alamatOrtu" style="height:70px !important"></textarea>
                                                </div>

                                                <div class="form-group">
                                                      <label for="tgl-lahir">Pekerjaan Orang Tua<span class="spanRed">*</span></label>
														<div class="message-info">
															<div class="form-group">
															  <div class="form-group nomargin">
																<label class="radio-inline">
																  <input type="radio" name="pekerjaan" id="kary-swasta" value="Karyawan Swasta"> Karyawan Swasta
																</label>
															  </div>  
															  <div class="form-group nomargin">
																<label class="radio-inline">
																  <input type="radio" name="pekerjaan" id="pns" value="Pegawai Negeri"> Pegawai Negeri
																</label> 
															  </div>
															  <div class="form-group nomargin">  
																<label class="radio-inline">
																  <input type="radio" name="pekerjaan" id="wirausaha" value="Wirausaha"> Wirausaha
																</label> 
															  </div>
															  <div class="form-group nomargin">  
																<label class="radio-inline">
																  <input type="radio" name="pekerjaan" id="lainnya" value="Lainnya"> Lainnya

																  <div class="form-group">
																	<input type="text" class="form-control" name="pekerjaan-lain" id="txt-lainnya" placeholder="Pekerjaan Lain">
																  </div>  
																</label> 
															  </div>  
															</div> 
														</div>	
                                                  </div>

                                                  <div class="form-group">
                                                      <label for="tgl-lahir">Dari mana kamu mendapatkan informasi mengenai kamp ini?<span class="spanRed">*</span></label>
														<div class="checkbox-info">
															<div class="form-group">
															  <div class="form-group nomargin">
																<label class="checkbox-inline">
																  <input type="checkbox" name="info[]" id="reklame" value="Papan Reklame"> Papan Reklame
																</label>
															  </div>  
															  <div class="form-group nomargin">
																<label class="checkbox-inline">
																  <input type="checkbox" name="info[]" id="medsos" value="Media Sosial"> Media Sosial (Facebook, Twitter, dll)
																</label>
															  </div>
															  <div class="form-group nomargin">  
																<label class="checkbox-inline">
																  <input type="checkbox" name="info[]" id="web" value="Website Allianz"> Website Allianz
																</label>
															  </div>
															  <div class="form-group nomargin">  
															   <label class="checkbox-inline">
																  <input type="checkbox" name="info[]" id="kunjungan" value="Kunjungan Sekolah"> Kunjungan Sekolah/ SSB
																</label>
															  </div>  
															  <div class="form-group nomargin">  
															   <label class="checkbox-inline">
																  <input type="checkbox" name="info[]" id="ortu" value="Orang Tua"> Orang Tua/ Teman/ Saudara
																</label>
															  </div> 
															</div>
														</div>	
                                                  </div>

                                              </div>

                                              <div class="col-md-12 term">
												<div class="checkbox-info">
													<div class="form-group">  
														<!--Silahkan berikan tanda centang pada pernyataan dibawah ini <br />-->
														<label class="checkbox-inline" style="padding-top: 0px;">
															<input type="checkbox" id="checkbox-term" name="term">
															Saya setuju dengan ketentuan yang berlaku.
														</label>
														<span class="backClose" data-toggle="modal" data-target="#syarat">Baca syarat dan ketentuan.</span>
													</div>
                                                </div>       
                                                <!--<button class="unggah" name="signup" type="submit">UNGGAH</button>-->

                                              </div>

                                            

                                           </div>
                                        </div>

                                </div>
<!-- Modal -->
<div class="modal fade" id="syarat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Syarat dan Ketentuan</h4>
      </div>
      <div class="modal-body cus-body">
	<ol>
	    <li>Kamu berusia 14-16 tahun (tanggal lahir pada 25 Agustus 1999 s/d 1 September 2001, kamu harus sudah berusia 14 tahun atau masih berusia 16 tahun pada tanggal 25 Agustus 2015)</li>
	    <li>Sehat jasmani (tidak mengidap penyakit pernapasan, penyakit atau cacat bawaan, penyakit menular dan segala kondisi yang mempengaruhi kondisi fisik untuk berolahraga)</li>
	    <li>Memiliki akun email, facebook dan/atau twitter aktif</li>
	    <li>Menyediakan informasi mengenai orangtua berupa nomor telepon dan email sebagai persetujuan dari orangtua untuk mengikuti program ini</li>
	    <li>Bagi kamu yang menjadi pemenang Asia Camp dan Munich Camp, diwajibkan untuk membuat paspor sebelum Asia dan Munich Camp diselenggarakan</li>
	    <li>Data yang dikirimkan sepenuhnya milik Allianz dan digunakan untuk kepentingan Allianz</li>
	    <li>Data dan foto yang sudah kamu unggah akan diikutsertakan dalam lomba foto dan seleksi mengikuti Allianz Junior Football Camp 2015.</li>
	    <li>Jika data yang diberikan tidak sesuai, maka pihak Allianz berhak mendiskualifikasi peserta tersebut. </li>
	    <li>7 Remaja akan mengikuti Asia Camp, dan 3 Remaja diantaranya akan berkesempatan untuk mengunjungi Allianz Arena dan berlatih bersama pelatih remaja FC Bayern Munchen.</li>	    
	    <li>Dan masih banyak hadiah menarik lainnya berupa souvenir FC Bayern Munchen yang dapat kamu menangkan.</li>
	</ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-fill btn-warning btn-wd btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                                <div class="tab-pane" id="tahap2">
                                    
                                   <div class="form-title">FORM KELENGKAPAN DATA PESERTA AJFC 2015</div>

                                        <div class="container-fluid">
                                           <div class="row ta-left fc666">

                                              <div class="col-md-6">
                                                
                                                  <div class="form-group">
                                                      <label for="1terpenting">Apa 1 hal terpenting bagi kamu dalam bermain bola?*</label>
                                                      <textarea class="form-control" rows="3" name="halTerpenting" required="required" style="height:100px !important"></textarea>
                                                  </div>
													
												<div class="form-group">
													<label for="pilih">Pilih Foto</label>
													<div class="pilih">
														<div class="input-group">
															<span class="input-group-btn">
																<span class="btn btn-primary btn-file btn-choose">
																	Pilih <input type="file" name="uploadFoto" class="image_peserta" />
																</span>
															</span>
															<input type="text" class="form-control choose" readonly>
														</div>
													</div>
                                                                                                        <br />
                                                                                                        <div class="image_peserta_preview"></div>
												</div>
												
												<div class="form-group">
													<label for="pilih">Like Facebook Fanpage</label>
													<div class="fb-like">
														<img src="/website/static/images/ajfc/fb-like.png" />
													</div>
													<div class="fb-link">
														<a href="https://www.facebook.com/AJFCIndonesia">AJFC Indonesia</a>
													</div>
												</div>

                                              </div>

                                           </div>
                                        </div>
								   
                                </div>

                                <div class="tab-pane" id="tahap3">
                                   
                                   <div class="stepwizard">
                                          <div class="stepwizard-row setup-panel">
                                                <?php
                                                      $soal = new Object_Quiz_List();
                                                      $number = 1;
                                                      foreach($soal as $row)
                                                      {
                                                        if($number == 1)
                                                        {
                                                            $disable = '';
                                                            $class = 'class="btn btn-primary btn-circle"';
                                                        }
                                                        else{
                                                            $disable = 'disabled="disabled"';
                                                            $class = 'class="btn btn-default btn-circle"';
                                                        }
                                                ?>
                                                                <div class="stepwizard-step">
                                                                    <a href="#step-<?php echo $number;?>" type="button" <?php echo $class."  ".$disable;?> ><?php echo $number;?></a>
                                                                </div>
                                                <?php		$number++;
                                                        }
                                                ?>
                                          </div>
                                      </div>
                                      <form role="form">
                                        <?php
                                                $soal = new Object_Quiz_List();
                                                $number = 1;
                                                foreach($soal as $row)
                                                {
                                                        $sum_choice = count($row->answer->items);
                                        ?>
                                            <div class="row setup-content" id="step-<?php echo $number;?>">
                                                <div class="col-xs-12">
                                                    <div class="col-md-12">
                                                        
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="form-group gap ta-left">
                                                                    <label for="tgl-lahir"><?php echo $number.". ".$row->getQuestion();?></label>
  
                                                                      <div class="form-group">
                                                                            <?php for($x = 0; $x < $sum_choice; $x++){?>
                                                                                <div class="radio">
                                                                                    <label>
                                                                                      <input type="radio" id="no1a" name="soal<?php echo $number;?>" value="<?php echo $row->answer->items[$x]->index; ?>">
                                                                                          <?php echo $row->answer->items[$x]->getIsi_jawaban();?>
                                                                                    </label>
                                                                                </div>
                                                                            <?php }?>
                                                                          
                                                                      </div>  
                                                                </div>
                                                            </div>  
  
                                                            <!-- <label class="control-label">1</label>
                                                            <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  /> -->
                                                        </div>
                                                        <?php if($number != count($soal)){?>
                                                            <button class="nextBtn next-question pull-left" type="button" >Selanjutnya</button>
                                                        <?php }?>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <?php		$number++;
                                                }
                                        ?>
                                          <!--<div class="row setup-content" id="step-4">
                                              <div class="col-xs-12">
                                                  <div class="col-md-12">
                                                      
                                                      <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
                                                  </div>
                                              </div>
                                          </div>-->
                                      </form>

                                </div>

                            
                            </div>
                            <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Lanjut' />
                                        <?php //if(($number-1) == count($soal)){?>
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm hide' name='finish' value='Finish' />
                                        <?php //}?>

                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-warning btn-wd btn-sm' name='previous' value='Kembali' />
                                    </div>
                                    <div class="clearfix"></div>
                            </div>  
                    </div>
                </form> <!--form ajfc-->
                </div> <!-- wizard container -->
                
      </div>
      
    </div>
    <!-- newsletter-allianz end -->
</div>
      
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  
<script type="text/javascript">

$(document).ready(function() {
//$('#myModal').modal();
    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();
    
    function readImage(file) {

        var reader = new FileReader();
        var image  = new Image();
    
        reader.readAsDataURL(file);  
        reader.onload = function(_file) {
            image.src    = _file.target.result;              // url.createObjectURL(file);
            image.onload = function() {
                var w = this.width,
                    h = this.height,
                    t = file.type,                           // ext only: // file.type.split('/')[1],
                    n = file.name,
                    s = ~~(file.size/1024) +'KB';
                $('.image_peserta_preview').append('<img src="'+ this.src +'" alt="'+n+'"> '+w+'x'+h+' '+s+' '+t+' '+n+'<br>');
            };
            image.onerror= function() {
                alert('Invalid file type: '+ file.type);
            };      
        };
    
    }
    $(".image_peserta").change(function (e) {
        if(this.disabled) return alert('File upload not supported!');
        var F = this.files;
        if(F && F[0]) for(var i=0; i<F.length; i++) readImage( F[i] );
    });
    
    $(".btn-next").on("click",function(){
        $.ajax({
            url: '/save-kuis',
            type: 'post',
            dataType: 'json',
            data: $('form').serialize(),
            success: function(data) {
                alert("success");
            }
        });
    });
    
    $(".btn-previous").on( "click", function() {
        $('html, body').animate({
            scrollTop: $(".first").offset().top
        }, 500);
    });
    $(".btn-next").on( "click", function() {
        $('html, body').animate({
            scrollTop: $(".first").offset().top
        }, 500);
    });
    //console.log(image[0]);
    //console.log((shuffle(image))[0]);
    //console.log(shuffle([0, 1, 2, 3, 4, 5, 6, 7, 8, 9]));
    function shuffle(o){ //v1.0
        for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
        return o;
    };
    
    $(".next-question").click(function(){
        <?php
            $items = new Asset_List();
            $items->setOrderKey("RAND()", false);
            $items->setCondition("path = '/ajfc/galeri-kuis-910x357/'");
            //$items->setLimit(5);
            
            $x = 1;
            foreach($items as $row)
            {
                $img[] = $row->getPath().$row->getFilename();
                $x++;
            }
            $tmp = json_encode($img);
            $jmlImage = rand(0,(count($items))-1);
        ?>
        var image = <?php echo $tmp;?>;
        
        var shuffleImage = shuffle(image);
        var indexImage = <?php echo $jmlImage;?>;
        //console.log(indexImage[0]);
        //console.log(shuffleImage);
        var no = parseInt($(".stepwizard-step").find(".btn-circle.btn-primary").text())+1;
        if (no == <?php echo count($soal);?>) {
            $(".btn-finish").removeClass("hide");
        }
        else{
            $(".btn-finish").addClass("hide");
        }
        if((no%2) == 1){
            $(".banner-ajfc").fadeOut("slow");
            $(".banner-ajfc").attr("src",shuffleImage[indexImage]);
            $(".banner-ajfc").fadeIn("slow");
        }
    });
    
    $(".btn-circle").click(function(){
        var no = $(this).text();
        if (no == <?php echo count($soal);?>) {
            $(".btn-finish").removeClass("hide");
        }
        else{
            $(".btn-finish").addClass("hide");
        }
        <?php
            $items = new Asset_List();
            $items->setOrderKey("RAND()", false);
            $items->setCondition("path = '/ajfc/galeri-kuis-910x357/'");
            //$items->setLimit(5);
            
            $x = 1;
            foreach($items as $row)
            {
                $img[] = $row->getPath().$row->getFilename();
                $x++;
            }
            $tmp = json_encode($img);
            $jmlImage = rand(0,(count($items))-1);
        ?>
        var image = <?php echo $tmp;?>;
        
        var shuffleImage = shuffle(image);
        var indexImage = <?php echo $jmlImage;?>;
        if((no%2) == 1){
            $(".banner-ajfc").fadeOut("slow");
            $(".banner-ajfc").attr("src",shuffleImage[indexImage]);
            $(".banner-ajfc").fadeIn("slow");
        }
    });

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='radio']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});

</script> 

<script>

$(document).on('change', '.btn-file :file', function() {
  var input = $(this),
      numFiles = input.get(0).files ? input.get(0).files.length : 1,
      label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [numFiles, label]);
});

$(document).ready( function() {
    $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
        
    });
});

</script>

<script>
$(function() {
    $("#myform").validate(
      {
        rules: 
        {
            pasport: 
            {
                  required: true
            },	
          alamat: 
          {
            required: true
          },
          'no-telp': 
          {
            required: true
          },
          namaOrtu: 
          {
            required: true
          },
          propinsi: 
          {
            required: true
          },
          noHp: 
          {
            required: true,
			number: true
          },
		   emailOrtu: 
          {
                        //required: true,
			email: true
          },
		   alamatOrtu: 
          {
            required: true
          },
			halTerpenting:
		  {
			required: true
		  },
			uploadFoto:
		  {
			required: true
		  },
			pekerjaan:
		  {
			required: true
		  },
			'info[]':
		  { 
			required:true
		  },
		  term:
		  { 
			required:true
		  }
		},	
        messages: 
        {
		  pasport: 
          {
            required: "Mohon pilih apakah anda memiliki passport?"
          },	
          alamat: 
          {
            required: "Mohon masukan alamat Anda"
          },
          'no-telp': 
          {
            required: "Mohon masukan no telepon Anda"
          },
          namaOrtu: 
          {
            required: "Mohon masukan nama Orang tua Anda"
          },
          noHp: 
          {
            required: "Mohon masukan nomor telepon Anda"
          },
          propinsi: 
          {
            required: "Mohon pilih propinsi"
          },
		   emailOrtu: 
          {
            email: "Mohon masukan email Orang tua yang benar"
          },
		    alamatOrtu: 
          {
            required: "Mohon masukan alamat Orangtua"
          },
			halTerpenting: 
		  {
			required: "Mohon masukan hal yang terpenting dalam bermain bola"
		  },
			uploadFoto:
		  {
			required: "Mohon pilih foto"
		  },
			pekerjaan:
		  {
			required: "Mohon pilih pekerjaan"
		  },
		  'info[]':
          {
            required: "Mohon pilih informasi"
          },
			term:
		  {
			required: "Mohon centang persetujuan yang berlaku"		
		  }
        },
		errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.message-info') );
            }
            else if ( element.is(":checkbox") )
			{
				error.appendTo ( element.parents('.checkbox-info') );
			}
			else if ( element.is(":file") )
			{
				error.appendTo ( element.parents('.pilih') );
			}
			else
            { // This is the default behavior 
                error.insertAfter( element );
            }
         }
		 
      });	
});
</script> 


