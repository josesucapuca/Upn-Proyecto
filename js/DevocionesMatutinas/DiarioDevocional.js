$(document).ready(function () {
    alert("entrando calendario");
    $('#CalendarioWeb').fullCalendar({
        header: {
            left: 'today prev,next',
            center: 'title',
            right: 'month,basicweek, basicDay, agendaWeek, agendaDay'
        },
        dayClick: function (date, jsEvent, view) {
            $('#btnAgregar').prop("disabled", false);
            $('#btnModificar').prop("disabled", true);
            $('#btnEliminar').prop("disabled", true);

            limpiar();
            $('#txtFecha').val(date.format());
            $("#ModalEventos").modal();

        },
        events: 'http://localhost/Upn-Proyecto/Controlador/Controller-DiarioDevocional.php',
        eventClick: function (calEvent, jsEvent, view) {
            alert ("sdjsh");
            $('#btnAgregar').prop("disabled", true);
            $('#btnModificar').prop("disabled", false);
            $('#btnEliminar').prop("disabled", false);

            $('#tituloEvento').html(calEvent.Texto_estudio);
            //Mostrar información de los eventos
            $('#txtID_devocional').val(calEvent.id_Devocional_Diario);
            $('#txtID_persona').val(calEvent.id_Persona);
            $('#txtNombre').val(calEvent.No_Persona);
            $('#txtIgleDistri').val(calEvent.Nombre_Iglesia);
            $('#txtIgleDistri').val(calEvent.No_Distrito);
            $('#txtAsoMisio').val(calEvent.No_Mision);
            $('#txtTelefono').val(calEvent.tele_Persona);
            $('#txtEmail').val(calEvent.correo_Persona);
            $('#txtColor').val(calEvent.color);
            $('#txtTexto').val(calEvent.Texto_estudio);
            $('#txtResumen').val(calEvent.Resumen_Personal);
            $('#txtAplica').val(calEvent.Aplicacion_Diaria);
            $('#txtPedido').val(calEvent.Pedido_Oracion);
            $('#txtContestado').val(calEvent.id_Pedido_Oracion);
            $('#txtCompartire').val(calEvent.Meta);
            FechaHora = calEvent.start._i.split(" ");
            $('#txtFecha').val(FechaHora[0]);
            $('#txtHora').val(FechaHora[1]);

            $("#ModalEventos").modal();
        },
        editable: true,
        eventDrop: function (calEvent) {
            $('#txtID_devocional').val(calEvent.id_Devocional_Diario);
            $('#txtID_persona').val(calEvent.id_Persona);
            $('#txtNombre').val(calEvent.No_Persona);
            $('#txtIgleDistri').val(calEvent.Nombre_Iglesia);
            $('#txtIgleDistri').val(calEvent.No_Distrito);
            $('#txtAsoMisio').val(calEvent.No_Mision);
            $('#txtTelefono').val(calEvent.tele_Persona);
            $('#txtEmail').val(calEvent.correo_Persona);
            $('#txtColor').val(calEvent.color);
            $('#txtTexto').val(calEvent.Texto_estudio);
            $('#txtResumen').val(calEvent.Resumen_Personal);
            $('#txtAplica').val(calEvent.Aplicacion_Diaria);
            $('#txtPedido').val(calEvent.Pedido_Oracion);
            $('#txtContestado').val(calEvent.id_Pedido_Oracion);
            $('#txtCompartire').val(calEvent.Meta);

            var fechaHora = calEvent.start.format().split("T");
            $('#txtFecha').val(fechaHora[0]);
            $('#txtHora').val(fechaHora[1]);

            RecolectarDatos();
            EnviarInformacion('modificar', NuevoEvento, true);
        }

    });
});

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
function RecolectarDatos() {
    alert("entrando a Datos");
    NuevoEvento = {
        id_Devocional_Diario: $('#txtID_devocional').val(),
        id_Persona: $('#txtID_persona').val(),
        No_Persona: $('#txtNombre').val(),
        Nombre_Iglesia: $('#txtIgleDistri').val(),
        No_Distrito: $('#txtIgleDistri').val(),
        No_Mision: $('#txtAsoMisio').val(),
        tele_Persona: $('#txtTelefono').val(),
        correo_Persona: $('#correo_Persona').val(),
        color: $('#txtColor').val(),
        Texto_estudio: $('#txtTexto').val(),
        Resumen_Personal: $('#txtResumen').val(),
        Aplicacion_Diaria: $('#txtAplica').val(),
        Pedido_Oracion: $('#txtPedido').val() + " " + $('#txtContestado').val(),
        Fe_Detalle_Devocional_Diario: $('#txtFecha').val() + " " + $('#txtHora').val(),
        Meta: $('#txtCompartire').val(),
        textColor: "#FFFFFF"

    };
}
function EnviarInformacion(accion, objEvento, modal) {
    $.ajax({
        type: 'POST',
        url: 'Controlador/Controller-DiarioDevocional.php?accion=' + accion,
        data: objEvento,
        success: function (msg) {
            if (msg) {
                $('#CalendarioWeb').fullCalendar('refetchEvents');
                if (!modal) {
                    $("#ModalEventos").modal('toggle');
                }

            }
        },
        error: function () {
            alert("Hay un error...");
        }
    });
}

function limpiar() {
    $('#txtID_devocional').val('');
    $('#txtID_persona').val('');
    $('#txtColor').val('');
    $('#txtTexto').val('');
    $('#txtResumen').val('');
    $('#txtAplica').val('');
    $('#txtPedido').val('');
    $('#txtContestado').val('');
    $('#txtCompartire').val('');
}




