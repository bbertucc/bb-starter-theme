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
  
  <div class="event_list-header">
    <div class="header-content">
    <?php
    //Setup Query Variables
    if(!empty($_GET['events_year']) && !empty($_GET['events_month'])){
      
      //Variables with URL Defined Values
      $events_year = $_GET['events_year'];
      $events_month = $_GET['events_month'];

    //Standard Current Week Variables
    }else{
      $events_year = date('Y');
      $events_month = date('m');
      
    }
    
    //Set next and previous link
    if( $events_month != null && $events_year != null ){
            
      //Set Next/Previous week
      $previous_month = $events_month-1;
      $next_month = $events_month+1;
      $previous_year = $events_year;
      $next_year = $events_year;
      
      //Set Conditions for Dates
      if($previous_month <= 0 || $previous_month == null){
        $previous_month = 12;
        $previous_year = $events_year-1;
      }
      if($next_month >= 13){
        $next_month = 1;
        $next_year = $events_year+1;
      }
      
      //Set Links
      $previous_link = get_post_type_archive_link('event').'?events_year='.$previous_year.'&events_month='.$previous_month;
      $next_link = get_post_type_archive_link('event').'?events_year='.$next_year.'&events_month='.$next_month; 
    }  
    
    ?>
    
      <div class="content-current_month">
        
        <?php 
        //Set Month Name  
        $month_object = DateTime::createFromFormat('!m', $events_month);
        echo $month_object->format('F');
        ?>
        
      </div>        
      <div class="content-navigation">
        <a class="navigation-previous" href="<?php echo $previous_link;?>"></a>
        <a class="navigation-next" href="<?php echo $next_link;?>"></a>
      </div>
    </div>
  </div>

  <?php  
  //Set the start of the week-by-week loop (first day of month)
  $month_loop_start = new DateTime($events_year.'-'.$events_month.'-01');
  
  //Set the end of the week-by-week loop (last day of month)
  $month_end_date = date("Y-m-t", strtotime($events_year.'-'.$events_month.'-01'));
  $month_loop_end = new DateTime($month_end_date);
  
  //Set Loop Interval and Range for weeks in a month
  $month_loop_interval = new DateInterval('P1D');
  $month_loop_range = new DatePeriod($month_loop_start, $month_loop_interval, $month_loop_end);
    
  //Set days in each month  
  $weekNumber = 1;
  $weeks = array();
  foreach ($month_loop_range as $date) {
    $weeks[$weekNumber][] = $date->format('Y-m-d');      
    if ($date->format('w') == 6) {
        $weekNumber++;
    }
  }
  
  //Create array with first and last day of each week
  $weeks = array_map(function($week) {
      return array('start' => array_shift($week), 'end' => array_pop($week)); 
    }, $weeks);
  
  //Reset count of weeks with posts
  $weeks_with_posts = 0; 
  
  //Start event loop, showing events in each week within each range
  foreach ($weeks as $week):

    //Set the start and end of each week
    $week_start = $week['start'];
    $week_end = $week['end'];
    
    //Define Query Variables
    $begin = new DateTime( $week_start );
    $end = new DateTime( $week_end );
    $end = $end->modify( '+1 day' ); 
    $interval = new DateInterval('P1D');
    $daterange = new DatePeriod($begin, $interval ,$end);
       
    //Start Day-By-Day Loop
    foreach($daterange as $day):

      //Setup Query
      $single_day_query = new WP_Query(array(
        'post_type' => 'event',
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
      
      <div class="event_list-week">
        <div class="week-loop_content">
        
        <?php       
        //Show title
        echo '<div class="loop_content-week_header">'.date_format(date_create($week_start), 'm/d').' - '.date_format(date_create($week_end), 'm/d').'</div>';

        //Single Day Loop
        while ( $single_day_query->have_posts() ):

          //Add to the Amount of Weeks that Have Posts
          $weeks_with_posts++;
          
          //List Post
          $single_day_query->the_post();
          get_template_part('template_parts/loop_content', 'listed_event');

        //End Single Day Loop
        endwhile;
        wp_reset_postdata();
        ?>
        
        </div>
      </div>
      
      <?php  
      //End Loop
      endif;
            
    //End Day-By-Day Loop
    endforeach;

  //End Event Loop
  endforeach;
 
  //Content Fallback
  if( $weeks_with_posts <= 0 )
    get_template_part('template_parts/loop_content', 'error_message');

  ?>
    
  </div>
</div>

<?php
//End Event List Layout
endif;
?>