/*$(document).ready(function(){
	$('.btn-group .twshare').click(function(){
        var url = window.location.host+window.location.pathname;
        
        var title = $(this).parent().siblings("a").find('h2.title_news').text();
        var isi = $(this).parent().parent().siblings("a").find('.description p').text();
        //HOME
        if(title == "")
		{
        	title = $(this).parent().siblings('h2.title_news').find('a').text();
		}
        if(isi == "")
		{
        	isi = $(this).parent().parent().siblings('.description').find('p').text();
		}
        //END HOME
        var tweet = title+" - "+isi.substring(0,50)+".... "+url;
        var encodeTweet = encodeURIComponent(tweet);
        window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
	});
	
	$('.btn-group .fbshare').click(function(){
		var image = $(this).parents().siblings('a').find('.image_share').attr('src');
		var reTanya = $(this).parent().siblings('a').find('h2.title_news').text();
		//HOME
		if(image == undefined)
		{
			image = $(this).parents().siblings('img.clickPage').attr('src');
		}
		if(reTanya == "")
		{
			reTanya = $(this).parent().siblings('h2.title_news').find('a').text();
		}
		//END HOME
		
		var name = reTanya.replace("?","");
		var filename = name.replace(/\s/g,'-');
		
        var deskripsi = $(this).parents().parents().parents().find('.description').find('p').text();
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
        console.log(image);
        console.log(name);
        console.log(filename);
        console.log(desc);
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
});*/