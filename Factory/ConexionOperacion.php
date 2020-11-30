<?php

class Conexion {

    private $servername = "localhost";
    private $user = "root";
    private $password = "12345678";
    private $dbname = "proyecto_upn";
    function Conectar() {
        return mysqli_connect($this->servername, $this->user, $this->password, $this->dbname);
    }
}

?>
