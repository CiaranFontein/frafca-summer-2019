(function($) {
  let $header = $('.site-header');
  $(document).on('scroll', function() {
    if ($(window).scrollTop() > 0) {
      if ($(window).scrollTop() > $('.frafca-hero-image').innerHeight()) {
        $header.addClass('darkmode');
        $header.removeClass('mediummode');
      } else {
        $header.addClass('mediummode');
        $header.removeClass('darkmode');
      }
    } else {
      $header.removeClass('darkmode');
      $header.removeClass('mediummode');
    }
  });
})(jQuery);
