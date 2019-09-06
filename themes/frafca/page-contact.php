<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-contact
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="page-contact-banner"  class="frafca-hero-image page-contact-banner-header">
			<?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #front-page-banner -->

        <section id="page-contact">
				<?php  
                    $card = frafca_cfs('card');
                    foreach($card as $card) :
                            $title = $card['office_title'];
                            $address = $card['address'];
							$services = $card['services'];
							$phone = $card['phone'];
							$fax = $card['fax'];
							$location = $card['view_location'];
                ?>

                    <div class="page-contact-card purple">
                        <h5><?php echo $title;?></h5>
						<p><?php echo $address;?></p>
						<p><?php echo $services;?></p>
						<p><?php echo $phone;?></p>
						<p><?php echo $fax;?></p>
						<p><?php echo $location;?></p>
                    </div>

                <?php endforeach; ?>
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>