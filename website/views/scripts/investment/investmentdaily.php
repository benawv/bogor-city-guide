<?php echo $this->template("includes/inv/header.php")?>


<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/jquery-ui.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/ui.theme.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/flaticon/flaticon.css" type="text/css" media="all" />
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/component.css" type="text/css" media="all" />    
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/demo.css" type="text/css" media="all" />  
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/normalize.css" type="text/css" media="all" />  
<link rel="stylesheet" href="/website/static/inv/js/rangeslider/style.css" type="text/css" media="all" />  


<script src="/website/static/inv/js/rangeslider/masonry.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.tools.min.js" type="text/javascript"></script>
<script src="/website/static/inv/js/rangeslider/jquery.sticky.js" type="text/javascript"></script>
    
<script src="/website/static/inv/js/rangeslider/jquery.min.js" type="text/javascript"></script>     
<script src="/website/static/inv/js/rangeslider/jquery-ui.min.js" type="text/javascript"></script>
     
<script src="/website/static/inv/js/tablesorter/jquery-latest.js" type="text/javascript"></script>
<script src="/website/static/inv/js/tablesorter/jquery.tablesorter.js" type="text/javascript"></script>   

<script type="text/javascript">
	$(function() {		
		$("#myTable").tablesorter({sortList:[[0,0],[2,1]], widgets: ['zebra']});
		$("#options").tablesorter({sortList: [[0,0]], headers: { 3:{sorter: false}, 4:{sorter: false}}});
	});	
</script>  
    
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "16852030-1a9b-4882-8731-4afd4c1cfd9c", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

    
<div role="main" class="main">
    
    
	<div class="container boxes-view">
		
		<div id="#" class="article-wrap">
            
			<div class="wrap30">
                <h5><span><a href="#">Home</a></span> &rsaquo; <span><a href="#">Resources</a></span> &rsaquo; <span><a href="#">Investment Daily</a></span> </h5>
                
                <div class="bg-blue">
                    <h4>Investment Daily</h4>
                    <p>Investment Daily adalah publikasi harian yang berisikan rangkuman berita dan kinerja index global</p>
                </div>
            </div>
            
            <div class="wrap60">
               <h4>November 2014</h4>
                
                <ul>
                    <li><a href="#">Investment Daily 1 November 2014</a></li>
                    <li><a href="#">Investment Daily 3 November 2014</a></li>
                    <li><a href="#">Investment Daily 4 November 2014</a></li>
                    <li><a href="#">Investment Daily 5 November 2014</a></li>
                    <li><a href="#">Investment Daily 6 November 2014</a></li>
                    <li><a href="#">Investment Daily 7 November 2014</a></li>
                    <li><a href="#">Investment Daily 10 November 2014</a></li>
                    <li><a href="#">Investment Daily 11 November 2014</a></li>
                    <li><a href="#">Investment Daily 12 November 2014</a></li>
                    <li><a href="#">Investment Daily 13 November 2014</a></li>
                    <li><a href="#">Investment Daily 14 November 2014</a></li>
                    <li><a href="#">Investment Daily 17 November 2014</a></li>
                </ul>
                
                <div class="disclaimer">
                    <h4>Disclaimer</h4>
                    <p>Dokumen ini disiapkan halnya sebagai infornasi umum dan mengenai tujuan investasi khusus, ketentuan perorangan dan kebutuhan khusus dari seseorang belum dipertimbangkan. Anda tidak harus mengendalikan dokumen ini sebagai saran investasi. Jika anda mempunyai keingintahuan apapun tentang setiap produk investasi atau tidak yakin terhadap kesesuaian dari setiap keputusan investasi, Anda harus mencari nasihat keuangan tersebut dari penasihat profesional Anda yang tepat.</p>
                    <p>Informasi yang dimuat dalam dokumen ini diperoleh dari sumber yang dapat dipercaya, namun Allianz tidak menjaminkelengkapan atau akurasi. Opini dan perkiraaan yang diungkapkan dapat berubah tanpa pemberitahuan dan Allianz tegas menolak setiap dan semua tanggung jawab atas pernyataan dan jaminan tersurat maupun tersirat yang tercantum disini atau yang tidak dicantumkan.</p>
                </div>
            </div>
						
						
		</div>
		<!-- merchandise end -->
	
	</div>
</div>
<!-- End of Main -->

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
		$(".pagenav .navi li").click(function(){
			$(".pagenav .navi li").removeClass('aktif');
			$(this).addClass('aktif');
			
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
		}
		
		$('.kiri .tab').click(function(){
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
		});
	});
</script>
<?php echo $this->template("includes/inv/footer.php")?>    