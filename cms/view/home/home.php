<style type="text/css">
    canvas{
        width: 100% !important;
        max-width: 800px;
        height: auto !important;
    }
</style>
<div class="col-md-9 pull-right conteudo">
	<div class="fluid content">
        <section>
            <div class="box">
                <div class="box-title">
                    <h3 class="box-title-title"><span class="glyphicon glyphicon-th-list"></span>&nbsp;&nbsp;Informações do Site</h3>
                </div>
                <div class="box-content" >
                    <div class="container-fluid">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <h1 class="text-center">Visitas de Hoje</h1>
                                <canvas id="chartVisitasMes" height="300" width="550">
                                	<div id="embed-api-auth-container"></div>
                                    <div id="chart-container"></div>
                                    <div id="view-selector-container"></div>
                                </canvas>
                            </div>                        
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <h1 class="text-center">Páginas do mês atual</h1>
                                <canvas id="chartPaginasVisitadas" height="300" width="550">
                                	
                                </canvas>
                            </div>                        
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <div class="row">
                                <h1 class="text-center">Visitas do mês anterior</h1>
                                <canvas id="chartDiasMaisVisitados" height="300" width="550">
                                	
                                </canvas>
                            </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include caminhoFisico . '/view/parts/footer.php' ?>
    </div>
</div>