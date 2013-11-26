<?php 
$title = "Fale Conosco";
$classPage = "fale-conosco";
include ('inc/header.php');
?>

<?php include ('inc/navCursos.php'); ?>

<div class="container content">
	<div class="secondRow masterSlave apoioHome">
		<h2 class="subTitBlue">fale com o C3 - centro de capacitação para concursos</h2>
		<div class="slave column">
			<p>
				Para solicitar informações adicionais sobre um de nossos cursos, esclarecer dúvidas e enviar sugestões, preencha corretamente o formulário ao lado. <br />
			</p>
			<p>
				<strong>Nossos Telefones:</strong><br />
				21 3553-3631 / 3553-3486
			</p>
			<p>
				<strong>Endereço:</strong><br />
				Rua Sete de Setembro, 92 - 2º andar<br />
				Grupos 204 e 205 - Centro - Rio de Janeiro - RJ
			</p>
		</div>
		<div class="master column">
			<form action="inc/envia.php" method="POST">
				<div class="row">
					<div class="column" id="sprytextfield1">
						<label for="inputNome">Nome</label>
						<input type="text" name="inputNome" id="inputNome" class="inputTxt" />
						<span class="textfieldRequiredMsg">Digite seu nome</span>
					</div>
					<div class="column" id="sprytextfield2">
						<label for="inputEmail">Email</label>
						<input type="text" name="inputEmail" id="inputEmail" class="inputTxt" />
						<span class="textfieldRequiredMsg">Digite seu email</span>
					</div>
				</div>
				<div class="row single">
					<label for="inputEndereco">Endereço</label>
					<input type="text" name="inputEndereco" id="inputEndereco" class="inputTxt" />
				</div>
				<div class="row">
					<div class="column" id="spryselect4">
						<label for="inputEstado">Estado</label>
						<select id="inputEstado" name="inputEstado">
							<option selected="" value="">Selecione o Estado (UF)</option>
							<option value="Acre">Acre</option>
							<option value="Alagoas">Alagoas</option>
							<option value="Amapá">Amapá</option>
							<option value="Amazonas">Amazonas</option>
							<option value="Bahia">Bahia</option>
							<option value="Ceará">Ceará</option>
							<option value="Distrito Federal">Distrito Federal</option>
							<option value="Espírito Santo">Espírito Santo</option>
							<option value="Goiás">Goiás</option>
							<option value="Maranhão">Maranhão</option>
							<option value="Mato Grosso">Mato Grosso</option>
							<option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
							<option value="Minas Gerais">Minas Gerais</option>
							<option value="Pará">Pará</option>
							<option value="Paraíba">Paraíba</option>
							<option value="Paraná">Paraná</option>
							<option value="Pernambuco">Pernambuco</option>
							<option value="Piauí">Piauí</option>
							<option value="Rio de Janeiro">Rio de Janeiro</option>
							<option value="Rio Grande do Sul">Rio Grande do Sul</option>
							<option value="Rio Grande do Norte">Rio Grande do Norte</option>
							<option value="Rondônia">Rondônia</option>
							<option value="Roraima">Roraima</option>
							<option value="Santa Catarina">Santa Catarina</option>
							<option value="São Paulo">São Paulo</option>
							<option value="Sergipe">Sergipe</option>
							<option value="Tocantins">Tocantins</option>
							<option value="Outro (Outro País)">Outro (Outro País)</option>
						</select>
						<span class="selectRequiredMsg">Escolha um estado</span>
					</div>
					<div class="column" id="sprytextfield5">
						<label for="inputCidade">Cidade</label>
						<input type="text" name="inputCidade" id="inputCidade" class="inputTxt" />
						<span class="textfieldRequiredMsg">Digite sua cidade</span>
					</div>
				</div>
				<div class="row">
					<div class="column" id="sprytextfield6">
						<label for="inputCEP">CEP <span>(apenas números)</span></label>
						<input type="text" name="inputCEP" id="inputCEP" class="inputTxt" />
						<span class="textfieldRequiredMsg">Digite seu cep</span>
					</div>
					<div class="column" id="sprytextfield7">
						<label for="inputTelefones">Telefone <span>(apenas números)</span></label>
						<input type="text" name="inputTelefones" id="inputTelefones" class="inputTxt" />
						<span class="textfieldRequiredMsg">Digite seu telefone</span>
					</div>
				</div>
				<div class="row single" id="sprytextarea8">
					<label for="inputMensagem">Mensagem</label>
					<textarea id="inputMensagem" name="inputMensagem"></textarea>
					<span class="textareaRequiredMsg">Digite sua mensagem</span>
				</div>
				<div class="row single">
				<input type="hidden" name="inputAssunto" id="inputAssunto" class="hidden" value="Contato Site - C3 Concursos" onclick="_gaq.push(['_trackEvent', 'C3 Concursos', 'Botão Clicado', 'Fale Conosco']);" />
					<input type="submit" value="Enviar" class="inputSubmit" />
				</div>
			</form>
		</div>
	</div>
</div>


<!-- Chama validação do formulário -->

<script type="text/javascript" src="js/SpryValidationTextField.js" language="javascript" ></script>
<script type="text/javascript" src="js/SpryValidationTextarea.js" language="javascript" ></script>
<script type="text/javascript" src="js/SpryValidationSelect.js" language="javascript" ></script>    

<script type="text/javascript">

	var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
	var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "email");
	var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");	
	var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
	var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
	var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
	var sprytextarea8 = new Spry.Widget.ValidationTextarea("sprytextarea8");

</script>

<?php include ('inc/footer.php'); ?>
