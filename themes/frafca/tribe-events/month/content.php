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
	<!-- <?php //do_action( 'tribe_events_after_footer' ) ?> -->
	<!-- <?php //tribe_get_template_part( 'month/mobile' ); ?> -->
	<!-- <?php //tribe_get_template_part( 'month/tooltip' ); ?> -->

	<section class="tribe-events-listing">
		<?php
		if(!is_singular('tribe_events')):

			$event_posts = get_posts( array(
				'posts_per_page' => 5,
				'post_type'       => 'tribe_events'
			) );

			// var_dump($event_posts);

			if ( $event_posts ) {
				foreach ( $event_posts as $post ) : setup_postdata( $post ); 
				
				// var_dump(get_post_meta($post->ID));
				echo $post->ID;
				// var_dump ($post->ID);

				$venue_id = get_post_meta($post->ID, '_EventVenueID')[0];
				$venue_address = get_post_meta($venue_id, '_VenueAddress')[0];
				$venue_city = get_post_meta($venue_id, '_VenueCity')[0];

				echo "venue address <h2>" . $venue_address . "</h2>";
				// $event_location_address = get_post_meta($post->ID, '_VenueAddress')[0];
				// get_post_meta($venue_id, '_VenueAddress')[0];

				$event_start_date = get_post_meta($post->ID, '_EventStartDate')[0];
				echo $event_start_date;

				$event_end_date = get_post_meta($post->ID, '_EventEndDate')[0];
				echo $event_end_date;
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
				endforeach;
				wp_reset_postdata();
			}

		endif;
		?>
</section>

</div><!-- #tribe-events-content -->
