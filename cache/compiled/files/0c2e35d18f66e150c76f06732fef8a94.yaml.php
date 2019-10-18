<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/govind/grav-cms/user/config/plugins/email.yaml',
    'modified' => 1566154915,
    'data' => [
        'enabled' => true,
        'from' => '10bsaurabh@gmail.com',
        'to' => 'sdewangan021@gmail.com',
        'queue' => [
            'enabled' => false,
            'flush_frequency' => '* * * * *',
            'flush_msg_limit' => 10,
            'flush_time_limit' => 100
        ],
        'mailer' => [
            'engine' => 'none',
            'smtp' => [
                'server' => 'google.com',
                'port' => 25,
                'encryption' => 'none',
                'user' => 'csdnitk',
                'password' => 'csdNITK1'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/plain',
        'debug' => false
    ]
];
