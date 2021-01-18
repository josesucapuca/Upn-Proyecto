function ValidarLider(id){
    $.ajax({
        type: "POST",
        url: '../Controlador/Principal.php',
        data: {opc: "ValidarLider",id:id},
        success: function (response)
        {
            
        }
    });
}