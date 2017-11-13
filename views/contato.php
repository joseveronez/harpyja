<?php
    $config = Configurar::sql("SELECT * FROM configurar", SimpleOrm::FETCH_ONE);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero Relative margem-header" >
    <div class="container padding-mobile ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB3p">
            <h3>CONTATO</h3>
            <hr class="hrTitleFull hrPadrao MarginB3p">
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 MarginB10p">
            <h4 class="Bold">Harpyja</h4>
            <p><?= $config->endereco ?><br>
                <?= $config->bairro ?>, <?= $config->cidade ?> - <?= $config->estado_uf ?><br>
                CEP: <?= $config->cep ?>
            </p>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero bloco-mapa">
                <div class="google-maps">
                    <iframe id="iframeMaps" src="<?= $config->mapa ?>"></iframe>
                </div>
            </div>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 MarginB10p MarginT2p">
            <form action="" class="form-horizontal Roboto Regular" id="formulario">
                <input type="text" class="form-control" name="nome" placeholder="NOME *" required><br>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
                    <input type="email" class="form-control" name="email" placeholder="E-MAIL *" required><br>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 padding-zero">
                    <input type="text" class="form-control" name="telefone" placeholder="TELEFONE *" required><br>
                </div>
                
                <input type="text" class="form-control" name="assunto" placeholder="ASSUNTO *" required><br>
                <textarea class="form-control" name="mensagem" rows="8" cols="3" placeholder="MENSAGEM *"></textarea><br>
                <button type="submit" class="btn btn-formulario size13 pull-right">ENVIAR</button>
            </form>
        </div>
    </div>
</div>