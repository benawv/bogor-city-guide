/**
 * ./js/main.js
 * Main JavaScript File
 * Created by Falmesino Abdul Hamid(@falmesino)
 */


function sidebarResize()
{
    if($('.sidebar').length > 0)
    {
        var sidebar = $('.sidebar');
        var sidebarHeight = sidebar.outerHeight();
        var windowHeight = $(window).outerHeight();
        var windowWidth = $(window).outerWidth();
        if(windowWidth > 991)
        {
            if(sidebarHeight < windowHeight)
            {
                sidebar.css('height', windowHeight + 'px');
            }
        }
        else
        {
            sidebar.css('height','auto');
        }
    }
}

function overlayNotificationResize()
{
    if($('.overlay-notifications').length > 0)
    {
        var el = $('.overlay-notifications');
        var el_inner = el.find('.overlay-notifications__inner');
        var windowHeight = $(window).outerHeight();
        el_inner.css({
            'min-height': windowHeight + 'px',
            'max-height': windowHeight + 'px',
            'height': windowHeight + 'px'
        });
    }
}

function overlaySidebarResize()
{
    if($('.mobile-sidebar').length > 0)
    {
        var el = $('.mobile-sidebar');
        var el_inner = el.find('.mobile-sidebar__inner');
        var windowHeight = $(window).outerHeight();
        el_inner.css({
            'min-height': windowHeight + 'px',
            'max-height': windowHeight + 'px',
            'height': windowHeight + 'px'
        });
    }
}

function resizeStuffs()
{
    sidebarResize();
    overlayNotificationResize();
    overlaySidebarResize();
}

function toggleMobileSidebars(el, elb)
{
    el = $(el);
    elb = $(elb);
    if(el.hasClass('active'))
    {
        el.removeClass('active');
    }
    else
    {
        if(elb.hasClass('active'))
        {
            elb.removeClass('active');
        }
        el.addClass('active');
    }
}

$(function(){

    console.log( 'Document is ready, my lord.' );

    resizeStuffs();
    
    /**
     * Getting Bootstrap Tabs to Play Nice with Masonry
     * http://www.sitepoint.com/bootstrap-tabs-play-nice-with-masonry/
     */
    var $container = $('.masonry-container');
    $container.masonry({
        columnWidth: '.masonry-item',
        itemSelector: '.masonry-item'
    });
    
    $('#btnMenuToggle').on('click', function(e){
        e.preventDefault();
        toggleMobileSidebars('#mobileSidebar', '#overlayNotifications');
        return false;
    });
    
    $('#btnNotificationToggle').on('click', function(e){
        e.preventDefault();
        toggleMobileSidebars('#overlayNotifications', '#mobileSidebar');
        return false;
    });

});

$(window).resize(function(){
    resizeStuffs();
});
