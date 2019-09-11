(function($) {
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
  
  // lock scroll position, but retain settings for later
  $(window).on('scroll', function(){
    if (menuOpen){
      $(window).scrollTop(lockScroll);
    }
    
  });

})(jQuery);