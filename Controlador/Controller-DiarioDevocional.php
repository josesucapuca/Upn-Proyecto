<?php

header('Conten-Type: application/json');
$pdo = new PDO("mysql:dbname=proyecto_upn;host=localhost", "root", "12345678");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdo->exec("SET CHARACTER SET utf8");


$accion = (isset($_GET['accion'])) ? $_GET['accion'] : 'leer';

switch ($accion) {
    case 'agregar':
//        $sentenciaSQL = $pdo->prepare("insert into eventos(title,descripcion,color,textColor,start,end)"
//                . "values(:title,:descripcion,:color,:textColor,:start,:end)");
//        $respuesta = $sentenciaSQL->execute(array(
//            "title" => $_POST['title'],
//            "descripcion" => $_POST['descripcion'],
//            "color" => $_POST['color'],
//            "textColor" => $_POST['textColor'],
//            "start" => $_POST['start'],
//            "end" => $_POST['end']
//        ));
//        echo json_encode($respuesta);
        break;
    case 'eliminar':
//        $respuesta=false;
//        if(isset($_POST['ideventos'])){
//            $sentenciaSQL  = $pdo->prepare("delete from eventos where ideventos=:ID");
//            $respuesta = $sentenciaSQL->execute(array("ID"=>$_POST['ideventos']));
//        }
//        echo json_encode($respuesta);
        break;
    case 'modificar':
//        $sentenciaSQL  = $pdo->prepare("update eventos set title=:title,descripcion=:descripcion,color=:color,textColor=:textColor,start=:start,end=:end where ideventos=:ID");
//        $respuesta = $sentenciaSQL->execute(array(
//            "ID" =>$_POST['ideventos'],
//            "title" => $_POST['title'],
//            "descripcion" => $_POST['descripcion'],
//            "color" => $_POST['color'],
//            "textColor" => $_POST['textColor'],
//            "start" => $_POST['start'],
//            "end" => $_POST['end']
//        ));
//        echo json_encode($respuesta);
        break;
    default :
//        $likeparametro = "$ID";
//        $query = "SELECT * FROM devocional_diario WHERE id_Persona =:ID";
//        $stmt = $pdo->prepare("SELECT * FROM devocional_diario WHERE id_Persona =$ID");
//        $statement->(array("ID"=>$_POST['id_Persona']));
//        $statement->bindParam(':ID',$_POST['id_Persona']);
//        $stmt->execute(array($ID));
//        $statement->execute(array("ID"=>$_POST['id_Persona']));
//        $data = $stmt->fetchAll();
//        $stmt = $pdo->prepare('SELECT * FROM devocional_diario WHERE id_Persona =:domain_name');
//        $stmt->bindValue(':domain_name', $domain);
//        $stmt->execute();
//        $article_list = $stmt->fetchAll(\PDO::FETCH_ASSOC);                   
//            $sentenciaSQL  = $pdo->prepare("select * from devocional_diario d where d.id_Persona=:ID");
//            $respuesta = $sentenciaSQL->execute(array("ID"=>$_POST['id_Persona']));
//         $resultado = $respuesta->fetchAll(PDO::FETCH_ASSOC);
//        print_r($article_list);
        
//        $query = 'SELECT * FROM `devocional_diario` WHERE id_Persona = :id_Persona';
//        $prepare = $pdo->prepare($query);
//        $prepare->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Movimiento');
//        $prepare->execute(array(':id_Persona' => $_POST['id_Persona']));
//        $movimientos = $prepare->fetchAll(PDO::FETCH_ASSOC);
//        return $movimientos;
//    $person = "8";   
        $person= $_GET["id_Persona"];
$sql ="select d.id_Devocional_Diario,d.id_Persona,r.No_Persona,i.Nombre_Iglesia,s.No_Distrito,n.No_Mision,r.tele_Persona,r.correo_Persona, t.Fe_Detalle_Devocional_Diario, t.color,t.textColor, t.Texto_estudio, t.Resumen_Personal, t.Aplicacion_Diaria, p.Pedido_Oracion, c.id_Pedido_Oracion, m.Meta from devocional_diario d, detalle_devocional_diario t, meta_devocional_diario m, pedido_oracion p, pedido_contestado c, persona r, iglesia i, distrito s, mision n where d.id_Persona=r.id_Persona and  r.id_Iglesia=i.id_Iglesia and i.id_Distrito=s.id_Distrito and s.id_Mision=n.id_Mision and r.id_Persona=?";
//$dat= array();
//$datos->execute(array("id_Persona" => $id_Persona)); 

//        $respuesta = $datos->fetchAll(PDO::FETCH_ASSOC);

//        echo $respuesta->id_Persona;
        $resultado=$pdo->prepare($sql);
        $resultado->execute(array($person));
        $registro=$resultado->fetchAll(PDO::FETCH_ASSOC);
//        while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
//             echo json_encode($registro);
//        }
        echo json_encode($registro);
//        echo json_encode($datos);
        break;
//        $sentenciaSQL = $pdo->prepare("  select * from devocional_diario d where d.id_Persona=:ID");
//        $respuesta = $sentenciaSQL->execute(array("ID"=>$_POST['id_Persona']));
////         $sentenciaSQL->execute();
////        $sentenciaSQL->execute(array("USUARIO"=>$_POST['Usuario'],"CONTRA"=>$_POST['Contra']));
//
//        $resultado = $respuesta->fetchAll(PDO::FETCH_ASSOC);
//        echo json_encode($resultado);
//        break;
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

