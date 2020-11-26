<?php
session_start();
if ($_SESSION["Usuario"] !== null||$_SESSION["Usuario"] !== "") {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>

            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title> Inicio </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
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
        <body class="container">

            <!-- HEADER -->
            <header id="header">
                <div id="logo-group">

                    <!-- PLACE YOUR LOGO HERE -->
                    <span id="logo"> <img src="../images/iglesia.jpg" alt="SmartAdmin" style="height: 30px;width: 30px"> </span>
                    <!-- END LOGO PLACEHOLDER -->

                    <!-- Note: The activity badge color changes when clicked and resets the number to 0
                    Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                </div>
                <div class="pull-right">

                    <!-- Top menu profile link : this shows only when top menu is active -->
                    <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
                        <li class="">
                            <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
                                <img src="img/avatars/sunny.png" alt="John Doe" class="online" />  
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                                </li>
                                <li class="divider"></li>

                                <li class="divider"></li>
                                <li>
                                    <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                    <!-- logout button -->
                    <div id="logout" class="btn-header transparent pull-right">
                        <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
                    </div>
                    <!-- fullscreen button -->
                    <div id="fullscreen" class="btn-header transparent pull-right">
                        <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
                    </div>
                </div>

                <!-- pulled right: nav area -->
            </header>
            <!-- END HEADER -->

            <div >

                <!-- RIBBON -->
                <div id="ribbon">
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <span class="ribbon-button-alignment"> 
                            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                                <i class="fa fa-refresh"></i>
                            </span> 
                        </span>

                        <!-- breadcrumb -->
                        <ol class="breadcrumb">
                            <input type="hidden" id="PersonaUsuario" value="<?php echo $_SESSION["Persona"]; ?>">
                            <?php echo $_SESSION["Persona"]; ?> <li style="text-align: right">/ MENÚ</li>
                        </ol>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" style="text-align: right">
                        <!-- breadcrumb -->
                        <ol class="breadcrumb">
                            <?php if ($_SESSION["Ti_Iglesia"] === "I") {
                                echo "Iglesia :";
                            } else if ($_SESSION["Ti_Iglesia"] === "C") {
                                echo "Congregacíon:";
                            } ?> <?php echo $_SESSION["Nombre_Iglesia"]; ?>
                        </ol>
                    </div>

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
                                                        <li><i class="fa fa-check text-success"></i> <a href="BibliaPersonal.php"><strong>Biblia </strong></a></li>
                                                        <li><i class="fa fa-check text-success"></i> <a href="#"><strong>Reavivados por su palabra</strong></a></li>
                                                        <li><i class="fa fa-check text-success"></i> <a href="Devocion_Matutina.php"><strong>Devocion Matutina</strong></a></li>
                                                        <li><i class="fa fa-check text-success"></i> <a href="Himinario.php"><strong>Himinario</strong></a></li>
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
                                                        <li><i class="fa fa-check text-success"></i><a href="#"><strong> Cursos Bíblicos Adultos y Jóvenes</strong></a></li>
                                                        <li><i class="fa fa-check text-success"></i><a href="#"><strong> Cursos Bíblicos Adolescentes y Niños</strong></a></li>

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
                                                        <li><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php"><strong>Campaña 1</strong></a><li>

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
                                                        <strong>Opciones</strong>
                                                    </h1>
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
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="panel panel-red  pricing-big">

                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    Devocional Diario</h3>
                                            </div>
                                            <div class="panel-body no-padding text-align-center">
                                                <div class="the-price">
                                                    <h1>
                                                        <strong>Opciones</strong>
                                                    </h1>
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
            <!-- END MAIN PANEL -->

            <!-- PAGE FOOTER -->
            <div class="page-footer" style="    padding-left: 0px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <span class="txt-color-white"> <span class="hidden-xs">Aplicación Web Diseñado por  </span>Nexo-Consultores </span>
                    </div>

                    <div class="col-xs-6 col-sm-6 text-right hidden-xs">
                        <div class="txt-color-white inline-block">
                            <i class="txt-color-blueLight hidden-mobile">Iglesia Adventista del Septimo Dia  </i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE FOOTER -->

            <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
    <?php include_once './inc2/scripts.php'; ?>

        </body>

    </html>
<?php } else { ?>
    <script type="text/javascript">
        alert("<?php echo $_SESSION["Usuario"];?>")
        location.href = "../Iniciar_1.php";
    </script>
<?php } ?>
