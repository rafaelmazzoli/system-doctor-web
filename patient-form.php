<h2 id="content-title">Formulário para Pacientes</h2><br/><br/>
<table id="form">
	<form method="POST" action="patient-validate.php">
		<tr>
			<td colspan="2">
				<input id="name" type="text" name="name" title="Insira o Nome Completo do Paciente" autofocus="autofocus" placeholder="Nome do Paciente..." maxlength="30" size="46" required>
			</td>
		</tr>
		<tr>
			<td>
				<input id="cpf" type="text" name="cpf" title="Insira os 11 dígitos do CPF do Paciente" maxlength="11" size="20" placeholder="CPF do Paciente..." required>
			</td>
			<td>
				<input id="phone" type="tel" name="phone" title="Insira um Telephone de Contato do Paciente" placeholder="Telefone do Paciente..." required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				Data de Nascimento: 
				<input id="date" type="date" name="birthday" title="Insira a Data de Nascimento do Paciente" placeholder="Data de Nascimento do Paciente..." required>
			</td>
		</tr>
		<tr>
			<td>
				Sangue: 
				<select  id="blood" name="blood" required>
					<optgroup label="RH Positivo">
						<option value="O+">O+</option>
						<option value="A+">A+</option>
						<option value="B+">B+</option>
						<option value="AB+">AB+</option>
					</optgroup>
					<optgroup label="RH Negativo">
						<option value="O-">O-</option>
						<option value="A-">A-</option>
						<option value="B-">B-</option>
						<option value="AB-">AB-</option>
					</optgroup>
					<optgroup label="Não Informado">
						<option value="" selected>Não Sabe</option>
					</optgroup>
				</select>
			</td>
			<td>
				<input id="email" type="email" name="email" title="Insira um E-mail de Contato do Paciente" placeholder="E-Mail do Paciente...">
			</td>
		</tr>
		<tr>
			<td>
				<input id="health-plans" type="text" name="health-plans" title="Plano de Saúde do Paciente" placeholder="Plano de Saúde...">
			</td>
			<td>
				<input id="alergics" type="text" name="alergics" title="Alergias do Paciente" placeholder="Alergias do Paciente...">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea id="prontuario" name="prontuario" cols="49" rows="6" placeholder="Prontuário Médico..."></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" id="update" value="Incluir / Atualizar">
			</td>
		</tr>
	</form>
</table>