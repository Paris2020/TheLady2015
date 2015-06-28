<?php

/**
 * @file
 * Template overrides as well as (pre-)process and alter hooks for the
 * Amazee theme.
 */

 drupal_add_js(drupal_get_path('theme', 'thelady2015') .'/js/custom.js');

 function thelady2015_preprocess_node(&$variables) {

   // Get a list of all the regions for this theme
   foreach (system_region_list($GLOBALS['theme']) as $region_key => $region_name) {

    // Get the content for each region and add it to the $region variable
     if ($blocks = block_get_blocks_by_region($region_key)) {
       $regions['region'][$region_key] = $blocks;
     }
     else {
       $regions['region'][$region_key] = array();
     }
   }

   //Test for a particular node
   /*if(isset($variables['node'])){
   	 if($variables['node'] -> type == 'events'){
   	 	drupal_add_css(drupal_get_path('theme','thelady2015') . '/custom.js');
   	 }
   } */


   //Test for a path
   /*$matches = 'node/*'; //This could be node/34 for instance
   $path = druapl_get_path_alias($_GET['q']);
   $page_match = drupal_match_path($path, $matches);

   if($path != $_GET['q']){
   		$page_match = $page_match || drupal_match_path($_GET['q'], $matches);
   }
   if($page_match){
   		drupal_add_css(drupal_get_path('theme','thelady2015') . '/custom.css');
   } */


   //Test for a role
   /*$role = 'anonymous user';
   if(in_array($role, $variables['user']->roles)){
   	drupal_add_js(drupal_get_path('theme','thelady2015') . '/custom.js');
   } */


 }


