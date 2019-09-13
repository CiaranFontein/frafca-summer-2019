<!-- hero contents -->
<?php
$limit_heros = count(frafca_cfs('banner')) - 1;
$heros = array(0 => frafca_cfs('banner')[$limit_heros]);
foreach ($heros as $hero) :
    $hero_img = $hero['banner_image'];
    ?>
    <div class="hero-image-page" style="
        background : 
        linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
            url(<?php echo $hero_img; ?>);
        background-size: cover;
        background-position: center; 
        
        background-repeat: no-repeat;                   
    ">
        <h1 class="page-title screen-reader-text">
            <?php single_post_title(); ?>
        </h1>
    </div>
<?php endforeach ?>
<!-- end hero contents -->