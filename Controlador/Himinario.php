<?php

include_once '../DAO/HiminarioDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarHiminarioByCadena") {
    $cadena = $_POST["c"];
    $objs = new HiminarioDAO();
    $var = $objs->ListaHiminarioByCadena();
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}