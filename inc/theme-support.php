<?php

// @package aspataltheme
//     =======================
//     THEME SUPPORT OPTIONS
//     =======================

// Activate Nav Menu Option
function aspatal_register_nav_menu() {
    register_nav_menu( 'primary', 'Primary Menu' );
}

add_action( 'after_setup_theme', 'aspatal_register_nav_menu' );

// Activate Nav Menu Option
function aspatal_register_footer_menu() {
    register_nav_menu( 'footer', 'Footer Menu' );
}

add_action( 'after_setup_theme', 'aspatal_register_footer_menu' );

// Theme Supports
add_theme_support( 'post-thumbnails' );