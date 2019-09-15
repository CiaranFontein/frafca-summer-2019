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
		<h2 class="contact-location-header"><?php echo frafca_cfs('location_header') ?></h2>
        <section id="page-contact">
            <div class="grid-cards contact-cards">
				<?php  
                    $card = frafca_cfs('add_a_new_job_posting_card');
                    foreach($card as $card) :
                            $title = $card['department'];
                            $address = $card['program'];
							$services = $card['description'];
                            $button = $card['learn_more'];

                ?>

                    <div class="rect-card purple">
                        <h3><?php echo $title;?></h3>
						<p><?php echo $address;?></p>
						<p><?php echo $services;?></p>
						<p><?php echo $phone;?></p>
						<p><?php echo $fax;?></p>
                        <a class='default-btn yellow' href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>">
                            <?php echo $button['text']; ?>
                        </a>

                    </div>

                <?php endforeach; ?>
                
                <?php 
                    $cardwl = frafca_cfs('card_without_location');
                        foreach ($cardwl as $cardwl):
                            $titlewl = $cardwl['office_title'];
                            $addresswl = $cardwl['address'];
                            $serviceswl = $cardwl['services'];
                            $phonewl = $cardwl['phone'];
                            $faxwl = $cardwl['fax'];
                ?>

                    <div class="rect-card purple nolocation">

                        <h3><?php echo $titlewl;?></h3>
						<p><?php echo $addresswl;?></p>
						<p><?php echo $serviceswl;?></p>
						<p><?php echo $phonewl;?></p>
						<p><?php echo $faxwl;?></p>
                    
                    </div>
               
                <?php endforeach; ?>
            
            </div>
        </section><!-- #page-contact -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>