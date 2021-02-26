<?php
include_once '../DAO/PersonaDAO.php';
include_once '../DAO/CampanaEvangelisticaDAO.php';
session_start();
$obj = new PersonaDAO();
$objc = new CampanaEvangelisticaDAO();
//$varcp = $objc->CampanaProgramada();

if ($_SESSION["Usuario"] !== null) {
    ?>
    <!DOCTYPE html>
    <html class="imagetot" lang="es" style="background-image: url(../images/fond1.png);">
        <head>
            <meta charset="UTF-8">
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
            <title> Inicio </title>
            <?php include_once './inc2/Estilos.php'; ?>
            <link rel="stylesheet" type="text/css" media="screen" href="css/fontAdventSans.css">
            <link rel="stylesheet" type="text/css" media="screen" href="css/header.css">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
            <link rel="apple-touch-startup-image" href="../images/iconoweb.png" media="screen and (max-device-width: 320px)">
            <link rel="shortcut icon" href="../images/iconoweb.png" type="image/x-icon">
            <link rel="icon" href="../images/iconoweb.png" type="image/x-icon">
            <style>
                .asip{
                    display: block;
                }
                .opcusers{
                    display: none !important;
                }
                @media (max-width: 767px){
                    
                    .opcusers{
                        display: inline-block!important;
                    }
                    .asip{
                        display: none;
                    }
                    .userasi{
                        padding-top: 50px;
                    }
                     .divlogfo{
                        justify-content:center !important;
                    }
                    .divrefo{
                        justify-content:center !important;
                        height: 100%;
                    }
                }
                @media (min-width: 768px) {
                    .asip{
                        display: block !important;
                    }
                    .modal-dialogx {
                        width: 85%;;
                        margin: 30px auto;
                    } 
                }
                @media (min-width: 992px){
                    .divrefo{
                        height: 18vh;
                    }
                    .col10-md-7 {
                        width: 100%;
                    }
                    .col10-md-6 {
                        width: calc((100%/7)*6);
                    }
                    .col10-md-5 {
                        width: calc((100%/7)*5);
                    }
                    .col10-md-4 {
                        width: calc((100%/7)*4);
                    }
                    .col10-md-3 {
                        width: calc((100%/7)*3);
                    }
                    .col10-md-2 {
                        width: calc((100%/7)*2);
                    }
                    .col10-md-1 {
                        width: calc((100%/7));
                    }
                }
                @media (min-width: 768px) and (max-width:991px){
                    .divlogfo{
                        justify-content:center !important;
                    }
                    .divrefo{
                        justify-content:center !important;
                        height: 100%;
                    }
                    .divti{
                        display: flex !important;
                        justify-content: center !important;
                    }
                    .col10-sm-7 {
                        width: 100%;
                    }
                    .col10-sm-6 {
                        width: calc((100%/7)*6);
                    }
                    .col10-sm-5 {
                        width: calc((100%/7)*5);
                    }
                    .col10-sm-4 {
                        width: calc((100%/7)*4);
                    }
                    .col10-sm-3 {
                        width: calc((100%/7)*3);
                    }
                    .col10-sm-2 {
                        width: calc((100%/7)*2);
                    }
                    .col10-sm-1 {
                        width: calc((100%/7));
                    }
                }
                @media (min-width: 1200px){
                    .divrefo{
                        height: 18vh;
                    }
                    .col10-lg-7 {
                        width: 100%;
                    }
                    .col10-lg-6 {
                        width: calc((100%/7)*6);
                    }
                    .col10-lg-5 {
                        width: calc((100%/7)*5);
                    }
                    .col10-lg-4 {
                        width: calc((100%/7)*4);
                    }
                    .col10-lg-3 {
                        width: calc((100%/7)*3);
                    }
                    .col10-lg-2 {
                        width: calc((100%/7)*2);
                    }
                    .col10-lg-1 {
                        width: calc((100%/7));
                    }
                }
                @media (max-width:767px){
                    .divti{
                        display: flex !important;
                        justify-content: center !important;
                    }
                }
            </style>
        </head>
        <body class="bod" style="min-height: 100vh;height: 100%;">
            <div class="modal fade" id="ModalIngresarCampana" tabindex="-1" role="dialog" aria-labelledby="ModalIngresarCampanaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalIngresarCampanaLabel">Ingresar Nueva Campaña de Evangelismo</h4>
                        </div>
                        <div class="modal-body" style="padding: 20px 20px 5px 20px;">
                            <form id="formCampana" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <?php if (mysqli_num_rows($varcp) > 0) { ?>
                                        <div class="row" id="TitProgramada">
                                            <label class="label" style="text-align: center;font-weight: 900">¿Campaña de Evangelismo Programada?</label>
                                        </div>
                                        <div class="row" id="DivProgramada" style="margin-bottom: 5px;">
                                            <div class="col-xs-6 col-6">
                                                <label class="radio">
                                                    <input type="radio" name="opcCamEvan" id="EsProgramada" >
                                                    <i></i>Sí
                                                </label>

                                            </div>
                                            <div class="col-xs-6 col-6">
                                                <label class="radio">
                                                    <input type="radio" name="opcCamEvan" id="NoProgramada" >
                                                    <i></i>No
                                                </label>
                                            </div>
                                        </div>
                                    <?php } ?>                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LN">
                                                        <input type="text" id="NombreCampana" name="NombreCampana" class="form-control" placeholder="Nombre de Campaña de Evangelismo" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LO">
                                                        <select id="OpcVideo" name="OpcVideo" class="form-control">
                                                            <option value="">Seleccionar opción de Video Conferencia</option>
                                                            <option value="C">Con Video LLamada</option>
                                                            <option value="S">Sin Video LLamada</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="CampPLat" style="display: none;">
                                                <section>
                                                    <label class="select foring LP">
                                                        <select id="PlataformaVideoLLamada" name="PlataformaVideoLLamada" disabled="disabled" class="form-control">
                                                            <option value="">Seleccionar la plataforma de Video LLamada</option>
                                                            <option value="J">Jitsi Meet</option>
                                                            <option value="S">Sangoma Meet</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="urlvi" style="display: none;">
                                                <section>
                                                    <label class="input foring LU">
                                                        <input type="text" name="UrlVideoConferencia" id="UrlVideoConferencia" class="form-control" disabled="disabled" placeholder="URL de Video Conferencia" required />

                                                    </label>
                                                    <div id="valu" class="note note-error" style="display: none;">Url Incorrecto</div>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LC">
                                                        <input type="text" name="Cod_Campana" id="Cod_Campana" class="form-control" placeholder="Código de Campaña de Evangelismo" required />
                                                    </label>
                                                    <div id="valcod" class="note note-error" style="display: none;">Código ya en uso</div>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LD">
                                                        <textarea name="Descripcion" maxlength="200" id="Descripcion" rows="4" class="form-control" placeholder="Descripción de Campaña de Evangelismo" style="width: 98%;padding: 1%;"></textarea>
                                                    </label>
                                                </section>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 fecri">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Inicio</label>
                                                    <label class="input foring LIN">
                                                        <input type="date" name="Fe_Inicio" id="Fe_Inicio" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fecrf">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Cierre</label>
                                                    <label class="input foring LFI">
                                                        <input type="date" name="Fe_Fin" id="Fe_Fin" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" id="TitPersonalizada" style="<?php
                                    if (mysqli_num_rows($varcp) > 0) {
                                        echo 'display: none;';
                                    } else {
                                        echo 'display: block;';
                                    }
                                    ?>">
                                        <label class="label" style="text-align: center;font-weight: 900">Personalizar URLs De Dia</label>
                                    </div>
                                    <div class="row" id="divPersonalizada" style="<?php
                                    if (mysqli_num_rows($varcp) > 0) {
                                        echo 'display: none;';
                                    } else {
                                        echo 'display: block;';
                                    }
                                    ?>;margin-bottom: 5px;">
                                        <div class="col-xs-6 col-6">
                                            <label class="radio">
                                                <input type="radio" name="OpcPersonalizar" id="Es_Personalizar" >
                                                <i></i>Sí
                                            </label>

                                        </div>
                                        <div class="col-xs-6 col-6">
                                            <label class="radio">
                                                <input type="radio" name="OpcPersonalizar" id="NO_Personalizar" >
                                                <i></i>No
                                            </label>
                                        </div>
                                    </div>
                                    <?php if (mysqli_num_rows($varcp) > 0) { ?>
                                        <div class="row" id="TitGrupoEdad" style="display: none;">
                                            <label class="label" style="text-align: center;font-weight: 900">Grupo de Edad (Materiales de Campaña de Evangelismo)</label>
                                        </div>
                                        <div class="row" id="divGrupoEdad"style="display: none;">
                                            <div class="col col-6">
                                                <label class="radio">
                                                    <input type="radio" name="EsGrupo" id="EsGrupoNA" >
                                                    <i></i> Niños y Aventureros
                                                </label>
                                                <label class="radio">
                                                    <input type="radio" name="EsGrupo" id="EsGrupoJA" >
                                                    <i></i> Jóvenes y Adultos </label>
                                            </div>
                                            <div class="col col-6">
                                                <label class="radio">
                                                    <input type="radio" name="EsGrupo" id="EsGrupoAC" >
                                                    <i></i> Adolescentes y Conquistadores
                                                </label>
                                            </div>
                                        </div>
                                    <?php } ?>

                                    <div class="row" id="titUrl" style="display: none">
                                        <label class="label" style="text-align: center;font-weight: 900"> Ingresar URLs</label>
                                    </div>
                                    <div class="row" id="divbtnurl" style="display: none;text-align: center;margin-bottom: 10px;">
                                        <div class="form-group">
                                            <section style="margin-bottom: 0px;height: 100%;">
                                                <label class="input foring LNM" style="padding: 0px 10px;">
                                                    <button type="button" class="btn btn-success" style="padding: 6px 12px;" id="btnAgregarurl">Agregar Url</button>
                                                </label>
                                            </section>
                                        </div>
                                    </div>

                                    <div class="row" id="url_Programados" style="display: none;">

                                    </div>
                                </fieldset>
                                <input type="hidden" name="id_peC" id="id_peC" value="<?php echo $_SESSION["id_Persona"] ?>">
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="CancelarAgreegCamp">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" id="AgregarCampana" >
                                Agregar Campaña de Evangelismo
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="ModalLeccionDaniel" tabindex="-1" role="dialog" aria-labelledby="ModalLeccionDanielLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialogx">
                    <div class="modal-content">

                        <div class="modal-body" style="padding: 0px;margin: 0px 0px -5px;">
                            <iframe src="https://www.youtube.com/embed/videoseries?list=PLDml-i7fdiXg0JPM6bd3ZDyIslFMedOiv&enablejsapi=1" width="100%" height="500px" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
                        </div> 
                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal" id="CancelarAgreegCamp">
                                Cerrar
                            </button>
                        </div>
                    </div><!-- /.modal-dialog -->

                </div>

            </div>
            <div class="modal fade" id="ModalLeccionDRMINISTRIES" tabindex="-1" role="dialog" aria-labelledby="ModalLeccionDRMINISTRIESLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialogx">
                    <div class="modal-content">

                        <div class="modal-body" style="padding: 0px;margin: 0px 0px -5px;">
                            <iframe src="https://www.youtube.com/embed/videoseries?list=PLqElsqgue_gHAY-9Ir9sb7XhTEuJYB4um&enablejsapi=1" width="100%" height="500px" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
                        </div> 
                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal" id="CancelarAgreegCamp">
                                Cerrar
                            </button>
                        </div>
                    </div><!-- /.modal-dialog -->

                </div>

            </div>
            <div class="modal fade" id="ModalLeccionAIDPA" tabindex="-1" role="dialog" aria-labelledby="ModalLeccionAIDPALabel" aria-hidden="true">
                <div class="modal-dialog modal-dialogx">
                    <div class="modal-content">

                        <div class="modal-body" style="padding: 0px;margin: 0px 0px -5px;">
                            <iframe src="https://www.youtube.com/embed/videoseries?list=PLdmbEBze11yS2dL5j8y6vCehvNJV45SOf&enablejsapi=1" width="100%" height="500px" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
                        </div> 
                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal" id="CancelarAgreegCamp">
                                Cerrar
                            </button>
                        </div>
                    </div><!-- /.modal-dialog -->

                </div>

            </div>
            <div class="modal fade" id="ModalResumenBullon" tabindex="-1" role="dialog" aria-labelledby="ModalResumenBullonLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialogx">
                    <div class="modal-content">

                        <div class="modal-body" style="padding: 0px;margin: 0px 0px -5px;">
                            <iframe src="https://www.youtube.com/embed/videoseries?list=PLfjJL4k7nWIG3iMh79kRGh9_JXpFz9Khi&enablejsapi=1" width="100%" height="500px" frameborder="0" allow="autoplay;encrypted-media" allowfullscreen></iframe>
                        </div> 
                        <div class="modal-footer" style="text-align: center;">
                            <button type="button" class="btn btn-md btn-danger" data-dismiss="modal" id="CancelarAgreegCamp">
                                Cerrar
                            </button>
                        </div>
                    </div><!-- /.modal-dialog -->

                </div>

            </div>
            <div class="modal fade" id="ModalModificarCampana" tabindex="-1" role="dialog" aria-labelledby="ModalModificarCampanaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalModificarCampanaLabel">Modificar Campaña Evangelistica</h4>
                        </div>
                        <div class="modal-body" style="padding: 20px;padding-top: 0px;">
                            <form id="formModificarCampana" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Nombre de Campaña de Evangelismo</label>
                                                    <label class="input foring LNM">
                                                        <input type="text" id="NombreCampanaM" name="NombreCampanaM" class="form-control" placeholder="Nombre de Campaña de Evangelismo" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LOM">
                                                        <label class="label">Opción de Video Conferencia</label>
                                                        <select id="OpcVideoM" name="OpcVideoM" class="form-control">
                                                            <option value="">Seleccionar opción de Video Conferencia</option>
                                                            <option value="C">Con Video LLamada</option>
                                                            <option value="S">Sin Video LLamada</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="CampPLatM">
                                                <section>
                                                    <label class="select foring LPM">
                                                        <label class="label">Plataforma de Video Conferencia</label>
                                                        <select id="PlataformaVideoLLamadaM" name="PlataformaVideoLLamadaM"  class="form-control">
                                                            <option value="">Seleccionar La plataforma de Video LLamada</option>
                                                            <option value="J">Jitsi Meet</option>
                                                            <option value="S">Sangoma Meet</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="urlviM">
                                                <section>
                                                    <label class="label">Url de Video Conferencia</label>
                                                    <label class="input foring LUM">
                                                        <input type="text" name="UrlVideoConferenciaM" id="UrlVideoConferenciaM" class="form-control" disabled="disabled" placeholder="URL de Video Conferencia" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Cod. de Campaña de Evangelismo</label>
                                                    <label class="input foring LCM">
                                                        <input type="text" name="Cod_CampanaM" id="Cod_CampanaM" class="form-control" placeholder="Código de Campaña Evangelistica" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Descripción de Campaña de Evangelismo</label>
                                                    <label class="input foring LDM">
                                                        <textarea name="DescripcionM" maxlength="200" id="DescripcionM" rows="4" class="form-control" placeholder="Descripción de Campaña de Evangelismo" style="width: 98%;padding: 1%;"></textarea>
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 fecri">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Inicio</label>
                                                    <label class="input foring LINM">
                                                        <input type="date" name="Fe_InicioM" id="Fe_InicioM" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fecrf">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Cierre</label>
                                                    <label class="input foring LFIM">
                                                        <input type="date" name="Fe_FinM" id="Fe_FinM" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <label class="label" style="text-align: center;font-weight: 900">Grupo de Edad(Opcional)</label>
                                    </div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <label class="radio">
                                                <input type="radio" name="EsGrupoM" id="EsGrupoNAM" >
                                                <i></i> Niños y Aventureros
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="EsGrupoM" id="EsGrupoJAM" >
                                                <i></i> Jóvenes y Adultos</label>
                                        </div>
                                        <div class="col col-6">
                                            <label class="radio">
                                                <input type="radio" name="EsGrupoM" id="EsGrupoACM" >
                                                <i></i> Adolescentes y Conquistadores
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="id_peCM" id="id_peCM" value="<?php echo $_SESSION["id_Persona"] ?>">
                                <input type="hidden" name="id_Camp" id="id_Camp" value="">
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="CancelModificarCampana">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" id="ModificarCampana" >
                                Modificar Campaña de Evangelismo
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="modal fade" id="ModalIngresarEstudioBiblico" tabindex="-1" role="dialog" aria-labelledby="ModalIngresarEstudioBiblicoLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalIngresarEstudioBiblicoLabel">Ingresar Reuni&oacute;n de Estudio Bíblico</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formEstudio" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LNR">
                                                        <input type="text" id="NombreReunion" name="NombreReunion" class="form-control" placeholder="Nombre de Reuni&oacute;n de Estudio B&iacute;blico" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LOR">
                                                        <select id="OpcVideoReunion" name="OpcVideoReunion" class="form-control">
                                                            <option value="">Seleccionar opción de Video Conferencia</option>
                                                            <option value="C">Con Video LLamada</option>
                                                            <option value="S">Sin Video LLamada</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="CampPLatR" style="display: none;">
                                                <section>
                                                    <label class="select foring LPR">
                                                        <select id="PlataformaVideoLLamadaReunion" name="PlataformaVideoLLamadaReunion" disabled="disabled" class="form-control">
                                                            <option value="">Seleccionar La plataforma de Video LLamada</option>
                                                            <option value="J">Jitsi Meet</option>
                                                            <option value="S">Sangoma Meet</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="urlviR" style="display: none;">
                                                <section>
                                                    <label class="input foring LUR">
                                                        <input type="text" name="UrlVideoConferenciaReunion" id="UrlVideoConferenciaReunion" class="form-control" disabled="disabled" placeholder="URL de Video Conferencia" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LCR">
                                                        <input type="text" name="Cod_Reunion" id="Cod_Reunion" class="form-control" placeholder="Código de Reunión de Estudio" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LDR">
                                                        <textarea name="DescripcionReunion" maxlength="200" id="DescripcionReunion" rows="4" class="form-control" placeholder="Descripción de Reunión de Estudio Bíblico" style="width: 98%;padding: 1%;"></textarea>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LER">
                                                        <select id="EstudioBiblicoReunion" name="EstudioBiblicoReunion" class="form-control">
                                                            <option value="">Seleccionar Estudio Bíblico</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 fecriR">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Inicio</label>
                                                    <label class="input foring LINR">
                                                        <input type="date" name="Fe_InicioReunion" id="Fe_InicioReunion" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fecrfR">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Cierre</label>
                                                    <label class="input foring LFIR">
                                                        <input type="date" name="Fe_FinReunion" id="Fe_FinReunion" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </fieldset>
                                <input type="hidden" name="id_peR" id="id_peR" value="<?php echo $_SESSION["id_Persona"] ?>">
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelIngresarEstudio">
                                Cancelar
                            </button>
                            <button type="button" class="btn btn-primary" id="AgregarEstudioBiblico" >
                                Agregar Reunión de Estudio Bíblico
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="ModalModifcarEstudioBiblico" tabindex="-1" role="dialog" aria-labelledby="ModalModifcarEstudioBiblicoLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalModifcarEstudioBiblicoLabel">Modificar Reuni&oacute;n de Estudio Bíblico</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formModificarEstudio" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Nombre de Reuni&oacute;n de Estudio B&iacute;blico</label>
                                                    <label class="input foring LNRM">
                                                        <input type="text" id="NombreReunionM" name="NombreReunionM" class="form-control" placeholder="Nombre de Campaña Evangelistica" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LORM">
                                                        <label class="label">Opción de Video Conferencia</label>
                                                        <select id="OpcVideoReunionM" name="OpcVideoReunionM" class="form-control">
                                                            <option value="">Seleccionar opción de Video Conferencia</option>
                                                            <option value="C">Con Video LLamada</option>
                                                            <option value="S">Sin Video LLamada</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="CampPLatRM" style="display: none;">
                                                <section>
                                                    <label class="select foring LPRM">
                                                        <label class="label">Plataforma de Video Conferencia</label>
                                                        <select id="PlataformaVideoLLamadaReunionM" name="PlataformaVideoLLamadaReunionM" class="form-control">
                                                            <option value="">Seleccionar La plataforma de Video LLamada</option>
                                                            <option value="J">Jitsi Meet</option>
                                                            <option value="S">Sangoma Meet</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group" id="urlviRM" style="display: none;">
                                                <section>
                                                    <label class="label">Url de Video Conferencia</label>
                                                    <label class="input foring LURM">
                                                        <input type="text" name="UrlVideoConferenciaReunionM" id="UrlVideoConferenciaReunionM" class="form-control" placeholder="URL de Video Conferencia" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Código de Reunión de Estudio Bíblico</label>
                                                    <label class="input foring LCRM">
                                                        <input type="text" name="Cod_ReunionM" id="Cod_ReunionM" class="form-control" placeholder="Código de Reunión de Estudio" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Descrición de Reunión de Estudio Bíblico</label>
                                                    <label class="input foring LDRM">
                                                        <textarea name="DescripcionReunionM" maxlength="200" id="DescripcionReunionM" rows="4" class="form-control" placeholder="Descripción de Reunión de Estudio B&iacute;blico" style="width: 98%;padding: 1%;"></textarea>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LCRM">
                                                        <label class="label">Estudio Bíblico a Estudiar</label>
                                                        <select id="EstudioBiblicoReunionM" name="EstudioBiblicoReunionM" class="form-control">
                                                            <option value="">Seleccionar Estudio Bíblico</option>
                                                        </select>
                                                    </label>
                                                </section>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 fecriR">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Inicio</label>
                                                    <label class="input foring LINRM">
                                                        <input type="date" name="Fe_InicioReunionM" id="Fe_InicioReunionM" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                        <div class="col-md-6 fecrfR">
                                            <div class="form-group">
                                                <section>
                                                    <label for="tags"> Fecha de Cierre</label>
                                                    <label class="input foring LFIRM">
                                                        <input type="date" name="Fe_FinReunionM" id="Fe_FinReunionM" class="form-control">
                                                    </label>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </fieldset>
                                <input type="hidden" name="id_peRM" id="id_peRM" value="<?php echo $_SESSION["id_Persona"] ?>">
                                <input type="hidden" name="id_peRM" id="id_Est" value="<?php echo $_SESSION["id_Persona"] ?>">
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="CancelarModificarReunionEstudio">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" id="ModificarReunionEstudio" >
                                Modificar Reunión de Estudio Bíblico
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="modal fade" id="ModalSuscribirseCampana" tabindex="-1" role="dialog" aria-labelledby="ModalSuscribirseCampanaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalSuscribirseLabel">Suscribirse a una Campaña Evangelistica</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tags"> Código de Campaña de evangelismo</label>
                                        <input type="text" id="Cod_Camp_Eva" class="form-control" placeholder="Código de Campaña de evangelismo" required maxlength="15"/>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="SuscribirteCampana">
                                Suscribirse a Campaña Evangelistica
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <div class="modal fade" id="ModalSuscribirseEstudio" tabindex="-1" role="dialog" aria-labelledby="ModalSuscribirseEstudioLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalSuscribirseLabel">Suscribirse a una Reunión de Estudio Bíblico</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tags"> Código de Estudio Bíblico</label>
                                        <input type="text" id="cod_Reu_Est" class="form-control" placeholder="Código de Estudio Bíblico" required maxlength="15"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="SuscribirteReunion">
                                Suscribirse a Reunión de Estudio Bíblico
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <input id="PersonaUsuario" type="hidden" value="<?php echo utf8_encode ($_SESSION["Persona"]) ?>">
            <input id="id_Persona" type="hidden" value="<?php echo $_SESSION["id_Persona"]; ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">
                <div class="col-xs-12 col10-sm-5 col10-md-5 col10-lg-6 imagetot"  style="margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 100%;background-image: url(../images/fondo_Principal.png);min-height: 100vh;background-size: 100%;">
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;min-height: 82vh;">
                        <div id="header" style="background: none;height: 30%">
                            <div id="logo-group" style="    height: 80%;
                                 width: 30%;">
                                <img id="imatit" src="../images/logoceo.png" style="height: 100%;">
                            </div>
                            <div class="pull-right">
                                <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
                                    <li class="opcusers" style="">
                                        <a  onclick="MostrarEsconder()" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                            <i class="fa fa-user"></i>
                                        </a>
                                    </li>
                                    <?php
                                    $var = $obj->ValidarLider($_SESSION["id_Persona"]);
                                    if (mysqli_num_rows($var) > 0) {
                                        while ($data = $var->fetch_object()) {
                                            if ($data->tipo === "distrito") {
                                                ?>
                                                <li class="LiReporte" style="">
                                                    <a id="Reporte" href="ReporteDistrito.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </a>
                                                </li>
                                            <?php } else if ($data->tipo === "mision") { ?>
                                                <li class="LiReporte" style="">
                                                    <a id="Reporte" href="ReporteMision.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </a>
                                                </li>
                                            <?php } else if ($data->tipo === "union") { ?>
                                                <li class="LiReporte" style="">
                                                    <a id="Reporte" href="ReporteUnion.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </a>
                                                </li>
                                            <?php } else if ($data->tipo === "division") { ?>
                                                <li class="LiReporte" style="">
                                                    <a id="Reporte" href="ReporteDivision.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                        <i class="fa fa-bar-chart-o"></i>
                                                    </a>
                                                </li>
                                            <?php } else if ($data->tipo === "SN") { ?>
                                            <?php } ?>
                                            <?php
                                        }
                                    }
                                    ?>
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
                                <div id="" class="transparent pull-right">
                                    <ul id="" class="header-dropdown-list ">
                                        <li class="opcusers" style="">
                                            <a onclick="MostrarEsconder()" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                <i class="fa fa-user"></i>
                                            </a>
                                        </li>
                                        <?php
                                        $var = $obj->ValidarLider($_SESSION["id_Persona"]);
                                        if (mysqli_num_rows($var) > 0) {
                                            while ($data = $var->fetch_object()) {
                                                if ($data->tipo === "distrito") {
                                                    ?>
                                                    <li class="LiReporte2" style="">
                                                        <a id="Reporte2" href="ReporteDistrito.php?id=<?php echo $data->id ?>" class="btn1 btn-primary1" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </a>
                                                    </li>
                                                <?php } else if ($data->tipo === "mision") { ?>
                                                    <li class="LiReporte2" style="">
                                                        <a id="Reporte2" href="ReporteMision.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </a>
                                                    </li>
                                                <?php } else if ($data->tipo === "union") { ?>
                                                    <li class="LiReporte2" style="">
                                                        <a id="Reporte2" href="ReporteUnion.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </a>
                                                    </li>
                                                <?php } else if ($data->tipo === "division") { ?>
                                                    <li class="LiReporte2" style="">
                                                        <a id="Reporte2" href="ReporteDivision.php?id=<?php echo $data->id ?>" class="btn btn-primary" style="font-size: 13px;text-align: center;align-items: center;"> 
                                                            <i class="fa fa-bar-chart-o"></i>
                                                        </a>
                                                    </li>
                                                <?php } else if ($data->tipo === "SN") { ?>
                                                <?php } ?>
                                                <?php
                                            }
                                        }
                                        ?>

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
                            </div>
                        </div>
                        <div class="row" style="display: flex;height: 70%;justify-content: center;">
                            <div class="col-sm-12" style="height: 100%;">
                                <div class="contop" style="justify-content: center;height: 100%;margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-green  pricing-big panelm panEs">
                                                <div class="panel-heading panehead panelm-white" id="panHeadEsp" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img class="imgEs" src="../images/iconos/icono1.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">Vida Devocional</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esPer panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-whiteb" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;padding-top: 0px;">
                                                        <h1><strong>Opciones</strong></h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="BibliaPersonal.php"><strong>Biblia Personal</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="Devocion_Matutina.php"><strong>Devoción Matutina</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="RepasoLeccion.php"><strong>Lección de Escuela Sabática</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="DiarioDevocional.php"><strong>Diario Devocional</strong></a></li>
                                                            <li class="list-unstyled"><i class="fa fa-plus text-success ismu"></i> <strong style="color: #74a7ca;"><a class="limu"> M&uacute;sica</a></strong>
                                                                <ul id="MusicaPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Himnario.php"><strong>Himnario</strong></a></li> 
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Musica.php">Escuchar M&uacute;sica</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="MusicaPersonal.php">Subir M&uacute;sica</a></li>
                                                                </ul>
                                                            <li>
                                                            <li class="list-unstyled"><i class="fa fa-plus text-success icvi"></i> <strong style="color: #74a7ca;"><a class="livi"> Videos</a></strong>
                                                                <ul id="VideoPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Videos.php">Buscar Videos</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="VideoPersonal.php">Subir Video</a></li>
                                                                </ul>
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-orange  pricing-big panelm panEs">
                                                <div class="panel-heading panehead panelm-white " id="panHeadEsSab" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img  src="../images/iconos/icono2.png" style="max-width: 55px">
                                                        <h3 class="titop" style="font-weight: 900;">Unidad de Acción y Grupo Pequeño</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-escu panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-whiteb" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;padding-top: 0px;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">

                                                            <li class="list-unstyled"><i class="fa fa-plus text-success iuam"></i> <a class="UnidActionMa">Unidad de Acción (Maestros)</a>
                                                                <ul id="liUAM" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a data-toggle="modal" data-target="#ModalResumenBullon"><strong>Resumen Lección Pr. Bullón</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a data-toggle="modal" data-target="#ModalLeccionAIDPA"><strong>Escuela Sabática Like</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a data-toggle="modal" data-target="#ModalLeccionDRMINISTRIES"><strong>Resumen Lección DR Ministries</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a data-toggle="modal" data-target="#ModalLeccionDaniel"><strong>Resumen Lección Daniel Herrera</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://www.fustero.es/" target="_blank"><strong>Recursos en PPT para Maestros</strong></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-unstyled"><i class="fa fa-plus text-success igpta"></i> <a class="GrupPequetA">Grupo Pequeño Adultos - Temas</a> 
                                                                <ul id="GrupoPequeLA" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1GJZhy4U7roxjexomwTJcFHT05G_w5bcu/view?usp=sharing" target="_blank"><strong>Promesas de Amor</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1-60y0AUFmZussBZru_nShXdLAXl6jey-/view?usp=sharing" target="_blank"><strong>La revelación de Jesucristo</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1EIE54vXh9Dt1r26jhSFS7un8hiPIB_Mv/view?usp=sharing" target="_blank"><strong>Contenido de Liderazgo</strong></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-unstyled"><i class="fa fa-plus text-success igptj"></i> <a class="GrupPequetJ">Grupo Pequeño Jovenes - Temas</a> 
                                                                <ul id="GrupoPequeLJ" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1GJZhy4U7roxjexomwTJcFHT05G_w5bcu/view?usp=sharing" target="_blank"><strong>Promesas de Amor</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1-60y0AUFmZussBZru_nShXdLAXl6jey-/view?usp=sharing" target="_blank"><strong>La revelación de Jesucristo</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1EIE54vXh9Dt1r26jhSFS7un8hiPIB_Mv/view?usp=sharing" target="_blank"><strong>Contenido de Liderazgo</strong></a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-unstyled"><i class="fa fa-plus text-success icgpb"></i> <a class="CapGPB">Capacitación GP - Pr. Bullón</a> 
                                                                <ul id="CapGPBL" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1GJZhy4U7roxjexomwTJcFHT05G_w5bcu/view?usp=sharing" target="_blank"><strong>Promesas de Amor</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1-60y0AUFmZussBZru_nShXdLAXl6jey-/view?usp=sharing" target="_blank"><strong>La revelación de Jesucristo</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-angle-right text-success"></i> <a href="https://drive.google.com/file/d/1EIE54vXh9Dt1r26jhSFS7un8hiPIB_Mv/view?usp=sharing" target="_blank"><strong>Contenido de Liderazgo</strong></a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>		
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-red pricing-big panelm panEs">
                                                <div class="panel-heading panehead panelm-white " id="panHeadEsBi" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/icono3.png" style="max-width: 100px">
                                                        <h3 class="titop" style="font-weight: 900;">
                                                            Estudios Bíblicos</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esBi panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-whiteb" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;padding-top: 0px;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="CursoAdultoJoven.php"><strong> Cursos Bíblicos Jóvenes y Adultos </strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="CursoAdolesNino.php"><strong> Cursos Bíblicos Niños y Adolescentes</strong></a></li>
                                                            <li><a class="liencaRe"><i class="fa fa-plus text-success icEncR"></i> <strong style="color: #74a7ca;">Encargado de:</strong></a>
                                                                <ul id="EncargadoReunion" style="display: none">
                                                                </ul>
                                                            </li>
                                                            <li><a class="lipartRe"><i class="fa fa-plus text-success icPartR"></i> <strong style="color: #74a7ca;">Participando en:</strong></a>
                                                                <ul id="ParticipandoReunion" style="display: none">
                                                                </ul>
                                                            </li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalIngresarEstudioBiblico"><strong>Agregar Reuni&oacute;n de Estudio Bíblico</strong></a></li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalSuscribirseEstudio" ><strong>Suscribirse a Reuni&oacute;n de Estudio Bíblico</strong></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-blueDark pricing-big panelm panEs" style="margin-bottom: 0px;">
                                                <div class="panel-heading panehead panelm-white " id="panHeadCamEva" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/icono4.png" style="max-width: 70px">
                                                        <h3 class="titop" style="font-weight: 900;">Campañas de Evangelismo</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-cam panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-whiteb" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;padding-top: 0px;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li><a class="lienca"><i class="fa fa-plus text-success icEnc"></i> <strong style="color: #74a7ca;">Encargado de:</strong></a>
                                                                <ul id="Encargado" style="display: none">

                                                                </ul>
                                                            </li>
                                                            <li ><a class="lipart"><i class="fa fa-plus text-success icPart"></i> <strong style="color: #74a7ca;">Participando en:</strong></a>
                                                                <ul id="Participando" style="display: none">

                                                                </ul>
                                                            </li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalIngresarCampana"><strong>Agregar Campaña de Evangelismo</strong></a></li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalSuscribirseCampana" ><strong>Suscribirse a Campaña de Evangelismo</strong></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="background: none;bottom: 0;width: 100%;min-height: 18vh;height: 100%;;z-index: 999999;color: white;">
                        <div style="height: 100%;">
                            <div class="row" style="height: 100%;margin-left: 0px;margin-right: 0px;">
                                <div class="col-md-6 divlogfo" style="display:flex;">
                                    <div class="tamfo" style="display: inline-table;text-align: center;width: 50%;">
                                        <img src="../images/img_logo/adventist-es--white.png" width="100%">
                                        <h5 style="color: white;">UNIÓN PERUANA DEL NORTE</h5>
                                    </div>
                                </div>
                                <div class="col-md-6 divrefo" style="display: flex;justify-content: flex-end;">
                                    <div  style="display: flex;align-items: flex-end;margin-right: 20px">
                                        <div style="display: inline-table;text-align: right;">
                                            <label style="color: white;font-size: 24px">
                                                <a href="https://www.facebook.com/adventistas.upn/" class="icoTwitter" title="Twitter" target="_blank"><i class="fa fa-facebook-square" style="font-size: 24px"></i></a>
                                                <a href="https://www.instagram.com/adventistasupn/" class="icoInstagram" title="Instagram" target="_blank"><i class="fa fa-instagram" style="font-size: 24px"></i></a>
                                                <a href="https://www.youtube.com/adventistasupn" class="icoYoutube" title="Youtube" target="_blank"><i class="fa fa-youtube" style="font-size: 24px"></i></a>
                                                <a href="https://twitter.com/AdventistasUPN" class="icoTwitter" title="Twitter" target="_blank"><i class="fa fa-twitter" style="font-size: 24px"></i></a>AdventistasUPN
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <aside class=" col-xs-12 col10-sm-2 col10-md-2 col10-lg-1 asip"  style="position: absolute;top: 0;right:  0;z-index: 904;padding-top: 49px;height: 100%;background: black;">
                    <div class="col-xs-12 col-sm-12 col-md-12 userasi" style="float: start;align-items: flex-end;height: 50%;text-align: center;"> 
                        <br><img src="../images/iconos/user2.png" style="width: 30%;">
                        <label style="font-size: 20px;text-align: center;color: white;font-weight: 600;"><?php echo utf8_encode($_SESSION["Persona"]) ?> </label>
                        <?php if (utf8_encode($_SESSION["Ti_Persona"]) === "Estudiante") { ?>
                            <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;"> <?php echo utf8_encode($_SESSION["Ti_Persona"]) ?> </h2>
                        <?php } else { ?>
                            <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;"> <?php echo utf8_encode($_SESSION["Ti_Persona"]) ?></h2>
                            <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;"> Iglesia <br><?php echo '"' . utf8_encode($_SESSION["Nombre_Iglesia"]) . '"'; ?></h2>
                        <?php } ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;padding-bottom: 10px">
                        <img src="../images/adventist-symbol-png--symbol/adventist-symbol--white.png" width="100%">
                    </div>
                </aside>
            </div>
            <?php include_once './inc2/scripts.php'; ?>
            <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>
            <script src="../js/Principal/Principal.js"></script>
            <script src="../js/CampanaEvangelistica/CampanaEvangelistica.js"></script>
            <script type="text/javascript">
                                                $(document).ready(function () {

                                                    validarcampro(<?php echo mysqli_num_rows($varcp) ?>);
                                                    pageSetUp();
                                                    ValidarLider(<?php echo $_SESSION["id_Persona"]; ?>);
                                                    ListarCampanas(<?php echo $_SESSION["id_Persona"]; ?>);
                                                    ListarCampanaParticipante(<?php echo $_SESSION["id_Persona"]; ?>)
                                                    ListarReunionesEstudio(<?php echo $_SESSION["id_Persona"]; ?>);
                                                    ListarReunionesParticipantes(<?php echo $_SESSION["id_Persona"]; ?>)

                                                });
                                                function MostrarEsconder() {
                                                    if ($(".asip").css("display") === "none") {
                                                        $(".imglog").attr("src", "../images/img_logo/adventist-es--white.png");
                                                        $(".asip").show();
                                                    } else if ($(".asip").css("display") === "block") {
                                                        $(".asip").hide();
                                                        $(".imglog").attr("src", "../images/img_logo/adventist-es--ming.png");
                                                    }
                                                }
            </script>
        </body>

    </html>
    <?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>
