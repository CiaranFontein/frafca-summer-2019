<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package FRAFCA_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function frafca_theme_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'frafca_theme_body_classes' );


// Remove "Editor" links from sub-menus
function frafca_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'frafca_remove_submenus', 110 );


// Create CFS shorthand
function frafca_cfs($make_var) {
	//** Custom Field Suite plugin is required
	$frafca_cfs = CFS() -> get($make_var);
	return $frafca_cfs;
}
add_action('plugins_loaded', 'frafca_cfs');

// Restrain CFS Loop in shorthand to return only the last array 
if (! function_exists("array_key_last")) {
    function array_key_last($array) {
        if (!is_array($array) || empty($array)) {
            return NULL;
        }
       
        return array_keys($array)[count($array)-1];
    }
}

function last_frafca_cfs($field_name) {

    $last_key = array_key_last( frafca_cfs($field_name) );
    $return_last_arr = frafca_cfs($field_name)[$last_key];
    return $return_last_arr;
}
add_action('plugins_loaded', 'last_frafca_cfs');

// Escaping html tags
function frafca_wp_kses_text($string) {
    $condition = array(
        'a' => array(
            'href' => array(),
            'title' => array()
        ),
        'br' => array(),
        'em' => array(),
        'strong' => array(),
    );
    $return_value = wp_kses($string, $condition);

	return $return_value;
}
add_action('plugins_loaded', 'frafca_wp_kses_text');


// Programs and Services posts drop-down menus for ContactForm 7
function dynamic_field_values ( $tag, $unused ) {


    if ( $tag['name'] != 'programs-services' ) // Field Name
        return $tag;

    $args = array (
        'numberposts'   => -1,
        'post_type'     => 'prgrm_svc',
        'orderby'       => 'title',
        'order'         => 'ASC',
    );

    $prgrams_services_posts = get_posts($args);

    if ( ! $prgrams_services_posts )
        return $tag;

    foreach ( $prgrams_services_posts as $prgrams_services_post ) {
		
		$tag['raw_values'][] = $prgrams_services_post->post_title;
        $tag['values'][] = $prgrams_services_post->post_title;
		$tag['labels'][] = $prgrams_services_post->post_title;	
	}
	
    return $tag;
	
}

add_filter( 'wpcf7_form_tag', 'dynamic_field_values', 10, 2);

// Altering titles on calendar views
function tribe_alter_event_archive_titles ( $original_recipe_title, $depth ) {

	// Modify the titles here
	// Some of these include %1$s and %2$s, these will be replaced with relevant dates
	$title_upcoming =   'Upcoming Events'; // List View: Upcoming events
	$title_past =       'Past Events'; // List view: Past events
	$title_range =      'Events for %1$s - %2$s'; // List view: range of dates being viewed
	$title_month =      '%1$s'; // Month View, %1$s = the name of the month
	$title_day =        'Events for %1$s'; // Day View, %1$s = the day
	$title_all =        'All events for %s'; // showing all recurrences of an event, %s = event title
	$title_week =       'Events for week of %s'; // Week view

	// Don't modify anything below this unless you know what it does
	global $wp_query;
	$tribe_ecp = Tribe__Events__Main::instance();
	$date_format = apply_filters( 'tribe_events_pro_page_title_date_format', tribe_get_date_format( true ) );

	// Default Title
	$title = $title_upcoming;

	// If there's a date selected in the tribe bar, show the date range of the currently showing events
	if ( isset( $_REQUEST['tribe-bar-date'] ) && $wp_query->have_posts() ) {

		if ( $wp_query->get( 'paged' ) > 1 ) {
			// if we're on page 1, show the selected tribe-bar-date as the first date in the range
			$first_event_date = tribe_get_start_date( $wp_query->posts[0], false );
		} else {
			//otherwise show the start date of the first event in the results
			$first_event_date = tribe_event_format_date( $_REQUEST['tribe-bar-date'], false );
		}

		$last_event_date = tribe_get_end_date( $wp_query->posts[ count( $wp_query->posts ) - 1 ], false );
		$title = sprintf( $title_range, $first_event_date, $last_event_date );
	} elseif ( tribe_is_past() ) {
		$title = $title_past;
	}

	// Month view title
	if ( tribe_is_month() ) {
		$title = sprintf(
			$title_month,
			date_i18n( tribe_get_option( 'monthAndYearFormat', 'F Y' ), strtotime( tribe_get_month_view_date() ) )
		);
	}

	// Day view title
	if ( tribe_is_day() ) {
		$title = sprintf(
			$title_day,
			date_i18n( tribe_get_date_format( true ), strtotime( $wp_query->get( 'start_date' ) ) )
		);
	}

	// All recurrences of an event
	if ( function_exists('tribe_is_showing_all') && tribe_is_showing_all() ) {
		$title = sprintf( $title_all, get_the_title() );
	}

	// Week view title
	if ( function_exists('tribe_is_week') && tribe_is_week() ) {
		$title = sprintf(
			$title_week,
			date_i18n( $date_format, strtotime( tribe_get_first_week_day( $wp_query->get( 'start_date' ) ) ) )
		);
	}

	if ( is_tax( $tribe_ecp->get_event_taxonomy() ) && $depth ) {
		$cat = get_queried_object();
		$title = '<a href="' . esc_url( tribe_get_events_link() ) . '">' . $title . '</a>';
		$title .= ' &#8250; ' . $cat->name;
	}

	return $title;
}
add_filter( 'tribe_get_events_title', 'tribe_alter_event_archive_titles', 11, 2 );