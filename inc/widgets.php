<?php

// @package aspataltheme
//     =======================
//     WIDGETS CLASS
//     =======================

class Dummy_Widget extends WP_Widget {
    public function __construct() {
        $widget_ops = array(
            'classname'     =>  'dummy-widget',
            'description'   =>  'Dummy Test Widget'
        );

        parent::__construct( 'dummy_widget', 'Dummy Widget', $widget_ops );
    }
}

add_action( 'widgets_init', function() {
    register_widget( 'Dummy_Widget' );
} );