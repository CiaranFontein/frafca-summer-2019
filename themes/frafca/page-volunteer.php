<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-volunteer
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="page-volunteer-banner"  class="frafca-hero-image page-volunteer-banner-header">
			<?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #page-banner -->
		<!-- <h2 class="page-volunteer-header"><?php echo frafca_cfs('meet_our_team') ?></h2> -->

        <section id="page-volunteer">
            <div class="flex-container white page-volunteer-container">

				<div class="flex-wrap single-description">
						<?php  
							$card = frafca_cfs('why_volunteer');
							foreach($card as $card) :
									$header = $card['why_volunteer_header'];
									$description = $card['why_volunteer_description'];
						?>

							<div class="content-type-text volunteer-info">
	
									<h3><?php echo $header;?></h3>
									<p><?php echo $description;?></p>
								
							</div>

						<?php endforeach; ?>
					
				</div>

				<div class="flex-wrap single-description">
						<?php  
							$card = frafca_cfs('how_to_apply');
							foreach($card as $card) :
									$header = $card['how_to_apply_header'];
									$description = $card['how_to_apply_description'];
						?>

							<div class="content-type-text volunteer-info">
								
									<h3><?php echo $header;?></h3>
									<p><?php echo $description;?></p>
								
							</div>

						<?php endforeach; ?>
				</div>				
			</div>
			
			<div class="flex-wrap single-details">
				<?php  
                    $card = frafca_cfs('contact_information');
                    foreach($card as $card) :
                            $header = $card['contact_header'];
							$title = $card['contact_title'];
							$email = $card['email'];
							$phone = $card['phone'];
							$fax = $card['fax'];
                ?>

                    <div class="content-type-widgets volunteer-info-container">
						
							<h3 class="purple"><?php echo $header;?></h3>
							<div class="white ">
								<p><?php echo $title;?></p>
								<span>Email: </span><a href="mailto:<?php echo $email;?>" target="_top"><?php echo $email;?></a>
								<p><span>Phone: </span> <?php echo $phone;?></p>
								<p><span>Fax: </span> <?php echo $fax;?></p>
							</div>
						
                    </div>

                <?php endforeach; ?>
            
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>