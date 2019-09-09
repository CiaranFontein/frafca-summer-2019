<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-get-involved
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="get-involved-banner"  class="frafca-hero-image">
            <?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #front-page-banner -->

        <section id="get-involved-categories">
            <div class="grid-cards">
                <?php  
                    $get_involved_categories = frafca_cfs('categories');
                    foreach( $get_involved_categories as $category ):
                        $cat = get_term($category);
                            $name = $cat->name;
                            $description = $cat->description;
                ?>
                    <div class="rect-card purple">
                        <h3><?php echo $name ?></h3>
                        <p><?php echo $description ?></p>
                        <a href="<?php echo get_term_link($cat) ?>" target="_blank">
                            <input class='default-btn yellow' type="button" value="View Category">
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>