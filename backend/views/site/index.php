<?php
use yii\bootstrap5\widgets;


/* @var $this \yii\web\View */

$this->title = "Добро пожаловать!"
?>



<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6">
			<h2>PHP PROJECT</h2>
			<?= yii\bootstrap5\Progress::widget(['percent' => 30, 'label' => 'loading ...']) ?>

		</div>
	</div>
</div>