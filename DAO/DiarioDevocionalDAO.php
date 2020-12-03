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
}
