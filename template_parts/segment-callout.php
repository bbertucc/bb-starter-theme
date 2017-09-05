<?php
//Begin Callout
if(get_sub_field('segment_type') == 'Callout' ):
?>

<div class="segment-callout">    

  <?php
  //Set Text Class
  if(get_sub_field('callout_size') == 'Large'){
    $content_class = 'large';
  }elseif(get_sub_field('callout_size') == 'Medium'){
    $content_class = 'medium';
  }else{
    $content_class = 'small';
  }
  
  //Set Optional Inverted Text Class
  if(get_sub_field('invert_text_color'))
    $content_class .= '_inverted';
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