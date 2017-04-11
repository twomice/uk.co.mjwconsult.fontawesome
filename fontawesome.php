<?php

require_once 'fontawesome.civix.php';

/**
 * Implements hook_civicrm_config().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_config
 */
function fontawesome_civicrm_config(&$config) {
  _fontawesome_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_xmlMenu
 */
function fontawesome_civicrm_xmlMenu(&$files) {
  _fontawesome_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_install
 */
function fontawesome_civicrm_install() {
  _fontawesome_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_postInstall
 */
function fontawesome_civicrm_postInstall() {
  _fontawesome_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_uninstall
 */
function fontawesome_civicrm_uninstall() {
  _fontawesome_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_enable
 */
function fontawesome_civicrm_enable() {
  _fontawesome_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_disable
 */
function fontawesome_civicrm_disable() {
  _fontawesome_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_upgrade
 */
function fontawesome_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _fontawesome_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_managed
 */
function fontawesome_civicrm_managed(&$entities) {
  _fontawesome_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_caseTypes
 */
function fontawesome_civicrm_caseTypes(&$caseTypes) {
  _fontawesome_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_angularModules
 */
function fontawesome_civicrm_angularModules(&$angularModules) {
  _fontawesome_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link http://wiki.civicrm.org/confluence/display/CRMDOC/hook_civicrm_alterSettingsFolders
 */
function fontawesome_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _fontawesome_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_coreResourceList
 *
 * @param array $list
 * @param string $region
 */
function fontawesome_civicrm_coreResourceList(&$list, $region) {
  Civi::resources()
    ->addStyleFile('uk.co.mjwconsult.fontawesome', 'css/vendors/font-awesome/css/font-awesome.min.css', 0, $region);
  Civi::resources()
    ->addStyleFile('uk.co.mjwconsult.fontawesome', 'css/crm-i.css', -101, $region);
}
