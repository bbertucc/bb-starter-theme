<div class="loop_content-error_message">
  
  <?php
  //Set Error Message Content
  if( is_post_type_archive('events') ){
    $error_title = 'No events are scheduled.';
    $error_body = '<p>Change your filter settings, or check back for updates.</p>';
  }else{
    $error_title = 'Uh oh!';
    $error_body = '<p>No content exists.</p><p>Check the URL or search term then try again.</p>';
  }
  ?>
  
  <div class="error_message-title"><?php echo $error_title; ?></div>
  <div class="error_message-body"><?php echo $error_body; ?></div>
</div>
