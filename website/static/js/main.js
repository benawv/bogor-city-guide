$(document).ready(function(){function t(t){for(var i=t+"=",e=document.cookie.split(";"),a=0;a<e.length;a++){for(var n=e[a];" "==n.charAt(0);)n=n.substring(1);if(-1!=n.indexOf(i))return n.substring(i.length,n.length)}return""}function i(t,i){document.cookie=t+"="+i+";"}$(".tab-content").hide(),$(".tab-content:first").show(),$(".tab-button ul li:first").addClass("active"),$(".tab-button ul li a").click(function(){$(".tab-button ul li").removeClass("active"),$(this).parent().addClass("active");var t=$(this).attr("href");return $(".tab-content").hide(),$(t).show(),!1}),$(".tab_button ul li a:first").addClass("active"),$(".tab_button ul li a").click(function(){$(".tab_button ul li a").removeClass("active"),$(this).addClass("active");var t=$(this).attr("href");return $(".tab-content").hide(),$(t).show(),!1}),$("#slideshow").flexslider({animation:"slide"}),$("#best-products").flexslider({animation:"slide",slideshowSpeed:6e3}),$("#item-claim,#item-faq,#item-unggul").flexslider({animation:"slide",slideshowSpeed:6e3}),$(".menu-level1 > ul > li").hover(function(){var t=$("div.search").position().top;if($(window).width()>=960){var i=$(this);i.children(".menu-level2").slideDown({duration:200,start:function(){$("div.search").addClass("aktif")},step:function(){40>=t&&$("div.search").css("top",$(this).height()+38)},complete:function(){$(".menu-level2").removeClass("active").hide(),$(this).addClass("active")}})}else $("div.search").removeClass("aktif"),$(".menu-level2").removeClass("active"),$(this).children(".menu-level2").addClass("active")}),$(".primary").mouseleave(function(){$(window).width()>=960?($(".menu-level2").hide().removeClass("active"),$("div.search").removeClass("aktif")):($(".menu-level2").removeClass("active"),$("div.search").removeClass("aktif"))}),$("nav.primary .toggle-menu").click(function(){$(window).width()<960&&$("nav.primary .menu-level1").toggleClass("active")}),$(".klikVideo").on("click",function(){var t=($(this).attr("class"),$(this).attr("class").substring(10)),i=t.split(" "),e=i[0],a=$(this).find(".divId").val();$(this).siblings().removeClass("imgAktif"),$(this).addClass("imgAktif"),$(".hideVideo"+a).hide();var n=0;for(n;n<$(".assetsVideo"+a).length;n++)$(".assetsVideo"+a).get(n).pause(),$(".assetsVideo"+a).get(n).currentTime=0;$(".hideVideo"+a).find("source").attr("src",""),$(".hideVideo"+a).find("iframe").attr("src","");var s=$(".tmpVideo_"+e).val();$("#"+e).find("source").attr("src",s),$("#"+e).find("iframe").attr("src",s),$("#"+e).show()}),$(".imgPopUp p img").on("click",function(){var t=$(this).attr("src"),i=$(this).attr("alt");if($(".imageModal").attr("src",t),""!=i)$("#modalPopUpImage").find("h2").text(i);else{var e=$(this).parent().parent().siblings("h3").find("font").text();$("#modalPopUpImage").find("h2").text(e)}$("#modalPopUpImage").modal("show")}),$(".pimcore_area_content p img").on("click",function(){var t=$(this).attr("src"),i=$(this).attr("alt");if($(".imageModal").attr("src",t),""!=i)$("#modalPopUpImage").find("h2").text(i);else{var e=$(this).parent().parent().siblings("h3").find("font").text();$("#modalPopUpImage").find("h2").text(e)}$("#modalPopUpImage").modal("show")}),$(".PopUpModal").on("click",function(){if("#"==$(this).attr("href")){var t=$(this).text(),i=t.replace(/\s+/g,"-");$(this).attr("data-target","modal-"+i),$("#modal-"+i).modal()}}),$(".description a").on("click",function(){var t=$(this).attr("href"),i=t.substring(0,6);"#modal"==i&&(modalPopUp=t.substring(6),$("#modal"+modalPopUp).modal("show"))}),$(".shop").on("click",function(){var i=$(this).parent().siblings("h2").find("a").attr("href"),e=$(this).parent().siblings("h2").find("a").text(),a=i.split("/"),n="/"+a[1]+"/"+a[2],s=a[3];$("body").prepend("<div id='dvLoading'></div>"),$.ajax({url:"save-wishlist",type:"POST",data:{cookies:t("userWishlist"),path:n,key:s,produk:e,asuransi:a[2]},success:function(t){var i=$.parseJSON(t);$("#dvLoading").fadeOut(2e3),$("#dvLoading").remove();var e=1;if("saved"==i[0]){for($("#wishlistSuccess").find("li").remove(),e;e<i.length;e++)$("#wishlistSuccess").find("ul").append("<li><h3>"+i[e]+"</h3></li>");$("#wishlistSuccess").modal("show")}else{for($("#wishlistFail").find("li").remove(),e;e<i.length;e++)$("#wishlistFail").find("ul").append("<li><h3>"+i[e]+"</h3></li>");$("#wishlistFail").modal("show")}}})}),$(".checkout").on("click",function(){var i=t("userWishlist");window.location.href="/checkout/"+i}),$(".linkWizard").on("click",function(){i("showWizard","Hide"),window.location.href="/wishlist/panduan-wishlist"}),$(".close").on("click",function(){i("showWizard","Hide")}),$("#modal-cart").on("click",function(){i("showWizard","Hide")}),$(".linkProduk").on("click",function(){i("showWizard","Hide"),window.location.href="/produk"}),$(".hapusProduk").on("click",function(){var t=window.location.pathname,i=t.split("/"),e=$(this).parent().siblings("td").text();$(this).parent().parent().remove(),$.ajax({url:"/hapus-wishlist",type:"POST",data:{cookies:i[i.length-1],produk:e},success:function(){}})}),$(".simpanWishlist").on("click",function(){var t=$(".no-bot").val(),i=$(".no-bot2").val();if("no robot"==t&&""==i){var e=window.location.pathname,a=e.split("/"),n=$("#salutation").val(),s=$("#nama_depan").val(),o=$("#nama_belakang").val(),r=$("#email").val(),l=$("#no_telp").val();if($(".eror").text(""),0==s.length||0==r.length||0==l.length||0==o.length)$(".eror").text("Semua kolom harus diisi.");else if(0==$("input:checked").length)$(".eror").text("Anda harus menyetujui persyaratan dan ketentuan.");else if(0!=r.length){var d=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,c=r;if(d.test(c)){var h=0,p=new Array;for(h;h<$(".produk").length;h++)p[h]=$(".produk"+h).text();var f=s+" "+o;$("body").prepend("<div id='dvLoading'></div>"),$.ajax({url:"/send-email",type:"POST",data:{cookies:a[a.length-1],produk:p,nama:f,email:r,no_telp:l,gender:n},success:function(t){var i=jQuery.parseJSON(t);"Kirim"==i.status&&(window.location.href="/terima_kasih/"+a[a.length-1])}})}else $(".eror").text("Email tidak valid.")}}}),$(".btn-group .twshare").on("click",function(){var t=window.location.host+window.location.pathname,i=$(this).parent().siblings("a").find("h2.title_news").text(),e=$(this).parent().parent().siblings("a").find(".description p").text();if(""==i&&(i=$(this).parent().siblings("h2.title_news").find("a").text()),""==e&&(e=$(this).parent().parent().siblings(".description").find("p").text()),"/produk"==window.location.pathname){e="",lengthLi=$(this).parent().parent().siblings(".description").find("li").length;for(var a=0;lengthLi>a;a++)e=e+$(this).parent().parent().siblings(".description").find("li:eq("+a+")").text()+", "}if(""==i){var n=window.location.pathname.split("/");str=n[n.length-1].toLowerCase().replace(/\b[a-z]/g,function(t){return t.toUpperCase()}),i=str}if(""!=e.substring(0,80)){e.substring(0,80)+".... "}else;var s=i+" : "+t,o=encodeURIComponent(s);window.open("https://twitter.com/intent/tweet?text="+o,"sharer","width=626,height=436")}),$(".btn-group .fbshare").on("click",function(){var t=$(this).parents().siblings("a").find(".image_share").attr("src"),i=$(this).parent().siblings("a").find("h2.title_news").text();void 0==t&&(t=$(this).parents().siblings("img.clickPage").attr("src")),""==i&&(i=$(this).parent().siblings("h2.title_news").find("a").text());var e=$(this).parents().parents().siblings(".description").find("p").text();""==e&&(e="",e=$(this).parents().parents().siblings("a").find(".description").find("p").text());var a=void 0!=$(this).parent().siblings("a").attr("href")?window.location.host+"/"+$(this).parent().siblings("a").attr("href"):window.location.host+window.location.pathname;if("/produk"==window.location.pathname){e="",lengthLi=$(this).parent().parent().siblings(".description").find("li").length;for(var n=0;lengthLi>n;n++)e=e+$(this).parent().parent().siblings(".description").find("li:eq("+n+")").text()+", "}if(""==i){var s=window.location.pathname.split("/");i=s[s.length-1]}""==e&&(e="",e=$(this).parent().parent().siblings(".description").find("p").text()),void 0==t&&(t=$(this).parent().parent().siblings("img").attr("src"));var o,r=i.replace(/[^a-zA-Z()]/g,""),l=r.replace(/\s/g,"-"),d=32,c=e.split(/\s/),h="";if(c.length>d){for(o=0;d>o;o++)0==o?h+=c[o]:h=h+" "+c[o];h+="...."}else h=e;var p=$(this).parent().siblings("span.judul_section").text().replace(/[^a-zA-Z()]/g,"-"),f=""!=p?p:"",u=""!=$(this).parent().siblings("span.judul_section").text()?$(this).parent().siblings("span.judul_section").text():"";loc=window.location.origin+"/website/static/fbshare/sharedfb.php",$.ajax({type:"POST",url:loc,data:{filename:l,judul:f,title_fb:i+" "+u,image_name:t,description:h,url:window.location.host,link_in_fb:a},success:function(t){var i=window.location.origin+"/website/static/fbshare/"+t;window.open("http://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(i),"sharer","width=626,height=436")}})}),$(".twshare-fullpage").on("click",function(){var t=window.location.host+window.location.pathname,i=$(document).find("title").text(),e=i+"  "+t,a=encodeURIComponent(e);window.open("https://twitter.com/intent/tweet?text="+a,"sharer","width=626,height=436")}),$(".fbshare-fullpage").on("click",function(){var t=$(".pimcore_area_static-banner").find("img").attr("src");void 0==t&&(t=$("ul.slides li").eq(1).find("img").attr("src")),void 0==t&&(t="/website/static/images/logo-Allz.png");var i=$(document).find("title").text();if(""==i&&(i=$("span.currentPage").text()),""==i&&(i=$("span.title").text()),void 0==t){var e=$(".tips-main").attr("style"),a=e.split(";"),n=a[0].split("/");for(img="",s=0;s<n.length;s++)img=img+"/"+n[s];t=img.replace(")","")}var s,o=$("meta[name=description]").attr("content"),r=void 0!=$(this).parent().siblings("a").attr("href")?window.location.host+"/"+$(this).parent().siblings("a").attr("href"):window.location.host+window.location.pathname,l=i.replace(/[^a-zA-Z()]/g,""),d=l.replace(/\s/g,"-"),c=32;if(void 0!=o){var h=o.split(/\s/),p="";if(h.length>c){for(s=0;c>s;s++)0==s?p+=h[s]:p=p+" "+h[s];p+="...."}else p=o}else p="";var f=($("span.title").text(),"");loc=window.location.origin+"/website/static/fbshare/sharedfb-page.php",$.ajax({type:"POST",url:loc,data:{filename:d,judul:"",title_fb:i+" "+f,image_name:t,description:p,url:window.location.host,link_in_fb:r},success:function(t){var i=window.location.origin+"/website/static/fbshare/"+t;window.open("http://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(i),"sharer","width=626,height=436")}})}),$(".year-pick, .month-pick, .type-pick").change(function(){var t=$(this).closest(".full-w ").attr("id"),i=$("#"+t+" .year-pick").val();i=i.substr(2);var e=$("#"+t+" .month-pick").val(),a=$("#"+t+" .type-pick").val(),n=0;$("#"+t+" .description li").hide(),$("#"+t+" .description li").each(function(){var t=$(this).find("a").attr("item");splitedItem=t.split("/");var s=!0;s=s&&(""==e||e==splitedItem[0]),s=s&&(""==i||i==splitedItem[1]),s=s&&(""==a||a==splitedItem[2]),s?($(this).show(),n++):$(this).hide()}),0!=n&&$(this).parent().parent().siblings(".description").find("ul").show()})}),$(window).load(function(){var t=$(".items-container");void 0!=t&&t.masonry({columnWidth:326,itemSelector:".item"})});