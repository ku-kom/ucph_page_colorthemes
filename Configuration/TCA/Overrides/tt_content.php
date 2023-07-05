<?php

/*
 * This file is part of the package ucph_page_color_themes.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * University of Copenhagen.
 */
declare(strict_types=1);

defined('TYPO3') or die();

call_user_func(function ($extKey ='ucph_page_color_themes') {

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        [
            'tx_ucph_ce_background_color' => [
                'label' => 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:ucph_page_color_select',
                'config' => [
                    'type' => 'select',
                    'renderType' => 'selectSingle',
                    'items' => [
                        [
                            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:color_none',
                            '',
                        ],
                        [
                            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:color_1',
                            'color_1',
                        ],
                        [
                            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:color_2',
                            'color_2',
                        ],
                        [
                            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:color_3',
                            'color_3',
                        ],
                        [
                            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:color_4',
                            'color_4',
                        ],
                        [
                            'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_be.xlf:color_5',
                            'color_5',
                        ],
                    ],
                ],
                'default' => '',
            ],
         ]
    );

    // Add in tab "Appearence"
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'tx_ucph_ce_background_color',
        '',
        'after:tx_full_site_width'
    );
});
