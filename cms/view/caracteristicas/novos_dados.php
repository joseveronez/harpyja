<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-list" aria-hidden="true"></i>&nbsp;Caractrísticas - Nova Caracteristica</h1>
            <h4 class="sub-title">Criar uma nova Caracteristica</h4>

            <form action="<?= caminhoSite ?>/caracteristicas/salvar-dados" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Características</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">caracteristicas</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="caracteristicas" maxlength="255" required />
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