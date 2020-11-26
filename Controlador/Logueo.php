<?php

include_once '../Factory/ConexionOperacion.php';
$opc = $_POST["opc"];
if ($opc === "IniciarSesion") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    //echo $Categoria.$Estado_Categoria.$Usuariocreacion;
    $consultda = "call IniciarSesion('$usuario','$password')";
    $var = mysqli_query($conexion, $consultda);
    echo json_encode($var);
}
?>
