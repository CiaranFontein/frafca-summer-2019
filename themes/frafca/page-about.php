<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-about
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="prgrm_svc-banner"  class="frafca-hero-image">
            <?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #about-page-banner -->

        <section id="who-we-are" class="container-who-we-are">
            <div class="grid-cards txt-align-c white">
                <?php
                    $contents_who_we_are = last_frafca_cfs('who_we_are'); 
                ?>
                <div class="grid-cards-element">
                    <div class="image-background" style="
                        background : 
                            linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                                url(<?php echo $contents_who_we_are['image'] ;?>);
                        background-size: cover;
                        background-position: center; 
                        background-repeat: no-repeat;
                    ">
                    </div>
                </div>
                <div class="grid-cards-element">
                    <h3>
                        <?php echo frafca_wp_kses_text($contents_who_we_are['title']); ?>
                    </h3>
                </div>
                <div class="grid-cards-element">
                    <?php echo frafca_wp_kses_text($contents_who_we_are['description']); ?>
                </div>

            </div>
        </section><!-- #who-we-are -->

        <section id="location-history" class="container-location-history">
            <div class='rect-card txt-align-c pink'>
                <?php echo frafca_wp_kses_text(frafca_cfs('location_history')); ?>
            </div>
        </section><!-- #location-history -->

        <section id="our-history" class="container-our-history">
            <div class="grid-cards txt-align-c white">
                <?php
                    $contents_our_history = last_frafca_cfs('our_history'); 
                ?>
                <div class="grid-cards-element">
                    <div class="image-background" style="
                        background : 
                            linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                                url(<?php echo $contents_our_history['image'] ;?>);
                        background-size: cover;
                        background-position: top center; 
                        background-repeat: no-repeat;
                    ">
                    </div>
                </div>
                <div class="grid-cards-element">
                    <h3>
                        <?php echo frafca_wp_kses_text($contents_our_history['title']); ?>
                    </h3>
                </div>
                <div class="grid-cards-element">
                    <?php echo frafca_wp_kses_text($contents_our_history['description']); ?>
                </div>

            </div>
        </section><!-- #our-history -->

        <section id="friendship-center" class="container-friendship-center">
            <div class="grid-cards txt-align-c white">
                <?php
                    $contents_friendship_center = last_frafca_cfs('friendship_center'); 
                ?>
                <div class="grid-cards-element">
                    <div class="image-background" style="
                        background : 
                            linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100% ), 
                                url(<?php echo $contents_friendship_center['image'] ;?>);
                        background-size: cover;
                        background-position: top center; 
                        background-repeat: no-repeat;
                    ">
                    </div>
                </div>
                <div class="grid-cards-element">
                    <h3>
                        <?php echo frafca_wp_kses_text($contents_friendship_center['title']); ?>
                    </h3>
                </div>
                <div class="grid-cards-element">
                    <?php echo frafca_wp_kses_text($contents_friendship_center['description']); ?>
                </div>

            </div>
        </section><!-- #friendship-center -->

        <section id="card-about-us" class="container-card-about-us">
            <div class="grid-cards">
                <?php 
                    $contents_card_about_us = frafca_cfs('cards_about_us_page');
                    foreach( $contents_card_about_us as $content ):
                        $icon = $content['logo'];
                        $title = $content['title'];
                        $description = $content['description'];
                        $link_text = $content['link-text'];
                        $link = $content['link'][0];
                ?>
                    <div class="flex-element">
                            
                        <div class="card-logo">
                            <img src="<?php echo $icon ;?>">
                        </div>
                        <div class="card-title">
                            <h3><?php echo frafca_wp_kses_text($title); ?></h3>
                        </div>
                        <div class="card-description">
                            <?php echo frafca_wp_kses_text($description) ; ?>
                        </div>

                        <a class="default-btn yellow" href="<?php echo get_the_permalink($link); ?>" >
                            <?php echo frafca_wp_kses_text($link_text); ?>
                        </a> 

                    </div>
                <?php endforeach; ?>
            </div>
        </section><!-- #card-about-us -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>