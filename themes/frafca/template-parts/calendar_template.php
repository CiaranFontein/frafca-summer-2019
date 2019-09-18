<?php
    global $post;
    $month_start = date('Y-m') . '-01';
	$month_end = date("Y-m-t");
	$events = tribe_get_events([ 
        'posts_per_page' => -1,
        'start_date'   => $month_start,
		'end_date'     => $month_end,
		]);
?>

    <div class="header-current-month">
		<input id="hidden-current-month-value" type="hidden" value="<?php echo date('Y-m');?>">
		<?php echo date('F, Y') ;?>
	</div> <!-- end .header-current-month -->
		
    <?php
    foreach ( $events as $post ) :
        setup_postdata( $post );
        $title = $post -> post_title;
        $start_date = tribe_get_start_date( $post );
        $end_date = tribe_get_end_time( $post );
        $event_address = tribe_get_address( $post );
        $event_city = tribe_get_city( $post );
    ?>
    
        <a href="<?php echo get_the_permalink( $post );?>"> 
            <div class="frafca-events-listing-mobile">
                <h4>
                        <?php echo $title ?>
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
        </a>
    <?php endforeach; ?>
</section> 
<!-- end .tribe-events-listing -->