<?php

namespace app\helpers;


class ConsoleHelper {
    public static function t($message){
        echo "[".date("H:i:s")."] ".$message.PHP_EOL;
    }
}