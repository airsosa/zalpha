<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array('parent-style')
  );
}

function zalpha_setup() {
	add_theme_support( 'omega-footer-widgets', 1);
}

add_action( 'after_setup_theme', 'zalpha_setup', 11  );