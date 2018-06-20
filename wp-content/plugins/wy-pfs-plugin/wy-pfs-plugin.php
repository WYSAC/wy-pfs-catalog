<?php
/*
  Plugin Name: Plugin for WY-PFS Environmental Strategies Catalog
  Description: Site-specific code and functions changes
  Version: 1.0
  Date: JULY 2018?????
*/

/* =====================================================
*
*   TABLE OF CONTENTS
*
*   - Notes
*   - Custom Post TYPES
*     -- Strategy
*   - Custom Taxonomies
*     -- Causal domains
*     -- Tobacco Goals
*   - Archive function for ACF-controled meta for Strategies
*
*   =====================================================
*     GENERAL NOTES ABOUT FEATURES
*       - Custom Post Types -
*
*       There is one custom post type: Strategies. Fields in the Strategies editor are managed with Advanced Custom Fields plugin.
*
*       - Custom Taxonomies -
*
*       There are two custom taxonomies created for the Strategies custom post type. These are heiarchical, in that they work like categories:
*       1. Causal Domains
*       2. Tobacco Goals
*
*       ONLY ADMIN can add/edit/delete something from the custom taxonomies. Role/user capabilities are managed using the User Role Editor plugin.
*
*  ===================================================== */


/* ============================
*   CUSTOM POST TYPES
*  ============================ */

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
        'search_items'        => __( 'Search Strategies', 'eleanor' ),
        'not_found'           => __( 'Not Found', 'eleanor' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'eleanor' ),
    );

// Set other options for Custom Post Type

    $args = array(
        'label'               => __( 'strategies', 'eleanor' ),
        'description'         => __( 'Environmental Strategies', 'eleanor' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor' ),
        // You can associate this CPT with a taxonomy or custom taxonomy.
        'taxonomies'          => array( 'causal-domain', 'tobacco-goals'),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */
        'hierarchical'        => false, //they are like posts, not pages (no "sub-strategies")
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
        'menu_icon'           => 'dashicons-networking' //change the menu icon
    );

    // Registering your Custom Post Type
    register_post_type( 'strategies', $args );

}

add_action( 'init', 'custom_post_type', 0 );


/* ============================
*   CUSTOM TAXONOMIES
*  ============================ */

/*  CAUSAL DOMAIN   */

// Register Causal Domain Taxonomy
if ( ! function_exists( 'custom_tax_domain' ) ) {

function custom_tax_domain() {

	$labels = array(
		'name'                       => _x( 'Causal Domains', 'Taxonomy General Name', 'text-domain' ),
		'singular_name'              => _x( 'Causal Domain', 'Taxonomy Singular Name', 'text-domain' ),
		'menu_name'                  => __( 'Causal Domains', 'text-domain' ),
		'all_items'                  => __( 'All Causal Domains', 'text-domain' ),
		'parent_item'                => __( 'Parent Causal Domains', 'text-domain' ),
		'parent_item_colon'          => __( 'Parent Causal Domain:', 'text-domain' ),
		'new_item_name'              => __( 'New Casual Domain Name', 'text-domain' ),
		'add_new_item'               => __( 'Add New Causal Domain', 'text-domain' ),
		'edit_item'                  => __( 'Edit Causal Domain', 'text-domain' ),
		'update_item'                => __( 'Update Causal Domain', 'text-domain' ),
		'view_item'                  => __( 'View Causal Domain', 'text-domain' ),
		'separate_items_with_commas' => __( 'Separate causal domains with commas', 'text-domain' ),
		'add_or_remove_items'        => __( 'Add or remove causal domains', 'text-domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used causal domains', 'text-domain' ),
		'popular_items'              => __( 'Popular Causal Domains', 'text-domain' ),
		'search_items'               => __( 'Search Causal Domains', 'text-domain' ),
		'not_found'                  => __( 'Not Found', 'text-domain' ),
		'no_terms'                   => __( 'No causal domains', 'text-domain' ),
		'items_list'                 => __( 'Causal domain list', 'text-domain' ),
		'items_list_navigation'      => __( 'Causal domain list navigation', 'text-domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true, // they behave like categories
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
  // Register the taxonomy, based on the $args, but only for the Strategy Post Type
	register_taxonomy( 'causal-domain', array( 'strategies' ), $args );

}
add_action( 'init', 'custom_tax_domain', 0 );

}

/*  TOBACCO GOALS  */

// Register Tobacco Goal Taxonomy
if ( ! function_exists( 'custom_tax_goal' ) ) {

function custom_tax_goal() {

	$labels = array(
		'name'                       => _x( 'Tobacco Goals', 'Taxonomy General Name', 'text-domain' ),
		'singular_name'              => _x( 'Tobacco Goal', 'Taxonomy Singular Name', 'text-domain' ),
		'menu_name'                  => __( 'Tobacco Goals', 'text-domain' ),
		'all_items'                  => __( 'All Tobacco Goals', 'text-domain' ),
		'parent_item'                => __( 'Parent Tobacco Goals', 'text-domain' ),
		'parent_item_colon'          => __( 'Parent Tobacco Goal:', 'text-domain' ),
		'new_item_name'              => __( 'New Tobacco Goal Name', 'text-domain' ),
		'add_new_item'               => __( 'Add New Tobacco Goal', 'text-domain' ),
		'edit_item'                  => __( 'Edit Tobacco Goal', 'text-domain' ),
		'update_item'                => __( 'Update Tobacco Goal', 'text-domain' ),
		'view_item'                  => __( 'View Tobacco Goal', 'text-domain' ),
		'separate_items_with_commas' => __( 'Separate tobacco goals with commas', 'text-domain' ),
		'add_or_remove_items'        => __( 'Add or remove tobacco goals', 'text-domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used tobacco goals', 'text-domain' ),
		'popular_items'              => __( 'Popular Tobacco Goals', 'text-domain' ),
		'search_items'               => __( 'Search Tobacco Goals', 'text-domain' ),
		'not_found'                  => __( 'Not Found', 'text-domain' ),
		'no_terms'                   => __( 'No tobacco goals', 'text-domain' ),
		'items_list'                 => __( 'Tobacco goal list', 'text-domain' ),
		'items_list_navigation'      => __( 'Tobacco goal list navigation', 'text-domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true, // they behave like categories
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
  // Register the taxonomy, based on the $args, but only for the Strategy Post Type
	register_taxonomy( 'tobacco-goals', array( 'strategies' ), $args );

}
add_action( 'init', 'custom_tax_goal', 0 );

}

/*  CAUSAL DOMAIN   */

// Register Effectiveness Taxonomy
if ( ! function_exists( 'custom_strategy_effectiveness' ) ) {

function custom_strategy_effectiveness() {

	$labels = array(
		'name'                       => _x( 'Strategy Effectiveness Indicators', 'Taxonomy General Name', 'text-domain' ),
		'singular_name'              => _x( 'Strategy Effectiveness Indicator', 'Taxonomy Singular Name', 'text-domain' ),
		'menu_name'                  => __( 'Strategy Effectiveness Indicators', 'text-domain' ),
		'all_items'                  => __( 'All Strategy Effectiveness Indicators', 'text-domain' ),
		'parent_item'                => __( 'Parent Indicator', 'text-domain' ),
		'parent_item_colon'          => __( 'Parent Indicator:', 'text-domain' ),
		'new_item_name'              => __( 'New Indicator Name', 'text-domain' ),
		'add_new_item'               => __( 'Add Indicator', 'text-domain' ),
		'edit_item'                  => __( 'Edit Indicator', 'text-domain' ),
		'update_item'                => __( 'Update Indicator', 'text-domain' ),
		'view_item'                  => __( 'View Indicator', 'text-domain' ),
		'separate_items_with_commas' => __( 'Separate indicators with commas', 'text-domain' ),
		'add_or_remove_items'        => __( 'Add or remove indicators', 'text-domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used indicators', 'text-domain' ),
		'popular_items'              => __( 'Popular Indicators', 'text-domain' ),
		'search_items'               => __( 'Search Indicators', 'text-domain' ),
		'not_found'                  => __( 'Not Found', 'text-domain' ),
		'no_terms'                   => __( 'No indicators', 'text-domain' ),
		'items_list'                 => __( 'Indicator list', 'text-domain' ),
		'items_list_navigation'      => __( 'Indicator list navigation', 'text-domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false, // they behave like categories
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
  // Register the taxonomy, based on the $args, but only for the Strategy Post Type
	register_taxonomy( 'effectiveness-indicator', array( 'strategies' ), $args );

}
add_action( 'init', 'custom_strategy_effectiveness', 0 );

}

// Register Custom Taxonomy
function custom_evidence_tax() {

	$labels = array(
		'name'                       => _x( 'Evidence', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Evidence', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Strength of Evidence', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'evidence', array( 'strategies' ), $args );

}
add_action( 'init', 'custom_evidence_tax', 0 );



?>
