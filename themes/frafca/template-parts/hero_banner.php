<!-- hero contents -->
<?php 
    if ( !empty( last_frafca_cfs('banner') ) ) :

        $heros = last_frafca_cfs('banner');
        $hero_img = $heros['banner_image'];
        $hero_title = $heros['banner_title'];
        $hero_description = $heros['banner_description'];
?>
    <div class="hero-image-page" style="
        background : 
        linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
            url(<?php echo $hero_img; ?>);
        background-size: cover;
        background-position: center; 
        
        background-repeat: no-repeat;                
    ">
    <?php else: ?>
        <div class="hero-image-page" style="
            background: rgba(47,43,92,1);
        ">
    <?php endif; ?> <!-- endif !empty( $heros['banner_image'] ) -->
        <h1 class="page-title screen-reader-text">
            <?php single_post_title(); ?>
        </h1>     
        
        <div class="header-meta">
            <h2>
                <?php echo $hero_title ;?>
            </h2>
            <p>
                <?php echo $hero_description; ?>
            </p>
        </div>
    </div> <!-- end .hero-image-page -->