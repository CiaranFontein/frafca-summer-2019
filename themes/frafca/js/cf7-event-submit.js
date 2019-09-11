(function ($) {
    // Form will be hidden after the mail is sent
    document.addEventListener( 'wpcf7mailsent', function() {
        const $form = $('#content-get-in-touch');
        const animationTime = 400;
        $form.slideUp(animationTime);
    }, false );

})(jQuery);