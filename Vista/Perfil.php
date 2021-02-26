<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?><!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/fond1.png');background-size: 100% auto;">
        <head>
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title>ceoadventista.org</title>
            <meta charset="UTF-8">
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
            <!--NUEVO-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
            <!--<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">-->
            <link href="../plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
            <link href="../plugins/animate.css/animate.css" rel="stylesheet" type="text/css"/>                
            <link href="../css/icomoon.css" rel="stylesheet" type="text/css"/> 
            <link href="../css/perfilstyle.css" rel="stylesheet" type="text/css"/>

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
                .texto{
                    color: white;
                }
                .abs-center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    /*min-height: 16vh;*/
                }
                .colin-xs-7-7{
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
            </style>
        </head>
        <body class="conta bod" style="background: url('../images/fondo_Principal.png');background-size: 100% auto;">
            <input id="PersonaUsuario" type="hidden" value="<?php echo utf8_encode($_SESSION["Persona"]) ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <!-- HEADER -->
                    <div id="header" style="background: none;">
                        <div id="logo-group">
                            <!-- PLACE YOUR LOGO HERE -->
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="SmartAdmin" > </span>
                        </div>
                        <div class="pull-right">

                            <!-- Top menu profile link : this shows only when top menu is active -->
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                
                                <li class="">
                                    <a href="#" class="btn btn-circle btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                        <i class="fa fa-sort-desc"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        
                                        <li>
                                            <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesión"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- logout button -->
                            <div id="" class="transparent pull-right">
                                <ul id="" class="header-dropdown-list ">
                                   
                                    <li class="volver" >
                                        <a id="volver" href="Principal.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-home "></i> Inicio
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#" class="btn btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                            <i class="fa fa-sort-desc"></i>
                                        </a>
                                        <ul class="dropdown-menu pull-right">
                                            
                                            <li>
                                                <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesión"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- fullscreen button -->
                        </div>
                    </div>
                    <div id="myModal" class="modal fade" role="dialog" s>
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content"  style="background: #34495E">
                                <div class="card-header">
                                    <div class="row"> 
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 asi">
                                            <img src="../images/logo.png" width="60" height="60" >
                                        </div>
                                        <div class="col-md-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 abs-center">
                                            <div class="row"><h2 style="color: white">Cambiar contraseña</h2> </div>                                                                
                                        </div>
                                    </div>
                                </div
                                <div class="card-body">
                                 
                                    <form action="" class="formulario" id="formulario">
                                        <input id="id_Usuario" type="hidden" value="<?php echo $_SESSION["id_Usuario"] ?>">
                                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario__grupo " id="grupo__usuario">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-lock texto"></i> <label class="input-group-text texto ">Contraseña actual</label>
                                            </div>
                                            <div class="formulario__grupo" id="grupo__usuario">
                                                <div class="formulario__grupo-input">
                                                    <input type="password" class="formulario__input" name="oldpassword" id="oldpassword">
                                                    <i class="formulario__validacion-estado far fa-check-circle"></i>
                                                </div>
                                                <p class="formulario__input-error" style="color: white">Dígite una contraseña valida.</p>
                                            </div>
                                        </div>
                                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario__grupo" id="grupo__password">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key texto"></i> <label class="input-group-text texto">Nueva Contraseña</label>
                                            </div>
                                            <div class="formulario__grupo" id="grupo__password">
                                                <div class="formulario__grupo-input">
                                                    <input type="password" class="formulario__input" name="password" id="password">
                                                    <i class="formulario__validacion-estado far fa-check-circle"></i>
                                                </div>
                                                <p class="formulario__input-error" style="color: white">La contraseña debe tener entre 8 y 16 caracteres, al menos un dígito, al menos una minúscula y al menos una mayúscula. 
                                                    No puede tener otros símbolos.</p>
                                            </div>
                                        </div>
                                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 formulario__grupo" id="grupo__password2">
                                            <div class="input-group-prepend">
                                                <i class="fas fa-key texto"></i> <label class="input-group-text texto">Confirmar Contraseña</label>
                                            </div>
                                            <div class="formulario__grupo" id="grupo__password2">
                                                <div class="formulario__grupo-input">
                                                    <input type="password" class="formulario__input" name="password2" id="password2">
                                                    <i class="formulario__validacion-estado far fa-check-circle"></i>
                                                </div>
                                                <p class="formulario__input-error" style="color: white">Ambas contraseñas deben ser iguales.</p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                        </div>
                                        
                                    </form>
                                   
                                   
                                    <br>
                                    <div class="card-footer">
                                        <div class="row">                                            
                                            <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi"></div>
                                            <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                                <button type="submit" onclick="CompararContra()" class="btn btn-warning">Actualizar</button>
                                            </div>
                                            <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button>
                                            </div>                                            
                                        </div>
                                        <br>
                                        <span id="result"></span>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 asi">
                    </div>
                    <div class="col-md-8 col-xs-8 col-sm-8 col-md-8 col-lg-8 abs-center" style="margin-bottom: 40px">
                        <div class="row"><h2 style="color: white"><i class="fa fa-edit"></i> Datos Generales</h2> </div>                                                                
                    </div>
                </div>
                <div class="row">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 profile-pic abs-center">
                                <img src="../images/iconos/user2.png" style="width: 30%;">                                                     
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 abs-center">
                                <h1 style="color: white"><?php echo  utf8_encode($_SESSION["Persona"]); ?> <span class="semi-bold"></span>
                                    <br>
                                    <small style="color: white" class="abs-center"><?php echo utf8_encode($_SESSION["Usuario"]) ?></small></h1>
                                <br>                  
                            </div>                                                 
                        </div>
                </div>
                <main>
                    <form action="" class="formulario" id="formulario">
                        <input id="id_Persona" type="hidden" value="<?php echo $_SESSION["id_Persona"] ?>">
                        <div class="formulario__grupo" id="grupo__password">
                            <i class="fas fa-key" style="color: white"></i> <label for="password" class="input-group-text texto "> Contraseña:</label>
                            <div class="formulario__grupo-input">
                                <input data-toggle="modal" data-target="#myModal" placeholder="Password field" type="password" class="formulario__input" value="<?php echo $_SESSION["Contra"]; ?>">
                               <!--<input type="text" class="formulario__input" name="nombre" id="edinombre" placeholder="Nombres">-->
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">este campo no puede estar vacio.</p>
                        </div>
                        <div class="formulario__grupo" id="grupo__nombre">
                            <i class="fas fa-user" style="color: white"></i> <label for="nombre" class="input-group-text texto "> Nombres:</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="nombre" id="edinombre" placeholder="Nombres" value="<?php echo utf8_encode($_SESSION["No_Persona"]) ?>">
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">Colocar los nombres de manera correcta.</p>
                        </div>
                        <div class="formulario__grupo" id="grupo__apellido">
                            <i class="fas fa-user" style="color: white"></i> <label for="apellido" class="input-group-text texto "> Apellidos:</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="apellido" id="ediape" placeholder="Apellidos" value="<?php echo utf8_encode($_SESSION["AP_Persona"]) ?>">
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">Colocar los apellidos de manera correcta.</p>
                        </div>
                        <div class="formulario__grupo" id="grupo__direccion">
                            <i class="fas fa-map-marker-alt" style="color: white"></i> <label for="direccion" class="input-group-text texto "> Dirección:</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="direccion" id="edidireccion" placeholder="Dirección" value="<?php echo utf8_encode($_SESSION["dire_Persona"]) ?>">
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">Colocar tu dirección actual.</p>
                        </div>
                        <div class="formulario__grupo" id="grupo__telefono">
                            <i class="fas fa-mobile-alt" style="color: white"></i> <label for="telefono" class="input-group-text texto "> Teléfono:</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="telefono" id="editelefono" placeholder="Teléfono" value="<?php echo utf8_encode($_SESSION["tele_Persona"]) ?>">
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">El número de teléfono/celular debe ser de 7 a 9 dígitos.</p>
                        </div>
                        <div class="formulario__grupo" id="grupo__correo">
                            <i class="fas fa-envelope-open-text" style="color: white"></i> <label for="correo" class="input-group-text texto "> Correo:</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="correo" id="edicorreo" placeholder="Correo" value="<?php echo utf8_encode($_SESSION["correo_Persona"]) ?>">
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">El correo solo puede contener letras, números, puntos, guiones y guion bajo.</p>
                        </div>
                        <div class="formulario__grupo">
                            <i class="fas fa-paperclip" style="color: white"></i> <label for="cbocivil" class="input-group-text texto "> Estado Civil:</label>
                            <div class="formulario__grupo-input">                                              
                                <select class="form-control" id="cbocivil" name="asunto" value="">
                                    <option selected><?php echo utf8_encode($_SESSION["Es_Civil_Persona"]) ?></option>
                                    <option>Soltero</option>
                                    <option>Casado</option>
                                    <option>Viudo</option>
                                    <option>Divorciado</option>
                                </select>
                            </div>
                        </div>
                        <div class="formulario__grupo" id="grupo__edad">
                            <i class="fas fa-calendar-alt" style="color: white"></i> <label for="edad" class="input-group-text texto "> Edad:</label>
                            <div class="formulario__grupo-input">
                                <input type="text" class="formulario__input" name="edad" id="ediedad" placeholder="Edad" value="<?php echo $_SESSION["Edad_Persona"] ?>">
                                <i class="formulario__validacion-estado fas fa-check-circle"></i>
                            </div>
                            <p class="formulario__input-error">Ingrese una edad valida.</p>
                        </div>
                        <div class="formulario__grupo">
                            <i class="fas fa-users" style="color: white"></i> <label for="cbotipo" class="input-group-text texto "> Tipo de Usuario:</label>
                            <div class="formulario__grupo-input">                                              
                                <select class="form-control" id="cbotipo" name="state" required="" value="">
                                    <option value="<?php echo $_SESSION["Ti_Persona"] ?>"><?php echo utf8_encode ($_SESSION["Ti_Persona"]) ?></option>
                                    <option>Líder</option>
                                    <option>Estudiante</option>
                                    <option>Miembro</option>
                                    <option>Pastor</option>
                                </select>
                            </div>
                        </div>
                        <div class="formulario__grupo">
                            <i class="fas fa-users" style="color: white"></i> <label for="cbosexo" class="input-group-text texto "> Género:</label>
                            <div class="formulario__grupo-input">                                              
                                <select class="form-control" id="cbosexo" name="asunto" value="">
                                    <option selected><?php echo $_SESSION["Se_Persona"] ?></option>
                                    <option>Masculino</option>
                                    <option>Femenino</option>
                                </select>
                            </div>
                        </div>
                        <div class="formulario__grupo">
                            <i class="fas fa-map" style="color: white"></i> <label for="sel_distrito" class="input-group-text texto "> Escoja su Misión:</label>
                            <div class="formulario__grupo-input">                                              
                                <select class="form-control" name="state" id="sel_mision" >
                                    <option value="<?php echo utf8_encode ($_SESSION["id_Mision"]) ?>" id="misi" ><?php echo utf8_encode($_SESSION["No_Mision"]) ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="formulario__grupo">
                            <i class="fas fa-people-carry" style="color: white"></i> <label for="sel_distrito" class="input-group-text texto "> Distrito Misionero:</label>
                            <div class="formulario__grupo-input">                                              
                                <select class="form-control" name="state" id="sel_distrito" value="" >
                                    <option value="<?php echo utf8_encode ($_SESSION["id_Distrito"]) ?>" id="distri"><a><?php echo utf8_encode($_SESSION["No_Distrito"]) ?></a></option>
                                </select>
                            </div>
                        </div>
                        <div class="formulario__grupo">
                            <i class="fas fa-place-of-worship" style="color: white"></i> <label for="sel_iglesia" class="input-group-text texto "> Iglesia:</label>
                            <div class="formulario__grupo-input">                                              
                                <select class="form-control" name="state" id="sel_iglesia" value="" >
                                    <option value="<?php echo utf8_encode($_SESSION["id_Iglesia"]) ?>" id="igle"><?php echo utf8_encode($_SESSION["Nombre_Iglesia"]) ?></option>
                                </select>
                            </div>
                        </div>                                              
                    </form>
                </main>
                <br>
                <div class="row">                                            
                    <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi"></div>
                    <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                        <button type="submit" onclick="ActualizarDatos()" class="btn btn-warning">Actualizar</button>
                    </div>
                    <div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                        <a href="Principal.php"><button type="button" class="btn btn-default" data-dismiss="modal">cancelar</button></a>
                    </div>                                            
                </div>
                <br>
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                        <span id="resultado"></span> 
                    </div> 
                                 
        <br>
    </div>
    <!--FORMULARIO-->
    <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <script src="../js/popper.min.js" type="text/javascript"></script>
    <script src="../plugins/sweetAlert2/sweetalert2.all.min.js" type="text/javascript"></script>
    <script src="../js/Logueo/perfilusuario.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--FINAL DEL FORMULARIO-->           
    <!-- Cerrar sesion-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>          
    <script src="js/app.config.js"></script>
    <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/notification/SmartNotification.min.js"></script>
    <script src="js/app.min.js"></script>
    <!--FINAL DE CERRAR SESION--> 
    <!--tabla-->
    <!--            <script src="js/plugin/select2/select2.min.js"></script>
    <script src="js/plugin/x-editable/moment.min.js"></script>
    <script src="js/plugin/x-editable/jquery.mockjax.min.js"></script>
    <script src="js/plugin/x-editable/x-editable.min.js"></script>-->           
    <!--fin de la tabla-->
    </body>
    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>