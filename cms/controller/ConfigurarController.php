<?php
    require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';
    
	class ConfigurarController extends Controller {

		public function gerenciar_pagina() {
			try {
                $dados = Configurar::retrieveByPK(1);

				setSession('paginaAtual', 'configurar/gerenciar');
				setSession('blackPage', 'configurar/gerenciar-pagina');
				$this->renderView('configurar/gerenciar_pagina', $dados);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function atualizar_pagina() {
            try {
                $dados = Configurar::retrieveByPK(1);
                if (!empty($_FILES['banner_topo']['name'])) {
                    $handle = new upload($_FILES['banner_topo']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->banner_topo = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->titulo = $this->requestParametrosPost["titulo"];
                $dados->subtitulo = $this->requestParametrosPost["subtitulo"];
                if (!empty($_FILES['parallax']['name'])) {
                    $handle = new upload($_FILES['parallax']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->parallax = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                if (!empty($_FILES['img_autor']['name'])) {
                    $handle = new upload($_FILES['img_autor']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->img_autor = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->titulo_autor = $this->requestParametrosPost["titulo_autor"];
                $dados->texto_autor = $this->requestParametrosPost["texto_autor"];
                if (!empty($_FILES['logo_cabecalho']['name'])) {
                    $handle = new upload($_FILES['logo_cabecalho']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->logo_cabecalho = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                if (!empty($_FILES['logo_footer']['name'])) {
                    $handle = new upload($_FILES['logo_footer']);
                    if ($handle->uploaded) {
                        $handle->image_resize = false;
                        $handle->process(caminhoFisico . '/uploads/');
                        if ($handle->processed) {
                            $handle->clean();
                            $dados->logo_footer = $handle->file_dst_name;
                        } else {
                            echo 'error : ' . $handle->error;
                        }
                    }
                }
                $dados->facebook = $this->requestParametrosPost["facebook"];
                $dados->twitter = $this->requestParametrosPost["twitter"];
                $dados->youtube = $this->requestParametrosPost["youtube"];
                $dados->slug_empresa = $this->requestParametrosPost["slug_empresa"];
                $dados->titulo_empresa = $this->requestParametrosPost["titulo_empresa"];
                $dados->texto_empresa = $this->requestParametrosPost["texto_empresa"];
                $dados->slug_nome = $this->requestParametrosPost["slug_nome"];
                $dados->titulo_nome = $this->requestParametrosPost["titulo_nome"];
                $dados->texto_nome = $this->requestParametrosPost["texto_nome"];
                $dados->endereco = $this->requestParametrosPost["endereco"];
                $dados->bairro = $this->requestParametrosPost["bairro"];
                $dados->cidade = $this->requestParametrosPost["cidade"];
                
                $dados->estado_uf = $this->requestParametrosPost["estado_uf"];
                
                $dados->cep = $this->requestParametrosPost["cep"];
                $dados->mapa = $this->requestParametrosPost["mapa"];
                $dados->save();

                setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/configurar/gerenciar-pagina");
            } catch (Exception $e) {
                $this->renderViewUnique("/errors/errorServidor", $e);
            }
        }
    }
?>