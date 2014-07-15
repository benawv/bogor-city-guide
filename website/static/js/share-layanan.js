$(document).ready(function(){
    $('.twshare').click(function(){
                var url = window.location.host+window.location.pathname;
                var title = $(this).parent().siblings('h2.title_news').find('a').text();
                
                var tweet = title+" "+url;
                var encodeTweet = encodeURIComponent(tweet);
                window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
	});
	
	$('.fbshare').click(function(){
		var image='';
		var image1 = $(this).parent().parent().siblings('a').find('.image_share').attr('src');
		var image2 = $(this).parent().parent().siblings('div').find('img.image_share').attr('src');
		var image3 = $(this).parent().parent().parent().siblings('a').find('.image_share').attr('src');
		var image4 = $(this).parent().parent().parent().siblings('div').find('a').find('.image_share').attr('src');
		
		if (image1 != undefined) {
		    image = image1;
		}
		if (image2 != undefined) {
		    image = image2;
		}
		if (image3 != undefined)
		{
		    image = image3;
		}
		if (image4 != undefined && image2 == undefined)
		{
		    image = image4;
		}
		
		var name = $(this).parent().siblings('h2.title_news').find('a').text();
		var filename = name.replace(/\s/g,'-');
		
		var deskripsi = '';
                var deskripsi1 = $(this).parent().parent().siblings('div').find('.description .des').text();
		var deskripsi2 = $(this).parent().parent().parent().siblings('.description').find('.des').text();
		var deskripsi3 = $(this).parent().parent().parent().siblings('div').find('.description').find('.des').text();
                
		if (deskripsi1 != '') {
		    deskripsi = deskripsi1;
		}
		if (deskripsi2 != '') {
		    deskripsi = deskripsi2;
		}
		if (deskripsi3 != '' && deskripsi1=='') {
		    deskripsi = deskripsi3;
		}
		
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
		
		$.ajax({
				type: 'POST',
				url: 'sharedfb.php',
				data: {
					filename: filename,
					image_name: image,
					description: desc,
					url: window.location.host,
					link_in_fb : window.location.host+window.location.pathname
				},
				success: function(response)
				{
					var url = window.location.host+'/fbshare/'+response;
					window.open('http://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'width=626,height=436');
				}
			});
	});
});