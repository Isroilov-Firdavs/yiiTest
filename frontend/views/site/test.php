<?php
use yii\helpers\Url;
use yii\bootstrap5\Modal;

$this->title = 'My Yii Application';


?>

<div class="row">
	<div class="col-lg-10 offset-lg-1">
		<table class="table table-bordered border-primary">
		  <thead>
		  	<tr>
		  		<th>Nomi</th>
		  		<th>Naxri</th>
		  		<th>Ma'lumoti</th>
		  		<th>Kategoriyasi</th>
		  		<th>Kiritilgan vaqti</th>
		  		<?php
		  		if (\Yii::$app->user->can('ochirish'))
				{
					echo "<th>Ko'rish</th>";
				}

		  		?>
		  	</tr>
		  </thead>

		  <tbody>
		  	<?foreach ($t as $tovar):?>
		  	<tr>
		  		<td><?=$tovar['nomi']?></td>
		  		<td><?=$tovar['narxi']?></td>
		  		<td><?=$tovar['malumoti']?></td>
		  		<td><?=$tovar->category->nomi;?></td>
		  		<td><?=$tovar['vaqti']?></td>
		  		<?php
		  			if (\Yii::$app->user->can('ochirish'))
		  			{
		  				?>
		  					<th>
		  						<a id="view" href="<?=Url::to(['site/edit', 'id'=>$tovar->id])?>" class="btn btn-warning">Ko'rish</a>
		  						<a id="delete" href="<?=Url::to(['site/delete', 'id'=>$tovar->id])?>" class="btn btn-danger">Delete</a>
		  					</th>
		  				<?php
		  			}

		  		?>
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




<?php
Modal::begin([
    'title' => 'Hello world',
    'toggleButton' => ['label' => 'click me'],
    'id' => 'myModal',
]);

echo "<div id='content'>Content</div>";

Modal::end();
?>