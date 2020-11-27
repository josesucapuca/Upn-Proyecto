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
                var jsonData = JSON.parse(response);

                if (jsonData[0].nro === "1") {
                    CrearUsaurio(Usuario, Password);
                } else {
                    alert("Usuario o Password Incorrecto");
                }
            }
        });
    } else {
        alert("Usuario o Password Incorrecto");
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

