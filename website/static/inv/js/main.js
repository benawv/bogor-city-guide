  window.fbAsyncInit = function() {
    FB.init({
      appId      : '394562987342152',
      xfbml      : true,
      version    : 'v2.2'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

var url = 'http://allianz.co.id/investment';
function FPShareTwitter(title, isi){
	var tweet = isi+" - "+url;
	var encodeTweet = encodeURIComponent(tweet);
	window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');		
}
			
function FPShareFB(title,isi){
	window.open('https://www.facebook.com/dialog/share?app_id=394562987342152&display=popup&href=' + url + 'docs%2F&redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fexplorer');
}
	
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
	
	$('.fbshareKalkulator').click(function(){
		var reTanya = $(".titleKalkulator").text();
		
		var deskripsi = $(".shareResult").text();
		var name = (reTanya.replace(/[^a-zA-Z()]/g,''))+"-kalkulator";
		var filename = name.replace(/\s/g,'-');
		var image = "/website/static/images/logo-Allz.png";
		var desc = deskripsi;
		loc = window.location.origin+'/website/static/inv-fbshare/kalkulator/sharedfbKalkulator.php';
		
		$.ajax({
				type: 'POST',
				url: loc,
				data: {
					filename: filename,
					title_fb : reTanya,
					description: desc,
					url: window.location.host,
					image: image,
					link_in_fb : window.location.host+window.location.pathname
				},
				success: function(response)
				{
					var url = window.location.origin+'/website/static/inv-fbshare/kalkulator/'+response;
					var file = '/website/static/inv-fbshare/kalkulator/'+response;
					var filename = response;
					var win = window.open('http://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'width=626,height=436');
					var interval = window.setInterval(function() {
					    try {
						if (win == null || win.closed) {
						    window.clearInterval(interval);
						    $.post("/delete-file", {url : filename}, function(data, status){
						      //console.log("Data: "+data + " Status: "+status);
						    });
						}
					    }
					    catch (e) {
					    }
					}, 1000);
				    
					//window.popup.onload = function(){
					//  window.popup.onbeforeunload = function(){
					//      $.post("/delete-file", {url : filename}, function(data, status){
					//	console.log("Data: "+data + " Status: "+status);
					//      });
					//  }
					//}
					//setTimeout(function(){
					//  $.post("/delete-file", {url : filename}, function(data, status){
					//  //  //console.log("Data: "+data + " Status: "+status);
					//  });
					//},20000);
				}
			});
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

//===== added by Bena 08 Jan 2015 =====//
function clearFormat(value) {
    value = value.replace(/[^0-9\.]+/g,"");
    value = value.replace(/\./g,'');
    value = value.replace(/,/g,'');
    return value;
}

// ===== Added By Handri 13 Jan 2015 ==== //
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