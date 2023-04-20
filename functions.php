<?php

/* Enqueue scripts and styles from parent theme */
function parent_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_uri(), array( 'storefront-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'parent_styles');