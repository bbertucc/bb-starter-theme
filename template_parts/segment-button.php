<?php
//Begin Optional Button
if (get_sub_field('add_button')):
  
  //Optional target=_blank
  if(get_sub_field('open_url_in_new_window')){
    $button_target = '_blank';
  }else{
    $button_target = '_self';
  }

  //Set Optional Inverted Button Class
  if(get_sub_field('invert_text_color')){
    $link_class = 'button-inverted_link';      
  }else{
    $link_class = 'button-link';      
  }
  
  //The Button
  echo '<div class="segment-button"><a class="'.$link_class.'" href="'.get_sub_field('button_url').'"  target="'.$button_target.'">'.get_sub_field('button_text').'</a></div>';    

//End Optional Button
endif;

?>