<?php
session_start();
if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html lang="es" style="background-image: url('../images/diariodevocional/fodomatutina4.jpg');">
        <head>
            <title>ceoadventista.org </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href=".../images/iconoweb.png" type="image/x-icon">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
            <!--NUEVO-->
            <link href="../css/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
            <link href="../css/icomoon.css" rel="stylesheet" type="text/css"/>
            <link href="../plugins/animate.css/animate.css" rel="stylesheet" type="text/css"/>
            <link href="../plugins/sweetAlert2/sweetalert2.min.css" rel="stylesheet" type="text/css"/>
            <style>
                @media(max-width:750px){
                    .sortable-grid{
                        height: auto;
                    }
                    #frameVer{
                        height: 50vh !important;                      
                    }
                }
                /*pantalla normal*/
                @media only screen and (min-width: 500px) and (max-width: 1600px){
                    .conta2 {
                        width: 100%;
                        margin-left: auto;
                        margin-right: auto;
                        height: 100%;
                    }
                    hr {
                        margin-top: 60rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }
                }
                @media screen and (max-width: 900px) {
                    .conta2 {
                        height: 804px;
                    }
                    hr {
                        margin-top: 75rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }
                }
                /*modo celular*/ 
                @media screen and (max-width: 600px) {
                    .conta2 {
                        height: 767px;
                    }
                    hr {
                        margin-top: 60rem;
                        margin-bottom: 1rem;
                        border: 0;
                        border-top: 1px solid rgba(0, 0, 0, 0.1);
                    }
                }
                .abs-center {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 16vh;
                }
                .asi{
                    display: flex;
                    justify-content: center;

                }
                .estudio-img {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    min-height: 10vh;
                }
                .fc th{
                    padding: 10px 0px;
                    vertical-align: middle;
                    background: #F2F2F2;
                }
                .fc a{
                    padding: 10px 0px;
                    /*width: 90px;*/
                    height: 100px;
                    vertical-align: middle;
                    /*background: #9E1C00;*/
                }
                .btn-group .btn {
                    width: 50%;
                }
                .btn-group {
                    width: 100%;
                }
                .fc-past {
                    background-color: #F1F1F1;
                }               
            </style>
        </head>     
        <body class="conta2 bod">
            <!--<img src="../images/diariodevocional/adventist-symbol-circle-white.png" alt=""/>-->
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--white.png" alt="" > </span>                 
                        </div>
                        <div class="pull-right">
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                <li class="LiReporte" style="display: none">
                                    <a id="Reporte" href="Trabajando.php" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                        <i class="fa fa-bar-chart-o"></i>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#" class="btn btn-circle btn-primary"  data-toggle="dropdown" style="font-size: 15px;text-align: center;align-items: center;padding-top: 2px;"> 
                                        <i class="fa fa-sort-desc"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> <u>C</u>onfiguración</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        <li class="divider"></li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="¿Estás seguro de salir de sesión?"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- logout button -->
                            <div id="" class="transparent pull-right">
                                <ul id="" class="header-dropdown-list ">
                                    <li class="LiReporte2" style="display: none">
                                        <a id="Reporte2" href="Trabajando.php" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-bar-chart-o"></i>
                                        </a>
                                    </li>
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
                                                <a href="Configuracion.php" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> <u>C</u>onfiguración</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="Perfil.php" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>

                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="¿Estás seguro de salir de sesión?"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesión</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- MAIN CONTENT -->
                    <br>
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <section id="widget-grid" class="">
                            <div class="row">
                                <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: 30px">
                                    <div class="jarviswidget jarviswidget-color-blueLight" id="wid-id-10" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
                                        <header>
                                            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                                            <h2>Diario Devocional</h2>
                                        </header>                                       
                                        <div class="widget-grid no-padding" style="min-height: 0px">
                                            <div id="content" style="margin-bottom: 100px;">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                                                      
                                                        <div id="CalendarioWeb"></div>                                                                                                               
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>                                  
                                </article>
                            </div>																
                        </section>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="ModalDevocional" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="background-image:url(../images/diariodevocional/fondodiariodevocional.png);background-repeat: no-repeat;background-size: cover;background-position: top center;position: relative;">
                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                            <img id="imglogo" src="../images/diariodevocional/logo-adventista.png" alt="" style="width: 15%;"/>
                        </div>
                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                            <img src="../images/diariodevocional/letradiariodevocional.png" alt="" style="width: 70%;"/>
                        </div>
                        <div class="modal-body">
                            <input type="hidden" id="txtID_devocional" name="txtID_devocional">
                            <input type="hidden" id="txtID_persona" name="txtID_persona" value="<?php echo $_SESSION["id_Persona"] ?>"/>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Nombre:</i></span>
                                            <input type="text" id="txtNombre" name="No_Persona" class="form-control" placeholder="Ingresar su nombre" disabled value="<?php echo $_SESSION["Persona"] ?>">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Iglesia / Distrito:</i></span>
                                            <input type="text" id="txtIgleDistri" name="Nombre_Iglesia" class="form-control" placeholder="Ingresar Iglesia / Distrito" disabled value="<?php echo $_SESSION["Nombre_Iglesia"] ?>">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star">Asociación / Misión:</i></span>
                                            <input type="text" id="txtAsoMisio" name="No_Mision" class="form-control" placeholder="Ingresar Asociación / Misión" disabled value="<?php echo $_SESSION["No_Mision"] ?>">
                                        </div>                                 
                                    </div>
                                </div>                                               
                                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Teléfono:</i></span>
                                            <input type="text" id="txtTelefono" name="tele_Persona" class="form-control" placeholder="Ingresar su teléfono" disabled value="<?php echo $_SESSION["tele_Persona"] ?>">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Correo:</i></span>
                                            <input type="text" id="txtcorreo" name="correo_Persona" class="form-control" placeholder="Ingresar su Email" disabled value="<?php echo $_SESSION["correo_Persona"] ?>">
                                        </div>                                 
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star">Color del Diario Devocional:</i></span>
                                            <input type="color" id="txtColor" name="txtColor" value="#ff0000" class="form-control"/>
                                        </div>                                 
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/mayordomia1.png" alt="" style="width: 20%;"/>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <h1 style="color: white">UNIÓN PERUANA DEL NORTE</h1>
                                </div>
                            </div>
                        </div>
                        <hr/>
                        <div class="modal-footer">  
                            <div class="row">                               
                                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">
                                    <img src="../images/diariodevocional/mayordomia2.png" width="100" height="100">
                                </div>
                                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-6 abs-center">
                                    <img src="../images/diariodevocional/letradiariodevocional.png" alt="" style="width: 80%;"/>                                                                
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group has-success">                                
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="far fa-star"> Texto de Estudio:</i></span>
                                            <input type="text" id="txtTexto" name="txtTexto" class="form-control" placeholder="Ingresar el texto de estudio bíblico" required="">
                                        </div>                                 
                                    </div>
                                </div>                                
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/resumen.png" alt="" style="width: 100%;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">                                                                     
                                    <div class="form-group">
                                        <textarea id="txtResumen" name="txtResumen" rows="3" class="form-control" required="" placeholder="Redacte un breve resumen"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/aplica.png" alt="" style="width: 100%;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group"  style="background: #cccccc">
                                        <textarea id="txtAplica" name="txtAplica" rows="3" class="form-control" required="" placeholder="Redacte su respuesta"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/pedidoOracion.png" alt="" style="width: 100%;"/>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <textarea id="txtPedido" name="txtPedido" rows="3" class="form-control" required="" placeholder="Redacte sus pedidos de oraciones"></textarea>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="form-group">
                                        <textarea id="txtContestado" name="txtContestado" rows="3" class="form-control" placeholder="Aún no tiene oraciones contestadas"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 asi">
                                    <img src="../images/diariodevocional/compartire.png" alt="" style="width: 113%;"/>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <textarea id="txtMeta" name="txtMeta" rows="3" class="form-control" required="" placeholder="Redacte sus metas"></textarea>
                                    </div>
                                </div>
                                <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 asi">
                                    <button type="button" id="btnAgregar" class="btn btn-success">Guardar</button>
                                </div>
                                <!--                                <div class=" col-xs-4 col-sm-4 col-md-4 col-lg-4 asi">
                                                                    <button type="button" id="btnModificar" class="btn btn-warning">Modificar</button>
                                                                </div>-->
                                <!--<div class=" col-xs-3 col-sm-3 col-md-3 col-lg-3 asi">-->
                                <!--<button type="button" id="btnEliminar" class="btn btn-danger">Borrar</button>-->
                                <!--</div>-->
                                <div class=" col-xs-6 col-sm-6 col-md-6 col-lg-6 asi">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
         
           <script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>
            <script src="../js/jquery.min.js" type="text/javascript"></script>
            <script src="../js/moment.min.js" type="text/javascript"></script>
            <script src="../js/DevocionesMatutinas/DiarioDevocional.js" type="text/javascript"></script>
            <script src="../plugins/sweetAlert2/sweetalert2.all.min.js" type="text/javascript"></script>
            <!-- Cerrar sesion-->
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>          
            <script src="js/app.config.js"></script>
            <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script>
            <script src="js/bootstrap/bootstrap.min.js"></script>
            <script src="js/notification/SmartNotification.min.js"></script>
            <script src="js/app.min.js"></script>
            <!--FINAL DE CERRAR SESION--> 
            <!--nuevo-->
            <script src="../js/fullcalendar.min.js" type="text/javascript"></script>
            <script src="../js/es.js" type="text/javascript"></script>                       
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>          
        </body>
    </html><?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>