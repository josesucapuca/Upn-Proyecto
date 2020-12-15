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
                    $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡usuario y/o contraseña!</strong>\n\
                                            incorrecto</div>");
                }
            }
        });
    } else {
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


function Restablecer_Contra(){
    var correo_Persona = $("#Correor").val();
    if(correo_Persona.length==0){
        return Swal.fire("Llene el campo correo", "para poder recuperar la contraseña", "warning");
    }
    var caracteres ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ23456789";
    var Contra ="";
    var caracteresusuario = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ23456789";
    var Usuario ="";
    for(var i=0;i<8;i++){
        Contra+=caracteres.charAt(Math.floor(Math.random()*caracteres.length));
        Usuario+=caracteresusuario.charAt(Math.floor(Math.random()*caracteresusuario.length));
    }
    alert(Usuario);
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "RecuperarContra", 
            correo_Persona:correo_Persona, 
            Contra: Contra,
            Usuario:Usuario
        },
        success: function (response)
        {
            Swal.fire({
                            type: 'success',
                            title: '¡Se envio tu nueva contraseña, revisa tu correo!',
                            showConfirmButton: false,
                            timer: 3000
                        }).then(function () {
                            window.location = "Iniciar.php";
                        });
        }        
    });
}




