<?php
//Begin Event List Layout
if( is_post_type_archive( 'event' ) ):
?>

<div class="layout-event_list">

  <?php
  //Callout Variables and Fallbacks
  $title = get_theme_mod('theme_event_list_title');
  if(empty($title))
    $title = 'Event List';
  $body = get_theme_mod('theme_event_list_body');
  if(empty($body))
    $body = 'Update this description in the WordPress Customizer.';
  $background_image = wp_get_attachment_image_url(get_theme_mod( 'theme_event_list_background' ), 'large' );
  if(empty($background_image))
    $background_image = '';
  $inverted = get_theme_mod( 'theme_event_list_inverted' );    
  if(empty($inverted))
    $inverted = false;
  ?>
  
  <div class="event_list-callout">
    
    <?php
    //Callout Background 
    if($background_image):    
    ?>
    
    <div class="callout-background">
      <div class="background-image" style="background-image:url(<?php echo $background_image; ?>)"></div>
    </div>
    
    <?php
    //End Callout Background
    endif;

    //Set Optional Inverted Text Class
    if($inverted == true){
      $callout_class = 'medium_inverted';
      }else{
      $callout_class = 'medium';
    }    
    ?>
    
    <div class="callout-<?php echo $callout_class; ?>">
      
      <?php
      //Segment Title
      if($title)
        echo '<div class="'.$callout_class.'-title">'.$title.'</div>';
        
      //Segment Body
      if($body)
        echo '<div class="'.$callout_class.'-body">'.$body.'</div>';
      ?>
      
    </div>    
  </div>
  
  <?php
  //Begin Event Labels
  $event_labels = get_terms('event_label');
  if ( $event_labels && !is_wp_error( $event_labels ) ) :
  ?>
    
  <div class="event_list-event_labels">
          
    <?php 
    //Event Labels Loop  
    foreach ( $event_labels as $label )
      echo '<a class="event_labels-label" href="'.get_term_link($label->slug, 'event_label').'">'.$label->name.'</a>';
    ?>
      
  </div>
      
  <?php 
  //End Event Labels
  endif;
  ?>
  
  <div class="event_list-navigation">
    
    <?php
    //Setup Query Variables
    if(!empty($_GET['events_year']) && !empty($_GET['events_week'])){
      
      //Variables with URL Defined Values
      $events_year = $_GET['events_year'];
      $events_week = $_GET['events_week'];

    //Standard Current Week Variables
    }else{
      $events_year = date('Y');
      $events_week = date('W');
      
    }
    
    //Set next and previous link
    if( $events_week != null && $events_year != null ){
            
      //Set Next/Previous week
      $previous_week = $events_week-1;
      $next_week = $events_week+1;
      $previous_year = $events_year;
      $next_year = $events_year;
      
      //Set Conditions for Dates
      if($previous_week <= 0 || $previous_week == null){
        $previous_week = 53;
        $previous_year = $events_year-1;
      }
      if($next_week >= 54){
        $next_week = 1;
        $next_year = $events_year+1;
      }
      
      //Set Links
      $previous_link = get_post_type_archive_link('event').'?events_year='.$previous_year.'&events_week='.$previous_week;
      $next_link = get_post_type_archive_link('event').'?events_year='.$next_year.'&events_week='.$next_week; 
    }  
    
    //Set Navigation Text
    if( $events_week != null && $events_year != null ){
      $week_start = date("M d", strtotime($events_year.'W'.$events_week.'1'));
      $week_end = date("M d", strtotime($events_year.'W'.$events_week.'7'));
      $navigation_text = $week_start.' - '.$week_end;
    }  
    ?>
    
    <div class="navigation-text">
      
      <?php echo $navigation_text;?>
      
    </div>        
    <a class="navigation-previous" href="<?php echo $previous_link;?>">Previous Week</a>
    <a class="navigation-next" href="<?php echo $next_link;?>">Next Week</a>
  </div>
  <div class="event_list-content">

  <?php  
  //Define Query Variables
  $week_start = date('Y-m-d', strtotime($events_year.'W'.$events_week.'1'));
  $week_end = date('Y-m-d', strtotime($events_year.'W'.$events_week.'7'));
  $begin = new DateTime( $week_start );
  $end = new DateTime( $week_end );
  $end = $end->modify( '+1 day' ); 
  $interval = new DateInterval('P1D');
  $daterange = new DatePeriod($begin, $interval ,$end);
  $days_with_posts = 0;
 
  //Start Day-By-Day Loop
  foreach($daterange as $day):
  
    //Setup Query
    $single_day_query = new WP_Query(array(
      'post_type' => 'events',
      'posts_per_page' => -1,
    	'meta_query' => array(
    		array(
    			'key'     => 'event_days',
    			'value'   => $day->format('m/d/Y'),
    			'compare' => 'LIKE',
    		),
    	)
    ));
    
    //Start Loop
    if($single_day_query->have_posts()):
    ?>
      
      <div class="content-day_header">
        <div class="day_header-day"><?php echo $day->format('D');?>, </div>
        <div class="day_header-date"><?php echo $day->format('M d');?></div>
      </div>
      <div class="content-loop_content">
        
        <?php
        //Add to the Amount of Days that Have Posts
        $days_with_posts++;
  
        //Single Day Loop
        while ( $single_day_query->have_posts() ):
          
          $single_day_query->the_post();
          get_template_part('template_parts/loop_content', 'listed_event');
        
        //End Single Day Loop
        endwhile;
        wp_reset_postdata();
        ?>
      
      </div>
    
  <?php  
    //End Loop
    endif;

  //Start Day-By-Day Loop
  endforeach;
  ?>
  
  </div>
  
  <?php
  //Content Fallback
  if( $days_with_posts <= 0 ){
    get_template_part('template_parts/loop_content', 'error_message');
  }
  
  ?>
    
  </div>

</div>

<?php
//End Event List Layout
endif;
?>