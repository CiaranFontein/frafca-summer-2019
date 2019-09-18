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
	global $post;
	// $month_start = date('Y-m') . '-01';
	// $month_end = date("Y-m-t");
	$events = tribe_get_events([ 
		'posts_per_page' => 5,
		// 'start_date'   => $month_start,
		// 'end_date'     => $month_end,
		]);
	?>

	<div class="header-current-month">

	</div>
		
		<?php
<<<<<<< HEAD

				global $post;
				$month_start = date('Y-m') . '-01';
				$month_end = date("Y-m-t");
				$events = tribe_get_events([ 
					'posts_per_page' => 5,
					'start_date'   => $month_start,
   					'end_date'     => $month_end,
				]);

				// var_dump($month_start, $month_end);

				foreach ( $events as $post ) {
				setup_postdata( $post );
				echo '<div class="frafca-events-listing-mobile">';
				echo '<h4><a href="'. get_the_permalink( $post ). '">' . ($post->post_title) . '</a></h4>';
				echo '<p>' . tribe_get_start_date( $post ) . ' - ' . tribe_get_end_time( $post ) . '</p>';
				echo '<p>' . tribe_get_address( $post ) . ' ' . tribe_get_city( $post ) . '</p>';
				echo '</div>';
		}
=======
		// var_dump($month_start, $month_end);

		foreach ( $events as $post ) :
			setup_postdata( $post );
			$title = $post -> post_title;
			$start_date = tribe_get_start_date( $post );
			$end_date = tribe_get_end_time( $post );
			$event_address = tribe_get_address( $post );
			$event_city = tribe_get_city( $post );
			// var_dump($post);
>>>>>>> 3c8a7c91e40702baeab97c57670c01643683edac
		?>
			<div class="frafca-events-listing-mobile">
				<h4>
					<a href="<?php echo get_the_permalink( $post );?>"> 
						<?php echo $title ?>
					</a>
				</h4>
				
				<p>
					<!-- Check if it's all day event -->
					<?php 
					if ( !empty( $end_date ) ){
						echo "$start_date - $end_date";
					} else {
						echo $start_date;
					}
					?>
				</p>
				<!-- Check if event_city exist -->
				<?php if ( !empty( $event_city )) : ?>
					<p><?php echo "$event_address, $event_city"; ?></p>
				<?php elseif ( !empty( $event_address ) ) : ?>
					<p><?php echo $event_address; ?></p>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
</section> <!-- .tribe-events-listinge.end -->