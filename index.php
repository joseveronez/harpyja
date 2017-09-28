<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);
	include('config.php');

	$front_controller = Front_Controller::getInstance();
	$front_controller->trataRequisicao();
?>