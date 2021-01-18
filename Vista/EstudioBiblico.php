<?php
include_once '../DAO/CampanaEvangelisticaDAO.php';
include_once '../DAO/EstudioBilbicoDAO.php';
$objs = new CampanaEvangelisticaDAO();
$objs2 = new EstudioBilbicoDAO();
session_start();
$var = $objs->ListaEstudioById($_SESSION["id_Persona"], $_GET["id"]);
$var2 = $objs->ListaHerramientaCampana($_GET["id"]);
$Est1 = $objs2->ListarParticipantesEstudioBiblico($_GET["id"]);
$Est2 = $objs2->ListarParticipantesEstudioBiblico($_GET["id"]);

if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
        <head>
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
                @media(max-width:1598px){
                    .sortable-grid{
                        height: auto;
                    }
                    #frameVer{
                        height: 99% !important;
                    }
                }
                @media(width:428px)and (height:633px){
                    .titCamp{
                        font-size: 30px !important;
                    }
                }
                @media(min-width:360px)and (max-width:414px){
                    .titCamp{
                        font-size: 30px !important;
                    }
                }
            </style>
        </head>
        <body class="bodhi" style="display: flex;height: 100%;margin: 0;flex-direction: column;background: #00000052;">
            <div class="modal fade" id="ModalIngresarAvance" tabindex="-1" role="dialog" aria-labelledby="ModalIngresarAvanceLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form id="formCampana" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section style="text-align: center">
                                                    <h1>Ingresar Avance De Estudio Biblico</h1>                                                
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring">
                                                        <select id="Leccion" name="Leccion" class="form-control">
                                                            <option value="0">Seleccionar Leccion Desarrollado</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" >
                                                <section>
                                                    <label class="select foring LP">
                                                        <select id="EstadoDesarrollo" name="EstadoDesarrollo" disabled="disabled" class="form-control">
                                                            <option value="">Seleccionar Estado Desarrollo</option>
                                                            <option value="0">Sin Desarrollar</option>
                                                            <option value="1">Conpletado</option>
                                                            <option value="2">En Desarrollo</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" >
                                                <section>
                                                    <div style="text-align: center">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" style="padding: 6px 12px;">
                                                            Cancel
                                                        </button>
                                                        <button type="button" class="btn btn-primary" id="AgregarCampaña" style="padding: 6px 12px;">
                                                            Egregar Campaña
                                                        </button>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="id_peC" id="id_peC" value="<?php echo $_SESSION["id_Persona"] ?>">
                            </form>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                    <div>
                                        <div>
                                            
                                            <div class="widget-body no-padding ver" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>

                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

        <?php
        if (mysqli_num_rows($var) > 0) {
            while ($data = $var->fetch_object()) {
                ?>
                <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
                <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                        <div id="header" style="background: none;">
                            <div id="logo-group">
                                <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" > </span>
                            </div>
                            <div class="pull-right">
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
                                            <a id="Reporte2" href="Trabajando.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                <i class="fa fa-bar-chart-o"></i>
                                            </a>
                                        </li>
                                        <li class="volver" >
                                            <a id="volver" href="Principal.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                <i class="fa fa-home "></i> Home
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
                            </div>
                        </div>
                        <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                            <div class="row" style="display: flex;justify-content: center;">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                                    <h1 class="txt-color-blueDark titCamp" style="font-weight: 600;font-size: 40px;margin-bottom: 10px;"><i class="fa fa-book"></i> Estudio Biblico<br><?php echo $data->No_Campana_Evangelistica ?></h1>
                                    <h2 class=" txt-color-blueDark DesCamp" ><?php echo $data->Des_Campana_Evangelistica ?></h2>
                                </div>
                            </div>
                            <section id="widget-grid" class="">
                                <div class="row">
                                    <?php
                                    if ($data->Es_Video_Conferencia === "C") {
                                        if ($data->Plataforma === "J") {
                                            ?>
                                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-teal"  data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-video-camera"></i> </span>
                                                        <h2>Video Conferencia</h2>

                                                    </header>
                                                    <div style="background-color: #ffffff82 !important;">
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ">
                                                            <iframe  src="https://meet.jit.si/<?php echo $data->Cod_Campana_Evangelistica ?>" frameborder="0" allow="microphone,camera,fullscreen" allowfullscreen="" style="width: 100%;height: 500px" ></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } else if ($data->Plataforma === "S") { ?>
                                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-teal"  data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-video-camera"></i> </span>
                                                        <h2>Video Conferencia</h2>

                                                    </header>
                                                    <div style="background-color: #ffffff82!important;">
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ">
                                                            <iframe  src="<?php echo $data->URL_Campana_Evangelistica ?>" frameborder="0" allow="livestreaming,sharedvideo,chat,raisehand,settings,microphone,camera,desktop,fullscreen,shortcuts,tileview,mute-everyone" allowfullscreen="" style="width: 100%;height: 500px" ></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } else if ($data->Plataforma === null) { ?>
                                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-teal"  data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false" data-widget-attstyle="jarviswidget-color-teal"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-video-camera"></i> </span>
                                                        <h2>Video Conferencia</h2>

                                                    </header>
                                                    <div style="background-color: #ffffff82!important;">
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ">
                                                            <iframe  src="https://meet.jit.si/<?php echo $data->Cod_Campana_Evangelistica ?>" frameborder="0" allow="microphone,camera,fullscreen" allowfullscreen="" style="width: 100%;height: 500px" ></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                            <?php
                                        }
                                    }
                                    ?>

                                    <?php
                                    if (mysqli_num_rows($var2) > 0) {

                                        $data2 = $var2->fetch_object();
                                        $var3 = $objs->ListaHerramientaEstudio($data2->id_Herramienta_Campana);
                                        if (mysqli_num_rows($var3) > 0) {
                                            $data3 = $var3->fetch_object();
                                        } else {
                                            
                                        }
                                        if ($data2->Es_Biblia === "1") {
                                            ?>
                                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                                        <h2>Biblia Personal</h2>

                                                    </header>
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" style="height: 530px;overflow: auto;">
                                                            <iframe src="Biblia.php" width="100%" style="height: 99%;border: 0px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } ?>
                                        <?php if ($data2->Es_Himinario === "1") { ?>
                                            <article class="col-xs-12 col-sm12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-music"></i> </span>
                                                        <h2>Himinario</h2>
                                                    </header>
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" >
                                                            <iframe id="" src="Himinario.php" width="100%" style="height: 500px;border: 0px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } ?>
                                        <?php if ($data2->Es_Musica === "1" && $data2->Es_Videos === "0") { ?>
                                            <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">

                                                <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-music"></i> </span>
                                                        <h2>Musica</h2>
                                                    </header>
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" >
                                                            <iframe  src="Himinario.php" width="100%" style="height: 500px;border: 0px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } else if ($data2->Es_Musica === "1" && $data2->Es_Videos === "1") { ?>
                                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 5px">

                                                <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-music"></i> </span>
                                                        <h2>Musica</h2>
                                                    </header>
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" >
                                                            <iframe  src="Himinario.php" width="100%" style="height: 500px;border: 0px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } ?>
                                        <?php if ($data2->Es_Videos === "1" && $data2->Es_Musica === "0") { ?>
                                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-youtube-play"></i> </span>
                                                        <h2>Video</h2>
                                                    </header>
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" >
                                                            <iframe  src="Himinario.php" width="100%" style="height: 500px;border: 0px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } else if ($data2->Es_Videos === "1" && $data2->Es_Musica === "1") { ?>
                                            <article class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 5px">
                                                <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                     style="margin-bottom: 15px;">
                                                    <header>
                                                        <span class="widget-icon"> <i class="fa fa-youtube-play"></i> </span>
                                                        <h2>Video</h2>
                                                    </header>
                                                    <div>
                                                        <div class="jarviswidget-editbox">
                                                        </div>
                                                        <div class="widget-body no-padding ver" >
                                                            <iframe id="frameVer" src="Himinario.php" width="100%" style="height: 500px;border: 0px;"></iframe>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php } ?>
                                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5px">
                                            <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                 style="margin-bottom: 15px;">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-list"></i> </span>
                                                    <h2>Porcentaje de Desarrollo de Estudiantes</h2>
                                                </header>
                                                <div>
                                                    <div class="jarviswidget-editbox">
                                                    </div>
                                                    <div id="ListaPart" class="widget-body no-padding ver" style="max-height: 350px;overflow: auto;">
                                                        <div class="col-sm-12" style="background: white">
                                                            <?php
                                                            if (mysqli_num_rows($Est1) > 0) {
                                                                while ($dataEst = $Est1->fetch_object()) {
                                                                    ?>
                                                                    <div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;display: flex;align-items: center;">
                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="display: flex;align-items: center;min-height: 60px;">
                                                                            <div><strong> <?php echo $dataEst->Nombre ?></strong></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-bottom: 10px"> 
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">
                                                                                <div class="easy-pie-chart txt-color-greenLight easyPieChart" data-percent="<?php echo intval(($dataEst->PD * 100) / $dataEst->PT) ?>" data-pie-size="50">
                                                                                    <span class="percent percent-sign txt-color-greenLight font-xs "></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;display: flex;align-items: center;">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex;align-items: center;min-height: 60px;">
                                                                        <div><strong> Mo se ha Registrado ningun Estudiante</strong></div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6" style="margin-bottom: 5px">
                                            <div class="jarviswidget jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                 style="margin-bottom: 15px;">
                                                <header>
                                                    <span class="widget-icon"> <i class="fa fa-folder-open"></i> </span>
                                                    <h2>Registro de Desarrollo</h2>
                                                </header>
                                                <div>
                                                    <div class="jarviswidget-editbox">
                                                    </div>
                                                    <div class="widget-body no-padding ver" style="max-height: 350px;overflow: auto;">
                                                        <div class="col-sm-12" style="background: #00000040">
                                                            <?php
                                                            if (mysqli_num_rows($Est2) > 0) {
                                                                while ($dataEst2 = $Est2->fetch_object()) {
                                                                    ?>
                                                                    <div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;padding-bottom: 10px;display: flex;align-items: center;">
                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="display: flex;align-items: center;min-height: 60px;">
                                                                            <div><strong> <?php echo $dataEst2->Nombre ?></strong></div>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-bottom: 20px"> 
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;padding-top: 20px;">
                                                                                <a onclick="LLenarDatos(<?php echo $dataEst2->id_Part ?>)" class="btn btn-success btn-sm" data-toggle="modal" data-target="#ModalIngresarAvance" >Ingresar Avance</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <?php
                                                                }
                                                            } else {
                                                                ?>
                                                                <div class="row" style="border-top: solid 1px #9e9c9c;border-bottom: solid 1px #9e9c9c;display: flex;align-items: center;">
                                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex;align-items: center;min-height: 60px;">
                                                                        <div><strong> Mo se ha Registrado ningun Estudiante</strong></div>
                                                                    </div>
                                                                </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } else { ?>
                                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 5px">
                                            <div class=" jarviswidget-color-green" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false"
                                                 style="margin-bottom: 15px;">
                                                <div>
                                                    <div class="jarviswidget-editbox">
                                                    </div>
                                                    <div class="widget-body no-padding ver" style="text-align: center;background: transparent">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " style="text-align: center;background: transparent"><h1> No hay Herramientas Registradas</h1></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    <?php } ?>
                                </div>
                            </section>
                        </div>
                    </div>
                </div >


                <?php
            }
        } else {
            ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 " style="text-align: center"><h1> No hay una campaña Evangelistica</h1></div>
        <?php } ?>
        <!-- END MAIN PANEL -->

        <!-- PAGE FOOTER -->
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
        <script src="../js/Biblia/Biblia.js"></script>
        <script src="../js/EstudioBiblico/EstudioBiblico.js"></script>
        <script type="text/javascript">
                                                                                    $(document).ready(function () {
                                                                                        Actudalizar();
                                                                                        //ListarParticipantesEB(<?php echo $_GET["id"] ?>);
                                                                                        $(window).resize(function () {
                                                                                            Actudalizar();
                                                                                        });
                                                                                        function Actudalizar() {
                                                                                            if ($(document).width() < 768) {
                                                                                                $(".bodhi").css("height", "100%");
                                                                                            } else {
                                                                                                $(".bodhi").css("height", "100%");
                                                                                            }
                                                                                        }
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