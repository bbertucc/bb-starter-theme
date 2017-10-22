<?php
//Testimonials Segment
if(get_sub_field('segment_type') == 'Testimonials' ):
?>

<div class="segment-testimonials">    

  <?php
  //Text Fields
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $body = get_sub_field('body');

  //Title
  if($title)
    echo '<div class="testimonials-title">'.$title.'</div>';
    
  //Subtitle
  if($subtitle)
    echo '<div class="testimonials-title">'.$subtitle.'</div>';
    
  //Body
  if($body)
    echo '<div class="testimonials-body">'.$body.'</div>';

  //Testimonials
  if(have_rows('testimonials')):
    
    //Testimonial Count
    $testimonial_count = 0; 
  ?>
  
  <div class="testimonials-quotes">

    <?php 
    //Start Testimonial Repeater
    while ( have_rows('testimonials') ) : the_row(); 
    
    //Add to Count
    $testimonial_count++;
    
    ?>
    
    <div class="quotes-single_quote" id="testminonial-<?php echo $testimonial_count?>">
      
      <?php the_sub_field('testimonial'); ?>
      
    </div>
    
    <?php endwhile; ?>
    
  </div>
  <div class="testimonials-sources">

    <?php 
    //Reset Testimonial Count
    $testimonial_count = 0; 
      
    //Start Testimonial Repeater
    while ( have_rows('testimonials') ) : the_row(); 
    
    //Add to Count
    $testimonial_count++;
    
    ?>
    
    <a class="sources-single_source" href="#testminonial-<?php echo $testimonial_count?>">
      
      <?php 
      //Source Variables  
      $source = get_sub_field('source'); 
      $source_image = get_sub_field('source_image');

      //Source w/ Optional Image
      if(!$source_image){
        echo $source;
      }else{
        
        //Set Up Responsive Image Variables
        $img_src = wp_get_attachment_image_url( $source_image['ID'], 'small' );
        $img_srcset =  wp_get_attachment_image_srcset( $source_image['ID'], 'small' );;
        $img_sizes = '322px';
        
        //The Image
        echo '<img class="single_source-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="'.$source.'">';
        
      }
      ?>

    </a>
    
    <?php 
    //End Testimonial Repeater
    endwhile; 
    ?>
    
  </div>
  
  <?php 
  //End Testimonials
  endif; 
  ?>
    
</div>

<?php
//End Testimonials Segment
endif;
?>