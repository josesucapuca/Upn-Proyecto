<html>
    <head>
        <title></title>     
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="css/iniciar.css" rel="stylesheet" type="text/css"/>       
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <div class="row"> 
                            <div class="col-md-3">
                                <div id="fh5co-logo"><a href="index.php"><img src="images/logo.png" width="60" height="60" ><span></span></a></div>
                            </div>
                            <div class="col-md-8">
                                <br>
                                <h3>Iniciar Sesión</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Usuario">

                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Contraseña">
                            </div>
                            <div class="row"> 
                                <div class="col-md-4">                              
                                </div>
                                <div class="col-md-8">
                                    <input type="submit" value="Ingresar" class="btn float-left login_btn ">
                                </div>
                            </div>
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