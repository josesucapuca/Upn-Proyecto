<?php
include_once '../DAO/UsuarioDAO.php';
$opc = $_POST["opc"];
if ($opc === "ValidarUsuario") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    $objs = new UsuarioDAO();
    $var = $objs->ValidarUsuario($usuario, $password);
    $arr = array();
    if (mysqli_num_rows($var) != 0) {
            while ($row = mysqli_fetch_assoc($var)) {
                $arr[] = $row;
            }
        }
    echo json_encode($arr);
}
if ($opc === "CrearSesion") {
    $usuario = $_POST["a"];
    $password = $_POST["b"];
    //echo $Categoria.$Estado_Categoria.$Usuariocreacion;
    $objs = new UsuarioDAO();
    $var = $objs->CrearSesion($usuario, $password);
    $data = $var->fetch_object();
    session_start();
    $_SESSION["id_Usuario"] = $data->id_Usuario;
    $_SESSION["Usuario"] = $data->Usuario;
//  $_SESSION["Ti_Usuario"] = $data->Ti_Usuario;
    $_SESSION["id_Persona"] = $data->id_Persona;
    $_SESSION["Persona"] = $data->Persona;
    $_SESSION["Edad_Persona"] = $data->Edad_Persona;
    $_SESSION["Se_Persona"] = $data->Se_Persona;
    $_SESSION["Es_Civil_Persona"] = $data->Es_Civil_Persona;
    $_SESSION["Ti_Persona"] = $data->Ti_Persona;
    $_SESSION["id_Iglesia"] = $data->id_Iglesia;
    $_SESSION["Nombre_Iglesia"] = $data->Nombre_Iglesia;
    $_SESSION["id_Distrito"] = $data->id_Distrito;
    $_SESSION["id_Mision"] = $data->id_Mision;
    $_SESSION["id_Uniones"] = $data->id_Uniones;
    $_SESSION["id_Division"] = $data->id_Division;
    echo "ok";
}
if ($opc === "SalirSesion") {
    session_start();
    session_destroy();
}

if ($opc === "ListarMision") {

    $objs = new UsuarioDAO();

    $var = $objs->ComboMision();
    $result = array();
    //looping through all the records fetched
    $i=0;
    while($row = $var->fetch_object()){
        $result[$i]["id_Mision"]=$row->id_Mision;
        $result[$i]["No_Mision"]=utf8_encode($row->No_Mision);
        $i++;
    }
    echo json_encode($result,JSON_UNESCAPED_UNICODE);
}
if ($opc === "ListarDistrito") {
    $objs = new UsuarioDAO();
    $id_Mision = $_POST["id_Mision"];
    $var = $objs->ComboDistrito($id_Mision);
    echo json_encode($var);
}
if ($opc === "ListarIglesia") {
    $objs = new UsuarioDAO();
    $id_Distrito = $_POST["id_Distrito"];
    $var = $objs->ComboIglesia($id_Distrito);
    echo json_encode($var);
}
if ($opc === "RegistrarUsuario") {
    $No_Persona = strtoupper($_POST['No_Persona']);
    $AP_Persona = strtoupper($_POST['AP_Persona']);
    $Edad_Persona = strtoupper($_POST['Edad_Persona']);
    $Se_Persona = strtoupper($_POST['Se_Persona']);
    $Es_Civil_Persona = strtoupper($_POST['Es_Civil_Persona']);
    $Ti_Persona = strtoupper($_POST['Ti_Persona']);
    $dire_Persona = strtoupper($_POST['dire_Persona']);
    $tele_Persona = strtoupper($_POST['tele_Persona']);
    $correo_Persona = strtoupper($_POST['correo_Persona']);
    $id_Iglesia = strtoupper($_POST['id_Iglesia']);
    $Usuario = strtoupper($_POST['Usuario']);
    $Contra = strtoupper($_POST['Contra']);
//    $id_Persona = strtoupper($_POST['id_Persona']);
    $objs = new UsuarioDAO();
    $var = $objs->RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Contra);
    echo $var;
}
if ($opc === "ValidarUsuarioR") {
    $Usuario = strtoupper($_POST['Usuario']);
    $objs = new UsuarioDAO();
    $var = $objs->ValidarUsuarioR($Usuario);
    echo $var;
}
if ($opc === "ValidarCorreoR") {
    $correo_Persona = strtoupper($_POST['correo_Persona']);
    $objs = new UsuarioDAO();
    $var = $objs->ValidarCorreoR($correo_Persona);
    echo $var;
}
function utf8_converter($array){
      array_walk_recursive($array, function(&$item){
          $item = utf8_encode( $item ); 
      });
      return json_encode( $array );
}
//mysqli_close($conexion);
?>
