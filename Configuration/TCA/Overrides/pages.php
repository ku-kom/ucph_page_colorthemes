<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function ($extKey='ucph_page_color_themes') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extKey,
        'Configuration/page.tsconfig',
        'UCPH TYPO3 website color themes'
    );

    // Add Checkbox to page settings
    $GLOBALS['TCA']['pages']['columns'] = array_replace_recursive(
        $GLOBALS['TCA']['pages']['columns'],
        [
            'tx_ucph_page_colorthemes' => [
                'displayCond' => 'FIELD:is_siteroot:REQ:true', // Site root only
                'exclude' => true,
                'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be.xlf:ucph_page_color_themes_title',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_label', '--div--'],
                        ['LLL:EXT:'.$extKey.'Resources/Private/Language/locallang_tca.xlf:color.theme_default', ''],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_1', 'theme_1'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_2', 'theme_2'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_3', 'theme_3'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_4', 'theme_4'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_5', 'theme_5']
                    ],
                ],
            ],
        ]
    );

    // Make fields visible in custom tab:
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be.xlf:ucph_page_color_themes_tab,tx_ucph_page_colorthemes',
        '',
        ''
    );
});
