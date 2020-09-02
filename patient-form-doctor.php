<h2 id="content-title">Atualizar Prontuário</h2><br/><br/>
<table id="form">
	<form method="POST" action="patient-prontuario.php">
		<tr>
			<td colspan="2">
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
		</tr>
		<tr>
			<td colspan="2">
				<textarea id="prontuario" name="prontuario" cols="49" rows="13" placeholder="Prontuário Médico..."></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" id="update" value="Atualizar">
			</td>
		</tr>
	</form>
</table>