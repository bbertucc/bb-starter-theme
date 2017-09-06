<?php
//Begin Single Page Layout
if(is_page()):
?>

<div class="layout-single_page">
  
	<?php
	//Start Loop
  if ( have_posts() ) : while ( have_posts() ) : the_post();  
  ?>
  
  <div class="single_page-loop_content">
        
    <?php  	
    //Segments	
  	get_template_part('template_parts/loop_content', 'segments');
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
//End Single Page Layout
endif;
?>