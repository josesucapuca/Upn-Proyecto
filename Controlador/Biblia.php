<?php

include_once '../Factory/ConexionOperacion.php';
$opc = $_POST["opc"];
if ($opc === "ListarLibro") {
    $consulta = "call ListaLibroByBiblia(1);";
    $var = mysqli_query($conexion, $consulta);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if ($opc === "ListarCapitulo") {
    $id_Libro = $_POST["idL"];
    $consulta = "call ListaCapituloByLibro($id_Libro);";
    $var = mysqli_query($conexion, $consulta);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if ($opc === "ListarVersiculo") {
    $id_Capitulo = $_POST["idC"];
    $consulta = "call ListaVersiculosByCapitulo($id_Capitulo);";
    $var = mysqli_query($conexion, $consulta);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}

mysqli_close($conexion);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

