function validar(){
    alert("entroooo");
    var Usuario =$("#Usuario").val();
    var Password=$("#password").val();
    $.ajax({
        type: "POST",
        url: '../Controlador/Logueo.php',
        data: {opc: "IniciarSesion", a: Usuario, b: Password},
        success: function (response)
        {
            if (response) {
                alert("data");
                location.href = "welcome.php";
            } else {
                alert("No se Pudo Ingresar");
//                location.href = "index.php";
            }
        }
    });
}