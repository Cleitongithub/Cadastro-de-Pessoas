<?php

$hostname = "localhost";
$user = "root";    
$password = "";
$database = "cadastro";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if(!$conexao){
    print "falha na conexao com o banco de dados";
}

?>