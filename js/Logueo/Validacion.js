$("#login").click(function () {
    validar();
});
function validar() {
    var Usuario = $("#Usuario").val();
    var Password = $("#Password").val();
    if (Usuario !== "" && Password !== "") {
        $.ajax({
            type: "POST",
            url: 'Controlador/Logueo.php',
            data: {opc: "ValidarUsuario", a: Usuario, b: Password},
            success: function (response)
            {
                alert(response);
                var jsonData = JSON.parse(response);

                if (jsonData[0].nro === "1") {
                    CrearUsaurio(Usuario, Password);
                } else {
//                    alert("Usuario o Password Incorrecto");
                    $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡usuario y/o contraseña!</strong>\n\
                                            incorrecto</div>");
                }
            }
        });
    } else {
//        alert("Ingrese Usuario y Contraseña");
        $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡Ingrese!</strong>el \n\
                                               usuario y/o contraseña</div>");
    }
}
function CrearUsaurio(U, P) {
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "CrearSesion", a: U, b: P},
        success: function (response)
        {
            location.href = "Vista/Principal.php";
        }
    });
}


