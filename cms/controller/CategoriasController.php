<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class CategoriasController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'categorias/gerenciar');
				setSession('blackPage', 'categorias/novos-dados');
				$this->renderView('categorias/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Categorias();
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->categoria = $this->requestParametrosPost["categoria"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/categorias/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Categorias::all();
                
                setSession('paginaAtual', 'categorias/gerenciar');
                setSession('blackPage', 'categorias/gerenciar-dados');
                $this->renderView('categorias/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Categorias::retrieveByPK($id);

            setSession('paginaAtual', 'categorias/gerenciar');
            setSession('blackPage', 'categorias/gerenciar-dados');
            $this->renderView('categorias/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Categorias::retrieveByPK($id);
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->categoria = $this->requestParametrosPost["categoria"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/categorias/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Categorias::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/categorias/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>