(function($) {
  $('li.menu-item').hover(
    function() {
      let $subMenu = $(this).find(' > .sub-menu');
      $subMenu.slideDown(); // display immediate child
    },
    function() {
      // mouse leave
      if (!$(this).hasClass('.current_page_item')) {
        let $subMenu = $(this).find('.sub-menu');
        $subMenu.slideUp(); // hide if not current page
      }
    }
  );
})(jQuery);
