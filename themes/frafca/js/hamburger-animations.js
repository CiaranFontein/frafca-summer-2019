(function($) {
  const $header = $('#masthead');
  let menuOpen = false;
  let $mobileHeaderMenu = $('.mobile-header-menu');
  let $hamburgerIcon = $('.hamburger-icon');
  let lockScroll;

  // Toggle the mobile-navigation
  $(document).on('click touchstart', function(e) {
    if (e.type === 'click' && $(window).width() > 1200) {
      checkEvent();
    }

    if (e.type === 'touchstart' && $(window).width() <= 1200) {
      checkEvent();
    }

    function checkEvent() {
      let clicked_ele = e.target;
      let checkIsInNav = $mobileHeaderMenu[0].contains(clicked_ele);

      if ($hamburgerIcon[0].contains(clicked_ele)) {
        toggleMobileNavMenu();
        return;
      }

      // Close the navigation when it's opened and clicked outside of the navigation
      if (!checkIsInNav && menuOpen) {
        toggleMobileNavMenu();
      }
    }
  }); // end click, touchstart events

  function toggleMobileNavMenu() {
    $mobileHeaderMenu.toggleClass('mobile-header-menu--open');
    $hamburgerIcon.toggleClass('hamburger-icon--open');
    menuOpen = !menuOpen;

    lockScroll = $(window).scrollTop();
  }

  $(window).on('scroll', function() {
    // lock scroll position, but retain settings for later
    if (menuOpen) {
      $(window).scrollTop(lockScroll);
    }
  }); // end 'scroll' event
})(jQuery);
