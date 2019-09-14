(function ($) {
  $(document).ready(function () {
    if (window.innerWidth <= 1000) {
      const content = document.querySelector('.fp-about-us-carousel');
      const flkty = new Flickity(content, {
        // carousel options
        cellAlign: 'center',
        wrapAround: true,
        selectedAttraction: 0.01,
        friction: 0.15,
        autoPlay: 3000
      });
      console.log(flkty);
    }
  });
})(jQuery);
