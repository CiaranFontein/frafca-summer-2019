(function($) {
  let searchActive = false;
  let $logo = $('.header-logo');
  let $logoBackground = $logo.css('background');
  let $header = $('.site-header');
  let $container = $('.search-field-container');
  let $searchIcon = $('.search-icon');

  $searchIcon.on('click', function(evt) {
    evt.preventDefault();
    openSearchField();
  });

  $('.logo-link').on('click', function(evt) {
    if (searchActive) {
      evt.preventDefault();
      closeSearchField();
      searchActive = false;
    }
  });

  $(window).on('click', function(evt) {
    let target = evt.target;
    if ($header[0].contains(target)) {
      return;
    }
    evt.preventDefault();
    closeSearchField();
  });

  function openSearchField() {
    searchActive = true;
    $container.stop().fadeIn(300);
    $container.addClass('search-field-container--active');
    $container.css({ height: $header.height() + 'px' });
    $logo.css('background', 'none');
    $logo.html('X');
    $('.search-field').focus();
  }

  function closeSearchField() {
    $container.stop().fadeOut(300);
    $container.removeClass('search-field-container--active');
    $logo.css('background', $logoBackground);
    $logo.empty();
  }
})(jQuery);
