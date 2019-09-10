<?php  
add_action( 'cmb2_admin_init', 'frafca_register_taxonomy_metabox' );

function frafca_register_taxonomy_metabox() {
    $prefix = '_frafca_term_';
    /**
     * Metabox to add fields to categories and tags
     */
    $cmb_term = new_cmb2_box( array(
        'id'               => $prefix . 'edit',
        'title'            => esc_html__( 'Category Metabox', 'cmb2' ), // Doesn't output for term boxes
        'object_types'     => array( 'term' ), // Tells CMB2 to use term_meta vs post_meta
        'taxonomies'       => array( 'prgrm_svc_type' ), // Tells CMB2 which taxonomies should have these fields
        // 'new_term_section' => true, // Will display in the "Add New Category" section
    ) );
    $cmb_term->add_field( array(
        'name' => esc_html__( 'Term Banner', 'cmb2' ),
        'desc' => esc_html__( 'field description (optional)', 'cmb2' ),
        'id'   => $prefix . 'banner',
        'type' => 'file',
    ) );
}
