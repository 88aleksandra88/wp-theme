<?php

//declaration function
function montheme_supports () { 
    add_theme_support('title-tag');
}

function montheme_register_assets () {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');
}
       

//actions 
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
