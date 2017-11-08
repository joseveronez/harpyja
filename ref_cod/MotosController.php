<?php
	require 'Controller.php';
	require 'm2brimagem.class.php';
	require caminhoFisico . '/model/Motos.php';
	require caminhoFisico . '/model/Harley.php';
	require caminhoFisico . '/helper.php';

	class MotosController extends Controller {
		public function importar(){
			$motos = Motos::all();
			foreach ($motos as $moto) {
				$fotos = explode(",",str_replace('"','',$moto->fotos));
				
				for($i=0;$i<count($fotos);$i++){
					$nomes = explode("|",$fotos[$i]);
					$nomeFoto =  str_replace("]","",str_replace("[","",$nomes[0]));
					$altFoto = str_replace("]","",str_replace("[","",$nomes[1]));	
					
					$foto = new Fotos();
					$foto->id_moto = $moto->id;
					$foto->nome = $nomeFoto;
					$foto->alt = $altFoto;
					$foto->save();
				}
			}
		}

		public function nova_moto(){
			try {
				$caracteristicas = Caracteristicas::all();
				$acessorios = Acessorios::sql("SELECT * FROM acessorios ORDER BY acessorio ASC");
				$marcas = Marcas::all();

				$parametros = array('caracteristicas' => $caracteristicas, 'acessorios' => $acessorios, 'marcas' => $marcas);

				setSession("paginaAtual", "motos/geral");
				$this->renderView('motos/nova_moto', $parametros);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function salvar_moto(){
			try {
				$moto = new Motos();
				$moto->nome = $this->requestParametrosPost["nome"];
				$moto->slug = $this->requestParametrosPost["slug"];
				$moto->video = $this->requestParametrosPost["video"];
				$moto->preco = $this->requestParametrosPost["preco"];
				$moto->descricao = $this->requestParametrosPost["descricao"];
				$moto->destaque = '0';
				$moto->vendida = '0';
				$moto->idMarca = $this->requestParametrosPost["idMarca"];

				// SEO
				$moto->title = $this->requestParametrosPost["title"];
				$moto->description = $this->requestParametrosPost["description"];
				$moto->keywords = $this->requestParametrosPost["keywords"];
				$moto->author = $this->requestParametrosPost["author"];
				$moto->copyright = $this->requestParametrosPost["copyright"];
				$moto->application_name = $this->requestParametrosPost["application_name"];
				$moto->canonical = $this->requestParametrosPost["canonical"];

				if (!empty($_FILES['img_destaque']['name'])) {
	                $handle = new upload($_FILES['img_destaque']);
	                if ($handle->uploaded) {
	                    $handle->image_resize = false;
	                    $handle->process(caminhoFisico . '/uploads/');
	                    if ($handle->processed) {
	                        $handle->clean();
	                        $moto->img_destaque = $handle->file_dst_name;
	                    } else {
	                        echo 'error : ' . $handle->error;
	                    }
	                }
	            }
				$moto->texto_alternativo = $this->requestParametrosPost["texto_alternativo"];
				
				$moto->save();

				$caracteristicas =  json_decode($this->requestParametrosPost["jsonCaracteristicas"], true);				
				$caracteristicas = $caracteristicas['itens'];
				foreach ($caracteristicas as $caracteristica) {
					$moto_caracteristica = new Moto_Caracteristicas();
					$moto_caracteristica->id_moto = $moto->id;
					$moto_caracteristica->id_caracteristica = $caracteristica['idCaracteristica'];
					$moto_caracteristica->valor = $caracteristica['valorCaracteristica'];
					$moto_caracteristica->save();
				}

				$acessorios = json_decode($this->requestParametrosPost["jsonAcessorios"], true);
				$acessorios = $acessorios['itens'];
				foreach ($acessorios as $acessorio) {
					$moto_acessorio = new Moto_Acessorios();
					$moto_acessorio->id_moto = $moto->id;
					$moto_acessorio->id_acessorio = $acessorio['idAcessorio'];					
					$moto_acessorio->save();
				}

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

								$foto = new Fotos();
								$foto->id_moto = $moto->id;
								$foto->nome = $handle->file_dst_name;
								$foto->alt = " ";
								$foto->save();
							} else {
								echo 'error : ' . $handle->error;
							}
						}
					}
				}


				setSession("sucesso", "S");				
				$this->redirect(caminhoSite . '/motos/listar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function listar(){
			try {
				//$motos = Motos::all();
				$motos = Motos::sql("SELECT motos.id as id, motos.nome as nome, motos.preco as preco, motos.destaque as destaque, motos.vendida as vendida, motos_caracteristicas.id_caracteristica, motos_caracteristicas.valor as valor, motos_caracteristicas.id_moto FROM `motos` LEFT JOIN motos_caracteristicas ON motos_caracteristicas.id_moto=motos.id WHERE motos_caracteristicas.id_caracteristica = '157'");
				setSession("paginaAtual", "motos/geral");
				$this->renderView('motos/gerenciar', $motos);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function editar_moto(){
			try {
				$id = $this->requestParametrosGet[0];
				$moto = Motos::retrieveByPk($id);
				$galeria = Fotos::sql('SELECT * FROM fotos_motos WHERE id_moto ='. $id);

				$caracteristicas = Moto_Caracteristicas::sql('select mc.*, c.caracteristica from :table mc, caracteristicas c where mc.id_caracteristica = c.id and mc.id_moto = ' . $id);
				$acessorios = Moto_Acessorios::sql('select ma.*, a.acessorio from :table ma, acessorios a where ma.id_acessorio = a.id and ma.id_moto = ' . $id);
				$carac = Caracteristicas::all();
				$acesso = Acessorios::sql("SELECT * FROM acessorios ORDER BY acessorio ASC");
				$marcas = Marcas::all();

				$parametros = array('moto' => $moto, 'galeria' => $galeria, 'caracteristicas' => $caracteristicas, 'acessorios' => $acessorios, 'carac' => $carac, 'acesso' => $acesso, 'marcas' => $marcas);

				setSession("paginaAtual", "motos/geral");
				$this->renderView('motos/editar_moto', $parametros);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function atualizar_moto(){
			try {
				$id = $this->requestParametrosPost["id"];
				$moto = Motos::retrieveByPk($id);

				if(!empty($_POST["img_name"])){
					$old_name = $moto->img_destaque;
					$new_name = $this->requestParametrosPost["img_name"].".jpg";

					rename(caminhoFisico . '/uploads/' . $old_name, caminhoFisico . '/uploads/' . $new_name);

					$moto->img_destaque = $new_name;
				}

				$moto->nome = $this->requestParametrosPost["nome"];
				$moto->slug = $this->requestParametrosPost["slug"];
				$moto->video = $this->requestParametrosPost["video"];
				$moto->preco = $this->requestParametrosPost["preco"];
				$moto->descricao = $this->requestParametrosPost["descricao"];
				$moto->idMarca = $this->requestParametrosPost["idMarca"];

				// SEO
				$moto->title = $this->requestParametrosPost["title"];
				$moto->description = $this->requestParametrosPost["description"];
				$moto->keywords = $this->requestParametrosPost["keywords"];
				$moto->author = $this->requestParametrosPost["author"];
				$moto->copyright = $this->requestParametrosPost["copyright"];
				$moto->application_name = $this->requestParametrosPost["application_name"];
				$moto->canonical = $this->requestParametrosPost["canonical"];

				if (!empty($_FILES['img_destaque']['name'])) {
	                    
		            $this->excluir_arquivo($moto->img_destaque);

		            $handle = new upload($_FILES['img_destaque']);
		            if ($handle->uploaded) {
		                $handle->image_resize  = false;
		                $handle->process(caminhoFisico . '/uploads/');
		                if ($handle->processed) {
		                    $handle->clean();
		                    $moto->img_destaque = $handle->file_dst_name;
		                } else {
		                    echo 'error : ' . $handle->error;
		                }
		            }
		        }

		        $moto->texto_alternativo = $this->requestParametrosPost["texto_alternativo"];

				$moto->save();

				if (!empty($_FILES['fotos']['name'])) {
					$file_ary = reArrayFiles($_FILES['fotos']);

					foreach ($file_ary as $file) {
						$handle = new upload($file);
						if ($handle->uploaded) {
							$handle->image_resize = false;
							$handle->process(caminhoFisico . '/uploads/');

							if ($handle->processed) {
								$handle->clean();
								$fotos[] = $handle->file_dst_name;

								$foto = new Fotos();
								$foto->id_moto = $moto->id;
								$foto->nome = $handle->file_dst_name;
								$foto->alt = " ";
								$foto->save();
							} else {
								echo 'error : ' . $handle->error;
							}
						}
					}

					$testeJson = json_encode($fotos);
					if ($testeJson != 'null') {
						if ($moto->fotos != '') {
							$fotos_atuais = json_decode($moto->fotos);
							foreach ($fotos_atuais as $value) {
								$fotos[] = $value;
							}
							$fotos_json = json_encode($fotos);
						} else {
							$fotos_json = json_encode($fotos);
						}
						$moto->fotos = $fotos_json;
					}
				}

				$caracteristicas =  json_decode($this->requestParametrosPost["jsonCaracteristicas"], true);				
				$caracteristicas = $caracteristicas['itens'];
				foreach ($caracteristicas as $caracteristica) {
					
					$moto_caracteristica = new Moto_Caracteristicas();
					$moto_caracteristica->id_moto = $moto->id;
					$moto_caracteristica->id_caracteristica = $caracteristica['idCaracteristica'];
					$moto_caracteristica->valor = $caracteristica['valorCaracteristica'];
					$moto_caracteristica->save();
					
				}

				$acessorios = json_decode($this->requestParametrosPost["jsonAcessorios"], true);
				$acessorios = $acessorios['itens'];
				foreach ($acessorios as $acessorio) {
					$moto_acessorio = new Moto_Acessorios();
					$moto_acessorio->id_moto = $moto->id;
					$moto_acessorio->id_acessorio = $acessorio['idAcessorio'];					
					$moto_acessorio->save();
				}

				setSession("sucesso", "S");
				$this->redirect(caminhoSite . '/motos/listar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function excluir_moto(){
			try {
				$id = $this->requestParametrosGet[0];
				$moto = Motos::retrieveByPk($id);

				// Busca todas as imagens que foram adicionadas a esta moto
				$galeria = Fotos::sql('SELECT * FROM fotos_motos WHERE id_moto ='. $id);
				// Faz um foreach para trazer todas elas
				foreach ($galeria as $foto) {
					// Uma por uma são excluídas as imagens do servidor
					$this->excluir_arquivo($foto->nome);
					// Uma por uma são excluídas as imagens do banco de dados
					$foto->delete();
				}

				// Exclui a imagem destaque da moto do servidor
				$this->excluir_arquivo($moto->img_destaque);

				// Busca todos os acessórios que foram adicionadas para a moto
				$acessorios = Moto_Acessorios::sql('SELECT * FROM motos_acessorios WHERE id_moto ='. $id);
				// Faz um foreach para trazer todos os acessorios adicionados
				foreach ($acessorios as $acessorio) {
					// Uma por uma são excluídos os acessorios que foram adicionadas a moto do banco
					$acessorio->delete();
				}

				// Busca todas as caracteristicas que foram adicionadas a moto
				$caracteristicas = Moto_Caracteristicas::sql('SELECT * FROM motos_caracteristicas WHERE id_moto ='. $id);
				// Faz um foreach para trazer todas as características adicionadas
				foreach ($caracteristicas as $caracteristica) {
					// Uma por uma são deletadas as características que foram adicionadas a moto do banco
					$caracteristica->delete();
				}
				
				$moto->delete();

				setSession("sucesso", "S");
				$this->redirect(caminhoSite . '/motos/listar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function atualizar_imagem() {
			$id = $this->requestParametrosPost['inputId'];
			$idMoto = $this->requestParametrosPost['inputIdMoto'];
			$old = $this->requestParametrosPost['inputOldName'];
			$new = $this->requestParametrosPost['inputNewName'].".jpg";
			$texto_alternativo = $this->requestParametrosPost['inputAlt'];

			rename(caminhoFisico . '/uploads/' . $old, caminhoFisico . '/uploads/' . $new);

			$motoFoto = Fotos::retrieveByPK($id);
			$motoFoto->id_moto = $this->requestParametrosPost['inputIdMoto'];
			$motoFoto->nome = $this->requestParametrosPost['inputNewName'].".jpg";
			$motoFoto->alt = $this->requestParametrosPost['inputAlt'];
			$motoFoto->save();

			setSession("sucesso", "S");
			$this->redirect(caminhoSite . '/motos/editar-moto/' . $idMoto);
		}

		public function remover_imagem() {
			$id = $this->requestParametrosGet[0];

			$imagem = Fotos::sql('SELECT * FROM fotos_motos WHERE id ='. $id, SimpleOrm::FETCH_ONE);

			$moto = Motos::sql('SELECT * FROM motos WHERE id ='. $imagem->id_moto, SimpleOrm::FETCH_ONE);

			$this->excluir_arquivo($imagem->nome);

			$imagem->delete();

			setSession("sucesso", "S");
			$this->redirect(caminhoSite . '/motos/editar-moto/'. $moto->id);
		}

		public function remover_imagens() {
			$idMoto = $this->requestParametrosGet[0];
			$motoImagens = Fotos::sql('SELECT * FROM fotos_motos WHERE id_moto ='. $idMoto);

			foreach ($motoImagens as $motoImagem) {
				$this->excluir_arquivo($motoImagem->nome);

				$motoImagem->delete();
			}
			
			setSession("sucesso", "S");
			$this->redirect(caminhoSite . '/motos/editar-moto/'. $idMoto);
		}

		// Motos - características
		public function nova_caracteristica(){
			try {
				$caracteristicas = Caracteristicas::all();
				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php');
				$this->renderView('motos/nova_caracteristica',$caracteristicas);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_caracteristica(){
			try {
				if(!empty($this->requestParametrosPost["id"])){
					$caracteristica = Caracteristicas::retrieveByPk($this->requestParametrosPost["id"]);
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}else{
					$caracteristica = new Caracteristicas();
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}
				$caracteristica->save();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/nova-caracteristica');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function save_caracteristica(){
			try {
				$caracteristica = new Caracteristicas();
				$caracteristica->caracteristica = $_POST["caracteristica"];
				$caracteristica->save();
				$carac = Caracteristicas::all();
				
				$NewCarac .= "<option value=".$caracteristica->id.">".$caracteristica->caracteristica."</option>";	

				echo $NewCarac;
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function save_acessorio(){
			try {
				$acessorio = new Acessorios();
				$acessorio->acessorio = $_POST["acessorio"];
				$acessorio->save();
				$Acess = Acessorios::all();
				
				$NewAcess .= "<option value=".$acessorio->id.">".$acessorio->acessorio."</option>";

				echo $NewAcess;
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function buscar_caracteristicas(){
			$id = $this->requestParametrosGet[0];
			$caracteristicas = Caracteristicas::retrieveByPk($id);

			echo json_encode($caracteristicas);
		}
		public function editar_caracteristica(){
			try {
				$id = $this->requestParametrosGet[0];
				$caracteristica = Caracteristicas::retrieveByPk($id);

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php', $configuracoes);
				$this->renderView('motos/nova_caracteristica', $caracteristica);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_edicao_caracteristica(){
			try {
				$$id = $this->requestParametrosPost['id'];
				$caracteristica = Caracteristicas::retrieveByPK($id);
				$caracteristica->caracteristica = $this->requestParametrosPost['caracteristica'];
				$caracteristica->save();

				setSession("sucesso", "S");

				// $this->redirect(caminho do site . '/motos/url/' . id);
				$this->redirect(caminhoSite . '/motos/nova-caracteristica/' . $id);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function excluir_caracteristica(){
			try {
				$id = $this->requestParametrosGet[0];
				$caracteristica = Caracteristicas::retrieveByPk($id);
				$caracteristica->delete();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/nova-caracteristica');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		// Motos - acessorios
		public function novo_acessorio(){
			try {
				$acessorios = Acessorios::all();
				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php');
				$this->renderView('motos/novo_acessorio',$acessorios);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_acessorio(){
			try {
				if(!empty($this->requestParametrosPost["id"])){
					$acessorio = Acessorios::retrieveByPk($this->requestParametrosPost["id"]);
					$acessorio->acessorio = $this->requestParametrosPost["acessorio"];
				}else{
					$acessorio = new Acessorios();
					$acessorio->acessorio = $this->requestParametrosPost["acessorio"];
				}
				$acessorio->save();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/novo-acessorio');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function buscar_acessorios(){
			$id = $this->requestParametrosGet[0];
			$acessorios = Acessorios::retrieveByPk($id);

			echo json_encode($acessorios);
		}
		public function editar_acessorio(){
			try {
				$id = $this->requestParametrosGet[0];
				$acessorio = Acessorios::retrieveByPk($id);

				setSession("paginaAtual", "motos/geral");

				// $this->renderView('pasta/arquivo php', $configuracoes);
				$this->renderView('motos/novo_acessorio', $acessorio);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function salvar_edicao_acessorio(){
			try {
				$$id = $this->requestParametrosPost['id'];
				$acessorio = Acessorios::retrieveByPK($id);
				$acessorio->acessorio = $this->requestParametrosPost['acessorio'];
				$acessorio->save();

				setSession("sucesso", "S");

				// $this->redirect(caminho do site . '/motos/url/' . id);
				$this->redirect(caminhoSite . '/motos/novo-acessorio/' . $id);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
		public function excluir_acessorio(){
			try {
				$id = $this->requestParametrosGet[0];
				$acessorio = Acessorios::retrieveByPk($id);
				$acessorio->delete();

				setSession("sucesso", "S");
				// $this->redirect(caminhoSite . '/motos/url');
				$this->redirect(caminhoSite . '/motos/novo-acessorio');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function excluirAcessorioMoto() {
			try {
				$id = $this->requestParametrosGet[0];
				$acessorio = Moto_Acessorios::retrieveByPk($id);
				$acessorio->delete();

				echo true;				
			} catch (Exception $e) {
				echo false;
			}
		}

		public function excluirCaracteristicaMoto() {
			try {
				$id = $this->requestParametrosGet[0];
				$caracteristica = Moto_Caracteristicas::retrieveByPk($id);
				$caracteristica->delete();

				echo true;				
			} catch (Exception $e) {
				echo false;
			}
		}

		public function gerenciar_sidebar() {
			try {
				$sidebars = Sidebar::all();

				setSession("paginaAtual", "motos/geral");

				$this->renderView('motos/gerenciar_sidebar', $sidebars);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function novo_sidebar() {
			try {
				setSession("paginaAtual", "motos/geral");

				$this->renderView('motos/novo_sidebar', $sidebars);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function salvar_sidebar() {
			try {
				$sidebar = new Sidebar();
				$sidebar->texto1 = $this->requestParametrosPost['texto1'];
				$sidebar->texto2 = $this->requestParametrosPost['texto2'];
				$sidebar->texto_botao = $this->requestParametrosPost['texto_botao'];
				$sidebar->link = $this->requestParametrosPost['link'];

				if (!empty($_FILES['imagem']['name'])) {
					$handle = new upload($_FILES['imagem']);
	                if ($handle->uploaded) {
	                    $handle->image_resize = false;
	                    $handle->process(caminhoFisico . '/uploads/');

	                    if ($handle->processed) {
	                        $handle->clean();
	                        $sidebar->imagem = $handle->file_dst_name;
	                    } else {
	                        echo 'error : ' . $handle->error;
	                    }
	                }
				}

				$sidebar->save();


				setSession("sucesso", "S");

				$this->redirect(caminhoSite . '/motos/gerenciar-sidebar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function salvar_edicao_sidebar() {
			try {
				$id = $this->requestParametrosPost['id'];
				$sidebar = Sidebar::retrieveByPK($id);				
				$sidebar->texto1 = $this->requestParametrosPost['texto1'];
				$sidebar->texto2 = $this->requestParametrosPost['texto2'];
				$sidebar->texto_botao = $this->requestParametrosPost['texto_botao'];
				$sidebar->link = $this->requestParametrosPost['link'];

				if (!empty($_FILES['imagem']['name'])) {
					
					$this->excluir_arquivo($sidebar->imagem);

					$handle = new upload($_FILES['imagem']);
	                if ($handle->uploaded) {
	                    $handle->image_resize = false;
	                    $handle->process(caminhoFisico . '/uploads/');

	                    if ($handle->processed) {
	                        $handle->clean();
	                        $sidebar->imagem = $handle->file_dst_name;
	                    } else {
	                        echo 'error : ' . $handle->error;
	                    }
	                }
	            }

				$sidebar->save();


				setSession("sucesso", "S");

				$this->redirect(caminhoSite . '/motos/gerenciar-sidebar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function editar_sidebar() {
			try {
				$id = $this->requestParametrosGet[0];
				$sidebar = Sidebar::retrieveByPK($id);
				
				setSession("paginaAtual", "motos/geral");

				$this->renderView('motos/editar_sidebar', $sidebar);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function excluir_sidebar() {
			try {
				$id = $this->requestParametrosGet[0];
				$sidebar = Sidebar::retrieveByPK($id);
				$return = $this->excluir_arquivo($sidebar->imagem, true);
				if ($return) {
					$sidebar->delete();	
				} else {
					throw new Exception('Erro ao excluir arquivo');
				}
				

				setSession("sucesso", "S");

				$this->redirect(caminhoSite . '/motos/gerenciar-sidebar');
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}

		public function salva_vendida() {
			$id = $this->requestParametrosGet[0];			
			$moto = Motos::retrieveByPk($id);
			$moto->vendida = 'S';
			$moto->save();
		}

		public function remove_vendida() {
			$id = $this->requestParametrosGet[0];			
			$moto = Motos::retrieveByPk($id);
			$moto->vendida = 'N';
			$moto->save();
		}

		public function salva_destaque() {
			$id = $this->requestParametrosGet[0];			
			$moto = Motos::retrieveByPk($id);
			$moto->destaque = 'S';
			$moto->save();
		}

		public function remove_destaque() {
			$id = $this->requestParametrosGet[0];			
			$moto = Motos::retrieveByPk($id);
			$moto->destaque = 'N';
			$moto->save();
		}

		public function salvar_caracteristica_moto(){
			try {
				if(!empty($this->requestParametrosPost["id"])){
					$caracteristica = Caracteristicas::retrieveByPk($this->requestParametrosPost["id"]);
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}else{
					$caracteristica = new Caracteristicas();
					$caracteristica->caracteristica = $this->requestParametrosPost["caracteristica"];
				}
				$caracteristica->save();
				
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
	}
?>