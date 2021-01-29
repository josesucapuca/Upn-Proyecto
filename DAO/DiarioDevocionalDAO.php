<?php

include_once '../Factory/ConexionOperacion.php';

class DiarioDevocionalDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarDiarioDevocional() {
        $consulta = "call ListaLibroByBiblia(1);";
        return $this->sql($consulta);
    }
    
//INSERTAR PEDIDO DE ORACIÓN
    public function PedidoOracion($Pedido_Oracion,$id_Devocional_Diario) {
        $link = new Conexion();
        $conectar = $link->Conectar();
        $consula1 = "call Registar_Oracion ($Pedido_Oracion,$id_Devocional_Diario)";
//        $consula1 = "call CamposRepetitivos ('$Usuario', '$correo_Persona');";
        $validacionu = mysqli_query($conectar, $consula1);
        $fila = mysqli_num_rows($validacionu);
        if ($fila != 0) {
            $consulta = "select Pedido_Oracion from pedido_oracion where Ti_Pedido_Oracion = 'P'";
            $retorno = mysqli_query($conectar, $consulta);
            echo 1;
        } else {
            echo 2;
//            $consulta2 = "select * from usuario where Usuario= '$Usuario'";
//            $validacionu = mysqli_query($conectar, $consulta2);
//            $fila2 = mysqli_num_rows($validacionu);
//            if ($fila2 == 0) {
//                echo 3;
//            } else {
//                echo 4;
//            }
//            $consulta3 = "select * from persona where correo_Persona = '$correo_Persona'";
//            $validacionc = mysqli_query($conectar, $consulta3);
//            $fila3 = mysqli_num_rows($validacionc);
//            if ($fila3 == 0) {
//                echo 2;
//            } else {
//                echo 5;
//            }
//            echo 0;
        }
    }
    
    
    //Diario devocional Listar
    public function listarDevocional($id_Persona) {
        $consulta = "call ListarDiarioDevocional($id_Persona);";
        return $this->sql($consulta);
//        $link = new Conexion();
//        $conectar = $link->Conectar();
////        $arreglo = array();
//        $sql = "select d.id_Devocional_Diario,d.id_Persona,r.No_Persona,i.Nombre_Iglesia,s.No_Distrito,n.No_Mision,r.tele_Persona,r.correo_Persona, 
//t.Fe_Detalle_Devocional_Diario, t.color,t.textColor, t.Texto_estudio, t.Resumen_Personal, t.Aplicacion_Diaria, p.Pedido_Oracion, c.id_Pedido_Oracion, m.Meta
//from devocional_diario d, detalle_devocional_diario t, meta_devocional_diario m, pedido_oracion p, pedido_contestado c, persona r, iglesia i, distrito s, mision n
//where d.id_Persona=r.id_Persona and t.id_Devocional_Diario=d.id_Devocional_Diario and m.id_Detalle_Devocional_Diario=t.id_Detalle_Devocional_Diario
//and p.id_Detalle_Devocional_Diario=t.id_Detalle_Devocional_Diario and c.id_Pedido_Oracion=p.id_Pedido_Oracion and i.id_Distrito=s.id_Distrito 
//and r.id_Iglesia=i.id_Iglesia and s.id_Mision=n.id_Mision and r.id_Persona'$id_Persona'";
//        
//    if ($conectar->query($sql)->num_rows){ 
//    $datos = array(); 
//    $i=0; 
//    $e = $conectar->query($sql); 
//    while($row=$e->fetch_array()) 
//    {      
//        $datos[$i] = $row; 
//        $i++;
//    }
//        echo json_encode(
//                array(
//                    "success" => 1,
//                    "result" => $datos
//                )
//            );
//    }
//    else
//    {    
//        echo "No hay datos"; 
//    }    
//        $resultado = mysqli_query($conectar, $consulta);
//        $fila = mysqli_num_rows($resultado);
//              if($consulta = $this->sql($sql)){
//                  while($consulta_VU = mysqli_fetch_assoc($consulta)){
//                      $arreglo["data"][]=$consulta_VU;
//                  }
//                  return$arreglo;
//                  
//              }
       
//        return $this->sql($consulta);
//        if(!$resultado){
//        echo("Error");
//    }else{
//        while ($data = mysqli_fetch_assoc($resultado)){
//            $arreglo["data"][] = $data;
//        }
//        echo json_encode($arreglo);
//    }
//    
//    mysqli_free_result($resultado);
//    mysqli_close($conectar);
    }

}
