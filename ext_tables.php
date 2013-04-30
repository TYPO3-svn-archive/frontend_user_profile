<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'Frontend User Form'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Frontend User Profile and Regestration');

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

t3lib_extMgm::addLLrefForTCAdescr('tx_frontenduserprofile_domain_model_field', 'EXT:frontend_user_profile/Resources/Private/Language/locallang_csh_tx_frontenduserprofile_domain_model_field.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_frontenduserprofile_domain_model_field');
$TCA['tx_frontenduserprofile_domain_model_field'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:frontend_user_profile/Resources/Private/Language/locallang_db.xml:tx_frontenduserprofile_domain_model_field',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Field.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_frontenduserprofile_domain_model_field.gif'
	),
);

$pluginName='pi1';
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_'.$pluginName;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform.xml');

?>