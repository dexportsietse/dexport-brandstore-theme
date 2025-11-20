<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});

add_action('init', function() {
    $paths = apply_filters('acf/settings/load_json', []);
    error_log('ACF is loading JSON from: ' . print_r($paths, true));
});
