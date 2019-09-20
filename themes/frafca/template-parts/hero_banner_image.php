<!-- hero contents -->
    
    <?php if (!empty(frafca_cfs('banner')) ):
        $heros = last_frafca_cfs('banner');
        $hero_img = $heros['banner_image'];
    ?>
        <div class="hero-image-page" style="
            background : 
            linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
            url(<?php echo get_template_directory_uri(). '/images/hero-images/Calendar_Hero_Image.png' ;?>);
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
        ">
    <?php else : ?>
        <div class="hero-image-page" style="
            background : 
            linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                url(<?php echo get_template_directory_uri(). '/images/hero-images/Calendar_Hero_Image.png' ;?>);
            background-size: cover;
            background-position: center; 
            background-repeat: no-repeat; 
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