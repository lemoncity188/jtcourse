<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/9/26
 * Time: 18:09
 */
namespace app\m;
use yii\db\ActiveRecord;

class Users extends ActiveRecord
{
    static function tableName()
    {
        return "users";
    }
    function  scenarios()
    {
        return [
            "default"=>["user_name","user_pass"]
        ];
    }


}