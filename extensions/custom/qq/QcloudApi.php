<?php
namespace app\extensions\custom\qq;
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2016/12/17
 * Time: 15:32
 */
class QcloudApi extends \QcloudApi
{
    const SECRET_ID="AKIDteDamlDmodIcpuDUzIYjiV5UhhZGh4A3";
    const SECRET_KEY="pSCqMgolhU5TffS6pQtAGUaVDjFdJD2h";

    /**
     * @param string $moduleName
     * @param array $moduleConfig
     * @return false|\QcloudApi_Module_Base
     */
    public static function load($moduleName, $moduleConfig = array()){
        if(!$moduleConfig){
            $moduleConfig=[
                'SecretId'        => self::SECRET_ID,
                'SecretKey'       => self::SECRET_KEY,
                'RequestMethod'  => 'POST',
                'DefaultRegion'    => 'gz'
            ];
        }
        return parent::load($moduleName,$moduleConfig);
    }

    /**
     * @return false|\QcloudApi_Module_Wenzhi
     */
    public static function loadWenzhi(){
        return self::load(self::MODULE_WENZHI);
    }
}