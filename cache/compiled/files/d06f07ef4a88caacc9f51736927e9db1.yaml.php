<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/auto-date/blueprints.yaml',
    'modified' => 1555126264,
    'data' => [
        'name' => 'Auto Date',
        'version' => '1.0.2',
        'description' => 'Automatically adds date to frontmatter when creating a new page via Grav Admin plugin',
        'icon' => 'clock-o',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-plugin-auto-date',
        'keywords' => 'plugin, auto-date, date, frontmatter',
        'bugs' => 'https://github.com/getgrav/grav-plugin-auto-date/issues',
        'docs' => 'https://github.com/getgrav/grav-plugin-auto-date/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'admin',
                'version' => '>=1.2.3'
            ]
        ],
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
