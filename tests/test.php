<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Helpers\Config;

$config = Config::Config('sample');

var_dump($config);