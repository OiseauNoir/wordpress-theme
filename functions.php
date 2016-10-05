<?php
if ( ! function_exists( 'wednesday_setup' ) ) :

function wednesday_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );

  // Stylesheets
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',false,'3.3.7','all');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css',false,'4.6.3','all');
  wp_enqueue_style( 'lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  wp_enqueue_style( 'open-sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

  wp_enqueue_style( 'clean-blog', get_template_directory_uri() . '/css/clean-blog.min.css',array('bootstrap'),'3.3.7','all');


  // Javascripts
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', false, '1.12.4', true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), '3.3.7', true);
  wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array ( 'bootstrap', 'jquery' ), '1.0.0', true);
  wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js', array ( 'jqBootstrapValidation', 'bootstrap', 'jquery' ), '1.0.0', true);
  wp_enqueue_script( 'clean-blog', get_template_directory_uri() . '/js/clean-blog.js', array ( 'contact_me', 'bootstrap', 'jqBootstrapValidation', 'jquery' ), '1.0.0', true);

  register_nav_menus(array(
    'header-menu' => __( 'Header Menu' )
  ));
}

endif;

add_action( 'after_setup_theme', 'wednesday_setup' );
?>
