(function($) {
  // let $header = $('.site-header');
  let $section = $('section');
  if  ( $section.length ) {
    $(document).on('scroll', function() {
      if ($(this).scrollTop() >= $section.position().top) {
        for (let i = 0; i < $section.children; i++) {
          console.log($section.children[i]);
          if ($section.children[i].hasClass('pink')) {
            console.log('has pink class');
          }
        }
        // let count = $('section > *').length;
      }
    });

  }
})(jQuery);



