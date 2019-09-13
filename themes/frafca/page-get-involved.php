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
        </header><!-- #get-involved-banner -->

        <h2 class="contact-location-header"><?php echo frafca_cfs('location_header') ?>
        </h2>

        <section class="get-involved">
            <div class="grid-cards contact-cards">
				<?php  
                    $cards = frafca_cfs('cards_get_involved');
                    foreach($cards as $card) :
                            $title = $card['title'];
                            $description = $card['description'];
                            // array of related posts
							$learn_more = $card['button'];
                ?>

                    <div class="rect-card purple">
                        <h3><?php echo $title;?></h3>
                        <p><?php echo $description;?></p>
                        
                        <?php
                        foreach($learn_more as $post):
                    
                        ?>
                        <a class="default-btn yellow" href="<?php echo get_the_permalink($post); ?>" >
                            Learn More
                        </a>
                        <?php
                        endforeach;
                        ?>
                    </div>

                <?php endforeach; ?>
            
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>