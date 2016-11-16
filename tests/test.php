<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use Helpers\Config;

$config = Config::Config('sample');
//die("test");
print_r($config,1);