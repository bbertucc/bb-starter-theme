<?php
//Begin Single Event Layout
if( is_singular( 'event' ) ): 
?>

<div class="layout-single_event">
  
  <?php 
  //Start Event Loop
  if(have_posts()): while(have_posts()): the_post();
  ?>
  
  <div class="single_event-loop_content">
    <div class="loop_content-media">

      <?php 
      //Post Media
      get_template_part('template_parts/media', 'mosaic');
      ?>
      
    </div>
    
    <?php 
    //Single Listing Header
    get_template_part('template_parts/loop_content', 'single_listing_header');
    
    //Single Listing Body
    get_template_part('template_parts/loop_content', 'single_listing_body');
    ?>
      
  </div>
  
  <?php
  //End Single Event Loop
  endwhile; endif;
  ?>
    
</div>

<?php
//End Event Layout
endif;
?>