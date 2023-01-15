<?php

namespace frontend\components;
use yii\base\Behavior;
use yii\web\Application;
use Yii;


class LengComponent extends Behavior
{
	public function events()
	{
		return [Application::EVENT_BEFORE_REQUEST=> 'functionOne'];
	}

	public function functionOne()
	{
		if ( Yii::$app->session->has('lang') )
		{
			Yii::$app->language = Yii::$app->session->get('lang');
		}
	}
}



?>