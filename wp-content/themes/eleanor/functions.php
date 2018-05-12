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
 	wp_enqueue_style('bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
 	//Theme css
 	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css' );
	//Core UI
	wp_enqueue_style('coreui_styles', get_template_directory_uri() . '/css/coreui.style.min.css');

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
 	wp_enqueue_script('bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), null, true);
	//coreui app.js
	wp_enqueue_script('coreui_app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), null, true);

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
));

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
