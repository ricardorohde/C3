<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>C3 Concursos - <?php echo($title) ?> | Centro de Capacitação para Concursos</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="publisher" content="LV - Agência Interativa" />
	<meta name="copyright" content="C3 Concursos | Centro de Capacitação para Concursos" />
	
    <meta name="description" content="C3 Concursos | Centro de Capacitação para Concursos: Cursos preparatórios de qualidade comprovada que levam você de encontro ao seu futuro profissional!" />
	
    <meta name="keywords" content="concursos públicos, cursos preparatórios, Preparatório Concurso, Centro de Capacitação" />
	
	<meta name="msvalidate.01" content="971BEB2374D709A5846E5B177485E199" />
	
	<meta name="revisit-after" content="1 day" />
    <meta name="googlebot" content="nosnippet" />
    <meta name="robots" content="index, follow" />
	
	<!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="css/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
    <link href="css/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    
    <link rel="shortcut icon" href="http://www.c3concursos.com.br/favicon.png" type="image/png" />
    
    <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-44985008-1']);
	  _gaq.push(['_setDomainName', 'c3concursos.com.br']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
    
    <script type="text/javascript">
	function slide1(){
	document.getElementById('id').src="http://c3concursos.com.br/img/banner-desconto.png";
	setTimeout("slide2()", 6000)
	document.getElementById('aId').href="#"
	}
	 
	function slide2(){
	document.getElementById('id').src="http://c3concursos.com.br/img/banner-professor.png";
	setTimeout("slide3()", 6000)
	document.getElementById('aId').href="http://c3concursos.com.br/img/entrevista.jpg"
	document.getElementById('aId').target="_blank"
	}
	 
	function slide3(){
	document.getElementById('id').src="http://c3concursos.com.br/img/banner-metodos.png";
	setTimeout("slide1()", 6000)
	document.getElementById('aId').href="#"
	}
	</script>
    
</head>
<?php echo('<body class="'. $classPage .'" onLoad="slide1()">') ?>
<?php include ('inc/links.php'); ?>
	<div class="container">
		<div class="navbar">
			<div class="navbar-inner">
				<ul class="nav">
					<li><a href="index.php" title="Acessar"><span class="icon-arrow-c3"></span>Página Inicial</a></li>
					<li><a <?php echo('href="'.$linkFaleConosco.'"') ?> title="Acessar" <?php if($paginaLink == $linkFaleConosco) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Fale Conosco</a></li>
					<li><a <?php echo('href="'.$linkConvenios.'"') ?> title="Acessar" <?php if($paginaLink == $linkConvenios) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Convênios e Descontos</a></li>
					<li><a <?php echo('href="'.$linkComoChegar.'"') ?> title="Acessar" <?php if($paginaLink == $linkComoChegar) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Como Chegar</a></li>
					<li><a <?php echo('href="'.$linkInstalacoes.'"') ?> title="Acessar" <?php if($paginaLink == $linkInstalacoes) {echo 'class="active"';} ?>><span class="icon-arrow-c3"></span>Instalações</a> </li>
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

	