<?php
    $categorias = $_SESSION["parametrosView"]["categorias"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Produtos - Novo Produto</h1>
            <h4 class="sub-title">Adicionar novo produto</h4>

            <form id="formProd" action="<?= caminhoSite ?>/produtos/salvar-dados" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Informações do produto</h3>
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
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Características</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <div class="col-sm-12" id="tabelaCaracteristicas"></div>
                        </div><br>
                    </div>
                </div><br>
            	<button id="salvaProd" type="button" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>

 <!-- onclick="document.getElementById('formInserirDados').submit();" -->

<script type="text/javascript">
    $("#selectCategorias").change(function(){
        var id = $("#selectCategorias").val();
        $.ajax({
            type: "POST",
            url: "<?= caminhoSite ?>/produtos/categoria-ajax/"+id,
            success: function(data){
                $("#tabelaCaracteristicas").html(data);
            }
        });
    });

    $(document).ready(function() {
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