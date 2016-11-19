<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use Helpers\Helpers;

$config = Helpers::Config('sample');

var_dump($config);