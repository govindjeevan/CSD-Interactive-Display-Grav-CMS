<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/plugins/lazysizes/blueprints.yaml',
    'modified' => 1571407457,
    'data' => [
        'name' => 'Lazysizes',
        'version' => '1.0.0',
        'description' => 'Adds lazyloading to page images',
        'icon' => 'image',
        'author' => [
            'name' => 'Jan Stümmel',
            'email' => 'info@janstuemmel.de'
        ],
        'homepage' => 'https://github.com/websitemacherei/grav-plugin-lazysizes',
        'keywords' => 'lazy, lazyloading, lazysizes',
        'bugs' => 'https://github.com/websitemacherei/grav-plugin-lazysizes/issues',
        'docs' => 'https://github.com/websitemacherei/grav-plugin-lazysizes/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'include_js' => [
                    'type' => 'toggle',
                    'label' => 'Include javascript in assets',
                    'highlight' => 0,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'meta_description_description' => [
                    'type' => 'display',
                    'label' => NULL,
                    'markdown' => true,
                    'content' => 'PLUGIN_LAZYSIZES.INCLUDE_JS_HELP'
                ],
                'widths' => [
                    'label' => 'PLUGIN_LAZYSIZES.IMAGE_WIDTHS',
                    'type' => 'list',
                    'fields' => [
                        '.width' => [
                            'type' => 'text',
                            'label' => 'Image width',
                            'validate' => [
                                'type' => 'number',
                                'min' => 1,
                                'required' => true
                            ]
                        ]
                    ]
                ],
                'section_fallback' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_LAZYSIZES.FALLBACK',
                    'underline' => true
                ],
                'fallback' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_LAZYSIZES.FALLBACK',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'fallback_settings' => [
                    'label' => 'PLUGIN_LAZYSIZES.FALLBACK_SEETINGS',
                    'type' => 'list',
                    'fields' => [
                        '.key' => [
                            'type' => 'select',
                            'label' => 'PLUGIN_LAZYSIZES.FILTER',
                            'classes' => 'fancy',
                            'data-options@' => 'Grav\\Plugin\\LazysizesPlugin::getImageMagicActions'
                        ],
                        '.value' => [
                            'type' => 'text',
                            'label' => 'PLUGIN_LAZYSIZES.VALUE'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
