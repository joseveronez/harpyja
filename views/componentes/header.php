<div class="bg-bege menu-primario">
	<div class="container header-bloco-1">
		<a class="link-default" href="<?= RAIZSITE ?>/atendimento">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-8 atendimento <?= $pagina_atual == "atendimento" ? 'active' : '' ?>">
				<span class="Rye Uppercase margin-zero bordered">Horários de atendimento</span>
			</div>
		</a>
		<div class="col-lg-6 col-md-6 col-sm-2 hidden-xs">&nbsp;</div>
		<div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 redes-sociais">
			<div class="pull-right">
				<a href="<?= RAIZSITE ?>/agenda" class="link-default link-agenda <?= $pagina_atual == "agenda" ? 'active' : '' ?>">
					<div class="esquerda <?= $pagina_atual == "agenda" ? 'active' : '' ?>"></div>
				</a>
				<img src="<?= RAIZSITE ?>/imagens/botao-programacao.png" class="hidden-xs img-programacao <?= $pagina_atual == "agenda" ? 'active' : '' ?>">

				<a href="https://www.instagram.com/distrito_1340/" class="link-default" target="_blank">
					<div class="instagram" style="height: 24px; width: 24px; background-size: 100% 100%; position: absolute; right: 25px"></div>
				</a>
				<a href="https://www.facebook.com/distrito1340/" class="link-default" target="_blank">
					<div class="facebook" style="height: 24px; width: 24px; background-size: 100% 100%; position: absolute;"></div>
				</a>
			</div>
		</div>
		<a href="<?= RAIZSITE ?>" class="link-default">
			<img class="logo-distrito img-responsive" src="<?= RAIZSITE ?>/imagens/distrito-logo.png">
		</a>
	</div>
</div>
<div class="menu-mobile-topo hidden-lg hidden-md hidden-sm">
	<div class="container">
		<div class="col-xs-12 padding-zero menu-mobile-chamada">
			<div class="col-xs-6">&nbsp;</div>
			<div class="col-xs-6">
				<p class="Rye Uppercase margin-zero bege-fonte">Menu</p>
			</div>

			<div id="nav-icon1">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
</div>
<div class="menu-mobile-rodape hidden-topo hidden-lg hidden-md hidden-sm">
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 bg-branco menu-mobile-li">
		<div class="container">
			<a href="<?= RAIZSITE ?>/sobre" class="link-default preto-fonte Uppercase"><p class="Teko-Medium margin-zero home-h2">O distrito</p></a>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 bg-branco menu-mobile-li">
		<div class="container" onClick="showsubmenucustomizacao()">
			<div class="col-xs-10 padding-zero">
				<p class="Teko-Medium preto-fonte Uppercase margin-zero home-h2">Motos e customização</p>
			</div>
			<div class="col-xs-2 padding-zero mobile-seta customizacao">
				<center>
					<img src="<?= RAIZSITE ?>/imagens/menu-mobile-seta.png">
				</center>
			</div>
		</div>

		<div class="container submenu-mobile-conteudo submenus-customizacao">
			<a class="link-default" href="<?= RAIZSITE ?>/loja/butcher-brothers"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Butcher Brothers</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/club-1903-motorcycles"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Club 1903 Motorcycles</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/fourwash"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Fourwash</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/legend-motors"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Legend Motors</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/qg-custom"><p class="Roboto Regular preto-fonte Uppercase margin-zero">QG Customs</p></a>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 bg-branco menu-mobile-li">
		<div class="container" onClick="showsubmenuestilo()">
			<div class="col-xs-10 padding-zero">
				<p class="Teko-Medium preto-fonte Uppercase margin-zero home-h2">Estilo</p>
			</div>
			<div class="col-xs-2 padding-zero mobile-seta estilo">
				<center>
					<img src="<?= RAIZSITE ?>/imagens/menu-mobile-seta.png">
				</center>
			</div>
		</div>

		<div class="container submenu-mobile-conteudo submenus-estilo">
			<a class="link-default" href="<?= RAIZSITE ?>/loja/johnny-navalha"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Johnny Navalha</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/junk"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Junk Garage</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/hard-ink-tattoo"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Hard Ink Tattoo</p></a>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 bg-branco menu-mobile-li">
		<div class="container" onClick="showsubmenugastronomia()">
			<div class="col-xs-10 padding-zero">
				<p class="Teko-Medium preto-fonte Uppercase margin-zero home-h2">Gastronomia e diversão</p>
			</div>
			<div class="col-xs-2 padding-zero mobile-seta gastronomia">
				<center>
					<img src="<?= RAIZSITE ?>/imagens/menu-mobile-seta.png">
				</center>
			</div>
		</div>

		<div class="container submenu-mobile-conteudo submenus-gastronomia">
			<a class="link-default" href="<?= RAIZSITE ?>/loja/buffalo-bar"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Buffalo Bar</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/beer-garage"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Beer Garage</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/jpl-burguers"><p class="Roboto Regular preto-fonte Uppercase margin-zero">JPL Burguers</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/mr-mutz"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Mr. Mutz</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/sweet-road"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Sweet road</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/taj-sushi"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Taj Sushi</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/taj-pharmacy"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Taj Pharmacy</p></a>
			<a class="link-default" href="<?= RAIZSITE ?>/loja/wine-1340"><p class="Roboto Regular preto-fonte Uppercase margin-zero">Wine 1340</p></a>
		</div>
	</div>
	<div class="hidden-lg hidden-md hidden-sm col-xs-12 bg-branco menu-mobile-li">
		<div class="container">
			<a href="<?= RAIZSITE ?>/contato" class="link-default preto-fonte Uppercase"><p class="Teko-Medium margin-zero home-h2">Contato</p></a>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
		<ul class="menu-fixo Roboto">
			<li>
				<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
					<div class="li-detalhe li-hom"></div>
				</div>
				<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
					<a href="<?= RAIZSITE ?>" class="link-default size13 Uppercase li-hom">Home</a>
				</div>
			</li>
			
			<li>
				<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
					<div class="li-detalhe li-dis <?= $pagina_atual == "sobre" ? 'menu-desktop-active' : '' ?>"></div>
				</div>
				<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
					<a href="<?= RAIZSITE ?>/sobre" class="link-default size13 Uppercase li-dis <?= $pagina_atual == "sobre" ? 'menu-desktop-active' : '' ?>">O Distrito</a>
				</div>
			</li>

			<div class="li-plus">
				<li>
					<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h30">
						<div class="li-detalhe li-cu"></div>
					</div>
					<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height15">
						<a class="link-default li-cu size13 Uppercase pointer" onClick="showsubmenucustomizacaodesktop()">Motos e Customização</a>
					</div>
				</li>

				<div class="li-sub-menu submenus-customizacao-desktop">
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h27">
							<div class="li-detalhe sub-cu-bu"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a class="link-default size11 Uppercase sub-cu-bu" href="<?= RAIZSITE ?>/loja/butcher-brothers">Butcher<br>Brothers</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h27">
							<div class="li-detalhe sub-cu-cl"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a class="link-default size11 Uppercase sub-cu-cl" href="<?= RAIZSITE ?>/loja/club-1903-motorcycles">Club 1903<br>Motorcycles</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
							<div class="li-detalhe sub-cu-fo"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
							<a class="link-default size11 Uppercase sub-cu-fo" href="<?= RAIZSITE ?>/loja/fourwash">Four Wash</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
							<div class="li-detalhe sub-cu-le"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
							<a class="link-default size11 Uppercase sub-cu-le" href="<?= RAIZSITE ?>/loja/legend-motors">Legend Motors</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
							<div class="li-detalhe sub-cu-qg"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
							<a class="link-default size11 Uppercase sub-cu-qg" href="<?= RAIZSITE ?>/loja/qg-custom">QG Customs</a>
						</div>
					</li>
				</div>
			</div>

			<div class="li-plus">
				<li>
					<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
						<div class="li-detalhe li-es"></div>
					</div>
					<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
						<a class="link-default li-es size13 Uppercase pointer" onClick="showsubmenuestilodesktop()">Estilo</a>
					</div>
				</li>

				<div class="li-sub-menu submenus-estilo-desktop">
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h27">
							<div class="li-detalhe sub-es-jn"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a class="link-default size11 Uppercase atalho sub-es-jn" href="<?= RAIZSITE ?>/loja/johnny-navalha">Johnny<br>Navalha</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h27">
							<div class="li-detalhe sub-es-jg"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a class="link-default size11 Uppercase atalho sub-es-jg" href="<?= RAIZSITE ?>/loja/junk">Junk<br>Garage</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h27">
							<div class="li-detalhe sub-es-hit"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a class="link-default size11 Uppercase atalho sub-es-hit" href="<?= RAIZSITE ?>/loja/hard-ink-tattoo">Hard Ink<br>Tattoo</a>
						</div>
					</li>
				</div>
			</div>

			<div class="li-plus">
				<li>
					<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h30">
						<div class="li-detalhe li-di"></div>
					</div>
					<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height15">
						<a class="link-default li-di size13 Uppercase pointer" onClick="showsubmenugastronomiadesktop()">Diversão e Gastronomia</a>
					</div>
				</li>

				<div class="li-sub-menu submenus-gastronomia-desktop">
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-bb"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/buffalo-bar" class="link-default size11 Uppercase sub-dg-bb">Buffalo Bar</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-bg"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/beer-garage" class="link-default size11 Uppercase sub-dg-bg">Beer Garage</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-jb"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/jpl-burguers" class="link-default size11 Uppercase sub-dg-jb">JPL Burguers</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-mm"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/mr-mutz" class="link-default size11 Uppercase sub-dg-mm">Mr. Mutz</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-sr"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/sweet-road" class="link-default size11 Uppercase sub-dg-sr">Sweet Road</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-ts"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/taj-sushi" class="link-default size11 Uppercase sub-dg-ts">Taj Sushi</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-tp"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/taj-pharmacy" class="link-default size11 Uppercase sub-dg-tp">Taj Pharmacy</a>
						</div>
					</li>
					<li>
						<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h13">
							<div class="li-detalhe sub-dg-wn"></div>
						</div>
						<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link line-height13">
							<a href="<?= RAIZSITE ?>/loja/wine-1340" class="link-default size11 Uppercase sub-dg-wn">Wine 1340</a>
						</div>
					</li>
				</div>
			</div>

			<li>
				<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs padding-zero h20">
					<div class="li-detalhe li-co <?= $pagina_atual == "contato" ? 'menu-desktop-active' : '' ?>"></div>
				</div>
				<div class="col-lg-10 col-md-10 com-sm-10 hidden-xs li-div-link">
					<a href="<?= RAIZSITE ?>/contato" class="link-default size13 Uppercase li-co <?= $pagina_atual == "contato" ? 'menu-desktop-active' : '' ?>">Contato</a>
				</div>
			</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$(".menu-mobile-rodape.hidden-topo").hide();

		$('#nav-icon1').click(function(){
			if($(".menu-mobile-rodape.hidden-topo").is(':visible')) {
				$(this).removeClass('open');
				$(".menu-mobile-rodape.hidden-topo").hide();
			} else {
				$(".menu-mobile-rodape.hidden-topo").show();
				$(this).addClass('open');
			}
		});
	});

	function showsubmenucustomizacaodesktop() {
		if($(".li-sub-menu.submenus-customizacao-desktop").is(':visible')) {
			$(".li-sub-menu.submenus-customizacao-desktop").hide();
			$(".li-cu").removeClass("menu-desktop-active");
		} else {
			$(".li-cu").addClass("menu-desktop-active");
			$(".li-sub-menu.submenus-customizacao-desktop").show();
		}
	}
	function showsubmenuestilodesktop() {
		if($(".li-sub-menu.submenus-estilo-desktop").is(':visible')) {
			$(".li-sub-menu.submenus-estilo-desktop").hide();
			$(".li-es").removeClass("menu-desktop-active");
		} else {
			$(".li-es").addClass("menu-desktop-active");
			$(".li-sub-menu.submenus-estilo-desktop").show();
		}
	}
	function showsubmenugastronomiadesktop() {
		if($(".li-sub-menu.submenus-gastronomia-desktop").is(':visible')) {
			$(".li-sub-menu.submenus-gastronomia-desktop").hide();
			$(".li-di").removeClass("menu-desktop-active");
		} else {
			$(".li-di").addClass("menu-desktop-active");
			$(".li-sub-menu.submenus-gastronomia-desktop").show();
		}
	}

	<?php
		if($pagina_atual != "agenda") {
	?>
	$(".link-agenda").mouseover(function() {
		$(".img-programacao").addClass("active");
	}).mouseleave(function() {
		$(".img-programacao").removeClass("active");
	});
	<?php
		}
	?>
</script>