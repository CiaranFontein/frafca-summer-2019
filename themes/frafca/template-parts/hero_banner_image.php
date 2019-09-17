<!-- hero contents -->
    
    <?php if (  !empty(frafca_cfs('banner')) ): 
        $hero_img = $heros['banner_image'];
        $heros = last_frafca_cfs('banner');
    ?>
        <div class="hero-image-page" style="
            background : 
            linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                url(<?php echo $hero_img; ?>);
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
        ">
    <?php else : ?>
        <div class="hero-image-page" style="
            background: rgba(47,43,92,1);
        ">
    <?php endif; ?>
            <h1 class="page-title screen-reader-text">
                <?php single_post_title(); ?>
            </h1>     
            
            <div class="header-meta">
                <h2>
                    Event Calendar
                </h2>
            </div>
        </div>