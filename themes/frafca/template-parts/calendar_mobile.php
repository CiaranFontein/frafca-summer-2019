<!-- .tribe-events-listing -->
<section class="tribe-events-listing">

	<?php 
    $parse_current_uri = explode( 'events/' , $_SERVER['REQUEST_URI']);
	// Default calendar view
		if ( 
            empty($parse_current_uri[1])
			&&
			empty( $_GET['tribe-bar-date']) 
			&& 
			empty( $_GET['tribe-bar-search'] ) 
            && count($parse_current_uri) > 1
        ) :
		get_template_part( 'template-parts/calendar_template' );
	?>

    <?php elseif (count($parse_current_uri) === 1  || strlen($parse_current_uri[1]) > 1):
    // Query by Calendar Title 
        get_template_part( 'template-parts/calendar_template', 'date' );
    ?>
	<?php elseif ($_GET['tribe-bar-date']): 
	// Query by the date
		$filter_event_date = $_GET['tribe-bar-date'];
	?>
	<?php endif; // flush_rewrite_rules( $hard = true );?>