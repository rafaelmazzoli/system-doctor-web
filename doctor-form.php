<h2 id="content-title">Cadastrar Novo Médico</h2>
<br/><br/><br/><br/><br/>
<table id="form">
	<form method="POST" action="doctor-validate.php">
		<tr>
			<td colspan="2">
				<input id="name-doctor" type="text" name="name-doctor" title="Insira o Nome Completo do Médico" autofocus="autofocus" placeholder="Nome Completo do Médico..." maxlength="30" size="46" required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input id="cpf" type="text" name="cpf" title="Insira os 11 dígitos do CPF do Médico" pattern=".{11}" maxlength="11" size="20" placeholder="CPF do Médico..." required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input id="name" type="text" name="name" title="Insira o Nome de Usuário do Médico" autofocus="autofocus" placeholder="Nome de Usuário do Médico..." maxlength="30" size="40" required>
			</td>
		</tr>
		<tr>
			<td>
				<input id="password-one" type="password" name="password-one" title="Insira uma Senha de no mínimo 6 dígitos, contendo Números e Letras" maxlength="15" pattern="(?=.*\d)(?=.*[a-z]).{6,}" size="20" placeholder="Senha..." required>
			</td>
			<td>
				<input id="password-two" type="password" name="password-two" title="Confirme a Senha digita no Campo Anterior" maxlength="15" pattern="(?=.*\d)(?=.*[a-z]).{6,}" size="20" placeholder="Confirmar Senha..." required>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" id="update" value="Cadastrar">
			</td>
		</tr>
	</form>
</table>