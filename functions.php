<?php

// customizer

use function PHPSTORM_META\type;

function theme_customize_register($customizer) {
    // Cookie policy settings/section etc
    $customizer->add_setting('Cookie_Policy_Settings', array(
        "type" => "theme_option",
        'capability' => 'manage_options',
    ));
}

// hook to register customize controls
add_action( 'customize_register', 'theme_customize_register');

function theme_enqueue_styles() {
    wp_enqueue_style( 'main-css', get_stylesheet_uri());
    wp_enqueue_style( 'helpers-css', get_stylesheet_directory_uri() . "/helpers.css");
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles');