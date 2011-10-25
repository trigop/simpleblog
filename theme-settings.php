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
  // unset the CSS options as changing them will break the design
  //$form['omega_general']['optional_css']['#access'] = FALSE;
  
  // change the menu form to only allow either default or none menu placements
 /* $menu_type = omega_theme_get_setting('omega_acction_title');
  $form['omega_general']['structure']['omega_acction_title']['test'] = array(
    '#type' => 'radios',
    '#description' => t('Select the type of menus to generate.'),
    '#title' => t('Menu Type'),
    '#default_value' => $menu_type,
    '#options' => array(
      'drupal' => t('bla bla bla'),
      'none' => t('blob lbolboa'),
    ),
  );*/


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
  

}
