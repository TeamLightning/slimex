<?php

require __DIR__.'/../vendor/autoload.php';

$app = new \Slim\App([
    'settings'  => [
        'displayErrorDetails' => DEVELOPMENT,

        /**
         * This is configured as per Medoo's documentation. Now, this
         * uses SQLite and is stored under the app/ directory.
         *
         * @see https://medoo.in/api/new
         */
        'db'    => [
            'database_type'   => 'sqlite',
            'database_file'   => __DIR__ . '/../app/slimex.db',
        ],
    ],
]);

$container = $app->getContainer();

require 'container.php';
require 'middleware.php';
require __DIR__ . '/../app/routes/web.php';
