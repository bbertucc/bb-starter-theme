<?php
//Add Ajax Actions to Marker Template
add_action('wp_ajax_filter', 'theme_filtered_list');
add_action('wp_ajax_nopriv_filter', 'theme_filtered_list');

//Construct Template to Load Via Ajax
function theme_filtered_list(){
  
  //Get AJAX Data
	$query_data = $_GET;	
	$post_type = ($query_data['postType']) ? explode(',',$query_data['postType']) : false;
	$category_filters = ($query_data['categoryFilters']) ? explode(',',$query_data['categoryFilters']) : false;
	$tag_filters = ($query_data['tagFilters']) ? explode(',',$query_data['tagFilters']) : false;
	$event_label_filters = ($query_data['eventLabelFilters']) ? explode(',',$query_data['eventLabelFilters']) : false;


  //Setup Taxonomy Query
  $taxonomy_query = array();
  if($category_filters != null){
    $category_query = array(
      'taxonomy' => 'category',
      'field' => 'term_id',
      'terms' => $category_filters
    );
     array_push($taxonomy_query, $category_query);
  }
  if($tag_filters != null){
    $tag_query = array(
      'taxonomy' => 'post_tag',
      'field' => 'term_id',
      'terms' => $tag_filters
    );
    array_push($taxonomy_query, $tag_query);
  }
  if($event_label_filters != null){
    $event_label_query = array(
      'taxonomy' => 'event_label',
      'field' => 'term_id',
      'terms' => $event_label_filters
    );
    array_push($taxonomy_query, $event_label_query);
  }
   
  //Get Content within the desired post type
  $map_markers = get_posts( array(
    'post_type' => $post_type,
    'posts_per_page' => -1,
    'meta_key' => 'location',
    'tax_query' => $taxonomy_query,
  ));

  //Start Marker Content Loop
  foreach ($map_markers as $marker): 
?>

  <div class="include-ajax_map_marker" data-lat="<?php echo get_field('location', $marker->ID)['lat'];?>" data-lng="<?php echo get_field('location', $marker->ID)['lng'];?>">
    <div class="ajax_map_marker-title">
      <?php echo get_the_title($marker->ID);?>
    </div>
  	<div class="ajax_map_marker-address">
    	<?php echo get_field('location', $marker->ID)['address']; ?>
    </div>
  </div>

<?php 
  //End Marker Content Loop
  endforeach; 
  wp_reset_postdata();
  
  //Remove 0
  die();
   
//End Ajax Template
}
?>