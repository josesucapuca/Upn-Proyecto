<!DOCTYPE html>
<?php session_start(); ?>
<html lang="es">
    <head>

        <title> SmartAdmin </title>
        <?php include_once './inc2/Estilos.php'; ?>
        <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
        <style>
            .tree li.parent_li>span:hover {
                background-color: #1f8c46;
                border: 1px solid #1f8c46;
                color: #fff;
            }
            .select2-container .select2-choice {

                background-color: #c1ad88;
            }
            .stbut{
                align-items: center;
                justify-content: center;
                height: 20px;
                padding-top: 0px;
            }
            #Licap{
                cursor: pointer;
                padding: 7px;
                    background: #6c5c3e;
    color: white;
            }
            #Licap:hover {
                background-color: #1f8c46;
                border: 1px solid #1f8c46;
                color: #fff;
            }
        </style>
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
    |  12. #RIGHT PANEL              |  right panel userlist          |
    |  13. #MAIN PANEL               |  main panel                    |
    |  14. #MAIN CONTENT             |  content holder                |
    |  15. #PAGE FOOTER              |  page footer                   |
    |  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
    |  17. #PLUGINS                  |  all scripts and plugins       |
    
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
    <body class="container" style="background: #604d2b91;padding-bottom: 0px">

        <!-- MAIN PANEL -->
        <div >

            <div id="content" style="margin-bottom: 20px;">
                <!-- widget grid -->
                <section id="widget-grid" class="">

                    <div class="row" >
                        <div class="row" ><h1 style="text-align: center;font-family: monospace!important"><strong>BIBLIA</strong></h1></div>
                        <div class="row" >
                            <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="    justify-content: center;
                                     display: flex;">
                                <div class="form-group col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                    <label>Libros</label>
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
                                    <label>CAPITULO</label>
                                    <select id="seCapitulo" style="width:100%" class="select2">
                                        <option value=""> SELECCIONAR</option>
                                    </select>
                                </div>
                                <input type="hidden" id="id_P" value="<?php echo $_SESSION["id_Persona"] ?>">
                            </article>
                        </div>

                        <!-- NEW COL START -->
                        <article class="col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 10px">

                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget" id="wid-id-4" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false">
                                <!-- widget options:
                                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                                data-widget-colorbutton="false"
                                data-widget-editbutton="false"
                                data-widget-togglebutton="false"
                                data-widget-deletebutton="false"
                                data-widget-fullscreenbutton="false"
                                data-widget-custombutton="false"
                                data-widget-collapsed="true"
                                data-widget-sortable="false"

                                -->
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-paperclip"></i> </span>
                                    <h2>CONTENIDO</h2>

                                </header>

                                <!-- widget div-->
                                <div>

                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body" style="min-height: 80vh;">
                                        <p id="cabecera" class="alert alert-info text-align-center">
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

                            </div>
                            <!-- end widget -->

                        </article>
                        <!-- END COL -->

                    </div>

                    <!-- END ROW -->

                </section>
                <!-- end widget grid -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <div id="shortcut">
            <ul>
                <li>
                    <a href="inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
                </li>
                <li>
                    <a href="calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
                </li>
                <li>
                    <a href="gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
                </li>
                <li>
                    <a href="invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
                </li>
                <li>
                    <a href="gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
                </li>
                <li>
                    <a href="profile.html" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
                </li>
            </ul>
        </div>
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

        <!-- PAGE RELATED PLUGIN(S) -->
        <script src="js/plugin/maxlength/bootstrap-maxlength.min.js"></script>
        <script src="js/plugin/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <script src="js/plugin/clockpicker/clockpicker.min.js"></script>
        <script src="js/plugin/bootstrap-tags/bootstrap-tagsinput.min.js"></script>
        <script src="js/plugin/noUiSlider/jquery.nouislider.min.js"></script>
        <script src="js/plugin/ion-slider/ion.rangeSlider.min.js"></script>
        <script src="js/plugin/bootstrap-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>		
        <script src="js/plugin/colorpicker/bootstrap-colorpicker.min.js"></script>
        <script src="js/plugin/knob/jquery.knob.min.js"></script>
        <script src="js/plugin/x-editable/moment.min.js"></script>
        <script src="js/plugin/x-editable/jquery.mockjax.min.js"></script>
        <script src="js/plugin/x-editable/x-editable.min.js"></script>
        <script src="js/plugin/typeahead/typeahead.min.js"></script>
        <script src="js/plugin/typeahead/typeaheadjs.min.js"></script>
        <script src="../js/Biblia/Biblia.js"></script>
        <script type="text/javascript">

            // DO NOT REMOVE : GLOBAL FUNCTIONS!

            $(document).ready(function () {
                pageSetUp();
                // PAGE RELATED SCRIPTS
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

</html>