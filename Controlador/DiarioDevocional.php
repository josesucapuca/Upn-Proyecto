<?php

include_once '../DAO/DiarioDevocionalDAO.php';
$opc = $_POST["opc"];

//if ($opc === "listarDevocional") {
    $id_Persona = $_POST["id_Persona"];
//    $password = $_POST["b"];
    //echo $Categoria.$Estado_Categoria.$Usuariocreacion;
    $objs = new DiarioDevocionalDAO();
    $var = $objs->listarDevocional($id_Persona);
    if($var){
        echo json_encode($var);
    }else{
        echo '{"sEcho": 1, "iTotalRecords": "0", "iTotalDisplayRecords": "0", "aaData": []}';
    }
//    $arr = array();
////    echo json_encode($arr);
//    if (mysqli_num_rows($var) != 0) {
//        while ($row = mysqli_fetch_assoc($var)) {
//            $arr[] = $row;
//        }
//    }
//    echo json_encode($arr);
    
//    if(!$var){
//        die("Error");
//    }else{
//        while ($data = mysqli_fetch_assoc($var)){
//            $arreglo["data"][] = $data;
//        }
//        echo json_encode($arreglo);
//    }
//    mysqli_free_result($var);
//    $data = $var->fetch_object();
////    session_start();
//    
////    $_SESSION["id_Usuario"] = $data->id_Usuario;
////    $_SESSION["Usuario"] = $data->Usuario;
////  $_SESSION["Ti_Usuario"] = $data->Ti_Usuario;
//    $_GET["id_Persona"] = $data->id_Persona;
//    $_GET["No_Persona"] = $data->No_Persona;
//    $_GET["Nombre_Iglesia"] = $data->Nombre_Iglesia;
//    $_GET["No_Distrito"] = $data->No_Distrito;
//    $_GET["No_Mision"] = $data->No_Mision;
//    $_GET["tele_Persona"] = $data->tele_Persona;
//    $_GET["correo_Persona"] = $data->correo_Persona;
//    $_GET["color"] = $data->color;
////    $_SESSION["textColor"] = $data->textColor;
//    $_GET["Texto_estudio"] = $data->Texto_estudio;
//    $_GET["Resumen_Personal"] = $data->Resumen_Personal;
//    $_GET["Aplicacion_Diaria"] = $data->Aplicacion_Diaria;
//    $_GET["Pedido_Oracion"] = $data->Pedido_Oracion;
//    $_GET["id_Pedido_Oracion"] = $data->id_Pedido_Oracion;
//    $_GET["Meta"] = $data->Meta;
//    echo "ok";
//}