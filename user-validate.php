<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Validador</title>
</head>
<body>
    <?php
		session_start();
		if($_POST["user"] == "adminCreate")
		{
			require("create-table.php");
			$_SESSION["adminCode"] = 1;
			echo "<script language='javascript' type='text/javascript'>window.location.href='login.php'</script>";
		}
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bdHospital";
		$connection = mysqli_connect($servername, $username, $password, $dbname);
		if(!$connection)
		{
			echo "Erro: ".mysqli_connect_error();
		}
		$sqlCommand = "SELECT code_user FROM user WHERE name = '".$_POST["user"]."'";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
		$userData = mysqli_fetch_assoc($feedbackSql);
		if($userData == null)
		{
			$_SESSION['usernameOk'] = 0;
			$_SESSION['usernameError'] = 1;
			echo "<script language='javascript' type='text/javascript'>window.location.href='login.php'</script>";
		}
		else
		{
			$_SESSION['code_user'] = $userData['code_user'];
			$_SESSION['usernameOk'] = 1;
			$_SESSION['usernameError'] = 0;
			echo "<script language='javascript' type='text/javascript'>window.location.href='login.php'</script>";
		}
	?>
</body>
</html>