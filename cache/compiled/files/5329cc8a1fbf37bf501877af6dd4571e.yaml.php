<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/plugins/icalendar/blueprints.yaml',
    'modified' => 1566156707,
    'data' => [
        'name' => 'Icalendar',
        'version' => '0.2.3',
        'description' => 'Reads ICS Files and shows Events from it',
        'icon' => 'calendar',
        'author' => [
            'name' => 'Werner Joss',
            'email' => 'werner@hoernerfranzracing.de'
        ],
        'homepage' => 'https://github.com/wernerjoss/grav-plugin-icalendar',
        'keywords' => 'grav, plugin, ICS, Icalendar',
        'bugs' => 'https://github.com/wernerjoss/grav-plugin-icalendar/issues',
        'docs' => 'https://github.com/wernerjoss/grav-plugin-icalendar/blob/master/README.md',
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
                    'label' => 'Number of Events to show',
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
                ],
                'dateformat' => [
                    'type' => 'text',
                    'label' => 'Date Format',
                    'default' => 'd.m.Y'
                ]
            ]
        ]
    ]
];
