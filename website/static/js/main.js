$(document).ready(function () {
    $("#slideshow .slides").find(".slide").removeClass("hide");
    $("#best-products .slides").find(".product").removeClass("hide");
    
    $('.tab-content').hide();
    $('.tab-content:first').show();
    $('.tab-button ul li:first').addClass('active');
    $('.tab-button ul li a').click(function () {
        $('.tab-button ul li').removeClass('active');
        $(this).parent().addClass('active');
        var currentTab = $(this).attr('href');
        $('.tab-content').hide();
        $(currentTab).show();
        return false;
    });
    $('.tab_button ul li a:first').addClass('active');
    $('.tab_button ul li a').click(function () {
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
    
    $('.multiSlide').flexslider({
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
        if ($(window).width() >= 960) {
            var currentMenu = $(this);
            currentMenu.children(".menu-level2").stop(true,true).delay(500).slideDown({
                duration: 200,
                start: function () {
                    $('div.search').addClass('aktif');
                },
                step: function () {
                    if (height_search <= 40) {
                        $('div.search').css('top', $(this).height() + 38);
                    }
                },
                complete: function () {
                    $(".menu-level2").removeClass('active').hide();
                    $(this).addClass('active');
                }
            });
        } else {
            $('div.search').removeClass('aktif');
            $(".menu-level2").removeClass('active');
            $(this).children(".menu-level2").addClass('active');
        }
    });
    $('.banner').mouseleave(function () {
        if ($(window).width() >= 960) {
            $(".menu-level2").stop(true,true).delay(500).hide();
            $(".menu-level2").hide().removeClass('active');
            $('div.search').removeClass('aktif');
        } else {
            $(".menu-level2").removeClass('active');
            $('div.search').removeClass('aktif');
        }
    });
    $("nav.primary .toggle-menu").click(function () {
        if ($(window).width() < 960) $("nav.primary .menu-level1").toggleClass('active');
    });
    $('.klikVideo').on('click', function () {
        var cClass = $(this).attr("class");
        var tmpId = $(this).attr("class").substring(10);
        var splitId = tmpId.split(" ");
        var idVideo = splitId[0];
        var divId = $(this).find(".divId").val();
        $(this).siblings().removeClass("imgAktif");
        $(this).addClass("imgAktif");
        $(".hideVideo" + divId).hide();
        var x = 0;
        for (x; x < $(".assetsVideo" + divId).length; x++) {
            $(".assetsVideo" + divId).get(x).pause();
            $(".assetsVideo" + divId).get(x).currentTime = 0;
        }
        $(".hideVideo" + divId).find("source").attr("src", "");
        $(".hideVideo" + divId).find("iframe").attr("src", "");
        var src = $(".tmpVideo_" + idVideo).val();
        $("#" + idVideo).find("source").attr("src", src);
        $("#" + idVideo).find("iframe").attr("src", src);
        $("#" + idVideo).show();
    });
    $(".imgPopUp p img").on("click", function () {
        var srcImage = $(this).attr("src");
        var altImage = $(this).attr("alt");
        $(".imageModal").attr("src", srcImage);
        if (altImage != "") {
            $("#modalPopUpImage").find("h2").text(altImage);
        } else {
            var title = $(this).parent().parent().siblings("h3").find("font").text();
            $("#modalPopUpImage").find("h2").text(title);
        }
        $("#modalPopUpImage").modal("show");
    });
    $(".pimcore_area_content p img").on("click", function () {
        var srcImage = $(this).attr("src");
        var altImage = $(this).attr("alt");
        $(".imageModal").attr("src", srcImage);
        if (altImage != "") {
            $("#modalPopUpImage").find("h2").text(altImage);
        } else {
            var title = $(this).parent().parent().siblings("h3").find("font").text();
            $("#modalPopUpImage").find("h2").text(title);
        }
        $("#modalPopUpImage").modal("show");
    });
    $(".PopUpModal").on("click", function () {
        if ($(this).attr("href") == "#") {
            var text = $(this).text();
            var title = text.replace(/\s+/g, "-");
            $(this).attr("data-target", "modal-" + title);
            $("#modal-" + title).modal();
        }
    });
    $(".description a").on("click", function () {
        var href = $(this).attr("href");
        var subHref = href.substring(0, 6);
        if (subHref == "#modal") {
            modalPopUp = href.substring(6);
            $("#modal" + modalPopUp).modal('show');
        }
    });

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1);
            if (c.indexOf(name) != -1) return c.substring(name.length, c.length);
        }
        return "";
    }

    function setCookie(cname, cvalue) {
        document.cookie = cname + "=" + cvalue + ";";
    }
    $(".shop").on("click", function () {
        var href = $(this).parent().siblings("h2").find("a").attr("href");
        var namaProduk = $(this).parent().siblings("h2").find("a").text();
        var produk = href.split("/");
        var path = "/" + produk[1] + "/" + produk[2];
        var key = produk[3];
        console.log("href :"+href);
        console.log("nama :"+namaProduk);
        console.log("produk :"+produk);
        console.log("path :"+path);
        console.log("key :"+key);
        $("body").prepend("<div id='dvLoading'></div>");
        $.ajax({
            url: "save-wishlist",
            type: "POST",
            data: {
                "cookies": getCookie('userWishlist'),
                "path": path,
                "key": key,
                "produk": namaProduk,
                "asuransi": produk[2]
            },
            success: function (result) {
                var hasil = $.parseJSON(result);
                $('#dvLoading').fadeOut(2000);
                $("#dvLoading").remove();
                var z = 1;
                if (hasil[0] == "saved") {
                    $("#wishlistSuccess").find("li").remove();
                    for (z; z < hasil.length; z++) {
                        $("#wishlistSuccess").find("ul").append("<li><h3>" + hasil[z] + "</h3></li>");
                    }
                    $("#wishlistSuccess").modal("show");
                } else {
                    $("#wishlistFail").find("li").remove();
                    for (z; z < hasil.length; z++) {
                        $("#wishlistFail").find("ul").append("<li><h3>" + hasil[z] + "</h3></li>");
                    }
                    $("#wishlistFail").modal("show");
                }
            }
        });
    });
    $(".shop-smartlink").on("click", function () {
        var namaProduk = $('.title').text(); //get text by class
        var url = $(location).attr('href');
        var produk = url.split("/");
        // console.log("nama :"+namaProduk);
        // console.log("nama :"+url);
        // console.log("nama :"+produk);
        // console.log("nama :"+test);
        $("body").prepend("<div id='dvLoading'></div>");
        $.ajax({
            url: "save-wishlist",
            type: "POST",
            data: {
                "cookies": getCookie('userWishlist'),
                "produk": namaProduk,
                "asuransi": produk[4]
            },
            success: function (result) {
                var hasil = $.parseJSON(result);
                $('#dvLoading').fadeOut(2000);
                $("#dvLoading").remove();
                var z = 1;
                if (hasil[0] == "saved") {
                    $("#wishlistSuccess").find("li").remove();
                    for (z; z < hasil.length; z++) {
                        $("#wishlistSuccess").find("ul").append("<li><h3>" + hasil[z] + "</h3></li>");
                    }
                    $("#wishlistSuccess").modal("show");
                } else {
                    $("#wishlistFail").find("li").remove();
                    for (z; z < hasil.length; z++) {
                        $("#wishlistFail").find("ul").append("<li><h3>" + hasil[z] + "</h3></li>");
                    }
                    $("#wishlistFail").modal("show");
                }
            }
        });
    });
    $(".checkout").on("click", function () {
        var cookies = getCookie('userWishlist');
        window.location.href = "/checkout/" + cookies;
    });
    $(".linkWizard").on("click", function () {
        setCookie("showWizard", "Hide");
        window.location.href = "/wishlist/panduan-wishlist";
    });
    $(".close").on("click", function () {
        setCookie("showWizard", "Hide");
    });
    $("#modal-cart").on("click", function () {
        setCookie("showWizard", "Hide");
    });
    $(".linkProduk").on("click", function () {
        setCookie("showWizard", "Hide");
        window.location.href = "/produk";
    });
    $(".hapusProduk").on("click", function () {
        var tmp_cookies = window.location.pathname;
        var cookies = tmp_cookies.split("/");
        var produk = $(this).parent().siblings("td").text();
        $(this).parent().parent().remove();
        $.ajax({
            url: "/hapus-wishlist",
            type: "POST",
            data: {
                "cookies": cookies[(cookies.length) - 1],
                "produk": produk
            },
            success: function (result) {}
        });
    });
    $(".simpanWishlist").on("click", function () {
        var no_bot = $(".no-bot").val();
        var no_bot2 = $(".no-bot2").val();
        if (no_bot == "no robot" && no_bot2 == "") {
            var tmp_cookies = window.location.pathname;
            var cookies = tmp_cookies.split("/");
            var salutation = $("#salutation").val();
            var nama = $("#nama_depan").val();
            var nama_belakang = $("#nama_belakang").val();
            var email = $("#email").val();
            var no_telp = $("#no_telp").val();
            $(".eror").text('');
            if (nama.length == 0 || email.length == 0 || no_telp.length == 0 || nama_belakang.length == 0) {
                $(".eror").text('Semua kolom harus diisi.');
            } else if ($("input:checked").length == 0) {
                $(".eror").text('Anda harus menyetujui persyaratan dan ketentuan.');
            } else if (email.length != 0) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                var emailaddressVal = email;
                if (!emailReg.test(emailaddressVal)) {
                    $(".eror").text('Email tidak valid.');
                } else {
                    var z = 0;
                    var produk = new Array();
                    for (z; z < $(".produk").length; z++) {
                        produk[z] = $(".produk" + z).text();
                    }
                    var namaLengkap = nama + " " + nama_belakang;
                    $("body").prepend("<div id='dvLoading'></div>");
                    $.ajax({
                        url: "/send-email",
                        type: "POST",
                        data: {
                            "cookies": cookies[(cookies.length) - 1],
                            "produk": produk,
                            "nama": namaLengkap,
                            "email": email,
                            "no_telp": no_telp,
                            "gender": salutation
                        },
                        success: function (result) {
                            var hasil = jQuery.parseJSON(result);
                            if (hasil.status == "Kirim") {
                                window.location.href = "/terima_kasih/" + cookies[(cookies.length) - 1];
                            }
                        }
                    });
                }
            }
        }
    });
//    $(".emailshare").on("click",function(){
//        var img = $(".imgShare").attr("srcimg");
//        var title = $(".titleShare").text();
//        
//        var limit = 32;
//        var x;
//        var deskripsi = $(".descShare p").text();
//        if (deskripsi == "") {
//            deskripsi = $(".descShare p:eq(2)").text();
//        }
//        if (deskripsi == "") {
//            deskripsi = $(".descShare").text();
//        }
//        
//        var words = deskripsi.split(/\s/);
//        var desc='';
//        if (words.length > limit)
//        {
//                for(x=0;x<limit;x++)
//                {
//                        if (x==0)
//                        {
//                                desc = desc+words[x];
//                        }
//                        else
//                        {
//                                desc = desc+' '+words[x];
//                        }
//                }
//                desc = desc+'....';
//        }
//        else
//        {
//                desc = deskripsi;
//        }
//        
//        var tanggal = $(".tglShare time").text();
//        var link = window.location.host + window.location.pathname;
//        
//        $.ajax({
//            type: "POST",
//            url: "/share-email/",
//            data: {
//                postImg : img,
//                postTitle : title,
//                postDesc : desc,
//                postTanggal : tanggal,
//                postLink : link
//            },
//            success: function(reponse){
//                
//            }
//        });
//        
//    });
    $('.btn-group .twshare').on("click", function () {
        var url = window.location.host + window.location.pathname;
        var title = $(this).parent().siblings("a").find('h2.title_news').text();
        var isi = $(this).parent().parent().siblings("a").find('.description p').text();
        if (title == "") {
            title = $(this).parent().siblings('h2.title_news').find('a').text();
        }
        if (isi == "") {
            isi = $(this).parent().parent().siblings('.description').find('p').text();
        }
        if (window.location.pathname == "/produk") {
            isi = "";
            lengthLi = $(this).parent().parent().siblings('.description').find("li").length;
            for (var i = 0; i < lengthLi; i++) {
                isi = isi + $(this).parent().parent().siblings('.description').find("li:eq(" + i + ")").text() + ", ";
            }
        }
        if (title == "") {
            var split1 = (window.location.pathname).split("/");
            str = split1[split1.length - 1].toLowerCase().replace(/\b[a-z]/g, function (letter) {
                return letter.toUpperCase();
            });
            title = str;
        }
        if (isi.substring(0, 80) != "") {
            var isiText = isi.substring(0, 80) + ".... ";
        } else {
            var isiText = "";
        }
        var tweet = title + " : " + url;
        var encodeTweet = encodeURIComponent(tweet);
        window.open('https://twitter.com/intent/tweet?text=' + encodeTweet, 'sharer', 'width=626,height=436');
    });
    $('.btn-group .fbshare').on("click", function () {
        var image = $(this).parents().siblings('a').find('.image_share').attr('src');
        var reTanya = $(this).parent().siblings('a').find('h2.title_news').text();
        if (image == undefined) {
            image = $(this).parents().siblings('img.clickPage').attr('src');
        }
        if (reTanya == "") {
            reTanya = $(this).parent().siblings('h2.title_news').find('a').text();
        }
        var deskripsi = $(this).parents().parents().siblings('.description').find('p').text();
        if (deskripsi == "") {
            deskripsi = "";
            deskripsi = $(this).parents().parents().siblings('a').find('.description').find("p").text();
        }
        var link = $(this).parent().siblings('a').attr('href') != undefined ? window.location.host + '/' + $(this).parent().siblings('a').attr('href') : window.location.host + window.location.pathname;
        if (window.location.pathname == "/produk") {
            deskripsi = "";
            lengthLi = $(this).parent().parent().siblings('.description').find("li").length;
            for (var i = 0; i < lengthLi; i++) {
                deskripsi = deskripsi + $(this).parent().parent().siblings('.description').find("li:eq(" + i + ")").text() + ", ";
            }
        }
        if (reTanya == "") {
            var split1 = (window.location.pathname).split("/");
            reTanya = split1[split1.length - 1];
        }
        if (deskripsi == "") {
            deskripsi = "";
            deskripsi = $(this).parent().parent().siblings('.description').find("p").text();
        }
        if (image == undefined) {
            image = $(this).parent().parent().siblings('img').attr('src');
        }
        var name = reTanya.replace(/[^a-zA-Z()]/g, '');
        var filename = name.replace(/\s/g, '-');
        var limit = 32;
        var x;
        var words = deskripsi.split(/\s/);
        var desc = '';
        if (words.length > limit) {
            for (x = 0; x < limit; x++) {
                if (x == 0) {
                    desc = desc + words[x];
                } else {
                    desc = desc + ' ' + words[x];
                }
            }
            desc = desc + '....';
        } else {
            desc = deskripsi;
        }
        var judul = ($(this).parent().siblings("span.judul_section").text()).replace(/[^a-zA-Z()]/g, '-');
        var judul_section = judul != "" ? judul : "";
        var judul2 = $(this).parent().siblings("span.judul_section").text() != "" ? $(this).parent().siblings("span.judul_section").text() : "";
        loc = window.location.origin + '/website/static/fbshare/sharedfb.php';
        $.ajax({
            type: 'POST',
            url: loc,
            data: {
                filename: filename,
                judul: judul_section,
                title_fb: reTanya + " " + judul2,
                image_name: image,
                description: desc,
                url: window.location.host,
                link_in_fb: link
            },
            success: function (response) {
                var url = window.location.origin + '/website/static/fbshare/' + response;
                window.open('http://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), 'sharer', 'width=626,height=436');
            }
        });
    });
    $('.twshare-fullpage').on("click", function () {
        var url = window.location.host + window.location.pathname;
        var title = $(document).find("title").text();
        var tweet = title + "  " + url;
        var encodeTweet = encodeURIComponent(tweet);
        window.open('https://twitter.com/intent/tweet?text=' + encodeTweet, 'sharer', 'width=626,height=436');
    });
    $('.fbshare-fullpage').on("click", function () {
        var image = $(".pimcore_area_static-banner").find("img").attr('src');
        if (image == undefined) {
            image = $("ul.slides li").eq(1).find("img").attr('src');
        }
        if (image == undefined) {
            image = "/website/static/images/logo-Allz.png";
        }
        var reTanya = $(document).find("title").text();
        if (reTanya == "") {
            reTanya = $("span.currentPage").text();
        }
        if (reTanya == "") {
            reTanya = $("span.title").text();
        }
        if (image == undefined) {
            var exp = $(".tips-main").attr('style');
            var tmp = exp.split(";");
            var url = tmp[0].split("/");
            img = "";
            for (x = 0; x < url.length; x++) {
                img = img + "/" + url[x];
            }
            image = img.replace(")", "");
        }
        var deskripsi = $('meta[name=description]').attr('content');
        var link = $(this).parent().siblings('a').attr('href') != undefined ? window.location.host + '/' + $(this).parent().siblings('a').attr('href') : window.location.host + window.location.pathname;
        var name = reTanya.replace(/[^a-zA-Z()]/g, '');
        var filename = name.replace(/\s/g, '-');
        var limit = 32;
        var x;
        if (deskripsi != undefined) {
            var words = deskripsi.split(/\s/);
            var desc = '';
            if (words.length > limit) {
                for (x = 0; x < limit; x++) {
                    if (x == 0) {
                        desc = desc + words[x];
                    } else {
                        desc = desc + ' ' + words[x];
                    }
                }
                desc = desc + '....';
            } else {
                desc = deskripsi;
            }
        } else {
            desc = "";
        }
        var judul_section = $("span.title").text();
        var judul2 = "";
        loc = window.location.origin + '/website/static/fbshare/sharedfb-page.php';
        $.ajax({
            type: 'POST',
            url: loc,
            data: {
                filename: filename,
                judul: "",
                title_fb: reTanya + " " + judul2,
                image_name: image,
                description: desc,
                url: window.location.host,
                link_in_fb: link
            },
            success: function (response) {
                var url = window.location.origin + '/website/static/fbshare/' + response;
                window.open('http://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(url), 'sharer', 'width=626,height=436');
            }
        });
    });
    $('.year-pick, .month-pick, .type-pick').change(function () {
        var idFilterSection = $(this).closest('.full-w ').attr('id');
        var year = $('#' + idFilterSection + " .year-pick").val();
        year = year.substr(2);
        var month = $('#' + idFilterSection + " .month-pick").val();
        var typeData = $('#' + idFilterSection + " .type-pick").val();
        var x = 0;
        $('#' + idFilterSection + " .description li").hide();
        $('#' + idFilterSection + " .description li").each(function () {
            var itemAttr = $(this).find('a').attr('item');
            splitedItem = itemAttr.split('/');
            var visible = true;
            visible = visible && (month == '' || month == splitedItem[0]);
            visible = visible && (year == '' || year == splitedItem[1]);
            visible = visible && (typeData == '' || typeData == splitedItem[2]);
            if (visible) {
                $(this).show();
                x++;
            } else {
                $(this).hide();
            }
        });
        if (x != 0) {
            $(this).parent().parent().siblings('.description').find('ul').show();
        }
    });
    if (window.location.pathname == "/") {
	$(".slides").find("li").first().next().find("div.place-bg").find("div").first().addClass("notepadKiri");
	// $(".slides").find("li").first().next().find("div.place-bg").append("<div class='notepadKanan'><img src='/website/static/images/logo125/Allianz125_Standard_logo_White.png' /></div>");
	$(".clone").addClass("temp");
	$(".clone:first").removeClass("temp");
	$("li.temp").find("div.place-bg").find("div").addClass("notepadKiri");
	// $(".temp").find("div.place-bg").append("<div class='notepadKanan'><img src='/website/static/images/logo125/Allianz125_Standard_logo_White.png' /></div>");
    }
});
//$(window).bind("load", function() {
//    $("#slideshow .slides").addClass("hide");
//    $("#slideshow .slides").first().removeClass("hide");
//});
$(window).load(function () {
    var $container = $('.items-container');
    if ($container != undefined) {
        $container.masonry({
            columnWidth: 326,
            itemSelector: '.item'
        });
    }
});