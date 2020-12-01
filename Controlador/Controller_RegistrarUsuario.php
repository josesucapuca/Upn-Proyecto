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

?>













