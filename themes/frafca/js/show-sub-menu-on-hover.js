(function($) {
  $('li.menu-item').hover(
    function() {
      // mouse enter
      $(this)
        .find(' > .sub-menu')
        .show(); // display immediate child
    },
    function() {
      // mouse leave
      if (!$(this).hasClass('.current_page_item')) {
        // check if current page
        $(this)
          .find('.sub-menu')
          .hide(); // hide if not current page
      }
    }
  );
})(jQuery);
