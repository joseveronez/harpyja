<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?= title ?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="<?= caminhoSite ?>/view/login/style.css">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" media="screen" href="<?= caminhoSite ?>/plugins/sweetalert/sweetalert.css">
		<script type="text/javascript" src="<?= caminhoSite ?>/plugins/sweetalert/sweetalert.min.js"></script>

		<style type="text/css">
			body,td,th {
				color: #FFFFFF;
			}
			body {
				background-color: #000000;
			}
		</style>
	</head>

	<body onLoad="Focus();">
		<center><img src="<?= caminhoSite ?>/images/logo/logo-empresa.png" class="img-responsive" style="padding-top:50px"></center>

		<div class="col-md-12">
        	<div class="col-md-4 col-md-offset-4">
        		<?php
        			if (!empty($_SESSION['senha'])) {
				?>
					<div class="alert alert-success">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Senha alterada!</strong> Sua senha foi alterada com sucesso!
					</div>
				<?php
					}
				?>
            	<?php
        			if (!empty($_SESSION['erroLogin'])) {
				?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Erro no Login!</strong> Usuário\Senha incorretos!
					</div>
				<?php
					}
				?>
				<form id="formLogin" action="<?= caminhoSite ?>/usuarios/faz_login" method="post">
					<div class="form-login">
						<h4>Faça seu login</h4>
						<input type="email" name="email" class="form-control input-sm chat-input" placeholder="E-mail" />
						</br>
						<input type="password" name="senha" class="form-control input-sm chat-input" placeholder="Senha" />
						</br>

						<a href="<?= caminhoSite ?>/usuarios/recuperar-senha">Esqueci minha senha</a><br />

						<div class="wrapper">
							<span class="group-btn">
								<button type="submit" class="btn btn-primary btn-md">Entrar <i class="fa fa-sign-in"></i></button>
							</span>
						</div>
					</div>
				</form>
            </div>
        </div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	</body>
</html>