<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => '192.168.99.100',
            'port' => '3306',
            'database' => 'test',
            'username' => 'root',
            'password' => '88880123',
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
        ],

//        'default' => env('DB_CONNECTION', 'mysql'),
//
//        'connections' => [
//            'mysql' => [
//                'driver' => 'mysql',
//                'host' => env('DB_HOST', '192.168.99.100'),
//                'port' => env('DB_PORT', '3306'),
//                'database' => env('DB_DATABASE', 'test'),
//                'username' => env('DB_USERNAME', 'root'),
//                'password' => env('DB_PASSWORD', '88880123'),
//                'unix_socket' => env('DB_SOCKET', ''),
//                'charset' => 'utf8mb4',
//                'collation' => 'utf8mb4_unicode_ci',
//                'prefix' => '',
//                'strict' => true,
//                'engine' => null,
//            ],
//        ],
    ],
];
