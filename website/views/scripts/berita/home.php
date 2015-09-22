<?php
	if(!$this->editmode) { 
		$url = $_SERVER['REQUEST_URI'];
		$uri = explode("/", $url);
		
		for($x = 1; $x < count($uri); $x++)
		{
			$title = explode("-", $uri[$x]);
			$textTitle = "";
			$text = "";
			for ($y = 0; $y < count($title); $y++)
			{
				$textTitle = " <span class='upperText'>".substr($title[$y], 0, 1)."</span>".substr($title[$y], 1);
				$text .= $textTitle;
			}
		}
		$menu = explode("-", $uri[1]);
		$textTitle2 = "";
		$text2 = "";
		for ($y = 0; $y < count($menu); $y++)
		{
			$textTitle2 = " <span class='upperText'>".substr($menu[$y], 0, 1)."</span>".substr($menu[$y], 1);
			$text2 .= $textTitle2;
		}
	}
	else{
		$text = "";
	}
?>
<script src="/website/static/js/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/js/jquery.tools.min.js" type="text/javascript"></script>
<?php if(!$this->editmode):?>
<script src="/website/static/js/sticky-jquery.js" type="text/javascript"></script>
<?php endif; ?>
<div class="container boxes-view">
	<h5><a href="/"><span>Home</span></a> &rsaquo; <?php echo $text2;?></h5>
	<span class="breadcrumb"><a href="#">Daftar <?php echo $this->document->getProperty('navigation_title');?></a></span>
	
	<div class="heading clearfix pagenav">
            <div class="combo_year">
                <span>Year</span><br>
                <select id="combo_year">
                    <option value="">All</option>
                    <?php 
						$db = Pimcore_Resource_Mysql::get();
						$sql = "SELECT doc_e.data, DATE_FORMAT(FROM_UNIXTIME(doc_e.data), '%Y') as tahun from documents as doc inner join documents_elements as doc_e on doc.id=doc_e.documentId where doc.path LIKE '%/arsip-berita/' and doc.published=1 and doc_e.type='date' GROUP BY tahun ORDER BY tahun DESC";
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

                <?php echo $this->areablock('news-quicklinks', array('allowed' => array('blank-animation-quicklinks','quicklinks','product-quicklinks')))?>
		<!-- Accordion -->
		


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
								$srcImg = $entries[0]->elements["imgBerita"]->image->path.$entries[0]->elements["imgBerita"]->image->filename;
						?>
								<div id="list">
				                	<div class="ipNewsList">
									     <div class="description">
									            <span class="judul"><a href="<?php echo $entries[0]->path."".$entries[0]->key;?>"><?php echo $entries[0]->title;?></a></span>
									            <div class="isi_berita">
											<?php if($srcImg != ""){?>
									            	<img src="<?php echo $srcImg;?>" class="left" style="margin-right: 10px;"/>
											<?php }?>
											<div>
									                    <span class="tgl_berita"><?php echo date("d-m-Y",$this->fetchBerita[$i]['data']);?></span> | <span>Allianz Indonesia</span><br />
									                    <?php
									//	                    $a = array_keys($entries[0]->getElements());
									//	                    $match = preg_grep('/^konten-berita(\w+)/i', $a);
									//	                    $el = array_values($match);
									//                    	echo limit_words($entries[0]->elements[$el[0]]->text,70);
												echo limit_words($entries[0]->elements["textareaBerita"]->text,70);
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