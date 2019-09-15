<?php
/**
 * Month View Title Template
 * The title template for the month view of events.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/title-bar.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 * @since   4.6.19
 *
 */
?>

<div class="tribe-events-title-bar frafca-events-title-bar">



				
	<!-- Month Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>

	<!-- .tribe-events-nav-previous -->
	<div class="tribe-events-nav-previous frafca-events-nav-previous">
		<?php tribe_events_the_previous_month_link(); ?>
	</div>
	<h1 class="tribe-events-page-title frafca-events-page-title"><?php echo tribe_get_events_title() ?></h1>
	
	<!-- .tribe-events-nav-next -->
	<div class="tribe-events-nav-next frafca-events-nav-next">
			<?php tribe_events_the_next_month_link(); ?>
	</div>

	<?php do_action( 'tribe_events_after_the_title' ); ?>

</div>
