<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

function frafca_taxonomy_programs_services() {

	$labels = array(
		'name'                       => _x( 'Programs & Services Type', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Program & Service Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Programs & Services Type', 'text_domain' ),
		'all_items'                  => __( 'All Programs & Services Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Programs & Services Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Programs & Services Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Programs & Services Type', 'text_domain' ),
		'add_new_item'               => __( 'Add New Programs & Services Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Programs & Services Type', 'text_domain' ),
		'update_item'                => __( 'Update Programs & Services Type', 'text_domain' ),
		'view_item'                  => __( 'View Programs & Services Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Programs & Services Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Programs & Services Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Programs & Services Types', 'text_domain' ),
		'search_items'               => __( 'Search Programs & Services Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Programs & Services Types', 'text_domain' ),
		'items_list'                 => __( 'Programs & Services Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Programs & Services Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'				 => true,
	);
	register_taxonomy( 'prgrm_svc_type', array( 'prgrm_svc' ), $args );

}
add_action( 'init', 'frafca_taxonomy_programs_services', 0 );