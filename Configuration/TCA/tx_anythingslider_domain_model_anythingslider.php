<?php

declare(strict_types=1);

defined('TYPO3') || die();

return [
    'ctrl' => [
        'title' => 'slider',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'sortby' => 'sorting',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title, description, starttime, endtime, type',
        'iconfile' => 'EXT:anythingslider/Resources/Public/Icons/pi1.svg',
    ],

    'types' => [
        '1' => [
            'showitem' => '
            title, type, description, source, video, image,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language, sys_language_uid, l10n_parent, l10n_diffsource,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden, starttime, endtime
            ', ],
    ],
    'columns' => [

        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'language',
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        'value' => 0,
                    ],
                ],
                'foreign_table' => 'tx_anythingslider_domain_model_anythingslider',
                'foreign_table_where' => 'AND tx_anythingslider_domain_model_anythingslider.pid=###CURRENT_PID### AND tx_anythingslider_domain_model_anythingslider.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],

        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.yes',
                        'value' => 1,
                    ],
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038),
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true,
                ],
            ],
        ],

        'title' => [
            'exclude' => true,
            'label' => 'LLL:EXT:anythingslider/Resources/Private/Language/locallang_db.xlf:tx_anythingslider_domain_model_anythingslider.title',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:anythingslider/Resources/Private/Language/locallang_db.xlf:tx_anythingslider_domain_model_anythingslider.type',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['label' => 'please select', 'value' => '--div--'],
                    ['label' => 'text with video', 'value' => 1],
                    ['label' => 'no video', 'value' => 2],
                    ['label' => 'only video', 'value' => 3],
                    ['label' => 'map', 'value' => 4],
                ],
                'size' => 1,

                'eval' => '',
            ],
        ],
        'description' => [
            'exclude' => true,
            'label' => 'LLL:EXT:anythingslider/Resources/Private/Language/locallang_db.xlf:tx_anythingslider_domain_model_anythingslider.description',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
                'fieldControl' => [
                    'fullScreenRichtext' => [
                        'disabled' => false,
                    ],
                ],
            ],
        ],
        'source' => [
            'exclude' => true,
            'label' => 'LLL:EXT:anythingslider/Resources/Private/Language/locallang_db.xlf:tx_anythingslider_domain_model_anythingslider.source',
            'config' => [
                'type' => 'text',
                'cols' => 40,
                'rows' => 15,
                'eval' => 'trim',
            ],
        ],
        'video' => [
            'exclude' => true,
            'label' => 'LLL:EXT:anythingslider/Resources/Private/Language/locallang_db.xlf:tx_anythingslider_domain_model_anythingslider.video',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-media-types',
            ],
        ],
        'image' => [
            'exclude' => true,
            'label' => 'LLL:EXT:anythingslider/Resources/Private/Language/locallang_db.xlf:tx_anythingslider_domain_model_anythingslider.image',
            'config' => [
                'type' => 'file',
                'maxitems' => 1,
                'allowed' => 'common-image-types',
            ],
        ],

    ],
];
