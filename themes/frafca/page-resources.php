<?php

/**
 * The main template file.
 *
 * @package FRAFCA_Theme
 * Template name: page-resources
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header id="about-page-banner" class="frafca-hero-image">

                <?php get_template_part('template-parts/hero_banner'); ?>

            </header><!-- #front-page-banner -->

            <?php /* Start the Loop */ ?>

            <?php
                $resource_cards = frafca_cfs('');
                foreach ($resource_cards as $resource_card) :
                    ?>


                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="resources">



                    </div><!-- .entry-content -->
                </article>




            <?php endforeach; ?>
        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>