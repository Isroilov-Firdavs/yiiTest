<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Language $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="language-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomi_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomi_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomi_en')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
