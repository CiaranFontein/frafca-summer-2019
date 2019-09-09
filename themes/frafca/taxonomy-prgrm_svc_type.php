<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 2 (Fixed hero-image)  -->
        <header id="taxonomy_prgrm_svc-banner"  class="frafca-hero-image">
            <!-- hero contents -->
                <div class="hero-image-page" style="
                    background : 
                    linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                        url(<?php echo get_template_directory_uri() . '/images/hero-images/hero_image-default.png' ;?>);
                    background-size: cover;
                    background-position: center; 
                    background-attachment: fixed;
                    background-repeat: no-repeat;                   
                ">
                    <h1 class="page-title screen-reader-text">
                        <?php single_post_title(); ?>
                    </h1>     
                    
                    <div class="header-meta">
                        <h2>
                            <?php single_term_title(); ?>
                        </h2>
                        <p>
                            <?php echo term_description();?>
                        </p>
                    </div>
                </div>
            <!-- end hero contents -->
        </header><!-- #taxonomy_prgrm_svc-banner -->

        <section id="prgrm_svc-taxonomies">
            <div class="grid-cards">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="rect-card pink">
                        <h3><?php the_title();?></h3>
                        <p>
                            <?php
                            $limit_heros = count(frafca_cfs('banner'))-1;
                            echo frafca_cfs('banner')[$limit_heros]['banner_description'];
                            ?>
                        </p>
                        <a href="<?php echo esc_url( get_permalink() ) ;?>" target="_self" class="default-btn yellow">
                            Learn More
                        </a>
                    </div>
                <?php // endforeach ?>
                <?php endwhile; ?>
                <?php else : ?>
                <div class="rect-card no-content">
                    <h2>Nothing found!</h2>
                </div>
                <?php endif; ?>
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>