<?php
$this->title = 'My Yii Application';

?>


<?php
	foreach( $lang as $model ){
		?>
		<span class="badge text-bg-danger"><?=$model['nomi_'.Yii::$app->session->get('lang')]?></span><br>
		<?php
	}




	if (\Yii::$app->user->can('ochirish'))
	{
		?>
		<div class="row">
			<div class="col-lg-4 offset-lg-4">
				<div class="card card-admin">
					<div class="card-body">
						<h1 class="text-center">Hello Admin</h1>
					</div>
				</div>
			</div>
		</div>
		<?php
	}

?>