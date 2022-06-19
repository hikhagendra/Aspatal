<?php

// @package aspataltheme
//     =======================
//     CUSTOM POSTS TYPE FUNCTIONS
//     =======================

function aspatal_departments() {

    $args = array(
        'labels'        =>  array(
                'name'              =>  'Departments',
                'singular_name'     =>  'Department',
                'add_new'           =>  'Add Department',
                'all_items'         =>  'All Departments',
                'add_new_item'      =>  'Add New Department',
                'edit_item'         =>  'Edit Department',
                'new_item'          =>  'New Department',
                'view_item'         =>  'View Department',
                'search_item'       =>  'Search Department',
                'not_found'         =>  'No Departments Found',
                'not_found_in_trash'=>  'No Departments Found in Trash',
                'parent_item_colon' =>  'Parent Department'
        ),
        'public'        =>  true,
        'hierarchical'  =>  false,
        'has_archive'   =>  true,
        'menu_icon'     =>  'dashicons-building',
        'supports'      =>  array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'publicly_queryable'    =>  true,
        'query_var'     =>  true,
        'rewrite'       =>  true,
        'menu_position' =>  5
    );

    register_post_type( 'department', $args );

}

add_action( 'init', 'aspatal_departments' );