<?php

include_once '../Factory/ConexionOperacion.php';

class MusicaDAO {

    public function ListarMusicaDAO() {
        $consulta = "call ListarMusica();";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function ListarMusicaByCadenaDAO($cadena) {
        $consulta = "call ListaMusicaByCadena('$cadena');";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
    public function IngresarMusicaDAO($No_Musica,$Des_Musica,$UrlMusica,$id_Usuario) {
        $consulta = "call IngresarVideo('$No_Musica','$Des_Musica','$UrlMusica',$id_Usuario);";
        $var = mysqli_query($conexion, $consulta);
        return $var;
    }
}
mysqli_close($conexion);
?>