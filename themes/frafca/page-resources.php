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

            <header id="resources-page-banner" class="frafca-hero-image">

                <?php get_template_part('template-parts/hero_banner'); ?>

            </header><!-- #front-page-banner -->

            <?php /* Start the Loop */ ?>
            <div class="resources-grid grid-cards">
                <?php
                    $resource_cards = frafca_cfs('resources');
                    foreach ($resource_cards as $resource_card) :
                        ?>

                    <div class="resources rect-card purple">
                        <?php echo $resource_card['resource_link']; ?>
                    </div><!-- .entry-content -->

                <?php endforeach; ?>
            </div>
        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>