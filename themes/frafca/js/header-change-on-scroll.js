(function($) {
  let $header = $('.site-header');
  $(document).on('scroll', function() {
    console.log($('.frafca-hero-image').innerHeight());
    if ($(window).scrollTop() > $('.frafca-hero-image').innerHeight()) {
      $header.addClass('darkmode');
    } else {
      $header.removeClass('darkmode');
    }
  });
})(jQuery);
