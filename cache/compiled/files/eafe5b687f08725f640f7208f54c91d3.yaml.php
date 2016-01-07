<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/gravintranet/public/user/config/plugins/private.yaml',
    'modified' => 1452207487,
    'data' => [
        'enabled' => true,
        'routes' => [
            'login' => '/enter',
            'logout' => '/exit'
        ],
        'session_ss' => 'fGVjnEAzMH3YDwXazVbIO27YTeydGw5eY6hA7w16i5DLhKNKHea8A3S5c80J6ZSM',
        'private_site' => true,
        'private_tag' => 'hidden',
        'enable_username' => false,
        'users' => [
            'no_user' => '48c82173d3279315488e999503ac5ca4f69799e1'
        ],
        'texts' => [
            'h1' => 'Private Area'
        ],
        'fields' => [
            'username' => [
                'label' => 'Username',
                'placeholder' => 'Enter your username'
            ],
            'password' => [
                'label' => 'Password',
                'placeholder' => 'Enter your password'
            ],
            'antispam' => [
                'label' => 'Antispam',
                'placeholder' => 'Please leave this field empty for Antispam'
            ],
            'login' => [
                'label' => 'Login'
            ]
        ],
        'messages' => [
            'success' => 'You are logged in',
            'error' => 'Oops! There was a problem with your submission. Please try again or <a href=\'mailto:josh@tegile.com\'>report an issue </a>',
            'fail' => 'Oops! Something went wrong.. Try Again !'
        ]
    ]
];
