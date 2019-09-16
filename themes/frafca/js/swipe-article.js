(function($) {
  const $desktop_width = 1200;
  const $targets = $('.frafca_swipe_article');
  let arrayOriginal = [];

  // Save the article in the array
  $targets.each((index, value) => {
    arrayOriginal.push($(value).html());
  });

  // Initiate functions when it's mobile or return to the original when it's desktop
  if ($(window).width() < $desktop_width) {
    createSwipeContainer($targets);
    setActiveEleHeight($targets);
  } else {
    returnOriginalHtml($targets);
  }

  $(window).on('resize', function() {
    if ($(window).width() < $desktop_width) {
      createSwipeContainer($targets);
      setActiveEleHeight($targets);
    } else {
      returnOriginalHtml($targets);
    }
  });

  // Create the original elements
  function returnOriginalHtml($obj) {
    $obj.each(function(index) {
      $(this).html(arrayOriginal[index]);
    });
  }

  // Create new elements that enable swiping
  function createSwipeContainer($obj) {
    $obj.each(function(index) {
      let textOriginal = arrayOriginal[index].split('<br>'),
        textNew = [];

      textOriginal.map(value => {
        if (value.trim().length > 0) {
          textNew.push(value);
        }
      });

      $(this).html(
        '<div class="swipe-wrapper"></div><div class="navigation-dots"></div>'
      );

      textNew.forEach((value, index) => {
        if (index === 0) {
          $(this).children('.swipe-wrapper').append(`
                        <p class="swipe-element active">${value}</p>
                    `);
          $(this).children('.navigation-dots').append(`
                        <p class="dot active"></p>
                    `);
        } else {
          $(this).children('.swipe-wrapper').append(`
                        <p class="swipe-element">${value}</p>
                    `);
          $(this).children('.navigation-dots').append(`
                        <p class="dot"></p>
                    `);
        }
      });

      detectActiveElement($(this));
    });
  }

  // Add the active class with the visible element
  function detectActiveElement($obj) {
    $obj.on('wheel touchstart touchend', fxDetect);

    function fxDetect() {
      let $scrollObj = $(this).children('.swipe-wrapper'),
        $findActiveObj;

      $scrollObj.children().filter((index, value) => {
        $findActiveObj = $(value).offset().left;

        if (Math.abs($findActiveObj) < $(value).width()) {
          $scrollObj.children().removeClass('active');
          $(value).addClass('active');

          $obj.find('.dot').removeClass('active');
          $obj
            .find('.dot')
            .eq(index)
            .addClass('active');

          setActiveEleHeight($obj);
        }
      });
    }
  }

  // Set the wrapper with same height to the active child element
  function setActiveEleHeight($obj, index = 0) {
    $obj.each(function() {
      let $activeObj = $(this).find('.active');
      $(this)
        .children('.swipe-wrapper')
        .height($activeObj.outerHeight(true));
    });
  }
})(jQuery);
