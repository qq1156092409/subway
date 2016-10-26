<?php

namespace app\commands;


use app\helpers\ConsoleHelper;
use app\models\Adgroup;
use app\models\AuthSession;
use app\models\execute\AdgroupExecute;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\console\Controller;
use yii\helpers\ArrayHelper;

class TestController extends Controller {
    public function actionIndex(){
        /** @var Adgroup $adgroup */
        $adgroup=Adgroup::findOne(719091059);
        echo $adgroup->refreshKeywords();

    }
    public function actionQueue(){
        $pheanstalk = new Pheanstalk('120.25.240.36');

        $job = $pheanstalk ->watch('subway-test')->reserve();
        $time=$job->getData();
        echo date("Y-m-d H:i:s",$time);
        $pheanstalk->delete($job);
    }
    public function actionLoop(){
        echo "start \r\n";
        $i=1;
        while(true){
            sleep(10);
            if($i==10){
                break;
            }
            $i++;
        }
        echo "success \r\n";
    }
    public function actionExec(){
        $command=dirname(__DIR__).'\yii store/refresh-one 1';
        echo exec($command);
    }

    /**
     * 火影分身
     */
    public function actionNaruto(){
        $parentPid=getmypid();
        for($i=0;$i<5;$i++){
            $pid=pcntl_fork();
            if ($pid == -1) {
                die('fork failed');
            } else if ($pid == 0) {
                $mypid = getmypid(); // 用getmypid()函数获取当前进程的PID
                $rand=rand(10,30);
                while(1){
                    echo $mypid." ".$rand." say ".date("Y-m-d H:i:s").PHP_EOL;
                    $rand--;
                    if($rand<=0){
                        break;
                    }
                    sleep(1);
                }
                exit;
            }
        }
        sleep(60);
    }
    public function actionImportStore(){
        while(1){
            /** @var Store[] $stores */
            $stores=Store::find()->where(["session"=>""])->limit(100)->all();
            if(!$stores){
                break;
            }
            foreach($stores as $store){
                /** @var AuthSession $authSession */
                $authSession=AuthSession::find()->where(["taobao_user_nick"=>$store->nick])->orderBy("id desc")->limit(1)->one();
                if($authSession){
                    $store->session=$authSession->access_token;
                    $store->save();
                    ConsoleHelper::t("session success ".$store->nick);
                }
            }
        }

    }

}