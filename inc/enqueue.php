<?php

// @package aspataltheme
//     =======================
//     ADMIN ENQUEQU FUNCTIONS
//     =======================

function aspatal_load_admin_scripts( $hook ) {
    // echo $hook;
    if('toplevel_page_lama_aspatal' == $hook) {

        wp_enqueue_media();

        wp_register_script( 'aspatal-admin-script', get_template_directory_uri() . '/assets/js/aspatal.admin.js', array('jquery'), '1.0.0', true );
        wp_enqueue_script( 'aspatal-admin-script' );
    }
}

add_action( 'admin_enqueue_scripts', 'aspatal_load_admin_scripts' );

//     =======================
//     FRONTEND ENQUEQU FUNCTIONS
//     =======================

function aspatal_load_scripts() {
    wp_enqueue_style( 'heebo', 'https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.2.0', 'all' );
    wp_enqueue_style( 'bootstrap-icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css', array(), '1.8.3', 'all' );
    wp_enqueue_style( 'aspatal', get_template_directory_uri() . '/assets/css/aspatal.css', array(), '1.0.0', 'all' );

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.2.0', true );
}

add_action( 'wp_enqueue_scripts', 'aspatal_load_scripts' );
