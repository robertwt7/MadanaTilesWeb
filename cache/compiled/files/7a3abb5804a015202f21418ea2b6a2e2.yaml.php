<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'D:/xampp/htdocs/grav/user/plugins/madanaEngine/blueprints.yaml',
    'modified' => 1467303494,
    'data' => [
        'name' => 'MadanaEngine',
        'version' => '0.0.2',
        'description' => 'Function of MadanaEngine',
        'icon' => 'diamond',
        'author' => [
            'name' => 'Benyamin and Gabz Melon'
        ],
        'keywords' => 'simulasi, MadanaEngine, dll',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'enabled' => [
                    'type' => 'hidden',
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
