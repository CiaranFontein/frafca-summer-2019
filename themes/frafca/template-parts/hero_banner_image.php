<!-- hero contents -->
<?php 
        $hero_img = frafca_cfs('banner_image');
?>
    <div class="hero-image-page" style="
        background : 
        linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
            url(<?php echo $hero_img; ?>);
        background-size: cover;
        background-position: center; 
        padding: 7%;
        
        background-repeat: no-repeat;                
    ">
        <h1 class="page-title screen-reader-text">
            <?php single_post_title(); ?>
        </h1>
    </div>