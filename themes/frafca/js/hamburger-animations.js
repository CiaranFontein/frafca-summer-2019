(function($) {
  let menuOpen = false;
  let $mobileHeaderMenu = $('.mobile-header-menu');
  let $hamburgerIcon = $('.hamburger-icon');

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
  $hamburgerIcon.on('click', function() {
    toggleMobileNavMenu();
  });

  function toggleMobileNavMenu() {
    $mobileHeaderMenu.animate({ width: 'toggle' }, 350);

    if (menuOpen) {
      menuOpen = false;
      $mobileHeaderMenu.removeClass('mobile-header-menu--open');
      $hamburgerIcon.removeClass('hamburger-icon--open');
      unlockScrollPosition();
    } else {
      menuOpen = true;
      $mobileHeaderMenu.addClass('mobile-header-menu--open');
      $hamburgerIcon.addClass('hamburger-icon--open');
      lockScrollPosition();
    }
  }
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

  /* Close mobile-nav-menu when user //
  //     clicks outside of it        */

  $hamburgerIcon.click(function() {
    $mobileHeaderMenu.show();
    return false;
  });

  $(document).click(function() {
    if (menuOpen) {
      toggleMobileNavMenu();
    }
  });

  $mobileHeaderMenu.click(function(e) {
    e.stopPropagation();
  });
})(jQuery);
