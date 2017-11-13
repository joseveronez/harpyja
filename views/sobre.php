<?php
    $config = Configurar::sql("SELECT * FROM configurar", SimpleOrm::FETCH_ONE);
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margem-header">
    <div class="container padding-mobile">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB7p" style="background-image: url(<?= RAIZSITE ?>/cms/uploads/<?= $config->banner_sobre ?>); background-position: center center; background-repeat: no-repeat; background-size: cover; background-origin: content-box ; height: 250px;">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-zero MarginB10p">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                <h3 class="size18"><?= $config->titulo_empresa ?></h3>
                <hr class="hrTitleSobre hrPadrao MarginB2p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                <h5 class="size13 justify margin-zero" style="line-height: 1.42857143; height: 90px; overflow: hidden; margin-bottom: 10px;"><?= $config->texto_empresa ?></h5>
                
                <a role="button" href="<?= RAIZSITE ?>/institucional/<?= $config->slug_empresa ?>" class="btn btn-default size16 contato-saiba">Saiba mais&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 padding-zero MarginB10p">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                <h3 class="size18"><?= $config->titulo_nome ?></h3>
                <hr class="hrTitleSobre hrPadrao MarginB2p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                <h5 class="size13 justify margin-zero" style="line-height: 1.42857143; height: 90px; overflow: hidden; margin-bottom: 10px;"><?= $config->texto_nome ?></h5>
                
                <a role="button" href="<?= RAIZSITE ?>/institucional/<?= $config->slug_nome ?>" class="btn btn-default size16 contato-saiba">Saiba mais&nbsp;&nbsp;<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
</script>