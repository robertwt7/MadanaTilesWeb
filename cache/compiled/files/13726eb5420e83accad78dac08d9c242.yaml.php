<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/grav/user/config/plugins/email.yaml',
    'modified' => 1467047138,
    'data' => [
        'enabled' => true,
        'from' => 'blbenyamin9@gmail.com',
        'from_name' => 'Benyamin Limanto',
        'to' => 'blbenyamin9@gmail.com',
        'to_name' => 'Benyamin Limanto',
        'mailer' => [
            'engine' => 'smtp',
            'smtp' => [
                'server' => 'smtp.gmail.com',
                'port' => 465,
                'encryption' => 'ssl',
                'user' => 'blbenyamin9@gmail.com',
                'password' => '083834457072bbb'
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
