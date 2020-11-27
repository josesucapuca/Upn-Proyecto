$("#logoi").click(function (){
    alert();
    CerrarSesion();
    location.href = "Principal.php";
});
function CerrarSesion() {
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "SalirSesion"},
        success: function (response)
        {
            location.href = "Principal.php";
        }
    });
}