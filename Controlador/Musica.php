<?php
include_once '../DAO/MusicaDAO.php';
$opc = $_POST["opc"];
if($opc==="LMBC"){
    $cadena=$_POST["c"];
    $id=$_POST["i"];
    $obj=new MusicaDAO();
    $var=$obj->ListarMusicaByCadena($cadena, $id);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Musica"] = utf8_encode($row->id_Musica);
            $arr[$i]["No_Musica"] = utf8_encode($row->No_Musica);
            $arr[$i]["Des_Musica"] = utf8_encode($row->Des_Musica);
            $arr[$i]["Es_Musica"] = utf8_encode($row->Es_Musica);
            $arr[$i]["URL_Musica"] = utf8_encode($row->URL_Musica);
            $arr[$i]["Usu_Creacion"] = utf8_encode($row->Usu_Creacion);
            $arr[$i]["Fe_Creacion"] = utf8_encode($row->Fe_Creacion);
            $arr[$i]["Usuario"] = utf8_encode($row->Usuario);
            $arr[$i]["persona"] = utf8_encode($row->persona);
            $arr[$i]["count"] = utf8_encode($row->count);
            $arr[$i]["id_Musicas_Anotadas"] = utf8_encode($row->id_Musicas_Anotadas);
            $arr[$i]["Categoria_Musica"] = utf8_encode($row->Categoria_Musica);
            $arr[$i]["id_Persona"] = utf8_encode($row->id_Persona);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if($opc==="LMPBC"){
    $cadena=$_POST["c"];
    $id=$_POST["i"];
    $obj=new MusicaDAO();
    $var=$obj->ListarMusicaPersonalByCadena($id,$cadena);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Musica"] = utf8_encode($row->id_Musica);
            $arr[$i]["No_Musica"] = utf8_encode($row->No_Musica);
            $arr[$i]["Des_Musica"] = utf8_encode($row->Des_Musica);
            $arr[$i]["Es_Musica"] = utf8_encode($row->Es_Musica);
            $arr[$i]["URL_Musica"] = utf8_encode($row->URL_Musica);
            $arr[$i]["Usu_Creacion"] = utf8_encode($row->Usu_Creacion);
            $arr[$i]["Fe_Creacion"] = utf8_encode($row->Fe_Creacion);
            $arr[$i]["Usuario"] = utf8_encode($row->Usuario);
            $arr[$i]["persona"] = utf8_encode($row->persona);
            $arr[$i]["count"] = utf8_encode($row->count);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "IMGM") {
    $categoria = $_POST["c"];
    $id = $_POST["i"];
    $persona = $_POST["p"];
    $objs = new MusicaDAO();
    $var = $objs->IngresarMeGustaMusica($id, $persona, $categoria);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "CMGM") {
    $id = $_POST["i"];
    $objs = new MusicaDAO();
    $var = $objs->CancelarMeGustaMusica($id);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
