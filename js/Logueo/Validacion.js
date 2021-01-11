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

//RECUPERAR CONTRASEÑA Y USUARIO
function Restablecer_Contra() {
    var correo_Persona = $("#Correor").val();
    if (correo_Persona.length == 0) {
        return Swal.fire("Llene el campo correo", "para poder recuperar la contraseña", "warning");
    }
    var caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ23456789";
    var Contra = "";
    for (var i = 0; i < 8; i++) {
        Contra += caracteres.charAt(Math.floor(Math.random() * caracteres.length));
    }
    // alert(Usuario);
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "RecuperarContra",
            correo_Persona: correo_Persona,
            Contra: Contra
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

//CARGAR DATOS
function cargardatos() {
    alert("en pruebas aún");
    var id_Usuario = $("#idediuser").val();
//    $("#ediidusuario").val(id_Usuario);
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "ActualizarDatos",id_Usuario: id_Usuario},
        success: function (response)
        {
           alert(response); 
           var validar = 1;
           if(response == validar){
               $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡se actualizo!</strong>el \n\
                                               los campos</div>");
//            echo '<script>alert("se actualizo los cambios");window.location="/Tabla-datos-grid/Perfil.php";</script>';
        }else{
            $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡No se!</strong>el \n\
                                               actualizo</div>");
//            echo '<script>alert("no se guardo:( ");window.location="/Tabla-datos-grid";</script>';
        }
        }
    });
}


