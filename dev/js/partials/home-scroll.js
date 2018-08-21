$(document).ready(function () {
    let menu_item = $('.menu-item');

    $(menu_item).click(function () {
        if ($(this).hasClass('scroll-to')){
            let scroll_target,
                classList = $(this)[0].classList;

            for (var i = 0; i < classList.length; i++){
                if (classList[i].indexOf('section-') === -1){
                    continue;
                }
                scroll_target = classList[i].replace('section-', '');
                $([document.documentElement, document.body]).animate({
                    scrollTop: $('.' + scroll_target).offset().top - 100
                }, 500);
            }
        }
    });
});