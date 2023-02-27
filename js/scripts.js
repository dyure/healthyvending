jQuery(function ($) {
    "use strict";
// Custom jQuery Code Here
    // to open mobile menu
    $('.menu_burger').click (function(event){
        $('.nav_mobile, .nav_mobile_close').toggleClass('active');
    });
    // to close mobile menu
    $('.nav_mobile_close').click (function(event){
        $('.nav_mobile, .nav_mobile_close').toggleClass('active');
    });
});
