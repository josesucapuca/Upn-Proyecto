<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/fondo_1.jpeg');background-size:100% 100% ;">
        <head>
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title>Lección de la Escuela Sabática </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <style>
                @media(max-width:767px){
                    .sortable-grid{
                        height: auto;
                    }
                    #frameVer{
                        height: 50vh !important;
                    }
                }
                .abs-center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 16vh;
                }
                .estudio-img {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 10vh;
                }
            </style>
        </head>
        <body class="conta bod">
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="SmartAdmin" > </span>
                        </div>
                        <div class="pull-right">
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                <li class="">
                                    <a href="#" class="btn btn-circle btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                        <i class="fa fa-sort-desc"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesión"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- logout button -->
                            <div id="" class="transparent pull-right">
                                <ul id="" class="header-dropdown-list ">
                                    <li class="volver" >
                                        <a id="volver" href="Principal.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-home "></i> Inicio
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="btn btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                            <i class="fa fa-sort-desc"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesión"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- MAIN CONTENT -->
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <div class="row" style="display: flex;justify-content: center;">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4 abs-center" style="text-align: center;">
                                <!--<div class="row"></div>-->
                                <!--                                <div class="row">
                                                                    <img src="../images/LETRASESTUDIONIÑOS.png" alt="" style="width: 100%"/>
                                                                </div>-->
                                <h1 class="page-title" style="font-weight: 600;font-size: 40px;color:white;"><i class="fa fa-book"></i> Lección de la Escuela Sabática </h1>
                            </div>
                        </div>
                        <section id="widget-grid" class="">
                            <div class="row">
                                <article class="col-xs-12 col-sm-7 col-md-7 col-lg-7" >
                                    <div class="jarviswidget jarviswidget-color-darken"  data-widget-editbutton="true">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Material</h2>
                                        </header>
                                        <div style="border: solid 2px;">
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding" style="background-image: url('../images/estudios/leccion2021.PNG');background-size: 100% 100%;height: 114vh" >                                               
                                                <iframe name="frameLEC" id="frameLEC"  src="" width="100%" height="100%" frameborder="0" scrolling="yes" style="margin-bottom: -6px;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="margin-bottom: 30px">
                                    <div class="jarviswidget jarviswidget-color-darken"  data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Lección de la Escuela Sabática</h2>
                                        </header>
                                        <div>
                                            <div class="widget-body no-padding" style="min-height: 0px">
                                                <div class="panel-group smart-accordion-default" id="matutina" >
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#col1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Trimestre 01 – 2021 </a></h4>
                                                        </div>
                                                        <div id="col1" class="panel-collapse collapse in">
                                                            <div class="panel-body">
                                                                <ul id="estudios">
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S0" href="https://drive.google.com/file/d/1lRM4CrOKYwiJwhpKj2CmgN6eq7Kru0Oo/preview" target="frameLEC"> Introducción</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S1" href="https://drive.google.com/file/d/1TYYgk9_S8OWUhTkGjIX8lgVxQRGQHI2o/preview" target="frameLEC"> Lección 01</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S2" href="https://drive.google.com/file/d/1VpuCK75LjXF9KiuZabSvWES7FQmiArSP/preview" target="frameLEC"> Lección 02</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S3" href="https://drive.google.com/file/d/1R8CLH6tolSI7vb078CqvKOiabjQXy3P9/preview" target="frameLEC"> Lección 03</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S4" href="https://drive.google.com/file/d/1MyW1wdcqfBLF1XmRkyj-FPB-zBmlXFKv/preview" target="frameLEC"> Lección 04</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S5" href="https://drive.google.com/file/d/1TWzzKppYBAIRS8g8oqwVrgcwaJLnL_9l/preview" target="frameLEC"> Lección 05</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S6" href="https://drive.google.com/file/d/1tZgdItRv3kN5aYDw4zuOAHK2riCtQhpc/preview" target="frameLEC"> Lección 06</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S7" href="https://drive.google.com/file/d/1k-vrnf_Knz9Yy_c24shtIEhxDKDVyBdS/preview" target="frameLEC"> Lección 07</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S8" href="https://drive.google.com/file/d/1W6LRzEp5WbQ4CdnzQHwePs0LmLDJ7bI_/preview" target="frameLEC"> Lección 08</a></li> 
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S9" href="https://drive.google.com/file/d/1b7pewpsbBIdotCZLwL088kCvWcv_weko/preview" target="frameLEC"> Lección 09</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S10" href="https://drive.google.com/file/d/1OxWG4itBYvVaojEnnMOuSWFu3DtZ8jY2/preview" target="frameLEC"> Lección 10</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S11" href="https://drive.google.com/file/d/1OxWG4itBYvVaojEnnMOuSWFu3DtZ8jY2/preview" target="frameLEC"> Lección 11</a></li>
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S12" href="https://drive.google.com/file/d/1yKgcf6i2_xoHHTqDFh0smsH51ZhDqxCJ/preview" target="frameLEC"> Lección 12</a></li> 
                                                                    <li class="list-unstyled"><i class="fa fa-check text-success"></i><a id="S13" href="https://drive.google.com/file/d/1Y3CYXZb3881t9GMjA1TOPyWurW4ZRLk8/preview" target="frameLEC"> Lección 13</a></li> 
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jarviswidget jarviswidget-color-darken"  data-widget-editbutton="true" >
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Biblia</h2>
                                        </header>
                                        <div>
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding">
                                                <iframe src="Biblia.php" width="100%" height="486px" style="margin-bottom: -6px;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                if (!window.jQuery) {
                    document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
                }
            </script>
            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
            <script>
                if (!window.jQuery.ui) {
                    document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
                }
            </script>
            <script src="js/app.config.js"></script>
            <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 
            <script src="js/bootstrap/bootstrap.min.js"></script>
            <script src="js/notification/SmartNotification.min.js"></script>
            <script src="js/smartwidgets/jarvis.widget.min.js"></script>
            <script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
            <script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>
            <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>
            <script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>
            <script src="js/plugin/select2/select2.min.js"></script>
            <script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>
            <script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>
            <script src="js/plugin/fastclick/fastclick.min.js"></script>
            <script src="js/demo.min.js"></script>
            <script src="js/app.min.js"></script>
            <script src="js/speech/voicecommand.min.js"></script>
            <script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
            <script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>
            <script src="js/plugin/morris/raphael.min.js"></script>
            <script src="js/plugin/morris/morris.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    pageSetUp();
                });
            </script>

            <script type="text/javascript">
                // PAGE RELATED SCRIPTS

                /*
                 * Run all morris chart on this page
                 */
                $(document).ready(function () {

                    // DO NOT REMOVE : GLOBAL FUNCTIONS!
                    pageSetUp();

                });
                function resizemodal() {
                    var h = $(".modal-dialog").height();
                    $(".modal-backdrop").height(h + 60);
                }
                //setup_flots();
                /* end flot charts */

            </script>

            <!-- Your GOOGLE ANALYTICS CODE Below -->
            <script type="text/javascript">
                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
                _gaq.push(['_trackPageview']);

                (function () {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                })();

            </script>
            <!--FINAL DE CERRAR SESION-->
        </body>
    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>