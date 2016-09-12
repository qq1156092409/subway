<?php

namespace app\extensions\custom\taobao;

/**
 * taobao api client
 * 默认配置，单例模式，结果检测
 * Class TopClient
 * @package app\extensions\custom\taobao
 */
class TopClient extends \TopClient{
    const APP_KEY="21115760";
    const SECRET_KEY="f07253aa9f3d494fb7b01c85bec1fc0f";

    public function execute($request, $session = null,$bestUrl = null){
        $response=parent::execute($request, $session,$bestUrl);
        self::check($response);
        return $response;
    }
    public static function check($response){
        if(property_exists($response,"code")){
            throw new TopException($response->msg);
        }
    }
    protected static $instance;
    public static function getInstance(){
        if(!self::$instance){
            self::$instance=new self(self::APP_KEY,self::SECRET_KEY);
        }
        return self::$instance;
    }

}