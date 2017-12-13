<?php
//Begin Filterable Archive
if(get_field('add_filterable_archive')):
?>

<div class="feature-filterable_archive">
  
  <?php
  //Filterable Archive Fields
  $archive_content = get_field('archive_content');
  $archive_title = get_field('archive_title');
  $user_roles = get_field('user_roles');  
  $post_categories = get_field('post_categories');  
  $event_labels = get_field('event_labels');  
  $hide_filters = get_field('hide_filters');
  $background = get_field('background');
  $background_image = get_field('background_image'); 
  
  //Set Filter Types
  if($archive_content == 'post'){
    $filters = $post_categories;
  }elseif($archive_content == 'user'){
    $filters = $user_roles;
  }elseif($archive_content == 'event'){
    $filters = $event_labels;
  }else{
    $filters = null;
  }
  
  //Group Title
  if($archive_title)
    echo '<div class="filterable_archive-title">'.$archive_title.'</div>';

  //Begin Filters
  if(!empty($filters)):
  ?>
  
  <div class="filterable_archive-filters" <?php if($hide_filters) echo 'style="display:none"';?>>
    
    <?php     
    //Turn filter into array if only one role exists..
    if((count($filters) < 3) && $archive_content == 'user')
      $filters = array($filters);  
    
    //Start Filter Loop
    foreach($filters as $filter):
                
      //Set Filter Data
      if($archive_content == 'post' || $archive_content == 'event'){
        $filter_value = $filter->term_id;
        $filter_label = $filter->name;
      }elseif($archive_content == 'user'){
        $filter_value = $filter['value'];
        $filter_label = $filter['label'];
      }    
    ?>
    
    <label class="filters-single_filter" for="<?php echo $filter_value;?>"> 
      <input type="checkbox" class="single_filter-checkbox" id="<?php echo $filter_value;?>" data-filter_term="<?php echo $filter_value;?>"> <?php echo $filter_label;?> 
    </label>
    
    <?php
    //End Filter Loop  
    endforeach;
    ?>
    
  </div>
  
  <?php
  //End Filters
  endif;  
  ?>
  
  <div class="filterable_archive-content">    
    <div class="content-include" id="the_filterable_archive_content" data-content_type="<?php echo $archive_content; ?>"></div>
  </div>

  <?php
  //Filterable Archive Background 
  if($background):
  ?>
  
  <div class="filterable_archive-background">
    
    <?php
    //Background Overlay
    if(get_sub_field('add_background_overlay'))
      echo '<div class="background-overlay"></div>'; 
        
    //Background Variables
    if(!$background || $background == 'White')
      $background_class = 'white';
    if($background == 'Light Shade')
      $background_class = 'light_shade';
    if($background == 'Orange')
      $background_class = 'orange';
    if($background == 'Gold')
      $background_class = 'gold';
    if($background == 'Teal')
      $background_class = 'teal';
    if($background == 'Pink')
      $background_class = 'pink';
    if($background == 'Image'){ 
      $background_class = 'image';
      $background_image = get_sub_field('background_image')['sizes']['large']; 
    }
    ?>
    
    <div class="background-<?php echo $background_class;?>" <?php if($background == 'Image') echo 'style="background-image:url('.$background_image.');"'?>></div>
  </div>
  
  <?php
  //End Segment Background
  endif;
  ?>  

</div>

<?php
//End Filterable Archive
endif;
?>