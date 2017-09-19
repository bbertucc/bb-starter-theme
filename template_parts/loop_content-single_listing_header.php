<div class="loop_content-single_listing_header">
  <div class="single_listing_header-main">
    
  <?php 
  //"Free" Event Badge Conditional
  if(!get_field('admission_charged'))
    echo '<div class="main-free_badge">Free</div>';

  //Title  
  the_title('<div class="main-title">', '</div>'); 
  
  //Start Event Days
  if(get_field('event_days')):
  ?>
  
    <div class="main-event_days">
      
      <?php 
      //Turn Multiple days into arry
      $days = explode(",", get_field('event_days'));    
      
      //Conditionally wrap multiple event days
      if(count($days) > 1){
        echo '<div class="event_days-multiple_days_toggle" data-fancybox="modal" data-src="#event_days">View All Days</div>';
        echo '<div class="event_days-multiple_days" id="event_days"><h4 class="multiple_days-title">'.get_the_title().' Event Days</h4><h4 class="multiple_days-list">';
        foreach($days as $day)
          echo '<li class="multiple_days-day">'.$day.'</li>';    
        echo '</h4></div>';
      }else{
        
        //Show Single Day if only one day exists
        echo '<div class="event_days-single_day">'.get_field('event_days').'</div>';
        
      }
      ?>
      
    </div>
        
  <?php
  //End Event Days
  endif;
        
  //Event Labels 
  if(get_the_terms( $post->ID, 'event_label'))
    echo '<div class="main-event_labels">'.get_the_term_list( $post->ID, 'event_label', '', ', ' ).'</div>'; 
  ?>
  
  </div>
  <div class="single_listing_header-sidebar">
  
    <?php
    //Event Days
    if(get_field('event_website'))
      echo '<div class="sidebar-event_website"><a class="event_website-link" href="'.esc_url(get_field('event_website')).'" target="_blank">Visit Event Website</a></div>';
    ?>      
  
  </div>
</div>    
