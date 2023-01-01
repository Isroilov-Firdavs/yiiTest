<div class="site-about">

    <?php
use yii\bootstrap5\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Category;
use kartik\select2\Select2;

use yii\bootstrap5\Html;
$this->title = 'My Yii Application';


    $form = ActiveForm::begin(
        [
            'options' => [
                'method' => 'POST',
                'id' => 'upload-form',
                'enableAjaxValidation' => false,
                'htmlOptions' => array('enctype' => 'multipart/form-data'),

            ]
        ]
    );
    echo $form -> field($edit, 'nomi');
    echo $form -> field($edit, 'narxi');
    // echo $form->field($edit, 'category_id')->dropDownList(ArrayHelper::map(Category::find()->all(), 'id', 'nomi'), ['prompt'=>"Bo'limni tangland"]);
    echo $form->field($edit, 'category_id')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(Category::find()->all(), 'id', 'nomi'),
        'language' => 'de',
        'options' => ['placeholder' => "Bo'limni tangland"],
        'pluginOptions' => [
            'allowClear' => true
        ],
        ]);

    echo Html::submitButton('Junatish', ['class' => 'btn btn-success form-control', 'name' => 'login-button']);
    ActiveForm::end();/**/

    ?>

</div>