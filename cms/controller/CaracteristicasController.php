<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class CaracteristicasController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'caracteristicas/gerenciar');
				setSession('blackPage', 'caracteristicas/novos-dados');
				$this->renderView('caracteristicas/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Caracteristicas();
                $dados->caracteristicas = $this->requestParametrosPost["caracteristicas"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/caracteristicas/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Caracteristicas::all();
                
                setSession('paginaAtual', 'caracteristicas/gerenciar');
                setSession('blackPage', 'caracteristicas/gerenciar-dados');
                $this->renderView('caracteristicas/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Caracteristicas::retrieveByPK($id);

            setSession('paginaAtual', 'caracteristicas/gerenciar');
            setSession('blackPage', 'caracteristicas/gerenciar-dados');
            $this->renderView('caracteristicas/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Caracteristicas::retrieveByPK($id);
                $dados->caracteristicas = $this->requestParametrosPost["caracteristicas"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/caracteristicas/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Caracteristicas::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/caracteristicas/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>