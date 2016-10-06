<?php
if ( ! function_exists( 'wednesday_setup' ) ) :

function wednesday_setup() {
  add_theme_support('title-tag');
  add_theme_support( 'post-thumbnails' );
  add_image_size( 'hero', 1900, 600 ); // 300 pixels wide (and unlimited height)

  register_nav_menus(array(
    'header-menu' => __( 'Header Menu' )
  ));
}

endif;

add_action( 'after_setup_theme', 'wednesday_setup' );

function enqueue_wednesday_styles() {
  // Stylesheets
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css',false,'3.3.7','all');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css',false,'4.6.3','all');
  wp_enqueue_style( 'lora-font', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  wp_enqueue_style( 'open-sans-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');

  wp_enqueue_style( 'clean-blog', get_template_directory_uri() . '/css/clean-blog.min.css',array('bootstrap'),'3.3.7','all');


  // Javascripts
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', false, '1.12.4', true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), '3.3.7', true);
  wp_enqueue_script( 'jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array ( 'bootstrap', 'jquery' ), '1.0.0', true);
  wp_enqueue_script( 'contact_me', get_template_directory_uri() . '/js/contact_me.js', array ( 'jqBootstrapValidation', 'bootstrap', 'jquery' ), '1.0.0', true);
  wp_enqueue_script( 'clean-blog', get_template_directory_uri() . '/js/clean-blog.js', array ( 'contact_me', 'bootstrap', 'jqBootstrapValidation', 'jquery' ), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'enqueue_wednesday_styles' );

function wednesday_customize_register( $wp_customize ) {
  $wp_customize->add_section('wednesday_footer', array(
    'title' => __( 'Footer', 'wednesday' ),
    'description' => __( 'Update social media links + footer copyright.' ),
    'priority' => 160,
    'capability' => 'edit_theme_options'
  ));

  $wp_customize->add_setting( 'footer_twitter_link', array(
    'default' => 'https://twitter.com'
  ) );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_twitter_link',
        array(
            'label'          => __( 'Twitter Link', 'wednesday' ),
            'section'        => 'wednesday_footer',
            'settings'       => 'footer_twitter_link',
            'type'           => 'text'
        )
    )
  );

  $wp_customize->add_setting( 'footer_facebook_link', array(
    'default' => 'https://facebook.com'
  ) );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_facebook_link',
        array(
            'label'          => __( 'Facebook Link', 'wednesday' ),
            'section'        => 'wednesday_footer',
            'settings'       => 'footer_facebook_link',
            'type'           => 'text'
        )
    )
  );

  $wp_customize->add_setting( 'footer_github_link', array(
    'default' => 'https://github.com'
  ) );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_github_link',
        array(
            'label'          => __( 'Github Link', 'wednesday' ),
            'section'        => 'wednesday_footer',
            'settings'       => 'footer_github_link',
            'type'           => 'text'
        )
    )
  );

  $wp_customize->add_setting( 'footer_copyright', array(
    'default' => 'Copyright © Your Website 2016'
  ) );

  $wp_customize->add_control(
    new WP_Customize_Control(
        $wp_customize,
        'footer_copyright',
        array(
            'label'          => __( 'Copyright', 'wednesday' ),
            'section'        => 'wednesday_footer',
            'settings'       => 'footer_copyright',
            'type'           => 'textarea'
        )
    )
  );

}

add_action( 'customize_register', 'wednesday_customize_register' );

add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'project',
    array(
      'labels' => array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Project' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'projects')
    )
  );

  add_post_type_support( 'project', 'thumbnail' );
} 

?>
