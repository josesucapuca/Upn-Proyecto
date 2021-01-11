<?php

include_once '../Factory/ConexionOperacion.php';
class VersiculoFavoritoDAO {
    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarVersiculoFavorito($id_Persona) {
        $consulta = "call ListarVersiculosFavoritos($id_Persona);";
        return $this->sql($consulta);
    }
    public function ListarVersiculoFavoritoById($id_Ver,$id_Persona) {
        $consulta = "call ListaVersiculoFavoritoById($id_Ver,$id_Persona)";
        return $this->sql($consulta);
    }
    public function IngresarVersiculoFavorito($id_Ver,$id_Persona,$opcion,$Anotacion) {
        $consulta = "call IngresarVersiculoFavorito($id_Ver,$id_Persona,'$opcion','$Anotacion')";
        return $this->sql($consulta);
    }
}
