<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/plugins/gffi/blueprints.yaml',
    'modified' => 1566154915,
    'data' => [
        'name' => 'Gallery',
        'version' => '0.0.1',
        'description' => 'test',
        'icon' => 'plug',
        'author' => [
            'name' => 'Sergey Stepanov',
            'email' => 'sergey.stepanov@lenta.ru'
        ],
        'homepage' => 'https://github.com/Stepanov-Sergey/GFFI',
        'demo' => 'http://webmaster.page4biz.ru/demo-gffi',
        'keywords' => 'grav, plugin, gallery, images, folder',
        'bugs' => 'https://github.com/Stepanov-Sergey/GFFI/issues',
        'docs' => 'https://github.com/Stepanov-Sergey/GFFI/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
