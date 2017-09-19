<?php
//Begin Single Post Layout
if(is_single() && !is_singular('event')):
?>

<div class="layout-single_post">

	<?php
	//Start Loop
  if ( have_posts() ) : while ( have_posts() ) : the_post();  
  ?>
  
  <div class="single_post-media">
    
    <?php
    //Post Media Gallery		
  	get_template_part('template_parts/media', 'post_media');
  	?>
  	
  </div>
  
  <div class="single_post-loop_content">
        
    <?php
    //Post Content		
  	get_template_part('template_parts/loop_content', 'post_content');
  	?>
  	
  </div>

  <?php
  //End Loop
  endwhile; 
  else:
  
    //Error Message		
  	get_template_part('template_parts/loop_content', 'error_message');
  
  endif;
  ?>

</div>

<?php
//End Single Post Layout
endif;
?>