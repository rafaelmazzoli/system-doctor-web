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
		if($_POST["password-one"] != $_POST["password-two"])
		{
			$_SESSION["alert"] = 5;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
			return;
		}
		$sqlCommand = "SELECT code_user FROM user WHERE name = '".$_POST["name"]."'";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
		$doctorData = mysqli_fetch_assoc($feedbackSql);
		if($doctorData == null)
		{
			$sqlCommand = "INSERT INTO user (name, password, type, cpf, nameDoctor) VALUES(
								'".$_POST["name"]."',
								'".$_POST["password-one"]."',
								'2',
								'".$_POST["cpf"]."',
								'".$_POST["name-doctor"]."')";
			$feedbackSql = mysqli_query($connection, $sqlCommand);
			$_SESSION["alert"] = 4;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
		else
		{
			$_SESSION["alert"] = 3;
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
	?>
</body>
</html>