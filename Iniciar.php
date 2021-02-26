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
    <html style="background-image:url('images/fondo_1.jpeg');height: 100%;background-size: 100% 100%;">
        <head>
            <title></title>
            <link rel="stylesheet" type="text/css" media="screen" href="Vista/css/fontAdventSans.css">
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
                .imageindex{
                    width: 35%;
                }
                .btn-index:hover{
                    color: #fff;
                    background: #214d56 !important;
                    text-decoration: none !important;
                }
                .btn-index {
                    background: #3e8391;
                    color: #fff;
                    margin: 8px;
                }
                @media (min-width: 992px){
                    .colin-md-7-7{
                        width: 100%!important;
                    }
                    .colin-md-6-7{
                        width: calc((100%/7)*6)!important;
                    }
                    .colin-md-5-7{
                        width: calc((100%/7)*5)!important;
                    }
                    .colin-md-4-7{
                        width: calc((100%/7)*4)!important;
                    }
                    .colin-md-3-7{
                        width: calc((100%/7)*3)!important;
                    }
                    .colin-md-2-7{
                        width: calc((100%/7)*2)!important;
                    }
                    .colin-md-1-7{
                        width: calc((100%/7))!important;
                        display: block !important;
                    }
                    .colini-md-1{
                        width: calc((100%/10)*1) !important;
                    }
                    .colini-md-2{
                        width: calc((100%/10)*2) !important;
                    }
                    .colini-md-3{
                        width: calc((100%/10)*3) !important;
                    }
                    .colini-md-4{
                        width: calc((100%/10)*4) !important;
                    }
                    .colini-md-5{
                        width: calc((100%/10)*5) !important;
                    }
                    .colini-md-6{
                        width: calc((100%/10)*6) !important;
                    }
                    .colini-md-7{
                        width: calc((100%/10)*7) !important;
                    }
                    .colini-md-8{
                        width: calc((100%/10)*8) !important;
                    }
                    .colini-md-9{
                        width: calc((100%/10)*9) !important;
                    }
                    .colini-md-10{
                        width: 100% !important;
                    }
                }
                @media (max-width:600px) {
                    .opcpan{
                        height: 85% !important;
                    }
                    .opcpan2{
                        height: 15% !important;
                    }
                    .hidenin-xs{
                        display:  none !important;
                    }
                }
                @media (min-width:601px) and (max-width:991px) {
                    .imageindex{
                        width: 40%;
                    }
                    .hidenin-xs{
                        display:  none !important;
                    }
                }
                @media (min-width: 1200px){
                    .colin-lg-7-7{
                        width: 100% !important;
                    }
                    .colin-lg-6-7{
                        width: calc((100%/7)*6) !important;
                    }
                    .colin-lg-5-7{
                        width: calc((100%/7)*5) !important;
                    }
                    .colin-lg-4-7{
                        width: calc((100%/7)*4) !important;
                        display: block !important;
                    }
                    .colin-lg-3-7{
                        width: calc((100%/7)*3) !important;
                    }
                    .colin-lg-2-7{
                        width: calc((100%/7)*2)!important;
                    }
                    .colin-lg-1-7{
                        width: calc((100%/7)) !important;
                    }
                    .colini-lg-1{
                        width: calc((100%/10)*1) !important;
                    }
                    .colini-lg-2{
                        width: calc((100%/10)*2) !important;
                    }
                    .colini-lg-3{
                        width: calc((100%/10)*3) !important;
                    }
                    .colini-lg-4{
                        width: calc((100%/10)*4) !important;
                    }
                    .colini-lg-5{
                        width: calc((100%/10)*5) !important;
                    }
                    .colini-lg-6{
                        width: calc((100%/10)*6) !important;
                    }
                    .colini-lg-7{
                        width: calc((100%/10)*7) !important;
                    }
                    .colini-lg-8{
                        width: calc((100%/10)*8) !important;
                    }
                    .colini-lg-9{
                        width: calc((100%/10)*9) !important;
                    }
                    .colini-lg-10{
                        width: 100% !important;
                    }
                }
                .colin-xs-7-7{
                    width: 100%;
                }
                .colin-xs-6-7{
                    width: calc((100%/7)*6);
                }
                .colin-xs-5-7{
                    width: calc((100%/7)*5);
                }
                .colin-xs-4-7{
                    width: calc((100%/7)*4);
                }
                .colin-xs-3-7{
                    width: calc((100%/7)*3);
                }
                .colin-xs-2-7{
                    width: calc((100%/7)*2);
                }
                .colin-xs-1-7{
                    width: calc((100%/7));
                }
                .colini-xs-1{
                    width: calc((100%/10)*1) ;
                }
                .colini-xs-2{
                    width: calc((100%/10)*2) ;
                }
                .colini-xs-3{
                    width: calc((100%/10)*3) ;
                }
                .colini-xs-4{
                    width: calc((100%/10)*4) ;
                }
                .colini-xs-5{
                    width: calc((100%/10)*5);
                }
                .colini-xs-6{
                    width: calc((100%/10)*6) ;
                }
                .colini-xs-7{
                    width: calc((100%/10)*7);
                }
                .colini-xs-8{
                    width: calc((100%/10)*8);
                    display: block !important;
                }
                .colini-xs-9{
                    width: calc((100%/10)*9);
                }
                .colini-xs-10{
                    width: 100% !important;
                }

                .tamfo{
                    width: 50%;
                }
                .opcpan{
                    height: 80%;
                }
                .opcpan2{
                    height: 20%;
                }
                .input-group-prepend span {
                    width: auto;
                    background-color: #ffffff;
                    color: #2f557f;
                    border: 0 !important;
                }
                
            </style>
        </head>
        <body style="height: 100vh;background: none;">
            <div class="gtco-loader"></div>  
            <div class="colin-xs-7-7 colin-md-7-7 colin-lg-7-7" style="display: flex;height: 100vh;align-items: center;justify-content: center;text-align: center;">
                <div style="height: 100%;">
                    <div class="row opcpan" style="margin-left: 0px;margin-right: 0px;display: flex;justify-content: center;">
                        <div style="display: flex;justify-content: center;">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row" style="display: flex;justify-content: center;padding-top: 10px;"> 
                                        <div  style="height: 80px;width: 80px;border-radius: 40px;background: #DF9B45;justify-content: center;display: flex;align-items: center;">
                                            <img src="images/logo.png" alt="" width="50px" height="50px"/>                                   
                                        </div>
                                        <div class="col-12" style="text-align: center;margin-top: 10px;">
                                            <label style="font-size: 16px;color: white;font-weight: 600;"> Iniciar Sesión</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" style="padding-top: 0px;padding-bottom: 10px;">
                                    <!--<form method="post" onsubmit=" return Iniciar()">-->
                                    <form method="POST" style="margin-bottom:0px;">
                                        <div class="row"> 
                                            <div class="col-md-1" ></div>
                                            <div class="col-md-10">
                                                <div class="input-group form-group" style="border: solid 1px;border-radius: .25rem;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="padding: .375rem .45rem .375rem .75rem;"><i class="fas fa-user"></i></span>
                                                    </div>
                                                    <input type="text" name="Usuario" id="Usuario" class="form-control" placeholder="Usuario" required="" style="border: 0px solid #ced4da;">

                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="col-md-1" ></div>
                                            <div class="col-md-10">
                                                <div class="input-group form-group" style="border: solid 1px;border-radius: .25rem;">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" style="padding: .375rem .45rem .375rem .75rem;"><i class="fas fa-lock"></i></span>
                                                    </div>
                                                    <input type="password" name="Password" id="Password" class="form-control" placeholder="Contraseña"  required="" style="border: 0px solid #ced4da;">
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                            </div>
                                        </div>
                                        <div class="row"> 
                                            <div class="col-xs-5 col-sm-1 col-md-1 col-lg-1 asi"></div>
                                            <div class="col-xs-3 col-sm-5 col-md-5 col-lg-5 ">
                                                <a href="index.php"><div class="text-center"><button class="btn btn-index login_btn" type="button">Cancelar</button></div></a>
                                            </div>
                                            <div class="col-xs-3 col-sm-5 col-md-5 col-lg-5" style="align-items: center;">                                    
                                                <div class="text-center"><button class="btn btn-index login_btn" type="button" name="login" id="login">Ingresar</button></div>
                                            </div>
                                        </div>
                                        <span id="result"></span>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="d-flex justify-content-center links">
                                        ¿Eres nuevo?<a class="linkre" href="Registrarse.php" style="border-bottom: 0px solid rgba(255, 255, 255, 0.2);">Regístrate</a>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-default btn-link " data-toggle="modal" data-target="#myModal" style="color: yellow;">Recuperar usuario y/o contraseña</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row opcpan2" style="margin-left: 0px;margin-right: 0px;background: #2f557f61">
                        <div class="colini-xs-5 colini-md-3 colini-lg-3" style="display: flex;align-items: center;padding-left: 15px;padding-top: 20px;justify-content: center;;">
                            <div class="tamfo" style="display: inline-table;text-align: center;width: 50%;">
                                <img src="images/img_logo/adventist-es--white.png" width="100%">
                                <h5 style="color: white;font-size: 12px;font-weight: 600">UNIÓN PERUANA DEL NORTE</h5>
                            </div>
                        </div>
                        <div class="hidenin-xs colini-md-4 colini-lg-4" style="display: flex;align-items: center;justify-content: center;padding-top: 20px;">
                            <div class="" style="display: inline-table;text-align: center;">
                                <label style="color: white;font-size: 12px;">Asociación Peruana Central Este - Asociación Nor Pacifico del Perú</label>
                                <label style="color: white;font-size: 12px;">Mision Centro Oeste del Peru - Misión Peruna del Norte - Misión Nor Oriental</label>
                            </div>
                        </div>
                        <div class="colini-xs-5 colini-md-3 colini-lg-3" style="display: flex;align-items: center;justify-content: center;padding-right: 15px;text-align: right;padding-top: 20px;">
                            <div  style="display: flex;align-items: center;justify-content: center;">
                                <div style="display: inline-table;text-align: right;">
                                    <label style="font-size: 18px;">
                                        <a href="https://www.facebook.com/adventistas.upn/" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/adventistasupn/" class="icoInstagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.youtube.com/adventistasupn" class="icoYoutube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                        <a href="https://twitter.com/AdventistasUPN" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>AdventistasUPN
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                ¿Eres nuevo?<a class="linkre" style="border-bottom: 0px solid rgba(255, 255, 255, 0.2);" href="Registrarse.php">Regístrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
