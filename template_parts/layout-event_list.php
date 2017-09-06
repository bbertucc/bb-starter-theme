<?php
//Begin Event List Layout
if( is_post_type_archive( 'events' ) ): //Note: The standard BB theme post type is "event" not "events"
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
    if($inverted == true)
      $content_class .= '_inverted';    
    ?>
    
    <div class="callout-medium<?php echo $content_class; ?>">
      
      <?php
      //Segment Title
      if($title)
        echo '<div class="medium'.$content_class.'-title">'.$title.'</div>';
        
      //Segment Body
      if($body)
        echo '<div class="medium'.$content_class.'-body">'.$body.'</div>';
      ?>
      
    </div>    
  </div>
  
  <?php
  //Begin Event Labels
  $terms = get_terms('event_labels');
  if ( $terms && !is_wp_error( $terms ) ) :
  ?>
    
  <div class="event_list-labels">
          
    <?php 
    //Event Labels Loop  
    foreach ( $terms as $term ) 
      echo '<a class="labels-single_label" href="'.get_term_link($term->slug, 'event_labels').'">'.$term->name.'</a>';
    ?>
      
        
  </div>
      
  <?php 
  //End Event Labels
  endif;
     
  //Start Event List Loop
  if(have_posts()):
  ?>
  
  <div class="event_list-loop_content">
    
    <?php 
    //Single Event..
    while(have_posts()): the_post();
      get_template_part('template_parts/loop_content', 'listed_event');
    endwhile;
      get_template_part('template_parts/loop_content', 'pagination');

    //If no events exist...
    else:
      get_template_part('template_parts/loop_content', 'error_message');
    ?>
  
  </div>

  <?php
  //End Event List Loop
  endif;
  ?>

</div>

<?php
//End Event List Layout
endif;
?>