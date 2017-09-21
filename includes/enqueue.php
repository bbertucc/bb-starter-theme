<?php
//Enqueue scripts and styles.
function theme_scripts_and_styles() {
  
  //Styles
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );	
	
	//Scripts
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/scripts/jquery.fancybox.min.js', array( 'jquery'));
  wp_enqueue_script( 'modernizer-custom_build', get_template_directory_uri().'/scripts/modernizr-customBuild.js' );
  wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDc7r-53KTR0tprwn7OAYC9ELQWugYqS0Y');
  wp_enqueue_script( 'theme_slideshow', get_template_directory_uri().'/scripts/themeSlideshow.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme_image_scaling', get_template_directory_uri() . '/scripts/themeImageScaling.js', array( 'jquery', 'modernizer-custom_build'));
  wp_enqueue_script( 'theme_map', get_template_directory_uri() . '/scripts/themeMap.js', array( 'jquery', 'google_map') );
  wp_enqueue_script( 'theme_filtered_list', get_template_directory_uri() . '/scripts/themeFilteredList.js', array( 'jquery') );
  wp_localize_script( 'theme_filtered_list', 'ajax_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );
?>