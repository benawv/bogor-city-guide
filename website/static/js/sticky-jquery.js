$(document).ready(function() {  
var stickyNavTop = $('.pagenav').offset().top;  
  
var stickyNav = function(){  
var scrollTop = $(window).scrollTop();  
       
if (scrollTop > stickyNavTop) {   
    $('.pagenav').addClass('nav-sticky');  
} else {  
    $('.pagenav').removeClass('nav-sticky');   
}  
};  
  
stickyNav();  
  
$(window).scroll(function() {  
    stickyNav();  
});  
}); 