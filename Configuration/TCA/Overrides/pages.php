<?php

defined('TYPO3') or die('Access denied.');

call_user_func(function ($extKey='ucph_page_color_themes') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extKey,
        'Configuration/page.tsconfig',
        'UCPH TYPO3 website color themes'
    );

    // Adding selectbox to page settings
    // Add more color themes as needed and make sute to include an icon as well.
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
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_default', '', 'EXT:'.$extKey.'/Resources/Public/Icons/Extension.svg'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_1', 'set-1', 'EXT:'.$extKey.'/Resources/Public/Icons/colorsets/colorset-01.svg'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_2', 'set-2', 'EXT:'.$extKey.'/Resources/Public/Icons/colorsets/colorset-02.svg'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_3', 'set-3', 'EXT:'.$extKey.'/Resources/Public/Icons/colorsets/colorset-03.svg'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_4', 'set-4', 'EXT:'.$extKey.'/Resources/Public/Icons/colorsets/colorset-04.svg'],
                        ['LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_be_color_themes.xlf:color.theme_5', 'set-5', 'EXT:'.$extKey.'/Resources/Public/Icons/colorsets/colorset-05.svg'],
                    ],
                    'fieldWizard' => [
                        'selectIcons' => [
                            'disabled' => false,
                        ],
                    ],
                ],
                'default' => '',
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
