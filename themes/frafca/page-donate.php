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

                <?php get_template_part('template-parts/hero_banner_button'); ?>


            </header><!-- #donate-page-banner -->

            <?php /* Start the Loop */ ?>

            <div class="donate-grid">
                <?php
                    $donate_cards = frafca_cfs('card_donation_info');
                    foreach ($donate_cards as $donate_card) :
                        ?>

                    <div class="donate-card">
                        <h3><?php echo $donate_card['donation_info_title']; ?></h3>
                        <p><?php echo $donate_card['donation_info_description']; ?></p>
                    </div>

                <?php endforeach; ?>
            </div>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>