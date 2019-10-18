<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/config/plugins/events.yaml',
    'modified' => 1566154915,
    'data' => [
        'enabled' => false,
        'date_format' => [
            'translate' => true,
            'long' => 'Y-m-d h:ia',
            'medium' => 'm/d/Y',
            'short' => 'M j',
            'default' => 'F j, Y h:ia'
        ],
        'filter_combinator' => 'and',
        'taxonomy_type' => 'event',
        'event_template_types' => 'calendar, events, event',
        'display_months_out' => 6,
        'show_past_events' => false,
        'enable_single_event_filter' => true,
        'default_events_page' => 'events'
    ]
];
