<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$profissao = $_POST['profissao'];

$sql = "insert into usuarios (nome,email,profissao) values ('$nome','$email','$profissao')";
$salvar = mysqli_query($conexao,$sql);

$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);

?>

<!DOCTYPE>
<html lang="pt-br">
 <head>
     <meta charset="utf8">
     <title>Sistema de Cadastro</title>
     <link rel="stylesheet" href="_css/estilo.css">
 </head>
 <body>
    
    <div class="container">
        <nav>
         <ul class="menu">
            <a href="index.php"><li>Cadastro</li></a>
            <a href="consultas.php"><li>Consultas</li></a>
         </ul>
        </nav>
         <section>
            <h1>Confirmacao de Cadastro</h1> 
            <hr><br><br>
             
             <?php
             if($linhas == 1){
                 print "cadastro efetuado com sucesso";
             }else {
                 print "cadastro nao afetuado.<br> ja existe um usuario com este e-mail";
             }
             ?>
             
         </section>   
   </div>
 </body>
</html>
    
 
    
    
    
    
    