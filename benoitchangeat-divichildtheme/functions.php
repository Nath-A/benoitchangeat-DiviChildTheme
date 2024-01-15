<?php
function benoitchangeat_css_assets()
{

    wp_register_style('css', get_stylesheet_directory_uri() . '/assets/benoitchangeat-recup.css', array(), null);


    wp_enqueue_script('css');
}

// function benoitchangeat_js_assets()
// {
//     if (is_front_page()) {
//         wp_enqueue_script('javascript', get_theme_file_uri('/assets/js/script.js'), array(), null);
//     }
// }

add_action('wp_enqueue_scripts', 'benoitchangeat_css_assets');
// add_action('wp_enqueue_scripts', 'benoitchangeat_js_assets');

/*================================================
#Load the translations from the child theme folder
================================================*/
