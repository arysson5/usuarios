<?php
include_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $newUsername = $_POST["newUsername"];
    $newPassword = $_POST["newPassword"];
    $email = $_POST["email"];

    criarUsuario($newUsername,$newPassword,$email);
}

function criarUsuario($newUsername,$newPassword,$email){

    $conn=conectarBanco();
    $sql = "select * from usuarios where usuario = '$newUsername'";  
    $resultado = $conn->query($sql);

    if($resultado->num_rows>0){
        echo "Usuario já cadastrado";
    }else{
        //autenticação mal sucedida
        $sql= "insert into usuarios (usuario,senha,email) values ('$newUsername','$newPassword','$email')";
        if($conn->query($sql)){
            echo "<script>alert('Usuário criado com sucesso!');</script>";
        }else{
            die("Erro: ".mysqli_connect_error());
        }
    } 
  
    

   
}

?>