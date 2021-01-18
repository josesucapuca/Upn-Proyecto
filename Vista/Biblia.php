<?php
include_once '../DAO/VersiculoFavoritoDAO.php';
session_start();
$objs = new VersiculoFavoritoDAO();
$var = $objs->ListarVersiculoFavorito($_SESSION["id_Persona"]);
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
                @media(max-width:767px){
                    .sortable-grid{
                        height: auto;
                    }
                    #frameVer{
                        height: 50vh !important;
                    }
                }
            </style>
        </head>


        <body class="bodbiblia" style="background: #0000005e;" >
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <!-- MAIN CONTENT -->
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <div class="row" style="display: flex;justify-content: center;">
                            <div class="row" >
                                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="    justify-content: center;
                                         display: flex;">
                                    <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <label style="font-weight: 900;">Libros</label>
                                        <select id="seLibro" style="width:100%" class="select2" placeholder="Libros">
                                            <option value=""> SELECCIONAR</option>
                                            <optgroup id="AntTes" label="Antiguo testamento">
                                            </optgroup>
                                            <optgroup id="NueTes" label="Nuevo Testamento">
                                            </optgroup>
                                        </select>

                                    </div>
                                </article>
                                <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="    justify-content: center;
                                         display: flex;">
                                    <div class="form-group col-xs-12 col-sm-8 col-md-8  col-lg-8">
                                        <label style="font-weight: 900;">CAPITULO</label>
                                        <select id="seCapitulo" style="width:100%" class="select2">
                                            <option value=""> SELECCIONAR</option>
                                        </select>
                                    </div>
                                    <input type="hidden" id="id_P" value="<?php echo $_SESSION["id_Persona"] ?>">
                                </article>
                            </div>
                        </div>

                        <!-- widget grid -->
                        <section id="widget-grid" class="">

                            <!-- row -->
                            <div class="row">
                                <!-- WIDGET END -->
                                <article class="col-xs-12 col-sm-6 col-md-8 col-lg-8" style="margin-bottom: 30px">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget  jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Biblia</h2>

                                        </header>

                                        <!-- widget div-->
                                        <div style="background-color: #ffffff82!important;border-radius: 0px 0px 5px 5px;">

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding " style="height: 530px;overflow: auto;">
                                                <div >

                                                    <div id="content" style="margin-bottom: 20px;">
                                                        <!-- widget grid -->
                                                        <section id="widget-grid" class="">

                                                            <div class="row" >
                                                                <div class="row" ><h1 style="text-align: center;font-family: monospace!important"><strong>BIBLIA</strong></h1></div>
                                                                <div>
                                                                    <div class="jarviswidget-editbox">
                                                                    </div>
                                                                    <!-- end widget edit box -->

                                                                    <!-- widget content -->
                                                                    <div class="widget-body" >
                                                                        <p id="cabecera" class="alert alert-success text-align-center">
                                                                            <strong>SELECCIONAR LIBRO Y CAPITULO ...</strong>
                                                                        </p>

                                                                        <div id="Cuerpo" class="tree">
                                                                            <ul>
                                                                                <li id="licab">
                                                                                    <span id="Licap"><i class="fa fa-lg fa-book" id="iccab"></i> SELECCIONAR LIBRO Y CAPITULO...</span>
                                                                                    <ul id="versiculos">
                                                                                        <li>
                                                                                            <span class="label label-info"><i class="fa fa-lg fa-plus-circle"></i> SELECCIONAR LIBRO Y CAPITULO...</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>

                                                                            </ul>
                                                                        </div>

                                                                    </div>
                                                                    <!-- end widget content -->

                                                                </div>
                                                                <!-- end widget div -->

                                                                <!-- end widget -->

                                                                <!-- END COL -->

                                                            </div>

                                                            <!-- END ROW -->

                                                        </section>
                                                        <!-- end widget grid -->

                                                    </div>
                                                    <!-- END MAIN CONTENT -->

                                                </div>
                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                    </div>
                                    <!-- end widget -->

                                </article>
                                <!-- WIDGET END -->
                                <!-- NEW WIDGET START -->
                                <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="margin-bottom: 30px">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" >
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Versiculos Favoritos</h2>

                                        </header>

                                        <!-- widget div-->
                                        <div style="background-color: #ffffff82!important;border-radius: 0px 0px 5px 5px;">

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding ver" style="height: 530px;overflow: auto;">
                                                <div class="panel-group smart-accordion-default" id="verFav" style="padding: 5px;">
                                                    <?php
                                                    $i = 0;
                                                    while ($data = $var->fetch_object()) {
                                                        ?>
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-<?php echo $i; ?>"> 
                                                                        <i class="fa fa-fw fa-plus-circle txt-color-green"></i> 
                                                                        <i class="fa fa-fw fa-minus-circle txt-color-red"></i> <?php echo $data->Busqueda ?> </a></h4>
                                                            </div>
                                                            <div id="collapseOne-<?php echo $i; ?>" class="panel-collapse collapse in">
                                                                <div class="panel-body"><?php echo $data->Con_Versiculo ?>
                                                                </div>
                                                                <blockquote>
                                                                    <textarea placeholder="Ingresar Anotacion" disabled="disabled" class="form-control" id="Anotacion<?php echo $data->id_Versiculo_Favorito ?>" style="margin-bottom: 10px" ><?php echo $data->Anotacion ?></textarea>
                                                                    <p>
                                                                        <button class="btn btn-sm btn-primary" onclick="editar(<?php echo $data->id_Versiculo_Favorito ?>)" type="button">
                                                                            Editar
                                                                        </button>
                                                                        <button class="btn btn-primary" onclick="guardar(<?php echo $data->id_Versiculo_Favorito ?>)" type="button">
                                                                            Guardar
                                                                        </button>
                                                                    </p>
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                        <?php
                                                        $i++;
                                                    }
                                                    ?>

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>' + jsonData[i].Busqueda + '</a></h4>
                                                        </div>
                                                        <div id="collapse-" class="panel-collapse collapse ">
                                                            <div class="panel-body">
                                                                <blockquote>
                                                                    <textarea class="form-control"></textarea>
                                                                    <p>' + jsonData[i].Con_Versiculo + '</p>
                                                                    <small id="Comen"><div class="Comen">' + jsonData[i].Anotacion + '</div></small>
                                                                    <button class="btn btn-labeled btn-primary" style="align-items: center;justify-content: center;height: 20px;padding-top: 0px;"> Comentario</button>' +
                                                                </blockquote>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="click3edit">click2edit</div>
                                                    <p>
                                                        <button id="edit" class="btn btn-primary" onclick="editt()" type="button">
                                                            Edit
                                                        </button>
                                                        <button id="save" class="btn btn-primary" onclick="savee()" type="button">
                                                            Save
                                                        </button>
                                                    </p>
                                                </div>
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
            <script src="js/plugin/morris/morris.min.js"></script>
            <script src="../js/Biblia/Biblia.js"></script>
            <script src="js/plugin/summernote/summernote.min.js"></script>
            <!--<script src="../js/VersiculosFavoritos/VersiculosFavortios.js"></script>-->
            <script type="text/javascript">

                                                        // DO NOT REMOVE : GLOBAL FUNCTIONS!

                                                        $(document).ready(function () {
                                                            Actualizar();
                                                            $(window).resize(function () {
                                                                Actualizar();
                                                            });

                                                            function Actualizar() {
                                                                if ($(document).width() < 768) {
                                                                    $(".bodbiblia").css("height", "100%");
                                                                } else {
                                                                    $(".bodbiblia").css("height", "100%");
                                                                }
                                                            }
                                                            // PAGE RELATED SCRIPTS
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
            <script type="text/javascript">
                $(document).ready(function () {
                    pageSetUp();
                    $('.summernote').summernote({
                        height: 180,
                        focus: false,
                        tabsize: 2
                    });
                });
            </script>
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
