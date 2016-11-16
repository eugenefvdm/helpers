<?php

namespace Helpers;

class Helpers
{

    public static function Config($values) {
        $filename = __DIR__ . "/../../config/" . $values . '.php';
        $file = file_get_contents( $filename );
        //die(print_r($file));
        return eval($file);
    }

}