<?php
if ( ! function_exists( 'wednesday_setup' ) ) :

function wednesday_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
}

endif;

add_action( 'after_setup_theme', 'wednesday_setup' );
?>
