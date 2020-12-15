<html>
    <head>
        <title></title>     

        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/animate.css/animate.css" rel="stylesheet" type="text/css"/>       
        <link href="css/registrarse.css" rel="stylesheet" type="text/css"/>   
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/responsive.css">       
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
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="row"> 
                            <div class="col-md-4">
                                <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="140" height="140" ><span></span></a></div>
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    .
                                </div>
                                <div class="row">
                                    <h2 style="color: white">Registro del Misionero Digital</h2> 
                                </div>
                                <div class="row">                                    
                                </div>                                                                
                            </div>
                        </div>
                    </div>
                        
                    
                    <div class="card-body">                       
                        <form method="post" class="formulario" id="formulario">
                            <div class="row"> 
                                <div class="col-md-3 formulario__grupo" id="grupo__nombre">
                                    <div class="input-group form-group formulario__grupo-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input for="nombre" type="text" class="formulario__input form-control" id="txtnombre" placeholder="Nombres" name="nombre">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>                                       
                                    </div>
                                    <p class="formulario__input-error" style="color: white">Colocar un nombre correcto.</p>
                                </div>
                                <div class="col-md-3 formulario__grupo" id="grupo__apellido">
                                    <div class="input-group form-group formulario__grupo-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input for="apellido" type="text" class="formulario__input form-control" id="txtapellido" placeholder="Apellidos" name="apellido">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>                                       
                                    </div>
                                    <p class="formulario__input-error" style="color: white">Colocar un apellido correcto.</p>
                                </div>
                                <div class="col-md-6 formulario__grupo" id="grupo__direccion">
                                    <div class="input-group form-group formulario__grupo-input">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                        </div>
                                        <input for="direccion" type="text" class="formulario__input form-control" id="txtdireccion" placeholder="Direccion" name="direccion">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>                                       
                                    </div>
                                    <p class="formulario__input-error" style="color: white">Colocar tu direccion actual.</p>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-3 formulario__grupo" id="grupo__telefono">
                                    <div class="formulario__grupo-input input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                        </div>
                                        <input for="telefono" type="text" class="form-control formulario__input" id="txttelefono" placeholder="Telefono" name="telefono">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>
                                    </div>
                                    <p class="formulario__input-error" style="color: white">El número de telefono debe ser de 7 a 9 dígitos.</p>
                                </div>
                                <div class="col-md-5 formulario__grupo" id="grupo__correo">
                                    <div class="formulario__grupo-input input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                                        </div>
                                        <input type="email" for="correo" class="form-control formulario__input" id="txtcorreo" placeholder="Correo" name="correo">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>
                                    </div>
                                    <p class="formulario__input-error" style="color: white">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                                </div>
                                <div class="col-md-4">
                                    <div class=" input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-paperclip"></i></span>
                                        </div>
    <!--                                    <input type="text" class="form-control" placeholder="Estado civil">-->
                                        <select class="form-control" id="cbocivil" name="state" required="">
                                            <option value="0">Estado Civil</option>
                                            <option>Soltero</option>
                                            <option>Casado</option>
                                            <option>Viudo</option>
                                            <option>Divorciado</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-3 formulario__grupo" id="grupo__edad">
                                    <div class="formulario__grupo-input input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                        </div>
                                        <input for="edad" type="text" class="form-control formulario__input" id="txtedad" placeholder="Edad" name="edad">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>
                                    </div>
                                    <p class="formulario__input-error" style="color: white">Ingrese una edad valida.</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-users"></i></span>
                                        </div>
                                        <select class="form-control" id="cbotipo" name="state" required="">
                                            <option value="0">Tipo de Usuario</option>
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
                                            <select class="form-control" id="cbosexo" name="state">
                                                <option value="0">Genero</option>
                                                <option>Masculino</option>
                                                <option>Femenino</option>
                                            </select>
                                        </div>
                                    </div>                                                                                                                                                
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-md-4 formulario__grupo" id="grupo__usuario">
                                    <div class=" input-group form-group formulario__grupo-input" > 
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                        </div>
                                        <input for="usuario" type="text" class="form-control formulario__input" id="txtusuario" name="usuario" placeholder="Usuario">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>
                                    </div>
                                    <p class="formulario__input-error" style="color: white">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                                </div>
                                <div class="col-md-4 formulario__grupo" id="grupo__password">
                                    <div class="formulario__grupo-input input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input for="password" type="password" class="form-control formulario__input" id="password" placeholder="Contraseña" name="password">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>
                                    </div>
                                    <p class="formulario__input-error" style="color: white">La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula.
                                        NO puede tener otros símbolos.</p>
                                </div>
                                <div class="col-md-4 formulario__grupo" id="grupo__password2">
                                    <div class="formulario__grupo-input input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                                        </div>
                                        <input for="password2" type="password" class="form-control formulario__input" id="password2" placeholder="Confirmar Contraseña" name="password2">
                                        <i class="formulario__validacion-estado far fa-check-circle"></i>
                                    </div>
                                    <p class="formulario__input-error" style="color: white">Ambas contraseñas deben ser iguales.</p>
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
                                    <div class="col-md-5 formulario__grupo formulario__grupo-btn-enviar">
                                        <input  type="submit" value="Registrarse" onclick="resgitarusuario()" class="btn btn-outline-light btn-lg boton">
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
    <script src="js/popper.min.js" type=script>"text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/sweetAlert2/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="js/Logueo/RegistrarUsuario.js" type="text/javascript"></script>
    <!--<script src="js/jquery-1.12.3.min.js" type="text/javascript"></script>-->
    <!--NUEOVS LINKS--> 
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--<script src="js/Logueo/validarcampos.js" type="text/javascript"></script>-->
</html>