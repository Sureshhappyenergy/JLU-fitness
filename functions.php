<?php
function jlu_script_enqueue() {
  wp_enqueue_style('customstye', get_template_directory_uri() . '/css/jlu-fitness.css',  array(), '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jlu-fitness.js', array( ), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'jlu_script_enqueue');
function jlu_theme_setup() {
  add_theme_support('menus');
}

add_action('init', ' jlu_theme_setup');
