<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Princeton-Plainsboro</title>
	<meta charset="UTF-8"/>
	<meta name="author" content="Rafael Mazzoli Camargo, Murilo Jubertoni, Lucas Câmara de Souza, Fabrício Talarico, Bruno Antunes">
	<meta name="description" content="Site de Hospital para Trabalho de Programação Web">
	<meta name="keywords" content="Login, Paciente, Hospital">
	<meta http-equiv="refresh" content="-1">
	<link rel="stylesheet" type="text/css" href="_css/style-default.css"/>
	<link rel="stylesheet" type="text/css" href="_css/style-form.css"/>
	<link rel="shortcut icon" type="image/x-icon" href="_images/medical-icon.ico"/>
</head>
<?php require("header.php"); ?>
<?php
	session_start();
	if($_SESSION['type'] == 1)
		require("menu-admin.php");
	else
	{
		if($_SESSION['type'] == 2)
		{
			require("menu-doctor.php");
		}
		else
		{
			echo "ERRO: É necessário Logar no Sistema";
		}
	}
?>
<?php require("footer.php"); ?>