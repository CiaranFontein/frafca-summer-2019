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

				   $card = frafca_cfs('add_a_new_job_posting_card');
				   foreach($card as $card) :
						   $department = $card['department'];
						   $program = $card['program'];
						   $description = $card['description'];
						   $button = $card['learn_more'];

			   ?>

				   <div class="rect-card purple">
					   <p><?php echo $department;?></p>
					   <h3><?php echo $program;?></h3>
					   <p><?php echo $description;?></p>
					   <a class='default-btn yellow' href="<?php echo $button; ?>">
						   Learn More
					   </a>
                    </div>

                <?php endforeach; ?>
            
            </div>
        </section><!-- #page-contact -->

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>