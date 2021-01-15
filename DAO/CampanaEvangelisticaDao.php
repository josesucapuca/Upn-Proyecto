<?php

include_once '../Factory/ConexionOperacion.php';

class CampanaEvangelisticaDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarCanpanaEvangelisticasActivas() {
        $consulta = "call ListaLibroByBiblia(1);";
        return $this->sql($consulta);
    }

    public function IngresarCampanaEvangelistica($No_Camp_Evangelistica, $id_Usuario, $urlCampEva, $Descripcion) {
        $consulta = "call IngresarCampEvangelistica('$No_Camp_Evangelistica',$id_Usuario,'$urlCampEva','$Descripcion');";
        return $this->sql($consulta);
    }

    public function ModificarCanpanaEvangelisticas($id_Camp_Evang, $No_Camp_Evang, $Es_Camp, $Url_Camp, $Descripcion_Camp) {
        $consulta = "call ModificarCampEvangelistica($id_Camp_Evang,'$No_Camp_Evang','$Es_Camp','$Url_Camp','$Descripcion_Camp');";
        return $this->sql($consulta);
    }

}

?>