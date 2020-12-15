<?php

include_once '../Factory/ConexionOperacion.php';

class UsuarioDAO {
    private function sql($sql) {
        $conex = new Conexion();
        $c = $conex->Conectar();
        return mysqli_query($c, $sql);
    }

//INICIAR SESIÓN
    public function ValidarUsuario($usuario, $password) {
        $consulta = "call ValidarUsuario('$usuario','$password')";
        return $this->sql($consulta);
    }

    public function CrearSesion($usuario, $password) {
        $consulta = "call CrearSesion('$usuario','$password')";
        return $this->sql($consulta);
    }

//LLENAR COMBOS
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

//INSERTAR USUSARIO Y PERSONA
    public function RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Contra) {
        $link = new Conexion();
        $conectar = $link->Conectar();
        $consula1 = "select * from usuario u, persona p where u.Usuario= '$Usuario' or p.correo_Persona = '$correo_Persona' and u.id_Persona=p.id_persona";
//        $consula1 = "call CamposRepetitivos ('$Usuario', '$correo_Persona');";
        $validacionu = mysqli_query($conectar, $consula1);
        $fila = mysqli_num_rows($validacionu); 
        if ($fila == 0) {
            $consulta = "call RegistrarUsuario('$No_Persona','$AP_Persona','$Edad_Persona','$Se_Persona','$Es_Civil_Persona','$Ti_Persona','$dire_Persona','$tele_Persona','$correo_Persona','$id_Iglesia','$Usuario','$Contra');";
            $retorno = mysqli_query($conectar, $consulta);
            echo 1;
        } else {
            $consulta2 = "select * from usuario where Usuario= '$Usuario'";
            $validacionu = mysqli_query($conectar, $consulta2);
            $fila2 = mysqli_num_rows($validacionu);
            if ($fila2 == 0) {
                echo 3;
            } else {
                echo 4;
            }
            $consulta3 = "select * from persona where correo_Persona = '$correo_Persona'";
            $validacionc = mysqli_query($conectar, $consulta3);
            $fila3 = mysqli_num_rows($validacionc);
            if ($fila3 == 0) {
                echo 2;
            } else {
                echo 5;
            }
            echo 0;
        }
    }

//VALIDAR CAPOS REPETIRIVOS (USUARIO, CORREO)
    public function ValidarUsuarioR($Usuario) {
        $link = new Conexion();
        $conectar = $link->Conectar();
        $consulta1 = "select * from usuario where Usuario= '$Usuario'";
        $validacionu = mysqli_query($conectar, $consulta1);
        $fila = mysqli_num_rows($validacionu);
        if ($fila == 0) {
            echo 3;
        } else {
            echo 0;
        }
    }

    public function ValidarCorreoR($correo_Persona) {
        $link = new Conexion();
        $conectar = $link->Conectar();
        $consulta = "select * from persona where correo_Persona = '$correo_Persona'";
        $validacionc = mysqli_query($conectar, $consulta);
        $fila = mysqli_num_rows($validacionc);
        if ($fila == 0) {
            echo 2;
        } else {
            echo 0;
        }
    }
    //CONTRASEÑA NUEVA
    public function recuperar_contra($correo_Persona, $Contra){
        $sql = "call Recuperar_Contra('$correo_Persona','$Contra')";
        if($consulta = $this->sql($sql)){
            if($row = mysqli_fetch_array($consulta)){
                return $id= trim($row[0]);
            }
        }
    }
}





?>
