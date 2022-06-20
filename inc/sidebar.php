<?php

// @package aspataltheme
//     =======================
//     SIDEBAR FUNCTIONS
//     =======================

// Footer Sidebar
function footer_sidebar() {
    register_sidebar( 
        array(
            'name'          =>  'Footer 1',
            'id'            =>  'footer-one',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );

    register_sidebar( 
        array(
            'name'          =>  'Footer 2',
            'id'            =>  'footer-two',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );

    register_sidebar( 
        array(
            'name'          =>  'Footer 3',
            'id'            =>  'footer-three',
            'before_title'  =>  '<h4 class="widget-title">',
            'after_title'   =>  '</h4>'
        )
    );
}

add_action( 'widgets_init', 'footer_sidebar' );