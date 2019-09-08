<?php

/**
 * The main template file.
 * 
 * @package FRAFCA_Theme
 * Template Name: page-team
 */

get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Hero Image : type 1  -->
        <header id="page-team-banner"  class="frafca-hero-image page-team-banner-header">
			<?php get_template_part( 'template-parts/hero_banner' ); ?>
        </header><!-- #page-banner -->
		<h2 class="page-team-header"><?php echo frafca_cfs('meet_our_team') ?></h2>
        <section id="page-team">
            <div class="grid-cards team-cards">
				<?php  
                    $card = frafca_cfs('card');
                    foreach($card as $card) :
                            $image = $card['member_image'];
                            $name = $card['member_name'];
							$title = $card['member_title'];
							$description = $card['member_description'];
							$contact = $card['member_contact'];
                ?>

                    <div class="rect-card white">
						<?php echo '<img src=' . $image . '">';?>
						<div class="card-info">
							<p><?php echo $name;?></p>
							<p><?php echo $title;?></p>
							<p><?php echo $description;?></p>
							<a href="mailto:<?php echo $contact;?>" target="_top"><?php echo $contact;?></a>
						</div>
                    </div>

                <?php endforeach; ?>
            
            </div>
        </section><!-- #prgrm_svc-categories -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>