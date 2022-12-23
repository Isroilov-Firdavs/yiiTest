<?php
use andrewdanilov\adminpanel\widgets\Menu;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $userName string */
/* @var $directoryAsset false|string */

?>

<div class="page-top">
	<div class="top-header"><?= $this->title ?></div>
	<div class="profile-panel">
		<div class="profile-item">
			<span class="small"><?= $userName; ?></span>
			<span class="user-icon fa fa-user-circle"></span>
		</div>
		<div class="mx-2">
			<a class=" list-group-item-action" href="<?=Url::toRoute('site/logout');?>">Chiqish</a>
		</div>
	</div>
</div>