<?php

include_once '../DAO/HiminarioDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarHiminarioByCadena") {
    $cadena = $_POST["c"];
    $id = $_POST["i"];
    $objs = new HiminarioDAO();
    $var = $objs->ListaHiminarioByCadena($cadena, $id);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Himno"] = utf8_encode($row->id_Himno);
            $arr[$i]["No_Himno"] = utf8_encode($row->No_Himno);
            $arr[$i]["Nu_Himno"] = utf8_encode($row->Nu_Himno);
            $arr[$i]["Es_Himno"] = utf8_encode($row->Es_Himno);
            $arr[$i]["id_Himinario"] = utf8_encode($row->id_Himinario);
            $arr[$i]["Cont_Himno"] = utf8_encode($row->Cont_Himno);
            $arr[$i]["URL_Himno"] = utf8_encode($row->URL_Himno);
            $arr[$i]["No_Himinario"] = utf8_encode($row->No_Himinario);
            $arr[$i]["Es_Himinario"] = utf8_encode($row->Es_Himinario);
            $arr[$i]["id_Himno_Favorito"] = utf8_encode($row->id_Himno_Favorito);
            $arr[$i]["id_Persona"] = utf8_encode($row->id_Persona);
            $arr[$i]["Categoria"] = utf8_encode($row->Categoria);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "LHBI") {
    $id = $_POST["i"];
    $objs = new HiminarioDAO();
    $var = $objs->ListarHimnoById($id);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Himno"] = utf8_encode($row->id_Himno);
            $arr[$i]["No_Himno"] = utf8_encode($row->No_Himno);
            $arr[$i]["Nu_Himno"] = utf8_encode($row->Nu_Himno);
            $arr[$i]["Es_Himno"] = utf8_encode($row->Es_Himno);
            $arr[$i]["id_Himinario"] = utf8_encode($row->id_Himinario);
            $arr[$i]["Cont_Himno"] = utf8_encode($row->Cont_Himno);
            $arr[$i]["URL_Himno"] = utf8_encode($row->URL_Himno);
            $arr[$i]["No_Himinario"] = utf8_encode($row->No_Himinario);
            $arr[$i]["Es_Himinario"] = utf8_encode($row->Es_Himinario);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "IHFP") {
    $categoria = $_POST["c"];
    $id = $_POST["i"];
    $persona = $_POST["p"];
    $objs = new HiminarioDAO();
    $var = $objs->IngresarMegustaHimno($id, $persona, $categoria);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "CMGH") {
    $id = $_POST["i"];
    $objs = new HiminarioDAO();
    $var = $objs->CancelarMegustaHimno($id);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
