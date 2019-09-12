(function($) {
  let $logo = $('.header-logo');
  let $header = $('.site-header');
  let $container = $('.search-field-container');
  let $searchIcon = $('.search-icon');

  $searchIcon.on('click', function() {
    openSearchField();
  });

  $('.frafca-hero-image').on('click', function() {
    closeSearchField();
  });

  function openSearchField() {
    $container.stop().fadeIn(300);
    $container.addClass('search-field-container--active');
    $container.css({ height: $header.height() + 'px' });
  }

  function closeSearchField() {
    $container.stop().fadeOut(300);
    $container.removeClass('search-field-container--active');
  }
})(jQuery);
