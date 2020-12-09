<?php

include '../DAO/PersonaDAO.php';
$opc = $_POST["opc"];
if ($opc === "ValidarLider") {
    $id_persona=$_POST["id"];
    $objs = new PersonaDAO();
    $var = $objs->ValidarLider($id_persona);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}