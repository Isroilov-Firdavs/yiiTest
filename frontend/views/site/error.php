<?php

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;

$this->title = $name;
?>

<div class="site-error">
    <div class="card card-border">
        <div class="card-body">
    <h2><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        Страница не найдена.
    </div>

    <p>
        Если вы считаете, что это ошибка сервера, свяжитесь с нами. Спасибо.
    </p>

        </div>
    </div>

</div>
