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
        <header id="front-page-banner"  class="frafca-hero-image">
            <!-- hero contents -->
            <?php 
                $heros = frafca_cfs('banner');
                foreach( $heros as $hero ) :        
                    $hero_img = $hero['banner_image'];
                    $hero_title = $hero['banner_title'];
                    $hero_description = $hero['banner_description'];
            ?>
                <div class="hero-image-page" style="
                    background : 
                        url(<?php echo $hero_img; ?>);
                    background-size: cover;
                    background-position: center; 
                    background-attachment: fixed;
                    background-repeat: no-repeat;                   
                ">
                    <h1 class="page-title screen-reader-text">
                        <?php single_post_title(); ?>
                    </h1>     
                    
                    <div class="header-title">
                        <h2>
                            <?php echo $hero_title ;?>
                        </h2>
                        <p>
                            <?php echo $hero_description; ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?><!-- end hero contents -->

            <!-- scroll down with the arrow -->
            <div class="scroll-down">
                <p>Scroll Down</p>
                <i class="fas fa-chevron-down"></i>
            </div>

        </header><!-- #front-page-banner -->

        <section id="front-page-about-us">
            <h2><?php echo frafca_cfs('about_us') ?></h2>
            <div class="flex-cards">
                <?php  
                    $card_about_us = frafca_cfs('card_about_us');
                    foreach($card_about_us as $card) :
                            $icon = $card['card_icon'];
                            $title = $card['card_title'];
                            $description = $card['card_description'];
                ?>

                    <div class="round-rect-card pink">
                        <div class="card-icon">
                            <img src="<?php echo $icon ;?>" alt="<?php echo $title;?>">
                        </div>
                        <h3><?php echo $title;?></h3>
                        <p><?php echo $description;?></p>
                    </div>

                <?php endforeach; ?>
            </div>
            <input class='default-btn yellow' type="button" value="Learn More">
        </section><!-- #front-page-about-us -->

        <section id="front-page-what-we-offer">
            <?php  
                $what_we_offer = frafca_cfs('what_we_offer');
                foreach($what_we_offer as $content) :
                    $image = $content['image'];
                    $title = $content['title'];
                    $description = $content['descriptoin'];
                    $button = $content['button'];
            ?>
                <div class="containter col-2" style="
                    background :
                        linear-gradient( to bottom, rgba(47,43,92,0.3) 0%, rgba(47,43,92,0.3) 100%), 
                        url(<?php echo $image;?>);
                    background-size: cover;
                    background-position: center; 
                    background-attachment: fixed;
                    background-repeat: no-repeat;
                ">
                </div>

                <div class="containter col-2">
                    <h3><?php echo $title ?></h3>
                    <p><?php echo $description ?></p>
                    <a href="<?php echo $button['url']; ?>">
                        <input class='default-btn yellow' type="button" value="<?php echo $button['text']; ?>">
                    </a>
                </div>

            <?php endforeach ?>
            
        </section><!-- #front-page-what-we-offer -->

        <section id="front-page-get-involved">
            <h2>
                <?php echo frafca_cfs('get_involved') ?>
            </h2>
            <div class="flex-cards">
                <?php  
                    $card_get_involved = frafca_cfs('card_get_involved');
                    foreach($card_get_involved as $content):
                        $icon = $content['card_icon'];
                        $title = $content['card_title'];
                        $description = $content['descriptoin_of_the_card'];
                        $button = $content['button'];
                ?>

                    <div class="round-rect-card purple">
                        <div class="card-icon">
                            <img src="<?php echo $icon; ?>" alt="<?php echo $title; ?>">
                        </div>
                        <h3><?php echo $title; ?></h3>
                        <p><?php echo $description; ?></p>
                        
                        <a href="<?php echo $button['url']; ?>">
                            <input class='default-btn yellow' type="button" value="<?php echo $button['text']; ?>">
                        </a>
                    </div>

                <?php endforeach ?>

        </section><!-- #front-page-get-involved -->

        <section id="front-page-partners">
            <h2>Partners</h2>
            <?php 
                $partners = CFS()->get( 'partners' );                
                foreach( $partners as $partner ) :
                    $partner_name = $partner['partner_name'];
                    $img_partner = $partner['logo'];
            ?>
                <div class="partner-content">
                    <div class="partner-logo">
                        <img src="<?php echo $img_partner;?>" alt="<?php echo $partner_name; ?>">
                    </div>
                    <p>
                        <?php echo $partner_name; ?>
                    </p>
                </div>

            <?php endforeach; ?>
        </section><!-- #front-page-partners -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>