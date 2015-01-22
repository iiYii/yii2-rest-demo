<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;

class UserController extends ActiveController
{
    public $modelClass = 'app\models\User';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

    public function actions()
    {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }

    public function actionIndex($id)
    {
        $modelClass = $this->modelClass;
        $query = $modelClass::find()->where(['id' => [$id]]);
        return new ActiveDataProvider([
            'query' => $query,
        ]);
    }
}
