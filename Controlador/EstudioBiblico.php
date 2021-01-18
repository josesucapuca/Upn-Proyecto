<?php
include_once '../DAO/EstudioBilbicoDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarEstudioBiblico") {
    $objs = new EstudioBilbicoDAO();
    $var = $objs->ListarEstudioBiblicoDAO();
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Estudio_Biblico"] = utf8_encode($row->id_Estudio_Biblico);
            $arr[$i]["No_Estudio_Biblico"] = utf8_encode($row->No_Estudio_Biblico);
            $arr[$i]["Url_Respuestas"] = utf8_encode($row->Url_Respuestas);
            $arr[$i]["GrupoEdad"] = utf8_encode($row->GrupoEdad);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarParticipantes") {
    $id = $_POST["id"];
    $objs = new EstudioBilbicoDAO();
    $var = $objs->ListarParticipantesEstudioBiblico($id);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Part"] = utf8_encode($row->id_Part);
            $arr[$i]["id_Camp"] = utf8_encode($row->id_Camp);
            $arr[$i]["id_Persona"] = utf8_encode($row->id_Persona);
            $arr[$i]["Nombre"] = utf8_encode($row->Nombre);
            $arr[$i]["PD"] = utf8_encode($row->PD);
            $arr[$i]["PT"] = utf8_encode($row->PT);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
