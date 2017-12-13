<div class="loop_content-single_listing_header">
  <div class="single_listing_header-main">
    
  <?php 
  //"Free" Event Badge Conditional
  if(!get_field('admission_charged'))
    echo '<div class="main-free_badge">Free</div>';

  //Title  
  the_title('<div class="main-title">', '</div>'); 
  
  //Start Event Days
  if(get_field('event_days'))
    echo '<div class="main-event_days">'.get_field('event_days').'</div>';
      
  //Event Labels 
  if(get_the_terms( $post->ID, 'event_label'))
    echo '<div class="main-event_labels">'.get_the_term_list( $post->ID, 'event_label', '', ', ' ).'</div>'; 
  ?>
  
  </div>
  <div class="single_listing_header-sidebar">
  
    <?php
    //Event Website
    if(get_field('event_website'))
      echo '<div class="sidebar-event_website"><a class="event_website-link" href="'.esc_url(get_field('event_website')).'" target="_blank">Visit Event Website</a></div>';
    ?>      
  
  </div>
</div>    
