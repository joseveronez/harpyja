<?php 
	session_start();
	$dominio = $_SERVER['HTTP_HOST'];

    $caminhoSite = 'http://'.$dominio.'/harpyja_/cms';
    $caminhoFisico = getcwd();

	define('caminhoSite', $caminhoSite);
	define('caminhoFisico', $caminhoFisico);
	define('bancoDeDados', 'harpyja');
	define('logoEmpresa', caminhoSite . '/images/logo/logo-empresa.png');
	
	$title = 'CMS';
	define('title', 'CMS ');
?>