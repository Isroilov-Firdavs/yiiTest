<?php

use andrewdanilov\adminpanel\widgets\Menu;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $siteName string */
/* @var $directoryAsset false|string */

?>

<div class="page-left">
	<div class="sidebar-heading"><?= $siteName ?></div>
	<?= Menu::widget(['items' => [
		['label' => 'Dashboard', 'url' => ['/site/index'], 'icon' => 'desktop'],
		[],
		['label' => 'New project'],
		['label' => 'Gii', 'url' => ['/gii'], 'icon' => 'plus'],
		[],
		['label' => 'Blog'],
		['label' => 'Maxsulot', 'url' => ['/maxsulot'], 'icon' => ['symbol' => 'newspaper', 'type' => 'solid']],
		['label' => 'Category', 'url' => ['/category'], 'icon' => ['symbol' => 'newspaper', 'type' => 'solid']],
		[],
		['label' => 'System'],
		['label' => 'Users', 'url' => ['/user/index'], 'icon' => 'users'],
		[],
		['label' => 'Frontend'],
		// ['label' => 'Frontend', 'url' => ['/user/index'], 'icon' => 'arrow-right'],
		['label' => 'Frontend', 'url' => ['../'], 'icon' => 'users'],
		

	]]) ?>

</div>
