<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/grav/user/plugins/socialbutton/blueprints.yaml',
    'modified' => 1465691261,
    'data' => [
        'name' => 'SocialButton',
        'version' => '0.0.1',
        'description' => 'Social Button for Madana Web Tiles',
        'icon' => 'share-alt',
        'author' => [
            'name' => 'Benyamin',
            'email' => 'me@benyamin.xyz'
        ],
        'keywords' => 'social,socialbutton,button,socialprofile',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
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
                ],
                'facebook' => [
                    'type' => 'section',
                    'title' => 'Facebook',
                    'underline' => false
                ],
                'fenabled' => [
                    'type' => 'toggle',
                    'label' => 'Enable Facebook Button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enable',
                        0 => 'Disable'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'facebookloc' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Fanpage / Profile URL',
                    'placeholder' => 'URL of the page'
                ],
                'twitter' => [
                    'type' => 'section',
                    'title' => 'Twitter'
                ],
                'tenabled' => [
                    'type' => 'toggle',
                    'label' => 'Enable Twitter Button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enable',
                        0 => 'Disable'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'twitterloc' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Twitter url',
                    'placeholder' => 'URL of the page'
                ],
                'instagram' => [
                    'type' => 'section',
                    'title' => 'Instagram'
                ],
                'ienabled' => [
                    'type' => 'toggle',
                    'label' => 'Enable Instagram Button',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enable',
                        0 => 'Disable'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'instagramloc' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Instagram url',
                    'placeholder' => 'URL of the page'
                ]
            ]
        ]
    ]
];
