<style type="text/css">
	@font-face { font-family: 'festival'; src: url('<?= RAIZSITE ?>/fonts/FestivalBudayaXXXI.otf') format('OpenType'); }
	@font-face { font-family: 'rye'; src: url('<?= RAIZSITE ?>/fonts/Rye-Regular.ttf') format('TrueType'); }
	@font-face { font-family: 'tekoLight'; src: url('<?= RAIZSITE ?>/fonts/Teko-Light.ttf') format('TrueType'); }
	@font-face { font-family: 'tekoRegular'; src: url('<?= RAIZSITE ?>/fonts/Teko-Regular.ttf') format('TrueType'); }
	@font-face { font-family: 'tekoMedium'; src: url('<?= RAIZSITE ?>/fonts/Teko-Medium.ttf') format('TrueType'); }
	@media screen and (min-width: 768px) {
		footer { background: url('<?= RAIZSITE ?>/imagens/background.jpg'); background-size: cover; background-position: center center }
	}
</style>
<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
	<div class="menu-mobile-rodape hidden-lg hidden-md hidden-sm">
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
	<div class="container bloco-contato">
		<div class="col-lg-12 col-md-12 col-sm-12 hidden-xs padding-zero contato-titulo">
			<?php
				if($pagina_atual == "home") {
			?>
				<div style="position: absolute; width: 300px; height: 100px; margin-top: -85px" id="waypointContato"></div>
			<?php
				}
			?>

			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
			<div class="col-lg-10 col-md-10 col-sm-10 hidden-xs">
				<p class="branco-fonte Rye Uppercase letter-spacing1 home-titulo pull-right">Contato</p>
			</div>
			<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
		</div>

		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bloco-dados">
			<div class="col-lg-3 col-md-3 col-sm-3 hidden-xs">&nbsp;</div>
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 bloco-endereco">
				<a class="Roboto letter-spacing1 link-default telefone" href="tel:30495701"><span>41</span> 3049.5701</a>
				<p class="Roboto letter-spacing1 Uppercase margin-zero endereco">R. Maj. Heitor Guimarães, 1130 Seminário, Curitiba - PR</p>
				<div class="google-maps hidden-xs">
					<iframe id="iframeMaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.9028354957563!2d-49.30990808451246!3d-25.441511783783266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce3c0ecbc44c9%3A0xa3f584b21d0926ae!2sR.+Maj.+Heitor+Guimar%C3%A3es%2C+1130+-+Semin%C3%A1rio%2C+Curitiba+-+PR!5e0!3m2!1spt-BR!2sbr!4v1502213182543"></iframe>
				</div>
			</div>
			<div class="col-lg-1 col-md-1 hidden-sm hidden-xs">&nbsp;</div>
			<div class="col-lg-5 col-md-5 col-sm-5 hidden-xs">
				<form action="" class="form-horizontal Roboto Regular" id="formulario">
					<input type="text" class="form-control branco-fonte size13" name="nome" placeholder="NOME *" required><br>

					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-zero">
						<input type="email" class="form-control branco-fonte size13" name="email" placeholder="E-MAIL *" required><br>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-zero">
						<input type="text" class="form-control branco-fonte size13" name="telefone" placeholder="TELEFONE *" required><br>
					</div>

					<input type="text" class="form-control branco-fonte size13" name="assunto" placeholder="ASSUNTO *" required><br>
					<textarea class="form-control branco-fonte size13" name="mensagem" rows="4" cols="3" placeholder="MENSAGEM *"></textarea><br>

					<button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
				</form>
			</div>
		</div>
	</div>
	<div class="bg-dark">
		<div class="container bloco-assinatura">
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
				<p class="copyright branco-fonte size12 Roboto Regular letter-spacing1 margin-zero">© 2017  DISTRITO 1340 • Todos os direitos reservados</p>
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 assinatura">
				<a href="http://www.pepperscriacao.com.br" target="_blank">
					<img class="assinatura" src="<?= RAIZSITE ?>/imagens/assinatura-peppers.png">
				</a>
			</div>
		</div>
	</div>
</footer>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iframeMaps').addClass('scrolloff');
	    $('.google-maps').on('click', function () {
	        $('#iframeMaps').removeClass('scrolloff');
	    });

	    $(".google-maps").mouseleave(function () {
	        $('#iframeMaps').addClass('scrolloff');
	    });
	});

	function Trim() {
		var get_value = document.getElementById('telefone');
		var campo_temp;
		campo_temp = get_value.value.substring(5,6);

		if(campo_temp == "9" || campo_temp == "8") {
			/* console.log("mascara mobile"); */
			$("#telefone").attr("onKeyPress", "MascaraCelular(formulario.telefone);");
			$("#telefone").attr("onBlur", "ValidaCelular(formulario.telefone);");
			$("#telefone").attr("maxlength", "16");
		} else {
			/* console.log("mascara telefone"); */
			$("#telefone").attr("onKeyPress", "MascaraTelefone(formulario.telefone);");
			$("#telefone").attr("onBlur", "ValidaTelefone(formulario.telefone);");
			$("#telefone").attr("maxlength", "14");
		}
	}

	function showsubmenucustomizacao() {
		if($(".submenu-mobile-conteudo.submenus-customizacao").is(':visible')) {
			$(".mobile-seta.customizacao img").removeClass("rotate");
			$(".submenu-mobile-conteudo.submenus-customizacao").hide();
		} else {
			$(".submenu-mobile-conteudo.submenus-customizacao").show();
			$(".mobile-seta.customizacao img").addClass("rotate");
		}
	}
	function showsubmenuestilo() {
		if($(".submenu-mobile-conteudo.submenus-estilo").is(':visible')) {
			$(".mobile-seta.estilo img").removeClass("rotate");
			$(".submenu-mobile-conteudo.submenus-estilo").hide();
		} else {
			$(".submenu-mobile-conteudo.submenus-estilo").show();
			$(".mobile-seta.estilo img").addClass("rotate");
		}
	}
	function showsubmenugastronomia() {
		if($(".submenu-mobile-conteudo.submenus-gastronomia").is(':visible')) {
			$(".mobile-seta.gastronomia img").removeClass("rotate");
			$(".submenu-mobile-conteudo.submenus-gastronomia").hide();
		} else {
			$(".submenu-mobile-conteudo.submenus-gastronomia").show();
			$(".mobile-seta.gastronomia img").addClass("rotate");
		}
	}

	$('a.atalho[href*="#"]:not([href="#"])').click(function() {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				$('html, body').animate({
					scrollTop: target.offset().top - 0
				}, 1000);
				return false;
			}
		}
	});

	;(function($) {
		$.fn.letterDrop = function() {
		  	// Chainability
			return this.each( function() {

			  	var obj = $( this );
			  
			  	var drop = {
				    arr : obj.text().split( '' ),
				    
					range : {
						min : 1,
						max : 9
					},
				    
					styles : function() {
						var dropDelays = '\n', addCSS;

						for ( i = this.range.min; i <= this.range.max; i++ ) {
							dropDelays += '.ld' + i + ' { animation-delay: 1.' + i + 's; }\n';  
						}

						addCSS = $( '<style>' + dropDelays + '</style>' );
						$( 'head' ).append( addCSS );
					},
				    
					main : function() {
						var dp = 0;
						obj.text( '' );

						$.each( this.arr, function( index, value ) {
							dp = dp.randomInt( drop.range.min, drop.range.max );
							
							if (value === '<br>') {
								value = '<br>';
							}

							obj.append( '<span class="letterDrop ld' + dp + '">' + value + '</span>' );
						});
					}
				};

				Number.prototype.randomInt = function ( min, max ) {
					return Math.floor( Math.random() * ( max - min + 1 ) + min );
				};
		  
				// Create styles
				drop.styles();

				// Initialise
				drop.main();
			});
		};
	}(jQuery));

	// USAGE
	$('.efeito-texto').letterDrop();

	<?php
		if($pagina_atual == "home") {
	?>
	var waypoint4 = new Waypoint({
		element: document.getElementById('waypointContato'),
		handler: function(direction) {
			if(direction == "down") {
				/* ativa o menu de contato */
				$(".li-co").addClass("menu-desktop-active");
				/* ativa o menu de contato */
				/* desativa o menu de diversão e gastronomia */
				$(".li-di").removeClass("menu-desktop-active");
				$(".li-sub-menu.submenus-gastronomia-desktop").hide();
				$(".sub-dg-wn").removeClass("submenu-desktop-active");
				/* desativa o menu de diversão e gastronomia */
			} else {
				/* desativa o menu de contato */
				$(".li-co").removeClass("menu-desktop-active");
				/* desativa o menu de contato */
				/* ativa o menu de diversão e gastronomia */
				$(".li-sub-menu.submenus-gastronomia-desktop").show();
				$(".li-di").addClass("menu-desktop-active");
				/* ativa o menu de diversão e gastronomia */
			}
		}
	});
	<?php
		}
	?>
</script>