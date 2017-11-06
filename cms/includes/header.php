<body style="background-color:#d9d9d9">
	<div class="fluid">
    	<section>
            <nav class="navbar navbar-fixed-top collapse navbar-collapse" role="navigation">
                <div class="fluid">
                    <div class="collapse navbar-collapse collapse">
                        <ul class="nav navbar-nav pull-right">
                            <li>
                            	<a onClick="perfil()" id="iconeComberweb">
                                    <img src="<?= logoEmpresa ?>" class="img-responsive" style="height: 40px;">
                                </a>
                            </li>
                        </ul>
                	</div>
            	</div>
            </nav>
        </section>
        
        <section>
        	<div id="wrapper">
                <div id="sidebar-wrapper" style="background-color:#17181b">
                	<ul class="lista">

						<li class="item <?php if($_SESSION["paginaAtual"] == "configurar/gerenciar") echo "menu-active-side" ?>">
                            <a href="<?= caminhoSite ?>/configurar/gerenciar-pagina"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Configuracoes
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>

						<li class="item <?php if($_SESSION["paginaAtual"] == "avaliacoes/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-check-square-o" aria-hidden="true"></i>&nbsp;&nbsp;Avaliações
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "avaliacoes/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "avaliacoes/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/avaliacoes/novos-dados">Nova Avaliação</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "avaliacoes/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/avaliacoes/gerenciar-dados">Gerenciar Avaliações</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "videos/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-youtube-play" aria-hidden="true"></i>&nbsp;&nbsp;Vídeos
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "videos/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "videos/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/videos/novos-dados">Novo vídeo</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "videos/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/videos/gerenciar-dados">Gerenciar Videos</a>
	                        </li>
                    	</ul>

						<li class="item <?php if($_SESSION["paginaAtual"] == "caracteristicas/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-list" aria-hidden="true"></i>&nbsp;&nbsp;Características
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "caracteristicas/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "caracteristicas/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/caracteristicas/novos-dados">Nova Característica</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "caracteristicas/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/caracteristicas/gerenciar-dados">Nova Característica</a>
	                        </li>
                    	</ul>
						<li class="item">
                            <a href="<?= caminhoSite ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                        </li>
					</ul>
                </div>
            </div>
        </section>