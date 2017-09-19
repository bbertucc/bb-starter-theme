<?php
//Begin 404 Layout
if( is_404() ):
?>

<div class="layout-404">
  <div class="404-loop_content">

    <?php 
    //Single Listing Header
    get_template_part('template_parts/loop_content', 'error_message');
    ?>
      
  </div>
</div>

<?php
//End 404 Layout
endif;
?>