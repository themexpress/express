<?php
function express_customize_register( $wp_customize ) {
  $wp_customize->add_section('social-links', array(
    'title'    => __('Social Links', 'express'),
    'priority' => 50,
  ));
  
  $wp_customize->add_setting('express_theme_options[facebook]', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',
  ));
  $wp_customize->add_control( 'facebook', array(
    'settings' => 'express_theme_options[facebook]',
    'label'   => 'Facebook URL',
    'section' => 'social-links',
    'type'    => 'text',
  ));

  $wp_customize->add_setting('express_theme_options[twitter]', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',
  ));
  $wp_customize->add_control( 'twitter', array(
    'settings' => 'express_theme_options[twitter]',
    'label'   => 'Twitter URL',
    'section' => 'social-links',
    'type'    => 'text',
  ));

  $wp_customize->add_setting('express_theme_options[google-plus]', array(
    'default'        => '',
    'capability'     => 'edit_theme_options',
    'type'           => 'option',
  ));
  $wp_customize->add_control( 'google-plus', array(
    'settings' => 'express_theme_options[google-plus]',
    'label'   => 'Google Plus URL',
    'section' => 'social-links',
    'type'    => 'text',
  ));
}
add_action( 'customize_register', 'express_customize_register' );

function express_get_theme_option( $option_name, $default = '' ) {
  $options = get_option( 'express_theme_options' );
  if( isset($options[$option_name]) ) {
    return $options[$option_name];
  }
  return $default;
}