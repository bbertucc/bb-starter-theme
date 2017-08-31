<?php
//Enqueue scripts and styles.
function theme_scripts_and_styles() {
  
  //Styles
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );	
	
	//Scripts
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/scripts/jquery.fancybox.min.js', array( 'jquery',));
  wp_enqueue_script( 'theme-slideshow',  get_template_directory_uri().'/scripts/themeSlideshow.js', array( 'jquery' ) );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );
?>