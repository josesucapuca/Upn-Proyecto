<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/diariodevocional/fodomatutina4.jpg');">
        <head>
            <title>ceoadventista.org </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <!--NUEVO-->
            <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->

            <link href="../css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>

                                                                                    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
            <style>
                @media(max-width:750px){
                    .sortable-grid{
                        height: auto;
                    }
                    #frameVer{
                        height: 50vh !important;
                    }
                }
                @media only screen and (min-width: 500px) and (max-width: 1600px){
                    .conta2 {
                        width: 100%;
                        margin-left: auto;
                        margin-right: auto;
                        height: 100%;
                    }
                    hr {
                        margin-top: 55rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }
                }
                @media screen and (max-width: 900px) {
                    .conta2 {
                        height: 804px;
                    }
                    hr {
                        margin-top: 67rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }
                }
                @media screen and (max-width: 600px) {
                    .conta2 {
                        height: 767px;
                    }
                    hr {
                        margin-top: 60rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }
                }
                .abs-center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 16vh;
                }
                .asi{
                    display: flex;
                    justify-content: center;

                }
                .estudio-img {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 10vh;
                }
                .fc th{
                    padding: 10px 0px;
                    vertical-align: middle;
                    background: #F2F2F2;
                }
                /*                hr {
                                        margin-top: 55rem;
                                        margin-bottom: 1rem;
                                        border: 0;
                                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                                    }*/
            </style>
        </head>     
        <body class="conta2 bod">
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">

                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="" > </span>
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
                                            <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        <li class="divider"></li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="¿Estás seguro de salir de sesión?"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
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
                                            <i class="fa fa-home "></i> Inicio
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
                                                <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>

                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="¿Estás seguro de salir de sesión?"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- fullscreen button -->
                        </div>
                    </div>
                    <!-- MAIN CONTENT -->
                    <br>
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <!-- widget grid -->
                        <section id="widget-grid" class="">
                            <!-- row -->
                            <div class="row">
                                <!-- NEW COL START -->
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 30px">
                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-10" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                                            <h2>Diario Devocional</h2>
                                        </header>
                                        <!-- widget div-->
                                        <!--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">-->
                                        <!-- end widget edit box -->
                                        <!-- widget content -->
                                        <div class="widget-grid no-padding" style="min-height: 0px">
                                            <div id="content" style="margin-bottom: 100px;">
                                                <div class="row">
                                                    <!--<div class="col"></div>--> 
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div id="CalendarioWeb"></div>
                                                    </div>
                                                    <!--<div class="col"></div>-->
                                                </div>  
                                            </div>
                                        </div>
                                        <!--</div>-->
                                    </div>                                  
                                </article>
                            </div>																
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-image:url(../images/diariodevocional/fodomatutina3.PNG);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;">

                        <!--<div class="">-->
                        <div class="modal-header">
                            <h5 class="modal-title" id="tituloEvento"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                            <img src="../images/diariodevocional/logo-adventista.png" alt="" style="width: 15%;"/>
                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                            <h1 style="color: white">Mi Diario Devocional :D</h1>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="txtID_devocional" name="txtID_devocional">
                            <input type="hidden" id="txtFecha" name="txtFecha" /> 
                            <input type="hidden" id="txtID_persona" name="txtID_persona" />
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Nombre:</i></span>
                                            <input type="text" id="txtNombre" class="form-control" placeholder="Ingresar su nombre">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Iglesia / Distrito:</i></span>
                                            <input type="text" id="txtIgleDistri" class="form-control" placeholder="Ingresar Iglesia / Distrito">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star">Asociación / Misión:</i></span>
                                            <input type="text" id="txtAsoMisio" class="form-control" placeholder="Ingresar Asociación / Misión">
                                        </div>                                 
                                    </div>
                                </div>                                               
                                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Teléfono:</i></span>
                                            <input type="text" id="txtTelefono" class="form-control" placeholder="Ingresar su teléfono">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Email:</i></span>
                                            <input type="text" id="txtEmail" class="form-control" placeholder="Ingresar su Email">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Hora de la Devoción:</i></span>
                                            <input type="text" id="txtHora" value="10:30" class="form-control"/>
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star">Color del evento:</i></span>
                                            <input type="color" id="txtColor" value="#ff0000" class="form-control"/>
                                        </div>                                 
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/mayordomia1.png" alt="" style="width: 20%;"/>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <h1 style="color: white">UNIÓN PERUANA DEL NORTE</h1>
                                </div>
                            </div>
                        </div>
                        <!--</div>-->
                        <hr/>
                        <div class="modal-footer">  
                            <div class="row">                               
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                    <img src="../images/diariodevocional/mayordomia2.png" width="100" height="100">
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 abs-center">
                                    <div class="row"><h1 style="color: white">Mi Diario Devocional</h1> </div>                                                                
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Texto de Estudio:</i></span>
                                            <input type="text" id="txtTexto" class="form-control" placeholder="Ingresar el texto de estudio">
                                        </div>                                 
                                    </div>
                                </div>                                
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/resumen.png" alt="" style="width: 100%;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea id="txtResumen" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/aplica.png" alt="" style="width: 100%;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea id="txtAplica" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/pedidoOracion.png" alt="" style="width: 100%;"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <textarea id="txtPedido" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <textarea id="txtContestado" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/compartire.png" alt="" style="width: 113%;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea id="txtCompartire" rows="3" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                    <button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
                                </div>
                                <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                    <button type="button" id="btnModificar" class="btn btn-warning">Modificar</button>
                                </div>
                                <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                    <button type="button" id="btnEliminar" class="btn btn-danger">Borrar</button>
                                </div>
                                <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="../js/jquery.min.js" type="text/javascript"></script>
            <script src="../js/moment.min.js" type="text/javascript"></script>
            <script src="../js/DevocionesMatutinas/DiarioDevocional.js" type="text/javascript"></script>

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
            <script src="js/plugin/morris/morris.min.js"></script>
            <!--nuevo-->
            <script src="../js/fullcalendar.min.js" type="text/javascript"></script>
            <script src="../js/es.js" type="text/javascript"></script>                       
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <!--<script src="../js/DevocionesMatutinas/DevocionesMatutinas.js"></script>-->


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