(function($) {
  let transitionTime = 400;

  //Footer drop down menu only on mobile//
  $('.footer-navigation').on('click', function() {
    if ($(window).width() < 970) {
      $(this)
        .children('.footer-menu-container')
        .slideToggle(transitionTime);
    }
  });
})(jQuery);
