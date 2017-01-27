<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/23
 * Time: 10:12
 */
namespace app\m;
use yii\db\ActiveRecord;

class News extends ActiveRecord
{
    public static function  tableName()
    {
        return 'news';
    }

}