<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/1/24
 * Time: 16:57
 */

namespace app\myactions;
use yii\rest\Action;

class TokenAction extends Action
{
    public function run()
    {
        //得到地址栏appid和appkey
        $client_appid=\YII::$app->request->get("client_appid",false);
        $client_appkey=\YII::$app->request->get("client_appkey",false);
        $model=$this->modelClass;    //client模型

        if(!$client_appid || !$client_appkey)
        {
            return (new $model())->emptyToken();
        }
        else
        {
            //根据地址栏appid和appkey(用户名和密码)去数据库匹配，匹配生成token并写入数据库，以后访问api只要验证token,访问不到则返回空token;findOne会返回model实例所以后面不用new $model();
            $model=$model::findOne(["client_appid"=>$client_appid,"client_appkey"=>$client_appkey]);
            if($model)
            {
                $model->client_token=\Yii::$app->security->generateRandomString();
                if($model->save())
                {
                    return $model->toToken();    //根据appid和appkey去数据库查找
                }

            }
            return (new $model())->emptyToken();
        }
    }
}