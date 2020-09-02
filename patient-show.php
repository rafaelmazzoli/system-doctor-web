<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Validador</title>
</head>
<body>
    <?php
		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bdHospital";
		$connection = mysqli_connect($servername, $username, $password, $dbname);
		if(!$connection)
		{
			echo "Erro: ".mysqli_connect_error();
		}
		$sqlCommand = "SELECT cpf FROM patient WHERE cpf = '".$_POST["cpf"]."'";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
		$patientData = mysqli_fetch_assoc($feedbackSql);
		if($patientData == null)
		{
			$_SESSION["alert"] = 6;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
		else
		{
			$_SESSION["cpf-search"] = $patientData["cpf"];
			$_SESSION["alert"] = 7;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
	?>
</body>
</html>