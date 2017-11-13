<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class AvaliacoesController extends Controller {
		public function novos_dados() {
			try {
                $produtos = Produtos::sql("SELECT * FROM produtos ORDER BY id DESC");
                $topicos = Topicos::all();

                $parametros = array('produtos' => $produtos, 'topicos' => $topicos);
                
                $this->renderView('avaliacoes/novos_dados', $parametros);
				setSession('paginaAtual', 'avaliacoes/gerenciar');
				setSession('blackPage', 'avaliacoes/novos-dados');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Avaliacoes();
                $dados->id_produto = $this->requestParametrosPost["id_produto"];
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->texto = $this->requestParametrosPost["texto"];
                $dados->save();

                if (!empty($_FILES['fotos'])) {
                    $file_ary = reArrayFiles($_FILES['fotos']);

                    foreach ($file_ary as $file) {
                        $handle = new upload($file);
                        if ($handle->uploaded) {
                            $handle->image_resize = false;
                            $handle->process(caminhoFisico . '/uploads/');

                            if ($handle->processed) {
                                $handle->clean();
                                $fotos[] = $handle->file_dst_name;

                                $foto = new AvaliacaoGaleria();
                                $foto->id_avaliacao = $dados->id;
                                $foto->imagem = $handle->file_dst_name;
                                $foto->save();
                            } else {
                                echo 'error : ' . $handle->error;
                            }
                        }
                    }
                }

                $valorNotas =  json_decode($this->requestParametrosPost["jsonNotas"], true);
                $valorNotas = $valorNotas['itens'];
                foreach ($valorNotas as $notas) {
                    $nota = new AvaliacaoTopicos();
                    $nota->id_avaliacao = $dados->id;
                    $nota->id_topico = $notas['idTopico'];
                    $nota->descritivo = $notas['valorTopico'];
                    $nota->save();
                }

                $pt_fortes =  json_decode($this->requestParametrosPost["jsonPtFortes"], true);				
				$pt_fortes = $pt_fortes['itens'];
				foreach ($pt_fortes as $fortes) {
					$forte = new AvaliacoesProsContras();
					$forte->id_avaliacao = $dados->id;
					$forte->tipo = 1;
					$forte->descricao = $fortes['valorPtForte'];
					$forte->save();
				}
                
                $pt_fracos =  json_decode($this->requestParametrosPost["jsonPtFracos"], true);				
				$pt_fracos = $pt_fracos['itens'];
				foreach ($pt_fracos as $fracos) {
					$fraco = new AvaliacoesProsContras();
					$fraco->id_avaliacao = $dados->id;
					$fraco->tipo = 2;
					$fraco->descricao = $fracos['valorPtFraco'];
					$fraco->save();
				}

                $valorPrecos =  json_decode($this->requestParametrosPost["jsonPreco"], true);
                $valorPrecos = $valorPrecos['itens'];
                foreach ($valorPrecos as $precos) {
                    $nota = new AvaliacaoPrecos();
                    $nota->id_avaliacao = $dados->id;
                    $nota->id_empresa = $precos['idEmpresa'];
                    $nota->link = $precos['valorLink'];
                    $nota->valor = $precos['valorPreco'];
                    $nota->save();
                }
                
                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/avaliacoes/gerenciar-dados");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
        public function gerenciar_dados(){
            try {
                $dados = Avaliacoes::all();
                $produtos = Produtos::sql("SELECT * FROM produtos ORDER BY id DESC");
                
                $parametros = array('dados' => $dados, 'produtos' => $produtos);
                
                
                setSession('paginaAtual', 'avaliacoes/gerenciar');
                setSession('blackPage', 'avaliacoes/gerenciar-dados');
                $this->renderView('avaliacoes/gerenciar_dados', $parametros);
            } catch (Exception $e) {
                $this->renderViewUnique('/errors/errorServidor', $e);
            }
        }
        public function editar_dados() {
            $id = $this->requestParametrosGet[0];
            $dados = Avaliacoes::retrieveByPK($id);
            $pontos = AvaliacoesProsContras::sql("SELECT * FROM avaliacoes_pros_contras");
            $produtos = Produtos::sql("SELECT * FROM produtos");
            
            $parametros = array('pontos' => $pontos, 'dados' => $dados, 'produtos' => $produtos);

            setSession('paginaAtual', 'avaliacoes/gerenciar');
            setSession('blackPage', 'avaliacoes/gerenciar-dados');
            $this->renderView('avaliacoes/editar_dados', $parametros);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Avaliacoes::retrieveByPK($id);
                $dados->slug = $this->requestParametrosPost["slug"];
                $dados->id_produto = $this->requestParametrosPost["id_produto"];
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
                
                $pt_fortes =  json_decode($this->requestParametrosPost["jsonPtFortes"], true);				
				$pt_fortes = $pt_fortes['itens'];
				foreach ($pt_fortes as $fortes) {
					$forte = new AvaliacoesProsContras();
					$forte->id_avaliacao = $dados->id;
					$forte->tipo = 1;
					$forte->descricao = $fortes['valorPtForte'];
					$forte->save();
				}
                
                $pt_fracos =  json_decode($this->requestParametrosPost["jsonPtFracos"], true);				
				$pt_fracos = $pt_fracos['itens'];
				foreach ($pt_fracos as $fracos) {
					$fraco = new AvaliacoesProsContras();
					$fraco->id_avaliacao = $dados->id;
					$fraco->tipo = 2;
					$fraco->descricao = $fracos['valorPtFraco'];
					$fraco->save();
				}

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
        
        public function excluirPontos() {
			try {
				$id = $this->requestParametrosGet[0];
				$pontos = AvaliacoesProsContras::retrieveByPk($id);
				$pontos->delete();

				setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/avaliacoes/gerenciar-dados");				
			} catch (Exception $e) {
				echo false;
			}
		}
    }
?>