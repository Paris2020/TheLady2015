<?php

// Plugin definition
$plugin = array(
  'title' => t('One row two columns'),
  'category' => t('Columns: 2'),
  'icon' => 'onerowtwocols.png',
  'theme' => 'onerowtwocols',
  'css' => 'onerowtwocols.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);