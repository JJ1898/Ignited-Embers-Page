<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/jordanmedrano/Stuff/Projects/Ignited-Embers-Page/user/config/groups.yaml',
    'modified' => 1570777185,
    'data' => [
        'Administrator' => [
            'groupname' => 'Administrator',
            'access' => [
                'site' => [
                    'login' => 'true'
                ],
                'admin' => [
                    'super' => 'true',
                    'login' => 'true'
                ],
                'admin-addon-user-manager' => [
                    
                ]
            ]
        ],
        'Editor' => [
            'groupname' => 'Editor',
            'access' => [
                'site' => [
                    'login' => 'true'
                ],
                'admin' => [
                    'super' => 'false',
                    'login' => 'true',
                    'configuration' => 'false',
                    'configuration_system' => 'false',
                    'configuration_site' => 'false',
                    'configuration_media' => 'true',
                    'configuration_info' => 'false',
                    'settings' => 'false',
                    'pages' => 'true',
                    'maintenance' => 'false',
                    'statistics' => 'true',
                    'plugins' => 'false',
                    'themes' => 'false',
                    'tools' => 'false',
                    'users' => 'false'
                ],
                'admin-addon-user-manager' => [
                    'users' => 'false',
                    'groups' => 'false',
                    'users_expert' => 'false'
                ]
            ]
        ]
    ]
];
