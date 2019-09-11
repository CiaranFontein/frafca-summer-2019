(function($) {
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
})(jQuery);
