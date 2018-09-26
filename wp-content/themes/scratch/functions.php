<?php

function scratch_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.js', array('jquery'));
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'scratch_enqueue_scripts' );

function scratch_widgets_init() {
  register_sidebar( array(
    'name' => __('Primary Sidebar', 'scratch'),
    'id' => 'sidebar_primary',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 1', 'scratch'),
    'id' => 'footer-sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 2', 'scratch'),
    'id' => 'footer-sidebar-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 3', 'scratch'),
    'id' => 'footer-sidebar-3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action( 'widgets_init', 'scratch_widgets_init');

add_action('after_setup_theme', 'scratch_setup');
  if(! function_exists('scratch_setup') ):
    function scratch_setup() {
      register_nav_menu('primary', __( 'Primary navigation', 'scratch'));
    } endif;

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';