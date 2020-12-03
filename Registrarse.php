<html>
    <head>
        <title></title>     
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/animate.css/animate.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">         
        <link href="css/registrarse.css" rel="stylesheet" type="text/css"/>        
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="css/botones.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="row"> 
                            <div class="col-md-4">
                                <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="140" height="140" ><span></span></a></div>
                            </div>
                            <div class="col-md-8">
                                <br><br><br>
                                <h3>Registro del Misionero Digital</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">                       
                        <form method="post">
                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txtnombre" placeholder="Nombres" required="">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txtapellido" placeholder="Apellidos" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txtdireccion" placeholder="Dirección" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txttelefono" placeholder="Telefono" required="">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txtcorreo" placeholder="Correo" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paperclip"></i></span>
                                        </div>
    <!--                                    <input type="text" class="form-control" placeholder="Estado civil">-->
                                        <select class="form-control" id="cbocivil" name="asunto">
                                            <option selected>Estado Civil</option>
                                            <option>Soltero</option>
                                            <option>Casado</option>
                                            <option>Viudo</option>
                                            <option>Divorciado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-2">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txtedad" placeholder="Edad" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <select class="form-control" id="cbotipo" name="asunto">
                                            <option selected>Tipo de Usuario</option>
                                            <option>Lider</option>
                                            <option>Estudiante</option>
                                            <option>Miembro</option>
                                            <option>Pastor</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                                        </div>
                                        <select class="form-control" name="state" id="sel_mision" required="">
                                            <option value="0">Escoga su Misión</option>                                                                                                                          
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-people-carry"></i></span>
                                        </div>
                                        <select class="form-control" name="state" id="sel_distrito">
                                            <option value="0">Distrito Misionero</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-place-of-worship"></i></span>
                                        </div>
                                        <select class="form-control" name="state" id="sel_iglesia">
                                            <option value="0">Iglesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                                            </div>
                                            <select class="form-control" id="cbosexo" name="asunto">
                                                <option selected>Genero</option>
                                                <option>Masculino</option>
                                                <option>Femenino</option>
                                            </select>
                                        </div>
                                    </div>                                                                                                                                                
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                        </div>
                                        <input type="text" class="form-control" id="txtusuario" placeholder="Usuario" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="txtcontraseña" placeholder="Contraseña" required="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" id="txtconfirmarcontra" placeholder="Confirmar Contraseña" required="">
                                    </div>
                                </div>
                                <div class="row"> 

                                </div>
                            </div>
                            <!--</div>-->
                            <div class="card-header">
                                <div class="row"> 
                                    <div class="col-md-3">                              
                                    </div>
                                    <div class="col-md-4">
                                        <a href="index.php"><input  type="button" value="Cancelar" class="btn btn-outline-light btn-lg boton"></a>
                                    </div>
                                    <div class="col-md-5">
                                        
                                        <input id="btn4" type="button" value="Registrarse" onclick="resgitarusuario()" class="btn btn-outline-light btn-lg boton">
                                    </div>
                                </div>                                                             
                            </div>
                            <div class="row">
                                <div class="col-md-12">                                          
                                    <span id="result"></span>                                        
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <footer class="mainfooter" role="contentinfo">
            <div class="footer-middle">
                <div class="container">
                    <br><br>
                    <div class="row">
                        <div class="row col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 imgf">
                                <div class="footer-pad" >
                                    <div class="col-md-3 asi" >
                                        <div id="fh5co-logo " style=""><a><img src="images/logo.png" width="140" height="140" ><span></span></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 imgf" >
                                <div class="footer-pad " style="text-align: center" >
                                    <h3>Unión Peruana del Norte</h3>
                                </div>
                            </div> 
                        </div>
                        <div class="row col-xs-12 col-sm-12 col-md-8 col-lg-8 al" style="padding-bottom: 20px">
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mi" >
                                <div class="footer-pad fm" style="text-align: left;">
                                    <h4>MISIONES</h4>
                                    <ul class="list-unstyled" >
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
                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ali" style="text-align: left">
                                <h4>Redes Sociales</h4>
                                <ul class="social-network social-circle">
                                    <li><a href="https://www.facebook.com/adventistas.upn/" class="icoFacebook" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/adventistasupn/" class="icoInstagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/adventistasupn" class="icoYoutube" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://twitter.com/AdventistasUPN" class="icoTwitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                </ul>				
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 copy">
                            <p class="text-center">&copy; 2020 - v1.0 - Derechos reservados por Unión Peruana del Norte.</p>
                            <p class="text-center">Diseñado por <a href="https://www.nexo-consultores.com/" target="_blank"> Nexo Consultores IT SAC</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <!--<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>-->
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/sweetAlert2/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="js/Logueo/RegistrarUsuario.js" type="text/javascript"></script>
    <!--<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>-->
</html>