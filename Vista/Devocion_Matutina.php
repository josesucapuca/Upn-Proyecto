<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
<html lang="es">
    <head>

        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> SmartAdmin </title>
        <?php include_once './inc2/Estilos.php'; ?>
        <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
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
    <body class="">

        <!-- HEADER -->
        <header id="header">
            <div id="logo-group">

                <!-- PLACE YOUR LOGO HERE -->
                <span id="logo"> <img src="../images/iglesia.jpg" alt="SmartAdmin" style="height: 30px;width: 30px"> </span>
                <!-- END LOGO PLACEHOLDER -->

                <!-- Note: The activity badge color changes when clicked and resets the number to 0
                Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
            </div>
            <!-- pulled right: nav area -->
            <div class="pull-right">

                <!-- Top menu profile link : this shows only when top menu is active -->
                <ul id="mobile-profile-img" class="header-dropdown-list hidden-xs padding-5">
                    <li class="">
                        <a href="#" class="dropdown-toggle no-margin userdropdown" data-toggle="dropdown"> 
                            <img src="img/avatars/sunny.png" alt="John Doe" class="online" />  
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>rofile</a>
                            </li>
                            <li class="divider"></li>

                            <li class="divider"></li>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> Full <u>S</u>creen</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="login.html" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"><i class="fa fa-sign-out fa-lg"></i> <strong><u>L</u>ogout</strong></a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <!-- logout button -->
                <div id="logout" class="btn-header transparent pull-right">
                    <span> <a href="login.html" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
                </div>
                <!-- end logout button -->

                <!-- search mobile button (this is hidden till mobile view port) -->
                <div id="search-mobile" class="btn-header transparent pull-right">
                    <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
                </div>
                <!-- end search mobile button -->

                <!-- fullscreen button -->
                <div id="fullscreen" class="btn-header transparent pull-right">
                    <span> <a href="javascript:void(0);" data-action="launchFullscreen" title="Full Screen"><i class="fa fa-arrows-alt"></i></a> </span>
                </div>
                <!-- end fullscreen button -->

            </div>
            <!-- end pulled right: nav area -->

        </header>
        <div >

            <!-- RIBBON -->
            <div id="ribbon">

                <span class="ribbon-button-alignment"> 
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                        <i class="fa fa-refresh"></i>
                    </span> 
                </span>

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li>Jose Sucapuca</li><li>Devociones Matutinas</li>
                </ol>
                <!-- end breadcrumb -->

                <!-- You can also add more buttons to the
                ribbon for further usability

                Example below:

                <span class="ribbon-button-alignment pull-right">
                <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
                <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
                <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
                </span> -->

            </div>
            <!-- END RIBBON -->

            <!-- MAIN CONTENT -->
            <div id="content">

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                        <h1 class="page-title txt-color-blueDark"><i class="fa fa-book"></i> Devoción Matutina</h1>
                    </div>
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">

                    </div>
                </div>

                <!-- widget grid -->
                <section id="widget-grid" class="">

                    <!-- row -->
                    <div class="row">

                        <!-- NEW WIDGET START -->
                        <article class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="margin-bottom: 30px">

                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-10" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
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
                                    <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                    <h2>Devociones Matutinas </h2>

                                </header>

                                <!-- widget div-->
                                <div>

                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body no-padding">

                                        <div class="panel-group smart-accordion-default" id="matutina" >
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Devocion Matutina Para Adultos </a></h4>
                                                </div>
                                                <div id="collapseOne-1" class="panel-collapse collapse in">
                                                    <div class="panel-body">
                                                        <a href="https://drive.google.com/file/d/1jPvuEy7UOLT-EWcrVJ7MgknYfJt2lITI/view?usp=sharing" target="_blank">Devocion Matutina Para Adultos (12/12/12) <i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseTwo-1" class="collapsed"> <i class="fa fa-fw fa-exclamation txt-color-red"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Devocion Matutina Para Jovenes </a></h4>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Devocion Matutina Para Damas </a></h4>
                                                </div>
                                                <div id="collapseThree-1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <a href="#">Devocion Matutina Para Adultos (12/12/12) <i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseFor-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Devocion Matutina Para Niños </a></h4>
                                                </div>
                                                <div id="collapseFor-1" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <a href="#">Devocion Matutina Para Adultos (12/12/12) <i class="fa fa-file"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end widget content -->

                                </div>
                                <!-- end widget div -->

                            </div>
                            <!-- end widget -->
                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="true">
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
                                    <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                    <h2>Biblia</h2>

                                </header>

                                <!-- widget div-->
                                <div>

                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body no-padding">
                                        <iframe src="Biblia.php" width="100%" height="450px"></iframe>
                                    </div>
                                    <!-- end widget content -->

                                </div>
                            </div>
                            <!-- end widget -->

                        </article>
                        <!-- WIDGET END -->
                        <article class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="margin-bottom: 30px">

                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="true">
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
                                    <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                    <h2>Biblia</h2>

                                </header>

                                <!-- widget div-->
                                <div>

                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->

                                    </div>
                                    <!-- end widget edit box -->

                                    <!-- widget content -->
                                    <div class="widget-body no-padding" style="background-image: url('../images/ADULTOS-2-2020-320x180.jpg');background-size: 100% 100%;height: 100vh" >
                                       <iframe id="myframe" name="myframe" src="" width="100%" style="height: 100vh"></iframe>
                                    </div>
                                    <!-- end widget content -->

                                </div>
                            </div>
                            <!-- end widget -->

                        </article>
                        <!-- WIDGET END -->
                    </div>

                    <!-- end row -->

                </section>
                <!-- end widget grid -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->

        <!-- PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="txt-color-white">SmartAdmin 1.5 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span>
                </div>

                <div class="col-xs-6 col-sm-6 text-right hidden-xs">
                    <div class="txt-color-white inline-block">
                        <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                        <div class="btn-group dropup">
                            <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                                <i class="fa fa-link"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right text-left">
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Server Load</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <button class="btn btn-block btn-default">refresh</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="js/plugin/morris/morris.min.js"></script>
        <script src="../js/DevocionesMatutinas/DevocionesMatutinas.js"></script>


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

</html><?php } else {    include_once './inc2/Redireccionar.php';} ?>