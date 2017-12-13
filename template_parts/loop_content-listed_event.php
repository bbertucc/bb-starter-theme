<div class="loop_content-listed_event">
  
  <?php
  //Begin Responsive Image
  if(has_post_thumbnail()):
  ?>

  <a class="listed_event-image" href="<?php the_permalink(); ?>">    
  
    <?php        
    //"Free" Event Badge Conditional
    if(!get_field('admission_charged'))
      echo '<div class="image-free_badge">Free</div>';

    //Set Up Image Variables
    $img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'small' );
    $img_srcset =  wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'small' );;
    $img_sizes = '220px';
    
    //The Image
    echo '<img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'">';
    ?>
  
  </a>
  
  <?php
  //End Responsive Image
  endif;
  ?>
  
  <div class="listed_event-text">    
    <a href="<?php the_permalink(); ?>" class="text-title"><?php the_title();?></a>
    <div class="text-date_data">
      
      <?php
      //Event Date/Time info or Event Days
      if(get_field('event_date_info')){
        echo get_field('event_date_info');
      }else{
        echo get_field('event_days');
      }
      ?>
    
    </div>
  </div>
</div>