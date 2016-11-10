<?php

namespace app\extensions\custom\taobao;

/**
 * taobao api client
 * 默认配置，单例模式，结果检测，代理
 * Class TopClient
 * @package app\extensions\custom\taobao
 */
class TopClient extends \TopClient{
    const APP_KEY="21115760";
    const SECRET_KEY="f07253aa9f3d494fb7b01c85bec1fc0f";
    const ARTICLE_CODE="ts-1808369";

    public function execute($request, $session = null,$bestUrl = null){
        $response=parent::execute($request, $session,$bestUrl);
//        print_r($response);exit;
        try{
            self::check($response);
        }catch (TopException $e){
            if($e->getMessage()=="App Call Limited"){
                sleep(2);
                $response=parent::execute($request, $session,$bestUrl);
                self::check($response);
            }else{
                throw $e;
            }
        }
        return $response;
    }
    public function curl($url, $postFields = null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_PROXY,"192.168.10.28:8888");//设置代理
        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        curl_setopt ( $ch, CURLOPT_USERAGENT, "top-sdk-php" );
        //https 请求
        if(strlen($url) > 5 && strtolower(substr($url,0,5)) == "https" ) {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        if (is_array($postFields) && 0 < count($postFields))
        {
            $postBodyString = "";
            $postMultipart = false;
            foreach ($postFields as $k => $v)
            {
                if(!is_string($v))
                    continue ;

                if("@" != substr($v, 0, 1))//判断是不是文件上传
                {
                    $postBodyString .= "$k=" . urlencode($v) . "&";
                }
                else//文件上传用multipart/form-data，否则用www-form-urlencoded
                {
                    $postMultipart = true;
                    if(class_exists('\CURLFile')){
                        $postFields[$k] = new \CURLFile(substr($v, 1));
                    }
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart)
            {
                if (class_exists('\CURLFile')) {
                    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
                } else {
                    if (defined('CURLOPT_SAFE_UPLOAD')) {
                        curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
                    }
                }
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            }
            else
            {
                $header = array("content-type: application/x-www-form-urlencoded; charset=UTF-8");
                curl_setopt($ch,CURLOPT_HTTPHEADER,$header);
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString,0,-1));
            }
        }
        $reponse = curl_exec($ch);

        if (curl_errno($ch))
        {
            throw new \Exception(curl_error($ch),0);
        }
        else
        {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode)
            {
                throw new \Exception($reponse,$httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    public static function check($response){
        if(property_exists($response,"code")){
            $error=$response->msg;
            property_exists($response,"sub_msg") and $error.=(";".$response->sub_msg);
            throw new TopException($error);
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