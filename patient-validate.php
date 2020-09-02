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
			$sqlCommand = "INSERT INTO patient (name, cpf, blood, phone, birthday, alergic, email, healthPlan, prontuario) VALUES(
										'".$_POST["name"]."',
										'".$_POST["cpf"]."',
										'".$_POST["blood"]."',
										'".$_POST["phone"]."',
										'".$_POST["birthday"]."',
										'".$_POST["alergics"]."',
										'".$_POST["email"]."',
										'".$_POST["health-plans"]."',
										'".$_POST["prontuario"]."')";
			$feedbackSql = mysqli_query($connection, $sqlCommand);
			$_SESSION["alert"] = 2;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
		else
		{
			$sqlCommand = "UPDATE patient SET
										name = '".$_POST["name"]."',
										blood ='".$_POST["blood"]."',
										phone = '".$_POST["phone"]."',
										birthday = '".$_POST["birthday"]."',
										alergic = '".$_POST["alergics"]."',
										email = '".$_POST["email"]."',
										healthPlan = '".$_POST["health-plans"]."',
										prontuario = '".$_POST["prontuario"]."'
										WHERE cpf = '".$patientData["cpf"]."'";
			$feedbackSql = mysqli_query($connection, $sqlCommand);
			$_SESSION["alert"] = 1;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
	?>
</body>
</html>