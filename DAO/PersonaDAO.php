<?php

include_once '../Factory/ConexionOperacion.php';
class PersonaDAO {
    private function sql($sql) {
        $conex = new Conexion();
        $c=$conex->Conectar();
        return mysqli_query($c, $sql);
    }
    public function ValidarLider($id) {
        $consulta = "call ValidarLider($id);";
        return $this->sql($consulta);
    }
}
