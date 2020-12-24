<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/fondo2.png');background-size: auto 100%">
        <head>

            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title> Inicio </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
            <style>

            </style>
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
        <body class="bod">
            <div class="modal fade" id="ModalIngresarCampana" tabindex="-1" role="dialog" aria-labelledby="ModalIngresarCampanaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalIngresarCampanaLabel">Ingresar Nueva Campaña Evangelistica</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" id="TitCampana" class="form-control" placeholder="Nombre de Campaña Evangelistica" required />
                                    </div>
                                    <div class="form-group">
                                        <select id="OpcVideo" class="form-control">
                                            <option value="">Seleccionar opcion de Video Conferencia</option>
                                            <option value="C">Con Video LLamada</option>
                                            <option value="S">Sin Video LLamada</option>
                                        </select>
                                    </div>
                                    <div class="form-group" >
                                        <select id="PlataformaVideoLLamada" class="form-control">
                                            <option value="">Seleccionar La plataforma de Video LLamada</option>
                                            <option value="J">Jitsi Meet</option>
                                            <option value="S">Sangoma Meet</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="UrlVideoConferencia" class="form-control" placeholder="URL de Video Conferencia" required />
                                    </div>
                                    <div class="form-group">
                                        <input type="text" id="UrlVideoConferencia" class="form-control" placeholder="Codigo de Campaña Evangelistica" required />
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tags"> Fecha de Inicio</label>
                                        <input type="date" id="Fe_Inicio" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tags"> Fecha de Cierre</label>
                                        <input type="date" id="Fe_Inicio" class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" id="AgregarCampaña">
                                Egregar Campaña
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="ModalSuscribirse" tabindex="-1" role="dialog" aria-labelledby="ModalSuscribirseLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalSuscribirseLabel">Suscribirse a una Campaña Evangelistica</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tags"> Codigo de Campaña Evangelistica</label>
                                        <input type="text" id="TitCampana" class="form-control" placeholder="Codigo de Campaña" required />
                                    </div>
                                   

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" id="AgregarCampaña">
                                Suscribirse a Campaña Evangelistica
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <input id="id_Persona" type="hidden" value="<?php echo $_SESSION["id_Persona"]; ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">

                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" > </span>
                            <!-- END LOGO PLACEHOLDER -->

                            <!-- Note: The activity badge color changes when clicked and resets the number to 0
                            Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                        </div>
                        <div class="pull-right">

                            <!-- Top menu profile link : this shows only when top menu is active -->
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                <li class="LiReporte" style="display: none">
                                    <a id="Reporte" href="Trabajando.php" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                        <i class="fa fa-bar-chart-o"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="btn btn-circle btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                        <i class="fa fa-sort-desc"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> <u>C</u>onfiguración</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        <li class="divider"></li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesion"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesion</strong></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- logout button -->
                            <div id="" class="transparent pull-right">
                                <ul id="" class="header-dropdown-list ">
                                    <li class="LiReporte2" style="display: none">
                                        <a id="Reporte2" href="Trabajando.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-bar-chart-o"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="btn btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                            <i class="fa fa-sort-desc"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="Configuracion.php" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> <u>C</u>onfiguración</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>

                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesion"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesion</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- fullscreen button -->
                        </div>
                    </div>


                    <!-- END RIBBON -->
                    <!-- MAIN CONTENT -->
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">

                        <div class="row" style="display: flex;height: 100%;justify-content: center;">

                            <div class="col-sm-10" style="height: 100%;">

                                <div class="contop" style="justify-content: center;display: flex;align-items: center;height: 100%;">

                                    <div class="row">

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 8%;"> 
                                            <h1 class="titp" style="box-shadow: 0px 1px 41px white;border-radius: 15px;">CEO Adventistas</h1>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-green  pricing-big panelm panEs">

                                                <div class="panel-heading panehead panelm-white" id="panHeadEsp" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img class="imgEs" src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Estudio Personal de la biblia</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esPer panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-green" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li class="liespe"><i class="fa fa-plus text-success icEsp"></i> <strong style="color: #74a7ca;">Estudio Personal:  </strong>
                                                                <ul id="EsPersonal" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="BibliaPersonal.php"><strong>Biblia Personal</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php"><strong>Reavivados por su palabra</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Devocion_Matutina.php"><strong>Devocion Matutina</strong></a></li>
                                                                </ul>
                                                            <li>

                                                            <li class="limu"><i class="fa fa-plus text-success ismu"></i> <strong style="color: #74a7ca;">Musica:</strong>
                                                                <ul id="MusicaPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php"><strong>Himinario</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Buscar Musica</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Subir Musica</a></li>
                                                                </ul>
                                                            <li>
                                                            <li class="livi"><i class="fa fa-plus text-success icvi"></i> <strong style="color: #74a7ca;">Videos:</strong>
                                                                <ul id="VideoPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Buscar Videos</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Subir Video</a></li>
                                                                </ul>
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-red pricing-big panelm panEs">

                                                <div class="panel-heading panehead panelm-white " id="panHeadEsBi" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Estudios Biblicos</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esBi panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-red" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="CursoAdultoJoven.php"><strong> Cursos Bíblicos Adultos y Jóvenes</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="CursoAdolesNino.php"><strong> Cursos Bíblicos Adolescentes y Niños</strong></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-blueDark pricing-big panelm panEs">


                                                <div class="panel-heading panehead panelm-white " id="panHeadCamEva" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Campañas Evangelsiticas</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-cam panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-gris" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lienca"><i class="fa fa-plus text-success icEnc"></i> <strong style="color: #74a7ca;">Encargado de:</strong>
                                                                <ul id="Encargado" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                </ul>
                                                            <li>
                                                            <li class="lipart"><i class="fa fa-plus text-success icPart"></i> <strong style="color: #74a7ca;">Participando en:</strong>
                                                                <ul id="Participando" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Encargado de:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Encargado de:</a></li>
                                                                </ul>
                                                            <li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalIngresarCampana"><strong>Agregar Campaña Evangelistica</strong></a><li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalSuscribirse" ><strong>Suscribirse a una campaña Evangelistica</strong></a><li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-orange  pricing-big panelm panEs" style="margin-bottom: 0px;">

                                                <div class="panel-heading panehead panelm-white " id="panHeadEsSab" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img  src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Escuela Sabatica</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-escu panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-warming" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php"><strong>Repaso de la Leccion</strong></a><li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php"><strong>Comentario Biblico</strong></a><li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php"><strong>Diario Devocional</strong></a><li>
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
                <aside class="hidden-xs col-sm-4 col-md-3 col-lg-2 "  style="position: absolute;top: 0;right:  0;z-index: 904;padding-top: 49px;height: 100%;background: linear-gradient(166deg,#3e8391 , black 80%);">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="float: start;align-items: flex-end;height: 50%;text-align: center;"> 

                        <br><img src="../images/iconos/user2.png" style="width: 30%;">
                        <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;"><?php echo $_SESSION["Persona"]; ?> </h2>
                        <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;">Iglesia "<?php echo $_SESSION["Nombre_Iglesia"]; ?>"</h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;padding-bottom: 10px">
                        <img src="../images/adventist-symbol-png--symbol/adventist-symbol--white.png" width="100%">
                    </div>
                </aside>
                <!--<div class="col-sm-4 col-md-4 col-lg-2 hidden-xs asidelat" style="background: linear-gradient( 155deg,#3e8391,black 50%);height: 100vh;display: flex;">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;"> 
                            <h1 style="font-size: 40px;text-align: center;color: white;">CEO Adventistas</h1>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;">
                            <img src="../images/adventist-symbol-png--symbol/adventist-symbol--white.png" width="100%">
                        </div>
                    </div>
                </div>-->
                <!-- PAGE FOOTER
                <div class="page-footer" style="padding-left: 0px;border: solid 0px;">
                    <div class="row fot">
                        <div class="col-xs-12 col-sm-6">
                            <span class="txt-color-white"> <span class="hidden-xs">Aplicación Web Diseñado por  </span>Nexo-Consultores </span>
                        </div>

                        <div class="col-xs-6 col-sm-6 text-right ">
                            <div class="txt-color-white inline-block">
                                <i class="txt-color-blueLight hidden-mobile">Iglesia Adventista del Septimo Dia  </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             END PAGE FOOTER -->
            </div>
            <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
            <?php include_once './inc2/scripts.php'; ?>
            <script src="../js/Principal/Principal.js"></script>
            <script type="text/javascript">

                $(document).ready(function () {
                    ValidarLider(<?php echo $_SESSION["id_Persona"]; ?>);
                    $("#panHeadEsp").on("click", function () {
                        //alert();
                        if ($(".pan-bod-esPer").css("display") === "none") {
                            $(".pan-bod-esPer").show("slow");
                            $(".pan-bod-esBi").hide("slow");
                            $(".pan-bod-cam").hide("slow");
                            $(".pan-bod-escu").hide("slow");
                            $("#panHeadEsp").css("border-radius", "10px 10px 0px 0px ");
                            $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
                        } else {
                            $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-esPer").hide("slow");
                        }
                    });
                    $("#panHeadEsBi").on("click", function () {
                        //alert();
                        if ($(".pan-bod-esBi").css("display") === "none") {
                            $("#panHeadEsBi").css("border-radius", "10px 10px 0px 0px ");
                            $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-esPer").hide("slow");
                            $(".pan-bod-esBi").show("slow");
                            $(".pan-bod-cam").hide("slow");
                            $(".pan-bod-escu").hide("slow");
                        } else {
                            $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-esBi").hide("slow");
                        }
                    });
                    $("#panHeadCamEva").on("click", function () {
                        //alert();
                        if ($(".pan-bod-cam").css("display") === "none") {
                            $("#panHeadCamEva").css("border-radius", "10px 10px 0px 0px ");
                            $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-esPer").hide("slow");
                            $(".pan-bod-esBi").hide("slow");
                            $(".pan-bod-cam").show("slow");
                            $(".pan-bod-escu").hide("slow");
                        } else {
                            $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-cam").hide("slow");
                        }
                    });
                    $("#panHeadEsSab").on("click", function () {
                        //alert();
                        if ($(".pan-bod-escu").css("display") === "none") {
                            $("#panHeadEsSab").css("border-radius", "10px 10px 0px 0px ");
                            $("#panHeadEsp").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadEsBi").css("border-radius", "10px 10px 10px 10px ");
                            $("#panHeadCamEva").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-esPer").hide("slow");
                            $(".pan-bod-esBi").hide("slow");
                            $(".pan-bod-cam").hide("slow");
                            $(".pan-bod-escu").show("slow");
                        } else {
                            $("#panHeadEsSab").css("border-radius", "10px 10px 10px 10px ");
                            $(".pan-bod-escu").hide("slow");
                        }
                    });
                    $(".liespe").on("click", function () {
                        if ($("#EsPersonal").css("display") === "none") {
                            $("#EsPersonal").show("slow");
                            $("#MusicaPe").hide("slow");
                            $("#VideoPe").hide("slow");
                            $(".icEsp").removeClass("fa-plus").addClass("fa-minus");
                            $(".icvi").removeClass("fa-minus").addClass("fa-plus");
                            $(".ismu").removeClass("fa-minus").addClass("fa-plus");
                        } else {
                            $("#EsPersonal").hide("slow");
                            $(".icEsp").removeClass("fa-minus").addClass("fa-plus");
                        }
                    });
                    $(".limu").on("click", function () {
                        if ($("#MusicaPe").css("display") === "none") {
                            $("#MusicaPe").show("slow");
                            $("#EsPersonal").hide("slow");
                            $("#VideoPe").hide("slow");
                            $(".ismu").removeClass("fa-plus").addClass("fa-minus");
                            $(".icEsp").removeClass("fa-minus").addClass("fa-plus");
                            $(".icvi").removeClass("fa-minus").addClass("fa-plus");
                        } else {
                            $("#MusicaPe").hide("slow");
                            $(".ismu").removeClass("fa-minus").addClass("fa-plus");
                        }
                    });
                    $(".livi").on("click", function () {
                        if ($("#VideoPe").css("display") === "none") {
                            $("#VideoPe").show("slow");
                            $("#EsPersonal").hide("slow");
                            $("#MusicaPe").hide("slow");
                            $(".icvi").removeClass("fa-plus").addClass("fa-minus");
                            $(".ismu").removeClass("fa-minus").addClass("fa-plus");
                            $(".icEsp").removeClass("fa-minus").addClass("fa-plus");
                        } else {
                            $("#VideoPe").hide("slow");
                            $(".icvi").removeClass("fa-minus").addClass("fa-plus");
                        }
                    });
                    $(".lienca").on("click", function () {
                        if ($("#Encargado").css("display") === "none") {
                            $("#Encargado").show("slow");
                            $("#Participando").hide("slow");
                            $(".icEnc").removeClass("fa-plus").addClass("fa-minus");
                            $(".icPart").removeClass("fa-minus").addClass("fa-plus");
                        } else {
                            $("#Encargado").hide("slow");
                            $(".icEnc").removeClass("fa-minus").addClass("fa-plus");
                        }
                    });
                    $(".lipart").on("click", function () {
                        if ($("#Participando").css("display") === "none") {
                            $("#Participando").show("slow");
                            $("#Encargado").hide("slow");
                            $(".icPart").removeClass("fa-plus").addClass("fa-minus");
                            $(".icEnc").removeClass("fa-minus").addClass("fa-plus");
                        } else {
                            $("#Participando").hide("slow");
                            $(".icPart").removeClass("fa-minus").addClass("fa-plus");
                        }
                    });
                });
            </script>
        </body>

    </html>
    <?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>
