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
