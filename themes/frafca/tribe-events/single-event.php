<?php

/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 * Template Name: single-event
 */

if (!defined('ABSPATH')) {
	die('-1');
}


$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single">

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<div class="single-event-header">

		<div class="tribe-events-schedule tribe-clearfix single-event-purple get-ticket-header-container">
			<?php the_title('<h1 class="tribe-events-single-event-title">', '</h1>'); ?>
			<i class="far fa-calendar-alt"></i> &nbsp &nbsp <?php echo tribe_events_event_schedule_details($event_id, '<h2>', '</h2>'); ?>
			<p class="get-ticket-address-details"><i class="fas fa-map-marker-alt">&nbsp &nbsp</i><?php echo tribe_get_address(); ?>, <?php echo tribe_get_city(); ?></p>
		</div>
		
	
	</div>

	<div class="single-event-content-container">
			<?php while (have_posts()) :  the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<!-- Event featured image, but exclude link -->
						<?php echo tribe_event_featured_image($event_id, 'full', false); ?>

						<!-- Event content -->
						<?php do_action('tribe_events_single_event_before_the_content') ?>
				</div>
							<div class="tribe-events-single-event-description tribe-events-content single-event-content">
								<h1> Details </h1>
								<?php the_content(); ?>
							</div>
						<!-- .tribe-events-single-event-description -->
						<?php do_action('tribe_events_single_event_after_the_content') ?>

						<!-- Event meta -->
						<?php do_action('tribe_events_single_event_before_the_meta') ?>
						<?php tribe_get_template_part('modules/meta'); ?>
						<?php do_action('tribe_events_single_event_after_the_meta') ?>
			 <!-- #post-x -->
				<?php if (get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option('showComments', false)) comments_template() ?>
			<?php endwhile; ?>
	</div>

	<!-- #page-contact -->
	<!-- #tribe-events-footer -->
	


<?php if ( tribe_get_cost() ) : ?> 
	<!-- <div class="tribe-events-event-cost"> -->
	<div class="rect-card white get-ticket-footer">
		<?php  
			$ticketdesc = frafca_cfs('ticket_link_description');
		?>
		<a class="default-btn yellow" href="<?php echo tribe_get_event_website_url(); ?>" target="_blank"> Get Ticket </a>

		<div class="get-ticket-footer-desc">
				
			<p class="get-ticket-price"><?php echo tribe_get_cost( null, true ); ?></p>
			<p class="get-ticket-description"><?php echo $ticketdesc;?></p>

		</div>
		
		<?php
		do_action( 'tribe_events_inside_cost' )
		?>
	</div>
<?php endif; ?>


</div>