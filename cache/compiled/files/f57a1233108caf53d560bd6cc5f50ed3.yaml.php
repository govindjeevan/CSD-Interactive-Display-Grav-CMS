<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/xampp/htdocs/grav/user/plugins/icalendar/blueprints.yaml',
    'modified' => 1556180607,
    'data' => [
        'name' => 'Icalendar',
        'version' => '0.1.0',
        'description' => 'Reads ICS Files and shows Events from it',
        'icon' => 'plug',
        'author' => [
            'name' => 'Werner Joss',
            'email' => 'werner@hoernerfranzracing.de'
        ],
        'homepage' => 'https://github.com/werner-hoernerfranzracing-de/grav-plugin-icalendar',
        'keywords' => 'grav, plugin, ICS, Icalendar',
        'bugs' => 'https://github.com/werner-hoernerfranzracing-de/grav-plugin-icalendar/issues',
        'docs' => 'https://github.com/werner-hoernerfranzracing-de/grav-plugin-icalendar/blob/develop/README.md',
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
                'numevents' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ICALENDAR.NUMEVENTS',
                    'help' => 'PLUGIN_ICALENDAR.NUMEVENTS_HELP',
                    'validate' => [
                        'type' => 'number',
                        'min' => 1
                    ]
                ],
                'icsfile' => [
                    'type' => 'file',
                    'label' => 'ICAL Calendar File',
                    'multiple' => false,
                    'destination' => 'user/data/calendars',
                    'accept' => [
                        0 => '.ics'
                    ]
                ]
            ]
        ]
    ]
];
