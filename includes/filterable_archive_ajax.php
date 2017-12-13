<?php
//Construct Template to Load Via Ajax
function filterable_archive_ajax(){

  //Load Filterable Archive Content
  the_filterable_archive_content();
    
  //End Ajax
  die();
   
//End Ajax Template
}

//Add Ajax Actions to Template
add_action('wp_ajax_filter_filterable_archive', 'filterable_archive_ajax');
add_action('wp_ajax_nopriv_filter_filterable_archive', 'filterable_archive_ajax');  
?>