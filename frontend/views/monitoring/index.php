<?php
$this->title = 'My Yii Application';

?>

<h1>Home</h1>

<h1>Index.php</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, ipsa. Debitis totam quod molestiae vero, maxime ea, illum a sapiente odio rem pariatur adipisci nesciunt recusandae! Voluptates consequuntur, accusamus mollitia!</p>


<?php

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