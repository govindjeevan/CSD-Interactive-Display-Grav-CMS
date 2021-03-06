<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/plugins/events/blueprints.yaml',
    'modified' => 1571407257,
    'data' => [
        'name' => 'Events',
        'version' => '1.1.0',
        'description' => 'The **Events** plugin provides events for a Grav site using event frontmatter.',
        'icon' => 'calendar',
        'author' => [
            'name' => 'Michael',
            'email' => 'pikim@web.de',
            'url' => NULL
        ],
        'homepage' => 'https://github.com/pikim/grav-plugin-events',
        'demo' => NULL,
        'keywords' => 'events, calendar, ics, plugin',
        'bugs' => 'https://github.com/pikim/grav-plugin-events/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'datetools'
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'setup' => [
                            'type' => 'tab',
                            'title' => 'Processing',
                            'fields' => [
                                'events_section' => [
                                    'type' => 'section',
                                    'title' => 'Events',
                                    'underline' => true
                                ],
                                'events_subpage' => [
                                    'type' => 'text',
                                    'label' => 'Events subpage',
                                    'help' => 'Subpage under which the events listing is available.',
                                    'default' => '/events'
                                ],
                                'icalendar_section' => [
                                    'type' => 'section',
                                    'title' => 'iCalendars',
                                    'underline' => true
                                ],
                                'icalendar_folder' => [
                                    'type' => 'text',
                                    'label' => 'Virtual folder for iCalendar events',
                                    'help' => 'Folder where the events are being stored. Will be completely deleted and recreated when settings are saved.',
                                    'default' => '/ical'
                                ],
                                'icalendars' => [
                                    'type' => 'editor',
                                    'label' => 'iCalendar files',
                                    'help' => 'The files that will be parsed for event creation. Must only be one file per line.',
                                    'codemirror' => [
                                        'mode' => 'text/plain',
                                        'indentUnit' => 0,
                                        'lineNumbers' => true,
                                        'styleActiveLine' => true
                                    ]
                                ]
                            ]
                        ],
                        'formatting' => [
                            'type' => 'tab',
                            'title' => 'Date Formatting',
                            'fields' => [
                                'calendar' => [
                                    'type' => 'section',
                                    'title' => 'Calendar',
                                    'underline' => true
                                ],
                                'calendar.first_dow' => [
                                    'type' => 'radio',
                                    'label' => 'First day of the week',
                                    'default' => 0,
                                    'options' => [
                                        5 => 'Saturday',
                                        6 => 'Sunday',
                                        0 => 'Monday'
                                    ]
                                ],
                                'calendar.day_char' => [
                                    'type' => 'number',
                                    'label' => 'Day name length',
                                    'help' => 'Show only the first n characters of the day name (0 to show full name).',
                                    'default' => 0,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 20
                                    ]
                                ],
                                'calendar.month' => [
                                    'type' => 'text',
                                    'label' => 'Month Display',
                                    'default' => 'F'
                                ],
                                'calendar.year' => [
                                    'type' => 'text',
                                    'label' => 'Year Display',
                                    'default' => 'Y'
                                ],
                                'calendar.anchor_title' => [
                                    'type' => 'text',
                                    'label' => 'Anchor Title',
                                    'default' => 'l, F j, Y'
                                ],
                                'calendar.details.title' => [
                                    'type' => 'text',
                                    'label' => 'Details Day Title',
                                    'default' => 'l, F j'
                                ],
                                'calendar.details.time' => [
                                    'type' => 'text',
                                    'label' => 'Details Time of Day',
                                    'default' => 'g:ia'
                                ],
                                'events' => [
                                    'type' => 'section',
                                    'title' => 'Events',
                                    'underline' => true
                                ],
                                'events.enable_categories' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Event Categories',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'event_item' => [
                                    'type' => 'section',
                                    'title' => 'Event Item',
                                    'underline' => true
                                ],
                                'event_item.day' => [
                                    'type' => 'text',
                                    'label' => 'Date Box Day',
                                    'default' => 'd'
                                ],
                                'event_item.month' => [
                                    'type' => 'text',
                                    'label' => 'Date Box Month',
                                    'default' => 'M'
                                ],
                                'event_item.start_time' => [
                                    'type' => 'text',
                                    'label' => 'Date Box Start Time',
                                    'default' => 'g:ia'
                                ],
                                'event_item.end_time' => [
                                    'type' => 'text',
                                    'label' => 'Date Box End Time',
                                    'default' => 'g:ia'
                                ],
                                'event_sidebar' => [
                                    'type' => 'section',
                                    'title' => 'Event Sidebar',
                                    'underline' => true
                                ],
                                'event_sidebar.header' => [
                                    'type' => 'text',
                                    'label' => 'Header',
                                    'default' => 'l, F d'
                                ],
                                'event_sidebar.time' => [
                                    'type' => 'text',
                                    'label' => 'Time',
                                    'default' => 'g:ia'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
