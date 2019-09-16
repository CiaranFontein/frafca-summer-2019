(function($) {
  let searchActive = false;
  let $logo = $('.header-logo');
  let $homeURL = $logo.attr('href');
  let $logoBackground = $logo.css('background');
  let $header = $('.site-header');
  let $container = $('.search-field-container');
  let $searchIcon = $('.search-icon');

  $searchIcon.on('click', function() {
    openSearchField();
  });

  $('.logo-link').on('click', function(event) {
    if (searchActive) {
      closeSearchField();
      event.preventDefault();
      searchActive = false;
    }
  });

  $('.frafca-hero-image').on('click', function() {
    closeSearchField();
  });

  function openSearchField() {
    searchActive = true;
    $container.stop().fadeIn(300);
    $container.addClass('search-field-container--active');
    $container.css({ height: $header.height() + 'px' });
    $logo.css('background', 'none');
    // $logo.attr('href', '#');
    $logo.html('X');
  }

  function closeSearchField() {
    $container.stop().fadeOut(300);
    $container.removeClass('search-field-container--active');
    $logo.css('background', $logoBackground);
    $logo.attr('href', $homeURL);
    // $logo.attr('onclick', 'return true');
    $logo.empty();
  }
})(jQuery);
