<?php
	$prefixos['usuarios']['login'] =  array('Controller' => 'UsuariosController', 'Method' => 'login', 'logado' => false);
	$prefixos['usuarios']['faz_login'] =  array('Controller' => 'UsuariosController', 'Method' => 'faz_login', 'logado' => false);
	
	$prefixos['usuarios']['recuperar-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'recuperar_senha', 'logado' => false);
	$prefixos['usuarios']['email'] =  array('Controller' => 'UsuariosController', 'Method' => 'email', 'logado' => false);
	$prefixos['usuarios']['verificacao'] =  array('Controller' => 'UsuariosController', 'Method' => 'verificacao', 'logado' => false);
	$prefixos['usuarios']['nova-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'nova_senha', 'logado' => false);
	$prefixos['usuarios']['salvar-senha'] =  array('Controller' => 'UsuariosController', 'Method' => 'salvar_senha', 'logado' => false);

	$routes['teste'] = array('Controller' => 'TesteController', 'Method' => 'teste', 'logado' => false);
	$routes['senha'] = array('Controller' => 'TesteController', 'Method' => 'senha', 'logado' => false);
	$routes['gerarSenha'] = array('Controller' => 'TesteController', 'Method' => 'gerarSenha', 'logado' => false);
	$routes['comparaSenha'] = array('Controller' => 'TesteController', 'Method' => 'comparaSenha', 'logado' => false);
	$routes['verificaSenha'] = array('Controller' => 'TesteController', 'Method' => 'verificaSenha', 'logado' => false);

	$routes['home'] = array('Controller' => 'HomeController', 'Method' => 'index', 'logado' => true);
	$routes['nao-logado'] = array('Controller' => 'UsuariosController', 'Method' => 'nao_logado', 'logado' => false);
	$routes['logout'] = array('Controller' => 'UsuariosController', 'Method' => 'logout', 'logado' => true);
	$routes['default'] = array('Controller' => 'DefaultController', 'Method' => 'index', 'logado' => true);

	$prefixos['testando']['testando-rotas'] = array('Controller' => 'TestandoRotasController', 'Method' => 'testando_rotas', 'logado' => true);

    $prefixos['configurar']['gerenciar-pagina'] = array('Controller' => 'ConfigurarController', 'Method' => 'gerenciar_pagina', 'logado' => true);
	$prefixos['configurar']['atualizar-pagina'] = array('Controller' => 'ConfigurarController', 'Method' => 'atualizar_pagina', 'logado' => true);

	$prefixos['avaliacoes']['novos-dados'] = array('Controller' => 'AvaliacoesController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['avaliacoes']['salvar-dados'] = array('Controller' => 'AvaliacoesController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['avaliacoes']['gerenciar-dados'] = array('Controller' => 'AvaliacoesController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['avaliacoes']['editar-dados'] = array('Controller' => 'AvaliacoesController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['avaliacoes']['atualizar-dados'] = array('Controller' => 'AvaliacoesController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['avaliacoes']['excluir-dados'] = array('Controller' => 'AvaliacoesController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['videos']['novos-dados'] = array('Controller' => 'VideosController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['videos']['salvar-dados'] = array('Controller' => 'VideosController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['videos']['gerenciar-dados'] = array('Controller' => 'VideosController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['videos']['editar-dados'] = array('Controller' => 'VideosController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['videos']['atualizar-dados'] = array('Controller' => 'VideosController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['videos']['excluir-dados'] = array('Controller' => 'VideosController', 'Method' => 'excluir_dados', 'logado' => true);

	$prefixos['caracteristicas']['novos-dados'] = array('Controller' => 'CaracteristicasController', 'Method' => 'novos_dados', 'logado' => true);
	$prefixos['caracteristicas']['salvar-dados'] = array('Controller' => 'CaracteristicasController', 'Method' => 'salvar_dados', 'logado' => true);
	$prefixos['caracteristicas']['gerenciar-dados'] = array('Controller' => 'CaracteristicasController', 'Method' => 'gerenciar_dados', 'logado' => true);
	$prefixos['caracteristicas']['editar-dados'] = array('Controller' => 'CaracteristicasController', 'Method' => 'editar_dados', 'logado' => true);
	$prefixos['caracteristicas']['atualizar-dados'] = array('Controller' => 'CaracteristicasController', 'Method' => 'atualizar_dados', 'logado' => true);
	$prefixos['caracteristicas']['excluir-dados'] = array('Controller' => 'CaracteristicasController', 'Method' => 'excluir_dados', 'logado' => true);
?>