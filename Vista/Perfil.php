<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>
            <meta charset="utf-8">
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title>ceoadventista.org</title>
            <meta name="description" content="">
            <meta name="author" content="">

            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

            <!-- Basic Styles -->
            <!--            <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
                        <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">-->

            <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
            <!--            <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
                        <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
                        <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">-->

            <!-- SmartAdmin RTL Support -->
            <!--<link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css">--> 

            <!-- We recommend you use "your_style.css" to override SmartAdmin
                 specific styles this will also ensure you retrain your customization with each SmartAdmin update.
            <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

            <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
            <!--<link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">-->

            <!-- FAVICONS -->
            <!--            <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
                        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">-->

            <!-- GOOGLE FONT -->
            <!--            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">-->

            <!-- Specifying a Webpage Icon for Web Clip 
                     Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
            <!--            <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
                        <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
                        <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
                        <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">-->

            <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
            <!--            <meta name="apple-mobile-web-app-capable" content="yes">
                        <meta name="apple-mobile-web-app-status-bar-style" content="black">-->

            <!-- Startup image for web apps -->
            <!--            <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
                        <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
                        <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">-->
            <!--LINKS ANTIGUOS-->
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
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
        <body class="conta bod">
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">

                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" > </span>                            
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
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesion"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesion</strong></a>
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
                                <article class="col-xs-12 col-sm-6 col-md-8 col-lg-12" style="margin-bottom: 30px">

                                    <!-- Widget ID (each widget will need unique ID)-->
                                    <div class="jarviswidget  jarviswidget-color-green" id="wid-id-11" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                                            <h2>Datos generales</h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding">
                                                <div id="content" style="margin-bottom: 20px;">
                                                    <div class="row">
                                                        <br><br>
                                                        <div class="col-xs-12 col-sm-6 col-md-8 col-lg-12">
                                                            <div class="row">
                                                                <div class="col-sm-4 profile-pic">
                                                                    <img src="../images/users.png" style="width: 30%;">                                                     
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <h1><?php echo $_SESSION["Persona"]; ?> <span class="semi-bold"></span>
                                                                        <br>
                                                                        <small><?php echo $_SESSION["Usuario"]; ?></small></h1>
                                                                    <br>                  
                                                                </div>                                                 
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <form method="POST">
                                                        <table id="user" class="table table-bordered table-striped" style="clear: both">                                                        
                                                            <tbody>
                                                            <input id="idediuser" type="hidden" value="<?php echo $_SESSION["id_Usuario"] ?>">
                                                            <tr>
                                                                <td style="width:35%;">Contraseña:</td>
                                                                <td style="width:65%"><a href="form-x-editable.html#" id="edicontra" data-type="password" data-pk="1" data-original-title="Enter edicontra"><?php echo $_SESSION["Contra"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:35%;">Nombres:</td>
                                                                <td style="width:65%"><a href="form-x-editable.html#" id="edinombre" data-type="text" data-pk="1" data-original-title="Enter edinombre"><?php echo $_SESSION["No_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:35%;">Apellidos:</td>
                                                                <td style="width:65%"><a href="form-x-editable.html#" id="ediapellido" data-type="text" data-pk="1" data-original-title="Enter ediapellido" ><?php echo $_SESSION["AP_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:35%;">Edad:</td>
                                                                <td style="width:65%"><a href="form-x-editable.html#" id="ediedad" data-type="text" data-pk="1" data-original-title="Enter ediedad"><?php echo $_SESSION["Edad_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Sexo:</td>
                                                                <td><a href="form-x-editable.html#" id="edisexo" data-type="select" data-pk="1" data-value="5" data-source="/sexos" data-original-title="Select edisexo"><?php echo $_SESSION["Se_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Estado civil:</td>
                                                                <td><a href="form-x-editable.html#" id="ediestadocivil" data-type="select" data-pk="1" data-value="5" data-source="/estadociviles" data-original-title="Select ediestadocivil"><?php echo $_SESSION["Es_Civil_Persona"]; ?></a></td>
                                                            </tr> 
                                                            <tr>
                                                                <td>Tipo de usuario:</td>
                                                                <td><a href="form-x-editable.html#" id="editipouser" data-type="select" data-pk="1" data-value="5" data-value="LI" data-source="/tipousers" data-original-title="Select editipouser"><?php echo $_SESSION["Ti_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Dirección:</td>
                                                                <td><a href="form-x-editable.html#" id="edidireccion" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-original-title="Enter edidireccion"><?php echo $_SESSION["dire_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:35%;">Teléfono:</td>
                                                                <td style="width:65%"><a href="form-x-editable.html#" id="editelefono" data-type="text" data-pk="1" data-original-title="Enter editelefono"><?php echo $_SESSION["tele_Persona"]; ?></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Misión:</td>
                                                                <!--<td><a href="form-x-editable.html#" id="sel_mision" data-type="select2" data-pk="1" data-select-search="true" data-value="BS" data-original-title="Select sel_mision"><?php echo $_SESSION["No_Mision"]; ?></a></td>-->
                                                                <td><select class="form-control" name="state" id="sel_mision" required="">
                                                                        <option value="0"><?php echo $_SESSION["No_Mision"]; ?></option>                                                                                                                          
                                                                    </select></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Distrito:</td>
                                                                <!--<td><a href="form-x-editable.html#" id="sel_distrito" data-type="select2" data-pk="1" data-select-search="true" data-value="BS" data-original-title="Select sel_distrito"><?php echo $_SESSION["No_Distrito"]; ?></a></td>-->
                                                                <td><select class="form-control" name="state" id="sel_distrito">
                                                                        <option value="0"><?php echo $_SESSION["No_Distrito"]; ?></option>
                                                                    </select></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Iglesia:</td>
                                                                <!--<td><a href="form-x-editable.html#" id="sel_iglesia" data-type="select2" data-pk="1" data-select-search="true" data-value="BS" data-original-title="Select sel_iglesia"><?php echo $_SESSION["Nombre_Iglesia"]; ?></a></td>-->
                                                            <td><select class="form-control" name="state" id="sel_iglesia">
                                                                <option value="0"><?php echo $_SESSION["Nombre_Iglesia"]; ?></option>
                                                            </select></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:35%;">Correo:</td>
                                                                <td style="width:65%"><a href="form-x-editable.html#" id="edicorreo" data-type="text" data-pk="1" data-original-title="Enter edicorreo"><?php echo $_SESSION["correo_Persona"]; ?></a></td>
                                                            </tr>                                                                
                                                            </tbody>
                                                        </table>
                                                        <div class="row"> 
                                                            <div class="col-xs-5 col-sm-1 col-md-1 col-lg-1 asi"></div>
                                                            <div class="col-xs-3 col-sm-5 col-md-5 col-lg-5 ">
                                                                <a href="Principal.php"><div class="text-center"><button class="btn login_btn" type="button">Cancelar</button></div></a>
                                                            </div>
                                                            <div class="col-xs-3 col-sm-5 col-md-5 col-lg-5" style="align-items: center;">                                    
                                                                <div class="text-center"><button class="btn login_btn" type="submit" name="edituser" id="edituser" onclick="cargardatos()">Actualizar</button></div>
                                                            </div>
                                                        </div>
                                                    </form>
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
            <!--================================================== -->

            <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
            <!--<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>-->

            <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <!--<script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>-->
    <!--            <script>
                                                                    if (!window.jQuery) {
                                                                        document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
                                                                    }
            </script>-->

                    <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->
        <!--            <script>
                                                                            if (!window.jQuery.ui) {
                                                                                document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
                                                                            }
                    </script>-->

            <!-- IMPORTANT: APP CONFIG -->

            <script src="js/app.config.js"></script>

            <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
            <!--<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>--> 

            <!-- BOOTSTRAP JS -->
            <script src="js/bootstrap/bootstrap.min.js"></script>

            <!-- CUSTOM NOTIFICATION -->
            <!--<script src="js/notification/SmartNotification.min.js"></script>-->

            <!-- JARVIS WIDGETS -->
            <!--<script src="js/smartwidgets/jarvis.widget.min.js"></script>-->

            <!-- EASY PIE CHARTS -->
            <!--<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>-->

            <!-- SPARKLINES -->
            <!--<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>-->

            <!-- JQUERY VALIDATE -->
            <!--<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>-->

            <!-- JQUERY MASKED INPUT -->
            <!--<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>-->

            <!-- JQUERY SELECT2 INPUT -->
            <script src="js/plugin/select2/select2.min.js"></script>

            <!-- JQUERY UI + Bootstrap Slider -->
            <!--<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>-->

            <!-- browser msie issue fix -->
            <!--<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>-->

            <!-- FastClick: For mobile devices -->
            <!--<script src="js/plugin/fastclick/fastclick.min.js"></script>-->

            <!--[if IE 8]>

            <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

            <![endif]-->

            <!-- Demo purpose only -->
            <!--<script src="js/demo.min.js"></script>-->

            <!-- MAIN APP JS FILE -->
            <script src="js/app.min.js"></script>

            <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
            <!-- Voice command : plugin -->
            <!--<script src="js/speech/voicecommand.min.js"></script>-->

            <!-- SmartChat UI : plugin -->
    <!--            <script src="js/smart-chat-ui/smart.chat.ui.min.js"></script>
            <script src="js/smart-chat-ui/smart.chat.manager.min.js"></script>-->

            <!-- PAGE RELATED PLUGIN(S) -->
            <!--<script src="js/plugin/maxlength/bootstrap-maxlength.min.js"></script>-->
            <!--<script src="js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>-->
            <!--<script src="js/plugin/clockpicker/clockpicker.min.js"></script>-->
            <!--<script src="js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js"></script>-->
            <!--<script src="js/plugin/noUiSlider/jquery.nouislider.min.js"></script>-->
            <!--<script src="js/plugin/ion-slider/ion.rangeSlider.min.js"></script>-->
            <!--<script src="js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>-->		
            <!--<script src="js/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>-->
            <!--<script src="js/plugin/knob/jquery.knob.min.js"></script>-->
            <script src="js/plugin/x-editable/moment.min.js"></script>
            <script src="js/plugin/x-editable/jquery.mockjax.min.js"></script>
            <script src="js/plugin/x-editable/x-editable.min.js"></script>
            <!--<script src="js/plugin/typeahead/typeahead.min.js"></script>-->
            <!--<script src="js/plugin/typeahead/typeaheadjs.min.js"></script>-->
            <script src="../js/Logueo/Validacion.js" type="text/javascript"></script>
            <script src="../js/Logueo/RegistrarUsuario.js" type="text/javascript"></script>
            <script type="text/javascript">

                                                                    // DO NOT REMOVE : GLOBAL FUNCTIONS!

                                                                    $(document).ready(function () {

                                                                        pageSetUp();
                                                                        //                                                                        Mision();

                                                                        /*
                                                                         * X-Ediable
                                                                         */


                                                                        (function (e) {
                                                                            "use strict";
                                                                            var t = function (e) {
                                                                                this.init("address", e, t.defaults)
                                                                            };
                                                                            e.fn.editableutils.inherit(t, e.fn.editabletypes.abstractinput);
                                                                            e.extend(t.prototype, {
                                                                                render: function () {
                                                                                    this.$input = this.$tpl.find("input")
                                                                                },
                                                                                value2html: function (t, n) {
                                                                                    if (!t) {
                                                                                        e(n).empty();
                                                                                        return
                                                                                    }
                                                                                    var r = e("<div>").text(t.city).html() + ", " + e("<div>").text(t.street).html() +
                                                                                            " st., bld. " + e("<div>").text(t.building).html();
                                                                                    e(n).html(r)
                                                                                },
                                                                                html2value: function (e) {
                                                                                    return null
                                                                                },
                                                                                value2str: function (e) {
                                                                                    var t = "";
                                                                                    if (e)
                                                                                        for (var n in e)
                                                                                            t = t + n + ":" + e[n] + ";";
                                                                                    return t
                                                                                },
                                                                                str2value: function (e) {
                                                                                    return e
                                                                                },
                                                                                value2input: function (e) {
                                                                                    if (!e)
                                                                                        return;
                                                                                    this.$input.filter('[name="city"]').val(e.city);
                                                                                    this.$input.filter('[name="street"]').val(e.street);
                                                                                    this.$input.filter('[name="building"]').val(e.building)
                                                                                },
                                                                                input2value: function () {
                                                                                    return {
                                                                                        city: this.$input.filter('[name="city"]').val(),
                                                                                        street: this.$input.filter('[name="street"]').val(),
                                                                                        building: this.$input.filter('[name="building"]').val()
                                                                                    }
                                                                                },
                                                                                activate: function () {
                                                                                    this.$input.filter('[name="city"]').focus()
                                                                                },
                                                                                autosubmit: function () {
                                                                                    this.$input.keydown(function (t) {
                                                                                        t.which === 13 && e(this).closest("form").submit()
                                                                                    })
                                                                                }
                                                                            });
                                                                            t.defaults = e.extend({}, e.fn.editabletypes.abstractinput.defaults, {
                                                                                tpl: '<div class="editable-address"><label><span>City: </span><input type="text" name="city" class="input-small"></label></div><div class="editable-address"><label><span>Street: </span><input type="text" name="street" class="input-small"></label></div><div class="editable-address"><label><span>Building: </span><input type="text" name="building" class="input-mini"></label></div>',
                                                                                inputclass: ""
                                                                            });
                                                                            e.fn.editabletypes.address = t
                                                                        })(window.jQuery);

                                                                        //ajax mocks
                                                                        $.mockjaxSettings.responseTime = 500;

                                                                        $.mockjax({
                                                                            url: '/post',
                                                                            response: function (settings) {
                                                                                log(settings, this);
                                                                            }
                                                                        });

                                                                        $.mockjax({
                                                                            url: '/error',
                                                                            status: 400,
                                                                            statusText: 'Bad Request',
                                                                            response: function (settings) {
                                                                                this.responseText = 'Please input correct value';
                                                                                log(settings, this);
                                                                            }
                                                                        });

                                                                        $.mockjax({
                                                                            url: '/status',
                                                                            status: 500,
                                                                            response: function (settings) {
                                                                                this.responseText = 'Internal Server Error';
                                                                                log(settings, this);
                                                                            }
                                                                        });
                                                                        //INICIO DE COMBOS
                                                                        $.mockjax({
                                                                            url: '/sexos',
                                                                            response: function (settings) {
                                                                                this.responseText = [{
                                                                                        value: 0,
                                                                                        text: 'Masculino'
                                                                                    }, {
                                                                                        value: 1,
                                                                                        text: 'Femenino'
                                                                                    }];
                                                                                log(settings, this);
                                                                            }
                                                                        });
                                                                        $.mockjax({
                                                                            url: '/estadociviles',
                                                                            response: function (settings) {
                                                                                this.responseText = [{
                                                                                        value: 0,
                                                                                        text: 'Soltero'
                                                                                    }, {
                                                                                        value: 1,
                                                                                        text: 'Casado'
                                                                                    }, {
                                                                                        value: 2,
                                                                                        text: 'Viudo'
                                                                                    }, {
                                                                                        value: 3,
                                                                                        text: 'Divorciado'
                                                                                    }];
                                                                                log(settings, this);
                                                                            }
                                                                        });
                                                                        $.mockjax({
                                                                            url: '/tipousers',
                                                                            response: function (settings) {
                                                                                this.responseText = [{
                                                                                        value: 0,
                                                                                        text: 'Líder'
                                                                                    }, {
                                                                                        value: 1,
                                                                                        text: 'Estudiante'
                                                                                    }, {
                                                                                        value: 2,
                                                                                        text: 'Miembro'
                                                                                    }, {
                                                                                        value: 3,
                                                                                        text: 'Pastor'
                                                                                    }];
                                                                                log(settings, this);
                                                                            }
                                                                        });
                                                                        //FIN DE COMBOS

                                                                        //TODO: add this div to page
                                                                        function log(settings, response) {
                                                                            var s = [],
                                                                                    str;
                                                                            s.push(settings.type.toUpperCase() + ' url = "' + settings.url + '"');
                                                                            for (var a in settings.data) {
                                                                                if (settings.data[a] && typeof settings.data[a] === 'object') {
                                                                                    str = [];
                                                                                    for (var j in settings.data[a]) {
                                                                                        str.push(j + ': "' + settings.data[a][j] + '"');
                                                                                    }
                                                                                    str = '{ ' + str.join(', ') + ' }';
                                                                                } else {
                                                                                    str = '"' + settings.data[a] + '"';
                                                                                }
                                                                                s.push(a + ' = ' + str);
                                                                            }
                                                                            s.push('RESPONSE: status = ' + response.status);

                                                                            if (response.responseText) {
                                                                                if ($.isArray(response.responseText)) {
                                                                                    s.push('[');
                                                                                    $.each(response.responseText, function (i, v) {
                                                                                        s.push('{value: ' + v.value + ', text: "' + v.text + '"}');
                                                                                    });
                                                                                    s.push(']');
                                                                                } else {
                                                                                    s.push($.trim(response.responseText));
                                                                                }
                                                                            }
                                                                            s.push('--------------------------------------\n');
                                                                            $('#console').val(s.join('\n') + $('#console').val());
                                                                        }

                                                                        /*
                                                                         * X-EDITABLES
                                                                         */

                                                                        $('#inline').on('change', function (e) {
                                                                            if ($(this).prop('checked')) {
                                                                                window.location.href = '?mode=inline#ajax/plugins.html';
                                                                            } else {
                                                                                window.location.href = '?#ajax/plugins.html';
                                                                            }
                                                                        });

                                                                        if (window.location.href.indexOf("?mode=inline") > -1) {
                                                                            $('#inline').prop('checked', true);
                                                                            $.fn.editable.defaults.mode = 'inline';
                                                                        } else {
                                                                            $('#inline').prop('checked', false);
                                                                            $.fn.editable.defaults.mode = 'popup';
                                                                        }

                                                                        //defaults
                                                                        $.fn.editable.defaults.url = '/post';
                                                                        //$.fn.editable.defaults.mode = 'inline'; use this to edit inline

                                                                        //enable / disable
                                                                        $('#enable').click(function () {
                                                                            $('#user .editable').editable('toggleDisabled');
                                                                        });
                                                                        //INICIO DE CAMPOS EDITABLES
                                                                        //editables

                                                                        $('#edidUsuario').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'edidUsuario',
                                                                            title: 'Enter edidUsuario'
                                                                        });
                                                                        $('#edicontra').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'edicontra',
                                                                            title: 'Enter edicontra'
                                                                        });
                                                                        $('#edinombre').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'edinombre',
                                                                            title: 'Enter edinombre'
                                                                        });
                                                                        $('#ediapellido').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'ediapellido',
                                                                            title: 'Enter ediapellido'
                                                                        });
                                                                        $('#ediedad').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'ediedad',
                                                                            title: 'Enter ediedad'
                                                                        });
                                                                        $('#editelefono').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'editelefono',
                                                                            title: 'Enter editelefono'
                                                                        });
                                                                        $('#edicorreo').editable({
                                                                            url: '/post',
                                                                            type: 'text',
                                                                            pk: 1,
                                                                            name: 'correo',
                                                                            title: 'Enter edicorreo'
                                                                        });

                                                                        $('#status').editable();

                                                                        $('#edisexo').editable({
                                                                            showbuttons: false
                                                                        });
                                                                        $('#ediestadocivil').editable({
                                                                            showbuttons: false
                                                                        });
                                                                        $('#editipouser').editable({
                                                                            showbuttons: false
                                                                        });


                                                                        $('#vacation').editable({
                                                                            datepicker: {
                                                                                todayBtn: 'linked'
                                                                            }
                                                                        });

                                                                        $('#dob').editable();

                                                                        $('#event').editable({
                                                                            placement: 'right',
                                                                            combodate: {
                                                                                firstItem: 'name'
                                                                            }
                                                                        });

                                                                        $('#edidireccion').editable({
                                                                            showbuttons: 'bottom'
                                                                        });
    //                                                                        var countries = [];
    //                                                                        $.each({
    //                                                                            "BD": "lall",
    //                                                                            "BE": "nuevo",
    //                                                                            "BF": "tut Faso",
    //                                                                            "BG": "Bulgaria",
    //                                                                            "BA": "Bosnia and Herzegovina",
    //                                                                            "BB": "Barbados",
    //                                                                            "WF": "Wallis and Futuna",
    //                                                                            "BL": "Saint Bartelemey",
    //                                                                            "BM": "Bermuda",
    //                                                                            "BN": "Brunei Darussalam",
    //                                                                            "BS": "Bahamas"
    //                                                                        }, function (k, v) {
    //                                                                            countries.push({
    //                                                                                id: k,
    //                                                                                text: v
    //                                                                            });
    //                                                                        });
    //
    //
    //                                                                        var mision = [];
    //                                                                        $.each({
    //                                                                            "BD": "lall",
    //                                                                            "BE": "nuevo",
    //                                                                            "BF": "tut Faso",
    //                                                                            "BG": "Bulgaria",
    //                                                                            "BA": "Bosnia and Herzegovina",
    //                                                                            "BB": "Barbados",
    //                                                                            "WF": "Wallis and Futuna",
    //                                                                            "BL": "Saint Bartelemey",
    //                                                                            "BM": "Bermuda",
    //                                                                            "BN": "Brunei Darussalam",
    //                                                                            "BS": "Bahamas"
    //                                                                        }, function (k, v) {
    //                                                                            mision.push({
    //                                                                                id: k,
    //                                                                                text: v
    //                                                                            });
    //                                                                        });



    //                                                                        $('#sel_mision').editable({
    //                                                                            source: mision,
    //                                                                            select2: {
    //                                                                                width: 200
    //                                                                            }
    //                                                                        });
    //                                                                        $('#sel_distrito').editable({
    //                                                                            source: countries,
    //                                                                            select2: {
    //                                                                                width: 200
    //                                                                            }
    //                                                                        });
    //                                                                        $('#sel_iglesia').editable({
    //                                                                            source: countries,
    //                                                                            select2: {
    //                                                                                width: 200
    //                                                                            }
    //                                                                        });

                                                                        $('#user .editable').on('hidden', function (e, reason) {
                                                                            if (reason === 'save' || reason === 'nochange') {
                                                                                var $next = $(this).closest('tr').next().find('.editable');
                                                                                if ($('#autoopen').is(':checked')) {
                                                                                    setTimeout(function () {
                                                                                        $next.editable('show');
                                                                                    }, 300);
                                                                                } else {
                                                                                    $next.focus();
                                                                                }
                                                                            }
                                                                        });

                                                                    });

            </script>
            <script type="text/javascript">
                function Mision() {
                    $.ajax({
                        type: "POST",
                        url: 'Controlador/Logueo.php',
                        data: {opc: "ListarMision"},
                        success: function (response)
                        {
                            var data = JSON.parse(response);
                            var cadena = "<option value=''>SELECCIONAR MISIÓN</option>";
                            if (data.length > 0) {
                                for (var i = 0; i < data.length; i++) {
                                    // alert(data[i].id_Mision);
                                    cadena += "<option value='" + data[i].id_Mision + "'>" + data[i].No_Mision + "</option>";
                                }
                                $("#sel_mision").html(cadena);
                                var id_Mision = $("#sel_mision").val();
                                Distrito(id_Mision);
                            } else {
                                cadena += "<option value=''>No hay datos</option>";
                                $("#sel_mision").html(cadena);
                            }
                        }
                    });
                }
            </script>
        </body>

    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>