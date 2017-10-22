<?php
//Grid Segment
if(get_sub_field('segment_type') == 'Contact Info'):

  //Set Unique ID
  $segment_id = uniqid();
?>

<div class="segment-contact_info" id="<?php echo $segment_id;?>">
  
  <?php
  //Contact Info Fields
  $title = get_sub_field('title');
  $email = get_sub_field('email'); 
  $phone = get_sub_field('phone'); 
  $location = get_sub_field('location'); 
  
  //Start Map
  if($location):
  ?>

  <div class="contact_info-map" id="<?php echo $segment_id; ?>-contactMap">
  </div>

  <?php
  //End Map
  endif;
      
  //Start Contact Info Text
  if($title || $email || $phone || $location):
  ?>    
  
  <div class="contact_info-text_and_form">
    
    <?php
    //Title
    if($title)
      echo '<div class="text_and_form-title">'.$title.'</div>';
    ?>
    
    <form class="text_and_form-form">
      <div class="form-input_group">
        <label class="input_group-label" for="your_name">Your Name</label>
        <input class="input_group-input" type="text" placeholder="Full Name" id="your_name">
      </div>
      <div class="form-input_group">
        <label class="input_group-label" for="email">Email Address</label>
        <input class="form-email" type="email" placeholder="email@address.com" id="email">
      </div>      
      <textarea class="form-text_area" placeholder="Message..."></textarea>
      <input class="form-submit" type="button" value="Submit">
    </form> 
    
    <div class="text_and_form-contact_info">
      <div class="contact_info-address">
        
        <?php 
        //Parse Address
        $address = $location['address'];
        list($street, $city, $statezip, $country) = explode(', ', $address);
        list($state, $zip) = explode(' ', $statezip);
        
        //List Address Parts
        if($street)
          echo '<div class="address-street">'.$street.'</div>';
        if($city || $statezip){
          echo '<div class="address-city_state_zip">';
            if($city)
              echo $city;
            if($city && $statezip)
              echo ', ';
            if($statezip)
              echo $statezip;
          echo '</div>';
        }
        if($country)
          echo '<div class="address-country">'.$country.'</div>';
        ?>
        
      </div>
      
      <?php
      //Phone
      if($phone)
        echo '<div class="contact_info-phone">'.$phone.'</div>';
      ?>
      
      <div class="contact_info-email">
        <a class="email-link" href="mailto:<?php echo $email;?>"><?php echo $email;?></a>
      </div>    
    </div>
  </div>
  
  <?php
  //End Contact Info Text
  endif;  
  ?>
  
  <script>
    //Contact Info Controls
    jQuery('#<?php echo $segment_id;?>').themeContactControls(
      '<?php echo $segment_id; ?>-contactMap',
      '<?php echo $location['lat']; ?>',
      '<?php echo $location['lng']; ?>'
    );
  </script>
</div>

<?php
//Grid Segment
endif;
?>