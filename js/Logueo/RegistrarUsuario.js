$(document).ready(function () {

    Mision();
    $("#sel_mision").change(function () {
        var id_Mision = $("#sel_mision").val();
        Distrito(id_Mision);
    });
    $("#sel_distrito").change(function () {
        var id_Distrito = $("#sel_distrito").val();
        Iglesia(id_Distrito);
    });

});

//LLENANDO LOS COMBOS
function Mision() {
    $.ajax({
        type: "POST",
        url: 'Controlador/Controller_RegistrarUsuario.php',
        data: {opc: "ListarMision"},
        success: function (response)
        {
//            alert(response);
            var data = JSON.parse(response);
            var cadena = "<option value=''>SELECCIONAR MISIÓN</option>";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
                }
                $("#sel_mision").html(cadena);
                var id_Mision = $("#sel_mision").val();
                Distrito(id_Mision);
            } else {
                cadena += "<option value=''>No hay datos</option>";
                $("#sel_mision").html(cadena);
            }
        }
    });
}
function Distrito(id_Mision) {
    $.ajax({
        type: "POST",
        url: 'Controlador/Controller_RegistrarUsuario.php',
        data: {opc: "ListarDistrito",id_Mision:id_Mision},
        success: function (response)
        {
//            alert(response);
            var data = JSON.parse(response);
            var cadena = "<option value=''>SELECCIONE UN DISTRITO</option>";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
                }
                $("#sel_distrito").html(cadena);
                var id_Distrito = $("#sel_distrito").val();
                Iglesia(id_Distrito);
            } else {
                cadena += "<option value=''>No hay datos</option>";
                $("#sel_distrito").html(cadena);
            }
        }
    });
}
function Iglesia(id_Distrito) {
    $.ajax({
        type: "POST",
        url: 'Controlador/Controller_RegistrarUsuario.php',
        data: {opc: "ListarIglesia", id_Distrito:id_Distrito},
        success: function (response)
        {
            var data = JSON.parse(response);
            var cadena = "";
            if (data.length > 0) {
                for (var i = 0; i < data.length; i++) {
                    cadena += "<option value='" + data[i][0] + "'>" + data[i][1] + "</option>";
                }
                $("#sel_iglesia").html(cadena);
            } else {
                cadena += "<option value=''>No hay datos</option>";
                $("#sel_iglesia").html(cadena);
            }
        }
    });
}

//INSERTAR UN USUARIO Y PERSONA
function resgitarusuario() {
    var No_Persona = $("#txtnombre").val();
    var AP_Persona = $("#txtapellido").val();
    var Edad_Persona = $("#txtedad").val();
    var Se_Persona = $("#cbosexo").val();
    var Es_Civil_Persona = $("#cbocivil").val();
    var Ti_Persona = $("#cbotipo").val();
    var dire_Persona = $("#txtdireccion").val();
    var tele_Persona = $("#txttelefono").val();
    var correo_Persona = $("#txtcorreo").val();
    var id_Iglesia = $("#sel_iglesia").val();
    var Usuario = $("#txtusuario").val();
    var Contra = $("#password").val();
    if (No_Persona.length > 0 & AP_Persona.length > 0 & Edad_Persona.length > 0 &
            Se_Persona.length > 0 & Es_Civil_Persona.length > 0 & Ti_Persona.length > 0 &
            dire_Persona.length > 0 & tele_Persona.length > 0 & correo_Persona.length > 0 &
            id_Iglesia.length > 0 & Usuario.length > 0 & Contra.length > 0) {
        if (campos.usuario && campos.nombre && campos.apellido && campos.direccion && campos.edad && campos.password && campos.correo && campos.telefono) {
            
            $.ajax({
                type: "POST",
                url: 'Controlador/Logueo.php',
                data: {
                    opc: "RegistrarUsuario",
                    No_Persona: No_Persona,
                    AP_Persona: AP_Persona,
                    Edad_Persona: Edad_Persona,
                    Se_Persona: Se_Persona,
                    Es_Civil_Persona: Es_Civil_Persona,
                    Ti_Persona: Ti_Persona,
                    dire_Persona: dire_Persona,
                    tele_Persona: tele_Persona,
                    correo_Persona: correo_Persona,
                    id_Iglesia: id_Iglesia,
                    Usuario: Usuario,
                    Contra: Contra
                },
                success: function (response)
                {
                    var validar = 1;
                    if (response == validar) {
                        Swal.fire({
                            type: 'success',
                            title: '¡Bienvenido!',
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function () {
                            window.location = "Iniciar.php";
                        });
                    } else {
                        validarUsuarioR();
                        validarCorreoR();
                    }
                }
            });
        } else {
            $("#result").html("<div class='formulario__mensaje' id='formulario__mensaje'>\n\
<p><i class='fas fa-exclamation-triangle'></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p></div>");
            document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        }
    } else {
        $("#result").html("<div class='alert .alert-dismissable alert-danger'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡Ingrese! </strong> todos \n\
                                               los campos por favor</div>");
    }
}

//VALIDAR CAMPOS REPETITIVOS EN USUARIO Y CORREO
function validarUsuarioR() {
    var Usuario = $("#txtusuario").val();
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "ValidarUsuarioR", Usuario: Usuario},
        success: function (response)
        {
            if (response == 3) {
                echo = 1;
            } else {
                $('#txtusuario').val("");
                $("#result").html("<div class='alert .alert-dismissable alert-warning'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡Usuario! </strong> no \n\
                                               disponible, ingrese otro</div>");
                echo = 0;
            }
        }
    });
}

function validarCorreoR() {
    var correo_Persona = $("#txtcorreo").val();
    $.ajax({
        type: "POST",
        url: 'Controlador/Logueo.php',
        data: {opc: "ValidarCorreoR", correo_Persona: correo_Persona},
        success: function (response)
        {
            if (response == 2) {
                echo = 1;
            } else {
                $('#txtcorreo').val("");
                $("#result").html("<div class='alert .alert-dismissable alert-warning'><button type='button'\n\
                                               class='close' data-dismiss='alert'>&times;</button><strong>¡Correo! </strong> no \n\
                                               disponible, ingrese otro</div>");
                echo = 0;
            }
        }
    });
}

//SINTAXIS DE EXPRESIONES REGEX
const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, //Letras y espacios, pueden llevar acentos.
    direccion: /^[A-Za-z0-9'\.\-\s\,]/, //Letras ,espacios y números
    edad: /^\d{2}$/, // 7 a 14 numeros.
    password: /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/, //8 carateres
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, // con dominio
    telefono: /^\d{7,9}$/ // 7 a 9 numeros.
    
}

const campos = {
    usuario: false,
    nombre: false,
    apellido: false,
    direccion: false,
    edad: false,
    password: false,
    correo: false,
    telefono: false
}

//VALIDAR CONTENIDO DE LOS CAMPOS
const validarFormulario = (e) => {
    switch (e.target.name) {
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
            break;
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
            break;
        case "direccion":
            validarCampo(expresiones.direccion, e.target, 'direccion');
            break;
        case "edad":
            validarCampo(expresiones.edad, e.target, 'edad');
            break;
        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            validarPassword2();
            break;
        case "password2":
            validarPassword2();
            break;
        case "correo":
            validarCampo(expresiones.correo, e.target, 'correo');
            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos[campo] = true;
    } else {
        document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos[campo] = false;
    }
}

//CONTRASEÑAS IGUALES
const validarPassword2 = () => {
    const inputPassword1 = document.getElementById('password');
    const inputPassword2 = document.getElementById('password2');

    if (inputPassword1.value !== inputPassword2.value) {
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.add('fa-times-circle');
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-check-circle');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.add('formulario__input-error-activo');
        campos['password'] = false;
    } else {
        document.getElementById(`grupo__password2`).classList.remove('formulario__grupo-incorrecto');
        document.getElementById(`grupo__password2`).classList.add('formulario__grupo-correcto');
        document.querySelector(`#grupo__password2 i`).classList.remove('fa-times-circle');
        document.querySelector(`#grupo__password2 i`).classList.add('fa-check-circle');
        document.querySelector(`#grupo__password2 .formulario__input-error`).classList.remove('formulario__input-error-activo');
        campos['password'] = true;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

//FUNCIÓN DEL BOTON DE VALIDACIÓN
formulario.addEventListener('submit', (e) => {
    e.preventDefault();

});






