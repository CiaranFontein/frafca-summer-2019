<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-job-postings
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="page-job-postings-banner"  class="frafca-hero-image page-job-postings-banner-header">
			<?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #front-page-banner -->
		<h2 class="job-postings-header"><?php echo frafca_cfs('location_header') ?></h2>
        <section id="page-job-postings">
            <div class="grid-cards contact-cards">
				<?php  
                    $card = frafca_cfs('card');
                    foreach($card as $card) :
                            $title = $card['office_title'];
                            $address = $card['address'];
							$services = $card['services'];
							$phone = $card['phone'];
							$fax = $card['fax'];
                            $button = $card['view_location'];

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