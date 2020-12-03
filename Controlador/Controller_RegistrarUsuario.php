<?php
include '../DAO/UsuarioDAO.php';
$opc = $_POST["opc"];
if ($opc === "ListarMision") {
    $objs= new UsuarioDAO();
    $var=$objs->ComboMision();
    echo json_encode($var);
}
if ($opc === "ListarDistrito") {    
    $objs= new UsuarioDAO();
    $id_Mision = $_POST["id_Mision"];
    $var=$objs->ComboDistrito($id_Mision);
    echo json_encode($var);
}
if ($opc === "ListarIglesia") {
    $objs= new UsuarioDAO();
    $id_Distrito = $_POST["id_Distrito"];
    $var=$objs->ComboIglesia($id_Distrito);
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
    $objs= new UsuarioDAO();
    $var=$objs->RegistrarUsuario($No_Persona, $AP_Persona, $Edad_Persona, $Se_Persona, $Es_Civil_Persona, $Ti_Persona, $dire_Persona, $tele_Persona, $correo_Persona, $id_Iglesia, $Usuario, $Contra);
    echo $var;
}
?>













