<?php
	
	/*
	*
	*	i-max Functions - Child Theme
	*	------------------------------------------------
	*	These functions will override the parent theme
	*	functions.
	*
	*
	*/
	
add_action( 'wp_enqueue_scripts', 'imax_child_enqueue_styles' );
function imax_child_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	

	// Loads JavaScript file for tooltips
	//wp_enqueue_script( 'jquery-lavalamp', get_stylesheet_directory_uri() . '/js/jquery.lavalamp.min.js', array( 'jquery' ), '1.5.0', true );
	
	// Loads JavaScript file for small screen side menu.
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array( 'jquery' ), '2014-01-13', true );	
	
	// Loads JavaScript file for tooltips
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array( 'jquery' ), '1.5.0', true );	
	
	// Loads JavaScript file with functionality specific to i-spirit.
	wp_enqueue_script( 'imax-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '2013-07-18', true );	

}