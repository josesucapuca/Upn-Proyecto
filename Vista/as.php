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
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css"/>
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/autofill/2.3.5/css/autoFill.bootstrap.css"/>



        </head>

        <body class="bod">
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Article Post</h4>
                        </div>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Title" required />
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Content" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="category"> Category</label>
                                        <select class="form-control" id="category">
                                            <option>Articles</option>
                                            <option>Tutorials</option>
                                            <option>Freebies</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tags"> Tags</label>
                                        <input type="text" class="form-control" id="tags" placeholder="Tags" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="well well-sm well-primary">
                                        <form class="form form-inline " role="form">
                                            <div class="form-group">
                                                <input type="text" class="form-control" value="" placeholder="Date" required />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control">
                                                    <option>Draft</option>
                                                    <option>Published</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <span class="glyphicon glyphicon-floppy-disk"></span> Save
                                                </button>
                                                <button type="button" class="btn btn-default btn-sm">
                                                    <span class="glyphicon glyphicon-eye-open"></span> Preview
                                                </button>
                                            </div>
                                        </form>
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
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">

                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" style="height: 60px;width: auto;"> </span>
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


                    <div class="row">

                        <div class="col-sm-12">


                            <div class="well well-sm">

                                <div class="row">

                                    <div class="col-sm-12 col-md-12 col-lg-12">
                                        <div class=" no-margin no-padding">

                                            <div class="row">

                                                <div class="col-sm-12">
                                                    <div id="myCarousel" class="carousel fade profile-carousel">
                                                        <div class="air air-bottom-right padding-10">
                                                            <a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp; <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
                                                        </div>
                                                        <div class="air air-top-left padding-10">
                                                            <h4 class="txt-color-white font-md">Jan 1, 2014</h4>
                                                        </div>
                                                        <ol class="carousel-indicators">
                                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                                        </ol>
                                                        <div class="carousel-inner">
                                                            <!-- Slide 1 -->
                                                            <div class="item active">
                                                                <img src="img/demo/s1.jpg" alt="demo user" style="width: 100%;">
                                                            </div>
                                                            <!-- Slide 2 -->
                                                            <div class="item">
                                                                <img src="img/demo/s2.jpg" alt="demo user" style="width: 100%;">
                                                            </div>
                                                            <!-- Slide 3 -->
                                                            <div class="item">
                                                                <img src="img/demo/m3.jpg" alt="demo user" style="width: 100%;">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-12">

                                                    <div class="row">

                                                        <div class="col-sm-3 profile-pic">
                                                            <img src="../images/iconos/user2.png" alt="demo user" style="background: #767676;padding: 5px;">
                                                            <div class="padding-10">
                                                                <h4 class="font-md"><strong>1,543</strong>
                                                                    <br>
                                                                    <small>Followers</small></h4>
                                                                <br>
                                                                <h4 class="font-md"><strong>419</strong>
                                                                    <br>
                                                                    <small>Connections</small></h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <h1>John <span class="semi-bold">Doe</span>
                                                                <br>
                                                                <small> CEO, SmartAdmin</small></h1>

                                                            <ul class="list-unstyled">
                                                                <li>
                                                                    <p class="text-muted">
                                                                        <i class="fa fa-phone"></i>&nbsp;&nbsp;(<span class="txt-color-darken">313</span>) <span class="txt-color-darken">464</span> - <span class="txt-color-darken">6473</span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="text-muted">
                                                                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:simmons@smartadmin">ceo@smartadmin.com</a>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="text-muted">
                                                                        <i class="fa fa-skype"></i>&nbsp;&nbsp;<span class="txt-color-darken">john12</span>
                                                                    </p>
                                                                </li>
                                                                <li>
                                                                    <p class="text-muted">
                                                                        <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="txt-color-darken">Free after <a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment">4:30 PM</a></span>
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                            <br>
                                                            <p class="font-md">
                                                                <i>A little about me...</i>
                                                            </p>
                                                            <p>

                                                                Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                                                                cumque nihil impedit quo minus id quod maxime placeat facere

                                                            </p>
                                                            <br>
                                                            <a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
                                                            <br>
                                                            <br>

                                                        </div>
                                                        <div class="col-sm-3">
                                                            <h1><small>Connections</small></h1>
                                                            <ul class="list-inline friends-list">
                                                                <li><img src="img/avatars/1.png" alt="friend-1">
                                                                </li>
                                                                <li><img src="img/avatars/2.png" alt="friend-2">
                                                                </li>
                                                                <li><img src="img/avatars/3.png" alt="friend-3">
                                                                </li>
                                                                <li><img src="img/avatars/4.png" alt="friend-4">
                                                                </li>
                                                                <li><img src="img/avatars/5.png" alt="friend-5">
                                                                </li>
                                                                <li><img src="img/avatars/male.png" alt="friend-6">
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);">413 more</a>
                                                                </li>
                                                            </ul>

                                                            <h1><small>Recent visitors</small></h1>
                                                            <ul class="list-inline friends-list">
                                                                <li><img src="img/avatars/male.png" alt="friend-1">
                                                                </li>
                                                                <li><img src="img/avatars/female.png" alt="friend-2">
                                                                </li>
                                                                <li><img src="img/avatars/female.png" alt="friend-3">
                                                                </li>
                                                            </ul>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                            <div class="row">

                                                <div class="col-sm-12">

                                                    <hr>

                                                    <div class="padding-10">

                                                        <ul class="nav nav-tabs tabs-pull-right">
                                                            <li class="active">
                                                                <a href="#a1" data-toggle="tab">Recent Articles</a>
                                                            </li>
                                                            <li>
                                                                <a href="#a2" data-toggle="tab">New Members</a>
                                                            </li>
                                                            <li class="pull-left">
                                                                <span class="margin-top-10 display-inline"><i class="fa fa-rss text-success"></i> Activity</span>
                                                            </li>
                                                        </ul>

                                                        <div class="tab-content padding-top-10">
                                                            <div class="tab-pane fade in active" id="a1">

                                                                <div class="row">

                                                                    <div class="col-xs-2 col-sm-1">
                                                                        <time datetime="2014-09-20" class="icon">
                                                                            <strong>Jan</strong>
                                                                            <span>10</span>
                                                                        </time>
                                                                    </div>

                                                                    <div class="col-xs-10 col-sm-11">
                                                                        <h6 class="no-margin"><a href="javascript:void(0);">Allice in Wonderland</a></h6>
                                                                        <p>
                                                                            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi Nam eget dui.
                                                                            Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero,
                                                                            sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-sm-12">

                                                                        <hr>

                                                                    </div>

                                                                    <div class="col-xs-2 col-sm-1">
                                                                        <time datetime="2014-09-20" class="icon">
                                                                            <strong>Jan</strong>
                                                                            <span>10</span>
                                                                        </time>
                                                                    </div>

                                                                    <div class="col-xs-10 col-sm-11">
                                                                        <h6 class="no-margin"><a href="javascript:void(0);">World Report</a></h6>
                                                                        <p>
                                                                            Morning our be dry. Life also third land after first beginning to evening cattle created let subdue you'll winged don't Face firmament.
                                                                            You winged you're was Fruit divided signs lights i living cattle yielding over light life life sea, so deep.
                                                                            Abundantly given years bring were after. Greater you're meat beast creeping behold he unto She'd doesn't. Replenish brought kind gathering Meat.
                                                                        </p>
                                                                    </div>

                                                                    <div class="col-sm-12">

                                                                        <br>

                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="tab-pane fade" id="a2">

                                                                <div class="alert alert-info fade in">
                                                                    <button class="close" data-dismiss="alert">
                                                                        ×
                                                                    </button>
                                                                    <i class="fa-fw fa fa-info"></i>
                                                                    <strong>51 new members </strong>joined today!
                                                                </div>

                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/female.png" alt="demo user"><a href="javascript:void(0);">Jenn Wilson</a>
                                                                    <div class="email">
                                                                        travis@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
                                                                    <div class="email">
                                                                        marshall@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
                                                                    <div class="email">
                                                                        joe@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Mike McBride</a>
                                                                    <div class="email">
                                                                        mike@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Travis Wilson</a>
                                                                    <div class="email">
                                                                        travis@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
                                                                    <div class="email">
                                                                        marshall@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="Joe Cadena joe@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
                                                                    <div class="email">
                                                                        joe@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Mike McBride</a>
                                                                    <div class="email">
                                                                        mike@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Marshall Hitt</a>
                                                                    <div class="email">
                                                                        marshall@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);">Joe Cadena</a>
                                                                    <div class="email">
                                                                        joe@company.com
                                                                    </div>
                                                                </div>
                                                                <div class="user" title="email@company.com">
                                                                    <img src="img/avatars/male.png" alt="demo user"><a href="javascript:void(0);"> Mike McBride</a>
                                                                    <div class="email">
                                                                        mike@company.com
                                                                    </div>
                                                                </div>

                                                                <div class="text-center">
                                                                    <ul class="pagination pagination-sm">
                                                                        <li class="disabled">
                                                                            <a href="javascript:void(0);">Prev</a>
                                                                        </li>
                                                                        <li class="active">
                                                                            <a href="javascript:void(0);">1</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">2</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">3</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">...</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">99</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:void(0);">Next</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div><!-- end tab -->
                                                        </div>

                                                    </div>

                                                </div>

                                            </div>
                                            <!-- end row -->

                                        </div>

                                    </div>



                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>
                <!-- END MAIN PANEL -->
                <!--<div class="col-sm-4 col-md-4 col-lg-2 hidden-xs asidelat" style="background: linear-gradient( 155deg,#3e8391,black 50%);height: 100vh;display: flex;">
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;"> 
                            <h1 style="font-size: 40px;text-align: center;color: white;">CEO Adventistas</h1>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;">
                            <img src="../images/adventist-symbol-png--symbol/adventist-symbol--white.png" width="100%">
                        </div>
                    </div>
                </div>-->
                <!-- PAGE FOOTER
                <div class="page-footer" style="padding-left: 0px;border: solid 0px;">
                    <div class="row fot">
                        <div class="col-xs-12 col-sm-6">
                            <span class="txt-color-white"> <span class="hidden-xs">Aplicación Web Diseñado por  </span>Nexo-Consultores </span>
                        </div>

                        <div class="col-xs-6 col-sm-6 text-right ">
                            <div class="txt-color-white inline-block">
                                <i class="txt-color-blueLight hidden-mobile">Iglesia Adventista del Septimo Dia  </i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             END PAGE FOOTER -->
            </div>


            <!-- END RIBBON -->



            <!-- MAIN CONTENT -->
            <div id="content">
                <!-- end row -->

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

            <script src="../js/Himinario/Himinario.js"></script>
            <!-- PAGE RELATED PLUGIN(S) 
            <script src="..."></script>-->
            <script src="js/plugin/datatables/jquery.dataTables.min.js"></script>
            <script src="js/plugin/datatables/dataTables.colVis.min.js"></script>
            <script src="js/plugin/datatables/dataTables.tableTools.min.js"></script>
            <script src="js/plugin/datatables/dataTables.bootstrap.min.js"></script>
            <script src="js/plugin/datatable-responsive/datatables.responsive.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/dataTables.autoFill.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/autofill/2.3.5/js/autoFill.bootstrap.min.js"></script>
            <script type="text/javascript">

                                                                                    $(document).ready(function () {
                                                                                        Actudalizar();
                                                                                        $(window).resize(function () {
                                                                                            if ($(document).width() >= 280 && $(document).width() <= 360) {
                                                                                                $("#cadena").removeClass('input-lg').addClass('input-xs');
                                                                                                $(".titMusic").css("font-size", '18px');

                                                                                            } else if ($(document).width() > 360) {
                                                                                                $("#cadena").removeClass('input-xs').addClass('input-lg');
                                                                                                $(".titMusic").css("font-size", '30px');
                                                                                            }
                                                                                        });
                                                                                        pageSetUp();
                                                                                        function Actudalizar() {
                                                                                            if ($(document).width() >= 280 && $(document).width() <= 360) {
                                                                                                $("#cadena").removeClass('input-lg').addClass('input-xs');
                                                                                                $(".titMusic").css("font-size", '18px');

                                                                                            } else if ($(document).width() > 360) {
                                                                                                $("#cadena").removeClass('input-xs').addClass('input-lg');
                                                                                                $(".titMusic").css("font-size", '30px');
                                                                                            }
                                                                                        }
                                                                                    });

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
