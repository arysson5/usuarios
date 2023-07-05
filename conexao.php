<?php
conectarBanco();
function conectarBanco(){
    $servername = "localhost";
    $username   ="root"; //usuario do banco de dados
    $password   ="";      //senha do usuario
    $dbname     ="login";  #nome do seu database
    $port = 3307;

    // criar conexao com banco 
    $conn = new mysqli($servername,$username,$password,$dbname,3307);

    if($conn->connect_error){
        die("Conexão falhou: ". $conn->connect_error);
    }

    $conn->set_charset("utf8");
    return $conn;
}


?>