<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
        <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
        <link rel="stylesheet" href="css/bootstrap.min.css">  
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
        <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/animate.css/animate.css" rel="stylesheet" type="text/css"/>                
        <!--<link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>-->
        <link href="css/icomoon.css" rel="stylesheet" type="text/css"/>

        <!--<link href="style.css" rel="stylesheet" type="text/css"/>--> 
        <link href="css/registrarse.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        
        <!--<link rel="stylesheet" href="css/responsive.css">-->       
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
        <!--<div class="card-deck">-->
        <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url('https://algoritmo.digital/blog/wp-content/uploads/2020/01/por-que-mi-empresa-presente-mundo-digital.jpg')">
            <div class="overlay"></div>
            <div class="gtco-container">
                <div class="d-flex justify-content-center h-100">
                    
                    <div class="card">
                        <div class="card-header">
                            <div class="row"> 
                                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 asi">
                                    <img src="images/logo.png" width="100" height="100" >
                                </div>
                                <div class="col-md-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 abs-center">
                                    <div class="row"><h2 style="color: white">Registro del Misionero Digital</h2> </div>                                                                
                                </div>
                            </div>
                        </div>
                        <div class="card-body">                       
                            <form method="post" class="formulario" id="formulario">
                                <div class="row"> 
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 formulario__grupo" id="grupo__nombre">
                                        <div class="input-group form-group formulario__grupo-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input for="nombre" type="text" class="formulario__input form-control" id="txtnombre" placeholder="Nombres" name="nombre">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>                                       
                                        </div>
                                        <p class="formulario__input-error" style="color: white">Colocar un nombre correcto.</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 formulario__grupo" id="grupo__apellido">
                                        <div class="input-group form-group formulario__grupo-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input for="apellido" type="text" class="formulario__input form-control" id="txtapellido" placeholder="Apellidos" name="apellido">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>                                       
                                        </div>
                                        <p class="formulario__input-error" style="color: white">Colocar un apellido correcto.</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6 formulario__grupo" id="grupo__direccion">
                                        <div class="input-group form-group formulario__grupo-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input for="direccion" type="text" class="formulario__input form-control" id="txtdireccion" placeholder="Direccion" name="direccion">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>                                       
                                        </div>
                                        <p class="formulario__input-error" style="color: white">Colocar tu dirección actual.</p>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 formulario__grupo" id="grupo__telefono">
                                        <div class="formulario__grupo-input input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
                                            </div>
                                            <input for="telefono" type="text" class="form-control formulario__input" id="txttelefono" placeholder="Telefono" name="telefono">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>
                                        </div>
                                        <p class="formulario__input-error" style="color: white">El número de teléfono debe ser de 7 a 9 dígitos.</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6  formulario__grupo" id="grupo__correo">
                                        <div class="formulario__grupo-input input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope-open-text"></i></span>
                                            </div>
                                            <input type="email" for="correo" class="form-control formulario__input" id="txtcorreo" placeholder="Correo" name="correo">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>
                                        </div>
                                        <p class="formulario__input-error" style="color: white">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                                        <div class=" input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-paperclip"></i></span>
                                            </div>
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
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3 formulario__grupo" id="grupo__edad">
                                        <div class="formulario__grupo-input input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input for="edad" type="text" class="form-control formulario__input" id="txtedad" placeholder="Edad" name="edad">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>
                                        </div>
                                        <p class="formulario__input-error" style="color: white">Ingrese una edad valida.</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-users"></i></span>
                                            </div>
                                            <select class="form-control" id="cbotipo" name="state" required="">
                                                <option value="0">Tipo de Usuario</option>
                                                <option>Líder</option>
                                                <option>Estudiante</option>
                                                <option>Miembro</option>
                                                <option>Pastor</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-6 col-lg-6">
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
                                    <div class="col-xs-4 col-sm-4 col-md-5 col-lg-5">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-people-carry"></i></span>
                                            </div>
                                            <select class="form-control" name="state" id="sel_distrito">
                                                <option value="0">Distrito Misionero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <div class="input-group form-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-place-of-worship"></i></span>
                                            </div>
                                            <select class="form-control" name="state" id="sel_iglesia">
                                                <option value="0">Iglesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">
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
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 formulario__grupo" id="grupo__usuario">
                                        <div class=" input-group form-group formulario__grupo-input" > 
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-user-circle"></i></span>
                                            </div>
                                            <input for="usuario" type="text" class="form-control formulario__input" id="txtusuario" name="usuario" placeholder="Usuario">
                                            <i class="formulario__validacion-estado far fa-check-circle"></i>
                                        </div>
                                        <p class="formulario__input-error" style="color: white">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 formulario__grupo" id="grupo__password">
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
                                    <div class="col-xs-4 col-sm-4 col-md-3 col-lg-4 formulario__grupo" id="grupo__password2">
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
                                <div class="card-footer">
                                    <div class="row"> 
                                        <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2">                              
                                        </div>
                                        <div class="col-xs-5 col-sm-5 col-md-3 col-lg-4">
                                            <a href="index.php"><div class="text-center"><button class="btn login_btn btn-lg" type="button">Cancelar</button></div></a>
                                            <!--<a href="index.php"><input  type="button" value="Cancelar" class=" btn float-left login_btn btn-lg boton"></a>-->
                                        </div>
                                        <div class="col-xs-5 col-sm-4 col-md-5 col-lg-5 asi formulario__grupo formulario__grupo-btn-enviar">
                                            <input  type="submit" value="Registrarse" onclick="resgitarusuario()" class="btn float-left login_btn btn-lg boton">
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
                        <!--</div>-->
                </div>
            </div>
        </header>
        <footer id="gtco-footer" role="contentinfo">
                <div class="gtco-container">
                    <div class="row row-pb-md">
                        <div class="row col-xs-12 col-sm-12 col-md-4 col-lg-4" style="padding-bottom: 20px">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 imgf">
                                <div class="footer-pad" >
                                    <div class="col-md-3 asi" >
                                        <div id="fh5co-logo " style=""><a><img src="images/logo.png" width="140" height="140" ><span></span></a></div>
                                    </div>
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
                                <li><a href="#">APCE - Asociación Peruana Central Este</a></li>
                                <li><a href="#">MICOP - Misión Centro Oeste del Perú</a></li>
                                <li><a href="#">MNO - Misión Nor Oriental </a></li>
                                <li><a href="#">MPN - Misión Peruana del Norte</a></li>
                                <li><a href="#">ANOP - Asociación Nor Pacífico del Perú</a></li>
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
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/popper.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="plugins/sweetAlert2/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="js/Logueo/RegistrarUsuario.js" type="text/javascript"></script>
    <!--NUEOVS LINKS--> 
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/jquery.waypoints.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
</html>