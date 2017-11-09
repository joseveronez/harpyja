<?php
	require 'Controller.php';
	require caminhoFisico . '/model/Tabelas.php';
	require caminhoFisico . '/helper.php';

	class CaracteristicasController extends Controller {


		public function novos_dados() {
			try {
                $categorias = Categorias::sql("SELECT * FROM categorias");
                
                $parametros = array('categorias' => $categorias);
                
				setSession('paginaAtual', 'caracteristicas/gerenciar');
				setSession('blackPage', 'caracteristicas/novos-dados');
				$this->renderView('caracteristicas/novos_dados', $parametros);
			} catch (Exception $e) {
				$this->renderViewUnique('/errors/errorServidor', $e);
			}
		}
        public function salvar_dados() {
            try {
                $dados = new Caracteristicas();
                $dados->caracteristicas = $this->requestParametrosPost["caracteristicas"];
                $dados->save();
                
                $categorias =  json_decode($this->requestParametrosPost["jsonCategorias"], true);				
				$categorias = $categorias['itens'];
				foreach ($categorias as $categoria) {
					$carac_categ = new CaracteristicasCategoria();
					$carac_categ->id_caracteristica = $dados->id;
					$carac_categ->id_categoria = $categoria['idCategoria'];
					$carac_categ->save();
				}

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
            $categorias = CaracteristicasCategoria::sql("SELECT * FROM caracteristicas_categoria");
            
            $parametros = array('categorias' => $categorias, 'dados' => $dados);
            
            setSession('paginaAtual', 'caracteristicas/gerenciar');
            setSession('blackPage', 'caracteristicas/gerenciar-dados');
            $this->renderView('caracteristicas/editar_dados', $parametros);
        }
        public function atualizar_dados(){
            try {
                $id = $this->requestParametrosPost["id"];
                $dados = Caracteristicas::retrieveByPK($id);
                $dados->caracteristicas = $this->requestParametrosPost["caracteristicas"];
                $dados->save();
                
                
                $categorias =  json_decode($this->requestParametrosPost["jsonCategorias"], true);				
				$categorias = $categorias['itens'];
				foreach ($categorias as $categoria) {
					$carac_categ = new CaracteristicasCategoria();
					$carac_categ->id_caracteristica = $dados->id;
					$carac_categ->id_categoria = $categoria['idCategoria'];
					$carac_categ->save();
				}

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
        
        public function excluirCategoriaCaracteristicas() {
			try {
				$id = $this->requestParametrosGet[0];
				$categoria = CaracteristicasCategoria::retrieveByPk($id);
				$categoria->delete();

				setSession("sucesso", "S");
                $this->redirect(caminhoSite . "/caracteristicas/gerenciar-dados");				
			} catch (Exception $e) {
				echo false;
			}
		}
    }
?>