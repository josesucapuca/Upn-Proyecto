function salir() {
    $.ajax({
        type: "POST",
        url: '../Controlador/Logueo.php',
        data: {opcion: "SalirSesion"},
        success: function (response)
        {
            location.href = "VistaLogueo.php";
        }
    });

}
