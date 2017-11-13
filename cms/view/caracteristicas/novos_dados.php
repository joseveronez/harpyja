<?php
    $categorias = $_SESSION['parametrosView']['categorias'];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Caractrísticas - Nova Caracteristica</h1>
            <h4 class="sub-title">Criar uma nova Caracteristica</h4>

            <form id="carac" action="<?= caminhoSite ?>/caracteristicas/salvar-dados" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Características</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Nome da Característica</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="caracteristicas" maxlength="255" required />
                            </div>
                        </div><br>
            		</div>
                    
                    
                    <div class="box-content">
                    <div class="control-group row">
                        <label class="col-sm-2 control-label" align="right">Adicionar à(s) categoria(s)</label>
                        <div class="col-sm-4">
                            <div id="ListaCateg"></div>
                            <select id="selectCategorias" class="form-control" name="id_caracteristica">
                                <option selected value="">Selecione a categoria</option>
                                <?php foreach ($categorias as $categoria): ?>
                                    <option value="<?= $categoria->id ?>"><?= $categoria->categoria ?></option>                                        
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" id="btnSalvaCategoria" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                        </div><br>

                        <div class="col-sm-2">&nbsp;</div>
                        <div class="col-sm-10 pull-right">
                            <table class="table table-striped" id="tblCategorias">
                                <thead>
                                    <tr>
                                        <th>Categoria</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div><br>
                </div>
                    
                    
                </div><br>

            	<button id="caracSalvar" type="button" onclick="document.getElementById('formInserirDados').submit();" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#btnSalvaCategoria').click(function(event) {
            /* Act on the event */
            var id = $('#selectCategorias').val();
            var categoria = $("#selectCategorias option:selected").text();
            var valor = $("#valorCategorias").val();
            var registro = '<tr><td data-id="' +  id + '" class="categNome">' + categoria + 
                '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir-table"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblCategorias tbody').append(registro);           
        });
        $(document).on('click', '.btn-excluir-table', function(event) {
            // event.preventDefault();
            /* Act on the event */
            var tr = $(this).closest('tr');
            console.log(tr);
            tr.remove();
        });        

        $('#caracSalvar').click(function(event) {
            /* Act on the event */
            var itensCategorias = '{"itens":[';
            var count = 0;
            // each = função para 'percorrer' todos os elementos do seletor
            $('#tblCategorias tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensCategorias = itensCategorias + ',';
                }

                var idCategoria = $(this).find('.categNome').attr('data-id');
                
                itensCategorias = itensCategorias + 
                        '{"idCategoria":"' + idCategoria + '"}';

                count++;
            });
            itensCategorias = itensCategorias + ']}'; 

            $('#carac').append("<input type='hidden' name='jsonCategorias' value='" + itensCategorias + "' >");

            $('#carac').submit();
        });
    });
</script>
