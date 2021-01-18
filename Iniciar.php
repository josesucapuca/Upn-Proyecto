<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <script type="text/javascript">
        location.href = "Vista/Principal.php";
    </script>
    <?php
} else {
    ?>
    <html>
        <head>
            <title></title>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <meta name="viewport" content="width=device-width, initial-scale=1"> 
            <link rel="stylesheet" href="css/bootstrap.min.css">            
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
            <link href="plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
            <link href="plugins/animate.css/animate.css" rel="stylesheet" type="text/css"/> 
            <link href="css/icomoon.css" rel="stylesheet" type="text/css"/>
            <link href="css/footer.css" rel="stylesheet" type="text/css"/>
            <!--<link href="style.css" rel="stylesheet" type="text/css"/>-->
            <link href="css/iniciar.css" rel="stylesheet" type="text/css"/> 
            <link href="css/botones.css" rel="stylesheet" type="text/css"/>
            <style>
                .mi{
                    text-align: left
                }
                @media (min-width: 576px)
                {
                    .imgf{
                        display: flex;
                        justify-content: center !important;
                    }
                    #titU{
                        text-align: center !important;
                    }
                    .al{
                        text-align: center !important;
                    }
                    .ali{
                        text-align: center !important;
                    }
                    .mi{
                        text-align: center !important;
                    }
                    .fm{
                        text-align: left;
                    }

                }
                @media (max-width: 576px)
                {
                    .asi{
                        display: flex;
                        justify-content: center;
                    }
                }
            </style>
        </head>
        <body>
            <div class="gtco-loader"></div>  
            <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url('https://www.karaidigital.com/images/soul-digital-s2.jpg');">
                <div class="overlay"></div>
                <div class="gtco-container">
                    <div class="d-flex justify-content-center h-100">
                        <div class="card">
                            <div class="card-header">
                                <div class="row"> 
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 asi">
                                        <img src="images/logo.png" alt="" width="90" height="90"/>                                   
                                    </div>
                                    <div class="col-md-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 asi">
                                        <div class="row">.</div>
                                        <div class="row">
                                            <h2 style="color: white">Iniciar Sesión</h2> 
                                        </div>
                                        <div class="row"></div>                                                                
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <!--<form method="post" onsubmit=" return Iniciar()">-->
                                <form method="POST">
                                    <div class="row"> 
                                        <div class="col-md-1" ></div>
                                        <div class="col-md-10">
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input type="text" name="Usuario" id="Usuario" class="form-control" placeholder="Usuario" required="">

                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-1" ></div>
                                        <div class="col-md-10">
                                            <div class="input-group form-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input type="password" name="Password" id="Password" class="form-control" placeholder="Contraseña"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                        </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-xs-5 col-sm-1 col-md-1 col-lg-1 asi"></div>
                                        <div class="col-xs-3 col-sm-5 col-md-5 col-lg-5 ">
                                            <a href="index.php"><div class="text-center"><button class="btn login_btn" type="button">Cancelar</button></div></a>
                                        </div>
                                        <div class="col-xs-3 col-sm-5 col-md-5 col-lg-5" style="align-items: center;">                                    
                                            <div class="text-center"><button class="btn login_btn" type="button" name="login" id="login">Ingresar</button></div>
                                        </div>
                                    </div>
                                    <span id="result"></span>
                                </form>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex justify-content-center links">
                                    ¿Eres nuevo?<a href="Registrarse.php">Resgistrate</a>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-default btn-link " data-toggle="modal" data-target="#myModal">Recuperar usuario y/o contraseña</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="card-header" style="background: #1A2A4D">
                            <div class="row"> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 asi">
                                    <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="60" height="60" ><span></span></a></div>
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 asi">
                                    <div class="row">.</div>
                                    <div class="row">
                                        <h3 style="color: white">Recuperar Contraseña</h3> 
                                    </div>
                                    <div class="row"></div>                                                                
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                                <div class="row"> 
                                    <div class="col-md-1" ></div>
                                    <div class="col-md-10">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                                            </div>
                                            <input type="text" name="Correor" id="Correor" class="form-control" placeholder="Correo" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-md-4">                              
                                    </div>
                                    <div class="col-md-8 asi">
                                        <input type="button" value="Enviar" class="btn float-left login_btn" name="enviarr" id="enviarr" onclick="Restablecer_Contra()">
                                    </div>
                                </div>
                                <span id="result"></span>
                            </form>
                        </div>
                        <div class="card-footer" style="background: #1A2A4D">
                            <div class="d-flex justify-content-center links">
                                ¿Eres nuevo?<a href="Registrarse.php">Resgistrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer id="gtco-footer" role="contentinfo">
            <div class="gtco-container">
                <div class="row row-pb-md">
                    <div class="row col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 imgf">
                            <div class="footer-pad" >
                                <!--<div class="col-md-3 asi" >-->
                                    <div id="fh5co-logo " style=""><a><img src="images/logo.png" width="160" height="160" ><span></span></a></div>
                                <!--</div>-->
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 imgf" >
                            <div  style="text-align: center" >
                                <h3 style="color: white">Unión Peruana del Norte</h3>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-5 col-sm-5 col-xs-12 imgf">
                        <!--<h4 style="color: white">MISIONES</h4>-->
                        <ul class="" >
                            <h4 style="color: white">CAMPOS MISIONEROS</h4>
                            <li><a>APCE - Asociación Peruana Central Este</a></li>
                            <li><a>MICOP - Misión Centro Oeste del Perú</a></li>
                            <li><a>MNO - Misión Nor Oriental </a></li>
                            <li><a>MPN - Misión Peruana del Norte</a></li>
                            <li><a>ANOP - Asociación Nor Pacífico del Perú</a></li>
                        </ul> 
                    </div>
                    <div class="clearfix visible-xs-block"></div>
                    <div class="col-md-3 col-sm-6 col-xs-12 imgf">

                        <ul class="social-network social-circle">
                            <h4 style="color: white">Redes Sociales</h4>
                            <li><a href="https://www.facebook.com/adventistas.upn/" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/adventistasupn/" class="icoInstagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/adventistasupn" class="icoYoutube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="https://twitter.com/AdventistasUPN" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-md-12">
                        <p class="text-center">&copy; 2020 - v1.0 - Derechos reservados por Unión Peruana del Norte.</p>
                        <p class="text-center">Diseñado por <a href="https://www.nexo-consultores.com/" target="_blank"> Nexo Consultores IT SAC</a></p>
                    </div>
                </div>
            </div>
        </footer>
            <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="fas fa-arrow-up"></i></a>
            </div>
        </body>    
       <!-- <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>-->
        <script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
        <script src="js/popper.min.js" type=script>"text/javascript" ></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="plugins/sweetAlert2/sweetalert2.all.min.js" type="text/javascript"></script>
        <script src="js/Logueo/Validacion.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    </html>
<?php } ?>
