<?php

require_once 'pro_sol_qr.civix.php';
require_once 'pro_sol_qr_generate_qr_code.php';

// phpcs:disable
use CRM_ProSolQr_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function pro_sol_qr_civicrm_config(&$config) {
  _pro_sol_qr_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function pro_sol_qr_civicrm_xmlMenu(&$files) {
  _pro_sol_qr_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function pro_sol_qr_civicrm_install() {
  _pro_sol_qr_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function pro_sol_qr_civicrm_postInstall() {
  _pro_sol_qr_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function pro_sol_qr_civicrm_uninstall() {
  _pro_sol_qr_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function pro_sol_qr_civicrm_enable() {
  _pro_sol_qr_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function pro_sol_qr_civicrm_disable() {
  _pro_sol_qr_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function pro_sol_qr_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _pro_sol_qr_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function pro_sol_qr_civicrm_managed(&$entities) {
  _pro_sol_qr_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function pro_sol_qr_civicrm_caseTypes(&$caseTypes) {
  _pro_sol_qr_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function pro_sol_qr_civicrm_angularModules(&$angularModules) {
  _pro_sol_qr_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function pro_sol_qr_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _pro_sol_qr_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function pro_sol_qr_civicrm_entityTypes(&$entityTypes) {
  _pro_sol_qr_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_themes().
 */
function pro_sol_qr_civicrm_themes(&$themes) {
  _pro_sol_qr_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function pro_sol_qr_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function pro_sol_qr_civicrm_navigationMenu(&$menu) {
//  _pro_sol_qr_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _pro_sol_qr_civix_navigationMenu($menu);
//}

function pro_sol_qr_civicrm_tabset($tabsetName, &$tabs, $context) {
  if ($tabsetName != 'civicrm/contact/view') {
    return;
  }

  $contactId = $context['contact_id'];
  $url = CRM_Utils_System::url('civicrm/contact/view/qr', "reset=1&cid=$contactId");
  $tabs[] = array(
    'id' => 'pro_sol_qr_tab',
    'url' => $url,
    'title' => ts('QR Code'),
    'weight' => 10000,
    'icon' => 'crm-i fa-qrcode'
  );
}

function pro_sol_qr_civicrm_tokens(&$tokens) {
  if (!isset($tokens['contact'])) {
    $tokens['contact'] = array();
  }

  $tokens['contact']['contact.qr_code'] = t('QR Code linking to the contact in CiviCRM');
  $tokens['contact']['contact.qr_code_url'] = t('QR Code linking to the contact in CiviCRM (“data:…” URL)');
}

function pro_sol_qr_civicrm_tokenValues(&$values, $cids, $job = null, $tokens = [], $context = null) {
  if (!(
    isset($tokens['contact'])
    && (
      array_key_exists('qr_code', $tokens['contact']) || in_array('qr_code', $tokens['contact'])
      || array_key_exists('qr_code_url', $tokens['contact']) || in_array('qr_code_url', $tokens['contact'])
    )
  )) {
    return;
  }

  foreach ($cids as $cid) {
    $url = pro_sol_qr_generate_qr_code($cid);
    $values[$cid]['contact.qr_code_url'] = $url;
    $values[$cid]['contact.qr_code'] = '<img src="'.$url.'" />';
  }
}
