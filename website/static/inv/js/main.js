$(document).ready(function(){
	$('.tab-content').hide();
	$('.tab-content:first').show();
	$('.tab-button ul li:first').addClass('active');
	$('.tab-button ul li a').click(function(){
		$('.tab-button ul li').removeClass('active');
		$(this).parent().addClass('active');
		var currentTab = $(this).attr('href');
		$('.tab-content').hide();
		$(currentTab).show();
		return false;
	});

	$('.tab_button ul li a:first').addClass('active');
	$('.tab_button ul li a').click(function(){
		$('.tab_button ul li a').removeClass('active');
		$(this).addClass('active');
		var currentTab = $(this).attr('href');
		$('.tab-content').hide();
		$(currentTab).show();
		return false;
	});

	

	$('#slideshow').flexslider({
	    animation: "slide"
	});
	$('#best-products').flexslider({
	    animation: "slide",
	    slideshowSpeed: 6000
	});

	$('#item-claim,#item-faq,#item-unggul').flexslider({
	    animation: "slide",
	    slideshowSpeed: 6000
	});

	$(".menu-level1 > ul > li").hover(function () {
		var height_search = $('div.search').position().top;
		if($(window).width() >= 960){
			var currentMenu = $(this);
			currentMenu.children(".menu-level2").slideDown({
				duration:200,
				start: function(){
					$('div.search').addClass('aktif');
					
				},
				step: function(){
					if (height_search<=40) {
						$('div.search').css('top',$(this).height() + 38);
					}
				},
				complete: function(){
					$(".menu-level2").removeClass('active').hide();
					$(this).addClass('active');
				}
			});
		}
		else
		{
			$('div.search').removeClass('aktif');
			$(".menu-level2").removeClass('active');
			$(this).children(".menu-level2").addClass('active');
		}
	});
	$('.primary').mouseleave(function () {
		if($(window).width() >= 960)
		{
			$(".menu-level2").hide().removeClass('active');
			$('div.search').removeClass('aktif');
		}
		else
		{
			$(".menu-level2").removeClass('active');
			$('div.search').removeClass('aktif');
		}

	});
	$("nav.primary .toggle-menu").click(function() {
		if($(window).width() < 960)
			$("nav.primary .menu-level1").toggleClass('active');
	});

	$('.inv-btn .twshare').on("click",function(){
		var url = window.location.host+window.location.pathname;
		
		var title = $(".form_cont .titleRisk").text();
		var isi = $(".h-b p").text();
		
		var isiText = isi.substring(0,80)+".... ";
		
		var tweet = title+" : "+url;
		var encodeTweet = encodeURIComponent(tweet);
		window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
	});
	
	$('.inv-btn .fbshare').on("click",function(){
		var reTanya = $(".form_cont .titleRisk").text();
		
		var deskripsi = $(".form_cont .result").text()+" : "+$(".form_cont .description").text();
		
		
		var name = (reTanya.replace(/[^a-zA-Z()]/g,''))+"-risk";
		var filename = name.replace(/\s/g,'-');
		var limit = 32;
		var x;
		var words = deskripsi.split(/\s/);
		var desc='';
		
		if (words.length > limit)
		{
				for(x=0;x<limit;x++)
				{
						if (x==0)
						{
								desc = desc+words[x];
						}
						else
						{
								desc = desc+' '+words[x];
						}
				}
				desc = desc+'....';
		}
		else
		{
				desc = deskripsi;
		}
				
		loc = window.location.origin+'/website/static/inv-fbshare/sharedfb.php';
		/*console.log(loc);
		console.log(reTanya);
		console.log(filename);
		console.log(desc);*/
		$.ajax({
				type: 'POST',
				url: loc,
				data: {
					filename: filename,
					title_fb : reTanya,
					description: desc,
					url: window.location.host,
					link_in_fb : window.location.host+window.location.pathname
				},
				success: function(response)
				{
					var url = window.location.origin+'/website/static/inv-fbshare/'+response;
					window.open('http://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'width=626,height=436');
				}
			});
	});
});

	

$(window).load(function() {
	// --------- product page ----------
	var $container = $('.items-container');
	if($container != undefined){
	$container.masonry({
	  columnWidth: 326,
	  itemSelector: '.item'
	});
	}
	// -------- end product page -------
});


