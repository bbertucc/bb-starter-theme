<?php
//Segment Background 
$background = get_sub_field('background');
if($background):
?>

<div class="segment-background">
  
  <?php
  //Background Overlay
  if(get_sub_field('add_background_overlay'))
    echo '<div class="background-overlay"></div>'; 
    
  //Background Variables
  if(!$background || $background == 'White')
    $background_class = 'white';
  if($background == 'Light Shade')
    $background_class = 'light_shade';
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