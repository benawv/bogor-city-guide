   
<link rel="stylesheet" href="/website/static/css-mobil/wizard-step.css" type="text/css" media="all" /> 

<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css-mobil/bootstrap.min.css"  />
<link rel="stylesheet" type="text/css" media="screen" id="normalize-css" href="/website/static/css/normalize.css">
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/screen.css">
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/flexslider.css">-->
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/main.css">
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="_assets/css/tabs-accordion.css">-->
<!--<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css/product.css">-->     
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css-mobil/data-table-1.10.4/media/css/jquery.dataTables.css" >
<link rel="stylesheet" type="text/css" media="screen" id="screen-css" href="/website/static/css-mobil/jquery-ui.css" >	
  
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>

		
<!--   plugins 	 -->

<script src="/website/static/css-mobil/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="/website/static/css-mobil/wizard.js"></script>
<script src="/website/static/css-mobil/data-table-1.10.4/media/js/jquery.dataTables.js" type="text/javascript"></script>
    
<script src="/website/static/css-mobil/jquery.validate.min.js"></script>       
<script src="/website/static/css-mobil/jquery-ui.js"></script>

<!-- End of Header -->


		<div id="newsletter-allianz" class="full-w bg-white">
			
			<div class="description">
				
                 <!--      Wizard container        -->   
                <div class="wizard-container"> 
                  <form id="myform" method="get" action="" class="">
                    <div class="card wizard-card ct-wizard-blue" id="wizard">

                    <!--        You can switch "ct-wizard-orange"  with one of the next bright colors: "ct-wizard-blue", "ct-wizard-green", "ct-wizard-orange", "ct-wizard-red"             -->

                    	<div class="wizard-header">
                                
                        </div>
                            <ul>
                                <li class="first"><a href="#data-mobil" data-toggle="tab">1. Data Mobil</a></li>
                                <li class="second"><a href="#jenis-asuransi" data-toggle="tab">2. Jenis Asuransi</a></li>
                                <li class="third"><a href="#hasil-kalkulasi" data-toggle="tab">3. Hasil Kalkulasi</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane" id="data-mobil">
                                  <div class="row">
                                      
                                      <div class="col-sm-12">
                                          
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input1">Tahun Pembuatan</label>
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <select id="tahun_pembuatan" class="form-control">
								<?php
								$year=date("Y",strtotime("-10 year"));								
								for($i=date("Y"); $i>=$year; $i--){
									echo "<option value='$i'>$i</option>";	
								}?>
                                                          
                                                        </select>
                                                      </div>
                                                      
                                                  </div>
                                              </div>  
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input2">Harga Mobil</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <input type="text" name="harga" class="form-control required" id="harga" placeholder="" value="">
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <span id="tooltips2" class="tooltips">*Mohon masukan harga pasar saat ini</span>
                                                      </div>
                                                  </div>
                                              </div>   
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input3">Merk Mobil</label>
                                                      </div> 
                                                      <div class="col-sm-4">
							
                                                        <select id="merk" class="form-control">
							
                                                        <option value="">Silahkan pilih</option>
							<?php
							$merk = new Object_MobilBrandName_List();
							foreach($merk as $items){
								echo ucfirst($items->branname);
								echo "<option value='".$items->o_id."'>".ucwords($items->branname)."</option>";
							}	
							?>
                                                         
                                                        </select>
                                                      </div>
                                                  </div>
                                              </div>  
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input4">Model Mobil</label>
                                                      </div>
						       
                                                      <div class="col-sm-4" >
                                                        <select id="model" class="form-control model-form">
                                                          <option value="">Silahkan pilih</option>    
                                                        </select>
                                                      </div>
                                                  </div>
						</div>
					        <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input2">Registration No</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <input type="text" name="regno" class="form-control required" id="regno" placeholder="B123XXX">
                                                      </div>
                                                      <div class="col-sm-4">
                                                        <span id="tooltips2" class="tooltips">*No kendaraan</span>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input5">Tipe Mobil</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <div class="left-inner-addon">
                                                            <i class="flaticon-black187"></i>
                                                            <input type="text" name="tipe" class="form-control" id="tipe" placeholder="" value="" disabled=disabled />
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>  
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input5">Wilayah</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <div class="left-inner-addon">
                                                            <i class="flaticon-facebook30"></i>
                                                            <input type="text" name="wilayah" class="form-control" id="wilayah" placeholder="" value="" disabled=disabled/>
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>  
                                              <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input6">Kapasitas Penumpang</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <div class="left-inner-addon">
                                                            <i class="flaticon-harddisc"></i>
                                                            <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="" value="" disabled=disabled  />
                                                        </div>
                                                      </div>
                                                  </div>
                                              </div>  
                                              
                                      </div>
                                      
                                  </div>
                                </div>
                                <div class="tab-pane" id="jenis-asuransi">
                                    
                                    <div class="row">
                                        
                                        <div class="col-sm-12">
                                            
                                                <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input1">Periode Asuransi</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <input type="text" name="periode" class="form-control" id="periode" placeholder="">
                                                      </div>
                                                  </div>
                                               </div>
                                              
                                                <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="input2">Jenis Asuransi</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <div class="form-inline">
                                                          
                                                            <div class="radio-icon">
                                                                <input type="radio" id="radio01" name="radio" checked="checked" value="comprehensive" />
                                                                <label for="radio01">
                                                                    <span><p>Komprehensif</p>
                                                                    <img class="car-icon" src="/website/static/css-mobil/icon/car1.png" />
                                                                    </span>
                                                                    
                                                                </label>
                                                                
                                                            </div>
                                                            <div class="radio-icon">
                                                                <input type="radio" id="radio02" name="radio" value="tlo"/>
                                                                <label for="radio02">
                                                                    <span><p>Total Loss Only</p>
                                                                    <img class="car-icon" src="/website/static/css-mobil/icon/car31.png" />
                                                                    </span>
                                                                    
                                                                </label>
                                                            </div>
                                                        </div>    
                                                      </div>
                                                  </div>
                                                </div>    
                                              
                                                <div class="row">
                                                  <div class="form-group">
                                                      <div class="col-sm-3">
                                                        <label for="inputEmail">Email Anda</label>
                                                      </div> 
                                                      <div class="col-sm-4">
                                                        <input type="email" name="email" class="form-control required" id="email" placeholder="">
                                                      </div>
                                                  </div>
                                            </div>    
                                               
                                      </div>
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="hasil-kalkulasi">
                                    <div class="row">
                                        
                                      <div class="col-sm-12">
                                          
                                            <div class="paket">Paket</div>
                                            
                                            <div class="tabwrap">

                                                        <div class="menutab_dekstop">
                                                            <ul>
                                                                <li><a id="open_tab_1_1" class="active" href="javascript:void(0);">Mobilku Basic</a></li>
                                                                <li><a id="open_tab_1_2" href="javascript:void(0);">Mobilku Standar</a></li>
                                                                <li><a id="open_tab_1_3" href="javascript:void(0);">Mobilku Premier</a></li>
                                                                
                                                            </ul>
                                                        </div>

                                                        <div class="tabcontent" id="tabcontent_2">
                                                            <ul>
                                                                <li>
                                                                    <a id="open_tab_1_1_m" class="menumobile active" href="javascript:void(0);">Example</a>
                                                                    <div id="tabcontent_1_1" class="content_show showme show_1">
                                                                    
                                                                        <div class="tabScroll">
                                                                        <table id="myTable" class="display" cellspacing="0" width="100%">
                                                                            <thead> 
                                                                            <tr>  
                                                                                <th class="">Liputan</th> 
                                                                                <th class="">Insured Value</th> 
                                                                                <th class="">Rate</th> 
                                                                                <th class="">Premium</th>
                                                                                
                                                                            </tr> 
                                                                            </thead> 
                                                                            <tbody> 
                                                                            <tr> 
                                                                                <td>Comprehensive</td> 
                                                                                <td class='compre_val'>-</td> 
                                                                                <td class='compre_persen'>-</td> 
                                                                                <td class='compre_prem'>-</td>
                                                                                
                                                                            </tr>     
                                                                            <tr> 
                                                                                <td>TPL</td> 
                                                                                <td class='tpl_val'>-</td> 
                                                                                <td class='tpl_persen'>-</td> 
                                                                                <td class='tpl_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Medical Expense</td> 
                                                                                <td class='med_ex_val'>-</td> 
                                                                                <td class='med_ex_persen'>-</td> 
                                                                                <td class='med_ex_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PLL</td> 
                                                                                <td class='pll_val'>-</td> 
                                                                                <td class='pll_persen'>-</td> 
                                                                                <td class='pll_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Personal Effect</td> 
                                                                                <td class='personal_ef_val'>-</td> 
                                                                                <td class='personal_ef_persen'>-</td> 
                                                                                <td class='personal_ef_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Flood</td> 
                                                                                <td class='flood_val'>-</td> 
                                                                                <td class='flood_persen'>-</td> 
                                                                                <td class='flood_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Earthquake</td> 
                                                                                <td class='earthquake_val'>-</td> 
                                                                                <td class='earthquake_presen'>-</td> 
                                                                                <td class='earthquake_prem'>-</td>  
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Strike, Riot, and Civil Commotion</td> 
                                                                                <td class='riot_val'>-</td> 
                                                                                <td class='riot_persen'>-</td> 
                                                                                <td class='earthquake_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Terrorist and Sabotage</td> 
                                                                                <td class='terror_val'>-</td> 
                                                                                <td class='terror_persen'>-</td> 
                                                                                <td class='terror_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Passenger</td> 
                                                                                <td class='passenger_val'>-</td> 
                                                                                <td class='passenger_persen'>-</td> 
                                                                                <td class='passenger_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Driver</td> 
                                                                                <td class='pa_val'>-</td> 
                                                                                <td class='pa_persen'>-</td> 
                                                                                <td class='pa_prem'>-</td>
                                                                                
                                                                            </tr>      
                                                                             <tr> 
                                                                                <td>ERA</td> 
                                                                                <td class='era_val'>-</td> 
                                                                                <td class='pa_persen'>-</td> 
                                                                                <td class='pa_prem'>-</td>
                                                                                
                                                                            </tr> 
                                                                             <tr> 
                                                                                <td>Authorized Workshop</td> 
                                                                                <td class='workshop_val'>-</td>
                                                                                <td class='workshop_persen'>-</td> 
                                                                                <td class='workshop_prem'>-</td>
                                                                                
                                                                            </tr> 
                                                                             
                                                                            </tbody>

                                                                        </table>
                                                                            
                                                                        <div class="total_premium_p_standar">
                                                                            
                                                                            <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                            
                                                                        </div>     
                                                                           
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a id="open_tab_1_2_m" class="menumobile" href="javascript:void(0);">Example</a>
                                                                    <div id="tabcontent_1_2" class="content_show show_1">
                                                                        
                                                                        <div class="tabScroll">
                                                                        <table id="myTable" class="display" cellspacing="0" width="100%">
                                                                            <thead> 
                                                                            <tr>  
                                                                                <th class="">Liputan</th> 
                                                                                <th class="">Insured Value</th> 
                                                                                <th class="">Rate</th> 
                                                                                <th class="">Premium</th>
                                                                                
                                                                            </tr> 
                                                                            </thead> 
                                                                            <tbody> 
                                                                            <tr> 
                                                                                <td>Comprehensive</td> 
                                                                                <td class='compre_val2'>-</td> 
                                                                                <td class='compre_persen2'>-</td> 
                                                                                <td class='compre_prem2'>-</td>
                                                                                
                                                                            </tr>     
                                                                            <tr> 
                                                                                <td>TPL</td> 
                                                                                <td class='tpl_val2'>-</td> 
                                                                                <td class='tpl_persen2'>-</td> 
                                                                                <td class='tpl_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Medical Expense</td> 
                                                                                <td class='med_ex_val2'>-</td> 
                                                                                <td class='med_ex_persen2'>-</td> 
                                                                                <td class='med_ex_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PLL</td> 
                                                                                <td class='pll_val2'>-</td> 
                                                                                <td class='pll_persen2'>-</td> 
                                                                                <td class='pll_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Personal Effect</td> 
                                                                                <td class='personal_ef_val2'>-</td> 
                                                                                <td class='personal_ef_persen2'>-</td> 
                                                                                <td class='personal_ef_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Flood</td> 
                                                                                <td class='flood_val2'>-</td> 
                                                                                <td class='flood_persen2'>-</td> 
                                                                                <td class='flood_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Earthquake</td> 
                                                                                <td class='earthquake_val2'>-</td> 
                                                                                <td class='earthquake_presen2'>-</td> 
                                                                                <td class='earthquake_prem2'>-</td>  
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Strike, Riot, and Civil Commotion</td> 
                                                                                <td class='riot_val2'>-</td> 
                                                                                <td class='riot_persen2'>-</td> 
                                                                                <td class='earthquake_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Terrorist and Sabotage</td> 
                                                                                <td class='terror_val2'>-</td> 
                                                                                <td class='terror_persen2'>-</td> 
                                                                                <td class='terror_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Passenger</td> 
                                                                                <td class='passenger_val2'>-</td> 
                                                                                <td class='passenger_persen2'>-</td> 
                                                                                <td class='passenger_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Driver</td> 
                                                                                <td class='pa_val2'>-</td> 
                                                                                <td class='pa_persen2'>-</td> 
                                                                                <td class='pa_prem2'>-</td>
                                                                                
                                                                            </tr>      
                                                                             <tr> 
                                                                                <td>ERA</td> 
                                                                                <td class='era_val2'>-</td> 
                                                                                <td class='pa_persen2'>-</td> 
                                                                                <td class='pa_prem2'>-</td>
                                                                                
                                                                            </tr> 
                                                                             <tr> 
                                                                                <td>Authorized Workshop</td> 
                                                                                <td class='workshop_val2'>-</td>
                                                                                <td class='workshop_persen2'>-</td> 
                                                                                <td class='workshop_prem2'>-</td>
                                                                                
                                                                            </tr> 
                                                                             
                                                                            </tbody>

                                                                        </table>
                                                                            
                                                                        <div class="total_premium_p_standar2">
                                                                            
                                                                            <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                            
                                                                        </div>     
                                                                        
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a id="open_tab_1_3_m" class="menumobile" href="javascript:void(0);">Example</a>
                                                                    <div id="tabcontent_1_3" class="content_show show_1">
                                                                        
                                                                        <div class="tabScroll">
                                                                        <table id="myTable" class="display" cellspacing="0" width="100%">
                                                                            <thead> 
                                                                            <tr>  
                                                                                <th class="">Liputan</th> 
                                                                                <th class="">Insured Value</th> 
                                                                                <th class="">Rate</th> 
                                                                                <th class="">Premium</th>
                                                                                
                                                                            </tr> 
                                                                            </thead> 
                                                                            <tbody> 
                                                                            <tr> 
                                                                                <td>Comprehensive</td> 
                                                                                <td class='compre_val3'>-</td> 
                                                                                <td class='compre_persen3'>-</td> 
                                                                                <td class='compre_prem3'>-</td>
                                                                                
                                                                            </tr>     
                                                                            <tr> 
                                                                                <td>TPL</td> 
                                                                                <td class='tpl_val3'>-</td> 
                                                                                <td class='tpl_persen3'>-</td> 
                                                                                <td class='tpl_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Medical Expense</td> 
                                                                                <td class='med_ex_val3'>-</td> 
                                                                                <td class='med_ex_persen3'>-</td> 
                                                                                <td class='med_ex_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PLL</td> 
                                                                                <td class='pll_val3'>-</td> 
                                                                                <td class='pll_persen3'>-</td> 
                                                                                <td class='pll_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Personal Effect</td> 
                                                                                <td class='personal_ef_val3'>-</td> 
                                                                                <td class='personal_ef_persen3'>-</td> 
                                                                                <td class='personal_ef_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Flood</td> 
                                                                                <td class='flood_val3'>-</td> 
                                                                                <td class='flood_persen3'>-</td> 
                                                                                <td class='flood_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Earthquake</td> 
                                                                                <td class='earthquake_val3'>-</td> 
                                                                                <td class='earthquake_presen3'>-</td> 
                                                                                <td class='earthquake_prem3'>-</td>  
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Strike, Riot, and Civil Commotion</td> 
                                                                                <td class='riot_val3'>-</td> 
                                                                                <td class='riot_persen3'>-</td> 
                                                                                <td class='earthquake_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Terrorist and Sabotage</td> 
                                                                                <td class='terror_val3'>-</td> 
                                                                                <td class='terror_persen3'>-</td> 
                                                                                <td class='terror_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Passenger</td> 
                                                                                <td class='passenger_val3'>-</td> 
                                                                                <td class='passenger_persen3'>-</td> 
                                                                                <td class='passenger_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Driver</td> 
                                                                                <td class='pa_val3'>-</td> 
                                                                                <td class='pa_persen3'>-</td> 
                                                                                <td class='pa_prem3'>-</td>
                                                                                
                                                                            </tr>      
                                                                             <tr> 
                                                                                <td>ERA</td> 
                                                                                <td class='era_val3'>-</td> 
                                                                                <td class='pa_persen3'>-</td> 
                                                                                <td class='pa_prem3'>-</td>
                                                                                
                                                                            </tr> 
                                                                             <tr> 
                                                                                <td>Authorized Workshop</td> 
                                                                                <td class='workshop_val3'>-</td>
                                                                                <td class='workshop_persen3'>-</td> 
                                                                                <td class='workshop_prem3'>-</td>
                                                                                
                                                                            </tr> 
                                                                             
                                                                            </tbody>

                                                                        </table>
                                                                            
                                                                        <div class="total_premium_p_standar3">
                                                                            
                                                                            <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                            
                                                                        </div>     
                                                                        </div>     
                                                                        
                                                                    </div>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <!-- tabwrap end -->
                                          
                                      </div>
                                        
                                    </div>
                                    
                                    <div class="row">
                                        
                                      <div class="col-sm-12">
                                          
                                            <div class="paket">Non - Paket</div>
                                            
                                            <div class="tabwrap">

                                                        <div class="menutab_dekstop">
                                                            <ul>
                                                                <li><a id="open_tab_2_1" class="active" href="javascript:void(0);">Mobilku Basic</a></li>
                                                                <li><a id="open_tab_2_2" href="javascript:void(0);">Mobilku Standar</a></li>
                                                                <li><a id="open_tab_2_3" href="javascript:void(0);">Mobilku Premier</a></li>
                                                                
                                                            </ul>
                                                        </div>

                                                        <div class="tabcontent" id="tabcontent_2">
                                                            <ul>
                                                                <li>
                                                                    <a id="open_tab_2_1_m" class="menumobile active" href="javascript:void(0);">Example</a>
                                                                    <div id="tabcontent_2_1" class="content_show showme show_2">
                                                                    
                                                                        <div class="tabScroll">
                                                                        <table id="myTable2" class="display" cellspacing="0" width="100%">
                                                                            <thead> 
                                                                            <tr>  
                                                                                <th class="">Liputan</th> 
                                                                                <th class="">Insured Value</th> 
                                                                                <th class="">Rate</th> 
                                                                                <th class="">Premium</th>
                                                                                
                                                                            </tr> 
                                                                            </thead> 
                                                                            <tbody> 
                                                                            <tr> 
                                                                                <td>Comprehensive</td> 
                                                                                <td class='no_compre_val'>-</td> 
                                                                                <td class='no_compre_persen'>-</td> 
                                                                                <td class='no_compre_prem'>-</td>
                                                                                
                                                                            </tr>     
                                                                            <tr> 
                                                                                <td>TPL</td> 
                                                                                <td class='no_tpl_val'>-</td> 
                                                                                <td class='no_tpl_persen'>-</td> 
                                                                                <td class='no_tpl_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Medical Expense</td> 
                                                                                <td class='no_med_ex_val'>-</td> 
                                                                                <td class='no_med_ex_persen'>-</td> 
                                                                                <td class='no_med_ex_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PLL</td> 
                                                                                <td class='no_pll_val'>-</td> 
                                                                                <td class='no_pll_persen'>-</td> 
                                                                                <td class='no_pll_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Personal Effect</td> 
                                                                                <td class='no_personal_ef_val'>-</td> 
                                                                                <td class='no_personal_ef_persen'>-</td> 
                                                                                <td class='no_personal_ef_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Flood</td> 
                                                                                <td class='no_flood_val'>-</td> 
                                                                                <td class='no_flood_persen'>-</td> 
                                                                                <td class='no_flood_prem'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Earthquake</td> 
                                                                                <td class='no_earthquake_val'>-</td> 
                                                                                <td class='no_earthquake_presen'>-</td> 
                                                                                <td class='no_earthquake_prem'>-</td>  
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Strike, Riot, and Civil Commotion</td> 
                                                                                <td class='no_riot_val'>-</td> 
                                                                                <td class='no_riot_persen'>-</td> 
                                                                                <td class='no_earthquake_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Terrorist and Sabotage</td> 
                                                                                <td class='no_terror_val'>-</td> 
                                                                                <td class='no_terror_persen'>-</td> 
                                                                                <td class='no_terror_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Passenger</td> 
                                                                                <td class='no_passenger_val'>-</td> 
                                                                                <td class='no_passenger_persen'>-</td> 
                                                                                <td class='no_passenger_prem'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Driver</td> 
                                                                                <td class='no_pa_val'>-</td> 
                                                                                <td class='no_pa_persen'>-</td> 
                                                                                <td class='no_pa_prem'>-</td>
                                                                                
                                                                            </tr>      
                                                                             <tr> 
                                                                                <td>ERA</td> 
                                                                                <td class='no_era_val'>-</td> 
                                                                                <td class='no_pa_persen'>-</td> 
                                                                                <td class='no_pa_prem'>-</td>
                                                                                
                                                                            </tr> 
                                                                             <tr> 
                                                                                <td>Authorized Workshop</td> 
                                                                                <td class='no_workshop_val'>-</td>
                                                                                <td class='no_workshop_persen'>-</td> 
                                                                                <td class='no_workshop_prem'>-</td>
                                                                                
                                                                            </tr> 
                                                                             
                                                                            </tbody>

                                                                        </table>
                                                                            
                                                                        <div class="no_total_premium_p_standar">
                                                                            
                                                                            <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                            
                                                                        </div>     
                                                                           
                                                                        </div>

                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a id="open_tab_2_2_m" class="menumobile" href="javascript:void(0);">Example</a>
                                                                    <div id="tabcontent_2_2" class="content_show show_2">
                                                                        
                                                                        <div class="tabScroll">
                                                                        <table id="myTable2" class="display" cellspacing="0" width="100%">
                                                                            <thead> 
                                                                            <tr>  
                                                                                <th class="">Liputan</th> 
                                                                                <th class="">Insured Value</th> 
                                                                                <th class="">Rate</th> 
                                                                                <th class="">Premium</th>
                                                                                
                                                                            </tr> 
                                                                            </thead> 
                                                                            <tbody> 
                                                                            <tr> 
                                                                                <td>Comprehensive</td> 
                                                                                <td class='no_compre_val2'>-</td> 
                                                                                <td class='no_compre_persen2'>-</td> 
                                                                                <td class='no_compre_prem2'>-</td>
                                                                                
                                                                            </tr>     
                                                                            <tr> 
                                                                                <td>TPL</td> 
                                                                                <td class='no_tpl_val2'>-</td> 
                                                                                <td class='no_tpl_persen2'>-</td> 
                                                                                <td class='no_tpl_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Medical Expense</td> 
                                                                                <td class='no_med_ex_val2'>-</td> 
                                                                                <td class='no_med_ex_persen2'>-</td> 
                                                                                <td class='no_med_ex_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PLL</td> 
                                                                                <td class='no_pll_val2'>-</td> 
                                                                                <td class='no_pll_persen2'>-</td> 
                                                                                <td class='no_pll_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Personal Effect</td> 
                                                                                <td class='no_personal_ef_val2'>-</td> 
                                                                                <td class='no_personal_ef_persen2'>-</td> 
                                                                                <td class='no_personal_ef_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Flood</td> 
                                                                                <td class='no_flood_val2'>-</td> 
                                                                                <td class='no_flood_persen2'>-</td> 
                                                                                <td class='no_flood_prem2'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Earthquake</td> 
                                                                                <td class='no_earthquake_val2'>-</td> 
                                                                                <td class='no_earthquake_presen2'>-</td> 
                                                                                <td class='no_earthquake_prem2'>-</td>  
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Strike, Riot, and Civil Commotion</td> 
                                                                                <td class='no_riot_val2'>-</td> 
                                                                                <td class='no_riot_persen2'>-</td> 
                                                                                <td class='no_earthquake_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Terrorist and Sabotage</td> 
                                                                                <td class='no_terror_val2'>-</td> 
                                                                                <td class='no_terror_persen2'>-</td> 
                                                                                <td class='no_terror_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Passenger</td> 
                                                                                <td class='no_passenger_val2'>-</td> 
                                                                                <td class='no_passenger_persen2'>-</td> 
                                                                                <td class='no_passenger_prem2'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Driver</td> 
                                                                                <td class='no_pa_val2'>-</td> 
                                                                                <td class='no_pa_persen2'>-</td> 
                                                                                <td class='no_pa_prem2'>-</td>
                                                                                
                                                                            </tr>      
                                                                             <tr> 
                                                                                <td>ERA</td> 
                                                                                <td class='no_era_val2'>-</td> 
                                                                                <td class='no_pa_persen2'>-</td> 
                                                                                <td class='no_pa_prem2'>-</td>
                                                                                
                                                                            </tr> 
                                                                             <tr> 
                                                                                <td>Authorized Workshop</td> 
                                                                                <td class='no_workshop_val2'>-</td>
                                                                                <td class='no_workshop_persen2'>-</td> 
                                                                                <td class='no_workshop_prem2'>-</td>
                                                                                
                                                                            </tr> 
                                                                             
                                                                            </tbody>

                                                                        </table>
                                                                            
                                                                        <div class="no_total_premium_p_standar2">
                                                                            
                                                                            <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                            
                                                                        </div>     
                                                                           
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a id="open_tab_2_3_m" class="menumobile" href="javascript:void(0);">Example</a>
                                                                    <div id="tabcontent_2_3" class="content_show show_2">
                                                                        
                                                                        <div class="tabScroll">
                                                                        <table id="myTable2" class="display" cellspacing="0" width="100%">
                                                                            <thead> 
                                                                            <tr>  
                                                                                <th class="">Liputan</th> 
                                                                                <th class="">Insured Value</th> 
                                                                                <th class="">Rate</th> 
                                                                                <th class="">Premium</th>
                                                                                
                                                                            </tr> 
                                                                            </thead> 
                                                                            <tbody> 
                                                                            <tr> 
                                                                                <td>Comprehensive</td> 
                                                                                <td class='no_compre_val3'>-</td> 
                                                                                <td class='no_compre_persen3'>-</td> 
                                                                                <td class='no_compre_prem3'>-</td>
                                                                                
                                                                            </tr>     
                                                                            <tr> 
                                                                                <td>TPL</td> 
                                                                                <td class='no_tpl_val3'>-</td> 
                                                                                <td class='no_tpl_persen3'>-</td> 
                                                                                <td class='no_tpl_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Medical Expense</td> 
                                                                                <td class='no_med_ex_val3'>-</td> 
                                                                                <td class='no_med_ex_persen3'>-</td> 
                                                                                <td class='no_med_ex_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PLL</td> 
                                                                                <td class='no_pll_val3'>-</td> 
                                                                                <td class='no_pll_persen3'>-</td> 
                                                                                <td class='no_pll_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Personal Effect</td> 
                                                                                <td class='no_personal_ef_val3'>-</td> 
                                                                                <td class='no_personal_ef_persen3'>-</td> 
                                                                                <td class='no_personal_ef_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Flood</td> 
                                                                                <td class='no_flood_val3'>-</td> 
                                                                                <td class='no_flood_persen3'>-</td> 
                                                                                <td class='no_flood_prem3'>-</td> 
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Earthquake</td> 
                                                                                <td class='no_earthquake_val3'>-</td> 
                                                                                <td class='no_earthquake_presen3'>-</td> 
                                                                                <td class='no_earthquake_prem3'>-</td>  
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Strike, Riot, and Civil Commotion</td> 
                                                                                <td class='no_riot_val3'>-</td> 
                                                                                <td class='no_riot_persen3'>-</td> 
                                                                                <td class='no_earthquake_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>Terrorist and Sabotage</td> 
                                                                                <td class='no_terror_val3'>-</td> 
                                                                                <td class='no_terror_persen3'>-</td> 
                                                                                <td class='no_terror_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Passenger</td> 
                                                                                <td class='no_passenger_val3'>-</td> 
                                                                                <td class='no_passenger_persen3'>-</td> 
                                                                                <td class='no_passenger_prem3'>-</td>
                                                                                
                                                                            </tr>  
                                                                            <tr> 
                                                                                <td>PA Driver</td> 
                                                                                <td class='no_pa_val3'>-</td> 
                                                                                <td class='no_pa_persen3'>-</td> 
                                                                                <td class='no_pa_prem3'>-</td>
                                                                                
                                                                            </tr>      
                                                                             <tr> 
                                                                                <td>ERA</td> 
                                                                                <td class='no_era_val3'>-</td> 
                                                                                <td class='no_pa_persen3'>-</td> 
                                                                                <td class='no_pa_prem3'>-</td>
                                                                                
                                                                            </tr> 
                                                                             <tr> 
                                                                                <td>Authorized Workshop</td> 
                                                                                <td class='no_workshop_val3'>-</td>
                                                                                <td class='no_workshop_persen3'>-</td> 
                                                                                <td class='no_workshop_prem3'>-</td>
                                                                                
                                                                            </tr> 
                                                                             
                                                                            </tbody>

                                                                        </table>
                                                                            
                                                                        <div class="no_total_premium_p_standar3">
                                                                            
                                                                            <span>Total Premium (excl. Admin Cost)</span>  7.978.625,00
                                                                            
                                                                        </div>     
                                                                           
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </li>
                                                               
                                                            </ul>
                                                        </div>

                                                    </div>
                                                    <!-- tabwrap end -->
                                          
                                      </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Lanjut' />                                        
                                        <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' id='finish-btn'/>

                                    </div>
                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-fill btn-warning btn-wd btn-sm' name='previous' value='Kembali' />
                                    </div>
                                    <div class="clearfix"></div>
                            </div>	
                    </div>
                </form>
                </div> <!-- wizard container -->
                
			</div>
			
		</div>
		<!-- newsletter-allianz end -->
			
			
</div>


    <script src="/website/static/inv/js/accounting.min.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
		$('#myTable').dataTable( {
                        "searching": false,
                        "bLengthChange": false,
                        "paging": false,
                        "info": false
                    } );
     
		$('#myTable2').dataTable( {
                        "searching": false,
                        "bLengthChange": false,
                        "paging": false,
                        "info": false
                    } );
		
		function clearFormat(value) {
			value = value.replace(/[^0-9\.]+/g,"");
			value = value.replace(/\./g,'');
			value = value.replace(/,/g,'');
			return value;
		}
		
		function calc_result(paket) {
		//code
			
			
			var harga=clearFormat($('#harga').val());
			var tahun_pembuatan;
			var model;
			var regno;
			var periode;
			var radio01;
			var radio02;
			
			var val_tlo=harga*1; //harga dikali tahun pertama (1), tahun kedua dikali 2 dst.
			var med_ex_val=5000000;
			var pa_val=10000000;
			var passenger_val=10000000;
			var tpl_val=50000000;
			
			val_tlo=accounting.formatMoney(val_tlo,'',2,'.',',');
			med_ex_val=accounting.formatMoney(med_ex_val,'',2,'.',',');
			pa_val=accounting.formatMoney(pa_val,'',2,'.',',');
			passenger_val=accounting.formatMoney(passenger_val,'',2,'.',',');
			tpl_val=accounting.formatMoney(tpl_val,'',2,'.',',');
		
			var val_tlo=harga*1; //harga dikali tahun pertama (1), tahun kedua dikali 2 dst.
			val_tlo=accounting.formatMoney(val_tlo,'',2,'.',',');
			
			$('.workshop_val, .compre_val, .earthquake_val, .era_val, .flood_val, .riot_val, .terror_val').html("");
			$('.workshop_val, .compre_val, .earthquake_val, .era_val, .flood_val, .riot_val, .terror_val').append(val_tlo);
			
			$('.med_ex_val').html("");
			$('.med_ex_val').append(med_ex_val);
			
			$('.pa_val').html("");
			$('.pa_val').append(pa_val);
			
			$('.passenger_val').html("");
			$('.passenger_val').append(passenger_val);
			
			$('.tpl_val').html("");
			$('.tpl_val').append(tpl_val);		
		
		}
	
		$("#harga").bind('input',function(){
			var text = clearFormat($(this).val());
			if (text > 100000000000) {
			    text = 100000000000;
			}
			
			text = accounting.formatMoney(text,'Rp ',0,'.',',');
			$(this).val(text);
		});
		
		$(this).on('click','#finish-btn',function(){

			var tahun_pembuatan=$('#tahun_pembuatan').val();
			var harga=$('#harga').val();
			var merk=$('#merk').val();
			var model=$('#model').val();
			var regno=$('#regno').val();
			var periode=$('#periode').val();
			var email=$('#email').val();
			var redio1=$('#radio01').val();
			var redio2=$('#radio02').val();
			
			//console.log(tahun_pembuatan+'-'+harga+'-'+model+'-'+regno+'-'+periode+'-'+email+'-'+redio1+'-'+redio2)
			$.ajax({
				"url" : "/savemobilku/",
				"type" : "POST",
				"data" : "tahun_pembuatan=" + tahun_pembuatan +"&harga="+harga+"&merk="+merk+"&model="+model+"&regno="+regno+"&periode="+periode+"&email="+email+"&redio1="+redio1+"&redio2="+redio2,
				"success" : function(response){
					//var getResult=JSON.parse(response);
					console.log(response);
				}
			});
		});
		
		$(this).on('change','#merk, #model',function(){
			var a=$(this).attr('id');
			if (a=="merk") {
				//code
				a=1;
			}else{
				a=2;
			}
			
			$.ajax({
			       "url" : "/getdatamobil/",
			       "type" : "POST",
			       "data" : "brand=" + $(this).val()+"&attrs="+a,
			       
			       "success" : function(response){
				var getResult=JSON.parse(response);
				console.log(response);
				if (getResult.type==1) {
					//code
					var i=0;
					$('.model-form').html("");
					$('.model-form').html("<option value=''>Silahkan pilih</option>");
					for(; i<getResult.bodytype.length; i++){
					//console.log(getResult.model_name[i]);
					console.log(getResult);
					$('.model-form').append("<option value='"+getResult.model_o_id[i]+"'>"+getResult.model_name[i]+"</option>");
					}
				}else{
					var i=0;
					//$('.model-form').html("");
					//$('.model-form').html("<option value=''>Silahkan pilih</option>");
					for(; i<getResult.bodytype.length; i++){
					$('#tipe').val(getResult.bodytype[i]);
					$('#kapasitas').val(getResult.seatingcapacity[i]);
					}
				}
					
					
				}
			       
			
			});
			
		});	
		$("#regno").bind('input',function(){
			
			var regno=$(this).val();
			//alert(regno);
			regno.charAt(0);
			regnoChar=regno.charAt(0);
			regnoChar2=regno+regno.charAt(1);
			//alert(regno);
			var wilayah;
			if (regnoChar=='B' ||regnoChar=='CD' ||regnoChar=='D' ||regnoChar=='E' || regnoChar=='F' || regnoChar=='Z') {
				//code
				wilayah=2;
			}else{
				wilayah=3;
				
			}
			$('#wilayah').val(wilayah);
			//$.ajax({
			//       "url" : "/getregno/",
			//       "type" : "POST",
			//       "data" : "regno=" + $(this).val()+"&attrs="+a,
			//       
			//       "success" : function(response){
			//	var getResult=JSON.parse(response);
			//		$('#wilayah').val(wilayah);
			//       }
			//
			//});
		
		});
		
		$(this).on('click','.btn-next',function(){
			
			var email=$('#email').val();
			if (email != '') {
				//code
				calc_result();
			}
		});
		
		$( "#periode" ).datepicker();
		$(".menutab_dekstop li a").width(100);
		$(".menutab_dekstop li a").css("width", "225px");
		$(".tabcontent").css("width", "72%");
		$(".content_show").css("padding", "0px");
           });
    </script>
    
        
    
    <script type="text/javascript">
	
	
	
	function navigateMe(anchor)
	{
	
			$(".pagenav .navi li").removeClass('aktif');
			var element = $("." + anchor);
			element.addClass('aktif');
		
			//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+anchor).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+anchor).offset().top-90}, 500);
			}
	}
	
	$(document).ready(function(){
		
		$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
			$(this).addClass('aktif');
			$('li.aktif .nav_menu div').css('background-position', '0px 0px');
			
	      	var data = $(this).attr('class');
	      	var id = data.split(' ');
	      	//alert($(".heading").offset().top);
			if(Math.floor( $(".heading").offset().top)<=212)
	      	{
		      	$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-190}, 500);
	      	}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id[0]).offset().top-90}, 500);
			}
		});
		var hash = document.URL.substr(document.URL.indexOf('#'));
		var id_hash = hash.split('#');
		
		if(id_hash.length=='1')
		{
			
		}
		else
		{
			$(".pagenav .navi li").removeClass('aktif');
			var element = $("." + id_hash[1]);
			element.addClass('aktif');
			
			if(Math.floor( $(".heading").offset().top)<=212)
			{
				$('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-190}, 500);
			}
			else
			{
				$('html, body').animate({scrollTop:$("#"+id_hash[1]).offset().top-90}, 500);
			}
			$(".pagenav .navi li").removeClass('aktif');
			$(".pagenav .navi li .nav_menu div").css('background-position','0px -26px');
			var element = $("." + id_hash[1]);
			element.addClass('aktif');
			$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		}
		
		/* silde nav*/
		
		$(".hideme").hide();
		$(".v").click(function(){
			$(this).siblings('.hideme').slideToggle();
			if($(this).find('.xicon').hasClass('down')){
				$(this).find('.xicon').removeClass('down')
				$(this).find('.xicon').addClass('up')
			}
			else{
				$(this).find('.xicon').removeClass('up')
				$(this).find('.xicon').addClass('down')
			}
		});
		
		$('.next').on('click',function(){
			var me_left = $('.super_navi').scrollLeft();
			$('.super_navi').scrollLeft(me_left + 100);
			//console.log($('.super_navi').position().left);

		
		$('.prev').on('click',function(){
			var me_left = $('.super_navi').scrollLeft();
			$('.super_navi').scrollLeft(me_left - 100);
			//console.log($('.super_navi').position().left);
		});
		/* silde nav*/
		
		/*$('.kiri .tab').click(function(){
			$('.kiri .tab').removeClass('aktif_tab');
			$(this).addClass('aktif_tab');
			$('.kiri .tab span').removeClass('row');
			$('.kiri .tab span').addClass('icon');
			$('.kiri .aktif_tab span').removeClass('icon');
			$('.kiri .aktif_tab span').addClass('row');
			var id = $(this).attr('id');
			
			$('.kanan div').removeClass('aktif_konten');
			$('.kanan div').addClass('hidden');
			$('.kanan .'+id).removeClass('hidden');
			$('.kanan .'+id).addClass('aktif_konten');
		});
		
		
		$('.kiri2 .tab').click(function(){
			$('.kiri2 .tab').removeClass('aktif_tab');
			$(this).addClass('aktif_tab');
			$('.kiri2 .tab span').removeClass('row');
			$('.kiri2 .tab span').addClass('icon');
			$('.kiri2 .aktif_tab span').removeClass('icon');
			$('.kiri2 .aktif_tab span').addClass('row');
			var id = $(this).attr('id');
			
			$('.kanan2 div').removeClass('aktif_konten');
			$('.kanan2 div').addClass('hidden');
			$('.kanan2 .'+id).removeClass('hidden');
			$('.kanan2 .'+id).addClass('aktif_konten');
		});*/

// for desktop
		<?php
			$i = 1;
			$j = 1;

			for ($i=1; $i <=2 ; $i++) {
				for ($j=1; $j <=6 ; $j++) { 
		?>
            
        
			$("#open_tab_<?php echo $i ?>_<?php echo $j ?>").click(function(){
                
				$(".menutab_dekstop li a").removeClass();
				$("a#open_tab_<?php echo $i ?>_<?php echo $j ?>").addClass("active");
				$(".show_<?php echo $i ?>").hide();
				$("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
			});	
					
		<?php 
				} 		
			}	
		?>

		// for mobile
		<?php
			$i = 1;
			$j = 1;

			for ($i=1; $i <=2 ; $i++) {
				for ($j=1; $j <=6 ; $j++) { 
		?>

			$("#open_tab_<?php echo $i ?>_<?php echo $j ?>_m").click(function(){

				$("#tabcontent_<?php echo $i ?> li a").removeClass("active");
				$(this).addClass("active");
				$(".show_<?php echo $i ?>").hide();
				$("#tabcontent_<?php echo $i ?>_<?php echo $j ?>").show();
			});	
					
		<?php 
				} 		
			}	
		?>

	});
</script>
  
