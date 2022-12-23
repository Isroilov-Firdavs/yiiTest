<?php
use yii\helpers\Html;

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<a href="<?=\yii\helpers\Url::to(['/admin']);?>">Backend</a>
<div class="row">
    <div class="col-lg-6 offsett-3">
        <div class="card">
            <div class="card-body">
                <h2>Salom GitHub</h2>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                    <? foreach ($data as $img): ?>
                        <img src="../../images/<?=$img['foto']?>" width='100px'>



                    <? endforeach; ?>
            </div>
        </div>
    </div>
</div>


