<?php
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );		
function wp_test_resources(){
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_style('style_new', get_template_directory_uri().'/css/style_new.css');
}

add_action('int','wp_test_resources');
add_theme_support( 'custom-logo', array(
  'height'      => 100,
  'width'       => 400,
  'flex-height' => true,
  'flex-width'  => true,
  
) );

if ( function_exists('register_sidebar') )
    register_sidebar();

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Primary Menu' ),
      'top-menu' => __( 'Top Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


function add_first_and_last($items) {
    // $items[1]->classes[] = 'first';
    $items[count($items)]->classes[] = 'booknow';
    return $items;
}
add_filter('wp_nav_menu_objects', 'add_first_and_last');s
?>