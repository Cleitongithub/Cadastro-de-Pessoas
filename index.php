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
            <h1>Cadastro de Usuarios</h1> 
            <hr><br><br>
             
             <form method="post" action="processa.php">
                <input type="submit" value="salvar" class="btn">
                 <input type="reset" value="limpar" class="btn">
                 <br><br>
                 
                 Nome<br>
                 <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
                 Email<br>
                 <input type="email" name="email" class="campo" maxlength="50" required><br>
                 Profissao<br>
                 <input type="text" name="profissao" class="campo" maxlength="40" required><br>
             </form>
         </section>   
   </div>
 </body>
</html>