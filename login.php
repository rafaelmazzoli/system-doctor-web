<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="UTF-8"/>
	<meta name="author" content="Rafael Mazzoli Camargo, Murilo Jubertoni, Lucas Câmara de Souza, Fabrício Talarico, Bruno Antunes">
	<meta name="description" content="Site de Hospital para Trabalho de Programação Web">
	<meta name="keywords" content="Login, Paciente, Hospital">
	<meta http-equiv="refresh" content="-1">
	<link rel="stylesheet" type="text/css" href="_css/style-default.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="_images/medical-icon.ico"/>
</head>
<?php require("header.php"); ?>
<?php
	session_start();
	if(!isset($_SESSION['usernameOk']))
	{
		$_SESSION['usernameOk'] = 0;
		$_SESSION['usernameError'] = 0;
		$_SESSION['passwordError'] = 0;
		$_SESSION['type'] = "";
		$_SESSION['code_user'] = "";
		$_SESSION["adminCode"] = 0;
	}
	if($_SESSION['usernameOk'] == 0)
		require("form_user.php");
	else
		require("form_password.php");
?>
<?php require("footer.php"); ?>