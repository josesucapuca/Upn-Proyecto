<?php

include_once '../Factory/ConexionOperacion.php';

class UsuarioDAO {

    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

    public function ValidarUsuario($usuario, $password) {
        $consulta = "call ValidarUsuario('$usuario','$password')";
        return $this->sql($consulta);
    }

    public function CrearSesion($usuario, $password) {
        $consulta = "call CrearSesion('$usuario','$password')";
        return $this->sql($consulta);
    }

    public function ComboMision() {
        $sql = "select id_Mision, No_Mision from mision order by No_Mision asc;";
        $arreglo = array();
        if ($consula = $this->sql($sql)) {
            while ($consulta_VU = mysqli_fetch_array($consula)) {
                $arreglo[] = $consulta_VU;
            }
        }
        return $arreglo;
    }

    public function ComboDistrito($id_Mision) {
        $sql = "select id_Distrito, No_Distrito from distrito where id_Mision = '$id_Mision'";
        $arreglo = array();
        if ($consula = $this->sql($sql)) {
            while ($consulta_VU = mysqli_fetch_array($consula)) {
                $arreglo[] = $consulta_VU;
            }
        }
        return $arreglo;
    }

    public function ComboIglesia($id_Distrito) {
        $sql = "select id_Iglesia, Nombre_Iglesia from iglesia where id_Distrito = '$id_Distrito'";
        $arreglo = array();
        if ($consula = $this->sql($sql)) {
            while ($consulta_VU = mysqli_fetch_array($consula)) {
                $arreglo[] = $consulta_VU;
            }
        }
        return $arreglo;
    }

//    public function RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Password, $id_Persona) {
//        $consulta = "call RegistrarUsuario('$No_Persona','$AP_Persona','$Edad_Persona','$Se_Persona','$Es_Civil_Persona','$Ti_Persona','$dire_Persona','$tele_Persona','$correo_Persona','$id_Iglesia','$Usuario','$Password','$id_Persona');";
//        if($resultado = $this->sql($consulta)){
//            $id_registro = mysqli_insert_id($this->sql($consulta));
//            return 1;
//        }else{
//            return 0;
//        }
//    }
//        public function RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Password) {
//            $link = new Conexion();
//            $conectar = $link->Conectar();
//            $consulta = "call InsertarPersona('$No_Persona','$AP_Persona','$Edad_Persona','$Se_Persona','$Es_Civil_Persona','$Ti_Persona','$dire_Persona','$tele_Persona','$correo_Persona','$id_Iglesia')";
//            if(mysqli_query($conectar, $consulta)){
//                $id_persona = mysqli_insert_id($conectar);
//                echo "[idpersona   '$id_persona']";
//            }else{
//                echo 'no se inserto';
//            }
//            mysqli_query($conectar,"call InsertarUsuario('$Usuario','$Password','$id_persona')");            
//
//           // $consulta1 = ("insert into usuario (id_Persona, Usuario, Password, Es_Usuario) values ('$id_persona',nico','123','1');");                  
//        }

    public function RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Password) {
       $link = new Conexion();
            $conectar = $link->Conectar();
        $consulta = "call RegistrarUsuario('$No_Persona','$AP_Persona','$Edad_Persona','$Se_Persona','$Es_Civil_Persona','$Ti_Persona','$dire_Persona','$tele_Persona','$correo_Persona','$id_Iglesia','$Usuario','$Password');";
         $retorno = mysqli_query($conectar, $consulta);
        if($retorno){
            return 1;
        }else{
            return 0;
        }
    }

}

?>