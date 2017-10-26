<?php
/*
    ===========================================
              Include Scripts
    ============================================
*/
function jlu_script_enqueue() {
  // CSS
  wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/css/bootstrap.min.css',  array(), '4.0.0', 'all') ;
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/jlu-fitness.css',  array(), '1.0.0', 'all') ;

    // jS
    wp_enqueue_script( 'jquery') ;
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array( ), '4.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/jlu-fitness.js', array( ), '1.0.0', true);


}
add_action('wp_enqueue_scripts', 'jlu_script_enqueue');

/*
    ===========================================
              Activate Menus
    ============================================
*/

function jlu_theme_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primay Header Navigation');
  register_nav_menu('secondary', 'Primay Footer Navigation');
}
add_action('init', 'jlu_theme_setup');

/*
    ===========================================
              Theme support Function
    ============================================
*/

add_theme_support( 'custom-background' );
add_theme_support( 'custom-slider' );
add_theme_support( 'custom-header' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats' , array( 'aside', 'image', 'video', 'gallery', 'status', 'quote', 'link') );
