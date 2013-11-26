<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Centro de Capacitação para Concursos | C3 - <?php echo($title) ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
    
    <link rel="shortcut icon" href="http://www.c3concursos.com.br/favicon.png" type="image/png" />
    
</head>
<?php echo('<body class="'. $classPage .'">') ?>
<?php include ('inc/links.php'); ?>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li><a href="index.php" title="Acessar"><span class="icon-arrow-c3"></span>Página Inicial</a></li>
					<li><a <?php echo('href="'.$linkFaleConosco.'"') ?> title="Acessar" <?php if($paginaLink == $linkFaleConosco) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Fale Conosco</a></li>
					<li><a <?php echo('href="'.$linkConvenios.'"') ?> title="Acessar" <?php if($paginaLink == $linkConvenios) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Convênios e Descontos</a></li>
					<li><a <?php echo('href="'.$linkComoChegar.'"') ?> title="Acessar" <?php if($paginaLink == $linkComoChegar) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Como Chegar</a></li>
					<li><a href="#" title="Em breve"><span class="icon-arrow-c3"></span>Instalações</a></li>
					<!-- li><a <?php echo('href="'.$linkInstalacoes.'"') ?> title="Acessar" <?php if($paginaLink == $linkInstalacoes) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Instalações</a> </li -->
				</ul>
			</div>
			<div class="logo">
				<span class="text1">C3</span><span class="text2">centro de capacitação para concursos</span>
			</div>
			<div class="chamada">
				Cursos preparatórios que levam você de encontro ao seu futuro profissional
			</div>
		</div>
	</div>

	