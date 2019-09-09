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

})(jQuery);