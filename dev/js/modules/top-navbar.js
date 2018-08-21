import '../../scss/modules/top-navbar.scss';

$(document).ready(function(){
    top_navbar_sticky();
    $(window).scroll(function () {
        top_navbar_sticky();
    });
});



function top_navbar_sticky(){
    let scrolltop = $(window).scrollTop(),
        navbar = $('.top-navbar-container');
    if (scrolltop > 300){
        navbar.addClass('scrolled');
    } else {
        navbar.removeClass('scrolled');
    }
}