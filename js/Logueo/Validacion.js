$("#IngresarUsuario").click(function () {
    Validar();
});
function validar() {
    var Usuario = $("#Usuario").val();
    var Password = $("#password").val();
    if (Usuario !== "" && Password !== "") {
        $.ajax({
            type: "POST",
            url: '../Controlador/Logueo.php',
            data: {opc: "ValidarUsuario", a: Usuario, b: Password},
            success: function (response)
            {
                if (response) {
                    CrearUsaurio(Usuario, Password);
                } else {
                    alert("Usuario o Password Incorrecto")
                }
            }
        });
    } else {
    }

}
function CrearUsaurio(U, P) {
    $.ajax({
        type: "POST",
        url: '../Controlador/Logueo.php',
        data: {opc: "ValidarUsuario", a: U, b: P},
        success: function (response)
        {
            if (response) {

            } else {
                alert("No se Pudo Ingresar");
//                location.href = "index.php";
            }
        }
    });
}
