<?php 

$title = "Nossos Cursos";
$classPage = "curso";
include ('inc/header.php');



?>

<?php include ('inc/navCursos.php'); ?>

<div class="container content">
	<div class="secondRow masterSlave linksDetalhesCurso">
		<?php include ('inc/sucesso-'.$_GET['curso'].'.php'); ?>
	</div>
</div>

<?php include ('inc/footer.php'); ?>


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