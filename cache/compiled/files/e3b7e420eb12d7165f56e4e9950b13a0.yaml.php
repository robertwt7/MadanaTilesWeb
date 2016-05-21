<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/grav/user/config/plugins/login.yaml',
    'modified' => 1463462267,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'route_register' => '/register',
        'route_activate' => '/activate_user',
        'route_forgot' => '/forgot_password',
        'route_reset' => '/reset_password',
        'parent_acl' => false,
        'user_registration' => [
            'enabled' => true,
            'fields' => [
                0 => 'username',
                1 => 'password',
                2 => 'email',
                3 => 'fullname',
                4 => 'title',
                5 => 'access',
                6 => 'state'
            ],
            'additional_params' => [
                'access' => 'site.login'
            ],
            'options' => [
                'validate_password1_and_password2' => true,
                'set_user_disabled' => false,
                'login_after_registration' => true,
                'send_activation_email' => false,
                'send_notification_email' => false,
                'send_welcome_email' => false
            ],
            'redirect_after_registration' => '/admin=='
        ],
        'rememberme' => [
            'enabled' => true,
            'timeout' => 1800,
            'name' => 'grav-rememberme'
        ],
        'oauth' => [
            'enabled' => false,
            'user' => [
                'autocreate' => false,
                'access' => [
                    'site' => [
                        'login' => '1'
                    ]
                ]
            ],
            'providers' => [
                'Facebook' => [
                    'enabled' => false
                ],
                'Google' => [
                    'enabled' => false
                ],
                'GitHub' => [
                    'enabled' => false
                ],
                'Twitter' => [
                    'enabled' => false
                ]
            ]
        ]
    ]
];
