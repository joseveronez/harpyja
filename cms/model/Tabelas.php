<?php
	include caminhoFisico . '/orm/SimpleOrm.class.php';
	include caminhoFisico . '/orm/Connection.php';
	SimpleOrm::useConnection($mysqli, bancoDeDados);

	class Usuarios extends SimpleOrm {
		protected static
    	$table = 'usuarios';
	}

    class Configurar extends SimpleOrm {
		protected static
		$table = 'configurar';
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

    class Categorias extends SimpleOrm {
		protected static
		$table = 'categorias';
	}
    
    class Produtos extends SimpleOrm {
		protected static
		$table = 'produtos';
	}
    
    class CaracteristicasCategoria extends SimpleOrm {
		protected static
		$table = 'caracteristicas_categoria';
	}

	class CaracteristicasProduto extends SimpleOrm {
		protected static
		$table = 'caracteristicas_produto';
	}

    class AvaliacoesProsContras extends SimpleOrm {
		protected static
		$table = 'avaliacoes_pros_contras';
	}

	class Topicos extends SimpleOrm {
		protected static
		$table = 'topicos';
	}

	class AvaliacaoTags extends SimpleOrm {
		protected static
		$table = 'avaliacao_tags';
	}

	class AvaliacaoGaleria extends SimpleOrm {
		protected static
		$table = 'avaliacao_galeria';
	}

	class AvaliacaoTopicos extends SimpleOrm {
		protected static
		$table = 'avaliacao_topicos';
	}

	class AvaliacaoPrecos extends SimpleOrm {
		protected static
		$table = 'avaliacao_precos';
	}

	class BannersHome extends SimpleOrm {
		protected static
		$table = 'banners_home';
	}
?>