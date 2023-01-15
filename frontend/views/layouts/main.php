<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => "RESTful API",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Car', 'url' => ['/site/car']],
        ['label' => 'Users', 'url' => ['/site/users']],
        ['label' => 'Test', 'url' => ['/site/test']],
        ['label' => 'Add', 'url' => ['/site/tovar']],
        ['label' => 'Category', 'url' => ['/site/category']],
        // ['label' => 'Serch', 'url' => ['/site/form']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav me-auto mb-2 mb-md-0'],
        'items' => $menuItems,
    ]);
    if (Yii::$app->user->isGuest) {
        echo Html::tag('div',Html::a('Login',['/site/login'],['class' => ['btn btn-link login text-decoration-none']]),['class' => ['d-flex']]);
    } else {
        echo Html::beginForm(['/site/logout'], 'post', ['class' => 'd-flex'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout text-decoration-none']
            )
            . Html::endForm();
    }
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-3">
                <ul class="nav">
                  <li class="nav-item">
                    <a href="<?=Url::to(['/monitoring']);?>" class="nav-link"><?=Yii::t('app', 'home');?></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=Url::to(['/monitoring/admin']);?>" class="nav-link"><?=Yii::t('app', 'admin');?></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=Url::to(['/monitoring/test']);?>" class="nav-link"><?=Yii::t('app', 'test');?></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=Url::to(['/group']);?>" class="nav-link"><?=Yii::t('app', 'group');?></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=Url::to(['/language']);?>" class="nav-link"><?=Yii::t('app', 'language');?></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?=Url::to(['/admin']);?>" class="nav-link">Backend</a>
                  </li>
                </ul>
            </div>
        </div>
        <div class="text-center my-2">
        <h6>Language <span class="badge bg-secondary"><?=Yii::$app->session->get('lang')?></span></h6>
        </div>
        <div class="text-center my-2">
            <a href="<?=Url::to(['/monitoring/language', 'lang'=>'uz']);?>">
                <span class="badge bg-success"><?=Yii::t('app', 'uz');?></span>
            </a>
            <a href="<?=Url::to(['/monitoring/language', 'lang'=>'ru']);?>">
                <span class="badge bg-danger"><?=Yii::t('app', 'ru');?></span>
            </a>
            <a href="<?=Url::to(['/monitoring/language', 'lang'=>'en']);?>">
                <span class="badge bg-primary"><?=Yii::t('app', 'en');?></span>
            </a>
        </div>


        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-start">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-end"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
