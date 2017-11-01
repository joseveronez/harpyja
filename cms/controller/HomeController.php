<?php
require 'Controller.php';
require caminhoFisico . '/helper.php';

class HomeController extends Controller {
	public function index() {
		try {
			$this->renderView('home/home');
		} catch (Exception $e) {
			$this->renderViewUnique('/errors/errorServidor', $e);
		}
	}
}

?>