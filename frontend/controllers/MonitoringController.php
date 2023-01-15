<?php

namespace frontend\controllers;
use Yii;

use yii\web\Controller;
use yii\filters\AccessControl;
use frontend\models\User;
use frontend\models\Tovar;
use frontend\models\Language;



class MonitoringController extends Controller
{


    public function actionIndex()
    {
        if ( !(Yii::$app->session->has('lang')) )
        {
            Yii::$app->session->set('lang', 'ru');
        }
        $model = Language::find()->all();
        return $this->render('index', ['lang' => $model]);
    }

    public function actionLanguage($lang)
    {
        Yii::$app->session->set('lang', $lang);
        Yii::$app->language = $lang;
        return $this->redirect(Yii::$app->request->referrer);
        // return $this->redirect(['/monitoring']);
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
