<div class="loop_content-single_listing_body">
  <div class="single_listing_body-main">
  
    <?php 
    //Event Description
    if(get_field('event_description'))
      echo '<div class="body-event_description">'.get_field('event_description').'</div>';

    //Event Description
    if(get_field('event_date_info'))
      echo '<div class="body-event_date_info">'.get_field('event_date_info').'</div>';

    //Admission Fee
    if(get_field('admission_fee'))
      echo '<div class="body-admission_fee">'.get_field('admission_fee').'</div>';
    ?>      
    
  </div>    
  <div class="single_listing_body-sidebar">

    <?php 
    //Start Address
    if(get_field('event_address') || get_field('event_address2') || get_field('event_city') || get_field('event_state') || get_field('event_zip')):  
    ?>
    
    <div class="sidebar-address">

      <?php 
      //Address Line 1
      if(get_field('event_address'))
        echo '<div class="address-line_1">'.get_field('event_address').'</div>';
        
      //Address Line 2
      if(get_field('event_address2'))
        echo '<div class="address-line_2">'.get_field('event_address2').'</div>';

      //City / State / Zip        
      if(get_field('event_city') || get_field('event_state') || get_field('event_state') )
        echo '<div class="address-event_city_state_zip">'.get_field('event_city').', '.get_field('State').' '.get_field('Zip').' </div>';
      ?>
    
    </div>
    
    <?php
    //End Address
    endif;
    
    //Phone Number
    if(get_field('event_phone'))
      echo '<div class="sidebar-phone">'.get_field('event_phone').'</div>';
    ?>
          
  </div>
</div>
