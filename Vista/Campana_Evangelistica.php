<?php
include_once '../DAO/CampanaEvangelisticaDAO.php';
$objs = new CampanaEvangelisticaDAO();
session_start();
$var = $objs->ListaCampanaById($_SESSION["id_Persona"], $_GET["id"]);
$var2 = $objs->ListaHerramientaCampana($_GET["id"]);
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>

            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title> SmartAdmin </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href="../images/iconoweb.png" type="image/x-icon">
            <style>
                @media(max-width:1598px){
                    .sortable-grid{
                        height: auto;
                    }
                    #frameVer{
                        height: 99% !important;
                    }
                }
                @media(width:428px)and (height:633px){
                    .titCamp{
                        font-size: 30px !important;
                    }
                }
                @media(min-width:360px)and (max-width:414px){
                    .titCamp{
                        font-size: 30px !important;
                    }
                }
            </style>
        </head>
        <body class="bodhi" style="display: flex;height: 100%;margin: 0;flex-direction: column;background: #00000052;">
            <?php
            if (mysqli_num_rows($var) > 0) {
                while ($data = $var->fetch_object()) {
                    ?>
                    <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
                    <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                            <div id="header" style="background: none;">
                                <div id="logo-group">
                                    <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" > </span>
                                </div>
                                <div class="pull-right">
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
                                <div class="row" style="display: flex;justify-content: center;">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                                        <h1 class="txt-color-blueDark titCamp" style="font-weight: 600;font-size: 40px;margin-bottom: 10px;"><i class="fa fa-book"></i> Campaña Evangelistica<br><?php echo $data->No_Campana_Evangelistica ?></h1>
                                        <h2 class=" txt-color-blueDark DesCamp" ><?php echo $data->Des_Campana_Evangelistica ?></h2>
                                    </div>
                                </div>
                                <section id="widget-grid" class="">
                                    <div class="row">
                                        <?php
                                        if ($data->Es_Video_Conferencia === "C") {
                                            if ($data->Plataforma === "J") {
                                                ?>
                                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                    <div class="jarviswidget  jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal"
                                                         style="margin-bottom: 15px;">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Video Conferencia</h2>

                                                        </header>
                                                        <div style="background-color: #ffffff82!important;">
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ">
                                                                <iframe  src="https://meet.jit.si/<?php echo $data->Cod_Campana_Evangelistica ?>" frameborder="0" allow="livestreaming,sharedvideo,chat,raisehand,settings,microphone,camera,desktop,fullscreen,shortcuts,tileview,mute-everyone" allowfullscreen="" style="width: 100%;height: 500px" ></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php } else if ($data->Plataforma === "S") { ?>
                                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                    <div class="jarviswidget  jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal"
                                                         style="margin-bottom: 15px;">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Video Conferencia</h2>

                                                        </header>
                                                        <div style="background-color: #ffffff82!important;">
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ">
                                                                <iframe  src="<?php echo $data->URL_Campana_Evangelistica ?>" frameborder="0" allow="livestreaming,sharedvideo,chat,raisehand,settings,microphone,camera,desktop,fullscreen,shortcuts,tileview,mute-everyone" allowfullscreen="" style="width: 100%;height: 500px" ></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php } else if ($data->Plataforma === null) { ?>
                                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                    <div class="jarviswidget  jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal"
                                                         style="margin-bottom: 15px;">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Video Conferencia</h2>

                                                        </header>
                                                        <div style="background-color: #ffffff82!important;">
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ">
                                                                <iframe  src="https://meet.jit.si/<?php echo $data->Cod_Campana_Evangelistica ?>" frameborder="0" allow="livestreaming,sharedvideo,chat,raisehand,settings,microphone,camera,desktop,fullscreen,shortcuts,tileview,mute-everyone" allowfullscreen="" style="width: 100%;height: 500px" ></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <?php
                                            }
                                        }
                                        ?>

                                        <?php
                                        if (mysqli_num_rows($var2) > 0) {

                                            $data2 = $var2->fetch_object();
                                            if ($data2->Es_Biblia === "1") {
                                                ?>
                                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                    <div class="jarviswidget jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Biblia Personal</h2>

                                                        </header>
                                                        <div>
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ver" style="height: 530px;overflow: auto;">
                                                                <iframe src="Biblia.php" width="100%" style="height: 100%;border: 0px;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php } ?>
                <?php if ($data2->Es_Himinario === "1") { ?>
                                                <article class="col-xs-12 col-sm12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                    <div class="jarviswidget jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                         style="margin-bottom: 15px;">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Himinario</h2>
                                                        </header>
                                                        <div>
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ver" >
                                                                <iframe id="" src="Himinario.php" width="100%" style="height: 500px;border: 0px;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php } ?>
                <?php if ($data2->Es_Musica === "1") { ?>
                                                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 5px">

                                                    <div class="jarviswidget jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                         style="margin-bottom: 15px;">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Musica</h2>
                                                        </header>
                                                        <div>
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ver" >
                                                                <iframe id="frameVer" src="Himinario.php" width="100%" style="height: 100vh;border: 0px;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php } ?>
                <?php if ($data2->Es_Videos === "1") { ?>
                                                <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 5px">
                                                    <div class="jarviswidget jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                         style="margin-bottom: 15px;">
                                                        <header>
                                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                            <h2>Video</h2>
                                                        </header>
                                                        <div>
                                                            <div class="jarviswidget-editbox">
                                                            </div>
                                                            <div class="widget-body no-padding ver" >
                                                                <iframe id="frameVer" src="Himinario.php" width="100%" style="height: 100vh;border: 0px;"></iframe>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                            <?php } ?>
            <?php } else { ?>
                                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                <div class=" jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                     style="margin-bottom: 15px;">
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" style="text-align: center;background: transparent">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="text-align: center;background: transparent"><h1> No hay Herramientas Registradas</h1></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
            <?php } ?>
                                    </div>

                                    <!-- end row -->

                                </section>


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
                    </div >


                <?php
                }
            } else {
                ?>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " style="text-align: center"><h1> No hay una campaña Evangelistica</h1></div>
    <?php } ?>
            <!-- END MAIN PANEL -->

            <!-- PAGE FOOTER -->
            <!-- END PAGE FOOTER -->

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

            <!-- PAGE RELATED PLUGIN(S) -->

            <!-- Morris Chart Dependencies -->
            <script src="js/plugin/morris/raphael.min.js"></script>
            <script src="js/plugin/morris/morris.min.js"></script><script src="../js/Biblia/Biblia.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    Actudalizar();
                    $(window).resize(function () {
                        $(".bodhi").height($(document).height());
                    });
                    function Actudalizar() {
                        $(".bodhi").height($(document).height());
                    }
                    pageSetUp();
                });

                function ARBOL() {
                    $('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
                    $('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function (e) {
                        var children = $(this).parent('li.parent_li').find(' > ul > li');
                        if (children.is(':visible')) {
                            children.hide('fast');
                            $(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
                        } else {
                            children.show('fast');
                            $(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
                        }
                    });
                }
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

        </body>

    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>