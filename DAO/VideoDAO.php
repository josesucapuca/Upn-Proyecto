<?php

include '../Factory/ConexionOperacion.php';

class VideoDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarVideoByPersona($id) {
        $consulta = "call ListarVideosByPersona($id)";
        return $this->sql($consulta);
    }

    public function ListarVideoByCadena($cadena,$id_Persona) {
        $consulta = "call ListarVideosByCadena('$cadena',$id_Persona);";
        return $this->sql($consulta);
    }
    
    public function IngresarMeGustaVideo($id_Musica,$id_Persona,$Categoria) {
        $consulta = "call IngresarMeGustaVideo($id_Musica,$id_Persona,'$Categoria');";
        return $this->sql($consulta);
    }
    
    public function CancelarMeGustaVideo($id) {
        $consulta = "call CancelarMeGustaVideos($id);";
        return $this->sql($consulta);
    }

    public function IngresarVideoDAO($No_Musica, $Des_Musica, $UrlMusica, $id_Usuario) {
        $consulta = "call IngresarMusica('$No_Musica','$Des_Musica','$UrlMusica',$id_Usuario);";
        return $this->sql($consulta);
    }

}
