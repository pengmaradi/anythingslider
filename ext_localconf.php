<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'Xp.' . $_EXTKEY,
	'Anythingslider',
	array(
		'Anythingslider' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Anythingslider' => '',
		
	)
);
