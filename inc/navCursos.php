<div class="container navCursos">
	<div class="dropdown">
		<ul class="nav">
			<li class="title">Nossos Cursos:</li>
			<li class="dropdown">        
				<a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="#" data-target="#"><span class="icon-arrow-c3"></span>Ministério das Relações Exteriores </a>
				<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
					<li role="presentation" <?php if($paginaLink == $linkCarreiraDiplomatica) {echo 'class="active"';} ?>>
						<a role="menuitem" tabindex="-1" <?php echo('href="'.$linkCarreiraDiplomatica.'" data-target="'.$linkCarreiraDiplomatica.'"') ?>>
							<span class="icon-arrow-c3"></span>
							Carreira diplomática
						</a>
					</li>
					<li role="presentation" class="divider"></li>
					<li role="presentation" <?php if($paginaLink == $linkOficialdaChancelaria) {echo 'class="active"';} ?>>
						<a role="menuitem" tabindex="-1" <?php echo('href="'.$linkOficialdaChancelaria.'" data-target="'.$linkOficialdaChancelaria.'"') ?>>
							<span class="icon-arrow-c3"></span>
							Oficial da Chancelaria
						</a>
					</li>
				</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="#" data-target="#"><span class="icon-arrow-c3"></span>Petrobras, BNDES e Fiscal </a>
				<ul id="menu2" class="dropdown-menu" role="menu" aria-labelledby="drop5">
					<li role="presentation" <?php if($paginaLink == $linkPetrobrasAdministracao) {echo 'class="active"';} ?>>
						<a role="menuitem" tabindex="-1" <?php echo('href="'.$linkPetrobrasAdministracao.'" data-target="'.$linkPetrobrasAdministracao.'"') ?>>
							<span class="icon-arrow-c3"></span>
							Petrobras (Administração)
						</a>
					</li>
					<li role="presentation" class="divider"></li>
					<li role="presentation" <?php if($paginaLink == $linkBNDESAdministracao) {echo 'class="active"';} ?>>
						<a role="menuitem" tabindex="-1" <?php echo('href="'.$linkBNDESAdministracao.'" data-target="'.$linkBNDESAdministracao.'"') ?>>
							<span class="icon-arrow-c3"></span>
							BNDES (Administração)
						</a>
					</li>
					<li role="presentation" class="divider"></li>
					<li role="presentation" <?php if($paginaLink == $linkFiscalICMS) {echo 'class="active"';} ?>>
						<a role="menuitem" tabindex="-1" <?php echo('href="'.$linkFiscalICMS.'" data-target="'.$linkFiscalICMS.'"') ?>>
							<span class="icon-arrow-c3"></span>
							Carreira Fiscal
					</a></li>
				</ul>
	    </li>
			<li <?php if($paginaLink == $linkTesteAnpad) {echo 'class="active"';} ?>>
				<a <?php echo('href="'.$linkTesteAnpad.'" data-target="'.$linkTesteAnpad.'"') ?>>
					<span class="icon-arrow-c3"></span>
					Teste ANPAD
				</a>
			</li>
		</ul>
	</div>
</div>