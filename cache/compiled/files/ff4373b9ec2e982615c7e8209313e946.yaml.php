<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/themes/portfolio/blueprints.yaml',
    'modified' => 1566154915,
    'data' => [
        'name' => 'Portfolio',
        'version' => '0.3.1',
        'description' => 'Simple and minimalistic responsive theme for portfolios.',
        'icon' => 'rebel',
        'author' => [
            'name' => 'Joey CK',
            'email' => 'joui1994@gmail.com'
        ],
        'homepage' => 'https://github.com/s6joui/grav-theme-portfolio',
        'demo' => 'http://www.joeyck.tech',
        'keywords' => 'grav, theme, etc',
        'bugs' => 'https://github.com/s6joui/grav-theme-portfolio/issues',
        'readme' => 'https://github.com/s6joui/grav-theme-portfolio/blob/develop/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in Menu',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
