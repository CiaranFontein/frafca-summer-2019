(function($) {
  $(document).ready(function() {
    const fpAboutUsContent = document.querySelector('.fp-about-us-carousel');
    const fpAbout = new Flickity(fpAboutUsContent, {
      // carousel options
      cellAlign: 'center',
      wrapAround: true,
      selectedAttraction: 0.01,
      friction: 0.15,
      autoPlay: 3000,
      // percentPosition: false,
      // watchCSS: true
      draggable: '>2'
    });
    console.log(fpAbout);

    const fpPartnersContent = document.querySelector('.fp-partners-carousel');
    const fpPartners = new Flickity(fpPartnersContent, {
      // carousel options
      cellAlign: 'left',
      wrapAround: true,
      selectedAttraction: 0.01,
      // friction: 0.15,
      autoPlay: 2000
    });
    console.log(fpPartners);
  }); // End of Document.Ready
})(jQuery);
