$(document).ready(function () {
//    alert("entrando calendario otra vez");
    $('#CalendarioWeb').fullCalendar({
        header: {
            left: 'today prev,next',
            center: 'title',
            right: 'month,basicweek, basicDay, agendaWeek'
        },
        dayClick: function (date, jsEvent, view) {
            $('#btnAgregar').prop("disabled", false);
            $('#btnModificar').prop("disabled", true);
            $('#btnEliminar').prop("disabled", true);
            $('#txtResumen').prop("disabled", false);
            limpiar();
            $('#txtFecha').val(date.format());
//            $('#txtID_persona').val(jsEvent.format());           
            $("#ModalDevocional").modal();
        },
        events: 'http://localhost/Upn-Proyecto/Controlador/Controller-DiarioDevocional.php',
        eventClick: function (calEvent, jsEvent, view) {
//            alert ("sdjsh");
            $('#btnAgregar').prop("disabled", true);
            $('#btnModificar').prop("disabled", false);
            $('#btnEliminar').prop("disabled", false);
// Mostrar información breve en el calendario
            $('#txtTexto').html(calEvent.title);
            $('#txtTexto').val(calEvent.title);
//            //Mostrar información en el modal
            $('#txtID_devocional').val(calEvent.id_Devocional_Diario);
            $('#txtID_persona').val(calEvent.id_Persona);
//             $('#txtdetalle_devocional').val(calEvent.id_Detalle_Devocional_Diario);
            $('#txtNombre').val(calEvent.No_Persona);
            $('#txtIgleDistri').val(calEvent.Nombre_Iglesia + "" + calEvent.No_Distrito);
            $('#txtAsoMisio').val(calEvent.No_Mision);
            $('#txtTelefono').val(calEvent.tele_Persona);
            $('#txtcorreo').val(calEvent.correo_Persona);
            $('#txtColor').val(calEvent.color);
            $('#txtResumen').html(calEvent.Resumen_Personal);
            $('#txtAplica').val(calEvent.Aplicacion_Diaria);
            $('#txtPedido').val(calEvent.Pedido_Oracion);
            $('#txtContestado').val(calEvent.id_Pedido_Oracion);
            $('#txtMeta').val(calEvent.Meta);
            FechaHora = calEvent.start._i.split(" ");
            $('#txtFecha').val(FechaHora[0]);
            $('#txtHora').val(FechaHora[1]);
            $("#ModalDevocional").modal();
        }
    });
});

//Lista de botones
var NuevoEvento;
$('#btnAgregar').click(function () {
    RecolectarDatos();
    EnviarInformacion('agregar', NuevoEvento);
});

$('#btnEliminar').click(function () {
    RecolectarDatos();
    EnviarInformacion('eliminar', NuevoEvento);
});

$('#btnModificar').click(function () {
    RecolectarDatos();
    EnviarInformacion('modificar', NuevoEvento);
});

//Datos para insertar o modificar
function RecolectarDatos() {
//    alert("entrando a Datos");
    NuevoEvento = {
        id_Devocional_Diario: $('#txtID_devocional').val(),
        id_Persona: $('#txtID_persona').val(),
        color: $('#txtColor').val(),
        title: $('#txtTexto').val(),
        Resumen_Personal: $('#txtResumen').val(),
        Aplicacion_Diaria: $('#txtAplica').val(),
//        Pedido_Oracion: $('#txtPedido').val() + " " + $('#txtContestado').val(),
//        Fe_Detalle_Devocional_Diario: $('#txtFecha').val() + " " + $('#txtHora').val(),
        Meta: $('#txtMeta').val()

    };
}
//acción del controlador- AGREGAR
function EnviarInformacion(accion, objEvento, modal) {
    $.ajax({
        type: 'POST',
        url: '../Controlador/Controller-DiarioDevocional.php?accion=' + accion,
        data: objEvento,
        success: function (msg) {
            if (msg) {
                $('#CalendarioWeb').fullCalendar('refetchEvents');
//                if (!modal) {
                $("#ModalDevocional").modal('toggle');
//                }
            }
        },
        error: function () {
            alert("Hay un error...");
        }
    });
}
//limpiar campos
function limpiar() {
    $('#txtID_devocional').val('');
//    $('#txtID_persona').val('');
    $('#txtColor').val('');
    $('#txtTexto').val('');
    $('#txtResumen').val('');
    $('#txtAplica').val('');
    $('#txtPedido').val('');
    $('#txtContestado').val('');
    $('#txtMeta').val('');
}




