<?php

function fly_preprocess_page(&$variables, $hook) {
  GLOBAL $base_url;
  
  // ** Front page **
  if ($variables['is_front']) {
    // Add front css
    drupal_add_css(path_to_theme() . '/css/front.less');
    // Use H1 for site name if front
    $variables['site_name'] = '<h1 class="site-name">' . l($variables['site_name'], $base_url) . '</h1>';
  }
  
  // ** Not front **
  else {
    // Don't use H1 for site name
    $variables['site_name'] = '<p class="site-name">' . l($variables['site_name'], $base_url) . '</p>';
  }
  
  // Adds home button to top
  $variables['home'] = l('Back to home', $base_url, array('attributes' => array('id' => 'top', 'class' => 'home-button')));
}

/**
 * theme_breadcrumb to append current page
 */
function fly_breadcrumb($breadcrumb){
   if (!empty($breadcrumb)) {
      $breadcrumb['breadcrumb'][] = '<span class="active">' . drupal_get_title() . '</span>';
      return '<div class="breadcrumb">'. implode(' » ', $breadcrumb['breadcrumb']) .'</div>';
  }
}