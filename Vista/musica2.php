<!DOCTYPE html>
<html lang="es" style="background-image: url('img/pattern/tileable_wood_texture.png');">
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
    <body class="container">
        <!-- MAIN PANEL -->
        <div >

            <div id="content">

                <!-- row -->

                <div class="row">

                    <div class="col-sm-12">


                        <div id="myTabContent1" class="tab-content bg-color-white padding-10">
                            <div class="tab-pane fade in active" id="s1">
                                <h1> Buscar <span class="semi-bold">Musica</span></h1>
                                <br>
                                <div class="input-group input-group-lg hidden-mobile">
                                    <input class="form-control input-lg" type="text" placeholder="Buscar Musica..." id="search-project">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default">
                                            <i class="fa fa-fw fa-search fa-lg"></i>
                                        </button>
                                    </div>
                                </div>

                                <h1 class="font-md"> Total de Resultados de Busqueda <small class="text-danger"> &nbsp;&nbsp;(4 Resultados)</small></h1>

                                <div class="search-results clearfix smart-form">

                                    <h4><a href="javascript:void(0);">Himno N°1</a></h4>

                                    <div>
                                        <p class="description">
                                            Contenido/Comentario
                                        </p>
                                    </div>
                                    <audio src="https://drive.google.com/file/d/0BzYulys_oiIoQ3VVeE9WZEJKb28/preview" controls="controls" type="audio/mpeg" preload="preload">
</audio>
<audio controls="controls"><source src=" https://drive.google.com/
uc?export=download&id=18B5iHujmWDCjGEWG52kEBK7SrfnOfUgv" /> </audio>

                                </div>
                                <div class="search-results clearfix">
                                    <h4><a href="javascript:void(0);">SmartAdmin- Responsive Dashboard Template</a></h4>
                                    <div>
                                        <p class="note">
                                            <a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                                        </p>
                                        <div class="url text-success">
                                            http://www.wrapbootstrap.com <i class="fa fa-caret-down"></i>
                                        </div>
                                        <p class="description">
                                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here...
                                        </p>
                                    </div>
                                </div>
                                <div class="search-results clearfix">
                                    <h4><a href="javascript:void(0);">SmartAdmin- Responsive Dashboard Template</a>&nbsp;&nbsp;<a href="javascript:void(0);"><i class="fa fa-caret-up fa-lg"></i></a></h4>
                                    <img src="img/demo/sample.jpg" alt="">
                                    <div>
                                        <p class="note">
                                            <a href="javascript:void(0);" class="text-danger"><i class="fa fa-thumbs-up"></i> Like&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                                        </p>
                                        <div class="url text-success">
                                            smartadmin/index.html?#ajax/gallery.html <i class="fa fa-caret-down"></i>
                                        </div>
                                        <p class="description">
                                            Oct 1, 2006 - Uploaded by 02842356107
                                            <br>
                                            <br>
                                            <a href="javascript:void(0)" class="btn btn-default btn-xs">Go to gallery</a>
                                        </p>
                                    </div>

                                </div>
                                <div class="search-results clearfix">
                                    <h4><a href="javascript:void(0);">Company project Timeline Stock</a>&nbsp;&nbsp;<a href="javascript:void(0);"><i class="fa fa-caret-up fa-lg"></i></a></h4>

                                    <div>

                                        <span class="sparkline txt-color-blueLight" data-sparkline-type="line" data-sparkline-width="150px" data-sparkline-height="25px"> 10,3,8,4,3,10,7,8,4,6,4,6,8,3 </span>
                                        <span class="display-inline note font-lg semi-bold"><small><i class="fa fa-arrow-circle-up text-success"></i> 143.43</small></span>

                                        <p class="note">
                                            <a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                                        </p>
                                        <div class="url text-success">
                                            Dashboard > Projects > IT Report <i class="fa fa-caret-down"></i>
                                        </div>
                                        <p class="description">
                                            Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                                        </p>
                                    </div>

                                </div>

                                <div class="search-results clearfix">
                                    <h4><a href="javascript:void(0);"> Company project Timeline Stock</a>&nbsp;&nbsp;<a href="javascript:void(0);"></a><small>[PDF]</small></h4>
                                    <span class="sparkline txt-color-blueLight display-inline" data-sparkline-type="pie"  data-sparkline-offset="90" data-sparkline-piesize="55px"> 10,3,8,4, </span>
                                    <div>
                                        <p class="note">
                                            <a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                                        </p>
                                        <div class="url text-success">
                                            Dashboard > Projects > IT Report <i class="fa fa-caret-down"></i>
                                        </div>
                                        <p class="description">
                                            Last updated by <a href="javascript:void(0);">Rusho Burthoth </a>
                                        </p>
                                    </div>

                                </div>

                                <div class="search-results clearfix">
                                    <h4><a href="javascript:void(0);">SmartAdmin- Responsive Dashboard Template</a></h4>
                                    <div>
                                        <p class="note">
                                            <a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                                        </p>
                                        <div class="url text-success">
                                            http://www.wrapbootstrap.com <i class="fa fa-caret-down"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="search-results clearfix">
                                    <h4><a href="javascript:void(0);">SmartAdmin- Responsive Dashboard Template</a></h4>
                                    <div>
                                        <p class="note">
                                            <a href="javascript:void(0);"><i class="fa fa-thumbs-up"></i> Like this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-chain"></i> Share this link&nbsp;&nbsp;</a>
                                            <a href="javascript:void(0);"><i class="fa fa-star txt-color-yellow"></i> Favorite&nbsp;&nbsp;</a>
                                        </p>
                                        <div class="url text-success">
                                            http://www.wrapbootstrap.com <i class="fa fa-caret-down"></i>
                                        </div>
                                        <p class="description">
                                            Last updated by <a href="javascript:void(0);">Rusho Burthoth </a>
                                        </p>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <hr>
                                    <ul class="pagination no-margin">
                                        <li class="prev disabled">
                                            <a href="javascript:void(0);">Previous</a>
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
                                        <li class="next">
                                            <a href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                    <br>
                                    <br>
                                    <br>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="s2">
                                <h1> Search <span class="semi-bold">Users</span></h1>
                                <br>
                                <div class="input-group input-group-lg">
                                    <input class="form-control input-lg" type="text" placeholder="Search again..." id="search-user">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-fw fa-search fa-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <h1 class="font-md"> Search Results for <span class="semi-bold">Users</span><small class="text-danger"> &nbsp;&nbsp;(181 results)</small></h1>
                                <br>
                                <div class="table-responsive">

                                    <table id="resultTable" class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th style="width:30px">Pic</th>
                                                <th>F.Name</th>
                                                <th>L.Name</th>
                                                <th>DOB</th>
                                                <th>Email / Username</th>
                                                <th>City</th>
                                                <th>Postal</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><img src="img/avatars/male.png" alt="" width="20"></td><td>Noble</td><td>Saunders</td><td>2002-12-07</td><td>numbers@lipliquid.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>La Puerta</td><td>54076</td><td>558-908-4575</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Anna</td><td>Meeks</td><td>2007-04-05</td><td>carmel@forkform.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Holland</td><td>73490</td><td>255-757-8495<td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Millicent</td><td>Decker</td><td>2007-03-27</td><td>agustin.murray@babyback.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Leona</td><td>45960</td><td>207-445-7704</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Misty</td><td>Mcdowell</td><td>2002-12-09</td><td>mona.doreen@processproduce.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Sweetwater</td><td>94133</td><td>707-118-9601</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr class="danger">
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Cleo</td><td>Blue</td><td>1993-04-30</td><td>collin@berry.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Groesbeck</td><td>12764</td><td>543-827-8732</td><td><span class="label label-danger">Disabled</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Eliza</td><td>Proctor</td><td>2003-12-26</td><td>lawanda@event.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Alto</td><td>70454</td><td>453-985-9884</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr class="success">
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Chantel</td><td>Medina</td><td>1993-04-01</td><td>marilynn.lucretia@animalanswer.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Lozano</td><td>46151</td><td>789-917-1518</td><td><span class="label label-primary">ADMIN</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Tisha</td><td>Burns</td><td>1997-10-23</td><td>luella@square.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Dayton</td><td>18943</td><td>510-644-1193</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/female.png" alt=""  width="20"></td><td>Estelle</td><td>Barton</td><td>1993-01-21</td><td>rod.quinton@whilewhip.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Texline</td><td>29712</td><td>786-799-7584</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/female.png" alt=""  width="20"></td><td>Angeline</td><td>Roman</td><td>2002-11-23</td><td>katrina.claire.lindsey@letterlevel.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Ranchitos Las Lomas</td><td>87049</td><td>645-104-7232</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Barrett</td><td>Pearce</td><td>2013-04-16</td><td>katrina.claire.lindsey@smooth.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Flowella</td><td>45074</td><td>234-002-0762</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Margarita</td><td>Lancaster</td><td>2013-11-29</td><td>terra@smokesmooth.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Grand Saline</td><td>50886</td><td>354-908-6520</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/female.png" alt=""  width="20"></td><td>Rebekah</td><td>Hatcher</td><td>2003-01-03</td><td>janelle.lourdes.laurel@antany.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Laureles</td><td>26524</td><td>345-807-9800</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr class="warning">
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Lesley</td><td>Mccall</td><td>2000-07-27</td><td>pam.kelli@recordred.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Eagle Lake</td><td>83430</td><td>255-974-8448</td><td><span class="label label-warning">Inactive</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Josephine</td><td>Cooley</td><td>2006-10-31</td><td>magdalena@accountacid.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Stagecoach</td><td>89756</td><td>502-841-8206</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Joseph</td><td>Dawson</td><td>2013-01-25</td><td>yvonne.annette.june@streetstretch.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Oyster Creek</td><td>94520</td><td>954-256-3614</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Marlin</td><td>Dorsey</td><td>1994-12-08</td><td>jerrod.weston.hershel@specialsponge.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Lubbock</td><td>19131</td><td>510-209-3012</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Reginald</td><td>Nash</td><td>2000-11-26</td><td>mel@officeoil.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Port Mansfield</td><td>24679</td><td>390-385-6930</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Helga</td><td>Johnson</td><td>2000-03-09</td><td>kirby@stiffstill.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Oakhurst</td><td>52280</td><td>443-588-7234</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Silas</td><td>Arrington</td><td>2002-11-30</td><td>lula.lola@judgejump.org <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Bayou Vista</td><td>59377</td><td>729-309-5537</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/female.png" alt=""  width="20"></td><td>Thelma</td><td>Boyer</td><td>2004-10-26</td><td>athena.janel@attemptattention.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Keller</td><td>53463</td><td>958-473-4716</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/female.png" alt=""  width="20"></td><td>Sybil</td><td>Mahoney</td><td>1994-07-16</td><td>lara@water.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Mila Doce</td><td>96556</td><td>129-759-9595</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>David</td><td>Dean</td><td>1992-12-06</td><td>ma.justina.gussie@pumppunishment.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Columbus</td><td>88557</td><td>626-095-2870</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Dina</td><td>Steward</td><td>1997-11-26</td><td>clifton.willard.daryl@far.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Mason</td><td>54724</td><td>912-684-8315</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Raymundo</td><td>Massey</td><td>2005-08-30</td><td>lashawn.devon@bentberry.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Oak Valley</td><td>95324</td><td>680-005-5225</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Nick</td><td>Mcallister</td><td>2006-07-08</td><td>deann@pleasure.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>San Leanna</td><td>17585</td><td>408-044-0598</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Charlene</td><td>Nance</td><td>2013-01-13</td><td>armando.felix.jimmie@ableabout.org <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Edgewater-Paisano</td><td>93799</td><td>476-739-7850</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Judy</td><td>Corbett</td><td>2013-09-15</td><td>morton.jonas.forest@horse.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Roma</td><td>39019</td><td>575-417-6267</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Shauna</td><td>Elmore</td><td>1996-03-29</td><td>mel.marcelo@rootrough.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Channelview</td><td>18778</td><td>419-563-2551</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Archie</td><td>Castillo</td><td>2001-03-11</td><td>walker.tyree@fruitfull.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Martindale</td><td>77003</td><td>197-694-7475</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Ike</td><td>Yates</td><td>2005-08-08</td><td>kathi@fiction.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Denver City</td><td>96627</td><td>562-068-2504</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>James</td><td>Harrell</td><td>2001-07-05</td><td>rolando.clay@bitter.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Sanger</td><td>38876</td><td>971-978-5229</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Hung</td><td>Walsh</td><td>2012-03-10</td><td>rory@acidacross.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Buckholts</td><td>13087</td><td>914-948-4150</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/female.png" alt=""  width="20"></td><td>Frankie</td><td>Porter</td><td>2006-05-28</td><td>aron.leopoldo.everette@businessbut.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Fair Oaks Ranch</td><td>81496</td><td>935-811-1608</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Adrienne</td><td>Dickson</td><td>2000-05-09</td><td>felipe.bennie.gerardo@boiling.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Seabrook</td><td>67641</td><td>204-684-8982</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Ursula</td><td>Covington</td><td>2009-05-16</td><td>brianne.nilda@year.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Richland</td><td>35047</td><td>101-930-4222</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Wendy</td><td>Spence</td><td>1996-02-23</td><td>hilda.gwendolyn@brass.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Slaton</td><td>82159</td><td>936-779-1161</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Sarah</td><td>Mcdaniel</td><td>2003-08-03</td><td>danny@language.com <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Needville</td><td>16354</td><td>805-226-9457</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Bobbi</td><td>Taylor</td><td>2008-09-29</td><td>wesley@sunsupport.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Santa Fe</td><td>56008</td><td>781-448-8791</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Brendan</td><td>Mckay</td><td>2010-02-13</td><td>chong@example.org <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Las Colonias</td><td>63927</td><td>414-598-1649</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Beverley</td><td>Dodson</td><td>2012-08-10</td><td>curt.quentin@crush.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Study Butte-Terlingua</td><td>71556</td><td>937-937-2841</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Hassan</td><td>Bullock</td><td>2008-03-12</td><td>lena.christy@historyhole.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Hutchins</td><td>49192</td><td>108-577-5112</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Mack</td><td>Huber</td><td>1999-09-07</td><td>marquita@push.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Waelder</td><td>36982</td><td>812-883-4685</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Petra</td><td>Barnett</td><td>2003-10-24</td><td>elvia.alyce.deirdre@archargument.me <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Pittsburg</td><td>55769</td><td>624-871-4479</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Suzan</td><td>Case</td><td>2012-01-20</td><td>casey@cover.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Littlefield</td><td>30080</td><td>932-088-9855</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Jon</td><td>Mueller</td><td>2012-11-19</td><td>samual.paris@change.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Temple</td><td>30219</td><td>162-525-3454</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Loyd</td><td>Valenzuela</td><td>1993-08-28</td><td>jerrold.robt.hank@seaseat.edu <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Harker Heights</td><td>37310</td><td>295-305-4911</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Tracie</td><td>Ewing</td><td>2013-01-08</td><td>sang.deon@skysleep.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Kennard</td><td>67299</td><td>218-444-9426</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Jame</td><td>Cooper</td><td>2013-09-18</td><td>christi@substance.org <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Keene</td><td>84931</td><td>121-381-7120</td><td><span class="label label-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/male.png" alt=""  width="20"></td><td>Clyde</td><td>Hudson</td><td>2008-08-22</td><td>elvia@smilesmoke.info <a href="javascript:void(0);" class="pull-right"><i class="fa fa-key"></i></a></td><td>Sunset</td><td>88755</td><td>561-388-1897</td><td><span class="label label-success">Active</span></td>
                                            </tr>

                                        </tbody>
                                    </table>

                                </div>

                                <div class="text-center">
                                    <hr>
                                    <ul class="pagination no-margin">
                                        <li class="prev disabled">
                                            <a href="javascript:void(0);">Previous</a>
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
                                            <a href="javascript:void(0);">4</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">5</a>
                                        </li>
                                        <li class="next">
                                            <a href="javascript:void(0);">Next</a>
                                        </li>
                                    </ul>
                                    <br>
                                    <br>
                                    <br>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="s3">
                                <h1> Search <span class="semi-bold">history</span></h1>
                                <p class="alert alert-info">
                                    Your search history is turned off.

                                </p>

                                <span class="onoffswitch-title">Auto save Search History</span>
                                <span class="onoffswitch">
                                    <input type="checkbox" name="save_history" class="onoffswitch-checkbox" id="save_history" checked="checked">
                                    <label class="onoffswitch-label" for="save_history"> <span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span> <span class="onoffswitch-switch"></span> </label> </span>

                            </div>
                        </div>

                    </div>

                </div>

                <!-- end row -->

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

        <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
                Note: These tiles are completely responsive, you can add as many as you like
        -->
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

        <!-- PAGE RELATED PLUGIN(S) 
        <script src="..."></script>-->

        <script type="text/javascript">

                                            // DO NOT REMOVE : GLOBAL FUNCTIONS!

                                            $(document).ready(function () {

                                                $("#search-project").focus();

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

</html>