<?php
include_once '../DAO/PersonaDAO.php';
session_start();
$obj = new PersonaDAO();

if ($_SESSION["Usuario"] !== null) {?>
    <!DOCTYPE html>
    <html class="imagetot" lang="es" style="background-image: url('../images/fondo.png');">
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

            </style>
        </head>
        <body class="bod">
            <div class="modal fade" id="ModalIngresarCampana" tabindex="-1" role="dialog" aria-labelledby="ModalIngresarCampanaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="ModalIngresarCampanaLabel">Ingresar Nueva Campaña Evangelistica</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formCampana" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LN">
                                                        <input type="text" id="NombreCampana" name="NombreCampana" class="form-control" placeholder="Nombre de Campaña Evangelistica" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LO">
                                                        <select id="OpcVideo" name="OpcVideo" class="form-control">
                                                            <option value="">Seleccionar opcion de Video Conferencia</option>
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
                                                            <option value="">Seleccionar La plataforma de Video LLamada</option>
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
                                                        <input type="text" name="Cod_Campana" id="Cod_Campana" class="form-control" placeholder="Codigo de Campaña Evangelistica" required />
                                                    </label>
                                                    <div id="valcod" class="note note-error" style="display: none;">Codigo ya en uso</div>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LD">
                                                        <textarea name="Descripcion" maxlength="200" id="Descripcion" rows="4" class="form-control" placeholder="Descripcion de Campaña Evangelistica" style="width: 98%;padding: 1%;"></textarea>
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
                                    <div class="row">
                                        <label class="label" style="text-align: center;font-weight: 900">Herramientas de Campaña</label>
                                    </div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsBiblia" id="EsBiblia" >
                                                <i></i>Biblia</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsHiminario" id="EsHiminario" >
                                                <i></i>Himinario</label>
                                        </div>
                                        <div class="col col-6">
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsMusica" id="EsMusica" >
                                                <i></i>Musica</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsVideo" id="EsVideo" >
                                                <i></i>Video</label>
                                        </div>
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
                                Egregar Campaña
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
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
                                                    <label class="label">Nombre de Campaña</label>
                                                    <label class="input foring LNM">
                                                        <input type="text" id="NombreCampanaM" name="NombreCampanaM" class="form-control" placeholder="Nombre de Campaña Evangelistica" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LOM">
                                                        <label class="label">Opcion de Video Conferencia</label>
                                                        <select id="OpcVideoM" name="OpcVideoM" class="form-control">
                                                            <option value="">Seleccionar opcion de Video Conferencia</option>
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
                                                    <label class="label">Cod. de Campaña Evangelistica</label>
                                                    <label class="input foring LCM">
                                                        <input type="text" name="Cod_CampanaM" id="Cod_CampanaM" class="form-control" placeholder="Codigo de Campaña Evangelistica" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Descripción de Campaña Evangelistica</label>
                                                    <label class="input foring LDM">
                                                        <textarea name="DescripcionM" maxlength="200" id="DescripcionM" rows="4" class="form-control" placeholder="Descripcion de Campaña Evangelistica" style="width: 98%;padding: 1%;"></textarea>
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
                                        <label class="label" style="text-align: center;font-weight: 900">Herramientas de Campaña</label>
                                    </div>
                                    <div class="row">
                                        <div class="col col-6 col-sm-6 col-xs-6 col-md-6" >
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsBibliaM" id="EsBibliaM" >
                                                <i></i>Biblia</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsHiminarioM" id="EsHiminarioM" >
                                                <i></i>Himinario</label>
                                        </div>
                                        <div class="col col-6 col-sm-6 col-xs-6 col-md-6" >
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsMusicaM" id="EsMusicaM" >
                                                <i></i>Musica</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsVideoM" id="EsVideoM" >
                                                <i></i>Video</label>
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
                                Modificar Campaña
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
                            <h4 class="modal-title" id="ModalIngresarEstudioBiblicoLabel">Ingresar Reunion de Estudio Biblico</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formEstudio" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LNR">
                                                        <input type="text" id="NombreReunion" name="NombreReunion" class="form-control" placeholder="Nombre de Reunion de Estudio Biblico" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="select foring LOR">
                                                        <select id="OpcVideoReunion" name="OpcVideoReunion" class="form-control">
                                                            <option value="">Seleccionar opcion de Video Conferencia</option>
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
                                                        <input type="text" name="Cod_Reunion" id="Cod_Reunion" class="form-control" placeholder="Codigo de Reunión de Estudio" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LDR">
                                                        <textarea name="DescripcionReunion" maxlength="200" id="DescripcionReunion" rows="4" class="form-control" placeholder="Descripcion de Reunión de Estudio Biblico" style="width: 98%;padding: 1%;"></textarea>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LER">
                                                        <select id="EstudioBiblicoReunion" name="EstudioBiblicoReunion" class="form-control">
                                                            <option value="">Seleccionar Estudio Biblico</option>
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
                                    <div class="row">
                                        <label class="label" style="text-align: center;font-weight: 900">Herramientas de Campaña</label>
                                    </div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsBibliaR" id="EsBibliaR" >
                                                <i></i>Biblia</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsHiminarioR" id="EsHiminarioR" >
                                                <i></i>Himinario</label>
                                        </div>
                                        <div class="col col-6">
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsMusicaR" id="EsMusicaR" >
                                                <i></i>Musica</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsVideoR" id="EsVideoR" >
                                                <i></i>Video</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <input type="hidden" name="id_peR" id="id_peR" value="<?php echo $_SESSION["id_Persona"] ?>">
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal" id="cancelIngresarEstudio">
                                Cancel
                            </button>
                            <button type="button" class="btn btn-primary" id="AgregarEstudioBiblico" >
                                Egregar Campaña
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
                            <h4 class="modal-title" id="ModalModifcarEstudioBiblicoLabel">Modificar Reunion de Estudio Bíblico</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formModificarEstudio" class="smart-form">
                                <fieldset style="padding-right: 0px;padding-left: 25px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Nombre de Reunión de Estudio Bíblico</label>
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
                                                            <option value="">Seleccionar opcion de Video Conferencia</option>
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
                                                    <label class="label">Codigo de Reunión de Estudio Bíblico</label>
                                                    <label class="input foring LCRM">
                                                        <input type="text" name="Cod_ReunionM" id="Cod_ReunionM" class="form-control" placeholder="Codigo de Reunión de Estudio" required />
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="label">Descrición de Reunión de Estudio Bíblico</label>
                                                    <label class="input foring LDRM">
                                                        <textarea name="DescripcionReunionM" maxlength="200" id="DescripcionReunionM" rows="4" class="form-control" placeholder="Descripcion de Reunión de Estudio Biblico" style="width: 98%;padding: 1%;"></textarea>
                                                    </label>
                                                </section>
                                            </div>
                                            <div class="form-group">
                                                <section>
                                                    <label class="input foring LCRM">
                                                        <label class="label">Estudio Bíblico a Estudiar</label>
                                                        <select id="EstudioBiblicoReunionM" name="EstudioBiblicoReunionM" class="form-control">
                                                            <option value="">Seleccionar Estudio Biblico</option>
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
                                    <div class="row">
                                        <label class="label" style="text-align: center;font-weight: 900">Herramientas de Campaña</label>
                                    </div>
                                    <div class="row">
                                        <div class="col col-6">
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsBibliaRM" id="EsBibliaRM" >
                                                <i></i>Biblia</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsHiminarioRM" id="EsHiminarioRM" >
                                                <i></i>Himinario</label>
                                        </div>
                                        <div class="col col-6">
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsMusicaRM" id="EsMusicaRM" >
                                                <i></i>Musica</label>
                                            <label class="checkbox">
                                                <input type="checkbox" name="EsVideoRM" id="EsVideoRM" >
                                                <i></i>Video</label>
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
                                Modificar Reunion de Estudio Biblico
                            </button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->

            <div class="modal fade" id="ModalSuscribirse" tabindex="-1" role="dialog" aria-labelledby="ModalSuscribirseLabel" aria-hidden="true">
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
                                        <label for="tags"> Codigo de Campaña Evangelistica</label>
                                        <input type="text" id="Cod_Camp_Eva" class="form-control" placeholder="Codigo de Campaña" required maxlength="15"/>
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
            <input id="PersonaUsuario" type="hidden" value="<?php echo $_SESSION["Persona"] ?>">
            <input id="id_Persona" type="hidden" value="<?php echo $_SESSION["id_Persona"]; ?>">
            <div class="row" style=" margin-left: 0px;margin-right: 0px;height: 100%;">

                <div class="col-xs-12 col-sm-9 col-md-9 col-lg-10 imagetot"  style="background-image: url('../images/fondo.png');margin-left: 0px;margin-right: 0px;padding-left: 0px;padding-right: 0px;height: 90%;">
                    <div id="header" style="background: none;">
                        <div id="logo-group">
                            <span id="logo"> <img class="imglog" src="../images/img_logo/adventist-es--ming.png" alt="SmartAdmin" > </span>
                        </div>
                        <div class="pull-right">
                            <ul id="mobile-profile-img" class="header-dropdown-list padding-5">
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
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> <u>C</u>onfiguración</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                        </li>
                                        <li class="divider"></li>

                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesion"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesion</strong></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div id="" class="transparent pull-right">
                                <ul id="" class="header-dropdown-list ">
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
                                                <a href="Configuracion.php" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> <u>C</u>onfiguración</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="profile.html" class="padding-10 padding-top-0 padding-bottom-0"> <i class="fa fa-user"></i> <u>P</u>erfil</a>
                                            </li>
                                            <li class="divider"></li>

                                            <li class="divider"></li>
                                            <li>
                                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i> <u>P</u>antalla <u>C</u>ompleta</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="../CerrarSesion.php" class="padding-10 padding-top-5 padding-bottom-5" data-action="userLogout"  data-logout-msg="Estas Seguro de Salir de Sesion"><i class="fa fa-sign-out fa-lg"></i> <strong><u>C</u>errar Sesion</strong></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="content" style="margin-bottom: 0px;display: flow-root;height: 100%;">
                        <div class="row" style="display: flex;height: 100%;justify-content: center;">
                            <div class="col-sm-10" style="height: 100%;">
                                <div class="contop" style="justify-content: center;display: flex;align-items: center;height: 100%;">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 divti" style="padding-bottom: 8%;display: flex;justify-content: center;"> 
                                            <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6" style="display: flex;justify-content: center;">
                                                <img id="imatit" src="../images/titulo.png">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-green  pricing-big panelm panEs">
                                                <div class="panel-heading panehead panelm-white" id="panHeadEsp" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img class="imgEs" src="../images/iconos/EstudioBiblia.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">Estudio Personal de la biblia</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esPer panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-green" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1><strong>Opciones</strong></h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li class="liespe"><i class="fa fa-plus text-success icEsp"></i> <strong style="color: #74a7ca;">Estudio Personal:  </strong>
                                                                <ul id="EsPersonal" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="BibliaPersonal.php"><strong>Biblia Personal</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Devocion_Matutina.php"><strong>Devocion Matutina</strong></a></li>
                                                                </ul>
                                                            <li>
                                                            <li class="limu"><i class="fa fa-plus text-success ismu"></i> <strong style="color: #74a7ca;">Musica:</strong>
                                                                <ul id="MusicaPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Himinario.php"><strong>Himinario</strong></a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Musica.php">Escuchar Musica</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Subir Musica</a></li>
                                                                </ul>
                                                            <li>
                                                            <li class="livi"><i class="fa fa-plus text-success icvi"></i> <strong style="color: #74a7ca;">Videos:</strong>
                                                                <ul id="VideoPe" style="display: none;">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Videos.php">Buscar Videos</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Subir Video</a></li>
                                                                </ul>
                                                            <li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-red pricing-big panelm panEs">
                                                <div class="panel-heading panehead panelm-white " id="panHeadEsBi" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/estudiosbiblicos.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Estudios Biblicos</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-esBi panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-red" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="CursoAdultoJoven.php"><strong> Cursos Bíblicos Adultos y Jóvenes</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i><a href="CursoAdolesNino.php"><strong> Cursos Bíblicos Adolescentes y Niños</strong></a></li>
                                                            <li><a class="liencaRe"><i class="fa fa-plus text-success icEncR"></i> <strong style="color: #74a7ca;">Encargado de:</strong></a>
                                                                <ul id="EncargadoReunion" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-success"></i> <a >No hay Campañas Registradas! </a></li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="lipartRe"><i class="fa fa-plus text-success icPartR"></i> <strong style="color: #74a7ca;">Participando en:</strong></a>
                                                                <ul id="ParticipandoReunion" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Encargado de:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Encargado de:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-success"></i> <a >No Participan en Ninguna Campaña! </a></li>
                                                                </ul>
                                                            </li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalIngresarEstudioBiblico"><strong>Agregar Reunion de Estudio Biblico</strong></a></li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalSuscribirse" ><strong>Suscribirse a Reunion de Estudio Biblico</strong></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-blueDark pricing-big panelm panEs">
                                                <div class="panel-heading panehead panelm-white " id="panHeadCamEva" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img src="../images/iconos/campanasevangelisticas.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Campañas Evangelsiticas</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-cam panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-gris" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features" >
                                                        <ul class="list-unstyled text-left">
                                                            <li><a class="lienca"><i class="fa fa-plus text-success icEnc"></i> <strong style="color: #74a7ca;">Encargado de:</strong></a>
                                                                <ul id="Encargado" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Semana de Oracion:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-success"></i> <a >No hay Campañas Registradas! </a></li>
                                                                </ul>
                                                            </li>
                                                            <li ><a class="lipart"><i class="fa fa-plus text-success icPart"></i> <strong style="color: #74a7ca;">Participando en:</strong></a>
                                                                <ul id="Participando" style="display: none">
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Campana_Evangelistica.php">Encargado de:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-check text-success"></i> <a href="Trabajando.php">Encargado de:</a></li>
                                                                    <li class="list-unstyled lipri"><i class="fa fa-fw fa-exclamation text-success"></i> <a >No Participan en Ninguna Campaña! </a></li>
                                                                </ul>
                                                            </li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalIngresarCampana"><strong>Agregar Campaña Evangelistica</strong></a></li>
                                                            <li><i class="fa fa-plus-circle text-success"></i> <a data-toggle="modal" data-target="#ModalSuscribirse" ><strong>Suscribirse a una campaña Evangelistica</strong></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                                            <div class="panel panel-orange  pricing-big panelm panEs" style="margin-bottom: 0px;">
                                                <div class="panel-heading panehead panelm-white " id="panHeadEsSab" style="border-radius: 10px 10px 10px 10px ;">
                                                    <div style="width: 100%;text-align: center">
                                                        <img  src="../images/iconos/escuelaSabatica.png" style="max-width: 55px">
                                                        <h3 class="panel-title titop">
                                                            Escuela Sabatica</h3>
                                                    </div>
                                                </div>
                                                <div class="panel-body no-padding text-align-center pan-bod-escu panelm-white" style="border-radius: 0px 0px 10px 10px">
                                                    <div class="the-price panel-heading panelm-warming" style="border-radius: 0px 0px 0px 0px;height: 45px;display: flex;justify-content: center;align-items: center;">
                                                        <h1>
                                                            <strong>Opciones</strong>
                                                        </h1>
                                                    </div>
                                                    <div class="price-features">
                                                        <ul class="list-unstyled text-left">
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="RepasoLeccion.php"><strong>Repaso de la Lección</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="ComentarioBiblico.php"><strong>Comentario Bíblico</strong></a></li>
                                                            <li class="lipri"><i class="fa fa-check text-success"></i> <a href="DiarioDevocional.php?idpersona=<?php echo $_SESSION["id_Persona"];?>" id="btnlistar"><strong>Diario Devocional</strong></a></li>
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
                </div>
                <aside class="hidden-xs col-sm-3 col-md-3 col-lg-2 "  style="position: absolute;top: 0;right:  0;z-index: 904;padding-top: 49px;height: 100%;background: linear-gradient(166deg,#3e8391 , black 80%);">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="float: start;align-items: flex-end;height: 50%;text-align: center;"> 
                        <br><img src="../images/iconos/user2.png" style="width: 30%;">
                        <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;"><?php echo $_SESSION["Persona"]; ?> </h2>
                        <?php if ($_SESSION["Ti_Persona"] === "E") { ?>
                            <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;"> Estudiante </h2>
                        <?php } else if ($_SESSION["Ti_Persona"] === "M") { ?>
                            <h2 style="font-size: 20px;text-align: center;color: white;font-weight: 600;">Iglesia <br>"<?php echo $_SESSION["Nombre_Iglesia"]; ?>"</h2>
                        <?php } ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12" style="float: bottom;align-items: flex-end;display: flex;height: 50%;padding-bottom: 10px">
                        <img src="../images/adventist-symbol-png--symbol/adventist-symbol--white.png" width="100%">
                    </div>
                </aside>
            </div>
            <?php include_once './inc2/scripts.php'; ?>
            <!--<script src="../js/jquery.min.js" type="text/javascript"></script>-->
            <script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>
            <script src="../js/Principal/Principal.js"></script>
            <script src="../js/CampanaEvangelistica/CampanaEvangelistica.js"></script>
            <!--<script src="../js/DevocionesMatutinas/DiarioDevocional.js" type="text/javascript"></script>-->
            <script type="text/javascript">
                $(document).ready(function () {
                    pageSetUp();
                    ValidarLider(<?php echo $_SESSION["id_Persona"]; ?>);
                    ListarCampanas(<?php echo $_SESSION["id_Persona"]; ?>);
                    ListarCampanaParticipante(<?php echo $_SESSION["id_Persona"]; ?>)
                    ListarReunionesEstudio(<?php echo $_SESSION["id_Persona"]; ?>);
                    ListarReunionesParticipantes(<?php echo $_SESSION["id_Persona"]; ?>)

                });
            </script>
        </body>

    </html>
    <?php
} else {
    include_once './inc2/Redireccionar.php';
}
?>
