<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Frontenduser Section'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Frontend User Profile & Registration');

t3lib_div::loadTCA('fe_users');
if (!isset($TCA['fe_users']['ctrl']['type'])) {
	// no type field defined, so we define it here. This will only happen the first time the extension is installed!!
	$TCA['fe_users']['ctrl']['type'] = 'tx_extbase_type';
	$tempColumns = array();
	$tempColumns[$TCA['fe_users']['ctrl']['type']] = array(
		'exclude' => 1,
		'label'   => 'LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_frontenduser.tx_extbase_type',
		'config' => array(
			'type' => 'select',
			'items' => array(
				array('LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_frontenduser.tx_extbase_type.0','0'),
			),
			'size' => 1,
			'maxitems' => 1,
			'default' => 'Tx_FrontendUserProfile_Frontenduser'
		)
	);
	t3lib_extMgm::addTCAcolumns('fe_users', $tempColumns, 1);
}

$TCA['fe_users']['types']['Tx_FrontendUserProfile_Frontenduser']['showitem'] = $TCA['fe_users']['types']['Tx_Extbase_Domain_Model_FrontendUser']['showitem'];
$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_frontenduser','Tx_FrontendUserProfile_Frontenduser');
t3lib_extMgm::addToAllTCAtypes('fe_users', $TCA['fe_users']['ctrl']['type'],'','after:hidden');

$tmp_frontend_user_profile_columns = array(

	'forms' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_frontenduser.forms',
		'config' => array(
			'type' => 'select',
			'foreign_table' => '',
			'MM' => 'tx_frontenduserprofile_frontenduser__mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => '',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('fe_users',$tmp_frontend_user_profile_columns);

$TCA['fe_users']['columns'][$TCA['fe_users']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:fe_users.tx_extbase_type.Tx_FrontendUserProfile_Frontenduser','Tx_FrontendUserProfile_Frontenduser');

$TCA['fe_users']['types']['Tx_FrontendUserProfile_Frontenduser']['showitem'] = $TCA['fe_users']['types']['Tx_Extbase_Domain_Model_FrontendUser']['showitem'];
$TCA['fe_users']['types']['Tx_FrontendUserProfile_Frontenduser']['showitem'] .= ',--div--;LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_frontenduser,';
$TCA['fe_users']['types']['Tx_FrontendUserProfile_Frontenduser']['showitem'] .= 'forms';

t3lib_extMgm::addLLrefForTCAdescr('tx_frontenduserprofile_domain_model_feuserfields', 'EXT:frontend_user_profile/Resources/Private/Language/locallang_csh_tx_frontenduserprofile_domain_model_feuserfields.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_frontenduserprofile_domain_model_feuserfields');
$TCA['tx_frontenduserprofile_domain_model_feuserfields'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_feuserfields',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,type,required,min,max,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/FeUserFields.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_frontenduserprofile_domain_model_feuserfields.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_frontenduserprofile_domain_model_form', 'EXT:frontend_user_profile/Resources/Private/Language/locallang_csh_tx_frontenduserprofile_domain_model_form.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_frontenduserprofile_domain_model_form');
$TCA['tx_frontenduserprofile_domain_model_form'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_form',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'title,fields,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Form.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_frontenduserprofile_domain_model_form.gif'
	),
);

$tmp_frontend_user_profile_columns = array(

	'forms' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_page.forms',
		'config' => array(
			'type' => 'select',
			'foreign_table' => 'tx_frontenduserprofile_domain_model_form',
			'MM' => 'tx_frontenduserprofile_page_form_mm',
			'size' => 10,
			'autoSizeMax' => 30,
			'maxitems' => 9999,
			'multiple' => 0,
			'wizards' => array(
				'_PADDING' => 1,
				'_VERTICAL' => 1,
				'edit' => array(
					'type' => 'popup',
					'title' => 'Edit',
					'script' => 'wizard_edit.php',
					'icon' => 'edit2.gif',
					'popup_onlyOpenIfSelected' => 1,
					'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
					),
				'add' => Array(
					'type' => 'script',
					'title' => 'Create new',
					'icon' => 'add.gif',
					'params' => array(
						'table' => 'tx_frontenduserprofile_domain_model_form',
						'pid' => '###CURRENT_PID###',
						'setValue' => 'prepend'
						),
					'script' => 'wizard_add.php',
				),
			),
		),
	),
);


t3lib_extMgm::addTCAcolumns('tt_content',$tmp_frontend_user_profile_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_FrontendUserProfile_Page','Tx_FrontendUserProfile_Page');

$TCA['tt_content']['types']['Tx_FrontendUserProfile_Page']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_FrontendUserProfile_Page']['showitem'] .= ',--div--;LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_form,';
$TCA['tt_content']['types']['Tx_FrontendUserProfile_Page']['showitem'] .= 'forms';

debug("test");
// Include flex forms
$pluginName='pi1'; // siehe Tx_Extbase_Utility_Extension::registerPlugin
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_'.$pluginName;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
$TCA['tt_content']['columns']['pi_flexform']['config']['ds'][','.$pluginSignature] = 'FILE:EXT:' . $_EXTKEY . '/Resources/Private/Templates/flexform.xml';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Resources/Private/Templates/flexform.xml');


?>