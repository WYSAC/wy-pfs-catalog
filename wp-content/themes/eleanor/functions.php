<?php
/**
 * Eleanor functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Eleanor
 */

if ( ! function_exists( 'eleanor_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function eleanor_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Eleanor, use a find and replace
		 * to change 'eleanor' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'eleanor', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'eleanor' ),
			'menu-2' => esc_html__( 'Sidebar Navigation', 'eleanor'),
			'menu-3' => esc_html__( 'Footer Navigation', 'eleanor')
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'eleanor_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'eleanor_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function eleanor_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'eleanor_content_width', 640 );
}
add_action( 'after_setup_theme', 'eleanor_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function eleanor_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'eleanor' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'eleanor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Depot Landing Page:  Footer Left', 'eleanor' ),
		'id'            => 'depot-footer-1',
		'description'   => esc_html__( 'These widgets appear in the left coloumn of the footer on the Depot landing page', 'eleanor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s col-md pt-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Depot Landing Page:  Footer Right', 'eleanor' ),
		'id'            => 'depot-footer-2',
		'description'   => esc_html__( 'These widgets appear in the right coloumn of the footer on the Depot landing page', 'eleanor' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s col-md pt-4">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Depot Landing Page: Site Description', 'eleanor' ),
		'id'            => 'depot-description',
		'description'   => esc_html__( 'This text will appear on the Depot Homepage under the site title', 'eleanor' ),
		'before_widget' => '<div class="depot-site-description text-shadow">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'eleanor_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
 /* ============================
 *  BOOTSTRAP, CORE UI & LOCAL STYLE
 *  ============================ */

 function eleanor_theme_styles() {
 	//Bootstrap 4 CDN
 	wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css');
 	//Theme css
 	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css' );
	//Core UI
	wp_enqueue_style('coreui_styles', get_template_directory_uri() . '/css/coreui.style.min.css');
	//dataTables
	wp_enqueue_style('datatables_bootstrap_css', 'https://cdn.datatables.net/v/bs4/dt-1.10.16/fh-3.1.3/datatables.min.css');

 }

 add_action( 'wp_enqueue_scripts', 'eleanor_theme_styles');

 /* ============================
 *  BOOTSTRAP, CORE UI & LOCAL SCRIPTS
 *  ============================ */
 function eleanor_theme_scripts() {
	wp_enqueue_script('jquery_slim', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', array( 'jquery' ), null, true);
	//popper
	wp_enqueue_script('popper_js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true);
 	//Bootstrap 4 CDN
 	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array( 'jquery' ), null, true);
	//coreui app.js
	wp_enqueue_script('coreui_app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), null, true);

	// Datatables
	wp_enqueue_script('datatables_js', 'https://cdn.datatables.net/v/bs4/dt-1.10.16/fh-3.1.3/datatables.min.js', array( 'jquery' ), null, true);
	//dataTables_archive.js
	wp_enqueue_script('dataTablesArchive_js', get_template_directory_uri() . '/js/datatables_archive.js', array('jquery'), null, true);

 }
 add_action('wp_enqueue_scripts', 'eleanor_theme_scripts');

 /* ============================
 *  Add Theme-specific scripts and styles AFTER Bootstrap and CoreUI
 *  ============================ */

function eleanor_scripts() {
	wp_enqueue_style( 'eleanor-style', get_stylesheet_uri() );

	wp_enqueue_script( 'eleanor-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'eleanor-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'eleanor_scripts' );

function wpb_load_fa() {

wp_enqueue_style( 'wpb-fa', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css' );

}

add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/* Bootstrap NavWalker */

require get_template_directory() . '/inc/bootstrap-navwalker.php';

register_nav_menus( array(
	'menu-1'	=> esc_html__( 'Primary', 'eleanor'),
	'menu-2' => esc_html__( 'Sidebar Navigation', 'eleanor'),
	'menu-3' => esc_html__('Footer Navigation', 'eleanor'),
	'menu-4' => esc_html__('Depot Navigation', 'eleanor')
));

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/* CUSTOM Read More Link */
/* Modify the read more link on the_excerpt() */

function et_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'et_excerpt_length');

/* Add a link  to the end of our excerpt contained in a div for styling purposes and to break to a new line on the page.*/

function et_excerpt_more($more) {
    global $post;
    return '<div class="view-full-post"><a href="'. get_permalink($post->ID) . '" class="view-full-post-btn btn btn-secondary">View Strategy</a></div>';
}
add_filter('excerpt_more', 'et_excerpt_more');

/* Get an inline svg from the Images folder */

function inline_svg($name) {
	$file = get_template_directory();
	$file .= "/images/" .$name .".svg";
	include($file);
}

/* ====================================================
* Customize the page_titles for various archive pages
======================================================= */

function my_theme_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    } elseif ( is_tax('causal-domain') ) {
        $title = single_term_title( '<p class="archive-pre-title">Causal Domain</p>', false );
    } elseif ( is_tax('tobacco-goals') ) {
			$title = single_term_title( '<p class="archive-pre-title">Tobacco Goal</p>', false );
} elseif (is_tax('effectiveness-indicator') ) {
	$title = single_term_title( '<p class="archive-pre-title">Strategy Effectiveness</p>', false );
} elseif (is_tax('evidence') ) {
	$title = single_term_title( '<p class="archive-pre-title">Strength of Evidence</p>', false );
}
    return $title;
}

add_filter( 'get_the_archive_title', 'my_theme_archive_title' );


//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'strategies');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}

?>
