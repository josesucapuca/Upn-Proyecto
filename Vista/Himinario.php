<?php
include_once '../DAO/HiminarioDAO.php';
session_start();
$obj = new HiminarioDAO();
$var = $obj->ListarHiminarioDAO($_SESSION["id_Persona"]);

if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');display: flex;height: auto;margin: 0;flex-direction: column;">
        <head>
            <meta charset="UTF-8">
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title> Himinario </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href="../images/iconoweb.png" type="image/x-icon">
        </head>

        <body class="bodhi" style="display: flex;height: 100%;margin: 0;flex-direction: column;background: #00000052;">
            <div class="modal fade" id="ModalVideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Escuchar Musica</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12" id="VideoHim">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button onclick="LimpiarVideo()" type="button" class="btn btn-default" data-dismiss="modal">
                                Cancelar
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <div class="modal fade" id="ModalLetra" tabindex="-1" role="dialog" aria-labelledby="myModalLetra" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h2 class="modal-title TitLe" id="myModalLabel" style="text-align: center;" >Letra de Himno </h2>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" id="Cont" style="font-size: 20px;">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button onclick="LimpiarVideo()" type="button" class="btn btn-default" data-dismiss="modal">
                                Cancelar
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div>
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
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
                                            <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
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
                                    <li class="volver" >
                                        <a id="volver" href="Principal.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-home "></i> Home
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
                        <div class="row" style="height: 100%;justify-content: center;margin-top: 20px;">

                            <div class="row" >
                                <div class="col-sm-12" style="display: flex;align-items: center;">
                                    <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2"><h1 class="titMusic" style="font-weight: 600;font-size: 30px"><i class="fa fa-book"></i> Himinario <i class="fa fa-book"></i></h1></div>
                                    <div class="form-group col-xs-6 col-sm-9 col-md-10 col-lg-10">
                                        <div class="input-group input-group-lg div1inp">
                                            <div class="icon-addon addon-lg div2inp">
                                                <input type="hidden" id="id_Per" value="<?php echo $_SESSION["id_Persona"]?>">
                                                <input type="text" placeholder="Ingresar Himno" class="form-control" id="cadena">
                                                <label for="Himno" class="glyphicon glyphicon-search" rel="tooltip" title="Himno"></label>
                                            </div>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" id="BuscarHimno"><i class="glyphicon glyphicon-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="well padding-10" style="margin: 10px">

                                        <div class="row">

                                            <div class="col-sm-12" style="background: #00000040" id="Himnos">
                                                <?php
                                                $i = 0;
                                                while ($data = $var->fetch_object()) {
                                                    ?>

                                                    <div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;padding-bottom: 10px;">
                                                        <div id="tithim" class="col-xs-12 col-sm-12 col-md-3 col-lg-2" style="display: flex;align-items: center;min-height: 60px;">
                                                            <div><strong  style="font-size:16px">N° <?php echo $data->Nu_Himno . ' ' . utf8_encode($data->No_Himno); ?></strong></div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6"> 
                                                            <style>
                                                                .minHeight<?php echo $i; ?>.collapse<?php echo $i; ?> {
                                                                    clear: both;
                                                                    height: 0;
                                                                    display: block;
                                                                    /* Alto minimo */
                                                                    min-height: 80px;
                                                                    overflow: hidden;
                                                                }
                                                                .minHeight<?php echo $i; ?>.collapsing<?php echo $i; ?> {
                                                                    clear: both;
                                                                    min-height: 80px;
                                                                }
                                                                .minHeight<?php echo $i; ?>.collapse<?php echo $i; ?>.in {
                                                                    height: auto;
                                                                }
                                                                .collapse {
                                                                    display: block; 
                                                                    visibility: visible;
                                                                }
                                                            </style>
                                                            <div>

                                                                <div class="minHeight<?php echo $i; ?> collapse<?php echo $i; ?>" id="collapseExample<?php echo $i; ?>" style="height: 50px">
                                                                    <h3 style="text-align: center;margin: 5px">Letra</h3> <?php echo utf8_encode($data->Cont_Himno) ?></div>
                                                                <button id="masTexto" class="btn btn-link"  style="border-top:1px solid #bdc3c7;width:100%;" title="Ver más" data-toggle="collapse" data-target="#collapseExample<?php echo $i; ?>" aria-expanded="false" aria-controls="collapseExample">
                                                                    <i class="fa fa-chevron-down" id="mas">Expande</i>
                                                                </button>
                                                            </div>
                                                            <?php if ($data->id_Himno_Favorito !== null) { ?>
                                                                <div style="text-align: center;color: grey;font-size: 25px;"><a onclick="CMG(<?php echo $data->id_Himno_Favorito; ?>)" class="btn btn-labeled btn-danger"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta</a></div>
                                                            <?php } else { ?>
                                                                <div style="text-align: center;color: #0081c2;font-size: 25px;"><a onclick="MG(<?php echo $data->id_Himno; ?>,<?php echo $_SESSION["id_Persona"]; ?>)" class="btn btn-labeled btn-success"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta</a></div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px"> 
                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">
                                                                <button onclick="MVH(<?PHP echo $data->id_Himno;?>)" class="btn btn-info" data-toggle="modal" data-target="#ModalVideo">Video <i class="fa fa-music"></i></button> 
                                                                <button onclick="MLH(<?PHP echo $data->id_Himno;?>)" class="btn btn-info" data-toggle="modal" data-target="#ModalLetra">Letra <i class="fa fa-music"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $i++;
                                                }
                                                ?>
                                            </div>
                                        </div>




                                    </div>

                                </div>
                            </div>
                            <!-- END MAIN CONTENT -->

                        </div>


                    </div>
                    <!-- END MAIN CONTENT -->
                </div>
                <!-- END MAIN PANEL -->
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


            <!-- END RIBBON -->



            <!-- MAIN CONTENT -->
            <div id="content">
                <!-- end row -->

                <!-- END MAIN PANEL -->

                <!-- PAGE FOOTER -->
            </div>
            <!-- END PAGE FOOTER -->

            <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
            Note: These tiles are completely responsive,
            you can add as many as you like
            -->
            <!-- END SHORTCUT AREA -->

            <!--================================================== -->

            <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
            <script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

            <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                                                                    if (!window.jQuery) {
                                                                        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
                                                                    }
            </script>

            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
            <script>
                                                                    if (!window.jQuery.ui) {
                                                                        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
                                                                    }
            </script>

            <!-- IMPORTANT: APP CONFIG -->
            <script src="js/app.config.js"></script>

            <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
            <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> 

            <!-- BOOTSTRAP JS -->
            <script src="js/bootstrap/bootstrap.min.js"></script>

            <!-- CUSTOM NOTIFICATION -->
            <script src="js/notification/SmartNotification.min.js"></script>

            <!-- JARVIS WIDGETS -->
            <script src="js/smartwidgets/jarvis.widget.min.js"></script>

            <!-- EASY PIE CHARTS -->
            <script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

            <!-- SPARKLINES -->
            <script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

            <!-- JQUERY VALIDATE -->
            <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

            <!-- JQUERY MASKED INPUT -->
            <script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

            <!-- JQUERY SELECT2 INPUT -->
            <script src="js/plugin/select2/select2.min.js"></script>

            <!-- JQUERY UI + Bootstrap Slider -->
            <script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

            <!-- browser msie issue fix -->
            <script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

            <!-- FastClick: For mobile devices -->
            <script src="js/plugin/fastclick/fastclick.min.js"></script>

            <!--[if IE 8]>

            <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

            <![endif]-->

            <!-- Demo purpose only -->
            <script src="js/demo.min.js"></script>

            <!-- MAIN APP JS FILE -->
            <script src="js/app.min.js"></script>

            <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
            <!-- Voice command : plugin -->
            <script src="js/speech/voicecommand.min.js"></script>

            <!-- SmartChat UI : plugin -->
            <script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
            <script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>

            <script src="../js/Himinario/Himinario.js"></script>
            <!-- PAGE RELATED PLUGIN(S) 
            <script src="..."></script>-->
            <script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
            <script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
            <script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
            <script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
            <script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
            <script type="text/javascript">

                                                                    $(document).ready(function () {
                                                                        Actudalizar();
                                                                        $(window).resize(function () {
                                                                            Actudalizar();
                                                                        });
                                                                        pageSetUp();
                                                                        function Actudalizar() {
                                                                            if ($(document).height() > 350) {
                                                                                $(".bodhi").css("height","100%");
                                                                            } else {
                                                                                $(".bodhi").height($(document).height());
                                                                            }
                                                                            if ($(document).width() >= 280 && $(document).width() <= 360) {
                                                                                $(".div1inp").removeClass('input-group-md').removeClass('input-group-md input-group-lg').addClass(' input-group-sm');
                                                                                $(".div2inp").removeClass('addon-md addon-lg').addClass('addon-sm');
                                                                                $(".titMusic").css("font-size", '18px');

                                                                            } else if ($(document).width() >= 360 && $(document).width() <= 768) {
                                                                                $(".div1inp").removeClass('input-group-sm input-group-lg').addClass(' input-group-md');
                                                                                $(".div2inp").removeClass('addon-sm addon-lg').addClass('addon-md');
                                                                                $(".titMusic").css("font-size", '20px');

                                                                            } else if ($(document).width() > 768) {
                                                                                $(".div1inp").removeClass('input-group-sm input-group-md').addClass(' input-group-lg');
                                                                                $(".div2inp").removeClass('addon-sm addon-md').addClass('addon-lg');
                                                                                $(".titMusic").css("font-size", '25px');
                                                                            }
                                                                        }
                                                                    });
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

        </body>

    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>
