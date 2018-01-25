<?php

//
// Calling all the CSS for Parent & Child Themes
//

function my_theme_enqueue_styles() {

    $parent_style = 'understrap-styles'; //this calls the parent theme style first

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/css/theme.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
