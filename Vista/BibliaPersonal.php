<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>

            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title> SmartAdmin </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
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
        <body class="container">

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
                    <div class="col-xs-6 col-sm-6 col-md-6">
                        <span class="ribbon-button-alignment"> 
                            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                                <i class="fa fa-refresh"></i>
                            </span> 
                        </span>

                        <!-- breadcrumb -->
                        <ol class="breadcrumb">
                            <input type="hidden" id="PersonaUsuario" value="<?php echo $_SESSION["Persona"]; ?>">
                            <?php echo $_SESSION["Persona"]; ?> 
                            / <a href="Principal.php">Menú</a> / <li style="text-align: right"><a href="#"><strong>Biblia Personal</strong></a></li>
                        </ol>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6" style="text-align: right">
                        <!-- breadcrumb -->
                        <ol class="breadcrumb">
                            <?php
                            if ($_SESSION["Ti_Iglesia"] === "I") {
                                echo "Iglesia :";
                            } else if ($_SESSION["Ti_Iglesia"] === "C") {
                                echo "Iglesia:";
                            }
                            ?> <?php echo $_SESSION["Nombre_Iglesia"]; ?>
                        </ol>
                    </div>

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
                            <h1 class="page-title txt-color-blueDark"><i class="fa fa-book"></i> Biblia Personal</h1>
                        </div>
                    </div>

                    <!-- widget grid -->
                    <section id="widget-grid" class="">

                        <!-- row -->
                        <div class="row">

                            <!-- NEW WIDGET START -->
                            <article class="col-xs-12 col-sm-6 col-md-5 col-lg-5" style="margin-bottom: 30px">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-color-greenLight" id="wid-id-11" data-widget-editbutton="true" >
                                    <header>
                                        <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                        <h2>Versiculos Favoritos</h2>

                                    </header>

                                    <!-- widget div-->
                                    <div>

                                        <!-- widget edit box -->
                                        <div class="jarviswidget-editbox">
                                            <!-- This area used as dropdown edit box -->

                                        </div>
                                        <!-- end widget edit box -->

                                        <!-- widget content -->
                                        <div class="widget-body no-padding ver">
                                            <iframe id="frameVer" src="VersiculosFavoritos.php" width="100%" style="height: 100vh;border: 0px;"></iframe>
                                        </div>
                                        <!-- end widget content -->

                                    </div>
                                </div>
                                <!-- end widget -->


                            </article>
                            <!-- WIDGET END -->
                            <article class="col-xs-12 col-sm-6 col-md-7 col-lg-7" style="margin-bottom: 30px">

                                <!-- Widget ID (each widget will need unique ID)-->
                                <div class="jarviswidget jarviswidget-color-teal" id="wid-id-11" data-widget-editbutton="true" data-widget-attstyle="jarviswidget-color-teal">
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
                                        <div class="widget-body no-padding ">
                                            <iframe src="Biblia.php" width="100%" style="height: 100vh;border: 0px;"></iframe>
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

            <script type="text/javascript">
                // PAGE RELATED SCRIPTS

                /*
                 * Run all morris chart on this page
                 */
                $(document).ready(function () {

                    // DO NOT REMOVE : GLOBAL FUNCTIONS!
                    pageSetUp();

                    if ($('#sales-graph').length) {

                        Morris.Area({
                            element: 'sales-graph',
                            data: [{
                                    period: '2010 Q1',
                                    iphone: 2666,
                                    ipad: null,
                                    itouch: 2647
                                }, {
                                    period: '2010 Q2',
                                    iphone: 2778,
                                    ipad: 2294,
                                    itouch: 2441
                                }, {
                                    period: '2010 Q3',
                                    iphone: 4912,
                                    ipad: 1969,
                                    itouch: 2501
                                }, {
                                    period: '2010 Q4',
                                    iphone: 3767,
                                    ipad: 3597,
                                    itouch: 5689
                                }, {
                                    period: '2011 Q1',
                                    iphone: 6810,
                                    ipad: 1914,
                                    itouch: 2293
                                }, {
                                    period: '2011 Q2',
                                    iphone: 5670,
                                    ipad: 4293,
                                    itouch: 1881
                                }, {
                                    period: '2011 Q3',
                                    iphone: 4820,
                                    ipad: 3795,
                                    itouch: 1588
                                }, {
                                    period: '2011 Q4',
                                    iphone: 15073,
                                    ipad: 5967,
                                    itouch: 5175
                                }, {
                                    period: '2012 Q1',
                                    iphone: 10687,
                                    ipad: 4460,
                                    itouch: 2028
                                }, {
                                    period: '2012 Q2',
                                    iphone: 8432,
                                    ipad: 5713,
                                    itouch: 1791
                                }],
                            xkey: 'period',
                            ykeys: ['iphone', 'ipad', 'itouch'],
                            labels: ['iPhone', 'iPad', 'iPod Touch'],
                            pointSize: 2,
                            hideHover: 'auto'
                        });

                    }

                    // area graph
                    if ($('#area-graph').length) {
                        Morris.Area({
                            element: 'area-graph',
                            data: [{
                                    x: '2011 Q1',
                                    y: 3,
                                    z: 3
                                }, {
                                    x: '2011 Q2',
                                    y: 2,
                                    z: 0
                                }, {
                                    x: '2011 Q3',
                                    y: 0,
                                    z: 2
                                }, {
                                    x: '2011 Q4',
                                    y: 4,
                                    z: 4
                                }],
                            xkey: 'x',
                            ykeys: ['y', 'z'],
                            labels: ['Y', 'Z']
                        });
                    }

                    // bar graph color
                    if ($('#bar-graph').length) {

                        Morris.Bar({
                            element: 'bar-graph',
                            data: [{
                                    x: '2011 Q1',
                                    y: 0
                                }, {
                                    x: '2011 Q2',
                                    y: 1
                                }, {
                                    x: '2011 Q3',
                                    y: 2
                                }, {
                                    x: '2011 Q4',
                                    y: 3
                                }, {
                                    x: '2012 Q1',
                                    y: 4
                                }, {
                                    x: '2012 Q2',
                                    y: 5
                                }, {
                                    x: '2012 Q3',
                                    y: 6
                                }, {
                                    x: '2012 Q4',
                                    y: 7
                                }, {
                                    x: '2013 Q1',
                                    y: 8
                                }],
                            xkey: 'x',
                            ykeys: ['y'],
                            labels: ['Y'],
                            barColors: function (row, series, type) {
                                if (type === 'bar') {
                                    var red = Math.ceil(150 * row.y / this.ymax);
                                    return 'rgb(' + red + ',0,0)';
                                } else {
                                    return '#000';
                                }
                            }
                        });

                    }

                    // Use Morris.Bar
                    if ($('#normal-bar-graph').length) {

                        Morris.Bar({
                            element: 'normal-bar-graph',
                            data: [{
                                    x: '2011 Q1',
                                    y: 3,
                                    z: 2,
                                    a: 3
                                }, {
                                    x: '2011 Q2',
                                    y: 2,
                                    z: null,
                                    a: 1
                                }, {
                                    x: '2011 Q3',
                                    y: 0,
                                    z: 2,
                                    a: 4
                                }, {
                                    x: '2011 Q4',
                                    y: 2,
                                    z: 4,
                                    a: 3
                                }],
                            xkey: 'x',
                            ykeys: ['y', 'z', 'a'],
                            labels: ['Y', 'Z', 'A']
                        });

                    }

                    // Use Morris.Bar 2
                    if ($('#noline-bar-graph').length) {
                        Morris.Bar({
                            element: 'noline-bar-graph',
                            axes: false,
                            data: [{
                                    x: '2011 Q1',
                                    y: 3,
                                    z: 2,
                                    a: 3
                                }, {
                                    x: '2011 Q2',
                                    y: 2,
                                    z: null,
                                    a: 1
                                }, {
                                    x: '2011 Q3',
                                    y: 0,
                                    z: 2,
                                    a: 4
                                }, {
                                    x: '2011 Q4',
                                    y: 2,
                                    z: 4,
                                    a: 3
                                }],
                            xkey: 'x',
                            ykeys: ['y', 'z', 'a'],
                            labels: ['Y', 'Z', 'A']
                        });
                    }

                    /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                    if ($('#year-graph').length) {
                        var day_data = [{
                                "period": "2012-10-01",
                                "licensed": 3407,
                                "sorned": 660
                            }, {
                                "period": "2012-09-30",
                                "licensed": 3351,
                                "sorned": 629
                            }, {
                                "period": "2012-09-29",
                                "licensed": 3269,
                                "sorned": 618
                            }, {
                                "period": "2012-09-20",
                                "licensed": 3246,
                                "sorned": 661
                            }, {
                                "period": "2012-09-19",
                                "licensed": 3257,
                                "sorned": 667
                            }, {
                                "period": "2012-09-18",
                                "licensed": 3248,
                                "sorned": 627
                            }, {
                                "period": "2012-09-17",
                                "licensed": 3171,
                                "sorned": 660
                            }, {
                                "period": "2012-09-16",
                                "licensed": 3171,
                                "sorned": 676
                            }, {
                                "period": "2012-09-15",
                                "licensed": 3201,
                                "sorned": 656
                            }, {
                                "period": "2012-09-10",
                                "licensed": 3215,
                                "sorned": 622
                            }];
                        Morris.Line({
                            element: 'year-graph',
                            data: day_data,
                            xkey: 'period',
                            ykeys: ['licensed', 'sorned'],
                            labels: ['Licensed', 'SORN']
                        })
                    }

                    // decimal data
                    if ($('#decimal-graph').length) {
                        var decimal_data = [];
                        for (var x = 0; x <= 360; x += 10) {
                            decimal_data.push({
                                x: x,
                                y: Math.sin(Math.PI * x / 180).toFixed(4)
                            });
                        }
                        window.m = Morris.Line({
                            element: 'decimal-graph',
                            data: decimal_data,
                            xkey: 'x',
                            ykeys: ['y'],
                            labels: ['sin(x)'],
                            parseTime: false,
                            hoverCallback: function (index, options) {
                                var row = options.data[index];
                                return "sin(" + row.x + ") = " + row.y;
                            },
                            xLabelMargin: 10
                        });
                    }

                    // donut
                    if ($('#donut-graph').length) {
                        Morris.Donut({
                            element: 'donut-graph',
                            data: [{
                                    value: 70,
                                    label: 'foo'
                                }, {
                                    value: 15,
                                    label: 'bar'
                                }, {
                                    value: 10,
                                    label: 'baz'
                                }, {
                                    value: 5,
                                    label: 'A really really long label'
                                }],
                            formatter: function (x) {
                                return x + "%"
                            }
                        });
                    }

                    // time formatter
                    if ($('#time-graph').length) {
                        var week_data = [{
                                "period": "2011 W27",
                                "licensed": 3407,
                                "sorned": 660
                            }, {
                                "period": "2011 W26",
                                "licensed": 3351,
                                "sorned": 629
                            }, {
                                "period": "2011 W25",
                                "licensed": 3269,
                                "sorned": 618
                            }, {
                                "period": "2011 W24",
                                "licensed": 3246,
                                "sorned": 661
                            }, {
                                "period": "2011 W23",
                                "licensed": 3257,
                                "sorned": 667
                            }, {
                                "period": "2011 W22",
                                "licensed": 3248,
                                "sorned": 627
                            }, {
                                "period": "2011 W21",
                                "licensed": 3171,
                                "sorned": 660
                            }, {
                                "period": "2011 W20",
                                "licensed": 3171,
                                "sorned": 676
                            }, {
                                "period": "2011 W19",
                                "licensed": 3201,
                                "sorned": 656
                            }, {
                                "period": "2011 W18",
                                "licensed": 3215,
                                "sorned": 622
                            }, {
                                "period": "2011 W17",
                                "licensed": 3148,
                                "sorned": 632
                            }, {
                                "period": "2011 W16",
                                "licensed": 3155,
                                "sorned": 681
                            }, {
                                "period": "2011 W15",
                                "licensed": 3190,
                                "sorned": 667
                            }, {
                                "period": "2011 W14",
                                "licensed": 3226,
                                "sorned": 620
                            }, {
                                "period": "2011 W13",
                                "licensed": 3245,
                                "sorned": null
                            }, {
                                "period": "2011 W12",
                                "licensed": 3289,
                                "sorned": null
                            }, {
                                "period": "2011 W11",
                                "licensed": 3263,
                                "sorned": null
                            }, {
                                "period": "2011 W10",
                                "licensed": 3189,
                                "sorned": null
                            }, {
                                "period": "2011 W09",
                                "licensed": 3079,
                                "sorned": null
                            }, {
                                "period": "2011 W08",
                                "licensed": 3085,
                                "sorned": null
                            }, {
                                "period": "2011 W07",
                                "licensed": 3055,
                                "sorned": null
                            }, {
                                "period": "2011 W06",
                                "licensed": 3063,
                                "sorned": null
                            }, {
                                "period": "2011 W05",
                                "licensed": 2943,
                                "sorned": null
                            }, {
                                "period": "2011 W04",
                                "licensed": 2806,
                                "sorned": null
                            }, {
                                "period": "2011 W03",
                                "licensed": 2674,
                                "sorned": null
                            }, {
                                "period": "2011 W02",
                                "licensed": 1702,
                                "sorned": null
                            }, {
                                "period": "2011 W01",
                                "licensed": 1732,
                                "sorned": null
                            }];
                        Morris.Line({
                            element: 'time-graph',
                            data: week_data,
                            xkey: 'period',
                            ykeys: ['licensed', 'sorned'],
                            labels: ['Licensed', 'SORN'],
                            events: ['2011-04', '2011-08']
                        });
                    }

                    // negative value
                    if ($('#graph-B').length) {
                        var neg_data = [{
                                "period": "2011-08-12",
                                "a": 100
                            }, {
                                "period": "2011-03-03",
                                "a": 75
                            }, {
                                "period": "2010-08-08",
                                "a": 50
                            }, {
                                "period": "2010-05-10",
                                "a": 25
                            }, {
                                "period": "2010-03-14",
                                "a": 0
                            }, {
                                "period": "2010-01-10",
                                "a": -25
                            }, {
                                "period": "2009-12-10",
                                "a": -50
                            }, {
                                "period": "2009-10-07",
                                "a": -75
                            }, {
                                "period": "2009-09-25",
                                "a": -100
                            }];
                        Morris.Line({
                            element: 'graph-B',
                            data: neg_data,
                            xkey: 'period',
                            ykeys: ['a'],
                            labels: ['Series A'],
                            units: '%'
                        });
                    }

                    // no grid
                    /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                    if ($('#nogrid-graph').length) {
                        var day_data = [{
                                "period": "2012-10-01",
                                "licensed": 3407,
                                "sorned": 660
                            }, {
                                "period": "2012-09-30",
                                "licensed": 3351,
                                "sorned": 629
                            }, {
                                "period": "2012-09-29",
                                "licensed": 3269,
                                "sorned": 618
                            }, {
                                "period": "2012-09-20",
                                "licensed": 3246,
                                "sorned": 661
                            }, {
                                "period": "2012-09-19",
                                "licensed": 3257,
                                "sorned": 667
                            }, {
                                "period": "2012-09-18",
                                "licensed": 3248,
                                "sorned": 627
                            }, {
                                "period": "2012-09-17",
                                "licensed": 3171,
                                "sorned": 660
                            }, {
                                "period": "2012-09-16",
                                "licensed": 3171,
                                "sorned": 676
                            }, {
                                "period": "2012-09-15",
                                "licensed": 3201,
                                "sorned": 656
                            }, {
                                "period": "2012-09-10",
                                "licensed": 3215,
                                "sorned": 622
                            }];
                        Morris.Line({
                            element: 'nogrid-graph',
                            grid: false,
                            data: day_data,
                            xkey: 'period',
                            ykeys: ['licensed', 'sorned'],
                            labels: ['Licensed', 'SORN']
                        });
                    }

                    // non-continus data
                    /* data stolen from http://howmanyleft.co.uk/vehicle/jaguar_'e'_type */
                    if ($('#non-continu-graph').length) {
                        var day_data = [{
                                "period": "2012-10-01",
                                "licensed": 3407
                            }, {
                                "period": "2012-09-30",
                                "sorned": 0
                            }, {
                                "period": "2012-09-29",
                                "sorned": 618
                            }, {
                                "period": "2012-09-20",
                                "licensed": 3246,
                                "sorned": 661
                            }, {
                                "period": "2012-09-19",
                                "licensed": 3257,
                                "sorned": null
                            }, {
                                "period": "2012-09-18",
                                "licensed": 3248,
                                "other": 1000
                            }, {
                                "period": "2012-09-17",
                                "sorned": 0
                            }, {
                                "period": "2012-09-16",
                                "sorned": 0
                            }, {
                                "period": "2012-09-15",
                                "licensed": 3201,
                                "sorned": 656
                            }, {
                                "period": "2012-09-10",
                                "licensed": 3215
                            }];
                        Morris.Line({
                            element: 'non-continu-graph',
                            data: day_data,
                            xkey: 'period',
                            ykeys: ['licensed', 'sorned', 'other'],
                            labels: ['Licensed', 'SORN', 'Other'],
                            /* custom label formatting with `xLabelFormat` */
                            xLabelFormat: function (d) {
                                return (d.getMonth() + 1) + '/' + d.getDate() + '/' + d.getFullYear();
                            },
                            /* setting `xLabels` is recommended when using xLabelFormat */
                            xLabels: 'day'
                        });
                    }

                    // non date data
                    if ($('#non-date-graph').length) {
                        var day_data = [{
                                "elapsed": "I",
                                "value": 34
                            }, {
                                "elapsed": "II",
                                "value": 24
                            }, {
                                "elapsed": "III",
                                "value": 3
                            }, {
                                "elapsed": "IV",
                                "value": 12
                            }, {
                                "elapsed": "V",
                                "value": 13
                            }, {
                                "elapsed": "VI",
                                "value": 22
                            }, {
                                "elapsed": "VII",
                                "value": 5
                            }, {
                                "elapsed": "VIII",
                                "value": 26
                            }, {
                                "elapsed": "IX",
                                "value": 12
                            }, {
                                "elapsed": "X",
                                "value": 19
                            }];
                        Morris.Line({
                            element: 'non-date-graph',
                            data: day_data,
                            xkey: 'elapsed',
                            ykeys: ['value'],
                            labels: ['value'],
                            parseTime: false
                        });
                    }

                    //stacked bar
                    if ($('#stacked-bar-graph').length) {
                        Morris.Bar({
                            element: 'stacked-bar-graph',
                            axes: false,
                            grid: false,
                            data: [{
                                    x: '2011 Q1',
                                    y: 3,
                                    z: 2,
                                    a: 3
                                }, {
                                    x: '2011 Q2',
                                    y: 2,
                                    z: null,
                                    a: 1
                                }, {
                                    x: '2011 Q3',
                                    y: 0,
                                    z: 2,
                                    a: 4
                                }, {
                                    x: '2011 Q4',
                                    y: 2,
                                    z: 4,
                                    a: 3
                                }],
                            xkey: 'x',
                            ykeys: ['y', 'z', 'a'],
                            labels: ['Y', 'Z', 'A'],
                            stacked: true
                        });
                    }

                    // interval
                    if ($('#interval-graph').length) {

                        var nReloads = 0;
                        function data(offset) {
                            var ret = [];
                            for (var x = 0; x <= 360; x += 10) {
                                var v = (offset + x) % 360;
                                ret.push({
                                    x: x,
                                    y: Math.sin(Math.PI * v / 180).toFixed(4),
                                    z: Math.cos(Math.PI * v / 180).toFixed(4)
                                });
                            }
                            return ret;
                        }

                        var graph = Morris.Line({
                            element: 'interval-graph',
                            data: data(0),
                            xkey: 'x',
                            ykeys: ['y', 'z'],
                            labels: ['sin()', 'cos()'],
                            parseTime: false,
                            ymin: -1.0,
                            ymax: 1.0,
                            hideHover: true
                        });
                        function update() {
                            nReloads++;
                            graph.setData(data(5 * nReloads));
                            $('#reloadStatus').text(nReloads + ' reloads');
                        }

                        setInterval(update, 100);
                    }

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
