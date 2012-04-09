<?php

function fly_preprocess_page(&$variables, $hook) {
  if ($variables['is_front']) {
    drupal_add_css(path_to_theme() . '/css/front.less');
  }
}