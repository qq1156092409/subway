<?php
namespace app\commands;

use app\models\Campaign;
use yii\console\Controller;

class CampaignController extends Controller
{
    public function actionIndex(){

    }
    protected function getCampaign($id){
        $campaign = Campaign::findOne($id);
        if(!$campaign){
            throw new \Exception("campaign not found");
        }
        return $campaign;
    }
}