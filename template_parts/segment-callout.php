<?php
//Begin Callout
if(get_sub_field('segment_type') == 'Callout' ):
?>

<div class="segment-callout">    

  <?php
  //Set Text Class
  if(get_sub_field('make_callout_large')){
    $content_class = 'large_content';
  }else{
    $content_class = 'standard_content';
  }
  ?>
  
  <div class="callout-<?php echo $content_class; ?>">
    
    <?php
      
    //Text Fields
    $title = get_sub_field('title');
    $body = get_sub_field('body');

    //Segment Title
    if($title)
      echo '<div class="'.$content_class.'-title">'.$title.'</div>';
      
    //Segment Body
    if($body)
      echo '<div class="'.$content_class.'-body">'.$body.'</div>';

    ?>
    
  </div>
    
</div>

<?php
//End Callout Segment
endif;
?>