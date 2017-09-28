<?php
	$server = $_SERVER['HTTP_HOST'];

	if($server == "localhost:8080") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/harpyja";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].":8080/harpyja";
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].":8080/plugins/";
	} else if($server == "localhost") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT'].'/harpyja';
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/harpyja';
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].'/plugins/';
	} else if($server == "comberweb.com.br") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/projetos/harpyja";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/projetos/harpyja';
		$caminho_plugins = "http://www.".$_SERVER['SERVER_NAME'].'/projetos/plugins/';
	}

	define("RAIZ", $caminho_raiz);
	define("RAIZSITE", $caminho_site);
	define("VIEWS", RAIZ.'/views/');
	define("COMPONENTES", VIEWS.'/componentes/');
	define("LAYOUTS", VIEWS.'/layouts/');
	define("IMAGENS", RAIZSITE.'/imagens/');
	define("CLASSES", RAIZ.'/class/');
	define("STYLES", RAIZSITE.'/css/');
	define("SCRIPTS", RAIZSITE.'/js/');
	define("PLUGINS", $caminho_plugins);

	global $urlArr;

	if($server == "localhost" || $server == "localhost:8080") {
		$urlArr = explode("/", trim($_SERVER['REQUEST_URI'],'/'));
		
		if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME']=='127.0.0.1' || $urlArr[0] == 'harpyja') {
		    array_shift($urlArr);
		}
	} else if($server == "comberweb.com.br") {
		$urlArr = explode("/", $_SERVER['REQUEST_URI']);

		if($_SERVER['SERVER_NAME'] == 'localhost' || $_SERVER['SERVER_NAME']=='127.0.0.1' || $urlArr[0] == '') {
		    array_shift($urlArr);
		}

		if($urlArr[0]=='projetos' && $urlArr[1]=='harpyja'){
		    array_shift($urlArr);
		    array_shift($urlArr);
		}
	}

	include_once CLASSES.'Autoloader.class.php';
	Autoloader::init();
?>