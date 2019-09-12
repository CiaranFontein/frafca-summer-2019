(function($) {

  // Create arrow-down when the list has sub-menu
  const animateTime = 100;
  const $navSecondUL = $('#masthead').find('.menu-mobile-header-menu-container').children('ul').find('ul');
  $navSecondUL.before(`<i class="fas fa-chevron-down"></i>`);

  $(window).on('click mouseenter', function(e){
    let targetEle = e.target;
    if ( $(window).width() < 1200 ){
      // MOBILE functions
      
      // Toggle the submenu and rotate the arrow icon
      if ( e.type === 'click' && $(targetEle).hasClass('fa-chevron-down') ){
        let $mobileSubMenu = $(targetEle).siblings('ul');
        $(targetEle).toggleClass('open');
        $mobileSubMenu.slideToggle(animateTime);

      }

    } else {
      // DESKTOP functions
      $('li.menu-item').hover(
        function() {
          let $subMenu = $(this).find(' > .sub-menu');
          $subMenu.slideDown(animateTime); // display immediate child
        },
        function() {
          // mouse leave
          if (!$(this).hasClass('.current_page_item')) {
            let $subMenu = $(this).find('.sub-menu');
            $subMenu.slideUp(animateTime); // hide if not current page
          }
        }
      );

    }
  })
})(jQuery);
