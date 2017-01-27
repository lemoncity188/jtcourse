<?php
namespace app\m;
use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/25
 * Time: 19:27
 */
class NavBar extends ActiveRecord{
    static function tableName()
    {
        return "navbar";
    }



}