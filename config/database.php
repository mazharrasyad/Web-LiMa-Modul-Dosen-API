<?php
return [
    'default' => 'pgsql',
    'migrations' => 'migrations',
    'connections' => [
        'mysql' => [
            'driver' => 'mysql',
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL', 'postgres://ntpbabkm:GLtV8QAyE72lon45zN30hAofgm4Vhf7X@rosie.db.elephantsql.com:5432/ntpbabkm'),
            'host' => env('DB_HOST', 'rosie.db.elephantsql.com'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'ntpbabkm'),
            'username' => env('DB_USERNAME', 'ntpbabkm'),
            'password' => env('DB_PASSWORD', 'GLtV8QAyE72lon45zN30hAofgm4Vhf7X'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],
    ]
];
