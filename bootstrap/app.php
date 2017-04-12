<?php

require __DIR__ . '/../vendor/autoload.php';

$app = new \Slim\App(include('config.php'));

$container = $app->getContainer();

require 'container.php';
require 'middleware.php';
require 'route.php';
