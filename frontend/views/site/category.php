<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Category $model */
/** @var ActiveForm $form */
$this->title = 'Add Category';

?>
<div class="site-category">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'nomi') ?>

        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary form-control']) ?>
        </div>
    <?php ActiveForm::end(); ?>
        </div>
    </div>


</div><!-- site-category -->
