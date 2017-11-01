<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class VideosController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'videos/gerenciar');
				setSession('blackPage', 'videos/novos-dados');
				$this->renderView('videos/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Videos();
                $dados->link_video = $this->requestParametrosPost["link_video"];
                $dados->Titulo = $this->requestParametrosPost["Titulo"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/videos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Videos::all();
                
                setSession('paginaAtual', 'videos/gerenciar');
                setSession('blackPage', 'videos/gerenciar-dados');
                $this->renderView('videos/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Videos::retrieveByPK($id);

            setSession('paginaAtual', 'videos/gerenciar');
            setSession('blackPage', 'videos/gerenciar-dados');
            $this->renderView('videos/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Videos::retrieveByPK($id);
                $dados->link_video = $this->requestParametrosPost["link_video"];
                $dados->Titulo = $this->requestParametrosPost["Titulo"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/videos/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Videos::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/videos/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>