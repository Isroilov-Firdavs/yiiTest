<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Maxsulot $model */
/** @var ActiveForm $form */
?>
<div class="site-form">

    <?php $form = ActiveForm::begin(
        [
            'options' => [
                'enctype' => 'multipart/form-data',
                'method' => 'POST'
            ]
        ]
    ); ?>

        <?= $form->field($model, 'foto')->fileInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-form -->
