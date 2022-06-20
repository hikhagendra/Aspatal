<?php

// @package aspataltheme
//     =======================
//     ADMIN PAGE
//     =======================

function aspatal_add_admin_page() {
    add_menu_page( 'Aspatal Theme Settings', 'Aspatal', 'manage_options', 'lama_aspatal', 'aspatal_theme_create_page_callback', get_template_directory_uri().'/assets/images/aspatal-icon.png', 110 );
    add_submenu_page( 'lama_aspatal', 'Aspatal Theme Settings', 'General', 'manage_options', 'lama_aspatal', 'aspatal_theme_create_page_callback' );
    add_submenu_page( 'lama_aspatal', 'Theme Footer Settings', 'Footer', 'manage_options', 'aspatal_footer', 'aspatal_footer_page_callback' );

    // Activate Custom Settings
    add_action( 'admin_init', 'aspatal_custom_settings' );
}

add_action( 'admin_menu', 'aspatal_add_admin_page' );

function aspatal_custom_settings() {
    // Aspatal General Settings
    register_setting( 'aspatal_general_settings', 'logo' );
    register_setting( 'aspatal_general_settings', 'address' );
    register_setting( 'aspatal_general_settings', 'email' );
    register_setting( 'aspatal_general_settings', 'phone' );

    add_settings_section( 'aspatal-general-settings', null, null, 'lama_aspatal' );

    add_settings_field( 'logo', 'Logo', 'aspatal_logo_callback', 'lama_aspatal', 'aspatal-general-settings' );
    add_settings_field( 'address', 'Address', 'aspatal_address_callback', 'lama_aspatal', 'aspatal-general-settings' );
    add_settings_field( 'email', 'Email', 'aspatal_email_callback', 'lama_aspatal', 'aspatal-general-settings' );
    add_settings_field( 'phone', 'Phone', 'aspatal_phone_callback', 'lama_aspatal', 'aspatal-general-settings' );

    // Aspatal Footer Settings
    register_setting( 'aspatal-footer-settings', 'full_address' );
    register_setting( 'aspatal-footer-settings', 'facebook_link' );
    register_setting( 'aspatal-footer-settings', 'youtube_link' );
    register_setting( 'aspatal-footer-settings', 'twitter_link' );
    register_setting( 'aspatal-footer-settings', 'linkedin_link' );
    register_setting( 'aspatal-footer-settings', 'instagram_link' );
    register_setting( 'aspatal-footer-settings', 'copyright_text' );

    add_settings_section( 'aspatal-footer-settings-section', null, null, 'aspatal_footer' );

    add_settings_field( 'full-address', 'Full Address', 'aspatal_full_address_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
    add_settings_field( 'facebook-link', 'Facebook', 'aspatal_facebook_link_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
    add_settings_field( 'youtube-link', 'YouTube', 'aspatal_youtube_link_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
    add_settings_field( 'twitter-link', 'Twitter', 'aspatal_twitter_link_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
    add_settings_field( 'linkedin-link', 'LinkedIn', 'aspatal_linkedin_link_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
    add_settings_field( 'instagram-link', 'Instagram', 'aspatal_instagram_link_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
    add_settings_field( 'copyright-text', 'Copyright', 'aspatal_copyright_text_callback', 'aspatal_footer', 'aspatal-footer-settings-section' );
}

// General Settings Functions
function aspatal_theme_create_page_callback() {
    require_once( get_template_directory().'/inc/templates/aspatal-general-settings.php');
}

function aspatal_logo_callback() {
    $logo = esc_attr(get_option( 'logo' ));
    $html = '<input type="button" class="button button-secondary" value="Upload Logo" id="upload-logo" />
    <input type="hidden" id="logo" name="logo" value="'.$logo.'"/>';

    if ( $logo ) {
        $html .= '<img width="auto" height="40px" src="'.$logo.'" alt="Logo" />';
    }

    echo $html;
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

// Footer Setting Functions
function aspatal_footer_page_callback() {
    require_once( get_template_directory().'/inc/templates/aspatal-footer-settings.php' );
}

function aspatal_full_address_callback() {
    $fullAddress = esc_attr( get_option( 'full_address' ) );
    echo '<textarea name="full_address" placeholder="DilliBazar 44600 Kathmandu, Nepal">'.$fullAddress.'</textarea>';
}

function aspatal_facebook_link_callback() {
    $facebook = esc_attr(get_option( 'facebook_link' ));
    echo '<input type="text" name="facebook_link" value="'.$facebook.'" placeholder="Facebook URL">';
}

function aspatal_youtube_link_callback() {
    $youtube = esc_attr(get_option( 'youtube_link' ));
    echo '<input type="text" name="youtube_link" value="'.$youtube.'" placeholder="YouTube URL">';
}

function aspatal_twitter_link_callback() {
    $twitter = esc_attr(get_option( 'twitter_link' ));
    echo '<input type="text" name="twitter_link" value="'.$twitter.'" placeholder="Twitter URL">';
}

function aspatal_linkedin_link_callback() {
    $linkedin = esc_attr(get_option( 'linkedin_link' ));
    echo '<input type="text" name="linkedin_link" value="'.$linkedin.'" placeholder="LinkedIn URL">';
}

function aspatal_instagram_link_callback() {
    $instagram = esc_attr(get_option( 'instagram_link' ));
    echo '<input type="text" name="instagram_link" value="'.$instagram.'" placeholder="Instagram URL">';
}

function aspatal_copyright_text_callback() {
    $copyrightText = esc_attr( get_option( 'copyright_text' ) );
    echo '<input type="text" name="copyright_text" value="' . $copyrightText . '" placeholder="© Copyright 2022">';
}