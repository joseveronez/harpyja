<?php
    $url = explode('/', $_SERVER['REQUEST_URI']);
    $slug = end($url);

    $categorias = Categorias::sql("SELECT * FROM categorias");
    $avaliacoes = Avaliacoes::sql("SELECT * FROM avaliacoes");
?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margem-header MarginB10p">
    <div class="container padding-mobile">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB5p padding-mobile">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB3p padding-zero">
                <h3>AVALIAÇÕES RECENTES</h3>
                <hr class="hrTitleFull hrPadrao MarginB3p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <div class="owl-carousel owl-theme" id="avCarousel1">
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h3 class="nota-ava-recentes">9</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;">
                                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-3 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h3 class="nota-ava-recentes">9</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;">
                                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h3 class="nota-ava-recentes">9</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB10p padding-mobile">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <h3 class="size18 Uppercase"><?= $slug ?></h3>
                <hr class="hrTitleFull hrPadrao MarginB3p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <div class="owl-carousel owl-theme" id="avCarousel2">
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;height: 200px;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h3 style="margin: 10px;">9</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>


<script  type="text/javascript">
    $(document).ready(function() {
        $("#avCarousel1").owlCarousel({
            loop:true,
            items: 1,
            nav: false,
            dots: true,
            
        });
        $("#avCarousel2").owlCarousel({
            rtl:true,
            loop:true,
            items: 4,
            margin: 5,
            responsive:{
                1200:{
                    items: 4,
                },
                992:{
                    items:3,
                },
                768:{
                    items:2,
                },
                480:{
                    items:1,
                },
                320:{
                    items:1,
                }
            }
        });
        $("#avCarousel3").owlCarousel({
            rtl:true,
            loop:true,
            items: 4,
            margin: 5,
            responsive:{
                1200:{
                    items: 4,
                },
                992:{
                    items:3,
                },
                768:{
                    items:2,
                },
                480:{
                    items:1,
                },
                320:{
                    items:1,
                }
            }
        });
        $("#avCarousel4").owlCarousel({
            rtl:true,
            loop:true,
            items: 4,
            margin: 5,
            responsive:{
                1200:{
                    items: 4,
                },
                992:{
                    items:3,
                },
                768:{
                    items:2,
                },
                480:{
                    items:1,
                },
                320:{
                    items:1,
                }
            }
        });
    });
</script>