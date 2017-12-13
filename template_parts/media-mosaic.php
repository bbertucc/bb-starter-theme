<?php
//Start Post Media 
if(have_rows('media')):
?>

<div class="media-mosaic">
      
  <?php
  //Set Out-of-Repeater Variables
  $gallery_id = uniqid(); //To group media in Fancybox
  
  //Set amount of media
  $total_media = count(get_field('media'));
  
  //Start Media Repeater 
  while(have_rows('media')): the_row();
    
    //Set In-Repeater Variables
    $media_type = get_sub_field('media_type');
    $image = get_sub_field('image');
    $link_url = get_sub_field('link_url');
    $caption = get_sub_field('caption');
        
    //Set Media Link
    if($link_url == null || $link_url == '')
      $link_url = $image['sizes']['large'];
    if($media_type == 'PDF')
      $link_url = 'javascript:;';
    ?>
    
    <a 
      class="mosaic-item" 
      href="<?php echo $link_url ?>" 
      
      <?php 
      //Set Fancybox Gallery Settings
      if( ($link_url == $image['sizes']['large']) || ($media_type == 'PDF') || ($media_type == 'YouTube Video') )
        echo 'data-fancybox="gallery-'.$gallery_id.'"';
        
      //Set Fancybox caption
      if($caption) 
        echo 'data-caption="'.$caption.'"'; 
      if($media_type == 'PDF') 
        echo 'data-type="iframe" data-src="'.get_sub_field('link_url').'"'; 
      ?>
        
    >
      <div class="item-image">

        <?php
        
        //Responsive Image
        if($image){
          
          //Set Up Image Variables
          if($total_media < 3){
            $img_src = wp_get_attachment_image_url( $image['ID'], 'large' );
            $img_srcset =  wp_get_attachment_image_srcset( $image['ID'], 'large' );;
            $img_sizes = '(max-width: 1440px) 2880px, 4400px';
          }
          if($total_media >= 3){
            $img_src = wp_get_attachment_image_url( $image['ID'], 'medium' );
            $img_srcset =  wp_get_attachment_image_srcset( $image['ID'], 'medium' );;
            $img_sizes = '(max-width: 1440px) 960px, 1468px';
          }
          
          //The Image
          echo '<img class="image-the_image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" style="object-position:'.get_sub_field('image_focal_point').'">';
          
        }
        ?>

      </div>
      
      <?php 
      //YouTube Play Icon
      if($media_type == 'YouTube Video')
        echo '<div class="item-play_icon"></div>';

      //PDF Icon
      if($media_type == 'PDF')
        echo '<div class="item-pdf_icon"></div>';

      //Caption
      if($caption)
        echo '<div class="item-caption">'.$caption.'</div>';
      ?>

    </a>
  
  <?php
  //End Media Repeater
  endwhile;
  ?>
    
</div>

<?php
//End Post Media
endif;
?>