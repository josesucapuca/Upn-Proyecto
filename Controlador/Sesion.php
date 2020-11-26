<?php
include_once '../Factory/ConexionOperacion.php';
session_start();
if(isset($_POST["Usuario"]) && isset($_POST["Password"])){
    $Usuario = mysqli_real_escape_string($conexion, $_POST["Usuario"]);
    $Password = mysqli_real_escape_string($conexion, $_POST["Password"]);
    $sql = "call IniciarSesion('$Usuario','$Password')";
//    $sql = "select Usuario from usuario where Usuario='$Usuario' and Password='$Password'";
    $result = mysqli_query($conexion, $sql);
    $num_row = mysqli_num_rows($result);
    if($num_row == "1"){
//        echo 'Usuario:'.$Usuario.'pass'.$Password.'numero: '.$num_row;
        $data = mysqli_fetch_array($result);
        $_SESSION["Usuario"] = $data["TRUE"];
        echo 'Estado 1';
    }else{
        echo 'error :C';
    }
}else{
    echo 'error :(p';
}
die(json_encode($sql));


