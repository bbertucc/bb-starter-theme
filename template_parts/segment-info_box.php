<?php
//Info Box Segment
if(get_sub_field('segment_type') == 'Info Box' ):
?>

<div class="segment-info_box">    

  <div class="info_box-content">
    
    <?php
    //Text Fields
    $title = get_sub_field('title');
    $body = get_sub_field('body');

    //Segment Title
    if($title)
      echo '<div class="content-title">'.$title.'</div>';
      
    //Segment Body
    if($body)
      echo '<div class="content-body">'.$body.'</div>';
    ?>
    
  </div>
    
</div>

<?php
//End Info Box
endif;
?>