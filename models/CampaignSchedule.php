<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "campaign_schedule".
 *
 * @property integer $campaign_id
 * @property string $create_time
 * @property string $modified_time
 * @property string $nick
 * @property string $schedule
 * @property string $api_time
 */
class CampaignSchedule extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'campaign_schedule';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['campaign_id'], 'required'],
            [['campaign_id'], 'integer'],
            [['create_time', 'modified_time', 'api_time'], 'safe'],
            [['schedule'], 'string'],
            [['nick'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'campaign_id' => 'Campaign ID',
            'create_time' => 'Create Time',
            'modified_time' => 'Modified Time',
            'nick' => 'Nick',
            'schedule' => 'Schedule',
            'api_time' => 'Api Time',
        ];
    }

    public function scheduleNow(){
        $schedules=$this->schedules();
        $now=date("m-d");
        $week=date("w");
        if(isset($schedules[$week])){
            foreach($schedules[$week] as $schedule){
                if($schedule["start"]<=$now && $schedule["end"]>=$now){
                    return $schedule["num"];
                }
            }
        }
        return 100;
    }

    public function schedules(){
        $ret=[];
        $scheduleStr=$this->schedule;
        if($scheduleStr=="all"){
            return $ret;
        }
        $weekSchedules = explode(";", $scheduleStr);
        if($weekSchedules){
            foreach($weekSchedules as $week=>$scheduleStr2){
                $daySchedules = explode(",", $scheduleStr2);
                foreach($daySchedules as $schedule){
                    //00:00-01:00:60
                    $temp=[
                        "start"=>substr($schedule,0,5),
                        "end"=>substr($schedule,6,5),
                        "num"=>substr($schedule,12),
                    ];
                    $ret[$week][]=$temp;
                }

            }
        }
        return $ret;
    }
}
