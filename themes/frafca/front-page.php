<?php

/**
 * The main template file.
 *
 * @package FRAFCA_Theme
 * Template Name: page-front
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="front-page-banner" class="frafca-hero-image">

            <?php get_template_part('template-parts/hero_banner'); ?>

            <!-- scroll down with the arrow -->
            <div class="scroll-down">
                <p>Scroll Down</p>
                <i class="fas fa-chevron-down"></i>
            </div>

        </header><!-- #front-page-banner -->

        <section id="front-page-about-us" class="front-page-about-us">
            <h2><?php echo frafca_cfs('about_us') ?></h2>
            <div class="fp-about-us-carousel">
                <?php
                $card_about_us = frafca_cfs('card_about_us');
                foreach ($card_about_us as $card) :
                    $icon = $card['card_icon'];
                    $title = $card['card_title'];
                    $description = $card['card_description'];
                    ?>

                    <div class="round-rect-card pink fp-about-us-cell">
                        <div class="card-icon">
                            <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>">
                        </div>
                        <div class="card-meta">
                            <h3><?php echo $title; ?></h3>
                            <p><?php echo $description; ?></p>
                        </div>

                    </div>
                <?php endforeach; ?>
            </div>

            <a class='about-us-button default-btn yellow'>
                <?php frafca_cfs('about_us_button') ?>
            </a>

        </section><!-- #front-page-about-us -->

        <section id="front-page-what-we-offer" class="what-we-offer">
            <?php
            $what_we_offer = frafca_cfs('what_we_offer');
            foreach ($what_we_offer as $content) :
                $image = $content['wwo_image'];
                $title = $content['wwo_title'];
                $description = $content['wwo_description'];
                $button = $content['wwo_button'];
                ?>
                <div class="wwo_image containter col-2" style="">
                    <img src="<?php echo $image; ?>" alt="Who We Are">
                </div>

                <div class="wwo_meta containter col-2">
                    <h3><?php echo $title ?></h3>
                    <p><?php echo $description ?></p>
                    <a class='default-btn yellow' href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                        <?php echo $button['text']; ?>
                    </a>
                </div>

            <?php endforeach ?>
        </section><!-- #front-page-what-we-offer -->

        <section id="front-page-get-involved" class="front-page-get-involved">
            <h2>
                <?php echo frafca_cfs('get_involved') ?>
            </h2>
            <div class="flex-cards">
                <?php
                $card_get_involved = frafca_cfs('card_get_involved');
                foreach ($card_get_involved as $content) :
                    $icon = $content['card_icon'];
                    $title = $content['card_title'];
                    $description = $content['card_description'];
                    $button = $content['button'];
                    ?>

                    <div class="round-rect-card purple">
                        <div class="card-icon">
                            <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>">
                        </div>
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                        <a class='default-btn yellow' href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                            <?php echo $button['text']; ?>
                        </a>
                    </div>

                <?php endforeach ?>
        </section><!-- #front-page-get-involved -->

        <section id="front-page-partners" class="front-page-partners">

            <h2>Partners</h2>
            <div class="fp-partners-carousel">
                <?php
                $partners = frafca_cfs('partners');
                foreach ($partners as $partner) :
                    $partner_name = $partner['partner_name'];
                    $img_partner = $partner['partner_logo'];
                    ?>

                    <div class="partner-content">
                        <div class="partner-logo">
                            <img src="<?php echo $img_partner; ?>" alt="<?php echo $partner_name; ?>">
                        </div>
                        <p>
                            <?php echo $partner_name; ?>
                        </p>
                    </div>

                <?php endforeach; ?>
            </div>
        </section><!-- #front-page-partners -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>