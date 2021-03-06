<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/estudios/fondo.png');background-size: cover;background-position: top center;
          background-repeat: no-repeat;position: relative;float: left;width: 100%;">
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
            <input id="PersonaUsuario" type="hidden" value="<?php echo utf8_encode ($_SESSION["Persona"]) ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="SmartAdmin" > </span>                           
                        </div>
                        <div class="pull-right">
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                <li class="">
                                    <a href="#" class="btn btn-circle btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                        <i class="fa fa-sort-desc"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesión"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- logout button -->
                            <div id="" class="transparent pull-right">
                                <ul id="" class="header-dropdown-list ">
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
                                                <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesión"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <div class="row" style="display: flex;justify-content: center;">
                            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4 abs-center" style="text-align: center;">
                                <!--<div class="row"></div>-->
                                <div class="row">
                                    <img src="../images/estudios/LETRASESTUDIO NIÑOS.png" alt="" style="width: 100%"/>
                                </div>
            <!--<h1 class="page-title txt-color-blueDark" style="font-weight: 600"><i class="fa fa-book"></i> Cursos Bíblicos Adultos y Jóvenes</h1>-->
                            </div>
                        </div>
                        <section id="widget-grid" class="">
                            <div class="row">
                                <article class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="margin-bottom: 30px">
                                    <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">                                      
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Cursos Bíblicos Adolescentes y Niños </h2>
                                        </header>
                                        <div>
                                            <div class="widget-body no-padding" style="min-height: 0px">
                                                <div class="panel-group smart-accordion-default" id="verFav" >
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Cursos Bíblicos Adolescentes</a></h4>
                                                        </div>
                                                        <div id="collapseOne-1" class="panel-collapse collapse in">
                                                            <div class="">
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i><i class="fa fa-fw fa-minus-circle txt-color-red"></i>Acampando Con El Creador</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <br>
                                                                                <img src="../images/estudios/es-acampandocreador.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div id="collapseThree-1" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="ac1" href="https://drive.google.com/file/d/1oIMrrLuMiYYDEfJFgZHUrU3PZji8k8LN/preview" >AC - Lección:1</a></li>
                                                                                <li><a id="ac2" href="https://drive.google.com/file/d/1pW2PWpXNv6T81JRthqzVGs6JX3Dk0Rac/preview" >AC - Lección:2</a></li>
                                                                                <li><a id="ac3" href="https://drive.google.com/file/d/1AGHXO5I2kh21eLrgXZaEDFvONoUoX0m7/preview" >AC - Lección:3</a></li>
                                                                                <li><a id="ac4" href="https://drive.google.com/file/d/1q1wFE-v5jhdSvX_xIzg7kxA4Y42V_Jjd/preview" >AC - Lección:4</a></li>
                                                                                <li><a id="ac5" href="https://drive.google.com/file/d/1VVdWy64XMP5ZmoG_49iF4Q8d8Ha2SNj2/preview" >AC - Lección:5</a></li>
                                                                                <li><a id="ac6" href="https://drive.google.com/file/d/15t6-xJy5jADxuQipP3AslDUW8fklK9Jf/preview" >AC - Lección:6</a></li>
                                                                                <li><a id="ac7" href="https://drive.google.com/file/d/1mFXGP1ueM6aZihudG3dGcoMCcnFHQ__0/preview" >AC - Lección:7</a></li>
                                                                                <li><a id="ac8" href="https://drive.google.com/file/d/1j-w0iCEzHSDuzogDysnG-TnQe20F4qrm/preview" >AC - Lección:8</a></li>
                                                                                <li><a id="ac9" href="https://drive.google.com/file/d/1hscifwdOKQu9iFS4WhGth7uZp2PL_ieD/preview" >AC - Lección:9</a></li>
                                                                                <li><a id="ac10" href="https://drive.google.com/file/d/1cf81YgkbjX2xZUWdb7fjAIKYamb1P8-W/preview" >AC - Lección:10</a></li>
                                                                                <li><a id="ac11" href="https://drive.google.com/file/d/1kaD664O25gNIC1QA7qrBomC5wt5OWKrH/preview" >AC - Lección:11</a></li>
                                                                                <li><a id="ac12" href="https://drive.google.com/file/d/1C7gTcmDJ6ulwMVps5vyPQ7fZs1JqOEmS/preview" >AC - Lección:12</a></li>
                                                                                <li><a id="ac13" href="https://drive.google.com/file/d/1E_kKjXS_nk6TlNWTIYVSliXszpgOzVNX/preview" >AC - Lección:13</a></li>
                                                                                <!--<li><a id="ac13" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21112&amp;authkey=AL6X1kLPX-fJIl4&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0" >AC - Lección:13</a></li>-->
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div> 
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-2" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Exploradores De La Verdad</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-explorandoverdad.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree-2" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="ev1" href="https://drive.google.com/file/d/1lZGrmT2WCbt7y16g-VICGvQdShDYyRsL/preview" >EV - Lección:1</a></li>
                                                                                <li><a id="ev2" href="https://drive.google.com/file/d/1Wv9hK3Ct3Rc8nSziACMk0W1wAtMdD1V3/preview" >EV - Lección:2</a></li>
                                                                                <li><a id="ev3" href="https://drive.google.com/file/d/1NMY9X25IhfOuPuvfsJtWRYXWnecW-ZXA/preview" >EV - Lección:3</a></li>
                                                                                <li><a id="ev4" href="https://drive.google.com/file/d/1VG7ROvjfgh74tMK2akDzNaSqa548ofU5/preview" >EV - Lección:4</a></li>
                                                                                <li><a id="ev5" href="https://drive.google.com/file/d/1v6TEjj3l0GvOSFP4t-UC4hAwe28NuV6l/preview" >EV - Lección:5</a></li>
                                                                                <li><a id="ev6" href="https://drive.google.com/file/d/1KdNn2W5lXG8P9n5m6vxDNNIyKwkmF-Nq/preview" >EV - Lección:6</a></li>
                                                                                <li><a id="ev7" href="https://drive.google.com/file/d/1Q8xnS_wZpkC8vfud-uhPonl5uZFAXJM5/preview" >EV - Lección:7</a></li>
                                                                                <li><a id="ev8" href="https://drive.google.com/file/d/16kKX5Ydy2mVGl-d4iENbkWIhrFsR_xPC/preview" >EV - Lección:8</a></li>
                                                                                <li><a id="ev9" href="https://drive.google.com/file/d/1VGGVETySx9DmyhXTD4elREU48Q0TNam-/preview" >EV - Lección:9</a></li>
                                                                                <li><a id="ev10" href="https://drive.google.com/file/d/1PswHfumCYXhkuJIOXd4hF3P7ZlX2m7_1/preview" >EV - Lección:10</a></li>
                                                                                <li><a id="ev11" href="https://drive.google.com/file/d/10X1z8v5hYmAwRyqOwvCImCEnwxM_hDdb/preview" >EV - Lección:11</a></li>
                                                                                <li><a id="ev12" href="https://drive.google.com/file/d/1FAVTVeVzSPhEak7Eev6LWwXTTaaWwY_h/preview" >EV - Lección:12</a></li>
                                                                                <li><a id="ev13" href="https://drive.google.com/file/d/18JNsQiW2byX3Ygiq7i97f-1jDYYpU0TF/preview" >EV - Lección:13</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>                                                                                                                                      
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseFor-1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Cursos Bíblicos Para Niños </a></h4>
                                                        </div>
                                                        <div id="collapseFor-1" class="panel-collapse collapse">
                                                            <div class="">
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree3" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Yo Creo - Infantil </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-yocreo.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree3" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="yi1" href="https://drive.google.com/file/d/1Ux15p89njy0yRtwib2869HOLIM_8tViy/preview" >YI - Lección:1</a></li>
                                                                                <li><a id="yi2" href="https://drive.google.com/file/d/1pjhjoeDcSRO4Vgv8fKP2Oh31Hkgm5anL/preview" >YI - Lección:2</a></li>
                                                                                <li><a id="yi3" href="https://drive.google.com/file/d/1A0L6W_UwwakGK-pxUpSIBbPvEGOE6xmg/preview" >YI - Lección:3</a></li>
                                                                                <li><a id="yi4" href="https://drive.google.com/file/d/1UoqDa2URVfEn85vdLyPVpwOK0tD3A0AT/preview" >YI - Lección:4</a></li>
                                                                                <li><a id="yi5" href="https://drive.google.com/file/d/1VqgLWQrUeoopJsVjM7PkGRWVjtsH95bS/preview" >YI - Lección:5</a></li>
                                                                                <li><a id="yi6" href="https://drive.google.com/file/d/1xY3JxryADZFEV78EakU0Dr4OSJxTAhjL/preview" >YI - Lección:6</a></li>
                                                                                <li><a id="yi7" href="https://drive.google.com/file/d/1T9HeUNH8oUTDtT7K_GdA9W3LH_x49Kuj/preview" >YI - Lección:7</a></li>
                                                                                <li><a id="yi8" href="https://drive.google.com/file/d/1jN4DPJqXtyjxjr0apmfykLnAWnxI8fMd/preview" >YI - Lección:8</a></li>
                                                                                <li><a id="yi9" href="https://drive.google.com/file/d/1x4XIV6QfFgKfdMtKFCUOcIyn9t16j-ZJ/preview" >YI - Lección:9</a></li>
                                                                                <li><a id="yi10" href="https://drive.google.com/file/d/141zfd_zVRmf1Zf5PHeDP5CnnVRTrzL8t/preview" >YI - Lección:10</a></li>
                                                                                <li><a id="yi11" href="https://drive.google.com/file/d/1LuBsKbffjurubUA4KAdMH_jrLDNhXjyB/preview" >YI - Lección:11</a></li>
                                                                                <li><a id="yi12" href="https://drive.google.com/file/d/171Sry-5LWndUeAyufUJGJQQI3UJZHLf5/preview" >YI - Lección:12</a></li>
                                                                                <li><a id="yi13" href="https://drive.google.com/file/d/1Xj_M1Bte_a0Djwa03CAon6m3cOgCgnXT/preview" >YI - Lección:13</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree2" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Jesús y Yo </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-jesusyo.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                       
                                                                    </div>
                                                                    <div id="collapseThree2" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="fy1" href="https://drive.google.com/file/d/1GSoXC4IZy17Xsw1El6V3Q43wiso-3s2k/preview" >FY - Lección:1</a></li>
                                                                                <li><a id="fy2" href="https://drive.google.com/file/d/1qDovsPIqBjrgZ1dLb0jPjByU12SNQEZy/preview" >FY - Lección:2</a></li>
                                                                                <li><a id="fy3" href="https://drive.google.com/file/d/1RT59Zjd5K440Br-wOKJ3yZ1XRHLMekrh/preview" >FY - Lección:3</a></li>
                                                                                <li><a id="fy4" href="https://drive.google.com/file/d/1RIn6Z0ZoBJmFEsPwZhDaX55oiFZojFcr/preview" >FY - Lección:4</a></li>
                                                                                <!--<li><a id="fy5" href="" >FY - Lección:5</a></li>-->
                                                                                <li><a id="fy6" href="https://drive.google.com/file/d/1AiqRkuC9mWDFQN9LxqDV0aV0p0RnX7TZ/preview" >FY - Lección:6</a></li>
                                                                                <li><a id="fy7" href="https://drive.google.com/file/d/1lWetF0avdtwbOLsjl6HLPC18F3G7bOsp/preview" >FY - Lección:7</a></li>
                                                                                <li><a id="fy8" href="https://drive.google.com/file/d/15qQIvWiA7U2-YgEwT0qdbz6OCf8Z__j1/preview" >FY - Lección:8</a></li>
                                                                                <li><a id="fy9" href="https://drive.google.com/file/d/1lRDfjqZM9-_93655IjsGPXLEPT2JUuEm/preview" >FY - Lección:9</a></li>
                                                                                <li><a id="fy10" href="https://drive.google.com/file/d/1YfQZjh_gtM5HTyOMmuoS_AsTItl0dlI_/preview" >FY - Lección:10</a></li>
                                                                                <li><a id="fy11" href="https://drive.google.com/file/d/1Fyzn_bTuo7YgzgiTCkgpOMTe1Gdt-U6e/preview" >FY - Lección:11</a></li>
                                                                                <li><a id="fy12" href="https://drive.google.com/file/d/1pGKPSuolOED8Z-V2t-trgc5Bip-MVTI0/preview" >FY - Lección:12</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel">
                                                                    <div class="panel-heading">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree1" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i> Amigos De Jesús Infantil </a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <br>
                                                                                <img src="../images/estudios/es-amigosjesus.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                      
                                                                    </div>
                                                                    <div id="collapseThree1" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudios">
                                                                                <li><a id="aj1" href="https://drive.google.com/file/d/10IM82SbiiEp6T-6Ni9dqBD2N4OtLAgoR/preview" >AJ - Lección:1</a></li>
                                                                                <li><a id="aj2" href="https://drive.google.com/file/d/1nPb-HkLelhP43El5J0xcter6yhFI37C0/preview" >AJ - Lección:2</a></li>
                                                                                <li><a id="aj3" href="https://drive.google.com/file/d/1ne-blCLLWZJqxny7kt16QF7G1RLgbADI/preview" >AJ - Lección:3</a></li>
                                                                                <li><a id="aj4" href="https://drive.google.com/file/d/1eGGDjcdq9WuNtIA4ABTJ9S7tYDowU9G7/preview" >AJ - Lección:4</a></li>
                                                                                <li><a id="aj5" href="https://drive.google.com/file/d/1OJat8FB_gEEQ1p4mHuJz2pu6UfkipzB3/preview" >AJ - Lección:5</a></li>
                                                                                <li><a id="aj6" href="https://drive.google.com/file/d/1zG9A1fVhbBzZ-FbvDknSY_FM6gUzSSW6/preview" >AJ - Lección:6</a></li>
                                                                                <li><a id="aj7" href="https://drive.google.com/file/d/1N7zmujoro9G97Ebp8j5Qe-htmtEipQ3n/preview" >AJ - Lección:7</a></li>
                                                                                <li><a id="aj8" href="https://drive.google.com/file/d/1a7vYMtWlJoDqzx1OPNyOmqRdGT6dexSg/preview" >AJ - Lección:8</a></li>
                                                                                <li><a id="aj9" href="https://drive.google.com/file/d/1iavc7FNPC7wLUm0h5oyMIWk-JJYsuDnF/preview" >AJ - Lección:9</a></li>
                                                                                <li><a id="aj10" href="https://drive.google.com/file/d/166RH6MVlRO2XYziI3rvrflOQUw87Fisl/preview" >AJ - Lección:10</a></li>
                                                                                <li><a id="aj11" href="https://drive.google.com/file/d/1TlYqQbTAsvoDaCMx9rFeD4lR7H9-5GWn/preview" >AJ - Lección:11</a></li>
                                                                                <li><a id="aj12" href="https://drive.google.com/file/d/1U196Ix6gEUBrqH2AGgFyjpUpL8ScUtsf/preview" >AJ - Lección:12</a></li>
                                                                                <li><a id="aj13" href="https://drive.google.com/file/d/12cRH8Fh_OJmp1rXgOO2mK_-2seYhNV0T/preview" >AJ - Lección:13</a></li>
                                                                                <li><a id="aj14" href="https://drive.google.com/file/d/1ihi3AyKB56uYgTv2Gy8R6yOxFqz8PhOB/preview" >AJ - Lección:14</a></li>
                                                                                <li><a id="aj15" href="https://drive.google.com/file/d/1m758PLdCr1OdHpV4XpewxlC0lh5hdeNn/preview" >AJ - Lección:15</a></li>
                                                                                <li><a id="aj16" href="https://drive.google.com/file/d/1D5cB7ucMZM6Yq2WZmyuBrApz4wWicGQO/preview" >AJ - Lección:16</a></li>
                                                                                <li><a id="aj17" href="https://drive.google.com/file/d/1j-mGW0cCamrmICdK7zMn2pKATohgrWjR/preview" >AJ - Lección:17</a></li>
                                                                                <li><a id="aj18" href="https://drive.google.com/file/d/1FLP8yCC_dm_Y5OENkPeMM0lRjcIbkaF6/preview" >AJ - Lección:18</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="jarviswidget jarviswidget-color-darken" id="wid-id-1" data-widget-editbutton="true">                                      
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Biblia</h2>
                                        </header>
                                        <div>
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding">
                                                <iframe src="Biblia.php" width="100%" height="486px" style="margin-bottom: -6px;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <!-- WIDGET END -->
                                <article class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="margin-bottom: 30px">
                                    <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="true">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Material</h2>
                                        </header>
                                        <div>
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding" style="background-image: url('../images/camp_creador.PNG');background-size: 100% 100%;height: 99vh" >
                                                <!--<iframe id="myframe" name="myframe" src="https://drive.google.com/file/d/15s6EFXtu8lSPtblLQ5YwkG16bggd2XgZ/view?usp=sharing" width="100%" style="height: 100vh"></iframe>-->
                                                <!--<iframe id="myframe" name="myframe" src="" frameborder="0" width="100%" style="height: 100vh"></iframe>-->
                                                <iframe id="estu" src="" width="100%" height="100%" frameborder="0" scrolling="yes" style="margin-bottom: -6px;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                
                            </div>
                        </section>
                        <section id="widget-grid" class="">
                            <div class="row">
                                <article class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="margin-bottom: 30px">
                                <div class="jarviswidget jarviswidget-color-darken" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">                                      
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Cursos Bíblicos Adolescentes y Niños en PPT</h2>
                                        </header>
                                        <div>
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding" style="min-height: 0px;height: 60vh">
                                                <div class="panel-group smart-accordion-default" id="verFav" >
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseOne-1"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Cursos Bíblicos Para Adultos - PPT</a></h4>
                                                        </div>
                                                        <div id="collapseOne-1" class="panel-collapse collapse in">
                                                            <div class="">
                                                                <div class="panel ">
                                                                    <div class="">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-20" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Yo Creo</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/YC-PPT.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div id="collapseThree-20" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudiosppt">
                                                                    <li><a id="YC1-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21174&amp;authkey=AEcffvUJdF6CW4k&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:1</a></li>
                                                                    <li><a id="YC2-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21175&amp;authkey=AI0AiNUNwgv0T1g&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:2</a></li>
                                                                    <li><a id="YC3-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21176&amp;authkey=AGJDkuP6jbP7bvU&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:3</a></li>
                                                                    <li><a id="YC4-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21177&amp;authkey=AFALPGjldQF_Sg4&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:4</a></li>
                                                                    <li><a id="YC5-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21178&amp;authkey=ABzO2R8RyzuiGgE&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:5</a></li>
                                                                    <li><a id="YC6-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21179&amp;authkey=AGu6BTdT5ubg3VA&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:6</a></li>
                                                                    <li><a id="YC7-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21180&amp;authkey=AJhliYw0T18_pIw&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:7</a></li>
                                                                    <li><a id="YC8-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21181&amp;authkey=AO7oQOaTcUOzENs&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:8</a></li>
                                                                    <li><a id="YC9-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21182&amp;authkey=AES8_DVqu_ZKcYw&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:9</a></li> 
                                                                    <li><a id="YC10-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21183&amp;authkey=AJRlleum1IgpiAw&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:10</a></li>
                                                                    <li><a id="YC11-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21184&amp;authkey=ANT9u_2FXR1Jju8&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:11</a></li>
                                                                    <li><a id="YC12-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21185&amp;authkey=AEW9HdElNoqd-AI&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:12</a></li>
                                                                    <li><a id="YC13-PPT" href="https://onedrive.live.com/embed?cid=3D93D1C53B393AA8&amp;resid=3D93D1C53B393AA8%21186&amp;authkey=AP5_VWMMXR0QaZY&amp;em=2&amp;wdAr=1.3333333333333333&amp;wdEaa=1" width="610px" height="481px" frameborder="0"> YC - Lección:13</a></li> 
                                                                </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel ">
                                                                    <div class="">
                                                                        <div class="col-xs-8 col-sm-9 col-md-9 col-lg-9">
                                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion-2" href="#collapseThree-21" class="collapsed"> <i class="fa fa-fw fa-plus-circle txt-color-green"></i> <i class="fa fa-fw fa-minus-circle txt-color-red"></i>Esperanza Para La Familia</a></h4>
                                                                        </div>
                                                                        <div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 estudio-img">
                                                                            <div class="row">
                                                                                <img src="../images/estudios/es-familia-ppt.PNG" alt="" style="width: 60%"/>
                                                                            </div>                                 
                                                                        </div>                                                                        
                                                                    </div>
                                                                    <div id="collapseThree-21" class="panel-collapse collapse">
                                                                        <div class="panel-body">
                                                                            <ul id="estudiosppt">
                                                                                <li><a id="ef1-ppt" href="">EF - Lección:1</a></li>
                                                                                <li><a id="ef2-ppt" href="">EF - Lección:2</a></li>
                                                                                <li><a id="ef3-ppt" href="">EF - Lección:3</a></li>
                                                                                <li><a id="ef4-ppt" href="">EF - Lección:4</a></li>
                                                                                <li><a id="ef5-ppt" href="">EF - Lección:5</a></li>
                                                                                <li><a id="ef6-ppt" href="">EF - Lección:6</a></li>
                                                                                <li><a id="ef7-ppt" href="">EF - Lección:7</a></li>
                                                                                <li><a id="ef8-ppt" href="">EF - Lección:8</a></li>
                                                                                <li><a id="ef9-ppt" href="">EF - Lección:9</a></li>
                                                                                <li><a id="ef10-ppt" href="">EF - Lección:10</a></li>
                                                                                <li><a id="ef11-ppt" href="">EF - Lección:11</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </article>
                                <article class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="margin-bottom: 30px">
                                    <div class="jarviswidget jarviswidget-color-darken" data-widget-editbutton="true">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-book"></i> </span>
                                            <h2>Materiales en PPT</h2>
                                        </header>
                                        <div>
                                            <div class="jarviswidget-editbox">
                                            </div>
                                            <div class="widget-body no-padding" style="background-image: url('../images/estudios/YC-PPT.PNG');background-size: 100% 100%;height: 60vh" >
                                                <!--<iframe id="myframe" name="myframe" src="https://drive.google.com/file/d/15s6EFXtu8lSPtblLQ5YwkG16bggd2XgZ/view?usp=sharing" width="100%" style="height: 100vh"></iframe>-->
                                                <!--<iframe id="myframe" name="myframe" src="" frameborder="0" width="100%" style="height: 100vh"></iframe>-->
                                                <iframe id="estuppt" src="" width="100%" height="100%" frameborder="0" scrolling="yes" style="margin-bottom: -6px;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                </div>
                        </section>
                    </div>
                </div>
                <!-- PAGE FOOTER -->
                <div class="">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 abs-center">
                                        <img src="../images/estudios/niños.png" alt="" style="width: 80%; height: 700px"/>
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                if (!window.jQuery) {
                    document.write('<script src="js/libs/jquery-2.1.1.min.js"><\/script>');
                }
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
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