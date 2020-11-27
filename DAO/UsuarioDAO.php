<?php

include_once '../Factory/ConexionOperacion.php';

class UsuarioDAO {
    private function sql($sql) {
        $conex = new Conexion();
        $c=$conex->Conectar();
        return mysqli_query($c, $sql);
    }
    public function ValidarUsuario($usuario,$password) {
        $consulta = "call ValidarUsuario('$usuario','$password')";
        return $this->sql($consulta);
    }
    public function CrearSesion($usuario,$password) {
        $consulta = "call CrearSesion('$usuario','$password')";
        return $this->sql($consulta);
    }
}

?>