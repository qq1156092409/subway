<?php
namespace app\models\multiple;

interface ReportInterface
{
    public static function merge($datas);
    public function finishAttributes();
}