$(document).ready(function(){
	$(".prevPage2").hide();
	$(".nextPage1").hide();
	$(".prevPage4").hide();
	$(".nextPage3").hide();
	
	$(".indexPage_next").val(14);
	$(".indexPage_prev").val(0);
	
	if($(".cus_hide").length < 14)
	{
		$(".nextPage3").show();
		$(".nextPage4").hide();
		$(".nextPage2").hide();
		$(".srch-pgn").hide();
	}
	
	if($(".cus_hide").length == 0)
	{
		$(".srch-pgn").hide();
	}

	$(this).on('click', '.nextPage2', function(){
		var pageIndex_next = $(".indexPage_next").val();
		var pageIndex_prev = $(".indexPage_prev").val();
		$.ajax({
			type: "POST",
			url: "community-tips-page",
			data: {indexPage: $(".indexPage_next").val()},
			success: function(data){
				//var objJSON = eval("(function(){return " + data + ";})()");
				var obj = JSON.parse(data);
				if(parseInt(obj.count_all) > 0){
					$('html, body').animate({
						scrollTop: $("#pagingTop").offset().top
					    }, 1000);
					for(var a=0;a < 14;a++)
					{
					    $("#div"+a).find("a").attr("href", "");
					    $("#div"+a).find("img").attr("src", "");
					    $("#div"+a).find("img").attr("alt", "");
					    $("#div"+a).find("img").attr("title", "");
					    $("#div"+a).find(".tg-shr").empty();
					    $("#div"+a).find("time").empty();
					    $("#div"+a).find(".authr-ttl").empty();
					}
					$(".cus_hide").fadeOut("slow", "linear");
					complete();
				}
				
				function complete() {
					
					var z = 0;
					$.each(obj.listData, function(k, index){
						var gmbr = index.image;
						var link = index.link;
						var title = index.title;
						var cat = index.category;
						var tgl = index.date;
						var alt = index.altImage;
						var titleImage = index.titleImage;
						
						if(z < obj.count_all)
						{
						    $("#div"+z).find("a").attr("href", "/community-detail/"+link);
						    $("#div"+z).find("img").attr("src", gmbr);
						    $("#div"+z).find("img").attr("alt", alt);
						    $("#div"+z).find("img").attr("title", titleImage);
						    $("#div"+z).find(".tg-shr").empty();
						    $("#div"+z).find(".tg-shr").append(cat);
						    $("#div"+z).find("time").empty();
						    $("#div"+z).find("time").append(tgl);
						    $("#div"+z).find(".authr-ttl").empty();
						    $("#div"+z).find(".authr-ttl").append(title);
						    $("#div"+z).fadeIn("slow");
						}
						z++;
					});
					var total1 = parseInt(pageIndex_next)+parseInt((obj.count_all));
					$(".indexPage_next").val(total1);

					var total2 = parseInt(pageIndex_prev)+parseInt(14);
					$(".indexPage_prev").val(total2);
					
					if(obj.hasNext){
						$(".prevPage2").show();
						$(".prevPage1").hide();
					}
					else
					{
						$(".prevPage1").hide();
						$(".prevPage2").show();
						$(".nextPage2").hide();
						$(".nextPage1").show();
					}
				}
				
			}
		});
	});


	$(this).on('click', '.prevPage2', function(){
		var pageIndex_next = $(".indexPage_next").val();
		var pageIndex_prev = $(".indexPage_prev").val();
		$.ajax({
			type: "POST",
			url: "community-tips-page2",
			data: {indexPage: ($(".indexPage_prev").val()-parseInt(14))},
			success: function(data){
				//var objJSON = eval("(function(){return " + data + ";})()");
				var obj = JSON.parse(data);
				if(parseInt(obj.count_all) > 0){
					for(var a=0;a < 14;a++)
					{
						$("#div"+a).find("a").attr("href", "");
						$("#div"+a).find("img").attr("src", "");
						$("#div"+a).find("img").attr("alt", "");
						$("#div"+a).find("img").attr("title", "");
						$("#div"+a).find(".tg-shr").empty();
						$("#div"+a).find("time").empty();
						$("#div"+a).find(".authr-ttl").empty();
					}
					$('html, body').animate({
						scrollTop: $("#pagingTop").offset().top
					    }, 1000);
					$(".cus_hide").fadeOut("slow", "linear");
					complete();
				}
				
				function complete() {
					var z = 0; 
					$.each(obj.listData, function(k, index){
						var gmbr = index.image;
						var link = index.link;
						var title = index.title;
						var cat = index.category;
						var tgl = index.date;
						var alt = index.altImage;
						var titleImage = index.titleImage;
						
						if(z < obj.count_all)
						{
						    $("#div"+z).find("a").attr("href", "/community-detail/"+link);
						    $("#div"+z).find("img").attr("src", gmbr);
						    $("#div"+z).find("img").attr("alt", alt);
						    $("#div"+z).find("img").attr("title", titleImage);
						    $("#div"+z).find(".tg-shr").empty();
						    $("#div"+z).find(".tg-shr").append(cat);
						    $("#div"+z).find("time").empty();
						    $("#div"+z).find("time").append(tgl);
						    $("#div"+z).find(".authr-ttl").empty();
						    $("#div"+z).find(".authr-ttl").append(title);
						    $("#div"+z).fadeIn("slow");
						}
						z++;
					});
					var hasil_next = parseInt(pageIndex_next)-parseInt(pageIndex_prev);
					var total1 = parseInt(pageIndex_next) - hasil_next;
					$(".indexPage_next").val(total1);

					var total2 = parseInt(pageIndex_prev)-parseInt(14);
					$(".indexPage_prev").val(total2);
					if(obj.hasNext){
						$(".prevPage2").show();
						$(".prevPage1").hide();
						$(".nextPage1").hide();
						$(".nextPage2").show();
					}
					else
					{
						$(".prevPage1").show();
						$(".prevPage2").hide();
						$(".nextPage2").show();
						$(".nextPage1").hide();
					}
				}
				
			}
		});
	});
	
	$(this).on('click', '.nextPage4', function(){
		var pageIndex_next = $(".indexPage_next").val();
		var pageIndex_prev = $(".indexPage_prev").val();
		$.ajax({
			type: "POST",
			url: "community-tips-page-category",
			data: {indexPage: $(".indexPage_next").val(), category: $(".category").val()},
			success: function(data){
				var obj = JSON.parse(data);
				if(parseInt(obj.count_all) > 0){
					$('html, body').animate({
						scrollTop: $("#pagingTop").offset().top
					    }, 1000);
					for(var a=0;a < 14;a++)
					{
						$("#div"+a).find("a").attr("href", "");
						$("#div"+a).find("img").attr("src", "");
						$("#div"+a).find("img").attr("alt", "");
						$("#div"+a).find("img").attr("title", "");
						$("#div"+a).find(".tg-shr").empty();
						$("#div"+a).find("time").empty();
						$("#div"+a).find(".authr-ttl").empty();
					}
					$(".cus_hide").fadeOut("slow", "linear");
					complete();
				}
				
				function complete() {
					var z = 0; 
					$.each(obj.listData, function(k, index){
						var gmbr = index.image;
						var link = index.link;
						var title = index.title;
						var cat = index.category;
						var tgl = index.date;
						var alt = index.altImage;
						var titleImage = index.titleImage;
						
						if(z < obj.count_all)
						{
						    $("#div"+z).find("a").attr("href", "/community-detail/"+link);
						    $("#div"+z).find("img").attr("src", gmbr);
						    $("#div"+z).find("img").attr("alt", alt);
						    $("#div"+z).find("img").attr("title", titleImage);
						    $("#div"+z).find(".tg-shr").empty();
						    $("#div"+z).find(".tg-shr").append(cat);
						    $("#div"+z).find("time").empty();
						    $("#div"+z).find("time").append(tgl);
						    $("#div"+z).find(".authr-ttl").empty();
						    $("#div"+z).find(".authr-ttl").append(title);
						    $("#div"+z).fadeIn("slow");
						}
						z++;
					});
					var total1 = parseInt(pageIndex_next)+parseInt((obj.count_all));
					$(".indexPage_next").val(total1);

					var total2 = parseInt(pageIndex_prev)+parseInt(14);
					$(".indexPage_prev").val(total2);
					
					if(obj.hasNext){
						$(".prevPage4").show();
						$(".prevPage3").hide();
					}
					else
					{
						$(".prevPage3").hide();
						$(".prevPage4").show();
						$(".nextPage4").hide();
						$(".nextPage3").show();
					}
				}
				
			}
		});
	});


	$(this).on('click', '.prevPage4', function(){
		var pageIndex_next = $(".indexPage_next").val();
		var pageIndex_prev = $(".indexPage_prev").val();
		$.ajax({
			type: "POST",
			url: "community-tips-page-category2",
			data: {indexPage: ($(".indexPage_prev").val()-parseInt(14)), category: $(".category").val()},
			success: function(data){
				var obj = JSON.parse(data);
				if(parseInt(obj.count_all) > 0){
					for(var a=0;a < 14;a++)
					{
						$("#div"+a).find("a").attr("href", "");
						$("#div"+a).find("img").attr("src", "");
						$("#div"+a).find("img").attr("alt", "");
						$("#div"+a).find("img").attr("title", "");
						$("#div"+a).find(".tg-shr").empty();
						$("#div"+a).find("time").empty();
						$("#div"+a).find(".authr-ttl").empty();
					}
					$('html, body').animate({
						scrollTop: $("#pagingTop").offset().top
					    }, 1000);
					$(".cus_hide").fadeOut("slow", "linear");
					complete();
				}
				
				function complete() {
					var z = 0; 
					$.each(obj.listData, function(k, index){
						var gmbr = index.image;
						var link = index.link;
						var title = index.title;
						var cat = index.category;
						var tgl = index.date;
						var alt = index.altImage;
						var titleImage = index.titleImage;
						
						if(z < obj.count_all)
						{
						    $("#div"+z).find("a").attr("href", "/community-detail/"+link);
						    $("#div"+z).find("img").attr("src", gmbr);
						    $("#div"+z).find("img").attr("alt", alt);
						    $("#div"+z).find("img").attr("title", titleImage);
						    $("#div"+z).find(".tg-shr").empty();
						    $("#div"+z).find(".tg-shr").append(cat);
						    $("#div"+z).find("time").empty();
						    $("#div"+z).find("time").append(tgl);
						    $("#div"+z).find(".authr-ttl").empty();
						    $("#div"+z).find(".authr-ttl").append(title);
						    $("#div"+z).fadeIn("slow");
						}
						z++;
					});
					var hasil_next = parseInt(pageIndex_next)-parseInt(pageIndex_prev);
					var total1 = parseInt(pageIndex_next) - hasil_next;
					$(".indexPage_next").val(total1);

					var total2 = parseInt(pageIndex_prev)-parseInt(14);
					$(".indexPage_prev").val(total2);
					if(obj.hasNext){
						$(".prevPage4").show();
						$(".prevPage3").hide();
						$(".nextPage3").hide();
						$(".nextPage4").show();
					}
					else
					{
						$(".prevPage3").show();
						$(".prevPage4").hide();
						$(".nextPage4").show();
						$(".nextPage3").hide();
					}
				}
				
			}
		});
	});
});