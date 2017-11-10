<style type="text/css">
    input[type="text"].form-control, input[type="email"].form-control, textarea.form-control { border-radius: 0; border: 1px solid #444142; }
    input[type="email"].form-control.email { width: 100% !important; }
    button[type="submit"] { border-radius: 0; background: transparent; color: #444142; border: 1px solid #444142; }
    button[type="submit"]:hover { background: #444142; color: #ffffff; border: 1px solid #444142; }

    .bg-cinza-alternativo { background: #d9d9d9 }

    @media screen and (min-width: 768px) {
        footer .bloco-logo { margin-top: 42px }
        footer .bloco-links { margin-top: 50px }
        footer .bloco-formulario { margin-top: 46px }
        footer .bloco-mapa { margin-top: 50px; margin-bottom: 45px }
        footer .bloco-logo .conteudo { position: absolute; top: 50%; -ms-transform: translateY(-50%); -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); transform: translateY(-50%); }
    }
    @media screen and (min-width: 991px) {
        input[type="email"].form-control { width: 95% }
    }

    @media screen and (max-width: 767px) {
        footer .bloco-logo { margin-top: 40px; margin-bottom: 40px }
        footer .bloco-links { margin-bottom: 40px }
        footer .bloco-formulario { margin-bottom: 40px }
        footer .bloco-mapa { margin-bottom: 40px }
        footer .bloco-mapa iframe { width: 100%; }

        .mobile-zero { padding: 0; }
    }
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<footer>
    <?php if($pagina_atual != "contato") { ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-cinza-footer">
        <div class="container Relative padding-mobile">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bloco-logo mobile-zero">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginT3p">
                    <h4 class="size16" style="margin-top: 0px;">ACOMPANHE A HARPYJA</h4>
                    <hr class="hrTitleFull hrPadrao">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                    <h6 class="MarginT2p MarginB4p">Fique por dentro de novas avaliações e dicas</h6>
                    
                    <form action="" class="form-horizontal">
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
                        <input type="email" class="form-control email" name="email" placeholder="Digite seu e-mail*"><br>
                      </div>
                      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
                        <button type="submit" class="btn btn-default btn-assinar">Assinar</button>
                      </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bloco-formulario mobile-zero">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-menu-footer">
                   <div class="text-center size18">
                       <h5><a href="<?= RAIZSITE ?>" class="link-default preto-fonte">Home</a></h5>
                       <hr class="hrTitleFull hrPadrao">
                       <h5><a href="<?= RAIZSITE ?>/avaliacoes" class="link-default preto-fonte">Avaliações</a></h5>
                       <hr class="hrTitleFull hrPadrao">
                       <h5><a href="<?= RAIZSITE ?>/sobre" class="link-default preto-fonte">Sobre</a></h5>
                       <hr class="hrTitleFull hrPadrao">
                       <h5><a href="<?= RAIZSITE ?>/contato" class="link-default preto-fonte">Contato</a></h5>
                   </div>
                </div>
            </div>       
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bloco-mapa mobile-zero">
                <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="135" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook"></a></blockquote></div>
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-cinza-alternativo">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
                <h6><a href="http://www.comberweb.com.br" class="link-default preto-fonte" target="_blank">COMBERWEB.COM.BR</a></h6>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function() {
        
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
</script>