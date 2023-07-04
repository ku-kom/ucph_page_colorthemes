<?php

/**
 * Extension Manager/Repository config file for ext "ucph_page_color_themes".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'UCPH TYPO3 color themes',
    'description' => 'UCPH TYPO3 website color themes',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfCopenhagen\\UcphPageColorThemes\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'University of Copenhagen',
    'version' => '1.0.0',
];
