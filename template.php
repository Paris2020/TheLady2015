<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Amazee theme.
 */

// Get a list of all the regions for this theme
   //foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

    // Get the content for each region and add it to the $region variable
     //if ($blocks = block_get_blocks_by_region($region_key)) {
       //$regions['region'][$region_key] = $blocks;
     //}
     //else {
       //$regions['region'][$region_key] = array();
     //}
   //}


//Option 1
// function thelady2015_preprocess_page(&$vars) {  
//    if (request_uri() == '/about') {
//      drupal_add_js(drupal_get_path('theme', 'thelady2015') . "/js/custom.js");
//    }
//  }


//Option 2
// function custom_js_alter(&$js) {
//    if (request_uri() == '/about') {
//      $js_path = drupal_get_path('theme', 'custom') . "/page-download.js";
//      if (isset($js[$js_path])) {
//        unset($js[$js_path]);
//      }
//    }
//  }

//Option 3
function thelady2015_preprocess_page(&$vars) {
  if(drupal_get_path_alias() == 'thelady/about') {
    drupal_add_js(base_path().path_to_theme()."/js/custom.js"); 
  }
}