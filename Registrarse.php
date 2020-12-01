<html>
    <head>
        <title></title>     
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!--<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->

        <link href="css/footer.css" rel="stylesheet" type="text/css"/>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
        <link href="css/registrarse.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
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
                        <form method="post" action="index.php">
                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombres">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Apellidos">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Dirección">
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Telefono">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Correo">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paperclip"></i></span>
                                        </div>
    <!--                                    <input type="text" class="form-control" placeholder="Estado civil">-->
                                        <select class="form-control" name="asunto">
                                            <option selected>Estado Civil</option>
                                            <option>Soltero</option>
                                            <option>Casado</option>
                                            <option>Viudo</option>
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
                                        <input type="text" class="form-control" placeholder="Edad">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <select class="form-control" name="asunto">
                                            <option selected>Tipo de Usuario</option>
                                            <option>Lider</option>
                                            <option>Estudiante</option>
                                            <option>Miembro</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                                        </div>
                                        <select class="form-control" name="state" id="sel_mision">
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
                                        <div class="input-group-prepend">
                                            <!--<span class="input-group-text"><i class="fas fa-user"></i></span>-->
                                            <!--<legend class="col-form-label  pt-0">Sexo</legend>-->
                                        </div>

 <!--<input type="text" class="form-control" placeholder="Distrito Misionero"><legend class="col-form-label col-sm-2 pt-0">Radios</legend>-->
                                        <div class="col-sm-10">

                                            <div class="form-check">

                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label letracolor" for="gridRadios1">
                                                    Femenino
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                <label class="form-check-label letracolor" for="gridRadios2">
                                                    Masculino
                                                </label>
                                            </div>
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
                                        <input type="text" class="form-control" placeholder="Usuario">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input type="password" class="form-control" placeholder="Confirmar Contraseña">
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
                                        <a href="#"><input type="submit" value="Cancelar" class="btn btn-outline-light btn-lg boton"></a>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="submit" value="Registrarse" class="btn btn-outline-light btn-lg boton ">
                                    </div>
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
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <!--<script src="js/Logueo/Combo.js" type="text/javascript"></script>-->
    <!--<script src="js/Logueo/Iniciar.js" type="text/javascript"></script>-->
    <script src="js/Logueo/RegistrarUsuario.js" type="text/javascript"></script>
    <!--<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>-->
</html>