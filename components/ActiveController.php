<?php
namespace app\components;

use Yii;
use yii\data\ActiveDataProvider;

class ActiveController extends \yii\rest\ActiveController
{
    public $result = ['errcode' => 404, 'errmsg' => '操作错误'];
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();
        // 注销系统自带的实现方法
        unset($actions['index'], $actions['update'], $actions['create'], $actions['delete'], $actions['view']);
        return $actions;
    }

    public function actionError()
    {
        return $this->result;
    }
}