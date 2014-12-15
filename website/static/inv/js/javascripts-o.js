$( document ).ready(function(){
    
    // Open overlay
    
    if( $( 'div.tooltips > a[class*="tooltip-"]' ).length > 0 )
    {
        $( 'div.tooltips > a[class*="tooltip-"]' ).click(function(){
            var href = $( this ).attr( 'href' );
            var prey = $( 'div.calc-overlay#' + href );
            //console.log( 'href: ' + href );
            if( prey.length > 0 )
            {
                prey.stop().fadeIn( 'fast', function(){
                    // do nothing
                });
            }
            return false;
        });
    }
    
    // Close overlay
    
    $( 'a.calc-overlay-close' ).click(function(){
        $( this ).parent().parent().parent().stop().fadeOut( 'fast', function(){
            // do nothing
        });
        return false;
    });
    
    

});