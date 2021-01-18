<?php

include_once '../Factory/ConexionOperacion.php';

class EstudioBilbicoDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarEstudioBiblicoDAO() {
        $consulta = "SELECT * FROM estudio_biblico;";
        return $this->sql($consulta);
    }
    public function ListarParticipantesEstudioBiblico($id_Estudio_Biblico) {
        $consulta = "call ListarParticipantesByIdCampana($id_Estudio_Biblico);";
        return $this->sql($consulta);
    }
    

}
