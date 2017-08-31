<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php wp_head();?>    
    
  </head>
  
  <body <?php body_class(); ?>>
    <div class="header">  
      
      <div class="header-content">
        
        <?php 
        //Set Up Image Variables
        $logo = get_theme_mod( 'theme_logo' );
        $img_src = wp_get_attachment_image_url( $logo, 'small' );
        $img_srcset =  wp_get_attachment_image_srcset( $logo );
        $img_sizes = '322px';  
          
        //Logo from Customizer 
        if(get_theme_mod( 'theme_logo' ) ) 
          echo '<a class="content-logo" href="'.get_home_url().'"><img class="logo-image" src="'.esc_url($img_src).'" srcset="'.esc_attr($img_srcset).'" sizes="'.$img_sizes.'" alt="logo"></a>';
        
        //Header Navigation
        wp_nav_menu('menu_id=header_navigation&container=&menu_class=content-menu&theme_location=header_navigation');
        ?>

        <div class="content-feature" id="header_search">

          <?php get_template_part('template_parts/feature', 'search');?>
          
        </div>
        <a class="content-toggle" id="header_menu_toggle"> Menu</a>


      </div>
    </div>