<?php

require __DIR__ . '/../vendor/autoload.php';

use Framework\App;

ini_set('display_errors', true);

$app = new App();

$app->run();

