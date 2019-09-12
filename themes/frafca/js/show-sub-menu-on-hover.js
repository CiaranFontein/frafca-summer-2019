(function($) {

  // Create arrow-down when the list has sub-menu
  const $navSecondUL = $('#masthead').find('.menu-mobile-header-menu-container').children('ul').find('ul');
  $navSecondUL.before(`<i class="fas fa-chevron-down"></i>`);

  $(window).on('click hover', function(){

    if ( $(window).width() < 1200 ){
      // MOBILE functions

    } else {
      // DESKTOP functions
      $('li.menu-item').hover(
        function() {
          let $subMenu = $(this).find(' > .sub-menu');
          $subMenu.slideDown(100); // display immediate child
        },
        function() {
          // mouse leave
          if (!$(this).hasClass('.current_page_item')) {
            let $subMenu = $(this).find('.sub-menu');
            $subMenu.slideUp(100); // hide if not current page
          }
        }
      );

    }
  })
})(jQuery);
