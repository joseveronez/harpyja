<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;Configurações - Páginas</h1>
            <h4 class="sub-title">Configure dados das páginas.</h4>

            <form action="<?= caminhoSite ?>/configurar/atualizar-pagina" method="post" enctype="multipart/form-data">
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-user-circle" aria-hidden="true"></i>&nbsp;&nbsp;Autor</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Foto Autor</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->img_autor)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->img_autor ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="img_autor" id="img_autor" class="inputfile inputfile-1" />
                                <label for="img_autor"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Titulo Autor</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_autor" maxlength="255" value="<?= $dados->titulo_autor ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto Autor</label>

                            <div class="col-sm-10">
                                <textarea name="texto_autor" type="text" class="form-control wmd-container" cols="10" rows="10"><?= $dados->texto_autor ?></textarea>
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-comments" aria-hidden="true"></i>&nbsp;&nbsp;Contato</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Endereço</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="endereco" maxlength="255" value="<?= $dados->endereco ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Bairro</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="bairro" maxlength="255" value="<?= $dados->bairro ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Cidade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cidade" maxlength="255" value="<?= $dados->cidade ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Estado (UF)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="estado_uf" maxlength="2" value="<?= $dados->estado_uf ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">CEP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="cep" maxlength="255" value="<?= $dados->cep ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link Mapa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mapa" maxlength="500" value="<?= $dados->mapa ?>" />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-file-o" aria-hidden="true"></i>&nbsp;&nbsp;Header e Footer</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Logo Cabeçalho</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->logo_cabecalho)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->logo_cabecalho ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="logo_cabecalho" id="logo_cabecalho" class="inputfile inputfile-1" />
                                <label for="logo_cabecalho"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Facebook</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="facebook" maxlength="255" value="<?= $dados->facebook ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Twitter</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="twitter" maxlength="255" value="<?= $dados->twitter ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Youtube</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="youtube" maxlength="255" value="<?= $dados->youtube ?>" />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp;Home</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Titulo Página Home</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo" maxlength="255" value="<?= $dados->titulo ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Subtítulo Página Home</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="subtitulo" maxlength="255" value="<?= $dados->subtitulo ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Parallax</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->parallax)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->parallax ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="parallax" id="parallax" class="inputfile inputfile-1" />
                                <label for="parallax"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp;&nbsp;Sobre</h3>
                    </div>
                    <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Banner Página Sobre</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->banner_sobre)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->banner_sobre ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="banner_sobre" id="banner_sobre" class="inputfile inputfile-1" />
                                <label for="banner_sobre"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Slug Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug_empresa" maxlength="255" value="<?= $dados->slug_empresa ?>" />
                            </div>
                        </div><br>

                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Banner Página Empresa</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->banner_empresa)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->banner_empresa ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="banner_empresa" id="banner_empresa" class="inputfile inputfile-1" />
                                <label for="banner_empresa"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Titulo Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_empresa" maxlength="255" value="<?= $dados->titulo_empresa ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto Empresa</label>

                            <div class="col-sm-10">
                                <textarea name="texto_empresa" type="text" class="form-control wmd-container" cols="10" rows="10"><?= $dados->texto_empresa ?></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Slug Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug_nome" maxlength="255" value="<?= $dados->slug_nome ?>" />
                            </div>
                        </div><br>


                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Banner Página O Nome</label>

                            <div class="col-sm-10">
                                <?php
                                    if (!empty($dados->banner_nome)) {
                                ?>
                                    <i class="fa fa-file-archive-o fa-2x" aria-hidden="true"></i>&nbsp;&nbsp;<?= $dados->banner_nome ?><br />
                                <?php
                                    }
                                ?>

                                <input type="file" name="banner_nome" id="banner_nome" class="inputfile inputfile-1" />
                                <label for="banner_nome"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Titulo Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo_nome" maxlength="255" value="<?= $dados->titulo_nome ?>" />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Texto Nome</label>

                            <div class="col-sm-10">
                                <textarea name="texto_nome" type="text" class="form-control wmd-container" cols="10" rows="10"><?= $dados->texto_nome ?></textarea>
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>