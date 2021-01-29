<?php
include_once '../DAO/DiarioDevocionalDAO.php';
session_start();
header('Conten-Type: application/json');
$pdo = new PDO("mysql:dbname=proyecto_upn;host=localhost", "root", "12345678");


//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//$pdo->exec("SET CHARACTER SET utf8");


$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'leer';
//Las acciones de los bontones
switch ($accion) {
    case 'agregar':
        $sentenciaSQL = $pdo->prepare("call RegistrarDiarioDevocional (:id_Persona,:Resumen_Personal,:Aplicacion_Diaria,:title,:color,:Meta,:Pedido_Oracion)");
        $respuesta = $sentenciaSQL->execute(array(
            "id_Persona" => $_POST['id_Persona'],
            "Resumen_Personal" => $_POST['Resumen_Personal'],
            "Aplicacion_Diaria" => $_POST['Aplicacion_Diaria'],
            "title" => $_POST['title'],
            "color" => $_POST['color'],
            "Meta" => $_POST['Meta'],
            "Pedido_Oracion" => $_POST['Pedido_Oracion']
        ));
        echo json_encode($respuesta);
//        echo 'agregar';
        break;
    case 'eliminar':
        $respuesta = false;
        if (isset($_POST['id_Devocional_Diario'])) {
            $sentenciaSQL = $pdo->prepare("delete from devocional_diario where id_Devocional_Diario=:ID");
            $respuesta = $sentenciaSQL->execute(array("ID" => $_POST['id_Devocional_Diario']));
        }
        echo json_encode($respuesta);
//        echo 'eli';
        break;
    case 'modificar':
        $sentenciaSQL = $pdo->prepare("call ModificarDiarioDevocional (:id_Devocional_Diario,:Resumen_Personal,:Aplicacion_Diaria,:title,:color,:Meta)");
        $respuesta = $sentenciaSQL->execute(array(
            "id_Devocional_Diario" => $_POST['id_Devocional_Diario'],
            "Resumen_Personal" => $_POST['Resumen_Personal'],
            "Aplicacion_Diaria" => $_POST['Aplicacion_Diaria'],
            "title" => $_POST['title'],
            "color" => $_POST['color'],
            "Meta" => $_POST['Meta']
        ));
        echo json_encode($respuesta);
        break;
//    case 'listar':
//        $person = $_SESSION["id_Persona"];
//        $sql = $pdo->prepare("call ListarDiarioDevocional ('$person')");
//        $sql->execute();
//        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
//        echo json_encode($resultado);
//        break;
    default :
//        $person = "8";
        $person = $_SESSION["id_Persona"];
        $sql = $pdo->prepare("call ListarDiarioDevocional ('$person')");
        $sql->execute();
        $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($resultado);
//        echo json_encode('holaaa');
        break;
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

