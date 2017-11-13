<?php
    $dados = $_SESSION["parametrosView"]["dados"];
    $categorias = $_SESSION["parametrosView"]["categorias"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Produtos - Editar Produto</h1>
            <h4 class="sub-title">Editar Produto</h4>

            <form action="<?= caminhoSite ?>/produtos/atualizar-dados" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Produtos</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" maxlength="255" value="<?= $dados->nome ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Categoria</label>
                            <div class="col-sm-10">
                                <select id="selectCategorias" class="form-control" name="id_categoria">
                                    <option value="">Selecione a categoria</option>
                                    <?php foreach ($categorias as $categoria): ?>
                                        <option value="<?= $categoria->id ?>" 
                                                <?php 
                                                    if($dados->id_categoria == $categoria->id){ 
                                                ?> 
                                                    selected 
                                                <?php 
                                                    } ?>
                                                >
                                            <?= $categoria->categoria ?>
                                        </option>                                        
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Caracteristicas</label><br>
                            <div class="col-sm-10" id="tabelaCaracteristicas"></div>
                        </div><br>
            		</div>
                </div><br>
            	<button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>
<script type="text/javascript">
    $("#selectCategorias").change(function(){
        var id = $("#selectCategorias").val();
        $.ajax({
            type: "POST",
            url: "<?= caminhoSite ?>/produtos/categoria-ajax-editar/"+<?= $dados->id ?>,
            success: function(data){
                $("#tabelaCaracteristicas").html(data);
            }
        });
    });

    $(document).ready(function() {
        var id = $("#selectCategorias").val();
        $.ajax({
            type: "POST",
            url: "<?= caminhoSite ?>/produtos/categoria-ajax-editar/"+<?= $dados->id ?>,
            success: function(data){
                $("#tabelaCaracteristicas").html(data);
            }
        });



        $("#salvaProd").click(function(event){
            var itensCaracteristicas = '{"itens":[';
            var count = 0;

            $('.caractProd').each(function(index, el) {
                if (count != 0) {
                    itensCaracteristicas = itensCaracteristicas + ',';
                }

                var idCaracteristica = $(this).attr('id');
                var valor = $(this).val();

                itensCaracteristicas = itensCaracteristicas + 
                        '{"idCaracteristica":"' + idCaracteristica + '", "valorCaracteristica":"'+ valor +'"}';
                count++;
            });


            itensCaracteristicas = itensCaracteristicas + ']}';

            console.log(itensCaracteristicas);

            $('#formProd').append("<input type='hidden' name='jsonCaracteristicas' value='" + itensCaracteristicas + "' >");
            $('#formProd').submit();

        });
    });
</script>