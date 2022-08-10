<?php
add_filter('show_admin_bar', '__return_false');

remove_action('wp_head',             'print_emoji_detection_script', 7 );
remove_action('admin_print_scripts', 'print_emoji_detection_script' );
remove_action('wp_print_styles',     'print_emoji_styles' );
remove_action('admin_print_styles',  'print_emoji_styles' );


// styles
add_action('wp_enqueue_scripts', 'site_styles');
function site_styles () {
    $version = '0.1';
    wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/main.css', [], $version);
    wp_enqueue_style('theme-style', get_stylesheet_uri());

}

// scripts
add_action('wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
    $version = '0.1';
	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/script.js', [], $version, true);

}

// Carbon Fields
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
	require_once( 'includes/carbon-fields/vendor/autoload.php' );
	\Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields () {
    require_once('includes/carbon-fields-options/theme-options.php');
    require_once('includes/carbon-fields-options/post-meta.php');
}

// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' )

?>