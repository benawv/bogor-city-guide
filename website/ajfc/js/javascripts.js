$( document ).ready(function(){

    // console.log( 'Document is ready, my lord.' );

    responsiveNewsFeedBox();
    resizePageWrapper();

    if( $( '.faq-item' ).length > 0 )
    {
        $( '.faq-item' ).each(function(index, value){
            $( this ).find( '.faq-item--question' ).click(function(e){
                var answerHeight = $( this ).next().outerHeight();
                $( this ).next().stop().slideToggle( 'fast', function(){
                    $( this ).parent().toggleClass( 'active' );
                    resizePageWrapper();
                });
                e.preventDefault();
                return false;
            });
        });
    }

    if( $( '.image-hotspot--item' ).length > 0 )
    {
        $( '.image-hotspot--item' ).each(function(index, value){

            $( this ).find( 'a' ).click(function(e){
                e.preventDefault();
                // $( this ).toggleClass( 'active' );
                // $( this ).next().fadeToggle( 'fast', function(){});
                return false;
            });

            $( this ).hover(function(){
                console.log( 'shit' );
                $( this ).find( 'a' ).toggleClass( 'active' );
                $( this ).find( 'a' ).next().stop().fadeIn( 'fast', function(){});
                return false;
            },function(){
                console.log( 'ass' );
                $( this ).find( 'a' ).toggleClass( 'active' );
                $( this ).find( 'a' ).next().stop().fadeOut( 'fast', function(){});
                return false;
            });
        });
    }

    /**
     * Gallery items
     */

    if( $( 'section.gallery-wrapper .gallery-item' ).length > 0 )
    {
        $( 'section.gallery-wrapper .gallery-item' ).each(function(index, value){
            $( this ).find( 'a.gallery-item--image' ).click(function(e){
                if( $( this ).attr( 'href' ) == '#' )
                {
                    e.preventDefault();
                    return false;
                }
            });
        });
    }


});

$( window ).resize(function(){
    responsiveNewsFeedBox();
    resizePageWrapper();
});

$( window ).load(function(){
    responsiveNewsFeedBox();
    resizePageWrapper();
});

function resizePageWrapper( additionalHeight )
{

    /**
     * Auto height for page-wrapper-outer
     */

    if( additionalHeight == undefined )
    {
        additionalHeight = 0;
    }

    if( $( '.page-wrapper-outer > .page-wrapper' ).length > 0 )
    {
        var newHeight = $( '.page-wrapper-outer > .page-wrapper' ).outerHeight() - 160 + additionalHeight;
        $( '.page-wrapper-outer' ).stop().animate({
            'min-height': newHeight + 'px'
        }, 300);
    }
}

function responsiveNewsFeedBox()
{
    /**
     * Responsive news feed grid box
     */

    if( $( '.news-feeds .news-feeds--box' ).length > 0 )
    {
        $( '.news-feeds .news-feeds--box' ).each(function(index,value){

            var window_w = $( window ).outerWidth();
            var imageBox = $( this ).find( 'div[class^="col-"].image' );
            var contentBox = $( this ).find( '.news-feeds--box---content' );

            var imageBox_h = imageBox.outerHeight();
            var contentBox_h = contentBox.outerHeight();

            if( window_w >= 991 )
            {
                if( contentBox_h <= imageBox_h )
                {
                    contentBox.css( 'min-height', imageBox_h );
                    contentBox.css( 'max-height', imageBox_h );
                    contentBox.css( 'height', imageBox_h );
                }
                else
                {
                    imageBox.css( 'min-height', contentBox_h );
                    imageBox.css( 'max-height', contentBox_h );
                    imageBox.css( 'height', contentBox_h );
                }
            }
            else
            {
                contentBox.css( 'min-height', 0 );
                contentBox.css( 'max-height', 'none' );
                contentBox.css( 'height', 'auto' );
            }

            // console.log( window_w );
            // console.log( imageBox_h + '/' + contentBox_h );
        });
    }
}
