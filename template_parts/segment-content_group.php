<?php
//Begin Content Group Segment
if(get_sub_field('segment_type') == 'Content Group Only' || get_sub_field('segment_type') == 'Text and Content Group'):
?>

<div class="segment-content_group">
  
  <?php
  //Content Group Fields
  $grouped_content = get_sub_field('grouped_content');
  $site_content = get_sub_field('site_content'); 
  $users = get_sub_field('users');
  
  //Start Posts Group
  if( $grouped_content == 'Site Content' && $site_content ):
  ?>    
  
  <div class="content_group-posts">
    
    <?php
    //Start Posts Repeater
    foreach( $site_content as $post): setup_postdata($post);
    ?>

    <div class="posts-listed_post">
      
      <a class="listed_post-thumbnail" href="<?php the_permalink(); ?>">
      
      <?php
      //The Image
      if(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'))
        echo '<img class="thumbnail-image" src="'.get_the_post_thumbnail_url(get_the_ID(), 'thumbnail').'">';        
      ?>
      
      </a>
        
      <?php
      //Event Dates
      if(get_field('event_days'))
        echo '<div class="listed_post-event_days">'.get_field('event_days').'</div>'; 
      //Title
      if(get_the_title())
        echo '<a class="listed_post-title" href="'.get_permalink().'">'.get_the_title().'</a>'; 
      //Excerpt
      if(has_excerpt() || get_field('event_description'))
        echo '<div class="listed_post-excerpt">'.get_the_excerpt().get_field('event_description').'</div>'; 
      ?>

    </div>

    <?php 
    //End Posts Repeater
    endforeach; wp_reset_postdata();
    ?>
      
  </div>
  
  <?php
  //End Posts Group
  endif;
  
  //Start Users Group
  if( $grouped_content == 'Users' && $users ):
  ?>    
  
  <div class="content_group-users">
    
    <?php
    //Start Posts Repeater
    foreach( $users as $user): 
    
      //Link Listed User to website if user has a website
      if(!empty($user['user_url'])){
        echo '<a class="users-listed_user" href="'.$user['user_url'].'" target="_blank">';
      }else{
        echo '<div class="users-listed_user">';
      }
      
      //The Avatar
      echo get_avatar( $user['ID'], 408, null, null, array('class' => array('listed_user-avatar') ) );
              
      //Start User Info
      if(!empty($user['user_firstname']) || !empty($user['user_lastname']) || get_field('organization','user_'.$user['ID'])):
      ?>
      
      <div class="listed_user-info">
        
        <?php
        //Full Name  
        if(!empty($user['user_firstname']) || !empty($user['user_lastname']))
         echo '<div class="info-full_name">'.$user['user_firstname'].' '.$user['user_lastname'].'</div>';
         
        //Organization
        if(get_field('organization','user_'.$user['ID']))
         echo '<div class="info-organization">'.get_field('organization','user_'.$user['ID']).'</div>';
        ?>
        
      </div>
      
      <?php
      //End User Info
      endif;
        
      //Close avatar link or div
      if(!empty($user['user_url'])){
        echo '</a>';
      }else{
        echo '</div>';
      }
   
    //End Posts Repeater
    endforeach; 
    ?>
            
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