<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap5\ActiveForm;
use kartik\icons\Icon;
use kartik\editors\Summernote;


use kartik\daterange\DateRangePicker;


use frontend\models\Category;
use kartik\select2\Select2;



/** @var yii\web\View $this */
/** @var frontend\models\Tovar $model */
/** @var ActiveForm $form */
?>
<div class="site-tovar">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-lg-4">
            <?= $form->field($model, 'nomi') ?>
        </div>
        <div class="col-lg-4">
            <?= $form->field($model, 'narxi') ?>
        </div>
        <div class="col-lg-4">
            <?=
                // $form->field($model, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'nomi'), ['prompt'=>"Bo'limni tangland"])
                //
                //
            $form->field($model, 'category_id')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Category::find()->all(), 'id', 'nomi'),
            'language' => 'de',
            'options' => ['placeholder' => "Bo'limni tangland"],
            'pluginOptions' => [
                'allowClear' => true
            ],
            ]);
            ?>
        </div>
    </div>

        <?php

        // Usage with model & active form including model validation
        echo $form->field($model, 'malumoti')->widget(Summernote::class, [
            'useKrajeePresets' => true,
            // other widget settings
        ]);
        ?>


    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- site-tovar -->
