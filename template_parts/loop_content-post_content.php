<div class="loop_content-post_content">
  
  <?php
  //Conditionally Show Page Title
  the_title('<div class="post_content-page_title">', '</div>');
    
  //Conditionally Show Content Field
  if(get_the_content() != '')
    echo '<div class="post_content-the_content">'.get_the_content().'</div>';
  ?>
  
</div>