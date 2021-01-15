<?php

include_once '../Factory/ConexionOperacion.php';

class BibliaDAO {
    private function sql($sql) {
        $conex = new Conexion();
        $c=$conex->Conectar();
        return mysqli_query($c, $sql);
    }
    public function ListarLibro() {
        $consulta = "call ListaLibroByBiblia(1);";
        return $this->sql($consulta);
    }
    public function ListarCapitulo($id_Libro) {
        $consulta = "call ListaCapituloByLibro($id_Libro);";
        return $this->sql($consulta);
    }
    public function ListarVersiculo($id_Capitulo,$id_Persona) {
        $consulta = "call ListaVersiculosByCapitulo($id_Capitulo,$id_Persona);";
        return $this->sql($consulta);
    }
    public function LibroxCapitulo($id_Capitulo) {
        $consulta = "call LibroxCapitulo($id_Capitulo);";
        return $this->sql($consulta);
    }
    
}

?>