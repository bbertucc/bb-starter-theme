<?php
//Register Custom Taxonomies
function theme_custom_taxonomies() {
  
  //Create "Event Labels" Taxonomy
	register_taxonomy(
		'event_label',
		'events', //Note: The standard BB theme post type is "event" not "events"
		array(
			'label' => __( 'Event Labels' ),
      'hierarchical'      => true,
  		'show_ui'           => true,
  		'show_admin_column' => true,
  		'query_var'         => true,
  		'rewrite'           => array( 'slug' => 'event_label' ),
		)
	);
	
}
add_action( 'init', 'theme_custom_taxonomies' );
?>