<?php

/**
 * The main template file.
 *
 * @package FRAFCA_Theme
 * Template name: page-events
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header id="events-page-banner" class="frafca-hero-image">

                <?php get_template_part('template-parts/hero_banner'); ?>

            </header><!-- #resources-page-banner -->

            <?php /* Start the Loop */ ?>
            <div class="event-grid grid-cards">

            </div>
        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>