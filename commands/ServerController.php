<?php

namespace app\commands;

use Pheanstalk\Pheanstalk;
use yii\console\Controller;

/**
 * 队列监听服务
 * Class ServerController
 * @package app\commands
 */
class ServerController extends Controller
{
    public function actionIndex(){
        echo "server-start \r\n";

        $pid=pcntl_fork();

        $queue=new Pheanstalk("120.25.240.36");
        while(1){
            $job=$queue->watch("subway-store-refresh")->reserve();
            $data=$job->getData();
            echo $data."\r\n";
            $queue->delete($job);
            sleep(1);
        }
        echo "server-end \r\n";
    }
}