<form id='userForm' method='POST' action='user-validate.php'>
	<p id="text-user" class='user'><span class="left"><img id="doctor-icon" src="_images/doctor-male.png" alt="Doctor Icon">Usuário</span></br><input type='text' id="user-input" name='user' autofocus='autofocus' title='Digite seu Username' placeholder='Usuário...' required></br></p>
	<p class='user'><input id="send-button" type='submit' value='Enviar'></p>
</form>
<?php
	if($_SESSION["usernameError"] == 1)
	{
		echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: tomato;");
			document.getElementById("alert-mensage").innerHTML="USUÁRIO inválido! Tente Novamente...";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
		$_SESSION['usernameError'] = 0;
	}
	if($_SESSION["passwordError"] == 1)
	{
		echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: tomato;");
			document.getElementById("alert-mensage").innerHTML="SENHA inválida! Tente Novamente...";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
		$_SESSION['passwordError'] = 0;
	}
	if($_SESSION["adminCode"] == 1)
	{
		echo '<script language="javascript">
			document.getElementById("alert").setAttribute("style","opacity: 1; background-color: lime;");
			document.getElementById("alert-mensage").innerHTML="Código BETA Executado...";
			setTimeout(function(){ document.getElementById("alert").setAttribute("style","opacity: 0;"); }, 7000);
		</script>';
		$_SESSION['adminCode'] = 0;
	}
?>