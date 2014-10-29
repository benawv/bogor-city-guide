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
	
	
	$('.klikVideo').on('click', function(){
		var cClass = $(this).attr("class");
		
		var tmpId = $(this).attr("class").substring(10);
		var splitId = tmpId.split(" ");
		
		var idVideo = splitId[0];
		
		var divId = $(this).find(".divId").val();
		$(this).siblings().removeClass("imgAktif");
		$(this).addClass("imgAktif");
		
		$(".hideVideo"+divId).hide();
		var x = 0;
		for(x ; x < $(".assetsVideo"+divId).length; x++){
			$(".assetsVideo"+divId).get(x).pause();
			$(".assetsVideo"+divId).get(x).currentTime = 0;
		}
		
		$(".hideVideo"+divId).find("source").attr("src","");
		$(".hideVideo"+divId).find("iframe").attr("src","");
		
		var src = $(".tmpVideo_"+idVideo).val();
		$("#"+idVideo).find("source").attr("src",src);
		$("#"+idVideo).find("iframe").attr("src",src);
		$("#"+idVideo).show();
		
	});
	
	$(".imgPopUp p img").on("click",function(){
		var srcImage = $(this).attr("src");
		var altImage = $(this).attr("alt");
		$(".imageModal").attr("src",srcImage);
		if(altImage!=""){
			$("#modalPopUpImage").find("h2").text(altImage);
		}
		else{
			var title = $(this).parent().parent().siblings("h3").find("font").text();
			$("#modalPopUpImage").find("h2").text(title);
		}
		$("#modalPopUpImage").modal("show");
	});
	
	$(".pimcore_area_content p img").on("click",function(){
		var srcImage = $(this).attr("src");
		var altImage = $(this).attr("alt");
		$(".imageModal").attr("src",srcImage);
		if(altImage!=""){
			$("#modalPopUpImage").find("h2").text(altImage);
		}
		else{
			var title = $(this).parent().parent().siblings("h3").find("font").text();
			$("#modalPopUpImage").find("h2").text(title);
		}
		$("#modalPopUpImage").modal("show");
	});
	
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
	
	$(".PopUpModal").on("click",function(){
		if($(this).attr("href")=="#"){
			var text = $(this).text();
			var title = text.replace(/\s+/g, "-");
			$(this).attr("data-target","modal-"+title);
			$("#modal-"+title).modal();
		}
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


