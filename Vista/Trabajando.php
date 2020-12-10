<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!-- comment --><!DOCTYPE html>
    <html lang="en-us">
        <head>
            <meta charset="utf-8">
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title> SmartAdmin </title>
            <meta name="description" content="">
            <meta name="author" content="">

            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

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

            <!-- FAVICONS -->
            <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
            <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

            <!-- GOOGLE FONT -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

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

            <style>
                .error-text-2 {
                    text-align: center;
                    font-size: 700%;
                    font-weight: bold;
                    font-weight: 100;
                    color: #333;
                    line-height: 1;
                    letter-spacing: -.05em;
                    background-image: -webkit-linear-gradient(92deg,#333,#ed1c24);
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                }
                .particle {
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 1rem;
                    height: 1rem;
                    border-radius: 100%;
                    background-color: #ed1c24;
                    background-image: -webkit-linear-gradient(rgba(0,0,0,0),rgba(0,0,0,.3) 75%,rgba(0,0,0,0));
                    box-shadow: inset 0 0 1px 1px rgba(0,0,0,.25);
                }
                .particle--a {
                    -webkit-animation: particle-a 1.4s infinite linear;
                    -moz-animation: particle-a 1.4s infinite linear;
                    -o-animation: particle-a 1.4s infinite linear;
                    animation: particle-a 1.4s infinite linear;
                }
                .particle--b {
                    -webkit-animation: particle-b 1.3s infinite linear;
                    -moz-animation: particle-b 1.3s infinite linear;
                    -o-animation: particle-b 1.3s infinite linear;
                    animation: particle-b 1.3s infinite linear;
                    background-color: #00A300;
                }
                .particle--c {
                    -webkit-animation: particle-c 1.5s infinite linear;
                    -moz-animation: particle-c 1.5s infinite linear;
                    -o-animation: particle-c 1.5s infinite linear;
                    animation: particle-c 1.5s infinite linear;
                    background-color: #57889C;
                }@-webkit-keyframes particle-a {
                    0% {
                        -webkit-transform: translate3D(-3rem,-3rem,0);
                        z-index: 1;
                        -webkit-animation-timing-function: ease-in-out;
                    } 25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        -webkit-transform: translate3D(4rem, 3rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -webkit-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .75rem;
                        height: .75rem;
                        opacity: .5;
                    }

                    100% {
                        -webkit-transform: translate3D(-3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-moz-keyframes particle-a {
                    0% {
                        -moz-transform: translate3D(-3rem,-3rem,0);
                        z-index: 1;
                        -moz-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        -moz-transform: translate3D(4rem, 3rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -moz-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .75rem;
                        height: .75rem;
                        opacity: .5;
                    }

                    100% {
                        -moz-transform: translate3D(-3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-o-keyframes particle-a {
                    0% {
                        -o-transform: translate3D(-3rem,-3rem,0);
                        z-index: 1;
                        -o-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        -o-transform: translate3D(4rem, 3rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -o-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .75rem;
                        height: .75rem;
                        opacity: .5;
                    }

                    100% {
                        -o-transform: translate3D(-3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @keyframes particle-a {
                    0% {
                        transform: translate3D(-3rem,-3rem,0);
                        z-index: 1;
                        animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        transform: translate3D(4rem, 3rem, 0);
                        opacity: 1;
                        z-index: 1;
                        animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .75rem;
                        height: .75rem;
                        opacity: .5;
                    }

                    100% {
                        transform: translate3D(-3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-webkit-keyframes particle-b {
                    0% {
                        -webkit-transform: translate3D(3rem,-3rem,0);
                        z-index: 1;
                        -webkit-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        -webkit-transform: translate3D(-3rem, 3.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -webkit-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        -webkit-transform: translate3D(3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-moz-keyframes particle-b {
                    0% {
                        -moz-transform: translate3D(3rem,-3rem,0);
                        z-index: 1;
                        -moz-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        -moz-transform: translate3D(-3rem, 3.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -moz-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        -moz-transform: translate3D(3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-o-keyframes particle-b {
                    0% {
                        -o-transform: translate3D(3rem,-3rem,0);
                        z-index: 1;
                        -o-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        -o-transform: translate3D(-3rem, 3.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -o-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        -o-transform: translate3D(3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @keyframes particle-b {
                    0% {
                        transform: translate3D(3rem,-3rem,0);
                        z-index: 1;
                        animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.5rem;
                        height: 1.5rem;
                    }

                    50% {
                        transform: translate3D(-3rem, 3.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        transform: translate3D(3rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-webkit-keyframes particle-c {
                    0% {
                        -webkit-transform: translate3D(-1rem,-3rem,0);
                        z-index: 1;
                        -webkit-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.3rem;
                        height: 1.3rem;
                    }

                    50% {
                        -webkit-transform: translate3D(2rem, 2.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -webkit-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        -webkit-transform: translate3D(-1rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-moz-keyframes particle-c {
                    0% {
                        -moz-transform: translate3D(-1rem,-3rem,0);
                        z-index: 1;
                        -moz-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.3rem;
                        height: 1.3rem;
                    }

                    50% {
                        -moz-transform: translate3D(2rem, 2.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -moz-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        -moz-transform: translate3D(-1rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @-o-keyframes particle-c {
                    0% {
                        -o-transform: translate3D(-1rem,-3rem,0);
                        z-index: 1;
                        -o-animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.3rem;
                        height: 1.3rem;
                    }

                    50% {
                        -o-transform: translate3D(2rem, 2.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        -o-animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        -o-transform: translate3D(-1rem,-3rem,0);
                        z-index: -1;
                    }
                }

                @keyframes particle-c {
                    0% {
                        transform: translate3D(-1rem,-3rem,0);
                        z-index: 1;
                        animation-timing-function: ease-in-out;
                    }

                    25% {
                        width: 1.3rem;
                        height: 1.3rem;
                    }

                    50% {
                        transform: translate3D(2rem, 2.5rem, 0);
                        opacity: 1;
                        z-index: 1;
                        animation-timing-function: ease-in-out;
                    }

                    55% {
                        z-index: -1;
                    }

                    75% {
                        width: .5rem;
                        height: .5rem;
                        opacity: .5;
                    }

                    100% {
                        transform: translate3D(-1rem,-3rem,0);
                        z-index: -1;
                    }
                }
            </style>

            <!--[if IE 9]>
            <style>
            .error-text {
                    color: #333 !important;
            }
            .particle {
                    display:none;
            }
            </style>
            <![endif]-->

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
        --><link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
        <body class="">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <!-- HEADER -->
                    <div id="header" style="background: none;height: 80px;">
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
                                        <a id="Reporte2" href="#" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-bar-chart-o"></i>
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
                </div>
            </div>
            <!-- END HEADER -->

            <!-- Left panel : Navigation area -->
            <!-- Note: This width of the aside area can be adjusted through LESS variables -->

            <!-- END NAVIGATION -->

            <!-- MAIN PANEL -->
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
                        <li>Trajando <i class="fa  fa-wrench"></i></li>
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

                    <!-- row -->
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="text-center error-box">
                                        <h1 class="error-text-2 bounceInDown animated"> Pagina en Construcción <span class="particle particle--c"></span><span class="particle particle--a"></span><span class="particle particle--b"></span><i class="fa  fa-wrench"></i></h1>
                                        <h2 class="font-xl"><strong><i class="fa fa-fw fa-warning fa-lg text-warning"></i> Pagina <u>no</u> Encontrada</strong></h2>
                                        <br />
                                        <p class="lead">
                                            La pagina web esta en proceso de coonstrucción le agradecemos la paciencia. 
                                        </p>
                                        <br>

                                        <div class="row">

                                            <div class="col-sm-12">
                                                <ul class="list-inline">
                                                    <li>
                                                        &nbsp;<a href="Principal.php">Volver al Menú</a>&nbsp;
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- end row -->

                    </div>

                </div>
                <!-- END MAIN CONTENT -->

            </div>
            <!-- END MAIN PANEL -->

            <!-- PAGE FOOTER -->
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

            <!-- PAGE RELATED PLUGIN(S) 
            <script src="..."></script>-->

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
    <?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>
