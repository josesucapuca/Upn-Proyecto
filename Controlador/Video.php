<?php
include_once '../DAO/VideoDAO.php';
$opc = $_POST["opc"];
if($opc==="LVBC"){
    $cadena=$_POST["c"];
    $id=$_POST["i"];
    $obj=new VideoDAO();
    $var=$obj->ListarVideoByCadena($cadena, $id);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
        $i = 0;
        while ($row = $var->fetch_object()) {
            $arr[$i]["id_Video"] = utf8_encode($row->id_Video);
            $arr[$i]["No_Video"] = utf8_encode($row->No_Video);
            $arr[$i]["Des_Video"] = utf8_encode($row->Des_Video);
            $arr[$i]["Es_Video"] = utf8_encode($row->Es_Video);
            $arr[$i]["Fe_Creacion"] = utf8_encode($row->URL_Musica);
            $arr[$i]["Usu_Creacion"] = utf8_encode($row->Usu_Creacion);
            $arr[$i]["Fe_Creacion"] = utf8_encode($row->Fe_Creacion);
            $arr[$i]["Usuario"] = utf8_encode($row->Usuario);
            $arr[$i]["persona"] = utf8_encode($row->persona);
            $arr[$i]["count"] = utf8_encode($row->count);
            $arr[$i]["id_Videos_Anotados"] = utf8_encode($row->id_Videos_Anotados);
            $arr[$i]["Categoria_Videos"] = utf8_encode($row->Categoria_Videos);
            $arr[$i]["id_Persona"] = utf8_encode($row->id_Persona);
            $i++;
        }
    }
    echo json_encode($arr, JSON_UNESCAPED_UNICODE);
}
if ($opc === "IMGV") {
    $categoria = $_POST["c"];
    $id = $_POST["i"];
    $persona = $_POST["p"];
    $objs = new VideoDAO();
    $var = $objs->IngresarMeGustaVideo($id, $persona, $categoria);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
if ($opc === "CMGV") {
    $id = $_POST["i"];
    $objs = new VideoDAO();
    $var = $objs->CancelarMeGustaVideo($id);
    echo json_encode($var, JSON_UNESCAPED_UNICODE);
}
