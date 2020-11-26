<?php

include_once '../Factory/ConexionOperacion.php';

class VideoDAO {

    public function ListarVideoDAO() {
        $consulta = "call ListarVideos();";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function ListarVideoByCadenaDAO($cadena) {
        $consulta = "call ListaVideoByCadena('$cadena');";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function IngresarVideoDAO($No_Video,$Des_Video,$UrlVideo,$id_Usuario) {
        $consulta = "call IngresarVideo('$No_Video','$Des_Video','$UrlVideo',$id_Usuario);";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
}

?>