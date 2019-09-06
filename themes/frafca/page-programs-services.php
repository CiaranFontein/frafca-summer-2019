<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-programs&services
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="prgrm_svc-banner"  class="frafca-hero-image">
            <!-- hero contents -->
            <?php 
                $heros = frafca_cfs('banner');
                foreach( $heros as $hero ) :        
                    $hero_img = $hero['banner_image'];
                    $hero_title = $hero['banner_title'];
                    $hero_description = $hero['banner_description'];
            ?>
                <div class="hero-image-page" style="
                    background : 
                        url(<?php echo $hero_img; ?>);
                    background-size: cover;
                    background-position: center; 
                    background-attachment: fixed;
                    background-repeat: no-repeat;                   
                ">
                    <h1 class="page-title screen-reader-text">
                        <?php single_post_title(); ?>
                    </h1>     
                    
                    <div class="header-title">
                        <h2>
                            <?php echo $hero_title ;?>
                        </h2>
                        <p>
                            <?php echo $hero_description; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?><!-- end hero contents -->

            <!-- scroll down with the arrow -->
            <div class="scroll-down">
                <p>Scroll Down</p>
                <i class="fas fa-chevron-down"></i>
            </div>

        </header><!-- #front-page-banner -->

        <section id="prgrm_svc-categories">
                    
            <?php  
                $prgrm_svc_lists = array(
                    'taxonomy' => 'category',
                    'hide_empty' => false,
                );
                $prgrm_svc_loops = get_terms($prgrm_svc_lists);
                var_dump($prgrm_svc_loops);
            ?>

        </section>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>