<?php

include_once '../Factory/ConexionOperacion.php';

class BibliaDAO {

    public function ListarBibliasDAO() {
        $consulta = "call ListarBiblia();";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function ListarLibroDAO($id_Biblia) {
        $consulta = "call ListaLibroByBiblia(1);";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function ListarCapituloDAO($id_Libro) {
        $consulta = "call ListaCapituloByLibro($id_Libro)";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function ListarVersiculo($id_Capitulo) {
        $consulta = "call ListaVersiculosByCapitulo($id_Capitulo)";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
}
mysqli_close($conexion);
?>