<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class ProdutosController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'produtos/gerenciar');
				setSession('blackPage', 'produtos/novos-dados');
                
                $categorias = Categorias::sql("SELECT * FROM categorias");
                $parametros = array('categorias' => $categorias);
                
				$this->renderView('produtos/novos_dados', $parametros);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Produtos();
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->id_categoria = $this->requestParametrosPost["id_categoria"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/produtos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Produtos::all();
                
                setSession('paginaAtual', 'produtos/gerenciar');
                setSession('blackPage', 'produtos/gerenciar-dados');
                $this->renderView('produtos/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Produtos::retrieveByPK($id);
            $categorias = Categorias::sql("SELECT * FROM categorias");
            
            $parametros = array('categorias' => $categorias, 'dados' => $dados);

            setSession('paginaAtual', 'produtos/gerenciar');
            setSession('blackPage', 'produtos/gerenciar-dados');
            $this->renderView('produtos/editar_dados', $parametros);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Produtos::retrieveByPK($id);
                $dados->nome = $this->requestParametrosPost["nome"];
                $dados->id_categoria = $this->requestParametrosPost["id_categoria"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/produtos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Produtos::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/produtos/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>