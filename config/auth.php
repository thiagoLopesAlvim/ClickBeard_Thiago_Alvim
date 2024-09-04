<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'clientes',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'clientes',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'clientes',
            'hash' => false,
        ],
    ],

    'providers' => [
        'clientes' => [
            'driver' => 'eloquent',
            'model' => App\Models\Cliente::class,
        ],
    ],

    'passwords' => [
        'clientes' => [
            'provider' => 'clientes',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
];
