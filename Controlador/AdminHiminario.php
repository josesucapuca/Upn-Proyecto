<?php
include_once '../DAO/HiminarioDAO.php';
$opc=$_POST["opc"];
if($opc==="IngresarHimno"){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $objs = new HiminarioDAO();
    $var = $objs->IngresarHimno($n1,$n2,$n3,$n4,$n5);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if($opc==="ModificarHimno"){
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $n4 = $_POST["n4"];
    $n5 = $_POST["n5"];
    $n6 = $_POST["n6"];
    $objs = new HiminarioDAO();
    $var = $objs->ModificarHimno($n1,$n2,$n3,$n4,$n5,$n6);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if($opc==="LlenarHimno"){
    $id = $_POST["id"];
    $objs = new HiminarioDAO();
    $var = $objs->ListarHimnoById($id);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}