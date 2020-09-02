<script language="javascript" text="text/javascript">
	document.getElementById("container-login").setAttribute("style","height: 120%; margin-top: -5em;");
</script>
<div id="menu-bar">
	<a href="option-patient-form.php"><button id="formulario-paciente">Atualizar Prontuário</button></a>
	<a href="option-patient-list.php"><button id="paciente-cadastrado">Pacientes Cadastrados</button></a>
	<a href="logout.php"><button id="logout">Logout</button></a>
	<hr/>
</div>
<div id="menu-content">
<?php
	if(!isset($_SESSION["alert"]))
	{
		$_SESSION["alert"] = 0;
	}
	switch($_SESSION["alert"])
	{
		case 0:
			break;
		case 1:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: lime;");
			document.getElementById("alert-mensage").innerHTML="Dados do Paciente Atualizados com Sucesso!";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
		case 2:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: lime;");
			document.getElementById("alert-mensage").innerHTML="Paciente Cadastrado com Sucesso!";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
		case 3:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: tomato;");
			document.getElementById("alert-mensage").innerHTML="Este nome de USUÁRIO ja foi cadastrado, Tente Outro!";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
		case 4:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: lime;");
			document.getElementById("alert-mensage").innerHTML="Novo Médico Cadastrado com Sucesso!";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
		case 5:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: tomato;");
			document.getElementById("alert-mensage").innerHTML="A SENHA inserida não é a mesma SENHA CONFIRMADA...";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
		case 6:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: tomato;");
			document.getElementById("alert-mensage").innerHTML="CPF não encontrado na Base de Dados, Cadastre-o antes...";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
		case 7:
			echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: lime;");
			document.getElementById("alert-mensage").innerHTML="CPF de Paciente encontrado!";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
			break;
	}
	$_SESSION["alert"] = 0;
	if(!isset($_SESSION["submenu"]))
	{
		$_SESSION["submenu"] = 0;
	}
	switch($_SESSION["submenu"])
	{
		case 0:
			require("patient-form-doctor.php");
			break;
		case 1:
			require("patient-list.php");
			break;
		case 2:
			require("doctor-form.php");
			break;
	}
?>
</div>