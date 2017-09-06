<?php
//Start Segments
if( get_field('content_display') == 'Segmented Page' && have_rows('segments') ): 
?>

<div class="loop_content-segments">
  
  <?php
  //Repeater Count
  $count = 0;  
  
  //Start Segment Repeater
  while ( have_rows('segments') ) : the_row();
    
    //Add to Count
    $count++;
  ?>
  
  <div class="segments-segment" id="segment-<?php echo $count;?>">
    
    <?php
    //Segment Parts
    get_template_part('template_parts/segment', 'info_box');
    get_template_part('template_parts/segment', 'one_column');
    get_template_part('template_parts/segment', 'two_column');
    get_template_part('template_parts/segment', 'callout');
    get_template_part('template_parts/segment', 'testimonials');
    get_template_part('template_parts/segment', 'button');
    get_template_part('template_parts/segment', 'filterable_map');
    get_template_part('template_parts/segment', 'background');
    ?>
  
  </div>
  
  <?php
  //End Segment Repeater
  endwhile;
  ?>

</div>

<?php
//End Segments
endif;
?>