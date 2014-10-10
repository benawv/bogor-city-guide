<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<?php if(!$this->editmode):?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php endif; ?>
<div class="container boxes-view">
	<h5><a href="/"><span>Home</span></a> &rsaquo; <?php echo $this->navigation()->breadcrumbs()->setMinDepth(null); ?></h5>
	<span class="breadcrumb"><a href="#">Daftar <?php echo $this->document->getTitle()?></a></span>
	
	<div class="heading clearfix pagenav">
            <div class="combo_year">
                <span>Year</span><br>
                <select id="combo_year">
                    <option value="">All</option>
                    <?php 
						$db = Pimcore_Resource_Mysql::get();
						$sql = "SELECT doc_e.data, DATE_FORMAT(FROM_UNIXTIME(doc_e.data), '%Y') as tahun from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId where doc.path='/berita/berita/arsip-berita/' and doc.published=1 and doc_e.type='date' GROUP BY tahun ORDER BY tahun DESC";
						$tahun = $db->fetchAll($sql);
						for($i=0;$i<count($tahun);$i++)
						{
					?>
                    <option value="<?php echo $tahun[$i]["tahun"];?>"><?php echo $tahun[$i]["tahun"];?></option>
                    <?php 
						}
                    ?>
                </select>
            </div>

			<div class="quicklinksNews" id="quicklinks">
				<script>
					function changeHeader(object)
					{
						$("#accordion-header").html("");
						$("#accordion-header").html(""+object.text);
					}
				</script>
	                
				<!-- Accordion -->
			<div id="accordion-container">
			    <h2 id="accordion-header" class="accordion-header">Layanan Kami</h2>
			    <div class="accordion-content">
				    <!-- Tablink -->
				    <div class="tab-wrapper-short">
					    <div class="tab-content" id="tab-umum" style="display: block;">
						    <!-- <h3>Asuransi Kumpulan</h3> -->
						    <ul class="nav">
							    <li><a href="../klaim.php">Prosedur Klaim</a></li>
								<li><a onclick="navigateMe('premi')" href="../customer-service.php#cs_premi">Info Cara Pembayaran Premi</a></li>
								<li><a target="_blank" href="https://www.allianzlife.co.id/CustomerOnlinePortal/">Customer Online Portal</a></li>
								<li><a onclick="navigateMe('cara-membeli')" href="../customer-service.php#cs_cara-membeli">Info Cara Membeli</a></li>
								<li><a href="../investasi.php">Harga Unit</a></li>
								<li><a target="_blank" href="https://www.allianzlife.co.id/eBancassurance/">BancAssurance Portal</a></li>
								<li><a target="_blank" href="https://www.allianzlife.co.id/ePension/">e-Pension</a></li>
								<li><a href="../allianz-platinum.php">Allianz Platinum</a></li>
								<li><a href="../faq.php">FAQ</a></li>
						    </ul>
					    </div>		
					    <div class="tab-content" id="tab-jiwa" style="display: none;">
						    <!-- <h3>Asuransi Jiwa</h3> -->
						    Asuransi Jiwa:
						    <br>
						    <br>
							    <ul class="list-links">
								    <li>Tel: +6221-2926 9999</li>
								    <li>Fax: +6221-2926 8080</li>
								    <li>contactus@allianz.co.id</li>
							    </ul>
						    
						    Asuransi Umum:
						    <br>
						    <br>
						    <ul class="list-links">
							    <li>Tel: +6221-2926 9999</li>
							    <li>Fax: +6221-2926 9090</li>
							    <li>Feedback@allianz.co.id</li>
						    </ul>
						    
					    </div>
					    <div class="tab-content" data-header="Asuransi Kesehatan" id="tab-kesehatan" style="display: none;">
						    <!-- <h3>Asuransi Kesehatan</h3> -->
						    <ul class="nav">
							    <li><a style="color:white" href="http://www.facebook.com/AllianzIndonesiaCommunity">Facebook:  AllianzIndonesiaCommunity </a></li>
							    <li><a style="color:white" href="http://www.twitter.com/AllianzID">Twitter: AllianzID </a></li>
							    <li><a style="color:white" href="http://instagram.com/allianzindonesia">Instagram: AllianzIndonesia</a></li>
						    </ul>
    
					    </div>
					    <div class="tab-content" id="tab-syariah" style="display: none;">
						    <!-- <h3>Asuransi Syariah</h3> -->
						    <ul class="nav">
								    <li><a style="color:white" onclick="navigateMe('report')" href="../finansial.php#fin-report">Laporan Keuangan</a></li>
								    <li><a style="color:white" onclick="navigateMe('unit-link')" href="../download.php#unit-link"> Laporan Perkembangan Unit Link Tahun 2013</a></li>
								    <li><a style="color:white" onclick="navigateMe('rumah-sakit')" href="../customer-service.php#cs_rumah-sakit">Daftar Rekanan Rumah Sakit</a></li>
								    <li><a style="color:white" onclick="navigateMe('asuransi-jiwa')" href="../download.php#asuransi-jiwa">Download Formulir-formulir Penting</a></li>
								    <li><a style="color:white" onclick="navigateMe('newsletter-allianz')" href="../download.php#newsletter-allianz">Newsletter</a></li>
						    </ul>
					    </div>
				    </div>
				    <!-- Tablink -->
			    </div>	
			</div>
		<!-- Accordion -->
		
		<!--Tab gantung -->
			<div class="tab-wrapper-hold">
				<div class="tab-button">
					<ul>
						<li class="active"><a onclick="changeHeader(this)" class="accordion-tab inactive-header" href="#tab-umum">Layanan Kami</a></li>
						<li><a onclick="changeHeader(this)" class="accordion-tab inactive-header" href="#tab-jiwa">Kontak</a></li>
						<li><a onclick="changeHeader(this)" class="accordion-tab inactive-header" href="#tab-kesehatan">Media Sosial</a></li>
						<li><a onclick="changeHeader(this)" class="accordion-tab inactive-header" href="#tab-syariah">Download</a></li>
						
					</ul>
				</div>	
			</div>	
		<!--Tab gantung -->

			</div> 
		<!--Item -->
		</div>
	<div id="product-sub" class="items-container" style="position: relative; height: 735.5px;">
			<div id="item-right" class="item item_visimisi" style="position: absolute; left: 0px; top: 0px;">
				<div id="berita_berita">
						<?php
							function limit_words($string, $word_limit)
							{
								$words = explode(" ",$string);
								return implode(" ",array_splice($words,0,$word_limit));
							} 
							for ($i = 0; $i < count($this->fetchBerita); $i++)
							{
								$id = $this->fetchBerita[$i]['id'];
								$list = new Document_List();
								$list->setCondition("id=".$id);
								$entries = $list->load();
								
						?>
								<div id="list">
				                	<div class="ipNewsList">
									     <div class="description">
									            <span class="judul"><a href="<?php echo $entries[0]->path."".$entries[0]->key;?>"><?php echo $entries[0]->title;?></a></span>
									            <div class="isi_berita">
									            	<div>
									                    <span class="tgl_berita"><?php echo gmdate("d-m-Y",$this->fetchBerita[$i]['data']);?></span> | <span>Allianz SE</span><br />
									                    <?php 
										                    $a = array_keys($entries[0]->getElements());
										                    $match = preg_grep('/^konten-berita(\w+)/i', $a);
										                    $el = array_values($match);
									                    	echo limit_words($entries[0]->elements[$el[0]]->text,70);
									                    ?>
									            	</div>
									            </div>
									            <div class="selengkapnya">
									                <a href="<?php echo $entries[0]->path."".$entries[0]->key;?>">Selengkapnya</a>
									            </div>
									    </div>
									</div>
								</div>
						<?php
							}
						?>
				</div>
                <div class="btn_more">
                    <a href="javascript:void(0)" class="button_more">Selanjutnya...</a>
                    <input type="hidden" value="3" class="offset" />
                </div>
			</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var count = '3';
		if(count == 0)
		{
			$('.button_more').hide();
		}
		else {
			$('.button_more').show();
		}
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$('li.aktif .nav_menu div').css('background-position', '0px 0px');
		
		var hash = window.location.hash.substring(1);
		if(hash!=''){
			var target = '#modal-'+hash;
			$(target).modal('show');
		}
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

		function arrayKeys(input) {
		    var output = new Array();
		    var counter = 0;
		    for (i in input) {
		        output[counter++] = i;
		    } 
		    return output; 
		}


		function limitWords(textToLimit, wordLimit)
		{
			var finalText = "";
	
			var text2 = textToLimit.replace(/\s+/g, " ");
	
			var text3 = text2.split(' ');
	
			var numberOfWords = text3.length;
	
			var i=0;
	
			if(numberOfWords > wordLimit)
			{
			for(i=0; i< wordLimit; i++)
			finalText = finalText+" "+ text3[i]+" ";
	
			return finalText+"...";
			}
			else return textToLimit;
		}
					
		$(this).on('click', '.button_more', function(){
			var offset = $(".offset").val();
			var year = $("#combo_year").val();
			
			$.ajax({
				url: 'load-more',
				type: 'POST',
				data: { 'offset': offset, 'created_at': year },
				success: function(result) {
					berita = $.parseJSON(result);
					//console.log(berita);
					
					if(berita.length != 0){
						$.each(berita, function(i , val){
							var a = arrayKeys(val[0].elements);
							var match;
							for(var z = 0; z < a.length; z++)
							{
								if(a[z].substring(0,13)=="konten-berita")
								{
									match = a[z];
									z = a.length;
								}
							}
		                    //var match = preg_grep("/konten-berita(\w+)/i",a);
		                    var el = val[0].elements[match].text;
	
		                    //console.log(val[0].elements[match].text);
							var html= '<div id="list">'+
		                	 			'<div class="ipNewsList">'+
							     			'<div class="description">'+
							            		'<span class="judul"><a href="'+val[0].path+''+val[0].key+'">'+val[0].title+'</a></span>'+
							            		'<div class="isi_berita">'+
							            			'<div>'+
							                    		'<span class="tgl_berita">'+val["tgl"]+'</span> | <span>Allianz SE</span><br>'+
							                    			limitWords(el,71)+
							                		'</div>'+
							            		'</div>'+
								            	'<div class="selengkapnya">'+
									               	'<a href="'+val[0].path+''+val[0].key+'">Selengkapnya</a>'+
									            '</div>'+
										    '</div>'+
										'</div>'+
									'</div>';
							$('#berita_berita').append(html);
						});
					}
					if(berita.length < 3)
					{
						$(".btn_more").css("display","none");
						$(".offset").val(parseInt(offset)+parseInt(berita.length));
					}
					else{
						$(".offset").val(parseInt(offset)+parseInt(berita.length));
					}
					var heightContainer = $("#item-right").height()+20;
					$("#product-sub").css("height",heightContainer);
				}
			});
			
		});
		
		$("#combo_year").change(function(){
			var year = $(this).val();

			$.ajax({
				url : "filter-tahun",
				type: "POST",
				data : {"created_at" : year},
				success : function(result)
				{
					berita = $.parseJSON(result);
					//console.log(berita);
					
					$('#berita_berita').empty();
					$.each(berita, function(i , val){
						var a = arrayKeys(val[0].elements);
						var match;
						for(var z = 0; z < a.length; z++)
						{
							if(a[z].substring(0,13)=="konten-berita")
							{
								match = a[z];
								z = a.length;
							}
						}
	                    //var match = preg_grep("/konten-berita(\w+)/i",a);
	                    var el = val[0].elements[match].text;

	                    //console.log(val[0].elements[match].text);
						var html= '<div id="list">'+
	                	 '<div class="ipNewsList">'+
						     '<div class="description">'+
						            '<span class="judul"><a href="'+val[0].path+''+val[0].key+'">'+val[0].title+'</a></span>'+
						            '<div class="isi_berita">'+
						            	'<div>'+
						                    '<span class="tgl_berita">'+val["tgl"]+'</span> | <span>Allianz SE</span><br>'+
						                    limitWords(el,71)+
						                '</div>'+
						            '</div>'+
						            '<div class="selengkapnya">'+
						                '<a href="'+val[0].path+''+val[0].key+'">Selengkapnya</a>'+
						            '</div>'+
								    '</div>'+
								'</div>'+
							'</div>';
						$('#berita_berita').append(html);
					});
					if(berita.length < 3)
					{
						$(".btn_more").css("display","none");
						$(".offset").val(parseInt(berita.length));
					}
					else
					{
						$(".btn_more").css("display","block");
						$(".offset").val(parseInt(berita.length));
					}
					if(berita.length == 0)
					{
						var html = "<div id='list'><div class='ipNewsList' style='margin:30px auto;text-align:center;'><h2>Tidak Ada Berita</h2></div></div>"
						$("#berita_berita").append(html);
					}
					var heightContainer = $("#item-right").height()+21;
					$("#product-sub").css("height",heightContainer);
				}
			});
		});
	});
</script>