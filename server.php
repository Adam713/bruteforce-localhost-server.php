<!DOCTYPE html>
<html>
<head>
	<title>testin screipt Brute Force in python</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		if(isset($_POST['login'])) {

		$input1 = $_POST['username'];

		$input2 = $_POST['password'];

		if ( $input1 == "admin" and $input2 == "root"){
			echo "logado on sistema!";

	}else{
		echo "Dados invalidos!";
	}

}


	?>

	<form method="POST">

		<input type="text" name="username">
		<input type="text" name="password">
		<input type="submit" name="login">
		
	</form>

</body>
</html>
