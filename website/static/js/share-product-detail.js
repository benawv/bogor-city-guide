$(document).ready(function(){
    $('.twshare').click(function(){
            
            var detail_name = $('.breadcrumb a').text();
            var url = window.location.host+window.location.pathname;
            var title = $(this).parent().siblings('h2.title_news').text();
            
            var tweet = title+" "+detail_name+" "+url;
            var encodeTweet = encodeURIComponent(tweet);
            window.open('https://twitter.com/intent/tweet?text='+encodeTweet, 'sharer', 'width=626,height=436');
    });
    
    $('.fbshare').click(function(){
            var image = $(this).parents().siblings('a').find('.image_share').attr('src');
            var image2 = $(this).parents().siblings('.flex-viewport').find('.image_share').attr('src');
            if (image==undefined) {
                    image = image2;
            }
            else
            {
                    image = image;
            }
            
	    var deskripsi = '';
            var deskripsi1 = $(this).parents().parents().siblings('.description').find('.des').text();
            var deskripsi2 = $(this).parents().parents().siblings('.flex-viewport').find('.clone .des').text();
            if (deskripsi1=='') {
                    deskripsi = deskripsi2;
            }
            else
            {
                    deskripsi = deskripsi1;
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
			
            var detail_name = $('.breadcrumb a').text();
            
            var name = $(this).parent().siblings('h2.title_news').text();
            var tanda_tanya = name.replace("?",'');
	    var filename = tanda_tanya.replace(/\s/g,'-');
            
	    $.ajax({
                            type: 'POST',
                            url: 'sharedfb_detail.php',
                            data: {
                                    filename: filename,
                                    detail_name: detail_name,
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