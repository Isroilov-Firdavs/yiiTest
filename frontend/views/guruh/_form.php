<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Guruh $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="guruh-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
