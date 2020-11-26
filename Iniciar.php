
<?php
session_start();
if (isset($_SESSION['Usuario'])) {
    header("location:welcome.php");
}
?>

<html>
    <head>
        <title></title>     
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="css/iniciar.css" rel="stylesheet" type="text/css"/>       
        <link href="css/botones.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="row"> 
                            <div class="col-md-3">
                                <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="90" height="90" ><span></span></a></div>
                            </div>
                            <div class="col-md-9">
                                <br>
                                <h3>Iniciar Sesión</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!--<form method="post" onsubmit=" return Iniciar()">-->
                        <form method="post">
                            <div class="row"> 
                                <div class="col-md-1" ></div>
                                <div class="col-md-10">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" name="Usuario" id="Usuario" class="form-control" placeholder="Usuario" >

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
                                <div class="col-md-4">                              
                                </div>
                                <div class="col-md-8">
                                    <input type="button" value="Ingresar" class="btn float-left login_btn " name="login" id="login">
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
                            <a href="#">Recuperar usuario y/o contraseña</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mainfooter" role="contentinfo">
            <div class="footer-middle">
                <div class="container">
                    <br><br>
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="footer-pad">
                                <div class="col-md-3">
                                    <div id="fh5co-logo"><a><img src="images/logo.png" width="140" height="140" ><span></span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <div class="footer-pad">
                                <h4>UNIONES</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">Unión Peruana del Norte</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-pad">
                                <h4>MISIONES</h4>
                                <ul class="list-unstyled">
                                    <li><a href="#">APCE - Asociación Peruana Central Este</a></li>
                                    <li><a href="#">MICOP - Misión Centro Oeste del Perú</a></li>
                                    <li><a href="#">MNO - Misión Norte Oriental </a></li>
                                    <li><a href="#">MPN - Misión Peruana del Norte</a></li>
                                    <li><a href="#">ANOP - Asociacioni Norte Pacífico del Perú</a></li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <h4>Redes Sociales</h4>
                            <ul class="social-network social-circle">
                                <li><a href="https://www.facebook.com/adventistas.upn/" class="icoFacebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/adventistasupn/" class="icoInstagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/adventistasupn" class="icoYoutube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="https://twitter.com/AdventistasUPN" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            </ul>				
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 copy">
                            <p class="text-center">&copy; 2020 - v1.0 - Derechos reservados por Unión Peruana del Norte.</p>
                            <p class="text-center">Diseñado por <a href="https://www.nexo-consultores.com/" target="_blank"> Nexo Consultores IT SAC</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>
    <script src="js/Logueo/Iniciar.js" type="text/javascript"></script>
</html>
