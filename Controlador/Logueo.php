<?php

include_once '../Factory/ConexionOperacion.php';
$opc = $_POST["opc"];
if ($opc === "ValidarUsuario") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    $consultda = " call ValidarUsuario('$usuario','$password')";
    $var = mysqli_query($conexion, $consultda);
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
    $consultda = "call CrearSesion('$usuario','$password')";
    $var = mysqli_query($conexion, $consultda);
    $data = $var->fetch_object();
    session_start();
    $_SESSION["id_Usuario"] = $data->id_Usuario;
    $_SESSION["Usuario"] = $data->Usuario;
    $_SESSION["Ti_Usuario"] = $data->Ti_Usuario;
    $_SESSION["id_Persona"] = $data->id_Persona;
    $_SESSION["Persona"] = $data->Persona;
    $_SESSION["Edad_Persona"] = $data->Edad_Persona;
    $_SESSION["Se_Persona"] = $data->Se_Persona;
    $_SESSION["Es_Civil_Persona"] = $data->Es_Civil_Persona;
    $_SESSION["Ti_Persona"] = $data->Ti_Persona;
    $_SESSION["id_Iglesia"] = $data->id_Iglesia;
    $_SESSION["Nombre_Iglesia"] = $data->Nombre_Iglesia;
    $_SESSION["Ti_Iglesia"] = $data->Ti_Iglesia;
    echo "ok";
}
if ($opcion === "SalirSesion") {
    session_start();
    session_destroy();
}
?>
