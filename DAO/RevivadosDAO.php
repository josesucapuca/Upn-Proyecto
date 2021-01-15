<?php
include_once '../Factory/ConexionOperacion.php';
class ReavivadosDAO {
    private function sql($sql) {
        $conex = new Conexion();
        $c=$conex->Conectar();
        return mysqli_query($c, $sql);
    }
    public function ListarTitulo() {
        $consulta = "call ListarTituloReavivado();";
        return $this->sql($consulta);
    }
    public function ListarReavivados($id) {
        $consulta = "call ListarReavivados($id);";
        return $this->sql($consulta);
    }
}
