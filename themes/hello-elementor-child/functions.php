<?php

/**
 * Hello Elementor Child — functions.php
 */

add_action('wp_enqueue_scripts', 'ie_child_enqueue');
function ie_child_enqueue()
{
    // Enqueue parent theme styles
    wp_enqueue_style(
        'hello-elementor-style',
        get_template_directory_uri() . '/style.css'
    );
    // Enqueue child theme styles
    wp_enqueue_style(
        'hello-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('hello-elementor-style')
    );

    // Google Fonts: Poppins + Open Sans
    wp_enqueue_style(
        'ie-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Open+Sans:wght@400;600&display=swap',
        array(),
        null
    );
}
