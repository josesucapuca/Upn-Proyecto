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