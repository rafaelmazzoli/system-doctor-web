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
		$sqlCommand = "SELECT password, type FROM user WHERE code_user = '".$_SESSION['code_user']."'";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
		$userData = mysqli_fetch_assoc($feedbackSql);
		$_SESSION['usernameOk'] = 0;
		if($userData['password'] != $_POST["password"])
		{
			$_SESSION['passwordError'] = 1;
			echo "<script language='javascript' type='text/javascript'>window.location.href='login.php'</script>";
		}
		else
		{
			$_SESSION['passwordError'] = 0;
			$_SESSION['type'] = $userData['type'];
			echo "<script language='javascript' type='text/javascript'>window.location.href='main-menu.php'</script>";
		}
	?>
</body>
</html>