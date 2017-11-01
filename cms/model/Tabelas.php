<?php
	include caminhoFisico . '/orm/SimpleOrm.class.php';
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);

	class Usuarios extends SimpleOrm {
		protected static
    	$table = 'usuarios';
	}

	class Configuracoes extends SimpleOrm {
		protected static
		$table = 'configuracoes';
	}

	class Avaliacoes extends SimpleOrm {
		protected static
		$table = 'avaliacoes';
	}

	class Videos extends SimpleOrm {
		protected static
		$table = 'videos';
	}

	class Caracteristicas extends SimpleOrm {
		protected static
		$table = 'caracteristicas';
	}
?>