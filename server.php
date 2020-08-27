<!DOCTYPE html>
<html>
<head>
	<title>testin screipt Brute Force in python</title>
	<meta charset="utf-8">
</head>
<body>

	<?php

		if(isset($_POST['sub'])) {

		$input1 = $_POST['input1'];

		$input2 = $_POST['input2'];

		if ( $input1 == "admin" and $input2 == "admin"){
			echo "logado on sistema!";

	}else{
		echo "Dados invalidos!";
	}

}


	?>

	<form method="POST">

		<input type="text" name="input1">
		<input type="text" name="input2">
		<input type="submit" name="sub">
		
	</form>

</body>
</html>