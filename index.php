<?php
   
//Header
get_template_part('template_parts/header');

//Standard Layouts
get_template_part('template_parts/layout', 'single_page');
get_template_part('template_parts/layout', 'single_post');
get_template_part('template_parts/layout', 'archive');
get_template_part('template_parts/layout', 'event_list');

//Custom Layouts
//get_template_part('template_parts/layout', 'layout_name')
  
//Footer
get_template_part('template_parts/footer');

?>