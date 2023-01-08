<?php
namespace restapi\controllers;

use yii\rest\ActiveController;

class MyController extends ActiveController
{
    public $modelClass = 'restapi\models\User';

    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['corsFilter'] = [
            'class' => \yii\filters\Cors::className(),
        ];

        
        return $behaviors;
    }

}
?>