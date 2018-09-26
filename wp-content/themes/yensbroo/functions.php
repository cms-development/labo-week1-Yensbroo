<?php

function yensbroo_enqueue_scripts() {
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.js', array('jquery'));
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style( 'style', get_stylesheet_uri());
}
add_action( 'wp_enqueue_scripts', 'yensbroo_enqueue_scripts' );

function yensbroo_widgets_init() {
  register_sidebar( array(
    'name' => __('Primary Sidebar', 'yensbroo'),
    'id' => 'sidebar_primary',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h1 class="widget-title">',
    'after_title' => '</h1>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 1', 'yensbroo'),
    'id' => 'footer-sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 2', 'yensbroo'),
    'id' => 'footer-sidebar-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
  register_sidebar( array(
    'name' => __('Footer Sidebar 3', 'yensbroo'),
    'id' => 'footer-sidebar-3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
  ));
}
add_action( 'widgets_init', 'yensbroo_widgets_init');

add_action('after_setup_theme', 'yensbroo_setup');
  if(! function_exists('yensbroo_setup') ):
    function yensbroo_setup() {
      register_nav_menu('Primary', __( 'Primary navigation', 'yensbroo'));
    } endif;

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';