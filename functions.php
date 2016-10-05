<?php
if ( ! function_exists( 'wednesday_setup' ) ) :

function wednesday_setup() {
  add_theme_support('title-tag')
}

endif;

add_action( 'after_setup_theme', 'wednesday_setup' );
?>
