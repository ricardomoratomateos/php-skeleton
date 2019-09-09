<?php
require __DIR__ . '/vendor/autoload.php';

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];

$app = new \Slim\App($configuration);

require __DIR__ . '/src/constants.php';
require __DIR__ . '/src/container.php';
require __DIR__ . '/src/routes.php';

$app->run();
