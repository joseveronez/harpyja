<?php
    $categorias = $_SESSION["parametrosView"]["categorias"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Produtos - Novo Produto</h1>
            <h4 class="sub-title">Adicionar novo produto</h4>

            <form action="<?= caminhoSite ?>/produtos/salvar-dados" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Categorias</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Categoria</label>
                            <div class="col-sm-10">
                                <select id="selectCategorias" class="form-control" name="id_categoria">
                                    <option selected value="">Selecione a categoria</option>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?= $categoria->id ?>"><?= $categoria->categoria ?></option>                                        
                                    <?php endforeach ?>
                                </select>
                                
                            </div>
                        </div><br>
            		</div>
                </div><br>

            	<button type="button" onclick="document.getElementById('formInserirDados').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>

<script type="text/javascript">
    $("#selectCategorias").change(function(){
        alert($("#selectCategorias").val());
    });
</script>