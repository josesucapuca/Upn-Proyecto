<?php

include_once '../Factory/ConexionOperacion.php';

class MusicaDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarMusicaByPersona($id) {
        $consulta = "call ListarMusicaByPersona($id)";
        return $this->sql($consulta);
    }
    
    public function ListarMusicaPersonal($id) {
        $consulta = "call ListarMusicaPersonal($id)";
        return $this->sql($consulta);
    }
    
    public function ListarMusicaPersonalByCadena($id,$cadena) {
        $consulta = "call ListarMusicaPersonalByCadena($id,$cadena)";
        return $this->sql($consulta);
    }

    public function ListarMusicaByCadena($cadena,$id_Persona) {
        $consulta = "call ListarMusicaByCadena('$cadena',$id_Persona);";
        return $this->sql($consulta);
    }
    
    public function IngresarMeGustaMusica($id_Musica,$id_Persona,$Categoria) {
        $consulta = "call IngresarMeGustaMusica($id_Musica,$id_Persona,'$Categoria');";
        return $this->sql($consulta);
    }
    
    public function CancelarMeGustaMusica($id) {
        $consulta = "call CancelarMeGustaMusica($id);";
        return $this->sql($consulta);
    }

    public function IngresarMusicaDAO($No_Musica, $Des_Musica, $UrlMusica, $id_Usuario) {
        $consulta = "call IngresarMusica('$No_Musica','$Des_Musica','$UrlMusica',$id_Usuario);";
        return $this->sql($consulta);
    }

}