<html>
    <head>
        <title></title>     
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!--<link href="css/iniciar.css" rel="stylesheet" type="text/css"/>-->  
        <link href="css/registrarse.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">

            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="row"> 
                            <div class="col-md-4">
                                <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="60" height="60" ><span></span></a></div>
                            </div>
                            <div class="col-md-8">
                                <br>
                                <h3>Registro del Misionero Digital</h3>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">                       
                        <form>
                            <div class="row"> 
                                <div class="col-md-6">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Nombre y Apellidos">
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
                                <div class="col-md-4">
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
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-place-of-worship"></i></span>
                                        </div>
                                        <select class="form-control" name="asunto">
                                            <option selected>Selecciona tu iglesia</option>
                                            <option>Iglesia 1</option>
                                            <option>Iglesia 2</option>
                                            <option>Iglesia 3</option>
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
                                        <input class="form-control" type="text" placeholder="Misión" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group form-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-map"></i></span>
                                        </div>
                                        <input class="form-control" type="text" placeholder="Distrito Misionero" readonly>
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
                                    <a href="index.php"><input type="submit" value="Cancelar" class="btn btn-outline-light btn-lg boton"></a>
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
    </div>
    <footer id="fh5co-footer" >
        <div class="container">
            <div class="row row-pb-md">                         
                <div class="col-md-1">
                    <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="60" height="60" ><span></span></a></div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3> DIVISIÓN SUDAMERICANA </h3>
                    <ul class="fh5co-footer-links">
                        <h3>UNIONES</h3>
                        <li><a href="#"> Unión Peruana del Norte </a></li>
                        <li><a href="#"> Unión Peruana del Sur </a></li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
                    <h3> MISIÓN</h3>
                    <ul class="fh5co-footer-links">
                        <li><a href="#"> APCE </a></li>
                        <li><a href="#"> MICOP </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>