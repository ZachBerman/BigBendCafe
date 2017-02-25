<?php

// Register Custom Navigation Walker
require_once('inc/wp_bootstrap_navwalker.php');

/* enqueue styles and scripts */
function load_script_css() {
  wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Asar|Short+Stack');
  wp_enqueue_style( 'googleFonts');

  wp_register_style( 'bootstrapCss', get_template_directory_uri() . '/css/bootstrap.min.css' );
  wp_enqueue_style('bootstrapCss');

  wp_register_style( 'magnificCss', get_template_directory_uri() . '/magnific-popup/magnific-popup.css' );
  wp_enqueue_style('magnificCss');

  wp_register_style( 'animateCss', get_template_directory_uri() . '/animate-css/animate.min.css' );
  wp_enqueue_style('animateCss');

  wp_enqueue_script('jquery');

  wp_register_script('bootstrapJs', get_template_directory_uri() . '/js/bootstrap.min.js',false, '3.3.4', true);
  wp_enqueue_script( 'bootstrapJs');

  wp_register_script('masterJS', get_template_directory_uri() . '/js/master.js', array(), 1.0 );
  wp_enqueue_script('masterJS');

}

add_action( 'wp_enqueue_scripts' , 'load_script_css' );

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
        
//Featured image
add_theme_support( 'post-thumbnails' );

?>

