<?php
use yii\helpers\Url;

$this->title = 'Car Page';


?>

<div class="row">
	<div class="col-lg-10 offset-lg-1">
		<table class="table table-bordered">
		  <thead>
		  	<tr>
		  		<th>#</th>
		  		<th>Rusum</th>
		  		<th>Model</th>
		  		<th>Narxi</th>
		  	</tr>
		  </thead>

		  <tbody class="table-group-divider">
		  	<?foreach ($t as $tovar):?>
		  	<tr>
		  		<td><?=$tovar['id']?></td>
		  		<td><?=$tovar['make']?></td>
		  		<td><?=$tovar['model']?></td>
		  		<td><?=$tovar['price']?></td>
		  	</tr>
		  	<?endforeach;?>

		  </tbody>
		</table>
		<?php
		echo \yii\bootstrap5\LinkPager::widget(
		    [
		    'pagination' => $sahifa,

		    ])
		?>

	</div>
</div>