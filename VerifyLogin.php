	<?php 
		include './Database.php';
		$DB = new Database();
		$DB -> ConnectDatabase();
		extract($_POST);
		$DB -> verifyLogin("$email","$password");
		$DB -> DisconnectDatabase();
	?>