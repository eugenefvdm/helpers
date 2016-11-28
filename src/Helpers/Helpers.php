<?php

namespace Helpers;

use DateTime;

class Helpers
{

    public static function Config($values) {
        $filename = __DIR__ . "/../../../../../config/" . $values . '.php';
        // $filename = __DIR__ . "/../../config/" . $values . '.php';
        $file = file_get_contents( $filename );
        return eval($file);
    }

    public static function date_normalize($date) {
        $normalized_date = new DateTime($date);
        return $normalized_date->format('Y-m-d H:i:s');
    }

    public static function file_str_replace($search, $replace, $file) {
        $command = "sed -i -e 's/$search/$replace/g' $file";
        self::root_command($command);
    }

    public static function root_command($command) {
        $ssh_config = self::Config('ssh');
        $exec = "echo {$ssh_config['password']} | /usr/bin/sudo -S $command";
        exec($exec, $out, $rcode);
        return $out;
    }

}