<?php
/*
  Plugin Name: Plugin for WY-PFS Environmental Strategies Catalog
  Description: Site-specific code and functions changes
*/

/* CUSTOM POST TYPES */

// Create Strategy post type
function custom_post_type() {

// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Strategies', 'Post Type General Name', 'eleanor' ),
        'singular_name'       => _x( 'Strategy', 'Post Type Singular Name', 'eleanor' ),
        'menu_name'           => __( 'Strategies', 'eleanor' ),
        'parent_item_colon'   => __( 'Parent Strategy', 'eleanor' ),
        'all_items'           => __( 'All Strategies', 'eleanor' ),
        'view_item'           => __( 'View Strategy', 'eleanor' ),
        'add_new_item'        => __( 'Add New Strategy', 'eleanor' ),
        'add_new'             => __( 'Add New', 'eleanor' ),
        'edit_item'           => __( 'Edit Strategy', 'eleanor' ),
        'update_item'         => __( 'Update Strategy', 'eleanor' ),
        'search_items'        => __( 'Search Strategy', 'eleanor' ),
        'not_found'           => __( 'Not Found', 'eleanor' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'eleanor' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'strategies', 'eleanor' ),
        'description'         => __( 'Environmental Strategies', 'eleanor' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'causal-domain' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );

    // Registering your Custom Post Type
    register_post_type( 'strategies', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not
* unnecessarily executed.
*/

add_action( 'init', 'custom_post_type', 0 );


?>
