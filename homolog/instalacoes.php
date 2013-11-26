<?php 
$title = "Fale Conosco";
$classPage = "fale-conosco";
include ('inc/header.php');
?>

<?php include ('inc/navCursos.php'); ?>

<div class="container content">
	<div class="secondRow masterSlave apoioHome">
		<h2 class="subTitBlue">Conheça as instalações do c3. Faça-nos uma visita.</h2>
		<div class="slave column">
			
		</div>
		<div class="master column">
			<table width="900" border="0" cellspacing="0" cellpadding="20">
              <tr>
                <td>
                <p style="width: 300px;font-size: 13px;">Situada em um espaço privilegiado no coração do Centro do Rio, o C3 Concursos está ao lado da estação Carioca do Metrô, da Av. Rio Branco e a menos de cinco minutos do Aeroporto Santos Dumont. Oferecemos salas multi-uso espaçosas e confortáveis, equipadas com modernos recursos audio-visuais e infra-estrutura tecnológica, incluindo conexão a internet.</p>
            	</td>
                <td><img src="http://c3concursos.com.br/img/Recepcao2.jpg" alt="Recepção" /></td>
                <td><img src="http://c3concursos.com.br/img/Recepcao.jpg" alt="Recepção" /></td>
              </tr>
              <tr>
                <td><img src="http://c3concursos.com.br/img/Hall.jpg" alt="Hall" /></td>
                <td><img src="http://c3concursos.com.br/img/Sala1.jpg" alt="Sala de Aula" /></td>
                <td><img src="http://c3concursos.com.br/img/Sala2.jpg" alt="Sala de Aula" /></td>
              </tr>
            </table>
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
