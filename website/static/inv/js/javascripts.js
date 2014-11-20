/**
 * js/javascripts.js
 * Allianz Micro Site
 */

$(function(){

    //console.log( 'Document is ready, my Lord.' );

    /* Resize image to parent script */
    $( 'img.resizeToParent' ).resizeToParent();
    $( 'img.resizeToParent' ).parent().css( 'overflow', 'hidden' );

    $( window ).resize(function(){

        var outerWidth = $( window ).outerWidth();

        console.log( 'Resizing window :: ' + outerWidth );

        var imgHeight = $( 'section#grids img.resizeToParent' ).outerHeight();

        $( 'section#grids' ).css( 'max-height', imgHeight * 2 + 'px' );
        $( 'section#grids' ).css( 'overflow', 'hidden' );

        console.log( 'Grid image height :: ' + imgHeight );

    });

});
