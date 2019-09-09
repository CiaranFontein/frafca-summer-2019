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
        <header id="get-involved-banner"  class="frafca-hero-image get-involved-banner-header">
			<?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #front-page-banner -->
		<h2 class="contact-location-header"><?php echo frafca_cfs('location_header') ?></h2>
        <section class="get-involved">
            <div class="grid-cards contact-cards">
				<?php  
                    $card = frafca_cfs('cards_get_involved');
                    foreach($card as $card) :
                            $title = $card['get_involved_title'];
                            $description = $card['get_involved_description'];
                            // array of related posts
							$learn_more = $card['get_involved_learn_more'];
                ?>

                    <div class="rect-card purple">
                        <h3><?php echo $title;?></h3>
                        <p><?php echo $description;?></p>
                        
                        <?php
                        foreach($learn_more as $post):
                    
                        ?>
                        <a class="default-btn yellow" href="<?php echo get_the_permalink($post); ?>" 
                            target="_blank">
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