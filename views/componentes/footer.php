<style type="text/css">
    input[type="text"].form-control, input[type="email"].form-control, textarea.form-control { border-radius: 0; border: 1px solid #444142; }
    button[type="submit"] { border-radius: 0; background: transparent; color: #444142; border: 1px solid #444142; }
    button[type="submit"]:hover { background: #444142; color: #ffffff; border: 1px solid #444142; }

    .bg-cinza-alternativo { background: #d9d9d9 }

    @media screen and (min-width: 768px) {
        footer .bloco-logo { height: 380px }
        .bloco-links { margin-top: 50px; }
        .bloco-formulario { margin-top: 50px; margin-bottom: 45px }
        footer img { position: absolute; top: 50%; -ms-transform: translateY(-50%); -webkit-transform: translateY(-50%); -moz-transform: translateY(-50%); -o-transform: translateY(-50%); transform: translateY(-50%); }
    }
    @media screen and (min-width: 991px) {
        input[type="email"].form-control { width: 95% }
    }

    @media screen and (max-width: 767px) {
        footer .bloco-logo { margin-top: 40px; margin-bottom: 40px }
        footer .bloco-links { margin-bottom: 40px }
        footer .bloco-formulario { margin-bottom: 40px }
    }
</style>
<footer>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-cinza-footer">
        <div class="container Relative">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bloco-logo">
                <a href="<?= RAIZSITE ?>"><img src="<?= RAIZSITE ?>/imagens/logo-sem-fundo.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bloco-links text-center">
                <h3 class="margin-zero">Lorem ipsum</h3>
                <h5>Lorem ipsum</h5>
                <h5>Lorem ipsum</h5>
                <h5>Lorem ipsum</h5>
                <h5>Lorem ipsum</h5>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 bloco-formulario">
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