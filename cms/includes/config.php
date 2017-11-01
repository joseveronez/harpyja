<?php 
	session_start();
	$dominio = $_SERVER['HTTP_HOST'];

    $caminhoSite = 'http://'.$dominio.'/harpyja/cms';
    $caminhoFisico = getcwd();

	define('caminhoSite', $caminhoSite);
	define('caminhoFisico', $caminhoFisico);
	define('bancoDeDados', 'harpyja');
	define('logoEmpresa', caminhoSite . '/images/logo/logo-empresa.png');
	
	$title = 'CMS';
	define('title', 'CMS ');
?>
<?php 
	session_start();

	$server = $_SERVER['HTTP_HOST'];

	if($server == "localhost:8080") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/harpyja/cms";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].":8080/harpyja/cms";
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].":8080/plugins/";
	} else if($server == "localhost") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT'].'/harpyja/cms';
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/harpyja/cms';
		$caminho_plugins = "http://".$_SERVER['SERVER_NAME'].'/plugins/';
	} else if($server == "comberweb.com.br") {
		
		$caminho_raiz = $_SERVER['DOCUMENT_ROOT']."/projetos/harpyja/cms";
		$caminho_site = "http://".$_SERVER['SERVER_NAME'].'/projetos/harpyja/cms';
		$caminho_plugins = "http://www.".$_SERVER['SERVER_NAME'].'/projetos/plugins/';
	}

	define('caminhoSite', $caminho_site);
	define('caminhoFisico', $caminho_raiz);
	define('caminhoPlugins', $caminho_plugins);
    define('bancoDeDados', 'harpyja');
    define('logoEmpresa', caminhoSite . '/images/logo/logo-empresa.png');
	
	$title = 'CMS';
	define('title', 'CMS ');
?>