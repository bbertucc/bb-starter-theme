<div class="loop_content-listed_event">

  <?php  
  //Begin Responsive Image
  if(has_post_thumbnail()):
  ?>

  <a class="listed_event-image" href="<?php the_permalink(); ?>">    
  
    <?php        
    //Set Up Image Variables
    $img_src = wp_get_attachment_image_url( get_post_thumbnail_id(), 'small' );
    $img_srcset =  wp_get_attachment_image_srcset( get_post_thumbnail_id(), 'small' );;
    $img_sizes = '672px';
    
    //The Image
    echo '<img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'">';
    ?>
  
  </a>
  
  <?php
  //End Responsive Image
  endif;
  ?>
  
  <div class="listed_post-text">    
    <a href="<?php the_permalink(); ?>" class="text-title"><?php the_title();?></a>
    
    <?php
    //Event Time (Optional)
    if(get_field('event_time'))
      echo '<div class="text-time">'.get_field('event_time').'</div>'
    ?>
    
  </div>
</div>