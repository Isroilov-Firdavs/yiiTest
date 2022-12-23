<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <table class="table">
        <?$i=0; foreach ($tovars as $tovar): $i++;?>
        <tr>
            <th>
                <?=$i;?>
            </th>
            <th>
                <?=$tovar['name'];?>
            </th>
            <th>
                <?= Yii::$app->TestComponent->narx($tovar['narxi'])?> $
            </th>
            <th>
                <?=$tovar['data'];?>
            </th>
        </tr>
        <?endforeach;?>
    </table>

    <code><?= __FILE__ ?></code>
</div>
