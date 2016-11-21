<?php

require_once __DIR__ . '/vendor/autoload.php'; // Autoload files using Composer autoload

use Helpers\Helpers;

Helpers::root_command("echo 'Hello world!' > /tmp/testfile.txt");
Helpers::file_str_replace("world", "galaxy", "/tmp/testfile.txt");

$config = Helpers::Config('sample');

var_dump($config);

$config = Helpers::Config('ssh');



