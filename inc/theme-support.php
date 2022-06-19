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

add_theme_support( 'post-thumbnails' );