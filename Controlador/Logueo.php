<?php

include_once '../Factory/ConexionOperacion.php';
$opc = $_POST["opc"];
if ($opc === "ValidarUsuario") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    //echo $Categoria.$Estado_Categoria.$Usuariocreacion;
    $consultda = " call ValidarUsaurio('$usuario','$password')";
    $var = mysqli_query($conexion, $consultda);
    echo json_encode($var);
}
if ($opc === "CrearSesion") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    //echo $Categoria.$Estado_Categoria.$Usuariocreacion;
    $consultda = " call CrearSesion('$usuario','$password')";
    $var = mysqli_query($conexion, $consultda);
    $data = $var->fetch_object();
    session_start();
    $_SESSION["id_Usuario"] = $data->id_Usuario;
    $_SESSION["Usuario"] = $data->usuario;
    $_SESSION["Ti_Usuario"] = $data->Ti_Usuario;
    $_SESSION["id_Persona"] = $data->id_Persona;
    $_SESSION["persona"] = $data->persona;
    $_SESSION["Edad_Persona"] = $data->Edad_Persona;
    $_SESSION["Se_Persona"] = $data->Se_Persona;
    $_SESSION["Es_Civil_Persona"] = $data->Es_Civil_Persona;
    $_SESSION["Ti_Persona"] = $data->Ti_Persona;
    $_SESSION["id_Iglesia"] = $data->id_Iglesia;
    $_SESSION["Nombre_Iglesia"] = $data->Nombre_Iglesia;
    $_SESSION["Cod_Iglesia"] = $data->Ti_Iglesia;
    echo json_encode($data);
    echo json_encode($var);
}
if ($opcion === "SalirSesion") {
    session_start();
    session_destroy();
}
?>
