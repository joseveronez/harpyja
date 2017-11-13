<?php
	$uri = $_SERVER['REQUEST_URI'];
    $uri_array = explode("/", $uri);
    $conta = count($uri_array);

    $pagina_atual = "";
    /* LOCALHOST AND LOCALHOST:8080 */
    if($conta >= 3) {
    	$string_recebida = $uri_array[2];

    	if($string_recebida == "" || $string_recebida == NULL) {
    		$pagina_atual = "home";
    	} else {
    		$pagina_atual = $string_recebida;
    	}
    }

    require RAIZ.'/cms/includes/config.php';
    require RAIZ.'/cms/model/Tabelas.php';
?>
<?php
    $config = Configurar::sql("SELECT * FROM configurar", SimpleOrm::FETCH_ONE);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge; IE=11; IE=EmulateIE11; IE=10; IE=EmulateIE10; IE=9; IE=EmulateIE9; IE=8; IE=EmulateIE8; IE=7; IE=EmulateIE7; IE=5; chrome=1; safari=1" />
    
	<title>HARPYJA</title>
	<?php
		ScriptLoader::LoadJS('jquery-2.1.1.min');

		ScriptLoader::LoadPLUGINSCSS('bootstrap-3.3.7-dist/css/bootstrap.min.css');
		ScriptLoader::LoadPLUGINSJS('bootstrap-3.3.7-dist/js/bootstrap.min.js');

		ScriptLoader::LoadJS('mascaras');

		ScriptLoader::LoadCSS('cores');
		ScriptLoader::LoadCSS('fonts');
		ScriptLoader::LoadCSS('style');
		
		ScriptLoader::LoadPLUGINSJS('OwlCarousel2-2.2.1/dist/owl.carousel.min.js');
		ScriptLoader::LoadPLUGINSCSS('OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css');
		ScriptLoader::LoadPLUGINSCSS('OwlCarousel2-2.2.1/dist/assets/owl.theme.default.min.css');
        
        ScriptLoader::LoadPLUGINSCSS('slider-pro-master/dist/css/slider-pro.min.css');
        ScriptLoader::LoadPLUGINSJS('slider-pro-master/dist/js/jquery.sliderPro.min.js');    
    
    
		ScriptLoader::LoadPLUGINSCSS('sweetalert-master/dist/sweetalert.css');
		ScriptLoader::LoadPLUGINSJS('sweetalert-master/dist/sweetalert.min.js');
		
		ScriptLoader::LoadPLUGINSCSS('animate.css');
		ScriptLoader::LoadPLUGINSJS('jQuery-viewport-checker-master/dist/jquery.viewportchecker.min.js');

		ScriptLoader::LoadPLUGINSJS('waipoint/lib/jquery.waypoints.min.js');
        
        ScriptLoader::LoadPLUGINSJS('vunit-master/src/vunit.js');
        
        ScriptLoader::LoadPLUGINSCSS('Hover-master/css/hover-min.css');
        
        ScriptLoader::LoadPLUGINSCSS('font-awesome-4.7.0/css/font-awesome.min.css');
	?>
</head>
<body class="Montserrat">