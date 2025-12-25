<?php

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

defined('TYPO3') || die();

$pluginSignature = ExtensionUtility::registerPlugin(
    'Anythingslider',
    'Pi1',
    'Anythingslider pi1',
    'slider-pi1',
    'plugins',
    'the anythingslider pi1 description'
);
