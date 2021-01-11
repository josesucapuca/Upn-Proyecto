<?php

include_once '../Factory/ConexionOperacion.php';

class HiminarioDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarHiminarioDAO() {
        $consulta = "call ListarVideos();";
        return $this->sql($consulta);
    }

    public function ListaHiminarioByCadena($cadena) {
        $consulta = "call ListaHiminarioByCadena('$cadena');";
        return $this->sql($consulta);
    }

}
