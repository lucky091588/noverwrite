<?php

require_once 'noverwrite.civix.php';

function noverwrite_civicrm_buildForm ( $formName, &$form ){
  $names = array ("CRM_Profile_Form_Edit","CRM_Contact_Form_Contact","CRM_Event_Form_Registration_Register","CRM_Contribute_Form_Contribution_Main");
  if (in_array($formName,$names)) {
    CRM_Core_Resources::singleton()->addScript(file_get_contents(dirname( __FILE__ ) ."/js/noverwrite.js"));
  }
}

/**
 * Implementation of hook_civicrm_config
 */
function noverwrite_civicrm_config(&$config) {
  _noverwrite_civix_civicrm_config($config);
}

/**
 * Implementation of hook_civicrm_xmlMenu
 *
 * @param $files array(string)
 */
function noverwrite_civicrm_xmlMenu(&$files) {
  _noverwrite_civix_civicrm_xmlMenu($files);
}

/**
 * Implementation of hook_civicrm_install
 */
function noverwrite_civicrm_install() {
  return _noverwrite_civix_civicrm_install();
}

/**
 * Implementation of hook_civicrm_uninstall
 */
function noverwrite_civicrm_uninstall() {
  return _noverwrite_civix_civicrm_uninstall();
}

/**
 * Implementation of hook_civicrm_enable
 */
function noverwrite_civicrm_enable() {
  return _noverwrite_civix_civicrm_enable();
}

/**
 * Implementation of hook_civicrm_disable
 */
function noverwrite_civicrm_disable() {
  return _noverwrite_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_upgrade
 *
 * @param $op string, the type of operation being performed; 'check' or 'enqueue'
 * @param $queue CRM_Queue_Queue, (for 'enqueue') the modifiable list of pending up upgrade tasks
 *
 * @return mixed  based on op. for 'check', returns array(boolean) (TRUE if upgrades are pending)
 *                for 'enqueue', returns void
 */
function noverwrite_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _noverwrite_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implementation of hook_civicrm_managed
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 */
function noverwrite_civicrm_managed(&$entities) {
  return _noverwrite_civix_civicrm_managed($entities);
}