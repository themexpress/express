<?php
if ( ! function_exists( 'express_setup' ) ) :
function express_setup() {
  load_theme_textdomain( 'express', get_template_directory() . '/languages' );

  add_theme_support( 'post-thumbnails' );

  add_theme_support( 'automatic-feed-links' );

  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'express' ),
  ) );

  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  add_theme_support( 'html5', array(
    'comment-list',
    'search-form',
    'comment-form',
    'gallery',
  ) );
}
endif;
add_action( 'after_setup_theme', 'express_setup' );

if ( ! isset( $content_width ) ) { $content_width = 640; }