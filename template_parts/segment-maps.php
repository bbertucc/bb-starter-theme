<?php
//Map Segment
if(get_sub_field('segment_type') == 'Maps' && have_rows('maps') ):
?>

<div class="segment-maps">
  
  <?php
  //Start Maps Repeater
  $map_count = 0;
  while(have_rows('maps')): the_row();
    //Set Map ID
    $map_id = 'map_'.$map_count++;
  ?>
  
  <div class="maps-single_map" id="<?php echo $map_id;?>" data-post_type="<?php the_sub_field('post_type');?>">
    <div class="single_map-title"><?php the_sub_field('map_title');?></div>    
    
    <?php
    //Start Category Filters
    $category_filters = get_sub_field('category_filters');    
    if($category_filters):
    ?>
    
    <div class="single_map-category_filters">    
    
      <?php
      //Start Category Filter Loop
      foreach( $category_filters as $category_filter ): 
      ?>
      
        <label class="category_filters-filter">
          <input class="filter-checkbox" data-category_filter="<?php echo $category_filter->term_id?>" type="checkbox"> 
          <?php echo $category_filter->name;?> 
        </label>

      <?php
      //End Category Filter Loop
      endforeach; 
      ?>
      
    </div>

    <?php
    //End Category Filters
    endif;
    
    //Start Tag Filters
    $tag_filters = get_sub_field('tag_filters');    
    if($tag_filters):
    ?>
    
    <div class="single_map-tag_filters">    
    
      <?php
      //Start Tag Filter Loop
      foreach( $tag_filters as $tag_filter ): 
      ?>
      
        <label class="tag_filters-filter">
          <input class="filter-checkbox" data-tag_filter="<?php echo $tag_filter->term_id?>" type="checkbox"> 
          <?php echo $tag_filter->name;?> 
        </label>

      <?php
      //End Tag Filter Loop
      endforeach; 
      ?>
      
    </div>

    <?php
    //End Tag Filters
    endif;
    
    //Start Event Label Filters
    $event_label_filters = get_sub_field('event_label_filters');    
    if($event_label_filters):
    ?>
    
    <div class="single_map-event_label_filters">    
    
      <?php
      //Start Event Label Filter Loop
      foreach( $event_label_filters as $event_label_filter ): 
      ?>
      
        <label class="event_label_filters-filter">
          <input class="filter-checkbox" data-event_label_filter="<?php echo $event_label_filter->term_id?>" type="checkbox"> 
          <?php echo $event_label_filter->name;?> 
        </label>

      <?php
      //End Event Label Loop
      endforeach; 
      ?>
      
    </div>

    <?php
    //End Event Label Filters
    endif;
    ?>    

    <div class="single_map-includes">
      Loading..
    </div>
    <div class="single_map-the_map"></div>
  
    <script>
      //Load Ajax User list
      jQuery('#<?php echo $map_id;?>').themeFilteredList();
    </script>

  </div>  
  <?php
  //End Maps Repeater
  endwhile;
  ?>

</div>

<?php
//End Maps Segment
endif;
?>