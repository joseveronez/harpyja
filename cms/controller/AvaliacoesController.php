<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class AvaliacoesController extends Controller {


		public function novos_dados() {
			try {
				setSession('paginaAtual', 'avaliacoes/gerenciar');
				setSession('blackPage', 'avaliacoes/novos-dados');
				$this->renderView('avaliacoes/novos_dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Avaliacoes();
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->nome_produto = $this->requestParametrosPost["nome_produto"];
                $dados->categoria = $this->requestParametrosPost["categoria"];
                $dados->nota_desempenho = $this->requestParametrosPost["nota_desempenho"];
                $dados->nota_design_e_acabamento = $this->requestParametrosPost["nota_design_e_acabamento"];
                $dados->nota_praticidade = $this->requestParametrosPost["nota_praticidade"];
                $dados->nota_limpeza = $this->requestParametrosPost["nota_limpeza"];
                $dados->nota_seguranca = $this->requestParametrosPost["nota_seguranca"];
                $dados->pontos_fortes = $this->requestParametrosPost["pontos_fortes"];
                $dados->pontos_fracos = $this->requestParametrosPost["pontos_fracos"];
                $dados->preco = $this->requestParametrosPost["preco"];
                $dados->texto = $this->requestParametrosPost["texto"];
                if (!empty($_FILES['imagens']['name'])) {
                    $handle = new upload($_FILES['imagens']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagens = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->tag = $this->requestParametrosPost["tag"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/avaliacoes/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Avaliacoes::all();
                
                setSession('paginaAtual', 'avaliacoes/gerenciar');
                setSession('blackPage', 'avaliacoes/gerenciar-dados');
                $this->renderView('avaliacoes/gerenciar_dados', $dados);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Avaliacoes::retrieveByPK($id);

            setSession('paginaAtual', 'avaliacoes/gerenciar');
            setSession('blackPage', 'avaliacoes/gerenciar-dados');
            $this->renderView('avaliacoes/editar_dados', $dados);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Avaliacoes::retrieveByPK($id);
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->nome_produto = $this->requestParametrosPost["nome_produto"];
                $dados->categoria = $this->requestParametrosPost["categoria"];
                $dados->nota_desempenho = $this->requestParametrosPost["nota_desempenho"];
                $dados->nota_design_e_acabamento = $this->requestParametrosPost["nota_design_e_acabamento"];
                $dados->nota_praticidade = $this->requestParametrosPost["nota_praticidade"];
                $dados->nota_limpeza = $this->requestParametrosPost["nota_limpeza"];
                $dados->nota_seguranca = $this->requestParametrosPost["nota_seguranca"];
                $dados->pontos_fortes = $this->requestParametrosPost["pontos_fortes"];
                $dados->pontos_fracos = $this->requestParametrosPost["pontos_fracos"];
                $dados->preco = $this->requestParametrosPost["preco"];
                $dados->texto = $this->requestParametrosPost["texto"];
                if (!empty($_FILES['imagens']['name'])) {

                    $this->excluir_arquivo($dados->imagens);

                    $handle = new upload($_FILES['imagens']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->imagens = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->tag = $this->requestParametrosPost["tag"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/avaliacoes/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function excluir_dados(){
            try {
                $id = $this->requestParametrosGet[0];
                $dados = Avaliacoes::retrieveByPk($id);
                $this->excluir_arquivo($dados->imagens);
                $dados->delete();

                setSession('sucesso', 'S');

                $this->redirect(caminhoSite . '/avaliacoes/gerenciar-dados');
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
    }
?>