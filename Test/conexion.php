<?php

//include ("../Factory/ConexionOperacion.php");
//$conexion;
//echo 'se conecto';

include '../Sesion.php';
$user='admin';
$pass='123';
$sql = "call IniciarSesion('$user','$pass')";
function logeo()
{   
    $GLOBALS['sql'];

//    $b = $sql;
}
logeo();
echo $sql;
//echo "user" + $user + "pass" + $user;
//$sql ($user="admin",$pass="123");
//echo 'ingreso';        
//User ('admin','123');
//echo 'ingreso';
?>



