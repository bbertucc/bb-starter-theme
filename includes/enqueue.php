<?php
//Enqueue scripts and styles.
function theme_scripts_and_styles() {
  
  //Styles
	wp_enqueue_style( 'theme-style', get_stylesheet_uri() );	
	
	//Scripts
	wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/scripts/jquery.fancybox.min.js', array( 'jquery'));
  wp_enqueue_script( 'modernizer-custom_build', get_template_directory_uri().'/scripts/modernizr-customBuild.js' );
  wp_enqueue_script( 'google_map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAx5ZF6jpyuFxUtH5a9BLoawYj-UfANJEw');
  wp_enqueue_script( 'theme_slideshow', get_template_directory_uri().'/scripts/themeSlideshow.js', array( 'jquery' ) );
  wp_enqueue_script( 'theme_header_navigation', get_template_directory_uri().'/scripts/themeHeaderNavigation.js', array( 'jquery' ) );
  wp_enqueue_script( 'theme_media_mosaic', get_template_directory_uri().'/scripts/themeMediaMosaic.js', array( 'jquery' ) );
	wp_enqueue_script( 'theme_image_scaling', get_template_directory_uri() . '/scripts/themeImageScaling.js', array( 'jquery', 'modernizer-custom_build'));
  wp_enqueue_script( 'theme_map', get_template_directory_uri() . '/scripts/themeMap.js', array( 'jquery', 'google_map') );
  wp_enqueue_script( 'theme_contact_info_controls', get_template_directory_uri() . '/scripts/themeContactInfoControls.js', array( 'jquery', 'google_map') );
  wp_enqueue_script( 'jquery-visible', get_template_directory_uri() . '/scripts/jquery.visible.min.js', array( 'jquery') );
  wp_enqueue_script( 'getContentGroupContent', get_template_directory_uri() . '/scripts/getContentGroupContent.js', array( 'jquery','jquery-visible') );
  wp_localize_script( 'getContentGroupContent', 'getContentGroupContent', 
    array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) 
  );

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );
?>