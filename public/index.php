<?php

require __DIR__ . '/../vendor/autoload.php';

use Gicho\App;

ini_set('display_errors', true);

$rootDirectory = __DIR__ . '/..';
$app = new App($rootDirectory);

$app->run();

