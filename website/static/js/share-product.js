$(document).ready(function(){
    $('.twshare').click(function(){
                var url = window.location.host+window.location.pathname;
                var title = $(this).parent().siblings('h2.title_news').find('a').text();
                
                var tweet = title+" "+url;
                var encodeTweet = encodeURIComponent(tweet);
                window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
	});
	
	$('.fbshare').click(function(){
		var image = $(this).parents().siblings('a').find('.image_share').attr('src');
		
		var name = $(this).parent().siblings('h2.title_news').find('a').text();
		var filename = name.replace(/\s/g,'-');
		
                var deskripsi = $(this).parents().parents().siblings('.description').find('.des').text();
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
        loc = window.location.origin+'/website/static/fbshare/sharedfb.php';
		$.ajax({
				type: 'POST',
				url: loc,
				data: {
					filename: filename,
					image_name: image,
					description: desc,
					url: window.location.host,
					link_in_fb : window.location.host+window.location.pathname
				},
				success: function(response)
				{
					var url = window.location.origin+'/website/static/fbshare/'+response;
					window.open('http://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(url), 'sharer', 'width=626,height=436');
				}
			});
	});
});