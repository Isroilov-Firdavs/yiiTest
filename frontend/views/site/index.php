<?php
use yii\helpers\Html;
use kartik\daterange\DateRangePicker;



/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="row">
    <div class="col-lg-6 offset-lg-3">
        <div class="card">
            <div class="card-body">
                        <div class="row">
                    <? foreach ($data as $img): ?>
                            <div class="col-lg-3">
                                <div class="fool-img">
                                    <img src="../../images/<?=$img['foto']?>" width='100px'>
                                </div>
                            </div>
                    <? endforeach; ?>
                        </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6 offset-3">
        <div class=""></div>
    </div>
</div>

