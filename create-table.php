<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Create Table</title>
</head>
<body>
    <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "bdHospital";
		$connection = mysqli_connect($servername, $username, $password, $dbname);
		if(!$connection)
		{
			echo "Erro: ".mysqli_connect_error();
		}
		$sqlCommand = "CREATE TABLE user(
									code_user smallint UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
									PRIMARY KEY(code_user),
									name char(35) NOT NULL,
									nameDoctor char(35) NOT NULL,
									cpf decimal(11) NOT NULL,
									password char(15) NOT NULL,
									type smallint NOT NULL)";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
		$sqlCommand = "INSERT INTO user (name, password, type, cpf, nameDoctor) VALUES(
									'admin',
									'admin',
									1,
									00000000000,
									'admin')";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
		$sqlCommand = "CREATE TABLE patient(
									cpf decimal(11) NOT NULL,
									PRIMARY KEY(cpf),
									name char(35) NOT NULL,
									blood char(2) NOT NULL,
									phone char(16) NOT NULL,
									birthday date NOT NULL,
									alergic text,
									email char(35),
									healthPlan text,
									prontuario text)";
		$feedbackSql = mysqli_query($connection, $sqlCommand);
	?>
	<script src="_js/close-window.js"></script>
</body>
</html>