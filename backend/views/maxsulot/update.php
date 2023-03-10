<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Maxsulot $model */

$this->title = 'Update Maxsulot: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maxsulots', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="maxsulot-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
