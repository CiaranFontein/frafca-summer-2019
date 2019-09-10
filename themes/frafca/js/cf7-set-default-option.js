(function ($) {
    
    // Set the default option same as the title
    const $cf7_options = $('select[name="programs-services"]').children();
    let $post_title;
    
    if ( $('.frafca-hero-image').find('.header-meta h2') ){
        $post_title = $('.frafca-hero-image').find('.header-meta h2').text().trim();
        
        $cf7_options.each(function(index, value){
            if ( value.value === $post_title){
                $(this).attr('selected', true);
                return
            }
        });
    }
    
    // Change the linebreak between the heading according to browser width
    const $desktop_width = 1200;
    let $heading, $heading_text;

    if ( $('#heading-get-in-touch') ){
        $heading = $('#heading-get-in-touch');
        $heading_text = $('#heading-get-in-touch').html();
        
        reHtmlHeading($heading, $heading_text);

        $(window).on('resize', function(){
            reHtmlHeading($heading, $heading_text);
        });

    }

    function reHtmlHeading(){   
            if ( $(window).width() < $desktop_width ){
                $heading.html($heading_text);
            } else {
                $heading.html( $heading_text.replace('<br>', '') );
            }
    }

})(jQuery);