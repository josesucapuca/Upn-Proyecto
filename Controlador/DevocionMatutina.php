<?php

include_once '../DAO/DevocionMatutinaDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarDevocionMatutina") {
    $objs= new DevocionMatutinaDAO();
    $var=$objs->ListarDevocionesMatutinas();
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}