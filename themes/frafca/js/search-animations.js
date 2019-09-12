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
    $container.fadeIn();
    $container.addClass('search-field-container--active');
    $container.css({ height: $header.height() + 'px' });
    $logo.css('z-index', '10');
  }

  function closeSearchField() {
    $container.fadeOut();
    $logo.css('z-index', '1');
    $container.removeClass('search-field-container--active');
  }
})(jQuery);
