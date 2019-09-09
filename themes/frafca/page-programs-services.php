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
            <?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #prgrm_svc-banner -->

        <section id="prgrm_svc-categories">
            <div class="grid-cards">
                <?php  
                    $prgrm_svc_categories = frafca_cfs('categories');
                    foreach( $prgrm_svc_categories as $category ):
                        $cat = get_term($category);
                            $name = $cat->name;
                            $description = $cat->description;
                ?>
                    <div class="rect-card purple">
                        <h3><?php echo $name ?></h3>
                        <p><?php echo $description ?></p>
                        <a href="<?php echo esc_url(get_term_link($cat));?>" target="_self" class='default-btn yellow'>
                            View Category
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>