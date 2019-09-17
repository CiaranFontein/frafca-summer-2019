(function($) {
  
  let menuOpen = false, 
      $mobileHeaderMenu = $('.mobile-header-menu'),
      $hamburgerIcon = $('.hamburger-icon'),
      lockScroll, isMobile;

  
    // Toggle the mobile-navigation

    $(window).on('click touchstart', function(e){

      isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
      
      // Check the event gesture to trigger once for the events
      if ( isMobile && e.type === 'touchstart' || !isMobile && e.type === 'click' ){
        
        let clicked_ele = e.target;
        let checkIsInNav = $mobileHeaderMenu[0].contains(clicked_ele);
  
        // Open the navigation
        if ( !menuOpen && $hamburgerIcon[0].contains(clicked_ele)){
  
          $mobileHeaderMenu.addClass('mobile-header-menu--open');
          $hamburgerIcon.addClass('hamburger-icon--open');
          
          lockScroll = $(window).scrollTop();
          
          menuOpen = true; 
          return
        }
        
        // Close the navigation when outside of the navigation or the hamburger icon is clicked
        if ( menuOpen && ($hamburgerIcon[0].contains(clicked_ele) || !checkIsInNav) ) {
          $mobileHeaderMenu.removeClass('mobile-header-menu--open');
          $hamburgerIcon.removeClass('hamburger-icon--open');  
          menuOpen = false;
          return
        }       
        
      }
      
    }); // end onClick('click touchstart')

  $(window).on('scroll', function() {
    // lock scroll position, but retain settings for later
    if (menuOpen) {
      $(window).scrollTop(lockScroll);
    }
  }); // end 'scroll' event
})(jQuery);
