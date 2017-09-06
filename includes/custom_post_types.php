<?php
//Register Post Types
add_action( 'init', 'codex_custom_init' );
function codex_custom_init() {
  
  //Events Post Type
  $events_args = array(
    'public' => true,
    'label'  => 'Events',
    'supports' => array( 'title', 'author', 'thumbnail', 'excerpt', 'revisions', 'custom-fields'),
    'taxonomies' => array('event_label'),
    'has_archive' => true
  );
  register_post_type( 'event', $events_args );

}
?>