<!-- Menu lateral // href do link será igual a ID da div com conteúdo -->
<!-- Para começar com uma certa aba aberta, basta colocar a class active na Li chamada e na Div do conteudo -->

<?php $nomeDoCurso="BNDES Administração" ?>

<div class="slave column">
	<ul class="nav">
		<li><a <?php echo('href="curso.php?curso='.$_GET['curso'].'"') ?>><span class="icon-arrow-c3"></span>Voltar para página do curso</a></li>
	</ul>
</div>



<div class="master column detalhesCurso">
	<div class="tab-content">
		
   <div class="tab-pane active" id="inscreva-se">
     <h3>Mensagem enviada com sucesso.</h3>
     <p><strong class="tit">Prepare-se com os melhores!</strong><br />
       Nossa equipe entrará em contato passando mais informações sobre o Curso PREPARATÓRIO PARA O TESTE ANPAD.<br />
       <br />
       O C3 Concursos agradece a sua inscrição.
     </p>
   </div>
 </div>
</div>