<?php

include_once '../Factory/ConexionOperacion.php';

class DevocionMatutinaDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarDevocionesMatutinas() {
        $consulta = "call ListarDevocionesMatutinas();";
        return $this->sql($consulta);
    }

}

?>