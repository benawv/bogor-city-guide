$(document).ready(function(){function i(i){for(var t=i+"=",e=document.cookie.split(";"),a=0;a<e.length;a++){for(var n=e[a];" "==n.charAt(0);)n=n.substring(1);if(-1!=n.indexOf(t))return n.substring(t.length,n.length)}return""}function t(i,t){document.cookie=i+"="+t+";"}$(".tab-content").hide(),$(".tab-content:first").show(),$(".tab-button ul li:first").addClass("active"),$(".tab-button ul li a").click(function(){$(".tab-button ul li").removeClass("active"),$(this).parent().addClass("active");var i=$(this).attr("href");return $(".tab-content").hide(),$(i).show(),!1}),$(".tab_button ul li a:first").addClass("active"),$(".tab_button ul li a").click(function(){$(".tab_button ul li a").removeClass("active"),$(this).addClass("active");var i=$(this).attr("href");return $(".tab-content").hide(),$(i).show(),!1}),$("#slideshow").flexslider({animation:"slide"}),$("#best-products").flexslider({animation:"slide",slideshowSpeed:6e3}),$("#item-claim,#item-faq,#item-unggul").flexslider({animation:"slide",slideshowSpeed:6e3}),$(".menu-level1 > ul > li").hover(function(){var i=$("div.search").position().top;if($(window).width()>=960){var t=$(this);t.children(".menu-level2").slideDown({duration:200,start:function(){$("div.search").addClass("aktif")},step:function(){40>=i&&$("div.search").css("top",$(this).height()+38)},complete:function(){$(".menu-level2").removeClass("active").hide(),$(this).addClass("active")}})}else $("div.search").removeClass("aktif"),$(".menu-level2").removeClass("active"),$(this).children(".menu-level2").addClass("active")}),$(".primary").mouseleave(function(){$(window).width()>=960?($(".menu-level2").hide().removeClass("active"),$("div.search").removeClass("aktif")):($(".menu-level2").removeClass("active"),$("div.search").removeClass("aktif"))}),$("nav.primary .toggle-menu").click(function(){$(window).width()<960&&$("nav.primary .menu-level1").toggleClass("active")}),$(".klikVideo").on("click",function(){var i=($(this).attr("class"),$(this).attr("class").substring(10)),t=i.split(" "),e=t[0],a=$(this).find(".divId").val();$(this).siblings().removeClass("imgAktif"),$(this).addClass("imgAktif"),$(".hideVideo"+a).hide();var n=0;for(n;n<$(".assetsVideo"+a).length;n++)$(".assetsVideo"+a).get(n).pause(),$(".assetsVideo"+a).get(n).currentTime=0;$(".hideVideo"+a).find("source").attr("src",""),$(".hideVideo"+a).find("iframe").attr("src","");var s=$(".tmpVideo_"+e).val();$("#"+e).find("source").attr("src",s),$("#"+e).find("iframe").attr("src",s),$("#"+e).show()}),$(".imgPopUp p img").on("click",function(){var i=$(this).attr("src"),t=$(this).attr("alt");if($(".imageModal").attr("src",i),""!=t)$("#modalPopUpImage").find("h2").text(t);else{var e=$(this).parent().parent().siblings("h3").find("font").text();$("#modalPopUpImage").find("h2").text(e)}$("#modalPopUpImage").modal("show")}),$(".pimcore_area_content p img").on("click",function(){var i=$(this).attr("src"),t=$(this).attr("alt");if($(".imageModal").attr("src",i),""!=t)$("#modalPopUpImage").find("h2").text(t);else{var e=$(this).parent().parent().siblings("h3").find("font").text();$("#modalPopUpImage").find("h2").text(e)}$("#modalPopUpImage").modal("show")}),$(".PopUpModal").on("click",function(){if("#"==$(this).attr("href")){var i=$(this).text(),t=i.replace(/\s+/g,"-");$(this).attr("data-target","modal-"+t),$("#modal-"+t).modal()}}),$(".description a").on("click",function(){var i=$(this).attr("href"),t=i.substring(0,6);"#modal"==t&&(modalPopUp=i.substring(6),$("#modal"+modalPopUp).modal("show"))}),$(".shop").on("click",function(){var t=$(this).parent().siblings("h2").find("a").attr("href"),e=$(this).parent().siblings("h2").find("a").text(),a=t.split("/"),n="/"+a[1]+"/"+a[2],s=a[3];$("body").prepend("<div id='dvLoading'></div>"),$.ajax({url:"save-wishlist",type:"POST",data:{cookies:i("userWishlist"),path:n,key:s,produk:e,asuransi:a[2]},success:function(i){var t=$.parseJSON(i);$("#dvLoading").fadeOut(2e3),$("#dvLoading").remove();var e=1;if("saved"==t[0]){for($("#wishlistSuccess").find("li").remove(),e;e<t.length;e++)$("#wishlistSuccess").find("ul").append("<li><h3>"+t[e]+"</h3></li>");$("#wishlistSuccess").modal("show")}else{for($("#wishlistFail").find("li").remove(),e;e<t.length;e++)$("#wishlistFail").find("ul").append("<li><h3>"+t[e]+"</h3></li>");$("#wishlistFail").modal("show")}}})}),$(".checkout").on("click",function(){var t=i("userWishlist");window.location.href="/checkout/"+t}),$(".linkWizard").on("click",function(){t("showWizard","Hide"),window.location.href="/wishlist/panduan-wishlist"}),$(".close").on("click",function(){t("showWizard","Hide")}),$("#modal-cart").on("click",function(){t("showWizard","Hide")}),$(".linkProduk").on("click",function(){t("showWizard","Hide"),window.location.href="/produk"}),$(".hapusProduk").on("click",function(){var i=window.location.pathname,t=i.split("/"),e=$(this).parent().siblings("td").text();$(this).parent().parent().remove(),$.ajax({url:"/hapus-wishlist",type:"POST",data:{cookies:t[t.length-1],produk:e},success:function(){}})}),$(".simpanWishlist").on("click",function(){var i=$(".no-bot").val(),t=$(".no-bot2").val();if("no robot"==i&&""==t){var e=window.location.pathname,a=e.split("/"),n=$("#salutation").val(),s=$("#nama_depan").val(),o=$("#nama_belakang").val(),l=$("#email").val(),r=$("#no_telp").val();if($(".eror").text(""),0==s.length||0==l.length||0==r.length||0==o.length)$(".eror").text("Semua kolom harus diisi.");else if(0==$("input:checked").length)$(".eror").text("Anda harus menyetujui persyaratan dan ketentuan.");else if(0!=l.length){var d=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/,c=l;if(d.test(c)){var h=0,p=new Array;for(h;h<$(".produk").length;h++)p[h]=$(".produk"+h).text();var f=s+" "+o;$("body").prepend("<div id='dvLoading'></div>"),$.ajax({url:"/send-email",type:"POST",data:{cookies:a[a.length-1],produk:p,nama:f,email:l,no_telp:r,gender:n},success:function(i){var t=jQuery.parseJSON(i);"Kirim"==t.status&&(window.location.href="/terima_kasih/"+a[a.length-1])}})}else $(".eror").text("Email tidak valid.")}}}),$(".btn-group .twshare").on("click",function(){var i=window.location.host+window.location.pathname,t=$(this).parent().siblings("a").find("h2.title_news").text(),e=$(this).parent().parent().siblings("a").find(".description p").text();if(""==t&&(t=$(this).parent().siblings("h2.title_news").find("a").text()),""==e&&(e=$(this).parent().parent().siblings(".description").find("p").text()),"/produk"==window.location.pathname){e="",lengthLi=$(this).parent().parent().siblings(".description").find("li").length;for(var a=0;lengthLi>a;a++)e=e+$(this).parent().parent().siblings(".description").find("li:eq("+a+")").text()+", "}if(""==t){var n=window.location.pathname.split("/");str=n[n.length-1].toLowerCase().replace(/\b[a-z]/g,function(i){return i.toUpperCase()}),t=str}if(""!=e.substring(0,80)){e.substring(0,80)+".... "}else;var s=t+" : "+i,o=encodeURIComponent(s);window.open("https://twitter.com/intent/tweet?text="+o,"sharer","width=626,height=436")}),$(".btn-group .fbshare").on("click",function(){var i=$(this).parents().siblings("a").find(".image_share").attr("src"),t=$(this).parent().siblings("a").find("h2.title_news").text();void 0==i&&(i=$(this).parents().siblings("img.clickPage").attr("src")),""==t&&(t=$(this).parent().siblings("h2.title_news").find("a").text());var e=$(this).parents().parents().siblings(".description").find("p").text();""==e&&(e="",e=$(this).parents().parents().siblings("a").find(".description").find("p").text());var a=void 0!=$(this).parent().siblings("a").attr("href")?window.location.host+"/"+$(this).parent().siblings("a").attr("href"):window.location.host+window.location.pathname;if("/produk"==window.location.pathname){e="",lengthLi=$(this).parent().parent().siblings(".description").find("li").length;for(var n=0;lengthLi>n;n++)e=e+$(this).parent().parent().siblings(".description").find("li:eq("+n+")").text()+", "}if(""==t){var s=window.location.pathname.split("/");t=s[s.length-1]}""==e&&(e="",e=$(this).parent().parent().siblings(".description").find("p").text()),void 0==i&&(i=$(this).parent().parent().siblings("img").attr("src"));var o,l=t.replace(/[^a-zA-Z()]/g,""),r=l.replace(/\s/g,"-"),d=32,c=e.split(/\s/),h="";if(c.length>d){for(o=0;d>o;o++)0==o?h+=c[o]:h=h+" "+c[o];h+="...."}else h=e;var p=$(this).parent().siblings("span.judul_section").text().replace(/[^a-zA-Z()]/g,"-"),f=""!=p?p:"",u=""!=$(this).parent().siblings("span.judul_section").text()?$(this).parent().siblings("span.judul_section").text():"";loc=window.location.origin+"/website/static/fbshare/sharedfb.php",$.ajax({type:"POST",url:loc,data:{filename:r,judul:f,title_fb:t+" "+u,image_name:i,description:h,url:window.location.host,link_in_fb:a},success:function(i){var t=window.location.origin+"/website/static/fbshare/"+i;window.open("http://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(t),"sharer","width=626,height=436")}})}),$(".twshare-fullpage").on("click",function(){var i=window.location.host+window.location.pathname,t=$(document).find("title").text(),e=t+"  "+i,a=encodeURIComponent(e);window.open("https://twitter.com/intent/tweet?text="+a,"sharer","width=626,height=436")}),$(".fbshare-fullpage").on("click",function(){var i=$(".pimcore_area_static-banner").find("img").attr("src");void 0==i&&(i=$("ul.slides li").eq(1).find("img").attr("src")),void 0==i&&(i="/website/static/images/logo-Allz.png");var t=$(document).find("title").text();if(""==t&&(t=$("span.currentPage").text()),""==t&&(t=$("span.title").text()),void 0==i){var e=$(".tips-main").attr("style"),a=e.split(";"),n=a[0].split("/");for(img="",s=0;s<n.length;s++)img=img+"/"+n[s];i=img.replace(")","")}var s,o=$("meta[name=description]").attr("content"),l=void 0!=$(this).parent().siblings("a").attr("href")?window.location.host+"/"+$(this).parent().siblings("a").attr("href"):window.location.host+window.location.pathname,r=t.replace(/[^a-zA-Z()]/g,""),d=r.replace(/\s/g,"-"),c=32;if(void 0!=o){var h=o.split(/\s/),p="";if(h.length>c){for(s=0;c>s;s++)0==s?p+=h[s]:p=p+" "+h[s];p+="...."}else p=o}else p="";var f=($("span.title").text(),"");loc=window.location.origin+"/website/static/fbshare/sharedfb-page.php",$.ajax({type:"POST",url:loc,data:{filename:d,judul:"",title_fb:t+" "+f,image_name:i,description:p,url:window.location.host,link_in_fb:l},success:function(i){var t=window.location.origin+"/website/static/fbshare/"+i;window.open("http://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(t),"sharer","width=626,height=436")}})}),$(".year-pick, .month-pick, .type-pick").change(function(){var i=$(this).closest(".full-w ").attr("id"),t=$("#"+i+" .year-pick").val();t=t.substr(2);var e=$("#"+i+" .month-pick").val(),a=$("#"+i+" .type-pick").val(),n=0;$("#"+i+" .description li").hide(),$("#"+i+" .description li").each(function(){var i=$(this).find("a").attr("item");splitedItem=i.split("/");var s=!0;s=s&&(""==e||e==splitedItem[0]),s=s&&(""==t||t==splitedItem[1]),s=s&&(""==a||a==splitedItem[2]),s?($(this).show(),n++):$(this).hide()}),0!=n&&$(this).parent().parent().siblings(".description").find("ul").show()}),"/"==window.location.pathname&&($(".slides").find("li").first().next().find("div.place-bg").find("div").first().addClass("notepadKiri"),$(".slides").find("li").first().next().find("div.place-bg").append("<div class='notepadKanan'><img src='/website/static/images/logo125/Allianz125_Standard_logo_White.png' /></div>"),$(".clone").addClass("temp"),$(".clone:first").removeClass("temp"),$("li.temp").find("div.place-bg").find("div").addClass("notepadKiri"),$(".temp").find("div.place-bg").append("<div class='notepadKanan'><img src='/website/static/images/logo125/Allianz125_Standard_logo_White.png' /></div>"))}),$(window).load(function(){var i=$(".items-container");void 0!=i&&i.masonry({columnWidth:326,itemSelector:".item"})});