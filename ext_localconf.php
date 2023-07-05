<?php

defined('TYPO3') or die('Access denied.');

use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

$versionInformation = GeneralUtility::makeInstance(Typo3Version::class);
// Only include page.tsconfig if TYPO3 version is below 12 so that it is not imported twice.
if ($versionInformation->getMajorVersion() < 12) {
    ExtensionManagementUtility::addPageTSConfig('
      @import "EXT:ucph_page_color_themes/Configuration/page.tsconfig"
   ');
}

// Level sliding: Add custom database field to rootline - keep the '&'
$rootlinefields = &$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'];
if ($rootlinefields != '') {
    $rootlinefields .= ' , ';
}
// Comma seperated custom fields:
$rootlinefields .= 'tx_ucph_page_colorthemes';