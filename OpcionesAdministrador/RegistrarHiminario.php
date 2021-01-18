<?php
include_once '../DAO/HiminarioDAO.php';
$obj = new HiminarioDAO();
session_start();
$var = $obj->ListarHiminarioTotalDAO();
$var2 = $obj->ListarHiminario();
$var3 = $obj->ListarHiminario();

if ($_SESSION["Usuario"] !== null) {
    ?>
    <!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta charset="utf-8">
            <meta name="description" content="">
            <meta name="author" content="">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <link rel="stylesheet" type="text/css" media="screen" href="../Vista/css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" media="screen" href="../Vista/css/smartadmin-production-plugins.min.css">
            <link rel="stylesheet" type="text/css" media="screen" href="../Vista/css/smartadmin-skins.min.css">
            <link rel="stylesheet" type="text/css" media="screen" href="../Vista/css/smartadmin-rtl.min.css"> 
            <link rel="stylesheet" type="text/css" media="screen" href="../Vista/css/demo.min.css">
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">
            <meta name="apple-mobile-web-app-capable" content="yes">
            <meta name="apple-mobile-web-app-status-bar-style" content="black">
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
            <link rel="stylesheet" href="css/datatables.min.css">
            <link rel="stylesheet" href="css/fullcalendar.min.css">
            <link rel="stylesheet" href="css/bootadmin.min.css">
            <link rel="stylesheet" href="css2/bootadmin.min.css">

            <title>Datatables | BootAdmin</title>
        </head>
        <body id="idbody" class="bg-light">
            <div id="Alertsucces" class="alert alert-success alert-dismissible" style="display: none;">
                Se Ingreso Producto Correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div id="Alertsucces" class="alert alert-danger alert-dismissible"  style="display: none;">
                No Se puedo 
                Correctamente
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal fade bd-example-modal-lg" id="ModalIngresarLocal" tabindex="-1" role="dialog" aria-labelledby="ModalIngresarLocalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Ingresar Himno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card-body modal-body">
                            <form id="FormIngresarLocal" name="FormIngresarLocal" >
                                <div class="form-row">
                                    <input id="id_Emp" name="id_Emp" type="hidden" value="<?php echo $_SESSION["id_Empresa"] ?>">
                                    <input id="opc" name="opc"type="hidden" value="IngresarLocal">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Nombre de Himno (*)</label>
                                        <input name="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre de Himno" required="" maxlength="100" autofocus="">
                                        <div id="NoValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="NoInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Numero de Himno (*)</label>
                                        <input name="Numero" type="number" class="form-control" id="Numero" placeholder="Nombre de Himno" required="" maxlength="100" autofocus="" max="999" min="1">
                                        <div id="NoValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="NoInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                    <div class="col-md-12 mb-3" >
                                        <label for="validationServer01">Himinario(*)</label>
                                        <select class="form-control " name="Himinario" id="Himinario" required="">
                                            <option value="">Seleccionar Himinario</option>
                                            <?php while ($data1 = $var2->fetch_object()) {
                                                ?>
                                                <option value="<?php echo $data1->id_Himinario ?>"><?php echo $data1->No_Himinario ?></option>
                                            <?php } ?>

                                        </select>
                                        <div id="himValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="himInValid" class="invalid-feedback" style="display: none">
                                            Seleccionar Estado de Local
                                        </div>
                                    </div>
                                    <!--<div class="col-md-12 mb-3">
                                        <label for="validationServer01">Letras del Himno(*)</label>
                                        <div class="panel-body Comen" style="background: #0091d9;border-radius: 10px;padding: 10px" >
                                        </div>
                                        <p>
                                            <button id="edit" class="btn btn-sm btn-primary" onclick="edita()" type="button">
                                                Edit
                                            </button>
                                            <button id="save" class="btn btn-primary" onclick="saved()" type="button">
                                                Save
                                            </button>
                                        </p>

                                        <div id="NoValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="NoInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>-->
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">Letras del Himno(*)</label>
                                        <textarea name="ckeditor" cols="80" id="Contenido" rows="10"></textarea>	
                                        <div id="contValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="contInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">URL de Himno(*)</label>
                                        <input name="URL" type="text" class="form-control" id="URL" placeholder="Direccion" required="" maxlength="100" autofocus="">
                                        <div id="URLValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="URLInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="closew" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button  id="btn_Ingresar" type="button" class="btn btn-success">Ingresar Himno</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade bd-example-modal-lg" id="ModalModificarHiminario" tabindex="-1" role="dialog" aria-labelledby="ModalModificarHiminarioTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Modificar Himno</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card-body modal-body">
                            <form  >
                                <div class="form-row">
                                    <input id="iu" name="iu" type="hidden" value="<?php echo $_SESSION["id_Usuario"] ?>">
                                    <input id="id_Himno" name="id_Himno"type="hidden" value="">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Nombre de Himno (*)</label>
                                        <input name="NombreM" type="text" class="form-control" id="NombreM" placeholder="Nombre de Himno" required="" maxlength="100" autofocus="">
                                        <div id="NoValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="NoInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationServer01">Numero de Himno (*)</label>
                                        <input name="NumeroM" type="number" class="form-control" id="NumeroM" placeholder="Nombre de Himno" required="" maxlength="100" autofocus="" max="999" min="1">
                                        <div id="NoValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="NoInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                    <div class="col-md-12 mb-3" >
                                        <label for="validationServer01">Himinario(*)</label>
                                        <select class="form-control" name="HiminarioModificar" id="HiminarioModificar" required="">
                                            <option value="">Seleccionar Himinario</option>
                                            <?php while ($data2 = $var3->fetch_object()) {
                                                ?>
                                                <option value="<?php echo $data2->id_Himinario ?>"><?php echo $data2->No_Himinario ?></option>
                                            <?php } ?>

                                        </select>
                                        <div id="himValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="himInValid" class="invalid-feedback" style="display: none">
                                            Seleccionar Estado de Local
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">Letras del Himno(*)</label>
                                        <textarea name="ckeditor2" cols="80" id="ContenidoM" rows="10"></textarea>	
                                        <div id="contMValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="contMInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label for="validationServer01">URL de Himno(*)</label>
                                        <input name="URLM" type="text" class="form-control" id="URLM" placeholder="Direccion" required="" maxlength="100" autofocus="">
                                        <div id="URLMValid" class="valid-feedback" style="display: none">
                                            Valido
                                        </div>
                                        <div id="URLMInValid" class="invalid-feedback" style="display: none">Invalido</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button id="closew" type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button  id="btn_Modificar" type="button" class="btn btn-success">Modificar Himno</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex">
                <div class="content p-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div style="text-align: center">
                                <h1 class="mb-4">Himnos</h1>
                            </div>
                            <div class="content">
                                <button type="button" class="btn btn-success btn-lg btn-block" style="border: solid 2px #28a745" data-toggle="modal" data-target="#ModalIngresarLocal">Ingresar Nuevo Himnos</button>
                            </div>  
                        </div>
                        <div class="card-body" style="padding-top: 0px;">
                            <table id="example" class="table table-hover" cellspacing="0" width="100%" style="border: solid 1px #b9bbbe;width: 100%;border-radius: 10px;">
                                <thead>
                                    <tr>
                                        <th style="max-width: 30px;text-align: top;">Nro.</th>
                                        <th>Nombre</th>
                                        <th >Contenido</th>
                                        <th>Url</th>
                                        <th class="actions" style="text-align: center;" >Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 0;
                                    while ($data = $var->fetch_object()) {
                                        ?>
                                        <tr>
                                            <td><?php echo $data->Nu_Himno ?></td>
                                            <td><?php echo $data->No_Himno ?></td>
                                            <td ><?php echo $data->Cont_Himno ?></td>
                                            <td><?php echo $data->URL_Himno ?></td>
                                            <td><button class="btn btn-primary" onclick="LLenarHimno(<?php echo $data->id_Himno ?>)" data-toggle="modal" data-target="#ModalModificarHiminario">Modificar</button> <button class="btn btn-danger">Desactivar</button></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <script src="js/jquery.min.js"></script>
            <script src="js/bootstrap.bundle.min.js"></script>
            <script src="js/datatables.min.js"></script>
            <script src="js/moment.min.js"></script>
            <script src="js/fullcalendar.min.js"></script>
            <script src="js/bootadmin.min.js"></script>
            <script src="../Vista/js/plugin/summernote/summernote.min.js"></script>
            <script src="../Vista/js/plugin/ckeditor/ckeditor.js"></script>
            <script src="js/Himinario/Himinario.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $("#Numero").keypress(function () {
                        if ($("#Numero").val() <= 0) {
                            $("#Numero").val("");
                        }
                    });
                    
                    $('#example').DataTable();
                });
            </script>

            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118868344-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-118868344-1');
            </script>

            <script>
                (adsbygoogle = window.adsbygoogle || []).push({
                    google_ad_client: "ca-pub-4097235499795154",
                    enable_page_level_ads: true
                });
            </script>

            <script type="text/javascript">

                // DO NOT REMOVE : GLOBAL FUNCTIONS!

                $(document).ready(function () {
                    edita();

                    /*
                     * SUMMERNOTE EDITOR
                     */

                    $('.summernote').summernote({
                        height: 100,
                        focus: false,
                        tabsize: 2
                    });




                })

            </script>
            <script>
                function edita() {
                    $("#edit").attr("disabled", "disabled");
                    $('.Comen').summernote({
                        focus: true
                    });

                }
                ;
                function saved() {
                    $("#edit").removeAttr("disabled");
                    $('.Comen').destroy();
                }
                ;
            </script>
        </body>
    </html>    <?php
} else {
    ?><script type="text/javascript">
        location.href = "#";
    </script><?php
}
?>