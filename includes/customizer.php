<?php

//Register Customizer Sections, Settings and Controls
function theme_customizer_register( $wp_customize ) {
  
  //Removed Unused Areas
  $wp_customize->remove_section( 'static_front_page' );

  //Add Customizer Section 
  $wp_customize->add_section( 'footer_content', array(
      'title' => __('Footer Content'),
      'description' => __('Add social links and other content.'),
      'priority' => 35,
    )
  );

  //Add Customizer Settings 
  $wp_customize->add_setting( 'theme_facebook_url' );
  $wp_customize->add_setting( 'theme_twitter_url' );
  $wp_customize->add_setting( 'theme_instagram_url' );
  $wp_customize->add_setting( 'theme_pinterest_url' );
  $wp_customize->add_setting( 'theme_footer_text' );
  $wp_customize->add_setting( 'theme_logo' );
  $wp_customize->add_setting( 'theme_inverted_logo' );
  
  //Add Customizer Controls   
  $wp_customize->add_control( 'theme_facebook_url',
    array(
      'label' => 'Facebook URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_twitter_url',
    array(
      'label' => 'Twitter URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_instagram_url',
    array(
      'label' => 'Instagram URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_pinterest_url',
    array(
      'label' => 'Pinterest URL',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 'theme_footer_text',
    array(
      'label' => 'Footer Credit',
      'section' => 'footer_content',
      'type' => 'text',
    )
  );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_logo',
      array(
        'label' => 'Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_logo',
      ) 
    ) 
  );
  $wp_customize->add_control( 
    new WP_Customize_Media_Control( $wp_customize, 'theme_inverted_logo',
      array(
        'label' => 'Inverted Logo',
        'section' => 'title_tagline',
        'settings' => 'theme_inverted_logo',
      ) 
    ) 
  );
}
add_action( 'customize_register', 'theme_customizer_register' ); 
?>