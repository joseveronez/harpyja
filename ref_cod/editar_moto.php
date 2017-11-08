<?php
    $moto = $_SESSION['parametrosView']['moto'];
    $galeria = $_SESSION['parametrosView']['galeria'];
    $marcas = $_SESSION['parametrosView']['marcas'];

    $caracteristicas = $_SESSION['parametrosView']['caracteristicas'];
    $acessorios = $_SESSION['parametrosView']['acessorios'];
    $acesso = $_SESSION['parametrosView']['acesso'];
    $carac = $_SESSION['parametrosView']['carac'];

    function trataimagem($img){
        $imagem = explode(".",$img);
        return $imagem[0];
    }

    function retirarbarra($img){
        $imagem = explode("|",$img);
        return $imagem[0];
    }

    function trazeralt($img){
        $imagem = explode("|",$img);
        return $imagem[1];
    }
?>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
    	<section>
            <form id="formEditaMoto" method="post" action="<?= caminhoSite ?>/motos/atualizar-moto" enctype="multipart/form-data">
                <h1><i class="fa fa-motorcycle" aria-hidden="true"></i>&nbsp;Moto - Editar moto</h1>
                <h4 class="sub-title">Editar dados da moto.</h4>
                
                <div class="box">
                	<div class="box-title">
                    	<h3 class="box-title-title"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Editar moto</h3>
                    </div>
                    <div class="box-content">
                        <input type="hidden" name="id" value="<?= $moto->id ?>">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Imagem Destaque</label>

                            <div class="col-sm-10">
                                <img src="<?= caminhoSite ?>/uploads/<?= $moto->img_destaque ?>" class="img-responsive">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>

                            <div class="col-sm-2">
                                <input type="file" name="img_destaque" id="destaque" class="inputfile inputfile-1"/>
                                <label for="destaque"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="img_name" value="<?= trataimagem($moto->img_destaque) ?>" placeholder="Título da imagem">
                            </div>

                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="texto_alternativo" value="<?= $moto->texto_alternativo ?>" placeholder="Texto alternativo">
                            </div>
                        </div><br>                    

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome" value="<?= $moto->nome ?>">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" value="<?= $moto->slug ?>">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Preço</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon">$</div>
                                    <input type="text" class="form-control money" name="preco" value="<?= $moto->preco ?>">
                                </div>
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Linha</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <select name="idMarca" id="input" class="form-control" required>
                                        <option value="0">Selecione uma Linha</option>
                                        <?php foreach ($marcas as $marca): ?>
                                            <option value="<?= $marca->id ?>" <?= ($marca->id == $moto->idMarca) ? 'selected' : '' ?>><?= $marca->marca ?></option>
                                        <?php endforeach ?>                                    
                                    </select>                                
                                </div>
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Vídeo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="video" value="<?= $moto->video ?>">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Descrição</label>
                            <div class="col-sm-10">
                                <textarea name="descricao" type="text" id="inputConteudo" class="form-control wmd-container" cols="10" rows="10"><?= $moto->descricao ?></textarea>
                            </div>
                        </div><br>
                    </div>
                </div><br>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-paint-brush" aria-hidden="true"></i>&nbsp;&nbsp;Características</h3>
                    </div>
                    <div class="box-content">
                        <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                            <table id="example" class="display dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Caracteristica</th>
                                        <th>Valor</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($caracteristicas as $caracteristica) {
                                    ?>                                        
                                        <tr>
                                            <td>
                                                <?= $caracteristica->caracteristica ?>
                                            </td>
                                            <td>
                                                <?= $caracteristica->valor ?>
                                            </td>
                                            <td>
                                                <center>
                                                    <a href="<?= caminhoSite ?>/motos/excluirCaractristica/<?= $caracteristica->id ?>" class="btnDeleteAjax"><button type="button" class="btn btn-default btn-excluir"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><br>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Características</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-4">
                                <div id="ListaCaracts"></div>
                                <select id="selectCaracteristica" class="form-control" name="id_caracteristica">
                                    <option selected value="">Selecione a característica</option>
                                    <?php foreach ($carac as $cara): ?>
                                        <option value="<?= $cara->id ?>"><?= $cara->caracteristica ?></option>                                        
                                    <?php endforeach ?>
                                </select>
                                <p style="margin-top:10px"><a style="cursor:pointer" onClick="AddCarac()">Adicionar característica</a> <i id="labelsucess" class="fa fa-check-square pull-right" aria-hidden="true" style="color:#50AB52; display:none">&nbsp;SUCESSO!</i></p>
                                <div id="AddCarac" style="padding:20px; background-color:#EBEBEB; display:none">
                                    <input type="text" class="form-control" name="NewCaracteristica" id="NewCaracteristica" placeholder="Nome da característica...">
                                    <button type="button" class="btn btn-sm btn-default btn-atualizar" onClick="InsertCarac()"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar caracteristica</button>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="valorCaracteristica" placeholder="valor">
                            </div>
                            <div class="col-sm-3">
                                <button type="button" id="btnSalvaCaracteristica" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                            </div><br>

                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-10 pull-right">
                                <table class="table table-striped" id="tblCaracteristicas">
                                    <thead>
                                        <tr>
                                            <th>Característica</th>
                                            <th>Valor</th>
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
                        <h3 class="box-title-title"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Acessórios</h3>
                    </div>
                    <div class="box-content">
                        <div class="panel-body content table-responsive table-full-width" style="background-color:#FFFFFF; color:#000000;">
                            <table id="example" class="display dataTable" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Acessório</th>                                    
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($acessorios as $acessorio) {
                                    ?>                                        
                                        <tr>
                                            <td>
                                                <?= $acessorio->acessorio ?>
                                            </td>                                        
                                            <td>
                                                <center>
                                                    <a href="<?= caminhoSite ?>/motos/excluirAcessorio/<?= $acessorio->id ?>" class="btnDeleteAjax">
                                                        <button type="button" class="btn btn-default btn-excluir">
                                                            <span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></a>
                                                </center>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div><br>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Acessórios</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-4">
                                <div id="ListaAcess"></div>
                                <select id="selectAcessorio" class="form-control" name="id_acessorio">
                                    <option selected value="">Selecione o acessório</option>
                                    <?php foreach ($acesso as $acess): ?>
                                        <option value="<?= $acess->id ?>"><?= $acess->acessorio ?></option>                                        
                                    <?php endforeach ?>
                                </select>

                                <p style="margin-top:10px"><a style="cursor:pointer" onClick="AdicionaAcessorio()">Adicionar Acessório</a> <i id="labelsucessAcess" class="fa fa-check-square pull-right" aria-hidden="true" style="color:#50AB52; display:none">&nbsp;SUCESSO!</i></p>
                                <div id="AddAcess" style="padding:20px; background-color:#EBEBEB; display:none">
                                    <input type="text" class="form-control" name="NewAcessorio" id="NewAcessorio" placeholder="Nome da Acessório...">
                                    <button type="button" class="btn btn-sm btn-default btn-atualizar" onClick="InsertAcessorio()"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar acessório</button>
                                </div>
                            </div>                        
                            <div class="col-sm-3">
                                <button type="button" id="btnSalvaAcessorio" class="btn btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Inserir</button>
                            </div>

                            <div class="col-sm-2">&nbsp;</div>
                            <div class="col-sm-10 pull-right">
                                <table class="table table-striped" id="tblAcessorio">
                                    <thead>
                                        <tr>                                        
                                            <th>Acessório</th>                                        
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
                        <h3 class="box-title-title"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;SEO</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="title" value="<?= $moto->title ?>">
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Description</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="description" value="<?= $moto->description ?>">
                            </div>
                        </div>
                        <div class="control-group row" style="display:none">
                            <label class="col-sm-2 control-label" align="right">Keywords</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="keywords" value="<?= $moto->keywords ?>">
                            </div>
                        </div>
                        <div class="control-group row" style="display:none">
                            <label class="col-sm-2 control-label" align="right">Author</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="author" value="<?= $moto->author ?>">
                            </div>
                        </div>
                        <div class="control-group row" style="display:none">
                            <label class="col-sm-2 control-label" align="right">Copyright</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="copyright" value="<?= $moto->copyright ?>">
                            </div>
                        </div>
                        <div class="control-group row" style="display:none">
                            <label class="col-sm-2 control-label" align="right">Application name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="application_name" value="<?= $moto->application_name ?>">
                            </div>
                        </div>
                        <div class="control-group row" style="display:none">
                            <label class="col-sm-2 control-label" align="right">Canonical</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="canonical" value="<?= $moto->canonical ?>">
                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Enviar novas imagens</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Imagens</label>

                            <div class="col-sm-10">
                                <input type="file" name="fotos[]" id="galeria" class="inputfile inputfile-1" data-multiple-caption="{count} arquivos selecionados" multiple/>
                                <label for="galeria"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </div>
                </div><br>
            </form>

            <button type="button" id="btnSalvarMoto" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>

            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-picture"></span>&nbsp;&nbsp;Galeria de imagens</h3>
                </div>
                <div class="box-content">
                    <?php if(!empty($galeria)) { ?>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                            <div class="col-sm-10">
                                <a href="<?= caminhoSite ?>/motos/remover-imagens/<?= $moto->id ?>"><button type="button" class="btn btn-default btn-excluir"><i class="fa fa-times" aria-hidden="true"></i>&nbsp;&nbsp;Remover todas as imagens</button></a>
                            </div>
                        </div><br>
                    <?php } ?>

                    <div class="control-group row" id="fotos-atuais">
                        <label class="col-sm-2 control-label" align="right">&nbsp;</label>
                        <div class="col-sm-10">
                            <?php
                                foreach ($galeria as $fotos) {
                            ?>
                                <div class="col-xs-4" style="margin-left:-15px;">
                                    <img src="<?= caminhoSite ?>/uploads/<?= $fotos->nome ?>" alt="<?= $fotos->alt ?>" class="img-thumbnail" style="width: 250px; height: 200px;">

                                    <form action="<?= caminhoSite ?>/motos/atualizar-imagem" method="post" class="form-horizontal"><br />
                                        <input type="hidden" class="form-control" name="inputId" value="<?= $fotos->id ?>" />
                                        <input type="hidden" class="form-control" name="inputIdMoto" value="<?= $moto->id ?>" />
                                        <input type="hidden" class="form-control" name="inputOldName" value="<?= $fotos->nome ?>" />
                                        <input type="text" class="form-control" name="inputNewName" placeholder="Nome da imagem" value="<?= trataimagem($fotos->nome) ?>" /><br />
                                        <input type="text" class="form-control" name="inputAlt" placeholder="Texto alternativo" value="<?= $fotos->alt ?>" /><br />

                                        <button type="submit" class="btn btn-default btn-editar"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;&nbsp;Atualizar dados</button>

                                        <a href="<?= caminhoSite ?>/motos/remover-imagem/<?= $fotos->id ?>"><button type="button" class="btn btn-default btn-excluir"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a><br /><br />
                                    </form>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div><br>
                </div>
            </div><br>
        </section>
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('.btnDeleteAjaxImagem').click(function(event) {
            /* Act on the event */
            event.preventDefault();
            var href = $(this).attr('href');
            var ele = $(this);
            swal({
                title: "Deseja realmente excluir?",
                text: "Você tem certeza que deseja excluir esta imagem?",
                type: "warning", 
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Sim, pode excluir!",
                closeOnConfirm: false
            }, function(){
                $.ajax({
                    url: href
                })
                .done(function(data) {
                    console.log("success");
                    if (data == true) {
                        $(ele).closest('tr').remove();
                        swal("Removido!", "Removido com sucesso!", "success");
                    } else {
                        swal("Erro!", "Ocorreu um erro ao remover! Tente mais tarde.", "error");
                    }
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            });
            
        });

        $('#remove-fotos').click(function(event) {
            event.preventDefault();

            var id = $(this).attr('href');

            $.ajax({
                url: '<?= caminhoSite ?>/motos/remover-fotos/' + id,                                                                
            })
            .done(function() {
                console.log("success");
                $('#fotos-atuais').remove();
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('.removeFoto').click(function(event) {
            event.preventDefault();

            var imagem = $(this).closest('div');
            var id = $(this).attr('data-id');
            var nome_imagem = $(this).attr('data-nome');

            $.ajax({
                url: '<?= caminhoSite ?>/motos/remove-foto/' + id + '/' + nome_imagem + '/',
            })
            .done(function() {
                console.log("success");
                imagem.remove();
                swal("Pronto!", "Sua imagem foi excluida!", "success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('.alterarNome').click(function(event) {
            event.preventDefault();

            var id = $(this).attr('data-id');
            var old_name = $('#inputOldName').val();
            var new_name = $('#inputNewName').val();
            var alt = $('#inputAlt').val();

            $.ajax({
                url: '<?= caminhoSite ?>/motos/altera-nome/' + id + '/' + old_name + '/' + new_name + '/' + alt + '/',
            })
            .done(function() {
                location.reload();
                location.reload();
                location.reload();
                swal("Pronto!", "Sua imagem foi alterada!", "success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });

        $('#btnSalvaCaracteristica').click(function(event) {
            /* Act on the event */
            var id = $('#selectCaracteristica').val();
            var caracteristica = $("#selectCaracteristica option:selected").text();
            var valor = $("#valorCaracteristica").val();
            var registro = '<tr><td data-id="' +  id + '" class="caracteristicaNome">' + caracteristica + 
                '</td><td class="valorCarac">' + valor + '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir-table"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblCaracteristicas tbody').append(registro);           
        });

        $('#btnSalvaAcessorio').click(function(event) {
            /* Act on the event */
            var id = $('#selectAcessorio').val();
            var acessorio = $("#selectAcessorio option:selected").text();            
            var registro = '<tr><td data-id="' +  id + '" class="acessorioNome">' + acessorio + 
                '</td><td><center><button type="button" class="btn btn-default btn-excluir btn-excluir-table"><span class="glyphicon glyphicon-trash"></span>&nbsp;&nbsp;Excluir</button></center></td></tr>'
            $('#tblAcessorio tbody').append(registro);            
        });

        $(document).on('click', '.btn-excluir-table', function(event) {
            // event.preventDefault();
            /* Act on the event */
            var tr = $(this).closest('tr');
            console.log(tr);
            tr.remove();
        });        

        $('#btnSalvarMoto').click(function(event) {
            /* Act on the event */
            var itensCaracteristicas = '{"itens":[';
            var count = 0;
            // each = função para 'percorrer' todos os elementos do seletor
            $('#tblCaracteristicas tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensCaracteristicas = itensCaracteristicas + ',';
                }

                var idCaracteristica = $(this).find('.caracteristicaNome').attr('data-id');
                var valorCaracteristica = $(this).find('.valorCarac').text();
                
                itensCaracteristicas = itensCaracteristicas + 
                        '{"idCaracteristica":"' + idCaracteristica + '", "valorCaracteristica":"' + valorCaracteristica + '"}';

                count++;
            });
            itensCaracteristicas = itensCaracteristicas + ']}'; 

            var itensAcessorios = '{"itens":[';
            count = 0;                       
            
            $('#tblAcessorio tbody tr').each(function(index, el) {
                if (count != 0) {
                    itensAcessorios = itensAcessorios + ',';
                }

                var idAcessorio = $(this).find('.acessorioNome').attr('data-id');                
                
                itensAcessorios = itensAcessorios + 
                        '{"idAcessorio":"' + idAcessorio + '"}';

                count++;
            });
            itensAcessorios = itensAcessorios + ']}'; 

            console.log(itensAcessorios);

            $('#formEditaMoto').append("<input type='hidden' name='jsonCaracteristicas' value='" + itensCaracteristicas + "' >");
            $('#formEditaMoto').append("<input type='hidden' name='jsonAcessorios' value='" + itensAcessorios + "' >");

            $('#formEditaMoto').submit();
        });
    });

    function AddCarac(){
        $('#AddCarac').show();
        $('#NewCaracteristica').focus();
    }
    function InsertCarac(){
        $.ajax({
            url: '<?= caminhoSite ?>/motos/save-caracteristica',
            type: 'POST',
            dataType: "HTML",
            data: { caracteristica: $('#NewCaracteristica').val() },
            success: function(data){
                $('#selectCaracteristica').append(data);
                $('#AddCarac').hide();
                $('#labelsucess').show();
                $('#ListaCaracts').show();
            }
        });
    }
    function AdicionaAcessorio(){
        $('#AddAcess').show();
        $('#NewAcessorio').focus();
    }
    function InsertAcessorio(){
        $.ajax({
            url: '<?= caminhoSite ?>/motos/save-acessorio',
            type: 'POST',
            dataType: "HTML",
            data: { acessorio: $('#NewAcessorio').val() },
            success: function(data){
                $('#selectAcessorio').append(data);
                $('#AddAcess').hide();
                $('#labelsucessAcess').show();
                $('#ListaAcess').show();
            }
        });
    }
</script>