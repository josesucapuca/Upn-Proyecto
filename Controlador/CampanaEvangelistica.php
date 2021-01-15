<?php
include_once '../DAO/CampanaEvangelisticaDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarCampanaByPersona") {
    $objs = new CampanaEvangelisticaDAO();
    $id_p = $_POST["id_p"];
    $var = $objs->ListarCanpanaEvangelisticasActivas($id_p);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Campana_Evangelistica"] = utf8_encode($row->id_Campana_Evangelistica);
            $arr[$i]["No_Campana_Evangelistica"] = utf8_encode($row->No_Campana_Evangelistica);
            $arr[$i]["Es_Campana_Evangelistica"] = utf8_encode($row->Es_Campana_Evangelistica);
            $arr[$i]["Pastor_Encargado"] = utf8_encode($row->Pastor_Encargado);
            $arr[$i]["URL_Campana_Evangelistica"] = utf8_encode($row->URL_Campana_Evangelistica);
            $arr[$i]["Des_Campana_Evangelistica"] = utf8_encode($row->Des_Campana_Evangelistica);
            $arr[$i]["Cod_Campana_Evangelistica"] = utf8_encode($row->Cod_Campana_Evangelistica);
            $arr[$i]["Ti_Campaña_Evangelistica"] = utf8_encode($row->Ti_Campaña_Evangelistica);
            $arr[$i]["Fe_Inicio"] = utf8_encode($row->Fe_Inicio);
            $arr[$i]["Fe_Final"] = utf8_encode($row->Fe_Final);
            $arr[$i]["Es_Video_Conferencia"] = utf8_encode($row->Es_Video_Conferencia);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ValidarCod_Camp") {
    $objs = new CampanaEvangelisticaDAO();
    $cod = $_POST["c"];
    $var = $objs->ValidarCod_Camp($cod);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["cant"] = $row->cant;
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarCampanaById") {
    $objs = new CampanaEvangelisticaDAO();
    $id_c = $_POST["idc"];
    $var = $objs->ListarCanpanaById($id_c);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Campana_Evangelistica"] = utf8_encode($row->id_Campana_Evangelistica);
            $arr[$i]["No_Campana_Evangelistica"] = utf8_encode($row->No_Campana_Evangelistica);
            $arr[$i]["Es_Campana_Evangelistica"] = utf8_encode($row->Es_Campana_Evangelistica);
            $arr[$i]["Pastor_Encargado"] = utf8_encode($row->Pastor_Encargado);
            $arr[$i]["URL_Campana_Evangelistica"] = utf8_encode($row->URL_Campana_Evangelistica);
            $arr[$i]["Des_Campana_Evangelistica"] = utf8_encode($row->Des_Campana_Evangelistica);
            $arr[$i]["Cod_Campana_Evangelistica"] = utf8_encode($row->Cod_Campana_Evangelistica);
            $arr[$i]["Ti_Campana_Evangelistica"] = utf8_encode($row->Ti_Campana_Evangelistica);
            $arr[$i]["Fe_Inicio"] = utf8_encode($row->Fe_Inicio);
            $arr[$i]["Fe_Final"] = utf8_encode($row->Fe_Final);
            $arr[$i]["Es_Video_Conferencia"] = utf8_encode($row->Es_Video_Conferencia);
            $arr[$i]["Plataforma"] = utf8_encode($row->Plataforma);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "LLenarHerramienta") {
    $objs = new CampanaEvangelisticaDAO();
    $id_c = $_POST["idc"];
    $var = $objs->ListarHerramientaByIdCamp($id_c);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Herramienta_Campana"] = utf8_encode($row->id_Herramienta_Campana);
            $arr[$i]["Es_Biblia"] = utf8_encode($row->Es_Biblia);
            $arr[$i]["id_Campana_Evangelistica"] = utf8_encode($row->id_Campana_Evangelistica);
            $arr[$i]["Es_Videos"] = utf8_encode($row->Es_Videos);
            $arr[$i]["Es_Musica"] = utf8_encode($row->Es_Musica);
            $arr[$i]["Es_Himinario"] = utf8_encode($row->Es_Himinario);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "LLenarEstudio") {
    $objs = new CampanaEvangelisticaDAO();
    $id_c = $_POST["idc"];
    $var = $objs->ListarEstudio($id_c);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Herramienta_Estudio_Bblico"] = utf8_encode($row->id_Herramienta_Estudio_Bblico);
            $arr[$i]["id_Herramienta_Campana"] = utf8_encode($row->id_Herramienta_Campana);
            $arr[$i]["id_Estudio_Biblico"] = utf8_encode($row->id_Estudio_Biblico);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarParticipanteCampana") {
    $objs = new CampanaEvangelisticaDAO();
    $id_p = $_POST["id_p"];
    $var = $objs->ListarCampanaParticipante($id_p);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Persona"] = utf8_encode($row->id_Persona);
            $arr[$i]["id_Campana_Evangelistica"] = utf8_encode($row->id_Campana_Evangelistica);
            $arr[$i]["No_Campana_Evangelistica"] = utf8_encode($row->No_Campana_Evangelistica);
            $arr[$i]["Es_Campana_Evangelistica"] = utf8_encode($row->Es_Campana_Evangelistica);
            $arr[$i]["Pastor_Encargado"] = utf8_encode($row->Pastor_Encargado);
            $arr[$i]["URL_Campana_Evangelistica"] = utf8_encode($row->URL_Campana_Evangelistica);
            $arr[$i]["Des_Campana_Evangelistica"] = utf8_encode($row->Des_Campana_Evangelistica);
            $arr[$i]["Cod_Campana_Evangelistica"] = utf8_encode($row->Cod_Campana_Evangelistica);
            $arr[$i]["Ti_Campana_Evangelistica"] = utf8_encode($row->Ti_Campana_Evangelistica);
            $arr[$i]["Fe_Inicio"] = utf8_encode($row->Fe_Inicio);
            $arr[$i]["Fe_Final"] = utf8_encode($row->Fe_Final);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarReunionesByPersona") {
    $objs = new CampanaEvangelisticaDAO();
    $id_p = $_POST["id_p"];
    $var = $objs->ListarEstudioBiblicoActivas($id_p);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Campana_Evangelistica"] = utf8_encode($row->id_Campana_Evangelistica);
            $arr[$i]["No_Campana_Evangelistica"] = utf8_encode($row->No_Campana_Evangelistica);
            $arr[$i]["Es_Campana_Evangelistica"] = utf8_encode($row->Es_Campana_Evangelistica);
            $arr[$i]["Pastor_Encargado"] = utf8_encode($row->Pastor_Encargado);
            $arr[$i]["URL_Campana_Evangelistica"] = utf8_encode($row->URL_Campana_Evangelistica);
            $arr[$i]["Des_Campana_Evangelistica"] = utf8_encode($row->Des_Campana_Evangelistica);
            $arr[$i]["Cod_Campana_Evangelistica"] = utf8_encode($row->Cod_Campana_Evangelistica);
            $arr[$i]["Ti_Campaña_Evangelistica"] = utf8_encode($row->Ti_Campaña_Evangelistica);
            $arr[$i]["Fe_Inicio"] = utf8_encode($row->Fe_Inicio);
            $arr[$i]["Fe_Final"] = utf8_encode($row->Fe_Final);
            $arr[$i]["Es_Video_Conferencia"] = utf8_encode($row->Es_Video_Conferencia);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarReunionesParticipante") {
    $objs = new CampanaEvangelisticaDAO();
    $id_p = $_POST["id_p"];
    $var = $objs->ListarEstudioParticipante($id_p);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Persona"] = utf8_encode($row->id_Persona);
            $arr[$i]["id_Campana_Evangelistica"] = utf8_encode($row->id_Campana_Evangelistica);
            $arr[$i]["No_Campana_Evangelistica"] = utf8_encode($row->No_Campana_Evangelistica);
            $arr[$i]["Es_Campana_Evangelistica"] = utf8_encode($row->Es_Campana_Evangelistica);
            $arr[$i]["Pastor_Encargado"] = utf8_encode($row->Pastor_Encargado);
            $arr[$i]["URL_Campana_Evangelistica"] = utf8_encode($row->URL_Campana_Evangelistica);
            $arr[$i]["Des_Campana_Evangelistica"] = utf8_encode($row->Des_Campana_Evangelistica);
            $arr[$i]["Cod_Campana_Evangelistica"] = utf8_encode($row->Cod_Campana_Evangelistica);
            $arr[$i]["Ti_Campana_Evangelistica"] = utf8_encode($row->Ti_Campana_Evangelistica);
            $arr[$i]["Fe_Inicio"] = utf8_encode($row->Fe_Inicio);
            $arr[$i]["Fe_Final"] = utf8_encode($row->Fe_Final);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "IngresarCampanaEvangelistica") {
    $objs = new CampanaEvangelisticaDAO();
    $NoCam = utf8_decode($_POST["NombreCampana"]);
    $id_peC = utf8_decode($_POST["id_peC"]);
    $OpcVideo = utf8_decode($_POST["OpcVideo"]);
    $Url = utf8_decode($_POST["UrlVideoConferencia"]);
    $Cod = utf8_decode($_POST["Cod_Campana"]);
    $Descripcion = utf8_decode($_POST["Descripcion"]);
    $Fe_Inicio = utf8_decode($_POST["Fe_Inicio"]);
    $Fe_Fin = utf8_decode($_POST["Fe_Fin"]);
    $Plat = utf8_decode($_POST["PlataformaVideoLLamada"]);
    $Biblia = utf8_decode($_POST["Biblia"]);
    $Himinario = utf8_decode($_POST["Himinario"]);
    $Musica = utf8_decode($_POST["Musica"]);
    $video = utf8_decode($_POST["video"]);
    $var = $objs->IngresarCampanaEvangelistica($NoCam, $id_peC, $Url
            , $Descripcion, $Cod, $Fe_Inicio, $Fe_Fin, $OpcVideo,$Plat,$Biblia,
            $Himinario,$Musica,$video);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ModificarCampanaEvangelistica") {
    $objs = new CampanaEvangelisticaDAO();
    $NoCam = utf8_decode($_POST["NombreCampana"]);
    $id_peC = utf8_decode($_POST["id_peC"]);
    $OpcVideo = utf8_decode($_POST["OpcVideo"]);
    $Url = utf8_decode($_POST["UrlVideoConferencia"]);
    $Cod = utf8_decode($_POST["Cod_Campana"]);
    $Descripcion = utf8_decode($_POST["Descripcion"]);
    $Fe_Inicio = utf8_decode($_POST["Fe_Inicio"]);
    $Fe_Fin = utf8_decode($_POST["Fe_Fin"]);
    $Plat = utf8_decode($_POST["PlataformaVideoLLamada"]);
    $Biblia = utf8_decode($_POST["Biblia"]);
    $Himinario = utf8_decode($_POST["Himinario"]);
    $Musica = utf8_decode($_POST["Musica"]);
    $video = utf8_decode($_POST["video"]);
    $id_Camp = utf8_decode($_POST["id_Camp"]);
    $var = $objs->ModificarCanpanaEvangelisticas($NoCam, $id_peC, $Url
            , $Descripcion, $Cod, $Fe_Inicio, $Fe_Fin, $OpcVideo,$Plat,$Biblia,
            $Himinario,$Musica,$video,$id_Camp,0);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "ModificarEstudioBiblico") {
    $objs = new CampanaEvangelisticaDAO();
    $NoCam = utf8_decode($_POST["NombreCampana"]);
    $id_peC = utf8_decode($_POST["id_peC"]);
    $OpcVideo = utf8_decode($_POST["OpcVideo"]);
    $Url = utf8_decode($_POST["UrlVideoConferencia"]);
    $Cod = utf8_decode($_POST["Cod_Campana"]);
    $Descripcion = utf8_decode($_POST["Descripcion"]);
    $Fe_Inicio = utf8_decode($_POST["Fe_Inicio"]);
    $Fe_Fin = utf8_decode($_POST["Fe_Fin"]);
    $Plat = utf8_decode($_POST["PlataformaVideoLLamada"]);
    $Biblia = utf8_decode($_POST["Biblia"]);
    $Himinario = utf8_decode($_POST["Himinario"]);
    $Musica = utf8_decode($_POST["Musica"]);
    $video = utf8_decode($_POST["video"]);
    $id_Camp = utf8_decode($_POST["id_Camp"]);
    $id_Estb = utf8_decode($_POST["id_Estb"]);
    $var = $objs->ModificarEstudioBiblico($NoCam, $id_peC, $Url
            , $Descripcion, $Cod, $Fe_Inicio, $Fe_Fin, $OpcVideo,$Plat,$Biblia,
            $Himinario,$Musica,$video,$id_Camp,$id_Estb);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "IngresarEstudioBiblico") {
    $objs = new CampanaEvangelisticaDAO();
    $NoCam = utf8_decode($_POST["NombreCampana"]);
    $id_peR = utf8_decode($_POST["id_peR"]);
    $OpcVideo = utf8_decode($_POST["OpcVideo"]);
    $Url = utf8_decode($_POST["UrlVideoConferencia"]);
    $Cod = utf8_decode($_POST["Cod_Campana"]);
    $Descripcion = utf8_decode($_POST["Descripcion"]);
    $Fe_Inicio = utf8_decode($_POST["Fe_Inicio"]);
    $Fe_Fin = utf8_decode($_POST["Fe_Fin"]);
    $Plat = utf8_decode($_POST["PlataformaVideoLLamada"]);
    $Biblia = utf8_decode($_POST["Biblia"]);
    $Himinario = utf8_decode($_POST["Himinario"]);
    $Musica = utf8_decode($_POST["Musica"]);
    $video = utf8_decode($_POST["video"]);
    $id_Estudio = utf8_decode($_POST["id_Estudio"]);
    $var = $objs->IngresarEstudioBiblico($NoCam, $id_peR, $Url
            , $Descripcion, $Cod, $Fe_Inicio, $Fe_Fin, $OpcVideo,$Plat,$Biblia,
            $Himinario,$Musica,$video,$id_Estudio);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "SuscribirteCampana") {
    $objs = new CampanaEvangelisticaDAO();
    $id_pe = utf8_decode($_POST["id_p"]);
    $Cod_Cam = utf8_decode($_POST["cod"]);
    $var = $objs->SuscribirCampana($id_pe,$Cod_Cam);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["res"] = utf8_encode($row->res);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}