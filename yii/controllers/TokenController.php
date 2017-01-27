<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/24
 * Time: 16:47
 */
namespace app\controllers;
use yii\rest\ActiveController;
use yii\web\Response;

class TokenController extends ActiveController
{
    public $modelClass="app\m\Clients";

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['text/html'] = Response::FORMAT_JSON;
        return $behaviors;
    }
    function actions()    //可以将action方法分离出来
    {
        return [
            'index' => [
                'class' => 'app\myactions\TokenAction',
                'modelClass' => $this->modelClass,
            ]
        ];
    }
}