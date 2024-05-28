<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "escola";

//Criar uma conexao com o banco de dados
$conexao = new mysqli($serverName,$userName,$password,$dbName);
//Verificar a conexão
if ($conexao->connect_error){
    die("Conexao com banco de dados falhou: " . $conexao->connect_error);
}
?>