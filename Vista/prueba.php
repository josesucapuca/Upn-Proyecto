<!DOCTYPE html>
<html lang="es">
    <head>

        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
        <title> Inicio </title>
        <?php include_once './inc2/Estilos.php'; ?>
    </head>

    <!-- #BODY -->
    <!-- Possible Classes

            * 'smart-style-{SKIN#}'
            * 'smart-rtl'         - Switch theme mode to RTL
            * 'menu-on-top'       - Switch to top navigation (no DOM change required)
            * 'no-menu'			  - Hides the menu completely
            * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
            * 'fixed-header'      - Fixes the header
            * 'fixed-navigation'  - Fixes the main menu
            * 'fixed-ribbon'      - Fixes breadcrumb
            * 'fixed-page-footer' - Fixes footer
            * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
    -->
    <body >

        <div >

            <!-- RIBBON -->
            <div id="ribbon">

                <span class="ribbon-button-alignment"> 
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                        <i class="fa fa-refresh"></i>
                    </span> 
                </span>

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    Jose Sucapuca Zenteno<li style="text-align: right">/ MENÚ</li>
                </ol>
                <!-- end breadcrumb -->

                <!-- You can also add more buttons to the
                ribbon for further usability

                Example below:

                <span class="ribbon-button-alignment pull-right">
                <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
                <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
                <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
                </span> -->

            </div>
            <!-- END RIBBON -->

            <!-- MAIN CONTENT -->
            <div id="content">

                <div class="row">

                    <div class="col-sm-12">

                        <div class="well well-light">

                            <h1>Estudio <small></small></h1>
                            <div class="row">

                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="panel panel-green  pricing-big">

                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Estudio Personal de la biblia</h3>
                                        </div>
                                        <div class="panel-body no-padding text-align-center">
                                            <div class="the-price">
                                                <h1>
                                                    <strong>Opciones</strong>
                                                </h1>
                                            </div>
                                            <div class="price-features" >
                                                <ul class="list-unstyled text-left">
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Biblia </strong></a></li>
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Reavivados por su palabra</strong></a></li>
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Devocion Matutina</strong></a></li>
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Himinario</strong></a></li>
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Videos</strong></a></li>
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Musica</strong></a></li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="panel panel-red pricing-big">

                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Estudios Biblicos</h3>
                                        </div>
                                        <div class="panel-body no-padding text-align-center">
                                            <div class="the-price">
                                                <h1>
                                                    <strong>Opciones</strong>
                                                </h1>

                                            </div>
                                            <div class="price-features">
                                                <ul class="list-unstyled text-left">
                                                    <li><i class="fa fa-check text-success"></i><a href="#"><strong>Cursos Bíblicos Adultos y Jóvenes</strong></a></li>
                                                    <li><i class="fa fa-check text-success"></i><a href="#"><strong>Cursos Bíblicos Adolescentes y Niños</strong></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="panel panel-blueDark pricing-big">

                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Campaña Evangelistica</h3>
                                        </div>
                                        <div class="panel-body no-padding text-align-center">
                                            <div class="the-price">
                                                <h1>
                                                    <strong>Opciones</strong>
                                                </h1>
                                            </div>
                                            <div class="price-features">
                                                <ul class="list-unstyled text-left">
                                                    <li><i class="fa fa-check text-success"></i> <a href="#"><strong>NINGUNO</strong></a><li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="panel panel-orange  pricing-big">

                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                Escuela Sabatica</h3>
                                        </div>
                                        <div class="panel-body no-padding text-align-center">
                                            <div class="the-price">
                                                <h1>
                                                    $999<span class="subscript">/ mo</span></h1>
                                            </div>
                                            <div class="price-features">
                                                <ul class="list-unstyled text-left">
                                                    <li><i class="fa fa-check text-success"></i> Lifetime access <strong> to all storage locations</strong></li>
                                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> storage</li>
                                                    <li><i class="fa fa-check text-success"></i> Superbig <strong> download quota</strong></li>
                                                    <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                                    <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                                    <li><i class="fa fa-check text-success"></i> <strong>Unlimited</strong> access to all files</li>
                                                    <li><i class="fa fa-check text-success"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>		    	
                            </div>

                        </div>

                    </div>

                </div>


            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <?php include_once './inc2/scripts.php'; ?>
    </body>

</html>