<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Guruh $model */

$this->title = 'Update Guruh: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guruhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guruh-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
