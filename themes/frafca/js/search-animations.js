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
    $container.addClass('search-field-container--active');
    $container.css({ height: $header.height() + 'px' });
    $logo.css('z-index', '100');
    console.log('opening');
  }

  function closeSearchField() {
    console.log('closing');
    $logo.css('z-index', '1');
    $container.removeClass('search-field-container--active');
  }
})(jQuery);
