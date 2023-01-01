<?php
use yii\helpers\Url;

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
		  	<tr>
		  		<td><?=$view['nomi']?></td>
		  		<td><?=$view['narxi']?></td>
		  		<td><?=$view['malumoti']?></td>
		  		<td><?=$view->category->nomi;?></td>
		  		<td><?=$view['vaqti']?></td>
		  		<?php
		  			if (\Yii::$app->user->can('ochirish'))
		  			{
		  				?>
		  					<th>
		  						<a href="<?=Url::to(['site/edit', 'id'=>$view->id])?>" class="btn btn-warning">Edit</a>
		  						<a href="<?=Url::to(['site/delete', 'id'=>$view->id])?>" class="btn btn-danger">Delete</a>
		  					</th>
		  				<?php
		  			}

		  		?>
		  	</tr>

		  </tbody>
		</table>
	</div>
</div>



