<?php
    $videos = Videos::sql("SELECT * FROM videos ORDER BY id DESC");
?>

<style type="text/css">
    @media screen and (min-width: 768px) {
        #my-slider { margin-top: 137px }
    }
    @media screen and (max-width: 767px) {
        #my-slider { margin-top: 70px }
    }

    .bloco-galeria .conteudo { margin-top: 50px;}
    .bloco-galeria .conteudo .titulo { margin-bottom: 25px }
    .bloco-titulo .conteudo { margin-top: 50px; margin-bottom: 25px }
    .bloco-sobre .conteudo { padding-top: 65px; padding-bottom: 50px }
    .bloco-sobre .conteudo p { font-size: 16px; text-align: justify }
</style>
<div class="slider-pro margem-header-home" id="my-slider">
    <div class="sp-slides">
        <div class="sp-slide">
            <img class="sp-image" src="<?= RAIZSITE ?>/imagens/teste.jpg">
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="<?= RAIZSITE ?>/imagens/teste.jpg">
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="<?= RAIZSITE ?>/imagens/teste.jpg">
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bloco-titulo padding-zero">
    <div class="container conteudo padding-mobile">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1>
                Lorem ipsum
                <hr class="hrTitle hrPadrao hidden-sm hidden-xs">
            </h1>
            <h2>
                Lorem ipsum dolor sit amet.
            </h2>
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
    <div class="container">
        <div class="" style="margin-top: 5px;">
            <div class="slider-pro sp-vertical" id="my-slider2">
                <div class="sp-slides">
                    <div class="sp-slide Relative">
                        <img class="sp-image" src="<?= RAIZSITE ?>/imagens/teste.jpg"/>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                            <h3 style="margin: 10px;">9</h3>
                        </div>
                        <a href="" class="title-noticia" target="_self">
                            <h5 class="text-noticia">
                                <b>Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing</b>
                            </h5>
                        </a>
                        <div class="sp-thumbnail">
                            <div class="sp-thumbnail-image-container Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                                <div class="col-lg-3 col-md-3 col-sm-1 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h5 style="margin: 10px;">9</h5>
                                </div>
                            </div>
                            <div class="sp-thumbnail-text">
                                <div class="sp-thumbnail-title">Lorem ipsum</div>
                                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing</div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-slide">
                        <img class="sp-image" src="<?= RAIZSITE ?>/imagens/teste.jpg"/>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                            <h3 style="margin: 10px;">9</h3>
                        </div>
                        <a href="" class="title-noticia" target="_self">
                            <h5 class="text-noticia">
                                <b>Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing</b>
                            </h5>
                        </a>
                        <div class="sp-thumbnail">
                            <div class="sp-thumbnail-image-container Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                                <div class="col-lg-3 col-md-3 col-sm-1 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h5 style="margin: 10px;">9</h5>
                                </div>
                            </div>
                            <div class="sp-thumbnail-text">
                                <div class="sp-thumbnail-title">Lorem ipsum</div>
                                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing</div>
                            </div>
                        </div>
                    </div>
                    <div class="sp-slide">
                        <img class="sp-image" src="<?= RAIZSITE ?>/imagens/teste.jpg"/>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                            <h3 style="margin: 10px;">9</h3>
                        </div>
                        <a href="" class="title-noticia" target="_self">
                            <h5 class="text-noticia">
                                <b>Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing</b>
                            </h5>
                        </a>
                        <div class="sp-thumbnail">
                            <div class="sp-thumbnail-image-container Relative" style="background-image: url(<?= RAIZSITE ?>/imagens/teste.jpg); background-position: center center; background-repeat: no-repeat; background-size: cover;">
                                <div class="col-lg-3 col-md-3 col-sm-1 col-xs-2 padding-zero Absolute text-center branco-fonte bg-nota position-nota">
                                    <h5 style="margin: 10px;">9</h5>
                                </div>
                            </div>
                            <div class="sp-thumbnail-text">
                                <div class="sp-thumbnail-title">Lorem ipsum</div>
                                <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing Dolor sit amet, consectetur adipiscing</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-cinza-claro bloco-sobre MarginT10p">
    <div class="container conteudo padding-mobile PaddingT5p PaddingB5p">
        <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 padding-mobile">
            <img class="img-responsive img-circle" src="<?= RAIZSITE ?>/imagens/autor.png" style="margin: 0 auto; max-height: 300px;"><br>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 padding-mobile">
            <h3 class="margin-zero">Lorem ipsum</h3><br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu felis quis lorem volutpat vestibulum. In quis vulputate dolor, eget feugiat neque. Donec mauris tellus, vulputate ut ligula eget, ullamcorper semper erat. Donec nulla tortor, malesuada ac nisi vitae, porta interdum magna. Suspendisse ex elit, rhoncus nec risus et, interdum gravida lacus.</p>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-1 hidden-xs">&nbsp;</div>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bloco-galeria">
    <div class="container conteudo padding-mobile">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero">
            <h4 class="size18 margin-zero">GALERIA DE VÍDEOS</h4>
            <hr class="hrTitleSobre hrPadrao MarginB5p">
        </div>
    </div>
    <div class="container galeria-videos padding-mobile MarginB10p">
        <?php
            foreach ($videos as $video) {
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 video">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 padding-zero video-container">
                        <iframe src="<?= $video->link_video ?>" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-cinza-claro parallax-img parallax-default">
    <div class="container"></div>
</div>

<script type="text/javascript">
        jQuery( document ).ready(function( $ ) {
		  $( '#my-slider' ).sliderPro({
              width: '100%',
              height: 350,
              buttons: false,
              breakpoints: {
                1000:{
                },
				800: {
                    height: 380,
				},
				500: {
                    height: 300,
				}
			}
          });
        });
        $( '#my-slider2' ).sliderPro({
              width: 620,
              height: 400,
              orientation: 'horizontal',
              loop: false,
              arrows: true,
              buttons: false,
              thumbnailsPosition: 'right',
              thumbnailPointer: true,
              thumbnailWidth: 500,
              thumbnailHeight: 100,
              autoplay: false,
              breakpoints: {
                1200:{
                    width: 600,
                    thumbnailWidth: 400,
                },
                1150:{
                    width: 520,
                    thumbnailWidth: 400,
                },
				1000: {
					thumbnailsPosition: 'bottom',
                    width: '100%',
					thumbnailWidth: 0,
					thumbnailHeight: 0
				},
				500: {
					thumbnailsPosition: 'bottom',
					thumbnailWidth: 0,
					thumbnailHeight: 0
				}
			}
          });
</script>