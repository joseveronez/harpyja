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

                $caracteristicas = json_decode($this->requestParametrosPost["jsonCaracteristicas"], true);               
                $caracteristicas = $caracteristicas['itens'];
                foreach ($caracteristicas as $caracteristica) {
                    $caract = new CaracteristicasProduto();
                    $caract->id_produto = $dados->id;
                    $caract->valor = $caracteristica['valorCaracteristica'];
                    $caract->id_caracteristica = $caracteristica['idCaracteristica'];
                    $caract->save();
                }


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
        public function categoria_ajax(){
            $id = $this->requestParametrosGet[0];
            $caracteristicas = CaracteristicasCategoria::sql("SELECT * FROM caracteristicas_categoria LEFT JOIN caracteristicas ON(caracteristicas_categoria.id_caracteristica=caracteristicas.id) WHERE caracteristicas_categoria.id_categoria = '".$id."'");
            $html = '';
            
            foreach($caracteristicas as $caracteristica){
                $html .= '<div class="control-group row">';
                $html .= '<label class="col-sm-2 control-label" align="right">';
                $html .= $caracteristica->caracteristicas;
                $html .= '</label>';
                $html .= '<div class="col-sm-10">';
                $html .= '<input type="text" class="form-control caractProd" name="valor[]" maxlength="255" id="'.$caracteristica->id.'" required/>';
                $html .= '</div></div><br>';
            };
            echo $html;
        }

        public function categoria_ajax_editar(){
            $id = $this->requestParametrosGet[0];
            $caracteristicas = CaracteristicasProduto::sql("SELECT * FROM caracteristicas_produto WHERE id_produto = '".$id."'");
            $carac = Caracteristicas::sql("SELECT * FROM caracteristicas");
            $html = '';
            
            foreach($caracteristicas as $caracteristica){
                $html .= '<div class="control-group row">';
                $html .= '<label class="col-sm-2 control-label" align="right">';
                $html .= $caracteristica->caracteristicas;
                $html .= '</label>';
                $html .= '<div class="col-sm-10">';
                $html .= '<input type="text" class="form-control caractProd" name="valor[]" maxlength="255" id="'.$caracteristica->id.'" required/>';
                $html .= '</div></div><br>';
            };
            echo $html;
        }
        
    }
?>