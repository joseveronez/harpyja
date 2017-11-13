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

						<li class="item <?php if(($_SESSION["paginaAtual"] == "configurar/gerenciar") || ($_SESSION["paginaAtual"] == "banners_home/gerenciar")) echo "menu-active-side" ?>">
                            <a href="#" class="menu-item-side"><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;&nbsp;Configurações
                            <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
                        </li>
                        <ul class="lista-sub-itens <?php if(($_SESSION["paginaAtual"] == "configurar/gerenciar") || ($_SESSION["paginaAtual"] == "banners_home/gerenciar")) echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "configurar/gerenciar") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/configurar/gerenciar-pagina">Configurações</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "banners_home/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/banners_home/novos-dados">Adicionar Banner</a>
	                        </li>
	                        <li class="sub-item <?php if($_SESSION["blackPage"] == "banners_home/gerenciar") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/banners_home/gerenciar-dados">Gerenciar Banners</a>
	                        </li>
                    	</ul>

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
                        
                        <li class="item <?php if($_SESSION["paginaAtual"] == "produtos/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;Produtos
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "produtos/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "produtos/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/produtos/novos-dados">Novo Produto</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "produtos/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/produtos/gerenciar-dados">Gerenciar Produtos</a>
	                        </li>
                    	</ul>
                        
                        <li class="item <?php if($_SESSION["paginaAtual"] == "categorias/gerenciar") echo "menu-active-side" ?>">
	                        <a href="#" class="menu-item-side"><i class="fa fa-list-alt" aria-hidden="true"></i>&nbsp;&nbsp;Categorias
	                        <span class="glyphicon glyphicon-menu-right pull-right"></span></a>
	                    </li>
	                    <ul class="lista-sub-itens <?php if($_SESSION["paginaAtual"] == "categorias/gerenciar") echo "menu-open-side"; else echo "menu-close-side"; ?>" id="config_form" name="config_form">
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "categorias/novos-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/categorias/novos-dados">Nova Categoria</a>
	                        </li>
	                    	<li class="sub-item <?php if($_SESSION["blackPage"] == "categorias/gerenciar-dados") echo "black" ?>">
	                            <a href="<?= caminhoSite ?>/categorias/gerenciar-dados">Gerenciar Categoria</a>
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
	                            <a href="<?= caminhoSite ?>/caracteristicas/gerenciar-dados">Gerenciar Características</a>
	                        </li>
                    	</ul>
						<li class="item">
                            <a href="<?= caminhoSite ?>/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
                        </li>
					</ul>
                </div>
            </div>
        </section>