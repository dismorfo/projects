<?php

/**
 * Implements hook_preprocess_html().
 */
// function projects_preprocess_html() {}

/**
 * Preprocessor for theme('page').
 */
function projects_preprocess_page(&$vars) {

  global $user;
  
  if (!$user->uid && !(arg(0) == 'user' && !is_numeric(arg(1)))) {
    $vars['user_login_block'] = drupal_get_form('user_login_block');
  }
  
}