(function() {
  if (window.innerWidth < 1000) {
    const content = document.querySelector('.fp-about-us-carousel');
    const flkty = new Flickity(content, {
      // options
      cellAlign: 'left',
      wrapAround: true,
      freeScroll: true,
      autoPlay: true
    });
    console.log(flkty);
  }
})(jQuery);
