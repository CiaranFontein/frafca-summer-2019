(function($) {
  const breakPoint = 1200;

  $(document).ready(function() {
    const $fpAboutUsContent = $('.fp-about-us-carousel');

    // Bind the function only when it's mobile
    stopFlickty($fpAboutUsContent);
    
    $(window).on('resize', function(){
      stopFlickty($fpAboutUsContent);
    });
    



    const fpPartnersContent = document.querySelector('.fp-partners-carousel');
    const fpPartners = new Flickity(fpPartnersContent, {
      // carousel options
      cellAlign: 'left',
      wrapAround: true,
      selectedAttraction: 0.01,
      // friction: 0.15,
      autoPlay: 2000
    });

  }); // End of Document.Ready



  function stopFlickty($ele){
    let curBrowserWidth = $(window).width();
      
    if ( curBrowserWidth < breakPoint ){
        /* Mobile flickity */
        $ele.flickity({
          cellAlign: 'center',
          wrapAround: true,
          selectedAttraction: 0.01,
          friction: 0.15,
          autoPlay: 3000,
          draggable: '>1',
          resize: true,
          setGallerySize: true,
        })
        .flickity('playPlayer')
        .flickity('reposition');
      
      } else {
        /* Desktop flickity  */
        
        // Stop flickity functions
        $ele
        .flickity('destroy');
        // .flickity({
        //   cellAlign: 'center',
        //   wrapAround: true,
        //   selectedAttraction: 0.01,
        //   friction: 0.15,
        //   draggable: false,
        //   setGallerySize: false,
        // })
        // .flickity('stopPlayer')
        // .flickity('reposition');

        // reset css
        // $ele.find('.flickity-viewport').css({
        //   'height': 440
        // });
        // console.log(1);
        // $ele.find('.flickity-slider').css('transform', 'translateX(35.17%)');
        // $ele.find('.flickity-slider').children().eq(0).css('left', 0);
        // $ele.find('.flickity-slider').children().eq(1).css('left', '29.67%');
        // $ele.find('.flickity-slider').children().eq(2).css('left', '-29.67%');
        
      }
  }

})(jQuery);
