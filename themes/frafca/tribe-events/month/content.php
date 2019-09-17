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
	?>
		<div class="frafca-events-listing-mobile">
		
		<?php if ( $event_posts ) :

			foreach ( $event_posts as $post ) : 
				setup_postdata( $post ); 
				$venue_id = '';

				if(!empty($venue_id = get_post_meta($post->ID, '_EventVenueID'))):
					// echo 'venue is set';
					$venue_id = get_post_meta($post->ID, '_EventVenueID')[0];
					// $event_location_address = get_post_meta($post->ID, '_VenueAddress')[0];
					$venue_address = get_post_meta($venue_id, '_VenueAddress')[0];

					$event_start_date = get_post_meta($post->ID, '_EventStartDate')[0];
					$event_end_date = get_post_meta($post->ID, '_EventEndDate')[0];
		?>
				<div class="hello-david">
					<h4><a class="frafca-event-on-mobile" href="<?php echo get_the_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></h4>
					<p><?php echo $venue_address; ?></p>
					<p><?php echo $event_start_date; ?></p>
					<p><?php echo $event_end_date; ?></p>
				</div> <!-- end .hello-david -->

				<?php endif; ?> <!-- !empty() -->
			<?php endforeach; wp_reset_postdata(); ?> <!-- end foreach( $event_posts as $post ) -->
			
		</div> <!-- end .frafca-events-listing-mobile -->
			
		<?php else : ?>
			<p> Venue address is not available at this time </p>
		<?php endif; ?> <!-- end ( $event_posts ) -->
	<?php endif; ?> <!-- end !is_singular() -->

	<?php 
	$events = tribe_get_events( [ 
   'posts_per_page' => 5, 
   'start_date'     => 'now',
] ); ?>

</section>

<section>
<?php
global $post;

// Retrieve the next 5 upcoming events
$events = tribe_get_events( [ 'posts_per_page' => 5 ] );

// var_dump($events);

// Loop through the events: set up each one as
// the current post then use template tags to
// display the title and content
foreach ( $events as $post ) {
   setup_postdata( $post );

   // This time, let's throw in an event-specific
   // template tag to show the date after the title!
   echo '<h4>' . $post->post_title . '</h4>';
   echo '<p>' . tribe_get_start_date( $post ) . '</p>';
   echo '<p>' . tribe_get_end_date( $post ) . '</p>';
   echo '<p>' . tribe_get_address( $post ) . ' ' . tribe_get_city( $post ) . '</p>';
}
?>

	</section>