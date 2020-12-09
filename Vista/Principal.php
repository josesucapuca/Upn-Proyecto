<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>

            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title> Inicio </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
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
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-8 col-md-9 col-lg-10" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">

                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" style="height: 80px;width: auto"> </span>
                            <!-- END LOGO PLACEHOLDER -->

                            <!-- Note: The activity badge color changes when clicked and resets the number to 0
                            Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
                        </div>
                        <div class="pull-right">

                            <!-- Top menu profile link : this shows only when top menu is active -->
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                <li class="LiReporte" style="display: none">
                                    <a id="Reporte" href="#" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
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
                                        <a id="Reporte2" href="#" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-bar-chart-o"></i>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="btn btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
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

                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom: 10%;"> 
                                            <h1 style="font-size: 80px;text-align: center;color: white;font-weight: 600;">CEO Adventistas</h1>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                            <div class="panel panel-green  pricing-big panelm panEs">

                                                <div class="panel-heading panehead panelm-black" id="panHeadEsp" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img class="imgEs" src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Estudio Personal de la biblia</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esPer panelm-black" style="border-radius: 0px 0px 10px 10px">
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
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Reavivados.php"><strong>Reavivados por su palabra</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Devocion_Matutina.php"><strong>Devocion Matutina</strong></a></li>
                                                                </ul>
                                                            <li>

                                                            <li class="limu"><i class="fa fa-plus text-success ismu"></i> <strong style="color: #74a7ca;">Musica:</strong>
                                                                <ul id="MusicaPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Himinario.php"><strong>Himinario</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Buscar Musica</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Subir Musica</a></li>
                                                                </ul>
                                                            <li>
                                                            <li class="livi"><i class="fa fa-plus text-success icvi"></i> <strong style="color: #74a7ca;">Videos:</strong>
                                                                <ul id="VideoPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Buscar Videos</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Subir Video</a></li>
                                                                </ul>
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                            <div class="panel panel-red pricing-big panelm panEs">

                                                <div class="panel-heading panehead panelm-black " id="panHeadEsBi" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Estudios Biblicos</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esBi panelm-black" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-red" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="EstudiosBiblicos.php?Ti=1"><strong> Cursos Bíblicos Adultos y Jóvenes</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="EstudiosBiblicos.php?Ti=2"><strong> Cursos Bíblicos Adolescentes y Niños</strong></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                            <div class="panel panel-blueDark pricing-big panelm panEs">


                                                <div class="panel-heading panehead panelm-black " id="panHeadCamEva" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Campañas Evangelsiticas</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-cam panelm-black" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-gris" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li><i class="fa fa-plus text-success icEnc"></i> <strong style="color: #74a7ca;">Encargado de:</strong>
                                                                <ul id="Encargado" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                </ul>
                                                            <li>
                                                            <li><i class="fa fa-plus text-success icPart"></i> <strong style="color: #74a7ca;">Participando en:</strong>
                                                                <ul id="Participando" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Encargado de:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Encargado de:</a></li>
                                                                </ul>
                                                            <li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a href="AgregarCapana.php"><strong>Agregar Campaña Evangelistica</strong></a><li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                            <div class="panel panel-orange  pricing-big panelm panEs" style="margin-bottom: 0px;">

                                                <div class="panel-heading panehead panelm-black " id="panHeadEsSab" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img  src="../images/iconos/icon-Biblia-personal.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Escuela Sabatica</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-escu panelm-black" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-warming" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php"><strong>Repaso de la Leccion</strong></a><li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php"><strong>Comentario Biblico</strong></a><li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php"><strong>Diario Devocional</strong></a><li>
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
                });
            </script>
        </body>

    </html>
    <?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>
