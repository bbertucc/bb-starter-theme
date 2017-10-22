<?php
//Begin Content Group Segment
if(get_sub_field('segment_type') == 'Content Group Only' || get_sub_field('segment_type') == 'Text and Content Group'):
?>

<div class="segment-content_group">
  
  <?php
  //Text Fields
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $body = get_sub_field('body'); 

  //Set Text Extentions By Character and Paragraph Count
  $text_characters = strlen(strip_tags($body));
  $text_paragraphs = substr_count($body, '<p');
  if($text_characters < 300)
    $text_class = 'brief_text';
  if( ($text_characters > 300) && ($text_characters < 800) )
    $text_class = 'regular_text';
  if($text_characters > 800)
    $text_class = 'long_text';
    
  //Set Optional Inverted Text Class
  if(get_sub_field('invert_text_color'))
    $text_class .= '_inverted';

  //Start Text
  if(get_sub_field('segment_type') == 'Text and Content Group'  && (!$title  || !$subtitle  || !$body) ):
  ?>

  <div class="content_group-<?php echo $text_class;?>">
    
    <?php
    //Title
    if($title)
      echo '<div class="'.$text_class.'-title">'.$title.'</div>';

    //Subtitle
    if($subtitle)
      echo '<div class="'.$text_class.'-subtitle">'.$subtitle.'</div>';
      
    //Body
    if($body)
      echo '<div class="'.$text_class.'-body">'.$body.'</div>';
    ?>   
     
  </div>

  <?php
  //End Text
  endif;
    
  //Content List Fields
  $grouped_content = get_sub_field('grouped_content');
  $posts = get_sub_field('posts'); 
  $users = get_sub_field('users');
    
  //Start Posts Group
  if( $grouped_content == 'Posts' && $posts ):
  ?>    
  
  <div class="content_group-posts">
    
    <?php
    //Start Posts Repeater
    foreach( $posts as $post): setup_postdata($post);
    ?>

    <a class="posts-listed_post" href="<?php the_permalink(); ?>">
      
      <?php
      //Responsive Image
      if(get_post_type() == 'attachment'){
        $image_id = get_the_ID();
      }else{
        $image_id = get_post_thumbnail_id();        
      }
      if($image_id){
        
        //Set Up Image Variables
        $img_src = wp_get_attachment_image_url( $image_id, 'medium' );
        $img_srcset =  wp_get_attachment_image_srcset( $image_id, 'medium' );;
        $img_sizes = '(max-width: 1200px) 290px, 350px';
        
        //The Image
        echo '<img class="listed_post-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'">';
        
      }
      
      //Title
      if(get_the_title())
        echo '<div class="listed_post-title">'.get_the_title().'</div>'; 
      ?>

    </a>

    <?php 
    //End Posts Repeater
    endforeach; 
    ?>
      
  </div>
  
  <?php
  //End Posts Group
  endif;
  
  //Start Users Group
  if( $grouped_content == 'Users' && $users ):

  ?>    
  
  <div class="content_group-users">
    
    Coming soon!
      
  </div>
  
  <?php
  //End Users Group
  endif;
  ?>  
  
</div>

<?php
//End Content Group Segment
endif;
?>