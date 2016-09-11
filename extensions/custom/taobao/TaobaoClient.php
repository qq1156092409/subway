<?php
namespace app\extensions\custom\taobao;
use app\models\TaobaoAccount;
use yii\base\Exception;

class TaobaoClient
{
    /** @var TaobaoAccount */
    protected $account;

    /**
     * @param $nick string
     * @throws Exception
     */
    protected function __construct($nick){
        /** @var TaobaoAccount $account */
        $account = TaobaoAccount::findOne(array("nick"=>$nick));
        if(!$account) throw new Exception("taobao account not found");
        $this->account=$account;
        self::$instances[$account->nick]=$this;
    }
    public function execute($request){
        $client=new \TopClient();
        $client->appkey="21115760";
        $client->secretKey="f07253aa9f3d494fb7b01c85bec1fc0f";
        $response= $client->execute($request,$this->account->sessionKey);
        $this->check($response);
        return $response;
    }
    protected function check($response){
        if(property_exists($response,"code")){
            throw new Exception("taobao api:".$response->code.":".$response->msg);
        }
    }

    public static $instances=array();

    /**
     * @param $nick string
     * @return TaobaoClient
     */
    public static function getInstance($nick){
        if(!isset(self::$instances[$nick])){
            new self($nick);
        }
        return self::$instances[$nick];
    }

}