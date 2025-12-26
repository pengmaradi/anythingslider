<?php

declare(strict_types=1);

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Xp\Anythingslider\Controller\AnythingsliderController;
defined('TYPO3') || die();

ExtensionUtility::configurePlugin(
	'Anythingslider',
	'Pi1',
	[
		AnythingsliderController::class => 'list',
	],
	[]
);
