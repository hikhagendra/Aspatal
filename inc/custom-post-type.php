<?php

// @package aspataltheme
//     =======================
//     CUSTOM POSTS TYPE FUNCTIONS
//     =======================


// Departments Custom Post Type
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


// Customize Departments Column
add_filter( 'manage_department_posts_columns', 'aspatal_set_department_columns' );

function aspatal_set_department_columns( $columns ) {
    $newColumns = array();
    $newColumns['title'] = 'Department Name';

    return $newColumns;
}


// Doctors Custom Post Type
function aspatal_doctors() {

    $args = array(
        'labels'        =>  array(
                'name'              =>  'Doctors',
                'singular_name'     =>  'Doctor',
                'add_new'           =>  'Add Doctor',
                'all_items'         =>  'All Doctors',
                'add_new_item'      =>  'Add New Doctor',
                'edit_item'         =>  'Edit Doctor',
                'new_item'          =>  'New Doctor',
                'view_item'         =>  'View Doctor',
                'search_item'       =>  'Search Doctor',
                'not_found'         =>  'No Doctors Found',
                'not_found_in_trash'=>  'No Doctors Found in Trash'
        ),
        'public'        =>  true,
        'hierarchical'  =>  false,
        'has_archive'   =>  true,
        'menu_icon'     =>  'dashicons-groups',
        'supports'      =>  array( 'title', 'editor', 'thumbnail' ),
        'publicly_queryable'    =>  true,
        'query_var'     =>  true,
        'rewrite'       =>  true,
        'menu_position' =>  5
    );

    register_post_type( 'doctor', $args );

}

add_action( 'init', 'aspatal_doctors' );


// Doctors Meta Boxes
function aspatal_doctor_add_meta_box() {
    add_meta_box( 'doctor_position', 'Doctor Details', 'aspatal_doctor_position_callback', 'doctor' );
}

function aspatal_doctor_position_callback( $post ) {
    wp_nonce_field( 'aspatal_save_doctor_position_data', 'aspatal_doctor_position_meta_box_nonce' );

    $value = get_post_meta( $post->ID, '_doctor_position_value_key', true );

    echo '<label for="aspatal_doctor_position_field">Doctor Position: </label>';
    echo '<input type="text" placeholder="Founder" id="aspatal_doctor_position_field" name="aspatal_doctor_position_field" value="'. esc_attr($value) .'" size="25" />';
}

function aspatal_save_doctor_position_data( $post_id ) {

    if ( ! isset( $_POST['aspatal_doctor_position_meta_box_nonce'] ) ) {
        return;
    }

    if ( ! wp_verify_nonce( $_POST['aspatal_doctor_position_meta_box_nonce'], 'aspatal_save_doctor_position_data' ) ) {
        return;
    }

    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( ! isset( $_POST['aspatal_doctor_position_field'] ) ) {
        return;
    }

    $doctorPosition = sanitize_text_field( $_POST['aspatal_doctor_position_field'] );

    update_post_meta( $post_id, '_doctor_position_value_key', $doctorPosition );
}

add_action( 'add_meta_boxes', 'aspatal_doctor_add_meta_box' );
add_action( 'save_post', 'aspatal_save_doctor_position_data' );


// Customize Doctors Column
add_filter( 'manage_doctor_posts_columns', 'aspatal_set_doctor_columns' );
add_action( 'manage_doctor_posts_custom_column', 'aspatal_doctor_custom_column', 10, 2 );

function aspatal_set_doctor_columns( $columns ) {
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['position'] = 'Position';

    return $newColumns;
}

function aspatal_doctor_custom_column( $column, $post_id ) {
    switch( $column ) {
        case 'position':
            $position = get_post_meta( $post_id, '_doctor_position_value_key', true );
            echo $position;
            break;
    }
}


