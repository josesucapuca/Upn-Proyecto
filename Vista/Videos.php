<?php
include_once '../DAO/VideoDAO.php';
session_start();

$obj = new VideoDAO();
$var = $obj->ListarVideoByPersona($_SESSION["id_Persona"]);
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>
             <meta charset="UTF-8">
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title> Videos </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href="../images/iconoweb.png" type="image/x-icon">
        </head>
        <body class="bod">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Article Post</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Content" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category"> Category</label>
                                        <select class="form-control" id="category">
                                            <option>Articles</option>
                                            <option>Tutorials</option>
                                            <option>Freebies</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tags"> Tags</label>
                                        <input type="text" class="form-control" id="tags" placeholder="Tags" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                        <form class="form form-inline " role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" placeholder="Date" required />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Draft</option>
                                                    <option>Published</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <span class="glyphicon glyphicon-floppy-disk"></span> Save
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-eye-open"></span> Preview
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary">
                                Post Article
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
                        <div class="row" style="height: 100%;justify-content: center;margin-top: 20px;">
                             
                            <div class="row" >
                                <div class="col-sm-12" style="display: flex;align-items: center;">
                                    <div class="form-group col-xs-6 col-sm-3 col-md-2 col-lg-2"><h1 class="titMusic" style="font-weight: 600;font-size: 30px"><i class="fa fa-film"></i> Video <i class="fa fa-film"></i></h1></div>
                                    <div class="form-group col-xs-6 col-sm-9 col-md-10 col-lg-10">
                                        <div class="input-group input-group-lg">
                                            <div class="icon-addon addon-lg">
                                                <input type="hidden" value="<?php echo $_SESSION["id_Persona"]?>" id="id_Per">
                                                <input type="text" placeholder="Ingresar Video" class="form-control" id="cadena">
                                                <label for="Video" class="glyphicon glyphicon-search" rel="tooltip" title="Video"></label>
                                            </div>
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button" id="BuscarVideo"><i class="glyphicon glyphicon-search"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="well padding-10" style="margin: 10px">

                                        <div class="row">

                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background: #00000040" id="Videos">
                                                <?php if (mysqli_num_rows($var) > 0) { ?>
                                                    <?php
                                                    $i = 0;
                                                    while ($data = $var->fetch_object()) {
                                                        ?>
                                                        <div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;padding-bottom: 10px;">
                                                            <div id="tithim" class="col-xs-12 col-sm-12 col-md-3 col-lg-2" style="display: flex;align-items: center;min-height: 60px;">
                                                                <div><strong  style="font-size:16px"> <?php echo utf8_encode($data->No_Video); ?></strong></div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6"> 
                                                                <div>

                                                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="height: auto">
                                                                        <h3 style="text-align: center;margin: 5px;font-size: 14px;font-family: ">Descripción</h3> 
                                                                        <div style="text-align: center"><?php echo utf8_encode($data->Des_Video) ?></div>
                                                                        <div style="text-align: center"> Por <strong><?php echo utf8_encode($data->persona) ?></strong></div>
                                                                    </div>
                                                                    <?php if ($data->id_Videos_Anotados !== null) { ?>
                                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="text-align: center;color: #0081c2;font-size: 25px;align-items: center;">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h3 style="text-align: center;margin: 5px;font-size: 14px;font-family: ">Opción</h3></div><br>
                                                                            <div>
                                                                                <a onclick="CMGV(<?php echo utf8_encode($data->id_Videos_Anotados); ?>)" class="btn btn-labeled btn-danger"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta (<?php echo utf8_encode($data->count) ?>)</a>
                                                                            </div>
                                                                        </div>
                                                                    <?php } else { ?>
                                                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="text-align: center;color: #0081c2;font-size: 25px;align-items: center;">
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h3 style="text-align: center;margin: 5px;font-size: 14px;font-family: ">Opción</h3></div><br>
                                                                            <div>
                                                                                <a onclick="MGV(<?php echo utf8_encode($data->id_Video); ?>,<?php echo $_SESSION["id_Persona"]; ?>)" class="btn btn-labeled btn-success"> <span class="btn-label"><i class="glyphicon glyphicon-thumbs-up"></i></span>Me Gusta  (<?php echo utf8_encode($data->count) ?>)</a>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                </div>

                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px"> 
                                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">
                                                                    <button class="btn btn-info" data-toggle="modal" data-target="#myModal">Sonido <i class="fa fa-music"></i></button> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <?php
                                                    }
                                                } else {
                                                    ?>
                                                    <div id="tithim" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex;align-items: center;min-height: 60px;justify-content: center">
                                                        <div><strong  style="font-size:16px">No hay Videos Encontrados </strong></div>
                                                    </div>
                                                <?php }
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

            <script src="../js/Video/Video.js"></script>
            <!-- PAGE RELATED PLUGIN(S) 
            <script src="..."></script>-->
            <script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
            <script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
            <script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
            <script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
            <script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/autoFill.bootstrap.min.js"></script>
            <script type="text/javascript">

                $(document).ready(function () {
                    Actudalizar();
                    $(window).resize(function () {
                        if ($(document).width() >= 280 && $(document).width() <= 360) {
                            $("#cadena").removeClass('input-lg').addClass('input-xs');
                            $(".titMusic").css("font-size", '18px');

                        } else if ($(document).width() > 360) {
                            $("#cadena").removeClass('input-xs').addClass('input-lg');
                            $(".titMusic").css("font-size", '30px');
                        }
                    });
                    pageSetUp();
                    function Actudalizar(){
                        if ($(document).width() >= 280 && $(document).width() <= 360) {
                            $("#cadena").removeClass('input-lg').addClass('input-xs');
                            $(".titMusic").css("font-size", '18px');

                        } else if ($(document).width() > 360) {
                            $("#cadena").removeClass('input-xs').addClass('input-lg');
                            $(".titMusic").css("font-size", '30px');
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
