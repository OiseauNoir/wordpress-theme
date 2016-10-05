<?php
if ( ! function_exists( 'wednesday_setup' ) ) :

function wednesday_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );

  // Stylesheets
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',false,'3.3.7','all');
  wp_enqueue_style( 'clean-blog', get_template_directory_uri() . '/css/clean-blog.min.css',array('bootstrap'),'3.3.7','all');
}

endif;

add_action( 'after_setup_theme', 'wednesday_setup' );
?>
