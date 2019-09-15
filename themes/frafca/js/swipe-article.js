(function ($) {
    
    const $desktop_width = 1200;
    const $targets = $('.frafca_swipte_article');
    let arrayOriginal = [],
        horizontalScrollBegin;

    // Save the article in the array
    $targets.each((index, value)=> {
        arrayOriginal.push($(value).html());
    })

    // Initiate functions when it's mobile or return to the original when it's desktop
    if ( $(window).width() < $desktop_width ) {
        createSwipeContainer($targets);
    } else {
        returnOriginalHtml($targets);
    }

    $(window).on('resize', function(){
        if ( $(window).width() < $desktop_width ) {
            createSwipeContainer($targets);
        } else {
            returnOriginalHtml($targets);
        }
    });

    // Create the original elements
    function returnOriginalHtml($obj) {
        $obj.each(function(index){
            $(this).html(arrayOriginal[index]);
        });
    }

    // Create new elements that enable swiping
    function createSwipeContainer($obj) {
        $obj.each(function(index){

            let textOriginal = arrayOriginal[index].split('<br>'), 
                textNew = [];
            
            textOriginal.map((value)=>{
                if ( value.trim().length > 0 ){
                    textNew.push(value);
                }
            });
            
            $(this).html('<div class="swipe-wrapper"></div>');

            textNew.forEach((value, index)=>{
                if ( index === 0){
                    $(this).children('.swipe-wrapper').append(`
                    <p class="swipe-element active">${value}</p>
                    `);
                } else {
                    $(this).children('.swipe-wrapper').append(`
                    <p class="swipe-element">${value}</p>
                    `);
                }
            });

        });
    }
    
})(jQuery);