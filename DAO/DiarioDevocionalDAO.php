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

    //Diario devocional Listar
    public function listarDevocional($id_Persona) {
//        $link = new Conexion();
//        $conectar = $link->Conectar();
        $arreglo = array();
        $sql = "select d.id_Devocional_Diario,d.id_Persona,r.No_Persona,i.Nombre_Iglesia,s.No_Distrito,n.No_Mision,r.tele_Persona,r.correo_Persona, t.Fe_Detalle_Devocional_Diario, t.color,t.textColor, t.Texto_estudio,
t.Resumen_Personal, t.Aplicacion_Diaria, p.Pedido_Oracion, c.id_Pedido_Oracion, m.Meta
from devocional_diario d, detalle_devocional_diario t, meta_devocional_diario m, pedido_oracion p, pedido_contestado c, persona r, iglesia i,
distrito s, mision n
where d.id_Persona=r.id_Persona and  r.id_Iglesia=i.id_Iglesia and i.id_Distrito=s.id_Distrito and s.id_Mision=n.id_Mision and r.id_Persona='$id_Persona'";
//        $resultado = mysqli_query($conectar, $consulta);
//        $fila = mysqli_num_rows($resultado);
              if($consulta = $this->sql($sql)){
                  while($consulta_VU = mysqli_fetch_assoc($consulta)){
                      $arreglo["data"][]=$consulta_VU;
                  }
                  return$arreglo;
                  
              }
       
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
