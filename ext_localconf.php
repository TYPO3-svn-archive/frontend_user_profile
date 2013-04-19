<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'Frontenduser' => 'list',
		'Form' => 'show, ',
		'Page' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Frontenduser' => '',
		'Form' => '',
		'Page' => '',
		
	)
);

?>