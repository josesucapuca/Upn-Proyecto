<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/estudios/fondojoveadul.png');background-size: cover;background-position: top center;
          background-repeat: no-repeat;position: relative;float: left;width: 100%;">
        <head>

            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title>ceoadventista.org </title>
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
                .abs-center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 16vh;
                }
                .estudio-img {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 10vh;
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
        <body class="conta bod">
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <!-- HEADER -->
                    <div id="header" style="background: none;">
                        <div id="logo-group">

                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="SmartAdmin" > </span>
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

                    <!-- RIBBON -->
                    <!--                        <div id="ribbon">
                    
                                                <span class="ribbon-button-alignment"> 
                                                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                                                        <i class="fa fa-refresh"></i>
                                                    </span> 
                                                </span>
                    
                                                 breadcrumb 
                                                <ol class="breadcrumb">
                                                    <li>Jose Sucapuca</li><li>Cursos Bíblicos Adultos y Jóvenes</li>
                                                </ol>
                    
                                            </div>-->
                    <!-- END RIBBON -->

                    <!-- MAIN CONTENT -->
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">

                        <div class="row" style="display: flex;justify-content: center;">
                            <div class="col-xs-10 col-sm-7 col-md-7 col-lg-4 abs-center" style="text-align: center;">
                                <!--<div class="row"></div>-->
                                <div class="row">
                                    <img src="../images/estudios/letrajoveadul.png" alt="" style="width: 100%"/>
                                </div>

                        <!--<h1 class="page-title txt-color-blueDark" style="font-weight: 600"><i class="fa fa-book"></i> Cursos Bíblicos Adultos y Jóvenes</h1>-->
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
                                            <h2>Cursos Bíblicos Adultos y Jóvenes </h2>

                                        </header>

                                        <!-- widget div-->
                                        <div>

                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                                <!-- This area used as dropdown edit box -->

                                            </div>
                                            <!-- end widget edit box -->

                                            <!-- widget content -->
                                            <div class="widget-body no-padding" style="min-height: 0px">

                                                <div class="panel-group smart-accordion-default" id="verFav" >
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Cursos Bíblicos para Adultos </a></h4>
                                                        </div>
                                                        <div id="collapseOne-1" class="panel-collapse collapse in">
                                                            <div class="">
                                                                <div class="panel ">
                                                                    <div class="panel-heading">                                                                       
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Apocalipsis – Revelaciones de Esperanza </a></h4>                                  
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <br>
                                                                                <img src="../images/estudios/es-apocalipsis.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapseThree-1" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <!--<li href="https://www.bufa.es">Link 1</li>-->
                                                                                <li><a id="apo1" href="https://drive.google.com/file/d/1LYwuIIv5SRcU2ayRnqgWhqqHn2WgBav5/preview" >Apocalipsis - Lección:1</a></li>
                                                                                <li><a id="apo2" href="https://drive.google.com/file/d/18NIL4VpJPcaI_U8_u8sBCKhkhv2VnoaD/preview" >Apocalipsis - Lección:2</a></li>
                                                                                <li><a id="apo3" href="https://drive.google.com/file/d/1GWViiAeqVwZMoPwP5zlo6ifybPRQPYQu/preview" >Apocalipsis - Lección:3</a></li>
                                                                                <li><a id="apo4" href="https://drive.google.com/file/d/19cu4O1GJV3wfvMdV1LpaFvHZQVDFU0Kl/preview" >Apocalipsis - Lección:4</a></li>
                                                                                <li><a id="apo5" href="https://drive.google.com/file/d/17kvcWhdqbytL2I9JYJ1tyjwJUeqJYfyf/preview" >Apocalipsis - Lección:5</a></li>
                                                                                <li><a id="apo6" href="https://drive.google.com/file/d/1PWIQR-KdObLP-9Yyd49VEOpouKq_Gbui/preview" >Apocalipsis - Lección:6</a></li>
                                                                                <li><a id="apo7" href="https://drive.google.com/file/d/1KdFarxH1R7pkuBgTDfZ3FhdGS2E7C7V1/preview" >Apocalipsis - Lección:7</a></li>
                                                                                <li><a id="apo8" href="https://drive.google.com/file/d/10ieRXaXeqLgpWLs-Vp2iG-gOevE99DaK/preview" >Apocalipsis - Lección:8</a></li>
                                                                                <li><a id="apo9" href="https://drive.google.com/file/d/1pWO7DVAOb4K2yp-tjM7uz7Cdf9vL5_Af/preview" >Apocalipsis - Lección:9</a></li>
                                                                                <li><a id="apo10" href="https://drive.google.com/file/d/1knwF3CbUWKqpmEaFzTBFsnhRhIy5pJY0/preview" >Apocalipsis - Lección:10</a></li>
                                                                                <li><a id="apo11" href="https://drive.google.com/file/d/1u_15sjkCIOgtSBGQkxjWwB6gPDxZGG7_/preview" >Apocalipsis - Lección:11</a></li>
                                                                                <li><a id="apo12" href="https://drive.google.com/file/d/1wLTlFmmZD2w--vVn-TDVd1w3_6560lX5/preview" >Apocalipsis - Lección:12</a></li>
                                                                                <li><a id="apo13" href="https://drive.google.com/file/d/1jmqT7-PBLuWRJpqL6xXcka13YdKdXjc1/preview" >Apocalipsis - Lección:13</a></li>
                                                                                <li><a id="apo14" href="https://drive.google.com/file/d/140DSY8HD3fq-VUHIPXLmIE5UHLWhbN5I/preview" >Apocalipsis - Lección:14</a></li>
                                                                                <li><a id="apo15" href="https://drive.google.com/file/d/1e2mKOBbioby5tS4yyXlNLWtn2qghTrc3/preview" >Apocalipsis - Lección:15</a></li>
                                                                                <li><a id="apo16" href="https://drive.google.com/file/d/15xMRnPI-Vnv5I_ybV_EKIt7zUf5FqI78/preview" >Apocalipsis - Lección:16</a></li>
                                                                                <li><a id="apo17" href="https://drive.google.com/file/d/1eboAIPWyPb16Jt_iisZ4RQZDqECec3Gn/preview" >Apocalipsis - Lección:17</a></li>
                                                                                <li><a id="apo18" href="https://drive.google.com/file/d/1OJsjxYAlB_SK4JAh5YgzeUazIWHutHDf/preview" >Apocalipsis - Lección:18</a></li>
                                                                                <li><a id="apo19" href="https://drive.google.com/file/d/1yAFa3_i81IXPpwRBI4yhQdkFtLF06-yn/preview" >Apocalipsis - Lección:19</a></li>
                                                                                <li><a id="apo20" href="https://drive.google.com/file/d/11Ve9vqIFMvkq7yI7oVm6pdEmNtiFWKZd/preview" >Apocalipsis - Lección:20</a></li>
                                                                                <li><a id="apo21" href="https://drive.google.com/file/d/1WTW7bRzg3hX3PgfcX-NDfiupCZcqEMHM/preview" >Apocalipsis - Lección:21</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Daniel </a></h4>        
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-daniel.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree-2" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="dani1" href="https://drive.google.com/file/d/1Zr2bVLciQ4b9Ecc5iqSdJ6QpdSNTCZnD/preview" >Daniel - Lección:1</a></li>
                                                                                <li><a id="dani2" href="https://drive.google.com/file/d/1svbSIhXxqHOuELMt7vOGEsMPlhhCd241/preview" >Daniel - Lección:2</a></li>
                                                                                <li><a id="dani3" href="https://drive.google.com/file/d/1gAcEEn9zY5Y5GH7ahNn9Dq5XmbKCN4oG/preview" >Daniel - Lección:3</a></li>
                                                                                <li><a id="dani4" href="https://drive.google.com/file/d/1C7k6zgfdiRnuBjNI17vGXf2Ed-e60qRZ/preview" >Daniel - Lección:4</a></li>
                                                                                <li><a id="dani5" href="https://drive.google.com/file/d/1N7gjUV8X5lcS51fePxU_RgKaEqE0OcLt/preview" >Daniel - Lección:5</a></li>
                                                                                <li><a id="dani6" href="https://drive.google.com/file/d/1rheR4eyOmRT2x52DrOYeNBzec3OGtUdy/preview" >Daniel - Lección:6</a></li>
                                                                                <li><a id="dani7" href="https://drive.google.com/file/d/1kNLzbrXD-oMCsNWZ6TbxfzFen6FV7aIJ/preview" >Daniel - Lección:7</a></li>
                                                                                <li><a id="dani8" href="https://drive.google.com/file/d/1grV8o1nkTdGwjKnm14yxM-8wXsNQ-LMZ/preview" >Daniel - Lección:8</a></li>
                                                                                <li><a id="dani9" href="https://drive.google.com/file/d/1xXrBklS_BVPYYMBPzhbVAjcZxT8NcYGf/preview" >Daniel - Lección:9</a></li>
                                                                                <li><a id="dani10" href="https://drive.google.com/file/d/105QF2jiHsjXo2aB5QrY1xDcDtuxulSOm/preview" >Daniel - Lección:10</a></li>
                                                                                <li><a id="dani11" href="https://drive.google.com/file/d/1fuT6Zc_sE-Edm6xcXHIwAQTXoC84mGUq/preview" >Daniel - Lección:11</a></li>
                                                                                <li><a id="dani12" href="https://drive.google.com/file/d/1n3Gvmn6KA6mxJZApH7HcmZmpQAJzaS7O/preview" >Daniel - Lección:12</a></li>
                                                                                <li><a id="dani13" href="https://drive.google.com/file/d/1wSOJZd01gPZyeqVZe8vB_vv2fGGiNmpG/preview" >Daniel - Lección:13</a></li>
                                                                                <li><a id="dani14" href="https://drive.google.com/file/d/103YwZR0JJXTG1IYIDm8SLBbjTaPFK9zp/preview" >Daniel - Lección:14</a></li>
                                                                                <li><a id="dani15" href="https://drive.google.com/file/d/1st5ud9ozAIEQ8Cwd9xHgtXHQZxUBT70H/preview" >Daniel - Lección:15</a></li>
                                                                                <li><a id="dani16" href="https://drive.google.com/file/d/14Hm_XJslXCfuopYzE7Yu1yexDDRgAbCJ/preview" >Daniel - Lección:16</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-3" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> El gran conflicto  </a></h4>        
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-conflicto.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div id="collapseThree-3" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="gc1" href="https://drive.google.com/file/d/1WgkJWWENlzvE7Z4VvuTF6R-Fh925B09k/preview" >GC - Lección:1</a></li>
                                                                                <li><a id="gc2" href="https://drive.google.com/file/d/1MWUP86Nli1HjjkzKkHgIgtB77IaSZ04b/preview" >GC - Lección:2</a></li>
                                                                                <li><a id="gc3" href="https://drive.google.com/file/d/1FjqTWjIu8BlTkTNSVo8hhtOKi0FGd3Cb/preview" >GC - Lección:3</a></li>
                                                                                <li><a id="gc4" href="https://drive.google.com/file/d/1-Dr44mCGLArui-ZVVS1_99bMHw2-A7Kz/preview" >GC - Lección:4</a></li>
                                                                                <li><a id="gc5" href="https://drive.google.com/file/d/1ULlS4QB2JpvNCLoGTJbfgfmFMiB3iAUb/preview" >GC - Lección:5</a></li>
                                                                                <li><a id="gc6" href="https://drive.google.com/file/d/1ay8fvcWxiL3EMccKvJcOvGdrZ7ZdqCqr/preview" >GC - Lección:6</a></li>
                                                                                <li><a id="gc7" href="https://drive.google.com/file/d/18twLBIIvaqsXh7EIz60CsgnnCw1gAnyb/preview" >GC - Lección:7</a></li>
                                                                                <li><a id="gc8" href="https://drive.google.com/file/d/1m65DXKL9PnnV3Nm2qIIRcoOU2VxJe8AC/preview" >GC - Lección:8</a></li>
                                                                                <li><a id="gc9" href="https://drive.google.com/file/d/1cdVLSsJLYPn1g2B2jPRB_9EBoAphjfkw/preview" >GC - Lección:9</a></li>
                                                                                <li><a id="gc10" href="https://drive.google.com/file/d/18HSY5IHD4FM0WFJ01b14J1ECQTtSA0A7/preview" >GC - Lección:10</a></li>
                                                                                <li><a id="gc11" href="https://drive.google.com/file/d/1ZiiNQKZ_LS6FjOvxM_HHK7OArTrZhHrh/preview" >GC - Lección:11</a></li>
                                                                                <li><a id="gc12" href="https://drive.google.com/file/d/1m1p2NM0vVxtdYNRDJGxL1fU3pbk7iVN5/preview" >GC - Lección:12</a></li>
                                                                                <li><a id="gc13" href="https://drive.google.com/file/d/1KQJVqgYFGO73b55WZjOuD46x-W27xYeF/preview" >GC - Lección:13</a></li>
                                                                                <li><a id="gc14" href="https://drive.google.com/file/d/1NWoXDI1aqCvTX_fMA8AZYlKvNb-61f3K/preview" >GC - Lección:14</a></li>
                                                                                <li><a id="gc15" href="https://drive.google.com/file/d/13xUYdRZxK291DFH7HCDBpaXNmOPSjnmp/preview" >GC - Lección:15</a></li>
                                                                                <li><a id="gc16" href="https://drive.google.com/file/d/1PR_cZVkQJ9onlDf1pLy-a3Yq1Sbk1xXZ/preview" >GC - Lección:16</a></li>
                                                                                <li><a id="gc17" href="https://drive.google.com/file/d/1NFikW8Bxdws4rITNJ3EyGKxysmxS-HrS/preview" >GC - Lección:17</a></li>
                                                                                <li><a id="gc18" href="https://drive.google.com/file/d/1HTzRrbrOPIbKf47neuwAPpg7bfh4Mq5d/preview" >GC - Lección:18</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-4" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Es tiempo de ver a Jesús </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-tiempoverajesus.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree-4" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="tj1" href="https://drive.google.com/file/d/1Rz6XtF9aW1mwYFC2xczhevtoBOhKDVyC/preview" >TJ - Lección:1</a></li>
                                                                                <li><a id="tj2" href="https://drive.google.com/file/d/15tUk1o6eF4BmoCD6QH6S-T-M2Jcc8rU8/preview" >TJ - Lección:2</a></li>
                                                                                <li><a id="tj3" href="https://drive.google.com/file/d/18zukx8OW8mMJytPaFA1ZnHHe9HtcACdc/preview" >TJ - Lección:3</a></li>
                                                                                <li><a id="tj4" href="https://drive.google.com/file/d/1AMYJubgz-8U2ebQDLm2dqf9hY1Hk9sLs/preview" >TJ - Lección:4</a></li>
                                                                                <li><a id="tj5" href="https://drive.google.com/file/d/1p9-kM8Ei-ik02PsW750sA8WvFKvroC2d/preview" >TJ - Lección:5</a></li>
                                                                                <li><a id="tj6" href="https://drive.google.com/file/d/1gGXjpK8FopX4EfoA5LlYmPQ1SdHwdtZS/preview" >TJ - Lección:6</a></li>
                                                                                <li><a id="tj7" href="https://drive.google.com/file/d/1ua2OcurvTjUymiVVXHXs2nBOIBwIYMb0/preview" >TJ - Lección:7</a></li>
                                                                                <li><a id="tj8" href="https://drive.google.com/file/d/1tIAEI6Yqze8Ce5zTMEm6m8XnvSGfHbOy/preview" >TJ - Lección:8</a></li>
                                                                                <li><a id="tj9" href="https://drive.google.com/file/d/1rXIqkIypjylTHFA-47uexgnMaBX7Kbyx/preview" >TJ - Lección:9</a></li>
                                                                                <li><a id="tj10" href="https://drive.google.com/file/d/1h6Gx5gWXrCeSgUXQgVx35u7x6LVtw5C5/preview" >TJ - Lección:10</a></li>
                                                                                <li><a id="tj11" href="https://drive.google.com/file/d/1JQW77uYWfjBy0T4AqkC2sL4LBSF8GbdP/preview" >TJ - Lección:11</a></li>
                                                                                <li><a id="tj12" href="https://drive.google.com/file/d/1j5dW-oG08EJoC6jBUzpW0U1HSY-1QX7s/preview" >TJ - Lección:12</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-5" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Esperanza para las familias </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-esperanzafamilia.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree-5" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="ef1" href="https://drive.google.com/file/d/1bmlGzERr5NNNRfcNTHIyKnnTl-j1YYLS/preview" >EF - Lección:1</a></li>
                                                                                <li><a id="ef2" href="https://drive.google.com/file/d/1MD3z1-tEGvIlTNKVxcMJ0rHbMLvBHvzp/preview" >EF - Lección:2</a></li>
                                                                                <li><a id="ef3" href="https://drive.google.com/file/d/18IdHA4s20xv4GAH6dHfhjRFB_cHPWp0H/preview" >EF - Lección:3</a></li>
                                                                                <li><a id="ef4" href="https://drive.google.com/file/d/1PCoZNlGXfR_yhEp0F65MTga1nhY6-U0K/preview" >EF - Lección:4</a></li>
                                                                                <li><a id="ef5" href="https://drive.google.com/file/d/1_UOZXq4EeIQ1PjfZkKjRNcbu2jEpWJgr/preview" >EF - Lección:5</a></li>
                                                                                <li><a id="ef6" href="https://drive.google.com/file/d/1U_Ap1iash38JZSBBk8pStXKAPGFnAFyQ/preview" >EF - Lección:6</a></li>
                                                                                <li><a id="ef7" href="https://drive.google.com/file/d/1k8lefPm3oHVlJtIKaJYzh9FnTryj-2ex/preview" >EF - Lección:7</a></li>
                                                                                <li><a id="ef8" href="https://drive.google.com/file/d/1uGp6QMxs6IJL46JY4o3HOlmc9otmTm42/preview" >EF - Lección:8</a></li>
                                                                                <li><a id="ef9" href="https://drive.google.com/file/d/1BvwhdbrERAsY8zLGYWq8oINDpMCf_wn1/preview" >EF - Lección:9</a></li>
                                                                                <li><a id="ef10" href="https://drive.google.com/file/d/1aa4bI39n8SwnltHVh6XmExVaB0mRNBkE/preview" >EF - Lección:10</a></li>
                                                                                <li><a id="ef11" href="https://drive.google.com/file/d/1et8S-8y255xq_BA9fUlAHrUSAN1jgJXq/preview" >EF - Lección:11</a></li>
                                                                                <li><a id="ef12" href="https://drive.google.com/file/d/1N74Nbd9GVcXE8W3_2r8B6iEQ6it8CbFZ/preview" >EF - Lección:12</a></li>
                                                                                <li><a id="ef13" href="https://drive.google.com/file/d/1fz2eGWjHoyPjG0HoDCMQlUYk7rNO0UbE/preview" >EF - Lección:13</a></li>
                                                                                <li><a id="ef14" href="https://drive.google.com/file/d/1FPp9TxvwbasIkPgOnGTET64a91aDVd2m/preview" >EF - Lección:14</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-6" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Fe de Jesús </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-fedejesus.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div id="collapseThree-6" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="fj1" href="https://drive.google.com/file/d/1xMOF5I9mvGaqAo0tsS4uiaJQ35P4K_RI/preview" >FJ - Lección:1</a></li>
                                                                                <li><a id="fj2" href="https://drive.google.com/file/d/1xoiVlGQKkTTVEYWhAXDAdW21ct5KHIce/preview" >FJ - Lección:2</a></li>
                                                                                <li><a id="fj3" href="https://drive.google.com/file/d/1I8QJILvXMWC0Jjzg-Ay5dvD89DgFgJ4C/preview" >FJ - Lección:3</a></li>
                                                                                <li><a id="fj4" href="https://drive.google.com/file/d/1e-JygzfDVPL4e56tKSVqaj971jv3oQDB/preview" >FJ - Lección:4</a></li>
                                                                                <li><a id="fj5" href="https://drive.google.com/file/d/1T0bq4gmwJkT7V_TXqtGfZeYaJPod7hk3/preview" >FJ - Lección:5</a></li>
                                                                                <li><a id="fj6" href="https://drive.google.com/file/d/1PubZRO-Nv7gvwiyVvIpkDyVEbRedgYdV/preview" >FJ - Lección:6</a></li>
                                                                                <li><a id="fj7" href="https://drive.google.com/file/d/13QbSrbVpNUAHMRc5RzyTave0OvUk9mYt/preview" >FJ - Lección:7</a></li>
                                                                                <li><a id="fj8" href="https://drive.google.com/file/d/1KcJmxGE8KXkLb-FppEz_lysE88XqlgYr/preview" >FJ - Lección:8</a></li>
                                                                                <li><a id="fj9" href="https://drive.google.com/file/d/1RLtOQfCmIVgtiwR8RJkVAlwp3I1JU9Tt/preview" >FJ - Lección:9</a></li>
                                                                                <li><a id="fj10" href="https://drive.google.com/file/d/1TxAd-GvHNhVQFsvTrWR26KXvLf2USyaN/preview" >FJ - Lección:10</a></li>
                                                                                <li><a id="fj11" href="https://drive.google.com/file/d/1xrUkRquTYPbkhBOCr2VzVv3sdaVPHLGU/preview" >FJ - Lección:11</a></li>
                                                                                <li><a id="fj12" href="https://drive.google.com/file/d/1XfEFT2GhbMsVTFr6T3M1Ow6tC8W7BU8K/preview" >FJ - Lección:12</a></li>
                                                                                <li><a id="fj13" href="https://drive.google.com/file/d/1d2ovsij-S6zp_1-SDAts3rXRNQwko_td/preview" >FJ - Lección:13</a></li>
                                                                                <li><a id="fj14" href="https://drive.google.com/file/d/1hyrE1Qq3559Zu-kJ8soJaopVHAZsCYVu/preview" >FJ - Lección:14</a></li>
                                                                                <li><a id="fj15" href="https://drive.google.com/file/d/1zkrx3Zr72cj9JFgUrAUN0DY7DDbqunFn/preview" >FJ - Lección:15</a></li>
                                                                                <li><a id="fj16" href="https://drive.google.com/file/d/1mUM3qP4FRHQ2uodKjFiB4-UMWhwFqgwK/preview" >FJ - Lección:16</a></li>
                                                                                <li><a id="fj17" href="https://drive.google.com/file/d/1bGdVwJgbmJSAJPc94tE_qsTHv2bYGl3X/preview" >FJ - Lección:17</a></li>
                                                                                <li><a id="fj18" href="https://drive.google.com/file/d/1fSRBfyWbKqY1YeqK8oU7LLYfeZGK8o3Z/preview" >FJ - Lección:18</a></li>
                                                                                <li><a id="fj19" href="https://drive.google.com/file/d/1hnRU2k5AY0J5A8G6wwHbj4QYBi8jlG53/preview" >FJ - Lección:19</a></li>
                                                                                <li><a id="fj20" href="https://drive.google.com/file/d/1PAhLJr7IUIgM7Q2_jkeAbpu5x6wYQXrD/preview" >FJ - Lección:20</a></li>
                                                                                <li><a id="fj21" href="https://drive.google.com/file/d/1opys4sv2kNGdvaUYz-lt4YLDyQirCgCm/preview" >Respuestas de la "Fe de Jesús"</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-7" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> La gran esperanza</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-lagranesperanza.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree-7" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="ge1" href="https://drive.google.com/file/d/1szqoSnLfhRCzujIdAZHZ-tvuUIa24S0V/preview" >GE - Lección:1</a></li>
                                                                                <li><a id="ge2" href="https://drive.google.com/file/d/1JRWhM5v7Lku-mrDa0RFNN1YPs3A15tQJ/preview" >GE - Lección:2</a></li>
                                                                                <li><a id="ge3" href="https://drive.google.com/file/d/12i13D5fyrCNwO75n9YuVntWbZ-tS4ZC1/preview" >GE - Lección:3</a></li>
                                                                                <li><a id="ge4" href="https://drive.google.com/file/d/1VP0BbBdOlHLHn32Ioa62W9NvmVsdXEeQ/preview" >GE - Lección:4</a></li>
                                                                                <li><a id="ge5" href="https://drive.google.com/file/d/1Bnrf0Jrmr3iDQ4MPRHCf12wqkyZLcFJq/preview" >GE - Lección:5</a></li>
                                                                                <li><a id="ge6" href="https://drive.google.com/file/d/1PeOFTrod8mp0GVBWHwyiuro1ZrMh1FFs/preview" >GE - Lección:6</a></li>
                                                                                <li><a id="ge7" href="https://drive.google.com/file/d/1kJAFQ0Z0_QMGr-IkOKEUUqJYvb8WaDnd/preview" >GE - Lección:7</a></li>
                                                                                <li><a id="ge8" href="https://drive.google.com/file/d/1tDCrDu13476waESsDqNkJgL_HH2sSuKw/preview" >GE - Lección:8</a></li>
                                                                                <li><a id="ge9" href="https://drive.google.com/file/d/1sN2xTNHbHQh2gwNxr9KYQYdQGE-7LF4u/preview" >GE - Lección:9</a></li>
                                                                                <li><a id="ge10" href="https://drive.google.com/file/d/1BJ9MJHopgiV2cd4NFFn-pW3a-IMjQ_Go/preview" >GE - Lección:10</a></li>
                                                                                <li><a id="ge11" href="https://drive.google.com/file/d/1rSdXp9KlJ-ygHD2zJCdG6eHqP4ED635_/preview" >GE - Lección:11</a></li>
                                                                                <li><a id="ge12" href="https://drive.google.com/file/d/1DjYixhT-wcI8gbEP3IRZpZW_JxgyxtN5/preview" >GE - Lección:12</a></li>
                                                                                <li><a id="ge13" href="https://drive.google.com/file/d/1KWeJmQFQuinQPB2cruB9T09H0lApU2qt/preview" >GE - Lección:13</a></li>
                                                                                <li><a id="ge14" href="https://drive.google.com/file/d/1HBE94yUXetUBdhhksNQCp2X6TD9jfmq3/preview" >GE - Lección:14</a></li>
                                                                                <li><a id="ge15" href="https://drive.google.com/file/d/1Kvalh4HTu8-o7LnSOkcNsOapD1bRI7Zo/preview" >GE - Lección:15</a></li>
                                                                                <li><a id="ge16" href="https://drive.google.com/file/d/1dQssqTC2RerxHXw0mur9J0i3b0ZfU9u7/preview" >GE - Lección:16</a></li>
                                                                                <li><a id="ge17" href="https://drive.google.com/file/d/1Zv6J7_y_c_dWNXKsBORygxZ_DyCaFsQF/preview" >GE - Lección:17</a></li>
                                                                                <li><a id="ge18" href="https://drive.google.com/file/d/1XvsHBZDYv3pIOL_vqBHyxY5B-XLWi1Wc/preview" >GE - Lección:18</a></li>
                                                                                <li><a id="ge19" href="https://drive.google.com/file/d/1zH4ZoTRjl6PtcEW9qn5yx06HfKkQBbOU/preview" >Respuestas de "La gran esperanza" </a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-8" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>La Fe de Jesús </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-lafedejesus.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree-8" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="lfj1" href="https://drive.google.com/file/d/1bov_3i0S8DsUutoMLPUAzy6cOyu60wiF/preview" >LFJ - Lección:1</a></li>
                                                                                <li><a id="lfj2" href="https://drive.google.com/file/d/1r_qhiOr4BgDMlH5u_rA54t5F6oJSnQM_/preview" >LFJ - Lección:2</a></li>
                                                                                <li><a id="lfj3" href="https://drive.google.com/file/d/11nh4xD1HS8qn98TDf6aiNLQLShuJHoRU/preview" >LFJ - Lección:3</a></li>
                                                                                <li><a id="lfj4" href="https://drive.google.com/file/d/1xAGVuFmoFOnUGiSEHbCDt7AxQlx_2Pxl/preview" >LFJ - Lección:4</a></li>
                                                                                <li><a id="lfj5" href="https://drive.google.com/file/d/1J1CXvv71of5ZHPmqdhKTuZHmkGo7j4aE/preview" >LFJ - Lección:5</a></li>
                                                                                <li><a id="lfj6" href="https://drive.google.com/file/d/196xvp8T1-iTmXWkjq8zjpYGpQ2olq4j7/preview" >LFJ - Lección:6</a></li>
                                                                                <li><a id="lfj7" href="https://drive.google.com/file/d/1RjYNrO6KBaD59mEwihy-4yaqSGocZoD-/preview" >LFJ - Lección:7</a></li>
                                                                                <li><a id="lfj8" href="https://drive.google.com/file/d/1ngCYAsDsCYEenmvecDa11tPwtksPDo_t/preview" >LFJ - Lección:8</a></li>
                                                                                <li><a id="lfj9" href="https://drive.google.com/file/d/12wDv0WWYn3lHeUO5PdBTHzXj5oGiBKEK/preview" >LFJ - Lección:9</a></li>
                                                                                <li><a id="lfj10" href="https://drive.google.com/file/d/1-fQS7plIU9Nf3i8TfzKnixkBGoXNt7bJ/preview" >LFJ - Lección:10</a></li>
                                                                                <li><a id="lfj11" href="https://drive.google.com/file/d/1Q9yJf0MqRvfKNWWEXMaxqYXdIG1bokC-/preview" >LFJ - Lección:11</a></li>
                                                                                <li><a id="lfj12" href="https://drive.google.com/file/d/1scKonR5FUNh-XnQ6DvouPZsXTRtLcW55/preview" >LFJ - Lección:12</a></li>
                                                                                <li><a id="lfj13" href="https://drive.google.com/file/d/1QhVHbCOK39EXrZVC0OH_-6YkG2gGZMeu/preview" >LFJ - Lección:13</a></li>
                                                                                <li><a id="lfj14" href="https://drive.google.com/file/d/1j9ohLFm0nF5XsPewm6YOchkzIj5-gBpn/preview" >LFJ - Lección:14</a></li>
                                                                                <li><a id="lfj15" href="https://drive.google.com/file/d/11oBD_LFYd44up9FFFpyj66hMvG_jNK8L/preview" >LFJ - Lección:15</a></li>
                                                                                <li><a id="lfj16" href="https://drive.google.com/file/d/1ZWtgXRkoGlYx2SxmCEWAKuRwODpsSYCI/preview" >LFJ - Lección:16</a></li>
                                                                                <li><a id="lfj17" href="https://drive.google.com/file/d/1a5IloAQv4xAHpQOi33_OYhpvMYH1SPY7/preview" >LFJ - Lección:17</a></li>
                                                                                <li><a id="lfj18" href="https://drive.google.com/file/d/172yWFqU6RQa3XsbExwgbmUMnSpNRlHH_/preview" >LFJ - Lección:18</a></li>
                                                                                <li><a id="lfj19" href="https://drive.google.com/file/d/10RuPL8NQVxvy1SeJclabiY7UD4prwZ3z/preview" >LFJ - Lección:19</a></li>
                                                                                <li><a id="lfj20" href="https://drive.google.com/file/d/1SW9LeIgaqjOZy696wzBo3Jk_xeYlCAtg/preview" >LFJ - Lección:20</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-9" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Nunca es tarde</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-nuncaestarde.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapseThree-9" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="nt1" href="https://drive.google.com/file/d/12b5nu6XDpCb4eTBjCFkyjeLQARfXyJjb/preview" >NT - Lección:1</a></li>
                                                                                <li><a id="nt2" href="https://drive.google.com/file/d/13CbIf9tsWucFWKgZqPFFCQLQQK6GEYpT/preview" >NT - Lección:2</a></li>
                                                                                <li><a id="nt3" href="https://drive.google.com/file/d/1jlXUxIoI2TKuPzl4wiM2tn1_DJ87wt6U/preview" >NT - Lección:3</a></li>
                                                                                <li><a id="nt4" href="https://drive.google.com/file/d/1H1kC7oEdOLSXt0yEgoovo2d70PesA2Dz/preview" >NT - Lección:4</a></li>
                                                                                <li><a id="nt5" href="https://drive.google.com/file/d/1dwiNITUHTT-ivyPcxV4nfTxHBBGLVPVf/preview" >NT - Lección:5</a></li>
                                                                                <li><a id="nt6" href="https://drive.google.com/file/d/1HSH7IdkFfsd4zNKtmBinVIwgbPeM841y/preview" >NT - Lección:6</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseFor-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Cursos Bíblicos para Jovenes </a></h4>
                                                        </div>
                                                        <div id="collapseFor-1" class="panel-collapse collapse">
                                                            <div class="">
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Juventud con propósito </a></h4>                     
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <br>
                                                                                <img src="../images/estudios/es-juventudproposito.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                      
                                                                    </div>
                                                                    <div id="collapseThree1" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="jp1" href="https://drive.google.com/file/d/1bVz6mtKixnlypf2y1Sfq26FVDQbAv3Xi/preview" >JP - Lección:1</a></li>
                                                                                <li><a id="jp2" href="https://drive.google.com/file/d/1CzcgqSZms2X5dPicObl9umVfigOnb6tQ/preview" >JP - Lección:2</a></li>
                                                                                <li><a id="jp3" href="https://drive.google.com/file/d/1T9YmZeR1ZqxR-Etrm20pZj5L-foRqi1q/preview" >JP - Lección:3</a></li>
                                                                                <li><a id="jp4" href="https://drive.google.com/file/d/162XPFu1SzLPdIKfTn5iI6ZeNHDIyWCEr/preview" >JP - Lección:4</a></li>
                                                                                <li><a id="jp5" href="https://drive.google.com/file/d/1Y6a1FHA-_U22g9nVaLFuWNw3GEC_xD8G/preview" >JP - Lección:5</a></li>
                                                                                <li><a id="jp6" href="https://drive.google.com/file/d/1DD_D-mytJ2frG6R5c0F8001Vif2VUo97/preview" >JP - Lección:6</a></li>
                                                                                <li><a id="jp7" href="https://drive.google.com/file/d/1K4TTCBUX2JxcH6412Yi43TQP8fjLC7AP/preview" >JP - Lección:7</a></li>
                                                                                <li><a id="jp8" href="https://drive.google.com/file/d/1qdHAt8xwj9G9lsbXIYPeAwCvodmD223k/preview" >JP - Lección:8</a></li>
                                                                                <li><a id="jp9" href="https://drive.google.com/file/d/11sKC3-k4bYjdgLGntdElyGP0peA3pQaD/preview" >JP - Lección:9</a></li>
                                                                                <li><a id="jp10" href="https://drive.google.com/file/d/1lNlaKr1vX9hGSkBBX24K5c8BuLMoZWaa/preview" >JP - Lección:10</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree2" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> La fe de Jesús  </a></h4>        
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <br>
                                                                                <img src="../images/estudios/es-lfedejesus.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree2" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="fj1" href="https://drive.google.com/file/d/1sx3tqUdEjrcwkmA5gvzjpAZ2BJQLOawt/preview" >FJ - Lección:1</a></li>
                                                                                <li><a id="fj2" href="https://drive.google.com/file/d/19ntMGPD99VFIM3tzvIUzCKaOv3qmw2gp/preview" >FJ - Lección:2</a></li>
                                                                                <li><a id="fj3" href="https://drive.google.com/file/d/1nR8tVNbZh1GJlyXgYhFkQyrKJAjoWUqr/preview" >FJ - Lección:3</a></li>
                                                                                <li><a id="fj4" href="https://drive.google.com/file/d/1nxY3nPkMOB8K1VR3PPk_9oHwXcYx5Hvk/preview" >FJ - Lección:4</a></li>
                                                                                <li><a id="fj5" href="https://drive.google.com/file/d/12dwoPfB0oy2qAesnWJe2cGN8emtgY20I/preview" >FJ - Lección:5</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                                <iframe src="Biblia.php" width="100%" height="486px"></iframe>
                                            </div>
                                            <!-- end widget content -->

                                        </div>
                                    </div>
                                    <!-- end widget -->

                                </article>
                                <!-- WIDGET END -->
                                <article class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="margin-bottom: 30px">
                                    <div class="jarviswidget" id="wid-id-2" data-widget-editbutton="true">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Material</h2>
                                        </header>
                                        <div>
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding" style="background-image: url('../images/la_fe_de_jesus.PNG');background-size: 100% 100%;height: 130vh" >
                                                <!--<iframe id="myframe" name="myframe" src="https://drive.google.com/file/d/15s6EFXtu8lSPtblLQ5YwkG16bggd2XgZ/view?usp=sharing" width="100%" style="height: 100vh"></iframe>-->
                                                <!--<iframe id="myframe" name="myframe" src="" frameborder="0" width="100%" style="height: 100vh"></iframe>-->
                                                <iframe id="estu" src="" width="100%" height="100%" frameborder="0" scrolling="yes" ></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </section>
                    </div>
                    <!-- END MAIN PANEL -->
                </div>
                <!-- PAGE FOOTER -->
                            <div class="">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <img src="../images/estudios/personasjoveadul.png" alt="" style="width: 100%"/>
                                        <!--<span class="txt-color-white">SmartAdmin 1.5 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span>-->
                                    </div>
                
<!--                                    <div class="col-xs-6 col-sm-6 text-right hidden-xs">
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
                                    </div>-->
                                </div>
                            </div>
                <!-- END PAGE FOOTER -->
            </div>

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
            <script src="../js/EstudiosBiblicos/estudiosbiblicos.js" type="text/javascript"></script>

        </body>

    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>