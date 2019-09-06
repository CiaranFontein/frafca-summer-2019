<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

function frafca_post_type_programs_services() {

	$labels = array(
		'name'                  => _x( 'Programs and Services', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Program and Service', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Programs and Services', 'text_domain' ),
		'name_admin_bar'        => __( 'Program and Service', 'text_domain' ),
		'archives'              => __( 'Program and Service Archives', 'text_domain' ),
		'attributes'            => __( 'Program and Service Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Program and Service:', 'text_domain' ),
		'all_items'             => __( 'All Programs and Services', 'text_domain' ),
		'add_new_item'          => __( 'Add New Program and Service', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Program and Service', 'text_domain' ),
		'edit_item'             => __( 'Edit Program and Service', 'text_domain' ),
		'update_item'           => __( 'Update Program and Service', 'text_domain' ),
		'view_item'             => __( 'View Program and Service', 'text_domain' ),
		'view_items'            => __( 'View Programs and Services', 'text_domain' ),
		'search_items'          => __( 'Search Program and Service', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Program and Service', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Program and Service', 'text_domain' ),
		'items_list'            => __( 'Programs and Services list', 'text_domain' ),
		'items_list_navigation' => __( 'Programs and Services list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Programs and Services list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Program and Service', 'text_domain' ),
		'description'           => __( 'A program and service post type for FRAFCA', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-aside',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'			=> true,
	);
	register_post_type( 'prgrm_svc', $args );

}
add_action( 'init', 'frafca_post_type_programs_services', 0 );