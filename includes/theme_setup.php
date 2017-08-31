<?php
  
if ( ! function_exists( 'theme_setup' ) ) :

  //Setup Theme Defaults
  function theme_setup() {
  	 
  	// Add default posts and comments RSS feed links to head.
  	add_theme_support( 'automatic-feed-links' );
  
  	//Let WordPress manage the document title.
  	add_theme_support( 'title-tag' );
    
  	//Switch core markup for search form to output HTML5.
  	add_theme_support( 'html5', array(
  		'search-form'
  	) );
  
    //Support custom post thumbnails
    add_theme_support('post-thumbnails');
  
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );  

//Set the content width in pixels, based on the theme's design and stylesheet.
function theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'content_width', 1200 );
}
add_action( 'after_setup_theme', 'theme_content_width', 0 );

//Set excerpt display.
function theme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'theme_excerpt_more' );

//Set excerpt length.
function theme_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'theme_custom_excerpt_length' );

?>