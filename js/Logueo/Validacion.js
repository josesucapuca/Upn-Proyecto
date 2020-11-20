function validar(){
    var Usuario =$("#Usuario").val();
    var Password=$("#password").val();
    $.ajax({
        type: "POST",
        url: '../Controlador/Logueo.php',
        data: {opc: "ValidarUsuario", a: Usuario, b: Password},
        success: function (response)
        {
            if (response) {
                location.href = "CRUD_Local.php";
            } else {
                alert("No se Pudo Desactivar");
                location.href = "CRUD_Local.php";
            }
        }
    });
}