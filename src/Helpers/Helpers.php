<?php

namespace Helpers;

class Helpers
{

    public static function Config($values) {
        $filename = __DIR__ . "/../../../../../config/" . $values . '.php';
        $file = file_get_contents( $filename );
        return eval($file);
    }

    public static function file_str_replace($search, $replace, $file) {
        $command = "sed -i -e 's/$search/$replace/g' $file";
        self::root_command($command);

    }

    public static function root_command($command) {
        $ssh_config = self::Config('ssh');
        $exec = "echo {$ssh_config['password']} | /usr/bin/sudo -S $command";
        exec($exec, $out, $rcode);
    }

}