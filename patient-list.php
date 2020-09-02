<h2 id="content-title">Lista de Pacientes</h2>
<table class="right" id="form">
	<form method="POST" action="patient-show.php">
		<tr>
			<td>
				<input id="cpf" type="search" name="cpf" title="Insira os 11 dígitos do CPF do Paciente" maxlength="11" size="20" placeholder="CPF do Paciente..." list="cpf-list" required>
				<datalist id="cpf-list">
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
					$sqlCommand = "SELECT cpf FROM patient";
					$feedbackSql = mysqli_query($connection, $sqlCommand);
					$patientData = mysqli_fetch_all($feedbackSql,MYSQL_ASSOC);
					foreach($patientData as $patient)
					{
						echo '<option value='.$patient["cpf"].'></option>';
					}
				?>
				</datalist>
			</td>
			<td>
				<input type="submit" id="update" value="Buscar">
			</td>
		</tr>
	</form>
</table>
<hr class="midhr"/>
<?php
	if(!isset($_SESSION["cpf-search"]))
	{
		$_SESSION["cpf-search"] = "";
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
	$sqlCommand = "SELECT * FROM patient WHERE cpf = '".$_SESSION["cpf-search"]."'";
	$feedbackSql = mysqli_query($connection, $sqlCommand);
	$patientData = mysqli_fetch_assoc($feedbackSql);
	echo "<div class='left50'>";
	echo '<p class="result"><label>CPF:</label> '.$patientData["cpf"].'</p>';
	echo '<p class="result"><label>Nome Completo:</label> '.$patientData["name"].'</p>';
	echo '<p class="result"><label>Sangue:</label> '.$patientData["blood"].'</p>';
	echo '<p class="result"><label>Telefone:</label> '.$patientData["phone"].'</p>';
	echo '<p class="result"><label>Nascimento:</label> '.$patientData["birthday"].'</p>';
	echo '<p class="result"><label>E-Mail:</label> '.$patientData["email"].'</p>';
	echo "</div><div class='right50'>";
	echo '<p class="result"><label>Alergias:</label> '.$patientData["alergic"].'</p>';
	echo '<p class="result"><label>Plano de Saúde:</label> '.$patientData["healthPlan"].'</p>';
	echo '<p class="result" style="text-align: justify;"><label>Prontuário:<br/></label> '.$patientData["prontuario"].'</p>';
	echo "</div>";
?>