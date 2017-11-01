<?php
require 'Controller.php';
// require caminhoFisico . '/includes/Bcrypt.php';

class TesteController extends Controller {
	public function teste() {
		$login = "Um teste de or '1='1;";
		$resultado = preg_replace('/[^[:alpha:]_]/', '',$login);
		echo $resultado;		
	}
}

?>