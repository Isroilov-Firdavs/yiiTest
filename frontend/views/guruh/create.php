<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Guruh $model */

$this->title = 'Create Guruh';
$this->params['breadcrumbs'][] = ['label' => 'Guruhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guruh-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
