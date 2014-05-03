<?php
function express_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'express' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<section class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ) );
}
add_action( 'widgets_init', 'express_widgets_init' );