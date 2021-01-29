$(document).ready(function () {
//    alert("entrando calendario otra vez");
    $('#CalendarioWeb').fullCalendar({
        header: {
            left: 'today prev,next',
            center: 'title',
            right: 'month,basicweek, basicDay, agendaWeek'
        },
        dayClick: function (date, jsEvent, view) {

            var myDate = new Date();
            //Cuantos días se agregarán desde hoy?
            var diasAdicionales = -1;
            myDate.setDate(myDate.getDate() + diasAdicionales);
            if (date < myDate)
            {
                Swal.fire({
                    type: 'error',
                    title: '¡No se puede crear un diario devocional!',
                    text: 'en días anteriores!',
                    showConfirmButton: false,
                    timer: 3000
                });
            }
            else
            {
                $('#btnAgregar').prop("disabled", false);
                $('#btnModificar').prop("disabled", true);
                $('#btnEliminar').prop("disabled", true);
                //Campos desbloqueados
                $('#txtTexto').prop("disabled", false);
                $('#txtColor').prop("disabled", false);
                $('#txtResumen').prop("disabled", false);
                $('#txtAplica').prop("disabled", false);
                $('#txtPedido').prop("disabled", false);
                $('#txtMeta').prop("disabled", false);
                limpiar();
                $('#txtFecha').val(date.format());
//            $('#txtID_persona').val(jsEvent.format());           
                $("#ModalDevocional").modal();
            }
        },
        events: '../Controlador/Controller-DiarioDevocional.php',
        eventClick: function (calEvent, jsEvent, view) {
//            alert ("sdjsh");
            $('#btnAgregar').prop("disabled", true);
            $('#btnModificar').prop("disabled", false);
            $('#btnEliminar').prop("disabled", false);
            //bloquear campos después de insertarlos
            $('#txtTexto').prop("disabled", true);
            $('#txtColor').prop("disabled", true);
            $('#txtResumen').prop("disabled", true);
            $('#txtAplica').prop("disabled", true);
            $('#txtPedido').prop("disabled", true);
            $('#txtMeta').prop("disabled", true);
// Mostrar información breve en el calendario
            $('#txtTexto').html(calEvent.title);
            $('#txtTexto').val(calEvent.title);
//            //Mostrar información en el modal
            $('#txtID_devocional').val(calEvent.id_Devocional_Diario);
            $('#txtID_persona').val(calEvent.id_Persona);
            $('#txtNombre').val(calEvent.Persona);
            $('#txtIgleDistri').val(calEvent.Nombre_Iglesia + "" + calEvent.No_Distrito);
            $('#txtAsoMisio').val(calEvent.No_Mision);
            $('#txtTelefono').val(calEvent.tele_Persona);
            $('#txtcorreo').val(calEvent.correo_Persona);
            $('#txtColor').val(calEvent.color);
            $('#txtResumen').val(calEvent.Resumen_Personal);
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
//    $.ajax({
//        url: "../name.php",
//        method: "POST",
//        data: $('#add_name').serialize(),
//        success: function (data)
//        {
//            alert(data);
            RecolectarDatos();
//            $('#add_name')[0].reset();
//
            EnviarInformacion('agregar', NuevoEvento);
//        }
//    });

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
        Meta: $('#txtMeta').val(),
        Pedido_Oracion: $('#txtPedido').val()
//        Fe_Detalle_Devocional_Diario: $('#txtFecha').val() + " " + $('#txtHora').val(),

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




