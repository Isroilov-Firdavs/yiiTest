<?php
$this->title = 'Users Page';
?>

<div class="row">
	<div class="col-lg-10 offset-lg-1">
		<table class="table table-bordered">
		  <thead>
		  	<tr>
		  		<th>#</th>
		  		<th>First name</th>
		  		<th>Last name</th>
		  		<th>Email</th>
		  		<th>Gender</th>
		  		<th>Data of birth</th>
		  		<th>Country</th>
		  	</tr>
		  </thead>

		  <tbody class="table-group-divider">
		  	<?foreach ($t as $tovar):?>
		  	<tr>
		  		<td><?=$tovar['id']?></td>
		  		<td><?=$tovar['first_name']?></td>
		  		<td><?=$tovar['last_name']?></td>
		  		<td><?=$tovar['email']?></td>
		  		<td><?=$tovar['gender']?></td>
		  		<td><?=$tovar['date_of_birth']?></td>
		  		<td><?=$tovar['country']?></td>
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