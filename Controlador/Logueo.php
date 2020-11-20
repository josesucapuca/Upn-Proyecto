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
?>
