<?php
//====================================================
// All the theme functions are kept in the "includes/"
//====================================================

//Default Width, Title Tag, and Other Setup Functions
include_once('includes/theme_setup.php' );

//Enqueued Scripts and Styles
include_once('includes/enqueue.php' );

//Custom Menues
include_once('includes/custom_menus.php' );

//Update Customizer
include_once('includes/customizer.php' );

//Required Plugins
include_once('includes/require_plugins.php' );

//Admin Notices
include_once('includes/admin_notices.php' );

//ACF Settings
include_once('includes/acf_settings.php' );

//WYSIWG Settings
include_once('includes/tinymce.php' );

//Custom Post Types
include_once('includes/custom_post_types.php' );

//Custom Taxonomies
include_once('includes/custom_taxonomies.php' );

//Filterable list that's loaded through Ajax
include_once('includes/ajax_filtered_list.php' );
?>