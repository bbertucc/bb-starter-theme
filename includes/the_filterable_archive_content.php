<?php
//Begin The Filterable Archive Content
function the_filterable_archive_content(){
?>

<div class="include-the_filterable_archive_content">

  <?php
  //If is an Ajax Request...
	$query_data = $_POST;
	if($query_data != null){
    $filter_term = ($query_data['filter_term']) ? explode(',',$query_data['filter_term']) : null;
    $content_type = $query_data['content_type'];
    $query_offset = $query_data['query_offset'];
	
	//If isn't an ajax request..
	}else{
    $filter_term = null;
    $content_type = null;
    $query_offset = null;
	}
			  
  //Get Desired Content
  if($content_type == 'post' || $content_type == 'event'){
    
    //Set Taxonomy
    if($content_type == 'post')
      $taxonomy = 'category';
    if($content_type == 'event')
      $taxonomy = 'event_label';

    //Get Posts and Events
  	$all_content = get_posts(array(
  		'posts_per_page' => 6,
      'offset' => $query_offset,
      'post_type' => $content_type,
      'tax_query' => array(array(
        'taxonomy' => $taxonomy,
        'field' => 'term_id',
        'terms' => $filter_term
      ))
  	)); 
  	              	
  }elseif($content_type == 'user'){
    
    //Get Users 
  	$all_content = get_users(array(
  		'number' => 6,
  		'role__in' => $filter_term,
      'offset' => $query_offset
  	));      
  	   
  }
    
  //Start Content Query
  if( !empty($all_content) ): 
  ?>
  
  <div class="the_filterable_archive_content-content_list">
        
    <?php
    //Start User Loop
    foreach ( $all_content as $single_content ): 
    
      //Start Single Post or Event
      if($content_type == 'post' || $content_type == 'event'):
      ?>
      
    <a class="content_list-the_post" href="<?php echo $single_content->guid;?>">
      
      <?php 
      //Thumbnail  
      if(has_post_thumbnail($single_content->ID))
        echo '<div class="the_post-thumbnail">'.get_the_post_thumbnail($single_content->ID, 400, array( 'class' => 'thumbnail-image')).'</div>';

      //Event Time
      if($content_type == 'event'){
        echo '<div class="the_post-event_time">';
        if(get_field('event_date_info', $single_content->ID)){
          echo get_field('event_date_info', $single_content->ID);
        }elseif(get_field('event_days', $single_content->ID)){
          echo get_field('event_days', $single_content->ID);
        }
        echo '</div>';
      }
      
      //Post or Event Title
      if(!empty($single_content->post_title))
        echo '<div class="the_post-title">'.$single_content->post_title.'</div>';      
      ?>
      
    </a>
        
      <?php
      //End Single Post or Event
      endif;
      
      //Start Single User
      if($content_type == 'user'):
      ?>
      
    <div class="content_list-the_user">
      
      <?php 
      //Avatar  
      echo '<div class="the_user-avatar">'.get_avatar($single_content->ID, 400, null, null, $args = array( 'class' => array( 'avatar-image'))).'</div>';
      
      //User's Name
      if(!empty($single_content->display_name))
        echo '<div class="the_user-name">'.$single_content->display_name.'</div>';      
      ?>
      
    </div>      
      
      <?php
      //End Single User
      endif;      
     
    //End User Loop
    endforeach; 
    ?>
      
  </div>
  
  <?php
  //End Content Query
  endif;  

  //Count Total Amount of content
  if($content_type == 'post' || $content_type == 'event'){
  	$total_content = count(get_posts(array(
  		'posts_per_page' => 6,
      'offset' => $query_offset,
      'post_type' => $content_type,
      'tax_query' => array(array(
        'taxonomy' => $taxonomy,
        'field' => 'term_id',
        'terms' => $filter_term
      ))
  	)));             
  }elseif($content_type == 'user'){
    $total_content = count(get_users(array(
  		'number' => -1,
  		'role__in' => $filter_term,
  		'offset' => $query_offset
  	)));
  }
	
	//No Users Exist
	if($total_content == 0 && $query_offset == 0)
    echo '<p style="margin:2%; margin-bottom: 120px;">No content exists.</p>';      
  
  //Add 6 to the Query offset
  $new_query_offset = $query_offset + 6;
  
  //Div if total users > the query offset
  if( $total_content > $new_query_offset ){
        
    //Create Div
    echo '<div class="the_filterable_archive_content-load_more" id="load_more" data-query_offset="'.$new_query_offset.'">Load More Content</div>';      
  }
  ?>

</div>

<?php
//End The Filterable Archive Content
}
?>