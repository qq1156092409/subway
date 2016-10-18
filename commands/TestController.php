<?php

namespace app\commands;


use app\helpers\ConsoleHelper;
use app\models\Adgroup;
use app\models\execute\AdgroupExecute;
use app\models\Store;
use Pheanstalk\Pheanstalk;
use yii\console\Controller;

class TestController extends Controller {
    public function actionIndex(){
        $adgroup=Adgroup::find()->limit(1)->one();
        $execute = new AdgroupExecute($adgroup);
        echo $execute->createKeywordPools();

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

}