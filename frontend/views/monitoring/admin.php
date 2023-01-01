<?php
$this->title = 'My Yii Application';

?>

<h1>Admin.php</h1>

<?php foreach ($u as $user): ?>
	<p><?=$user['nomi'];?></p>
<?php endforeach;?>



