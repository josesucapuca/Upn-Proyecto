<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>
            <meta charset="utf-8">
            <title> SmartAdmin </title>
            <meta name="description" content="">
            <meta name="author" content="">
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

            <!-- #CSS Links -->
            <!-- Basic Styles -->
            <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

            <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
            <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production-plugins.min.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.min.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-skins.min.css">

            <!-- SmartAdmin RTL Support -->
            <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> 

            <!-- We recommend you use "your_style.css" to override SmartAdmin
                 specific styles this will also ensure you retrain your customization with each SmartAdmin update.
            <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

            <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
            <link rel="stylesheet" type="text/css" media="screen" href="css/demo.min.css">

            <!-- #FAVICONS -->
            <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
            <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

            <!-- #GOOGLE FONT -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

            <!-- #APP SCREEN / ICONS -->
            <!-- Specifying a Webpage Icon for Web Clip 
                     Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
            <link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
            <link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
            <link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
            <link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

            <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">

            <!-- Startup image for web apps -->
            <link rel="apple-touch-startup-image" href="img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="img/splash/iphone.png" media="screen and (max-device-width: 320px)">

        </head>

        <!--

        TABLE OF CONTENTS.
        
        Use search to find needed section.
        
        ===================================================================
        
        |  01. #CSS Links                |  all CSS links and file paths  |
        |  02. #FAVICONS                 |  Favicon links and file paths  |
        |  03. #GOOGLE FONT              |  Google font link              |
        |  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
        |  05. #BODY                     |  body tag                      |
        |  06. #HEADER                   |  header tag                    |
        |  07. #PROJECTS                 |  project lists                 |
        |  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
        |  09. #MOBILE                   |  mobile view dropdown          |
        |  10. #SEARCH                   |  search field                  |
        |  11. #NAVIGATION               |  left panel & navigation       |
        |  12. #MAIN PANEL               |  main panel                    |
        |  13. #MAIN CONTENT             |  content holder                |
        |  14. #PAGE FOOTER              |  page footer                   |
        |  15. #SHORTCUT AREA            |  dropdown shortcuts area       |
        |  16. #PLUGINS                  |  all scripts and plugins       |
        
        ===================================================================
        
        -->

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

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Musica</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <iframe src="https://www.youtube.com/embed/wfCVew-1_lI" width="100%"></iframe>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                       
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
            <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Musica</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <iframe src="https://www.youtube.com/embed/wfCVew-1_lI" width="100%"></iframe>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                       
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
            <!-- END RIBBON -->



            <!-- MAIN CONTENT -->
            <div id="content">
                <!-- end row -->
                <div class="row">
                    <div class="row" >
                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="justify-content: center;display: flex;align-items: center">

                            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12"><h1 style="font-weight: 600;"><i class="fa fa-music"></i> Himinario <i class="fa fa-music"></i></h1></div>
                            <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                <input class="form-control" placeholder="Buscar" id="cadena" >
                            </div>
                        </article>
                    </div>
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="well padding-10" style="margin: 10px">
                                <table id="tablaHiminario" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descripcion</th>
                                            <th>Video</th>
                                            <th>Musica</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a><strong>Himno N°1 Cantad Alegres</strong></a> </td>
                                            <td>Mar  d sd sd s d sd s d s d sd s d sk</td>
                                            <td><button class="btn btn-outline btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-music"></i> Audio</button></td>
                                            <td><button class="btn btn-outline btn-success" data-toggle="modal" data-target="#myModal2"><i class="fa fa-film"></i> Video</button></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacos s d sd s d sd s d sd s d sb</td>
                                            <td><button class="btn btn-outline btn-success"><i class="fa fa-music"></i> Audio</button></td>
                                            <td><button class="btn btn-outline btn-success"><i class="fa fa-film"></i> Video</button></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td><button class="btn btn-outline btn-success"><i class="fa fa-music"></i> Audio</button></td>
                                            <td><button class="btn btn-outline btn-success"><i class="fa fa-film"></i> Video</button></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Wise</td>
                                            <td><button class="btn btn-outline btn-success"><i class="fa fa-music"></i> Audio</button></td>
                                            <td><button class="btn btn-outline btn-success"><i class="fa fa-film"></i> Video</button></td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>
                    <!-- END MAIN CONTENT -->

                </div>
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
            <script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
            <script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
            <script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
            <script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
            <script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
            <script src="../js/Himinario/Himinario.js"></script>
            <!-- PAGE RELATED PLUGIN(S) 
            <script src="..."></script>-->

            <script type="text/javascript">

                $(document).ready(function () {
                    $('#tablaHiminario').DataTable();
                    /* DO NOT REMOVE : GLOBAL FUNCTIONS!
                     *
                     * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
                     *
                     * // activate tooltips
                     * $("[rel=tooltip]").tooltip();
                     *
                     * // activate popovers
                     * $("[rel=popover]").popover();
                     *
                     * // activate popovers with hover states
                     * $("[rel=popover-hover]").popover({ trigger: "hover" });
                     *
                     * // activate inline charts
                     * runAllCharts();
                     *
                     * // setup widgets
                     * setup_widgets_desktop();
                     *
                     * // run form elements
                     * runAllForms();
                     *
                     ********************************
                     *
                     * pageSetUp() is needed whenever you load a page.
                     * It initializes and checks for all basic elements of the page
                     * and makes rendering easier.
                     *
                     */

                    pageSetUp();

                    /*
                     * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
                     * eg alert("my home function");
                     * 
                     * var pagefunction = function() {
                     *   ...
                     * }
                     * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
                     * 
                     * TO LOAD A SCRIPT:
                     * var pagefunction = function (){ 
                     *  loadScript(".../plugin.js", run_after_loaded);	
                     * }
                     * 
                     * OR
                     * 
                     * loadScript(".../plugin.js", run_after_loaded);
                     */

                })

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
