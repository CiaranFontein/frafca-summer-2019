(function ($) {
    let transitionTime = 400;

    //Footer drop down menu//

    $('.footer-navigation').on('click', function () {
        $(this).children('.footer-menu-container').slideToggle(transitionTime);
    });








})(jQuery);