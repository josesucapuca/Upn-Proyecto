$(document).ready(function () {

    Mision();
    $("#sel_mision").change(function () {
        var id_Mision = $("#sel_mision").val();
        Distrito(id_Mision);
    });
    $("#sel_distrito").change(function () {
        var id_Distrito = $("#sel_distrito").val();
        Iglesia(id_Distrito);
    });

});
function Mision() {
//    alert("entro commbito :D");
    $.ajax({
        type: "POST",
        url: 'Controlador/Controller_RegistrarUsuario.php',
        data: {opc: "ListarMision"},
        success: function (response)
        {
//            alert(response);
            var data = JSON.parse(response);
            var cadena = "";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
                }
                $("#sel_mision").html(cadena);
                var id_Mision = $("#sel_mision").val();
                Distrito(id_Mision);
            } else {
                cadena += "<option value=''>No hay datos</option>";
                $("#sel_mision").html(cadena);
            }
        }
    });
}
function Distrito(id_Mision) {
//    alert("entro commbito :D");
    $.ajax({
        type: "POST",
        url: 'Controlador/Controller_RegistrarUsuario.php',
        data: {opc: "ListarDistrito", id_Mision: id_Mision},
        success: function (response)
        {
//            alert(response);
            var data = JSON.parse(response);
            var cadena = "";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
                }
                $("#sel_distrito").html(cadena);
                var id_Distrito = $("#sel_distrito").val();
                Iglesia(id_Distrito);
            } else {
                cadena += "<option value=''>No hay datos</option>";
                $("#sel_distrito").html(cadena);
            }
        }
    });
}
function Iglesia(id_Distrito) {
//    alert("entro commbito :D");
    $.ajax({
        type: "POST",
        url: 'Controlador/Controller_RegistrarUsuario.php',
        data: {opc: "ListarIglesia", id_Distrito: id_Distrito},
        success: function (response)
        {
//            alert(response);
            var data = JSON.parse(response);
            var cadena = "";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
                }
                $("#sel_iglesia").html(cadena);
            } else {
                cadena += "<option value=''>No hay datos</option>";
                $("#sel_iglesia").html(cadena);
            }
        }
    });
}

function resgitarusuario() {
//    alert ("entro registrar");
    var No_Persona = $("#txtnombre").val();
    var AP_Persona = $("#txtapellido").val();
    var Edad_Persona = $("#txtedad").val();
    var Se_Persona = $("#cbosexo").val();
    var Es_Civil_Persona = $("#cbocivil").val();
    var Ti_Persona = $("#cbotipo").val();
    var dire_Persona = $("#txtdireccion").val();
    var tele_Persona = $("#txttelefono").val();
    var correo_Persona = $("#txtcorreo").val();
    var id_Iglesia = $("#sel_iglesia").val();
    var Usuario = $("#txtusuario").val();
    var Password = $("#txtcontraseña").val();
    var repass = $("#txtconfirmarcontra").val();
//    alert(No_Persona);
    if (No_Persona.length > 0 & AP_Persona.length > 0 & Edad_Persona.length > 0 & 
            Se_Persona.length > 0 & Es_Civil_Persona.length > 0 & Ti_Persona.length > 0 & 
            dire_Persona.length > 0 & tele_Persona.length > 0 & correo_Persona.length > 0 & 
            id_Iglesia.length > 0 & Usuario.length > 0 & Password.length > 0 & repass.length===Password.length) {
//        alert("['repass']");
        $.ajax({
            type: "POST",
            url: 'Controlador/Controller_RegistrarUsuario.php',
            data: {
                opc: "RegistrarUsuario",
                No_Persona: No_Persona,
                AP_Persona: AP_Persona,
                Edad_Persona: Edad_Persona,
                Se_Persona: Se_Persona,
                Es_Civil_Persona: Es_Civil_Persona,
                Ti_Persona: Ti_Persona,
                dire_Persona: dire_Persona,
                tele_Persona: tele_Persona,
                correo_Persona: correo_Persona,
                id_Iglesia: id_Iglesia,
                Usuario: Usuario,
                Password: Password               
            },
            success: function (response)
            {
                alert(response);
                if (response) {
//                   alert("se registro"); 
//                    $("#result").html("<div class='alert alert-success' role='alert'> listo, <strong>Bienvenido!</strong></div>");
                    location.href = "Iniciar.php";
                } else {
                    alert("No se pudo completar la operación");
                }
            }
        });

    } else {
        $("#result").html("<div class='alert alert-danger' role='alert'> Ingrese <strong>todos los campos </strong> por favor </div>");
    }
}


