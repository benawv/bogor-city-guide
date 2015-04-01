$( document ).ready(function(){

    // console.log( 'Document is ready, my lord.' );

    responsiveNewsFeedBox();

    resizePageWrapper();

    if( $( '.faq-item' ).length > 0 )
    {
        $( '.faq-item' ).each(function(index, value){
            $( this ).find( '.faq-item--question' ).click(function(e){
                $( this ).next().stop().slideToggle( 'fast', function(){
                    $( this ).parent().toggleClass( 'active' );
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


});

$( window ).resize(function(){
    responsiveNewsFeedBox();
    resizePageWrapper();
});

function resizePageWrapper()
{

    /**
     * Auto height for page-wrapper-outer
     */

    if( $( '.page-wrapper-outer > .page-wrapper' ).length > 0 )
    {
        var newHeight = $( '.page-wrapper-outer > .page-wrapper' ).outerHeight() - 160;
        $( '.page-wrapper-outer' ).css({
            'min-height': newHeight + 'px'
        });
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

            var imageBox = $( this ).find( 'div[class^="col-"].image' );
            var contentBox = $( this ).find( '.news-feeds--box---content' );

            var imageBox_h = imageBox.outerHeight();
            var contentBox_h = contentBox.outerHeight();

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
            // console.log( imageBox_h + '/' + contentBox_h );
        });
    }
}
