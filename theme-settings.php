<?php

/**
 * @file
 * Theme settings for the Omega theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function simpleblog_form_system_theme_settings_alter(&$form, &$form_state) {
  // Include any changes to the theme settings here. 
  
  $form['alpha_settings']['simpleblog_configuration'] = array(
    '#type' => 'fieldset',
    '#weight' => -10,
    '#title' => t('Simpleblog Configuration'),
  );
  $text_head = omega_theme_get_setting('text_head') ? omega_theme_get_setting('text_head') : 'Simple Blog <a href="www.metadrop.net">Contact</>';
  
  $form['alpha_settings']['simpleblog_configuration']['text_head'] = array(
    '#type' => 'textfield',
    '#description' => t('Add text to head web.'),
    '#title' => t('Text Head'),
    '#default_value' => $text_head,
    );
  
  $hide_node_title = omega_theme_get_setting('hide_node_title', TRUE);    
  $form['alpha_settings']['simpleblog_configuration']['hide_node_title'] = array(
    '#type' => 'checkbox',
    '#title' => t('Hide the node title'),
    '#description' => t('Change H1 title page in node'),
    '#default_value' => $hide_node_title,
  );
  
  $hide_blog_link = omega_theme_get_setting('hide_blog_link', TRUE);    
  $form['alpha_settings']['simpleblog_configuration']['hide_blog_link'] = array(
    '#type' => 'checkbox',
    '#title' => t('Hide the block link in teaser'),
    '#description' => t('Hide link blog user in teaser views node'),
    '#default_value' => $hide_blog_link,
  );
  
  $separation_character = omega_theme_get_setting('separation_character') ? omega_theme_get_setting('separation_character') : ' >';    
  $form['alpha_settings']['simpleblog_configuration']['separation_character'] = array(
    '#type' => 'textfield',
    '#title' => t('Separation character in readmore node link'),
    '#description' => t('Separation character in readmore node link'),
    '#default_value' => $separation_character,
  );
}
