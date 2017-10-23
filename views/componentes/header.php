<style type="text/css">
    .nav>li>a:focus { background-color: #666666; color: #ffffff }
    .nav>li>a:active { background-color: #666666; color: #ffffff }
    nav .bloco-icones a { color: #2d2d2d }
    nav .bloco-icones a:hover { color: #666666 }
    nav .bloco-icones i { font-size: 35px }

    @media screen and (max-width: 767px) {
        .navbar-header { background: #f7f7f7; padding-top: 10px; padding-bottom: 10px }
        .navbar-header img { height: 50px }
        button.navbar-toggle { border: 1px solid #444142; border-radius: 0px; margin-right: 0 }
        button.navbar-toggle span { background: #444142; }
    }
</style>
<nav class="navbar navbar-fixed-top bg-branco" role="navigation">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 bg-branco padding-zero">
            <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs cinza-claro-fonte">
                <a href="<?= RAIZSITE ?>">
                    <img src="<?= RAIZSITE ?>/imagens/Harpyja-logo.png" class="img-responsive">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs col-sm-offset-3 text-right cinza-claro-fonte bloco-icones" style="margin-top: 25px;">
                <a href="http://www.facebook.com/facebook" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://twitter.com/twitter" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCSbW9j_JVr6Iyd_yMWv--MQ" target="_blank"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <div class="navbar-header">
        <div class="hidden-lg hidden-md hidden-sm col-xs-12">
            <a href="<?= RAIZSITE ?>"><img src="<?= RAIZSITE ?>/imagens/logo-sem-fundo.png" class="img-mobile"></a>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
    </div>
    <div class = "collapse navbar-collapse bg-preto" id = "example-navbar-collapse">
        <div class="container">
            <ul class="nav navbar-nav padding-zero">
                <li><a href="<?= RAIZSITE ?>" class="branco-fonte">HOME</a></li>
                <li><a href="<?= RAIZSITE ?>/avaliacoes" class="branco-fonte">AVALIAÇÕES</a></li>
                <li><a href="<?= RAIZSITE ?>/sobre" class="branco-fonte">SOBRE</a></li>
                <li><a href="<?= RAIZSITE ?>/contato" class="branco-fonte">CONTATO</a></li>
            </ul>
        </div>
    </div>
</nav>