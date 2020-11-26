<?php 
session_start();
    if(!isset($_SESSION["Usuario"])){
        header("location:Iniciar.php");
    }
    
    echo '<h1> Bienvenido</h1>';
    echo '<p><a href="CerrarSesion.php"> Logout</a></p>';
?>
