<?php
/**
 * Month View Content Template
 * The content template for the month view of events. This template is also used for
 * the response that is returned on month view ajax requests.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/content.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<div id="tribe-events-content" class="tribe-events-month">

	<!-- Notices -->
	<?php tribe_the_notices() ?>

	<!-- Month Header -->
	<?php do_action( 'tribe_events_before_header' ) ?>
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>

	<!-- Header Navigation -->
	<?php tribe_get_template_part( 'month/nav' ); ?>

	</div>
	<!-- #tribe-events-header -->
	<?php do_action( 'tribe_events_after_header' ) ?>

	<!-- Month Grid -->
	<?php tribe_get_template_part( 'month/loop', 'grid' ) ?>

	<!-- Month Footer -->
	<?php do_action( 'tribe_events_before_footer' ) ?>
	<div id="tribe-events-footer">

	<!-- Footer Navigation -->
	<?php do_action( 'tribe_events_before_footer_nav' ); ?>
	<!-- <?php //tribe_get_template_part( 'month/nav' ); ?> -->
	<?php do_action( 'tribe_events_after_footer_nav' ); ?>

	</div>
	<!-- #tribe-events-footer -->
	<?php do_action( 'tribe_events_after_footer' ) ?>
	<?php tribe_get_template_part( 'month/mobile' ); ?>
	<?php tribe_get_template_part( 'month/tooltip' ); ?>
</div><!-- #tribe-events-content -->


<section class="tribe-events-listing">
		
		<?php
		if(!is_singular('tribe_events')):

			$event_posts = get_posts( array(
				'posts_per_page' => 5,
				'post_type'       => 'tribe_events'
			) );
 
			// if the page isn't refreshing goto -> settings -> permalinks 
			// and this will help to clear PHP transients which are caching the events calendar code
			// var_dump($event_posts);

			if ( $event_posts ) {
				foreach ( $event_posts as $post ) : setup_postdata( $post ); 

				$venue_id = '';

				if(!empty($venue_id = get_post_meta($post->ID, '_EventVenueID'))):
					// echo 'venue is set';
					$venue_id = get_post_meta($post->ID, '_EventVenueID')[0];
					// $event_location_address = get_post_meta($post->ID, '_VenueAddress')[0];
					$venue_address = get_post_meta($venue_id, '_VenueAddress')[0];
		?>
				<a class="frafca-event-on-mobile" href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a>
		<?php	
					echo '<p>location: ' . $venue_address . '</p>';

					else:
					echo 'Venue address is not available at this time';

				endif;

				$event_start_date = get_post_meta($post->ID, '_EventStartDate')[0];
				echo $event_start_date;

				$event_end_date = get_post_meta($post->ID, '_EventEndDate')[0];
				echo $event_end_date;
				?>

				<?php
				endforeach;
				wp_reset_postdata();
			}

		endif;
		?>
</section>