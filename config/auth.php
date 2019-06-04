<?php

$conf = [
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

// 管理画面の場合は、デフォルトの認証ガードをuserに変更する
$uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
if (strpos($uri, '/admin/') === 0 || $uri === '/admin') {
    $conf['defaults'] = [
        'guard' => 'web',
        'passwords' => 'users',
    ];
}
return $conf;