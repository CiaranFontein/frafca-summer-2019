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
					
				<!-- </div>

				<div class="flex-wrap single-description"> -->
						<?php  
							$card = frafca_cfs('how_to_apply');
							foreach($card as $card) :
									$header = $card['how_to_apply_header'];
									$description = $card['how_to_apply_description'];
						?>

							<div class="content-type-text volunteer-apply-info">
								
									<h3><?php echo $header;?></h3>
									<p><?php echo $description;?></p>
								
							</div>

						<?php endforeach; ?>
				</div>				
			
			<div class="flex-wrap single-details">
					<?php 
                        $limit_information = count(frafca_cfs('contact_information')) -1;
						$information = array ( 0 => frafca_cfs('contact_information')[$limit_information] );
                        foreach( $information as $info ):      
					?>
					
                    <div class="content-type-widgets volunteer-info-container">
					<?php 
						// foreach($de_contacts as $de_contact):
						$keys = array_keys($info);
						$count_arr = count($info);
						$i = 0;
					?>
						<h3 class="purple">Contact Information</h3>
							<?php 
							while( $i < $count_arr ):
								$key_info = $keys[$i];
								$val_info = $info[$key_info];
							?>

								<p><strong><?php echo ucfirst($key_info); ?></strong> : <?php echo $val_info ;?></p>
							<?php $i++; endwhile;?>					
                    </div>
                <?php endforeach; ?>
            
			</div>
		</div>
		</section><!-- #page-volunteer -->
		
		<section class="get-in-touch">
            <div class="form-container purple">
                <?php  
                    $forms = frafca_cfs('get_in_touch');
                    echo $forms;
                ?>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>