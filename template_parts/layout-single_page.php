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
    //Standard Page		
  	get_template_part('template_parts/loop_content', 'standard_content');
  	
    //Segmented Page		
  	get_template_part('template_parts/loop_content', 'segments');
  	?>
  	
  </div>

  <?php
  //End Loop
  endwhile; endif;
  ?>
  
</div>

<?php
//End Segmented Page Layout
endif;
?>