<?php
/**
 * Month View Nav Template
 * This file loads the month view navigation.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/month/nav.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
} ?>

<?php do_action( 'tribe_events_before_nav' ) ?>

<nav class="tribe-events-nav-pagination frafca-events-nav-pagination" aria-label="<?php esc_html_e( 'Calendar Month Navigation', 'the-events-calendar' ) ?>">
	<ul class="tribe-events-sub-nav frafca-events-sub-nav">
		<li class="tribe-events-nav-previous frafca-events-nav-previous">
		<i class="fas fa-angle-left"></i><?php tribe_events_the_previous_month_link(); ?>
		</li>
		<!-- Month Title -->
		<?php do_action( 'tribe_events_before_the_title' ); ?>
		<h1 class="tribe-events-page-title frafca-events-page-title">
			<?php echo tribe_get_events_title() ?>
		</h1>
		<?php do_action( 'tribe_events_after_the_title' ); ?>
		<!-- .tribe-events-nav-previous -->
		<li class="tribe-events-nav-next frafca-events-nav-next">
		<?php tribe_events_the_next_month_link(); ?><i class="fas fa-angle-right"></i>
		</li>
		<!-- .tribe-events-nav-next -->
	</ul><!-- .tribe-events-sub-nav -->
</nav>
<?php do_action( 'tribe_events_after_nav' );