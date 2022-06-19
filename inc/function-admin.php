<?php

// @package aspataltheme
//     =======================
//     ADMIN PAGE
//     =======================

function aspatal_add_admin_page() {
    add_menu_page( 'Aspatal Theme Settings', 'Aspatal', 'manage_options', 'lama_aspatal', 'aspatal_theme_create_page_callback', get_template_directory_uri().'/assets/images/aspatal-icon.png', 110 );
    add_submenu_page( 'lama_aspatal', 'Aspatal Theme Settings', 'General', 'manage_options', 'lama_aspatal', 'aspatal_theme_create_page_callback' );
    add_submenu_page( 'lama_aspatal', 'Custom CSS', 'Custom CSS', 'manage_options', 'aspatal_custom_css', 'aspatal_custom_css_page_callback' );

    // Activate Custom Settings
    add_action( 'admin_init', 'aspatal_custom_settings' );
}

add_action( 'admin_menu', 'aspatal_add_admin_page' );

function aspatal_custom_settings() {
    // General Options
    register_setting( 'aspatal-settings-group', 'logo' );
    register_setting( 'aspatal-settings-group', 'address' );
    register_setting( 'aspatal-settings-group', 'email' );
    register_setting( 'aspatal-settings-group', 'phone' );

    add_settings_section( 'aspatal-general-settings', null, 'aspatal_general_settings_callback', 'lama_aspatal' );

    add_settings_field( 'logo', 'Logo', 'aspatal_logo_callback', 'lama_aspatal', 'aspatal-general-settings' );
    add_settings_field( 'address', 'Address', 'aspatal_address_callback', 'lama_aspatal', 'aspatal-general-settings' );
    add_settings_field( 'email', 'Email', 'aspatal_email_callback', 'lama_aspatal', 'aspatal-general-settings' );
    add_settings_field( 'phone', 'Phone', 'aspatal_phone_callback', 'lama_aspatal', 'aspatal-general-settings' );
}

// General Settings Functions
function aspatal_general_settings_callback() {
    return;
}

function aspatal_logo_callback() {
    $logo = esc_attr(get_option( 'logo' ));
    $html = '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-button" />
    <input type="hidden" id="logo" name="logo" value="'.$logo.'"/>';

    if ( $logo ) {
        $html .= '<img width="auto" height="40px" src="'.$logo.'" alt="Logo" />';
    }

    echo $html;
}

function aspatal_brand_color_callback() {
    $brandColor = esc_attr( get_option( 'brand_color' ) );
    echo '<input type="color" name="brand_color" value="'.$brandColor.'">';
}

function aspatal_secondary_color_callback() {
    $secondaryColor = esc_attr( get_option( 'secondary_color' ) );
    echo '<input type="color" name="secondary_color" value="'.$secondaryColor.'">';
}

function aspatal_phone_callback() {
    $phone = esc_attr( get_option( 'phone' ) );
    echo '<input type="text" name="phone" value="'.$phone.'" placeholder="+977 98XXXX"><p class="description">Please enter with country code (e.g. +977 for Nepal).';
}

function aspatal_email_callback() {
    $email = esc_attr( get_option( 'email' ) );
    echo '<input type="text" name="email" value="'.$email.'" placeholder="aspatal@lama.com">';
}

function aspatal_address_callback() {
    $address = esc_attr( get_option( 'address' ) );
    echo '<input type="text" name="address" value="'.$address.'" placeholder="Kathmandu, Nepal">';
}

function aspatal_youtube_callback() {
    $youtube = esc_attr( get_option( 'youtube' ) );
    echo '<input type="text" name="youtube" value="'.$youtube.'" placeholder="https://youtube.com/channel_url">';
}

function aspatal_facebook_callback() {
    $facebook = esc_attr( get_option( 'facebook' ) );
    echo '<input type="text" name="facebook" value="'.$facebook.'" placeholder="https://facebook.com/page_url">';
}

function aspatal_instagram_callback() {
    $instagram = esc_attr( get_option( 'instagram' ) );
    echo '<input type="text" name="instagram" value="'.$instagram.'" placeholder="https://instagram.com/profile_url">';
}

function aspatal_tiktok_callback() {
    $tiktok = esc_attr( get_option( 'tiktok' ) );
    echo '<input type="text" name="tiktok" value="'.$tiktok.'" placeholder="https://tiktok.com/profile_url">';
}

function aspatal_cta_btn_txt_callback() {
    $ctaBtnTxt = esc_attr( get_option( 'cta_btn_txt' ) );
    echo '<input type="text" name="cta_btn_txt" value="'.$ctaBtnTxt.'" placeholder="Book Now">';
}

function aspatal_cta_btn_url_callback() {
    $ctaBtnUrl = esc_attr( get_option( 'cta_btn_url' ) );
    echo '<input type="text" name="cta_btn_url" value="'.$ctaBtnUrl.'" placeholder="CTA Link">';
}

// Custom CSS Functions
function aspatal_custom_css_page_callback() {
    // Something
}

// Template Submenu Functions
function aspatal_theme_create_page_callback() {
    require_once( get_template_directory().'/inc/templates/aspatal-admin.php');
}