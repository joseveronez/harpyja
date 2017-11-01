<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margem-header MarginB10p">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB5p">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB3p padding-zero">
                <h3>AVALIAÇÕES RECENTES</h3>
                <hr class="hrTitleFull hrPadrao MarginB3p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <div class="owl-carousel owl-theme" id="avCarousel1">
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;"></div>
                        </a>
                    </div>
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;"></div>
                        </a>
                    </div>
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <div class="img-avaliacoes" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat;background-size: 100% 100%;"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB10p">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <h3 class="size18">TORRADEIRAS</h3>
                <hr class="hrTitleFull hrPadrao MarginB3p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <div class="owl-carousel owl-theme" id="avCarousel2">
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <img src="<?= RAIZSITE ?>/imagens/teste.jpg" class="img-responsive" style="margin: 0 auto; height: 200px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB10p">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <h3 class="size18">LIQUIDIFICADORES</h3>
                <hr class="hrTitleFull hrPadrao MarginB3p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <div class="owl-carousel owl-theme" id="avCarousel3">
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <img src="<?= RAIZSITE ?>/imagens/teste.jpg" class="img-responsive" style="margin: 0 auto; height: 200px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 MarginB10p">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <h3 class="size18">AQUECEDORES</h3>
                <hr class="hrTitleFull hrPadrao MarginB3p">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
                <div class="owl-carousel owl-theme" id="avCarousel4">
                    <div>
                        <a href="<?= RAIZSITE ?>/avaliacao">
                            <img src="<?= RAIZSITE ?>/imagens/teste.jpg" class="img-responsive" style="margin: 0 auto; height: 200px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        
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