<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;Vídeos - Novo Vídeo</h1>
            <h4 class="sub-title">Adicionar novo vídeo</h4>

            <form action="<?= caminhoSite ?>/videos/salvar-dados" method="post" enctype="multipart/form-data" id="formInserirDados">
            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;Vídeo</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link do Vídeo (Embed)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_video" maxlength="255"  />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Titulo" maxlength="255"  />
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