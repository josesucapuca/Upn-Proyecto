<?php

include '../DAO/BibliaDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarLibro") {
    $objs= new BibliaDAO();
    $var=$objs->ListarLibro();
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i=0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Libro"] = $row->id_Libro;
            $arr[$i]["No_Libro"] = $row->No_Libro;
            $arr[$i]["id_Biblia"] = $row->id_Biblia;
            $arr[$i]["Testamento"] = $row->Testamento;
        }
    }
    echo json_encode($arr,JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarCapitulo") {
    $id_Libro = $_POST["idL"];
    $objs= new BibliaDAO();
    $var=$objs->ListarCapitulo($id_Libro);
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
    $id_Persona = $_POST["idP"];
    $objs= new BibliaDAO();
    $var=$objs->ListarVersiculo($id_Capitulo,$id_Persona);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if ($opc === "LibroxCapitulo") {
    $id_Capitulo = $_POST["idC"];
    $objs= new BibliaDAO();
    $var=$objs->LibroxCapitulo($id_Capitulo);
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

