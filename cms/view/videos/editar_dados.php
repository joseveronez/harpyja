<?php
    $dados = $_SESSION["parametrosView"];
?>
<div class="col-md-9 pull-right conteudo">
    <div class="fluid content">
        <section>
            <h1><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;Vídeos - Editar Vídeo</h1>
            <h4 class="sub-title">Editar informações do vídeo</h4>

            <form action="<?= caminhoSite ?>/videos/atualizar-dados" method="post" enctype="multipart/form-data">
            	<input type="hidden" name="id" value="<?= $dados->id ?>" />

            	<div class="box">
                    <div class="box-title">
                        <h3 class="box-title-title"><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;Vídeo</h3>
                    </div>
                    <div class="box-content">
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Link do Vídeo (Embed)</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="link_video" maxlength="255" value="<?= $dados->link_video ?>" />
                            </div>
                        </div><br>
            			<div class="control-group row">
                            <label class="col-sm-2 control-label" align="right">Título</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="Titulo" maxlength="255" value="<?= $dados->Titulo ?>" />
                            </div>
                        </div><br>
            		</div>
                </div><br>

            	<button type="submit" class="btn btn-lg btn-default btn-atualizar"><span class="glyphicon glyphicon-ok"></span>&nbsp;&nbsp;Atualizar</button>
            </form>
        </section>
        <?php include caminhoFisico . "/view/parts/footer.php" ?>
    </div>
</div>