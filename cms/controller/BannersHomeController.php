<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class BannersHomeController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'banners_home/gerenciar');
				setSession('blackPage', 'banners_home/novos-dados');
				$this->renderView('banners_home/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new BannersHome();
                $dados->titulo = $this->requestParametrosPost["titulo"];
                if (!empty($_FILES['imagem']['name'])) {
                    $handle = new upload($_FILES['imagem']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/banners_home/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = BannersHome::all();
                
                setSession('paginaAtual', 'banners_home/gerenciar');
                setSession('blackPage', 'banners_home/gerenciar-dados');
                $this->renderView('banners_home/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = BannersHome::retrieveByPK($id);

            setSession('paginaAtual', 'banners_home/gerenciar');
            setSession('blackPage', 'banners_home/gerenciar-dados');
            $this->renderView('banners_home/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = BannersHome::retrieveByPK($id);
                $dados->titulo = $this->requestParametrosPost["titulo"];
                if (!empty($_FILES['imagem']['name'])) {

                    $this->excluir_arquivo($dados->imagem);

                    $handle = new upload($_FILES['imagem']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagem = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/banners_home/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = BannersHome::retrieveByPk($id);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/banners_home/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>