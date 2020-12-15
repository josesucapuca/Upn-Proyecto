<?php
include_once '../DAO/VersiculoFavoritoDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListaVersiculoFavorito") {
    $id_Persona = $_POST["p"];
    $objs= new VersiculoFavoritoDAO();
    $var=$objs->ListarVersiculoFavorito($id_Persona);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if ($opc === "ListarVF") {
    $id_VF = $_POST["idVf"];
    $id_Persona = $_POST["id_Per"];
    $objs= new VersiculoFavoritoDAO();
    $var=$objs->ListarVersiculoFavoritoById($id_VF,$id_Persona);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        while ($row = mysqli_fetch_assoc($var)) {
            $arr[] = $row;
        }
    }
    echo json_encode($arr);
}
if ($opc === "IngresarVF") {
    $id_VF = $_POST["idV"];
    $id_Persona = $_POST["id_Per"];
    $Com = $_POST["Com"];
    $opci = $_POST["opci"];
    $objs= new VersiculoFavoritoDAO();
    $var=$objs->IngresarVersiculoFavorito($id_VF,$id_Persona,$opci,$Com);
    echo json_encode($var);
}