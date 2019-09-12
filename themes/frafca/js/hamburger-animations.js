(function($) {
  const $header = $('#masthead');
  let menuOpen = false;
  let $mobileHeaderMenu = $('.mobile-header-menu');
  let $hamburgerIcon = $('.hamburger-icon');
  let lockScroll;

  // Toggle the mobile-navigation
  $(document).on('click', function(e){
    let clicked_ele = e.target;
    let checkIsInNav = $mobileHeaderMenu[0].contains(clicked_ele);

    if ($hamburgerIcon[0].contains(clicked_ele)) {
      toggleMobileNavMenu();
      return
    }
    
    // Close the navigation when it's opened and clicked outside of the navigation
    if (!checkIsInNav && menuOpen ){
      toggleMobileNavMenu();
    }
  });

  function toggleMobileNavMenu() {
    $mobileHeaderMenu.toggleClass('mobile-header-menu--open');
    $hamburgerIcon.toggleClass('hamburger-icon--open');
    menuOpen = !menuOpen;

    lockScroll = $(window).scrollTop();
  }
  
  $(window).on('scroll', function(){

    // lock scroll position, but retain settings for later
    if (menuOpen){
      $(window).scrollTop(lockScroll);
    }

    // Toggle darkmode when the header is scrolled
    toggleDarkMode();
  });

  toggleDarkMode();

  function toggleDarkMode() {  
    if ( $(window).scrollTop() > 0 && $(window).width() < 1200 ){
      $header.addClass('darkmode');
    } else {
      $header.removeClass('darkmode');
    }
  }

})(jQuery);