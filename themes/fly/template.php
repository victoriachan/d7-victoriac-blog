<?php

function fly_preprocess_page(&$variables, $hook) {
  GLOBAL $base_url;
  if ($variables['is_front']) {
    drupal_add_css(path_to_theme() . '/css/front.less');
    $variables['site_name'] = '<h1 class="site-name">' . l($variables['site_name'], $base_url) . '</h1>';
  }
  else {
    $variables['site_name'] = '<p class="site-name">' . l($variables['site_name'], $base_url) . '</p>';
  }
}