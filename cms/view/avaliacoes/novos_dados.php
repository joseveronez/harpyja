<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;Avaliações - Nova Avaliação</h1>
            <h4 class="sub-title">Criar uma nova avaliação</h4>

            <form action="<?= caminhoSite ?>/avaliacoes/salvar-dados" method="post" enctype="multipart/form-data">
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-info" aria-hidden="true"></i>&nbsp;&nbsp;Informações</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">slug</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="slug" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nome_produto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nome_produto" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">categoria</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="categoria" maxlength="255" required />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Notas</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nota_desempenho</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nota_desempenho" maxlength="10" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nota_design_e_acabamento</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nota_design_e_acabamento" maxlength="10" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nota_praticidade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nota_praticidade" maxlength="10" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nota_limpeza</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nota_limpeza" maxlength="10" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">nota_seguranca</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nota_seguranca" maxlength="10" required />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-comments-o" aria-hidden="true"></i>&nbsp;&nbsp;Pontos fortes e Pontos fracos</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">pontos_fortes</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pontos_fortes" maxlength="255" required />
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">pontos_fracos</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="pontos_fracos" maxlength="255" required />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-dollar" aria-hidden="true"></i>&nbsp;&nbsp;Preço</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">preco</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="preco" maxlength="255" required />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-tag" aria-hidden="true"></i>&nbsp;&nbsp;Tags</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">tag</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="tag" maxlength="255" required />
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-text-height" aria-hidden="true"></i>&nbsp;&nbsp;Texto e Imagens</h3>
                    </div>
                    <div class="box-content">
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">texto</label>

                            <div class="col-sm-10">
                                <textarea name="texto" type="text" class="form-control tinyMCE" cols="10" rows="10"></textarea>
                            </div>
                        </div><br>
                        <div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">imagens</label>

                            <div class="col-sm-10">
                                <input type="file" name="imagens" id="imagens" class="inputfile inputfile-1" required />
                                <label for="imagens"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Escolha o arquivo&hellip;</span></label>
                            </div>
                        </div><br>
                    </div>
                </div><br />
                <button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Salvar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>