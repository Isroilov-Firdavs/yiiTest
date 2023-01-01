<?php

namespace frontend\controllers;
use Yii;

use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\User;
use frontend\models\Tovar;



class MonitoringController extends Controller
{


    public function actionIndex()
    {
        return $this->render('index');
    }





    public function actionAdmin()
    {
        if ( Yii::$app->user->can('ochirish') )
        {
            // $db = Tovar::find()->all();
            $db = Tovar::find()->where(['id'=> Yii::$app->user->id])->all();
            return $this->render('admin', ['u'=>$db]);

        }
        else
        {
            return $this->redirect(['monitoring']);
        }
    }






    public function actionTest()
    {
        return $this->render('test');
    }

}
