<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title>ceoadventista.org</title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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
        <body class="conta bod">
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <!-- HEADER -->
                    <div id="header" style="background: none;">
                        <div id="logo-group">
                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="SmartAdmin" > </span>
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
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <div class="row" style="display: flex;justify-content: center;">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4 abs-center" style="text-align: center;">
                                <!--<div class="row"></div>-->
                                <!--                                <div class="row">
                                                                    <img src="../images/LETRASESTUDIONIÑOS.png" alt="" style="width: 100%"/>
                                                                </div>-->
                                <h1 class="page-title txt-color-blueDark" style="font-weight: 600"><i class="fa fa-book"></i> Desarrollo de la Lección - Escuela sabática</h1>
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
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2> Desarrollo de la Lección</h2>
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
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Repaso de la Lección – Maestro</a></h4>
                                                        </div>
                                                        <div id="collapseOne-1" class="panel-collapse collapse in">
                                                            <div class="">
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i><i class="fa fa-fw fa-minus-circle txt-color-red"></i>Comentarios de la Lección</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <br>
                                                                                <img src="../images/estudios/es-escuelasabatica.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div id="collapseThree-1" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="S0" href="https://drive.google.com/file/d/1lRM4CrOKYwiJwhpKj2CmgN6eq7Kru0Oo/preview" >Comentarios de la Lección - S0</a></li>
                                                                                <li><a id="S1" href="https://drive.google.com/file/d/1TYYgk9_S8OWUhTkGjIX8lgVxQRGQHI2o/preview" >Comentarios de la Lección - S1</a></li>
                                                                                <li><a id="S2" href="https://drive.google.com/file/d/1VpuCK75LjXF9KiuZabSvWES7FQmiArSP/preview" >Comentarios de la Lección - S2</a></li>
                                                                                <li><a id="S3" href="https://drive.google.com/file/d/1R8CLH6tolSI7vb078CqvKOiabjQXy3P9/preview" >Comentarios de la Lección - S3</a></li>
                                                                                <li><a id="S4" href="https://drive.google.com/file/d/1MyW1wdcqfBLF1XmRkyj-FPB-zBmlXFKv/preview" >Comentarios de la Lección - S4</a></li>
                                                                                <li><a id="S5" href="https://drive.google.com/file/d/1TWzzKppYBAIRS8g8oqwVrgcwaJLnL_9l/preview" >Comentarios de la Lección - S5</a></li>
                                                                                <li><a id="S6" href="https://drive.google.com/file/d/1tZgdItRv3kN5aYDw4zuOAHK2riCtQhpc/preview" >Comentarios de la Lección - S6</a></li>
                                                                                <li><a id="S7" href="https://drive.google.com/file/d/1k-vrnf_Knz9Yy_c24shtIEhxDKDVyBdS/preview" >Comentarios de la Lección - S7</a></li>
                                                                                <li><a id="S8" href="https://drive.google.com/file/d/1W6LRzEp5WbQ4CdnzQHwePs0LmLDJ7bI_/preview" >Comentarios de la Lección - S8</a></li> 
                                                                                <li><a id="S9" href="https://drive.google.com/file/d/1b7pewpsbBIdotCZLwL088kCvWcv_weko/preview" >Comentarios de la Lección - S9</a></li>
                                                                                <li><a id="S10" href="https://drive.google.com/file/d/1OxWG4itBYvVaojEnnMOuSWFu3DtZ8jY2/preview" >Comentarios de la Lección - S10</a></li>
                                                                                <li><a id="S11" href="https://drive.google.com/file/d/1OxWG4itBYvVaojEnnMOuSWFu3DtZ8jY2/preview" >Comentarios de la Lección - S11</a></li>
                                                                                <li><a id="S12" href="https://drive.google.com/file/d/1yKgcf6i2_xoHHTqDFh0smsH51ZhDqxCJ/preview" >Comentarios de la Lección - S12</a></li> 
                                                                                <li><a id="S13" href="https://drive.google.com/file/d/1Y3CYXZb3881t9GMjA1TOPyWurW4ZRLk8/preview" >Comentarios de la Lección - S13</a></li> 
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
                                        <header>
                                            <span class="widget-icon"> <i class="fas fa-volume-up"></i> </span>
                                            <h2>Repaso de la lección en Audio</h2>
                                        </header>
                                        <!-- widget div-->
                                        <div>
                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding">
                                                <!--<iframe src="Biblia.php" width="100%" height="486px"></iframe>-->
                                            </div>
                                            <!-- end widget content -->
                                        </div>
                                    </div>
                                    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="true">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Biblia</h2>
                                        </header>
                                        <!-- widget div-->
                                        <div>
                                            <!-- widget edit box -->
                                            <div class="jarviswidget-editbox">
                                            </div>
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
                                            <div class="widget-body no-padding" style="background-image: url('../images/estudios/leccion2021.PNG');background-size: 100% 100%;height: 130vh" >                                               
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
                <!--            <div class="page-footer">
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
                            </div>-->
                <!-- END PAGE FOOTER -->
            </div>
            <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
            
            <script src="../js/DevocionesMatutinas/DevocionesMatutinas.js"></script>
            
            <script src="../js/EstudiosBiblicos/estudiosbiblicos.js" type="text/javascript"></script>
            <!-- Cerrar sesion-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>          
            <script src="js/app.config.js"></script>
            <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>
            <script src="js/bootstrap/bootstrap.min.js"></script>
            <script src="js/notification/SmartNotification.min.js"></script>
            <script src="js/app.min.js"></script>
            <!--FINAL DE CERRAR SESION-->
        </body>
    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>