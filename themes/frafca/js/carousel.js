(function($) {
  const breakPoint = 1200;

  $(document).ready(function() {
    const $fpAboutUsContent = $('.fp-about-us-carousel');

    stopFlickty($fpAboutUsContent);

    $(window).on('resize', function() {
      stopFlickty($fpAboutUsContent);
    });

    const fpPartnersContent = document.querySelector('.fp-partners-carousel');
    const fpPartners = new Flickity(fpPartnersContent, {
      // carousel options
      cellAlign: 'left',
      wrapAround: true,
      selectedAttraction: 0.01,
      autoPlay: 2000
    });
  }); // End of Document.Ready

  // Refactored Functions
  function stopFlickty($ele) {
    let curBrowserWidth = $(window).width();

    if (curBrowserWidth < breakPoint) {
      /* Mobile flickity */
      $ele
        .flickity({
          cellAlign: 'center',
          wrapAround: true,
          selectedAttraction: 0.01,
          friction: 0.15,
          autoPlay: 3000,
          draggable: '>1',
          resize: true,
          setGallerySize: true
        })
        .flickity('playPlayer')
        .flickity('reposition');
    } else {
      /* Desktop flickity  */
      // Stop flickity functions
      $ele.flickity('destroy');
    }
  } // End of Functions StopFlickity
})(jQuery);
