$(document).ready(function () {

    Mision();
    $("#sel_mision").change(function (){
       var id_Mision = $("#sel_mision").val();
            Distrito(id_Mision); 
    });
     $("#sel_distrito").change(function (){
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
        data: {opc: "ListarDistrito",id_Mision:id_Mision},
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
        data: {opc: "ListarIglesia", id_Distrito:id_Distrito},
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

