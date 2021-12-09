	<?php
		include 'Database.php';

		$DB = new Database();
		$DB ->ConnectDatabase();

		extract($_POST);

		$PasswordHash=password_hash($password,PASSWORD_DEFAULT);
		$Query = "INSERT INTO users(name,email,password,tipo) VALUES('$name','$email','$PasswordHash','0')";
		$DB->RunSQL($Query);
		echo "<div class='alert alert-success'> Usuario Registrado </div>";
		$DB -> DisconnectDatabase();
		header("location: ./index.php");
	?>