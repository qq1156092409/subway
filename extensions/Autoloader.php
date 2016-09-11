<?php
namespace app\extensions;

class Autoloader
{
    public static function autoload(){
        spl_autoload_register('app\extensions\Autoloader::load');
    }
    public static function getMap(){
        return array(
        );
    }
    public static function getDirs(){
        return array(
        );
    }
    public static function load($class){
        //load map
        $map=self::getMap();
        foreach($map as $k=>$v){
            $len=strlen($k);
            if(substr($class,0,$len)===$k){
                $file = $v . substr($class . ".php", $len);
                if(file_exists($file)){
                    require $file;return;
                }
            }
        }
        $dirs=self::getDirs();
        foreach($dirs as $dir){
            $file = $dir ."/". $class . ".php";
            if(file_exists($file)){
                require $file;return;
            }
        }
    }
}

Autoloader::autoload();