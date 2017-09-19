<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head();?>    
    
  </head>
  
  <body <?php body_class(); ?>>
    
    <?php
    //Header Embed Codes
    if(get_theme_mod( 'theme_header_code' ) ) 
      echo get_theme_mod( 'theme_header_code' );
    ?>
    
    <div class="header">  
      <div class="header-content">
        
        <?php           
        //Set Up Image Variables
        $img_src = wp_get_attachment_image_url( get_theme_mod( 'theme_logo' ), 'small' );
        $img_srcset =  wp_get_attachment_image_srcset( get_theme_mod( 'theme_logo' ) );
        $img_sizes = '322px';  
          
        //Logo from Customizer 
        if(get_theme_mod( 'theme_logo' ) ) 
          echo '<div class="content-logo"> <a class="logo-link" href="'.get_home_url().'"><img class="link-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a></div>';
        
        //Header Navigation
        wp_nav_menu('menu_id=header_navigation&container=&menu_class=content-menu&theme_location=header_navigation');
        ?>
        
        <div class="content-feature" id="header_search">

          <?php get_template_part('template_parts/feature', 'search');?>

        </div>        
        <a class="content-toggle" id="header_menu_toggle"> Menu</a>
      </div>
    </div>