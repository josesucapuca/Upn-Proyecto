<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

include_once '../DAO/UsuarioDAO.php';
$opc = $_POST["opc"];
if ($opc === "ValidarUsuario") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    $objs = new UsuarioDAO();
    $var = $objs->ValidarUsuario($usuario, $password);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if ($opc === "CrearSesion") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    //echo $Categoria.$Estado_Categoria.$Usuariocreacion;
    $objs = new UsuarioDAO();
    $var = $objs->CrearSesion($usuario, $password);
    $data = $var->fetch_object();
    session_start();
    $_SESSION["id_Usuario"] = $data->id_Usuario;
    $_SESSION["Usuario"] = $data->Usuario;
//  $_SESSION["Ti_Usuario"] = $data->Ti_Usuario;
    $_SESSION["id_Persona"] = $data->id_Persona;
    $_SESSION["Persona"] = $data->Persona;
    $_SESSION["Edad_Persona"] = $data->Edad_Persona;
    $_SESSION["Se_Persona"] = $data->Se_Persona;
    $_SESSION["Es_Civil_Persona"] = $data->Es_Civil_Persona;
    $_SESSION["Ti_Persona"] = $data->Ti_Persona;
    $_SESSION["id_Iglesia"] = $data->id_Iglesia;
    $_SESSION["Nombre_Iglesia"] = $data->Nombre_Iglesia;
    $_SESSION["id_Distrito"] = $data->id_Distrito;
    $_SESSION["No_Distrito"] = $data->No_Distrito;
    $_SESSION["id_Mision"] = $data->id_Mision;
    $_SESSION["No_Mision"] = $data->No_Mision;
    $_SESSION["id_Uniones"] = $data->id_Uniones;
    $_SESSION["id_Division"] = $data->id_Division;
    $_SESSION["Contra"] = $data->Contra;
    $_SESSION["No_Persona"] = $data->No_Persona;
    $_SESSION["AP_Persona"] = $data->AP_Persona;
    $_SESSION["dire_Persona"] = $data->dire_Persona;
    $_SESSION["tele_Persona"] = $data->tele_Persona;
    $_SESSION["correo_Persona"] = $data->correo_Persona;
    echo "ok";
}
if ($opc === "SalirSesion") {
    session_start();
    session_destroy();
}

if ($opc === "ListarMision") {

    $objs = new UsuarioDAO();
    $var = $objs->ComboMision();
    echo json_encode($var);
}
if ($opc === "ListarDistrito") {
    $objs = new UsuarioDAO();
    $id_Mision = $_POST["id_Mision"];
    $var = $objs->ComboDistrito($id_Mision);
    echo json_encode($var);
}
if ($opc === "ListarIglesia") {
    $objs = new UsuarioDAO();
    $id_Distrito = $_POST["id_Distrito"];
    $var = $objs->ComboIglesia($id_Distrito);
    echo json_encode($var);
}
if ($opc === "RegistrarUsuario") {
    $No_Persona = strtoupper($_POST['No_Persona']);
    $AP_Persona = strtoupper($_POST['AP_Persona']);
    $Edad_Persona = strtoupper($_POST['Edad_Persona']);
    $Se_Persona = strtoupper($_POST['Se_Persona']);
    $Es_Civil_Persona = strtoupper($_POST['Es_Civil_Persona']);
    $Ti_Persona = strtoupper($_POST['Ti_Persona']);
    $dire_Persona = strtoupper($_POST['dire_Persona']);
    $tele_Persona = strtoupper($_POST['tele_Persona']);
    $correo_Persona = strtoupper($_POST['correo_Persona']);
    $id_Iglesia = strtoupper($_POST['id_Iglesia']);
    $Usuario = strtoupper($_POST['Usuario']);
    $Contra = strtoupper($_POST['Contra']);
//    $id_Persona = strtoupper($_POST['id_Persona']);
    $objs = new UsuarioDAO();
    $var = $objs->RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Contra);
    echo $var;
}
if ($opc === "ValidarUsuarioR") {
    $Usuario = strtoupper($_POST['Usuario']);
    $objs = new UsuarioDAO();
    $var = $objs->ValidarUsuarioR($Usuario);
    echo $var;
}
if ($opc === "ValidarCorreoR") {
    $correo_Persona = strtoupper($_POST['correo_Persona']);
    $objs = new UsuarioDAO();
    $var = $objs->ValidarCorreoR($correo_Persona);
    echo $var;
}
//ACTUALIZAR DATOS
if ($opc === "ActualizarDatos") {
    $id_Usuario = strtoupper($_POST['id_Usuario']);
    $No_Persona = strtoupper($_POST['No_Persona']);
    $AP_Persona = strtoupper($_POST['AP_Persona']);
    $Edad_Persona = strtoupper($_POST['Edad_Persona']);
    $Se_Persona = strtoupper($_POST['Se_Persona']);
    $Es_Civil_Persona = strtoupper($_POST['Es_Civil_Persona']);
    $Ti_Persona = strtoupper($_POST['Ti_Persona']);
    $dire_Persona = strtoupper($_POST['dire_Persona']);
    $tele_Persona = strtoupper($_POST['tele_Persona']);
    $correo_Persona = strtoupper($_POST['correo_Persona']);
    $id_Iglesia = strtoupper($_POST['id_Iglesia']);
//    $id_Usuario = strtoupper($_POST['id_Usuario']);
    $Contra = strtoupper($_POST['Contra']);   
//    $id_Persona = strtoupper($_POST['id_Persona']);
    $objs = new UsuarioDAO();
    $var = $objs->ActualizarDatos($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $id_Usuario, $Contra);
    echo $var;
}
if ($opc === "RecuperarContra") {
    $correo_Persona = strtoupper($_POST['correo_Persona']);
    $contraactual = strtoupper($_POST['Contra']);
    $Contra = strtoupper($_POST['Contra']);
    $objs = new UsuarioDAO();
    $var = $objs->recuperar_contra($correo_Persona, $Contra);
    if ($var == "1") {
        // Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            //Server settings
            $mail->SMTPDebug = 0;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            //$mail->Host = 'smtp.gmail.com';                    // Set the SMTP server to send through
            $mail->Host = 'ceoadventista.org';
            $mail->SMTPAuth = true;                                   // Enable SMTP authentication
            $mail->Username = 'soporte@ceoadventista.org';                     // SMTP username
            $mail->Password = 'Ceonexo2020';                               // SMTP password
//           $mail->SMTPSecure = 'tls';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            //Recipients
            $mail->setFrom('soporte@ceoadventista.org', 'CEO-ADVENTISTA');
//            $mail->addAddress ('nicogarcia459@gmail.com','nico');
            $mail->addAddress($correo_Persona);     // Add a recipient
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $subject = "Nueva contraseña";
            $subject = "=?UTF-8?B?" . base64_encode($subject) . "=?=";
            $mail->Subject = $subject;
            $mail->Body = 'Hola que tal, tu contraseña se restablecio <br> su contraseña nueva es: <b>' . $contraactual . '</b>'
                    . '<br>Se le recomienda cambiar la nueva contraseña brindada por motivos de seguridad, dirigirse ah: <br>'
                    . '- Perfil <br> - identificar el campo "Contraseña" <br> - ingresar la nueva contraseña <br> - seleccionar el botón guardar';
            $mail->send();
            echo '1 ENVIOOO';
        } catch (Exception $e) {
//            echo "0 ERROR"
            echo "Hubo un error : ", $mail->ErrorInfo;
        }
    } else {
        echo '2 :( BUUU';
    }
    echo $var;
}

function utf8_converter($array) {
    array_walk_recursive($array, function(&$item) {
        $item = utf8_encode($item);
    });
    return json_encode($array);
}



//mysqli_close($conexion);
?>
