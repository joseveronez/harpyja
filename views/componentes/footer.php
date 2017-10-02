<footer class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="imagens/Harpyja-logo.png" class="img-responsive" >
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
            <h3>Lorem ipsum</h3>
            <h5>Lorem ipsum</h5>
            <h5>Lorem ipsum</h5>
            <h5>Lorem ipsum</h5>
            <h5>Lorem ipsum</h5>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
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
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
            <img src="imagens/comberweb_logo.png" class="img-responsive" style="margin: 0 auto;" >
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