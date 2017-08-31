  <div class="footer">
        
    <?php        
    //Set Up Image Variables
    $img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_inverted_logo' ), 'small' );
    $img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_inverted_logo' ) );
    $img_sizes = '322px';  
      
    //Logo from Customizer 
    if(get_theme_mod( 'theme_inverted_logo' ) ) 
      echo '<a class="footer-logo" href="'.get_home_url().'"><img class="logo-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a>';
    
    //Footer Navigaton 
    wp_nav_menu('menu_id=footer_navigation&container=&menu_class=footer-navigation&theme_location=footer_navigation');
    ?>
    
    <div class="footer-social_links">
    
      <?php
      //Facebook Link
      if(get_theme_mod( 'theme_facebook_url' ))
        echo '<a class="social_links-facebook"  href="'.get_theme_mod( 'theme_facebook_url' ).'"><span class="facebook-icon"></span></a>';

      //Twitter Link
      if(get_theme_mod( 'theme_twitter_url' ))
        echo '<a class="social_links-twitter"  href="'.get_theme_mod( 'theme_twitter_url' ).'"><span class="twitter-icon"></span></a>';
      
      //Instagram Link
      if(get_theme_mod( 'theme_instagram_url' ))
        echo '<a class="social_links-instagram"  href="'.get_theme_mod( 'theme_instagram_url' ).'"><span class="instagram-icon"></span></a>';

      //Pinterest Link
      if(get_theme_mod( 'theme_pinterest_url' ))
        echo '<a class="social_links-pinterest"  href="'.get_theme_mod( 'theme_pinterest_url' ).'"><span class="pinterest-icon"></span></a>';
      ?>
    
    </div>
    
    <?php
    //Footer Text
    if(get_theme_mod( 'theme_footer_text' ))
      echo '<div class="footer-text">'.get_theme_mod( 'theme_footer_text' ).'</div>';
    ?>

  </div>
</body>

<?php wp_footer();?>