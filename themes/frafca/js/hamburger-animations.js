(function($) {
  let menuOpen = false;
  let transitionTime = 300;
  let $mobileHeaderMenu = $('.mobile-header-menu');
  // Header hamburger drop down menu only on mobile //
  $('.hamburger-icon').on('click', function() {
    $mobileHeaderMenu.toggleClass('mobile-header-menu--open');
    $mobileHeaderMenu.animate({ width: 'toggle' }, 350);
    if (menuOpen) {
      menuOpen = false;
      lockScrollPosition();
    } else {
      menuOpen = true;
      unlockScrollPosition();
    }
  });

  function lockScrollPosition() {
    // lock scroll position, but retain settings for later
    let scrollPosition = [
      self.pageXOffset ||
        document.documentElement.scrollLeft ||
        document.body.scrollLeft,
      self.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop
    ];
    let html = jQuery('html');
    html.data('scroll-position', scrollPosition);
    html.data('previous-overflow', html.css('overflow'));
    html.css('overflow', 'hidden');
    window.scrollTo(scrollPosition[0], scrollPosition[1]);
  }

  function unlockScrollPosition() {
    // un-lock scroll position
    let html = jQuery('html');
    let scrollPosition = html.data('scroll-position');
    html.css('overflow', html.data('previous-overflow'));
    window.scrollTo(scrollPosition[0], scrollPosition[1]);
  }
})(jQuery);
