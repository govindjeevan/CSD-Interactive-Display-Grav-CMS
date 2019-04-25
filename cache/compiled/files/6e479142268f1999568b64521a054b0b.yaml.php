<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/themes/editorial/blueprints/default.yaml',
    'modified' => 1555126275,
    'data' => [
        'title' => 'Generic Page',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'content' => [
                            'type' => 'tab',
                            'fields' => [
                                'header.primaryImage' => [
                                    '@ordering' => 2,
                                    'type' => 'file',
                                    'label' => 'Primary Image',
                                    'multiple' => false,
                                    'destination' => '@self',
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
