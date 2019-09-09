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

            <header id="front-page-banner" class="frafca-hero-image">

                <?php get_template_part('template-parts/hero_banner'); ?>

                <!-- scroll down with the arrow -->
                <div class="scroll-down">
                    <p>Scroll Down</p>
                    <i class="fas fa-chevron-down"></i>
                </div>

            </header><!-- #front-page-banner -->

            <?php /* Start the Loop */ ?>
            <?php while (have_posts()) : the_post(); ?>

                <?php get_template_part('template-parts/content'); ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>