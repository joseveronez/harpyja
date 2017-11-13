<?php 
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $slug = end($url);
    $config = Configurar::sql("SELECT * FROM configurar", SimpleOrm::FETCH_ONE);
?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margem-header">
    <div class="container padding-mobile">
        
        <?php
            if ($slug == 'empresa'){
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB7p" style="background-image: url(<?= RAIZSITE ?>/cms/uploads/<?= $config->banner_empresa ?>); background-position: center center; background-repeat: no-repeat; background-size: cover; background-origin: content-box ; height: 430px;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                        <h3 class="size18"><?= $config->titulo_empresa ?></h3>
                        <hr class="hrTitleSobre hrPadrao MarginB2p">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                        <p class="size13 justify"><?= $config->texto_empresa ?></p>
                    </div>
                </div>
                <?php
            } else if($slug == 'o-nome') {
                ?>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB7p" style="background-image: url(<?= RAIZSITE ?>/cms/uploads/<?= $config->banner_nome ?>); background-position: center center; background-repeat: no-repeat; background-size: cover; background-origin: content-box ; height: 300px;">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero MarginB10p">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                        <h3 class="size18"><?= $config->titulo_nome ?></h3>
                        <hr class="hrTitleSobre hrPadrao MarginB2p">
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-mobile">
                        <p class="size13 justify"><?= $config->texto_nome; ?></p>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>
<script type="text/javascript">
</script>