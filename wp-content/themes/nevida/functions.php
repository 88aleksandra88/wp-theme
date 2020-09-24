<?php

//declaration function
function nevida_supports () { 
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    register_nav_menu('header', 'header');
    register_nav_menu('footer', 'footer');

    add_image_size('card-header',350, 215, true );


}

function nevida_register_assets () {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.js',['popper', 'jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

}

       
function nevida_title_separator() {
    return '|';
}

function nevida_menu_class($classes) {
    $classes[] = 'nav-item';
    return $classes;
}
function nevida_menu_link_class($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function nevida_add_custom_box() {
    add_meta_box('nevida_sponso', 'Sponsoring', 'nevida_render_sponso_box', 'post', 'side');
}

function nevida_render_sponso_box() {
   ?>
    <label for="nevidzsponso">Article sponsorisé</label>
    <input type="checkbox" value="1" name="nevida_sponso"></input>
    <input type="hidden" value="0" name="nevida_sponso"></input>
   <?php
}

function nevida_save_sponso($post_id) {
    if (array_key_exists('nevida_sponso',$_POST)) {
        if ($_POST['nevida_sponso'] === '0') {
            delete_post_meta($post_id, 'nevida_sponso');
        } else {
            update_post_meta($post_id, 'nevida_sponso', 1);
        }
    }
 }
 

//actions 
add_action('after_setup_theme', 'nevida_supports');
add_action('wp_enqueue_scripts', 'nevida_register_assets');
add_filter('document_title_separator', 'nevida_title_separator');
add_filter('nav_menu_css_class', 'nevida_menu_class');
add_filter('nav_menu_link_attributes', 'nevida_menu_link_class');
add_action('add_meta_boxes', 'nevida_add_custom_box');
add_action('save_post', 'nevida_save_post');
