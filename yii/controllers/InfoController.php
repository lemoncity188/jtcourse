<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/24
 * Time: 15:42
 */
namespace app\controllers;
use yii\filters\auth\QueryParamAuth;
use yii\rest\ActiveController;

class InfoController extends  ActiveController
{
    public $modelClass = 'app\m\News';

    function init()
    {
        parent::init();
        \Yii::$app->user->enableSession = false;       //token认证关闭session
    }

    public function behaviors()                        //访问controller会调用
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => QueryParamAuth::className(),    //获取url上的access-token值
        ];
        return $behaviors;
    }

}