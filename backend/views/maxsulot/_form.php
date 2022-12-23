<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Maxsulot $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="maxsulot-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'foto')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
