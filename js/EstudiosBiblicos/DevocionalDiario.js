$(document).ready(function () {
    calendario();
});
function calendario() {
    alert("nuevo calendario");
    var id_Persona = $("#id_Persona").val();
    $('#CalendarioWeb').fullCalendar({
        header: {
            left: 'today prev,next',
            center: 'title',
            right: 'month,basicweek, basicDay, agendaWeek'
        },
        dayClick: function (date, jsEvent, view) {
//            $('#btnAgregar').prop("disabled", false);
//            $('#btnModificar').prop("disabled", true);
//            $('#btnEliminar').prop("disabled", true);

//            limpiar();
//            $('#txtFecha').val(date.format());
            $("#ModalDevocional").modal(DiarioDevocional(id_Persona));
            

        }
        
    });
}
function DiarioDevocional(id_Persona) {
    alert("entro nuevo js");
    $.ajax({
        type: "POST",
        url: '../Controlador/DiarioDevocional.php',
        data: {opc: "listarDevocional", 
            id_Persona: id_Persona},
        success: function (response)
        {
            
//            alert("entro response");
            alert("data"+ response);
//            listarDiario();
            
//            RecolectarDatos();
//            location.href = "Vista/Principal.php";
        }
    });
}
function listarDiario(){
    alert("entro listar");
    var modal = $("#ModalDevocional").DataTable({
        "ajax":{
            url: '../Controlador/DiarioDevocional.php',
            type: "POST"
        },
        "columns":[
            {"data": "id_Devocional_Diario"},
            {"data": "id_Persona"},
            {"data": "No_Persona"},
            {"data": "Nombre_Iglesia"},
            {"data": "No_Distrito"}
        ]
    });
}
var NuevoEvento;
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