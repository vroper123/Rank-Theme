<?php

function rank_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
   
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css', array(), '1.1', 'all');
   
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/theme.js', array ( 'jquery' ), 1.1, true);
   
	   
  }
  add_action( 'wp_enqueue_scripts', 'rank_theme_scripts' );


 require 'inc/helpers.php';