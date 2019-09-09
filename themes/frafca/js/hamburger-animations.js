(function($) {
  let menuOpen = false;
  let $mobileHeaderMenu = $('.mobile-header-menu');

  let scrollPosition = [
    self.pageXOffset ||
      document.documentElement.scrollLeft ||
      document.body.scrollLeft,
    self.pageYOffset ||
      document.documentElement.scrollTop ||
      document.body.scrollTop
  ];
  let html = $('html');
  html.data('scroll-position', scrollPosition);

  // Header hamburger drop down menu only on mobile //
  $('.hamburger-icon').on('click', function() {
    $mobileHeaderMenu.animate({ width: 'toggle' }, 350);

    if (menuOpen) {
      menuOpen = false;
      $mobileHeaderMenu.removeClass('mobile-header-menu--open');
      lockScrollPosition();
    } else {
      menuOpen = true;
      $mobileHeaderMenu.addClass('mobile-header-menu--open');
      unlockScrollPosition();
    }
  });

  function lockScrollPosition() {
    // lock scroll position, but retain settings for later
    scrollPosition = html.data('scroll-position');
    html.data('previous-overflow', html.css('overflow'));
    html.css('overflow', 'hidden');
    window.scrollTo(scrollPosition[0], scrollPosition[1]);
  }

  function unlockScrollPosition() {
    // un-lock scroll position
    let html = $('html');
    html.css('overflow', html.data('previous-overflow'));
    window.scrollTo(scrollPosition[0], scrollPosition[1]);
  }
})(jQuery);
