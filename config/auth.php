<?php

return [
    'defaults' => [
        'guard' => 'clients',
        'passwords' => 'clients',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'clients' => [
            'driver' => 'session',
            'provider' => 'clients',
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],
        'clients' => [
            'driver' => 'eloquent',
            'model' => App\Client::class,
        ],

    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
        'clients' => [
            'provider' => 'clients',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
