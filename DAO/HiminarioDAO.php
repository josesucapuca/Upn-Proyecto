<?php

include_once '../Factory/ConexionOperacion.php';

class HiminarioDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ListarHiminarioTotalDAO() {
        $consulta = "Select * from vista_himinario_himno";
        return $this->sql($consulta);
    }
    public function ListarHiminario() {
        $consulta = "SELECT * FROM himinario where Es_Himinario='1'";
        return $this->sql($consulta);
    }
    public function ListarHiminarioDAO($id_Persona) {
        $consulta = "call ListarHiminarioByPersona($id_Persona) ;";
        return $this->sql($consulta);
    }
    public function ListarHimnoById($id) {
        $consulta = "call ListaHimnoById($id) ;";
        return $this->sql($consulta);
    }

    public function ListaHiminarioByCadena($cadena,$id_Persona) {
        $consulta = "call ListarHiminarioByCadena('$cadena',$id_Persona);";
        return $this->sql($consulta);
    }
    
    public function IngresarHimno($No_Himno,$Nu_Himno,$id_him,$Cont,$Url) {
        $consulta = "call IngresarHimno('$No_Himno',$Nu_Himno,$id_him,'$Cont','$Url');";
        return $this->sql($consulta);
    }
    public function IngresarMegustaHimno($id_him,$id_Persona,$Categoria) {
        $consulta = "call IngresarMeGustaHimno($id_him,$id_Persona,'$Categoria');";
        return $this->sql($consulta);
    }
    public function CancelarMegustaHimno($id_himF) {
        $consulta = "call CancelarMegustaHimno($id_himF);";
        return $this->sql($consulta);
    }
    public function ModificarHimno($id_Him,$No_Himno,$Nu_Himno,$id_him,$Cont,$Url) {
        $consulta = "call ModificarHimno($id_Him,'$No_Himno',$Nu_Himno,$id_him,'$Cont','$Url');";
        return $this->sql($consulta);
    }

}
