<?php
function express_scripts() {
  
  wp_enqueue_style( 'express-style', get_stylesheet_uri(), array(), '20140421' );

  wp_enqueue_script( 'jquery' );

  wp_enqueue_script( 'express-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '20140421', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'express_scripts' );