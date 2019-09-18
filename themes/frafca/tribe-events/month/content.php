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


<!-- .tribe-events-listing -->
<section class="tribe-events-listing">

	<?php 
	$parse_current_uri = explode( 'events/' , $_SERVER['REQUEST_URI']);
	
	var_dump($parse_current_uri);
	
	// Default calendar view
		if ( 
			empty( $_GET['tribe-bar-date']) 
			&& 
			empty( $_GET['tribe-bar-search'] ) 
			&&
			strlen($parse_current_uri[1]) === 0
		) :
		get_template_part( 'template-parts/calendar_template' );
	?>

	<?php elseif (strlen($parse_current_uri[1]) > 0):
	// traversing 
		get_template_part( 'template-parts/calendar_template', 'date' );
	?>

<<<<<<< HEAD
	<?php elseif ($_GET['tribe-bar-date']): 
	// Query by the date
		$filter_event_date = $_GET['tribe-bar-date'];
	?>

	<?php elseif ($_GET['tribe-bar-search']):
	// Query by the search keyword
		$filter_event_search = $_GET['tribe-bar-search'];
	?>
	<?php else: 
	// Query by the date and search keyword
		$filter_event_date = $_GET['tribe-bar-date'];
		$filter_event_search = $_GET['tribe-bar-search'];
	?>
	<?php endif; flush_rewrite_rules( $hard = true );?>