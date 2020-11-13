<?php
return [
    'default' => 'pgsql',
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
            'url' => env('DATABASE_URL', 'postgres://qrhljtexgggsxk:53f6b2bd56c79ef76a15047e7040a318991410f52927a61c3aea339f2c20454d@ec2-34-234-185-150.compute-1.amazonaws.com:5432/danjhgfts68f8r'),
            // 'host' => env('DB_HOST', 'ec2-34-234-185-150.compute-1.amazonaws.com'),
            // 'port' => env('DB_PORT', '5432'),
            // 'database' => env('DB_DATABASE', 'danjhgfts68f8r'),
            // 'username' => env('DB_USERNAME', 'qrhljtexgggsxk'),
            // 'password' => env('DB_PASSWORD', '53f6b2bd56c79ef76a15047e7040a318991410f52927a61c3aea339f2c20454d'),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
            // Hosting
            // DB_CONNECTION=pgsql
            // DB_HOST=ec2-34-234-185-150.compute-1.amazonaws.com
            // DB_PORT=5432
            // DB_DATABASE=danjhgfts68f8r
            // DB_USERNAME=qrhljtexgggsxk
            // DB_PASSWORD=53f6b2bd56c79ef76a15047e7040a318991410f52927a61c3aea339f2c20454d
        ],
    ]
];
