<?php
include_once "getUsuarios.php";

 if(isset($_GET['id']))  {
    $id = $_GET['id'];

   $usuario = buscarUsuario($id);

    if(!$usuario){
        die("usuario inexistente");
    }else{
        excluirUsuario($id);
        header('Location: todosUsuarios.php');
    }

}

?>