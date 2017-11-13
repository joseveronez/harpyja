<?php
    $produtos = $_SESSION["parametrosView"]["produtos"];
    $topicos = $_SESSION["parametrosView"]["topicos"];
?>
<style type="text/css">
    div.tagsinput { width: 100% !important }
</style>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Avaliações - Nova Avaliação</h1>
            <h4 class="sub-title">Criar uma nova avaliação</h4>

            <form id="ava" action="<?= caminhoSite ?>/avaliacoes/salvar-dados" method="post" enctype="multipart/form-data">
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Informações</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Produto</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="id_produto">
                                    <option selected value="">Selecione o Produto</option>
                                    <?php foreach ($produtos as $produto) { ?>
                                        <option value="<?= $produto->id ?>"><?= $produto->nome ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Descritivo</label>

                            <div class="col-sm-10">
                                <textarea name="texto" type="text" class="form-control tinyMCE" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Galeria de imagens</label>

                            <div class="col-sm-10">
                                <input type="file" name="imagens" id="imagens" class="inputfile inputfile-1" required />
                                <label for="imagens"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Notas</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-4">
                                <select id="selectTopicos" class="form-control" name="produto">
                                    <option selected value="">Selecione o tópico</option>
                                    <?php foreach ($topicos as $topico) { ?>
                                        <option value="<?= $topico->id ?>"><?= $topico->nome ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="valorTopico" placeholder="0.0">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" id="btnSalvaNota" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                            </div><br>

                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-10 pull-right">
                                <table class="table table-striped" id="tblNotas">
                                    <thead>
                                        <tr>
                                            <th>tópico</th>
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
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Pontos fortes</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtPtForte" placeholder="valor">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" id="btnSalvaPtForte" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                            </div><br>
                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-10 pull-right">
                                <table class="table table-striped" id="tblPtForte">
                                    <thead>
                                        <tr>
                                            <th>pontos fortes</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Pontos fracos</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="txtPtFraco" placeholder="valor">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" id="btnSalvaPtFraco" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                            </div><br>
                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-10 pull-right">
                                <table class="table table-striped" id="tblPtFraco">
                                    <thead>
                                        <tr>
                                            <th>pontos fracos</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Preço</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="preco" placeholder="00,00" />
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="link" placeholder="link da oferta" />
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="empresa" placeholder="link da logo" />
                            </div><br><br>

                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-3">
                                <button type="button" id="btnSalvaPreco" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                            </div><br>

                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-10 pull-right">
                                <table class="table table-striped" id="tblPrecos">
                                    <thead>
                                        <tr>
                                            <th>preco</th>
                                            <th>link</th>
                                            <th>empresa</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Tags</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tags" id="tags" maxlength="255" required />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                
                <button id="Salvar" type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tags').tagsInput();

        $('#btnSalvaNota').click(function(event) {
            var id = $("#selectTopicos").val();
            var topico = $("#selectTopicos option:selected").text();
            var valorTopico = $("#valorTopico").val();

            var registro = '<tr><td data-id="' +  id + '" class="topicoNome">' + topico + 
                '</td><td class="valorTopico">' + valorTopico + 
                '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblNotas tbody').append(registro);
        });

        $('#btnSalvaPtForte').click(function(event) {
            var pt_forte = $("#txtPtForte").val();
            var registro = '<tr><td class="valPtForte">' + pt_forte + 
                '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir-table"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblPtForte tbody').append(registro);
        });
        
        $('#btnSalvaPtFraco').click(function(event) {
            var pt_forte = $("#txtPtFraco").val();
            var registro = '<tr><td class="valPtFraco">' + pt_forte + 
                '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir-table"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblPtFraco tbody').append(registro);
        });

        $('#btnSalvaPreco').click(function(event) {
            var preco = $("#preco").val();
            var link = $("#link").val();
            var empresa = $("#empresa").val();

            var registro = '<tr><td class="valorPreco">' + preco + 
                '</td><td class="valorLink">' + link + 
                '</td><td class="valorEmpresa">' + empresa + 
                '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblPrecos tbody').append(registro);
        });
        
        $(document).on('click', '.btn-excluir-table', function(event) {
            var tr = $(this).closest('tr');
            console.log(tr);
            tr.remove();
        });
        
        $('#Salvar').click(function(event) {
            var itensNotas = '{"itens":[';
            var count = 0;
            $('#tblNotas tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensNotas = itensNotas + ',';
                }

                var idTopico = $(this).find('.topicoNome').attr('data-id');
                var valorTopico = $(this).find('.valorTopico').text();
                
                itensNotas = itensNotas + '{"idTopico":"' + idTopico + '", "valorTopico":"' + valorTopico + '"}';

                count++;
            });
            itensNotas = itensNotas + ']}';
            $('#ava').append("<input type='hidden' name='jsonNotas' value='" + itensNotas + "' >");

            var itensPtFortes = '{"itens":[';
            var count = 0;
            $('#tblPtForte tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensPtFortes = itensPtFortes + ',';
                }
                var valorPtForte = $(this).find('.valPtForte').text();
                
                itensPtFortes = itensPtFortes +  
                        '{"valorPtForte":"' + valorPtForte + '"}';

                count++;
            });
            itensPtFortes = itensPtFortes + ']}';
            $('#ava').append("<input type='hidden' name='jsonPtFortes' value='" + itensPtFortes + "' >");

            var itensPtFracos = '{"itens":[';
            var count = 0;
            $('#tblPtFraco tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensPtFracos = itensPtFracos + ',';
                }
                var valorPtFraco = $(this).find('.valPtFraco').text();
                
                itensPtFracos = itensPtFracos +  
                        '{"valorPtFraco":"' + valorPtFraco + '"}';

                count++;
            });
            itensPtFracos = itensPtFracos + ']}';
            $('#ava').append("<input type='hidden' name='jsonPtFracos' value='" + itensPtFracos + "' >");

            var itensPreco = '{"itens":[';
            var count = 0;
            $('#tblPrecos tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensPreco = itensPreco + ',';
                }

                var valorPreco = $(this).find('.valorPreco').text();
                var valorLink = $(this).find('.valorLink').text();
                var valorEmpresa = $(this).find('.valorEmpresa').text();
                
                itensPreco = itensPreco + '{"valorPreco":"' + valorPreco + '", "valorLink":"' + valorLink + '", "valorEmpresa":"' + valorEmpresa + '"}';

                count++;
            });
            itensPreco = itensPreco + ']}';
            $('#ava').append("<input type='hidden' name='jsonPreco' value='" + itensPreco + "' >");

            $('#ava').submit();
        });
    });
</script>