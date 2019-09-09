<?php

/**
 * The main template file.
 *
 * @package FRAFCA_Theme
 * Template name: page-donate
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <header id="donate-page-banner" class="frafca-hero-image">

                <?php get_template_part('template-parts/hero_banner'); ?>

            </header><!-- #donate-page-banner -->

            <?php /* Start the Loop */ ?>
            <div class="donate-grid">
                <?php
                    $donate_cards = frafca_cfs('resources');
                    foreach ($donate_cards as $resource_card) :
                        ?>

                    <div class="donate-card">
                        <?php echo $donate_card['resource_link']; ?>
                    </div><!-- .entry-content -->

                <?php endforeach; ?>
            </div>
        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>