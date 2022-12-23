<?php
namespace frontend\components;

use yii\base\Component;

class TestComponent extends Component
{
	public $narx = 11200;
	public function getSatr($satr)
	{
		$s = strpos($satr, ".");
		return substr($satr,0, $s);
	}


	public function salom()
	{
		echo "Hello Yii2";
	}



	public function narx($n)
	{
		$p = $n / $this->narx;
		echo number_format($p,2,"."," ");
	}
}



?>